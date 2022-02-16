<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\category;
use App\Models\Project;
use App\Models\Property;
use App\Models\tag;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:property-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:property-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:property-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:property-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::get();
        if (auth()->user()->hasRole('agent')) {
            $property = Property::where('admin_id', auth()->id())->get();
        }
        return Datatables::of($property)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('title', function ($row) {
                return $row->title;
            })
            ->addColumn('min_price', function ($row) {
                return $row->min_price;
            })
            ->addColumn('max_price', function ($row) {
                return $row->max_price;
            })->addColumn('no_of_floors', function ($row) {
                return $row->no_of_floors;
            })
            ->addColumn('description', function ($row) {
                return $row->description;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('property-edit') ? '' : '<a type="button" href="' . route('property.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('property-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('property.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'title', 'description', 'min_price', 'max_price', 'no_of_floors', 'action'])
            ->make(true);
    }

    public function allShow()
    {
        return view('second-admin.pages.property.allProperty');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = Town::all();
        $categories = category::where("for_property", 1)->get();
        $admins = admin::all();
        $projects = Project::all();

        return view('second-admin.pages.property.addProperty', compact('towns', 'categories', 'admins', 'projects'));
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
            'title' => 'Required',
            'address_line_1' => 'Required',
            'latitude' => 'Required',
            'longitude' => 'Required',
            // 'radius' => 'Required',
            'town_id' => 'Required',
            'min_price' => 'Required',
            // 'max_price' => 'Required',
            // 'no_of_floors' => 'Required',
            // 'description' => 'Required',
            'project_ids' => ['required', 'array']
        ]);

        $property = new Property;
        $property->title = $request->title;
        $property->slug = Str::slug($request->title, '-');
        $property->address_line_1 = $request->address_line_1;
        $property->address_line_2 = $request->address_line_2;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->radius = $request->radius;
        $property->town_id = $request->town_id;
        $property->min_price = $request->min_price;
        $property->max_price = $request->max_price;
        $property->no_of_floors = $request->no_of_floors;
        $property->description = $request->description;
        $property->category_id = $request->category_id;
        $property->created_by = $request->created_by;
        $property->admin_id = auth()->id();
        //        $property->updated_by = 0;

        $property->save();
        $property->projects()->attach($request->project_ids);
        //        $property->category()->sync($request->category_id);
        return redirect(route('property.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**$result = checkAgent($feature);
     *
     * if ($result) {
     * return redirect()->back();
     * }
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $result = checkAgent($property);

        if ($result) {
            return redirect()->back();
        }

        $towns = Town::all();
        $categories = category::where("for_property", 1)->get();
        $admins = admin::all();
        $projects = Project::all();

        return view('second-admin.pages.property.editProperty', compact('property', 'towns', 'categories', 'admins', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $result = checkAgent($property);

        if ($result) {
            return redirect()->back();
        }

        $this->validate($request, [
            'title' => 'Required',
            'address_line_1' => 'Required',
            'latitude' => 'Required',
            'longitude' => 'Required',
            // 'radius' => 'Required',
            'town_id' => 'Required',
            'min_price' => 'Required',
            // 'max_price' => 'Required',
            // 'no_of_floors' => 'Required',
            // 'description' => 'Required',
            'project_ids' => ['required', 'array']
        ]);
        //        $property = new Property;
        $property->title = $request->title;
        $property->address_line_1 = $request->address_line_1;
        $property->address_line_2 = $request->address_line_2;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->radius = $request->radius;
        $property->town_id = $request->town_id;
        $property->min_price = $request->min_price;
        $property->max_price = $request->max_price;
        $property->no_of_floors = $request->no_of_floors;
        $property->description = $request->description;
        $property->category_id = $request->category_id;
        $property->created_by = $request->created_by;
        $property->save();

        $property->projects()->sync($request->project_ids);
        return redirect(route('property.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $result = checkAgent($property);

        if ($result) {
            return redirect()->back();
        }

        $property->delete();
        return redirect(route('property.list'));
    }
}
