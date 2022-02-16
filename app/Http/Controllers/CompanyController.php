<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyRole;
use App\Models\Town;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:company-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:company-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:company-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:company-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        return Datatables::of($company)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })
            ->addColumn('town_id', function ($row) {
                return $row->town->name;
            })
            ->addColumn('company_role_id', function ($row) {
                return $row->ComponyRole->name;
            })

            ->addColumn('description', function ($row) {
                return "$row->description";
            })

            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('company-edit') ? '' : '<a type="button" name="edit" href="' . route('company.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('company-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('company.destroy', $row->id) . '" method="post">
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

    //company all list
    public function allShow()
    {
        return view('second-admin.pages.Company.allCompany');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = Town::all();
        $companyRoles = CompanyRole::all();
        return view('second-admin.pages.Company.addCompany', compact('towns', 'companyRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        dd($request->all());
        $this->validate($request, [
            'name' => 'Required',
            'address_line_1' => 'Required',
            // 'address_line_2' => 'Required',
            // 'description' => 'Required',
            //            'slug' => 'Required',

        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->address_line_1 = $request->address_line_1;
        $company->address_line_2 = $request->address_line_2;
        $company->town_id = $request->town_id;
        $company->company_role_id = $request->company_role_id;
        $company->description = $request->description;

        $company->save();
        return redirect(route('company.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $towns = Town::all();
        $companyRoles = CompanyRole::all();
        return view('second-admin.pages.Company.editCompany', compact('company', 'towns', 'companyRoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'name' => 'Required',
            'address_line_1' => 'Required',
            // 'address_line_2' => 'Required',
            // 'description' => 'Required',
            //            'slug' => 'Required',

        ]);
        //        $company = new Company();
        $company->name = $request->name;
        $company->address_line_1 = $request->address_line_1;
        $company->address_line_2 = $request->address_line_2;
        $company->town_id = $request->town_id;
        $company->company_role_id = $request->company_role_id;
        //        $companyRole->slug = $request->slug;
        $company->description = $request->description;

        $company->save();
        return redirect(route('company.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect(route('company.list'));
    }
}
