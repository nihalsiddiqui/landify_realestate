<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:role-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function list()
    {
        return view('second-admin.pages.role.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Role::all();
        return Datatables::of($tags)
            ->addColumn('created_at', function ($row) {
                return $row->created_at;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('action', function ($row) {
                $button = '';
                ($row->name === 'super-admin') ? '' : (!auth()->user()->can('role-edit') ? '' : $button = '<a type="button" name="edit" href="'.route('admin.role.edit',$row->id).'" class="edit btn btn-primary btn-sm">Edit</a>');
                ($row->name === 'super-admin' || $row->name === 'agent') ? '' : (!auth()->user()->can('role-delete') ? '' : $button .= '<form id="del-form-'.$row->id.'"  action="'.route('admin.role.delete',$row->id).'" method="post">
                                '.csrf_field().'
                                '.method_field('POST').'
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
                                ');
                return $button;
            })
            ->rawColumns(['created_at', 'name','action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('second-admin.pages.role.addRole', [
            'permissions' => $permissions
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
        $request->validate([
            'name' => ['required', 'unique:roles,name'],
            'permissions' => ['required', 'array']
        ]);

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'admin'
        ]);
        $role->syncPermissions($request->permissions);

        return redirect()->back()->withSuccess($role->name . ' successfully created.');
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
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        if($role->name === 'super-admin') {
            return redirect()->back()->with('error', $role->name . ' role cannot be edit.');
        }

        return view('second-admin.pages.role.editRole', [
            'role' => $role,
            'permissions' => $permissions
        ]);
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
        $request->validate([
            'name' => ['required', 'unique:roles,name,' . $id],
            'permissions' => ['required', 'array']
        ]);

        $role = Role::findOrFail($id);

        if($role->name === 'super-admin') {
            return redirect()->back()->with('error', $role->name . ' role cannot be update.');
        }

        $role->update([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permissions);

        return redirect()->route('admin.role.list')->withSuccess($role->name . ' successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        if($role->name === 'super-admin' || $role->name === 'agent') {
            return redirect()->back()->with('error', $role->name . ' role cannot be delete.');
        }

        $role->delete();

        return redirect()->back()->withSuccess('Role successfully deleted.');
    }
}
