<?php

namespace App\Http\Controllers\admin;

use App\Notifications\PasswordToEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\City;
use File;
use Auth;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Notification;



class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:user-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = admin::all();
        return Datatables::of($admin)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('city_id', function ($row) {
                return " <small class=''>$row->city_id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })
            ->addColumn('email', function ($row) {
                return " <small class=''>$row->email</small";
            })
            ->addColumn('phone', function ($row) {
                return "$row->phone";
            })
            ->addColumn('image', function ($row) {
                $url = asset('users/' . $row->image);
                return '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('user-edit') ? '' : '<a type="button" name="edit" href="' . route('user.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('user-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('user.destroy', $row->id) . '" method="post">
                                ' . csrf_field() . '
                                ' . method_field('DELETE') . '
                                    <a onclick="
                                    if (confirm(' . '\'Are you sure to Delete?\'' . '))
                                    {
                                        event.preventDefault();
                                        document.getElementById(\'del-form-' . $row->id . '\').submit();
                                    }
                                    else{
                                        event.preventDefault();
                                    }
                                    "  class="delete btn btn-danger btn-sm ">Delete</a>
                                </form>
                                ';
                return $button;
            })
            ->rawColumns(['id', 'city_id', 'name', 'email', 'phone', 'image', 'action'])
            ->make(true);
    }

    // all user lists
    public function allShow()
    {
        return view('second-admin.pages.user.allUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $cities = City::all();

        return view('second-admin.pages.user.addUser', [
            'roles' => $roles,
            'cities' => $cities,

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->city);
        $this->validate($request, [
            'name' => 'Required',
            'email' => 'Required|unique:admins',
            'phone' => 'Required',
            'image' => 'Required',
            'roles' => ['required', 'array'],
            // 'cities' => ['required', 'array']

        ]);
        $password = rand(00000000, 99999999);
        $user = new admin;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city_id = $request->city;
        $user->password = bcrypt($password);
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->description = $request->description;

        if ($request->hasFile('image')) {
            $temp = $request->file('image');
            $image = $request->image->getClientOriginalName();
            $destination = 'users';
            $temp->move($destination, $image);
            $user->image = $image;
        }
        $user->save();
        $user->assignRole($request->roles);
        $userMail = $request->all();
        // $user->notify(new PasswordToEmail($password));
        Notification::route('mail', $request->email)
            ->notify(new PasswordToEmail($password, $userMail));
        return redirect(route('user.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = admin::findOrFail($id);
        if (!auth('admin')->user()->hasRole('super-admin') && $user->hasRole('super-admin')) {
            return redirect()->back()->with([
                'message' => 'Admin is not Deletable!'
            ]);
        }
        $roles = Role::all();
        $cities = City::all();
        return view('second-admin.pages.user.editUser', compact('user', 'roles', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'Required',
            'email' => 'Required',
            'phone' => 'Required',
            'roles' => ['Required', 'array'],
            // 'cities' => ['Required', 'array'],

        ]);

        $user = admin::find($id);

        if (!auth('admin')->user()->hasRole('super-admin') && $user->hasRole('super-admin')) {
            return redirect()->back()->with([
                'message' => 'Admin is not Deletable!'
            ]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->phone = $request->phone;
        if ($request->status) {
            $user->status = $request->status;
        } else {
            $user->status = 0;
        }
        $user->description = $request->description;

        if ($request->hasFile('image')) {
            $file = 'user' . $user->image;
            if (!empty($user->image)) {

                if (File::exists($file)) {
                    unlink($file);
                }
            }
            $temp = $request->file('image');
            $image = $request->image->getClientOriginalName();
            $destination = 'users';
            $temp->move($destination, $image);
            $user->image = $image;
        }
        $user->city_id = $request->city;
        $user->save();
        $user->syncRoles($request->roles);
        return redirect(route('user.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = admin::find($id);
        if (!auth('admin')->user()->hasRole('super-admin') && $user->hasRole('super-admin')) {
            return redirect()->back()->with([
                'message' => 'Admin is not Deletable!'
            ]);
        }
        $image = 'user' . $user->image;

        if (File::exists($image)) {
            unlink($image);
        }
        $user->delete();
        return redirect()->back();
    }
}
