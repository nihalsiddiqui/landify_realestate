<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Town;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TownController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:town-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:town-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:town-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:town-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $town = Town::all();
        return Datatables::of($town)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('city_id', function ($row) {
                return $row->city->name;
            })
            ->addColumn('latitude', function ($row) {
                return $row->latitude;
            })
            ->addColumn('longitude', function ($row) {
                return $row->longitude;
            })
            ->addColumn('description', function ($row) {
                return $row->description;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('town-edit') ? '' :
                    (checkAgent($row) ? '' : '<a type="button" href="' . route('town.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('town-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('town.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'state_id', 'description', 'action'])
            ->make(true);
    }

    //show all towns
    public function allShow()
    {
        return view('second-admin.pages.town.allTowns');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view("second-admin.pages.town.addTown", compact('cities'));
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
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'city_id' => 'required|exists:cities,id'
        ]);
        $town = new Town;
        $town->name = $request->name;
        $town->city_id = $request->city_id;
        $town->description = $request->description;
        $town->latitude = $request->latitude;
        $town->longitude = $request->longitude;
        $town->admin_id = auth()->id();
        $town->save();
        return redirect(route('town.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Town $town
     * @return \Illuminate\Http\Response
     */
    public function show(Town $town)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Town $town
     * @return \Illuminate\Http\Response
     */
    public function edit(Town $town)
    {
        $result = checkAgent($town);

        if ($result) {
            return redirect()->back();
        }

        $cities = City::all();
        return view('second-admin.pages.town.editTown', compact('town', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Town $town
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Town $town)
    {
        $result = checkAgent($town);

        if ($result) {
            return redirect()->back();
        }

        $this->validate($request, [
            'name' => 'Required',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'city_id' => 'required|exists:cities,id'
        ]);
        $town->name = $request->name;
        $town->city_id = $request->city_id;
        $town->description = $request->description;
        $town->latitude = $request->latitude;
        $town->longitude = $request->longitude;
        $town->save();
        return redirect(route('town.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Town $town
     * @return \Illuminate\Http\Response
     */
    public function destroy(Town $town)
    {
        $result = checkAgent($town);

        if ($result) {
            return redirect()->back();
        }

        $town->delete();
        return redirect(route('town.list'));

    }
}
