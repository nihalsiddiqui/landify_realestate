<?php

namespace App\Http\Controllers\admin;

use App\Models\category;
use App\Models\permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Yajra\DataTables\DataTables;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('permissions.view')){
            $permissions = permission::all();
            return Datatables::of($permissions)
                ->addIndexColumn()
                ->addColumn('id', function ($row) {
                    return " <small class=''>$row->id</small";
                })
                ->addColumn('name', function ($row) {
                    return " <small class=''>$row->name</small";
                })
                ->addColumn('for', function ($row) {
                    return " $row->for";
                })

                ->addColumn('action', function ($row) {
                    $button = '<a type="button" name="edit" href="'.route('permission.edit',$row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                    $button .= '<form id="del-form-'.$row->id.'"  action="'.route('permission.destroy',$row->id).'" method="post">
                                '.csrf_field().'
                                '.method_field('DELETE').'
                                    <a onclick="
                                    if (confirm('.'\'Are you sure to Delete?\''.'))
                                    {
                                        event.preventDefault();
                                        document.getElementById(\'del-form-'.$row->id.'\').submit();
                                    }
                                    else{
                                        event.preventDefault();
                                    }
                                    "  class="delete btn btn-danger btn-sm ">Delete</a>
                                </form>
                                ';
                    return $button;
                })
                ->rawColumns(['id', 'name','slug','forProperty','action'])
                ->make(true);

        }
        return redirect(route('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('permissions.view')){
            return view('second-admin.pages.permission.addPermission');
        }
        return redirect(route('home'));

    }

    //permission list page show

    public function allShow(){
        return view('second-admin.pages.permission.allPermission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->can('permissions.view')){
            $this->validate($request,[
               'name' => 'Required|unique:permissions',
               'for' => 'Required'
            ]);
            $permission = new permission;
            $permission->name = $request->name;
            $permission->for = $request->for;
            $permission->save();
            return redirect(route('permission.list'));
        }
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        if (Auth::user()->can('permissions.view')){
             $permission = permission::find($permission->id);
             return view('second-admin.pages.permission.editPermission',compact('permission'));
        }
        return redirect(route('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
        if (Auth::user()->can('permissions.view')){
            $this->validate($request,[
                'name' => 'Required',
                'for' => 'Required'
            ]);
            $permission = permission::find($permission -> id);
            $permission->name = $request->name;
            $permission->for = $request->for;
            $permission->save();
            return redirect(route('permission.list'));
        }
        return redirect(route('home'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        if (Auth::user()->can('permissions.view')){
            permission::where('id',$permission->id)->delete();
            return redirect()->back();
        }
        return redirect(route('home'));
    }
}
