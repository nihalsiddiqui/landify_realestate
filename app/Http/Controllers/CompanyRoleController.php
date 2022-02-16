<?php

namespace App\Http\Controllers;

use App\Models\CompanyRole;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:company-role-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:company-role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:company-role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:company-role-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyRole = CompanyRole::all();
        return Datatables::of($companyRole)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })

            ->addColumn('description', function ($row) {
                return "$row->description";
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('company-role-edit') ? '' : '<a type="button" name="edit" href="' . route('companyRole.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('company-role-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('companyRole.destroy', $row->id) . '" method="post">
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
            //
            //
            ->rawColumns(['id', 'name', 'state_id', 'description', 'action'])
            ->make(true);
    }

    //  all company Role lists
    public function allShow()
    {
        return view('second-admin.pages.CompanyRole.allCompanyRoles');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.CompanyRole.addCompanyRole');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'Required',
            // 'description' => 'Required',
            //            'slug' => 'Required',

        ]);
        $companyRole = new CompanyRole;
        $companyRole->name = $request->name;
        //        $companyRole->slug = $request->slug;
        $companyRole->description = $request->description;

        $companyRole->save();
        return redirect(route('company.role.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyRole  $companyRole
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyRole $companyRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyRole  $companyRole
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyRole $companyRole)
    {
        return view('second-admin.pages.CompanyRole.editCompanyRole', compact('companyRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyRole  $companyRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyRole $companyRole)
    {
        $this->validate($request, [
            'name' => 'Required',
            // 'description' => 'Required',
            //            'slug' => 'Required',

        ]);
        //        $companyRole = new CompanyRole;
        $companyRole->name = $request->name;
        //        $companyRole->slug = $request->slug;
        $companyRole->description = $request->description;

        $companyRole->save();
        return redirect(route('company.role.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyRole  $companyRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyRole $companyRole)
    {
        $companyRole->delete();
        return redirect(route('company.role.list'));
    }
}
