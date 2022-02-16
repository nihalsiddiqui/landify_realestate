<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\Appliance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appliance = Appliance::where('user_id',\auth()->id())->get();
        return Datatables::of($appliance)
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('slug', function ($row) {
                return $row->slug;
            })
            ->addColumn('action', function ($row) {
                $button = '<a type="button" href="' . route('user.appliance.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= '<form id="del-form-' . $row->id . '"  action="' . route('user.appliance.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id','name','slug','action'])
            ->make(true);
    }

    public function allShow(){
        return view('user.Appliance.allAppliance');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.Appliance.addAppliance');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable',
            'slug' => 'required|unique:appliances,slug',
            'description' => 'nullable',
        ]);
        $appliance = new Appliance;
            $appliance->name = $request->name;
            $appliance->slug = $request->slug;
            $appliance->description = $request->description;
            if (Auth::user() instanceof admin){
                $appliance->admin_id = \auth()->id();
            }
            if (Auth::user() instanceof User){
                $appliance->user_id = \auth()->id();
            }
            $appliance->save();

        return redirect(route('user.appliance.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appliance $appliance)
    {

        if (!$appliance->user_id === \auth()->id()){
            return redirect()->back();
        }
        return view('user.Appliance.editAppliance',['appliance' =>$appliance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'nullable',
            'slug' => 'required|unique:appliances,slug,'.$id,
            'description' => 'nullable',
        ]);

        $appliance = Appliance::findOrFail($id);
        $appliance->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
        return redirect(route('user.appliance.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appliance $appliance)
    {
        if (!$appliance->user_id === \auth()->id()){
            return redirect()->back();
        }
        $appliance->delete();
        return redirect(route('user.appliance.list'));
    }
}
