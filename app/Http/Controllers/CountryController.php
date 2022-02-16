<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:country-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:country-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:country-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:country-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return Datatables::of($countries)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })
            ->addColumn('description', function ($row) {
                return " <small class=''>$row->description</small";
            })

            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('country-edit') ? '' : '<a type="button" name="edit" href="'.route('country.edit',$row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('country-delete') ? '' : '<form id="del-form-'.$row->id.'"  action="'.route('country.destroy',$row->id).'" method="post">
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
            ->rawColumns(['id', 'name','description','action'])
            ->make(true);

    }

    //show country list
    public function allShow(){
        return view('second-admin.pages.country.allCountries');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.country.addCountry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'Required',
            'description' => 'Required'
        ]);
        $country = new Country;
        $country->name = $request->name;
        $country->description = $request->description;
        $country->save();
        return redirect(route('country.list'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
//
        return view('second-admin.pages.country.editCountry',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $this->validate($request,[
            'name' => 'Required',
            'description' => 'Required'
        ]);
        $country->name = $request->name;
        $country->description = $request->description;
        $country->update();
        return redirect(route('country.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect(route('country.list'));
    }
}
