<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:city-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:city-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:city-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::all();
        return Datatables::of($city)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('state_id', function ($row) {
                return $row->state_id;
            })
            ->addColumn('description', function ($row) {
                return $row->description;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('city-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('city.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('city-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('city.destroy', $row->id) . '" method="post">
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
                                ');
                return $button;

            })
//
//
            ->rawColumns(['id', 'name', 'state_id', 'description', 'action'])
            ->make(true);
    }

    //show all cities
    public function allShow()
    {
        return view('second-admin.pages.city.allCities');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        return view('second-admin.pages.city.addCity', compact('states'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'Required',
            'description' => 'Required',
            'state_id' => 'Required',
        ]);
        $state = new City;
        $state->name = $request->name;
        $state->state_id = $request->state_id;
        $state->description = $request->description;
        $state->admin_id = auth()->id();
        $state->save();
//        $state->country()->sync($request->country);
        return redirect(route('city.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $result = checkAgent($city);

        if ($result) {
            return redirect()->back();
        }

        $states = State::all();
        return view('second-admin.pages.city.editCity', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $result = checkAgent($city);

        if ($result) {
            return redirect()->back();
        }

        $this->validate($request, [
            'name' => 'Required',
            'description' => 'Required'
        ]);
        $city->name = $request->name;
        $city->state_id = $request->state_id;
        $city->description = $request->description;
        $city->save();
//        $state->country()->sync($request->country);
        return redirect(route('city.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $result = checkAgent($city);

        if ($result) {
            return redirect()->back();
        }

        $city->delete();
        return redirect(route('city.list'));
    }
}
