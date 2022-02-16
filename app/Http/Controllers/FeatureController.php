<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:feature-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:feature-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:feature-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:feature-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature = Feature::get();
        return Datatables::of($feature)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('slug', function ($row) {
                return $row->slug;
            }
            )->addColumn('code', function ($row) {
                return $row->code;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('feature-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('features.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('feature-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('features.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'type', 'slug', 'action'])
            ->make(true);
    }

    public function allShow()
    {
        return view('second-admin.pages.feature.allFeature');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.feature.addFeature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = Feature::where('name', $request->name)->where('slug',$request->slug)->first();
        if ($check) {
            Redirect::back()->with([
                'message' => 'Facility Already Found'
            ]);

        }
        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'nullable|unique:features,slug',
            'code' => 'Required',
        ]);
        $feature = new Feature;
        $feature->name = $request->name;
        $feature->slug = $request->slug;
        $feature->code = $request->code;
        $feature->admin_id = \auth()->id();
        $feature->save();
        return redirect(route('features.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Feature $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Feature $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $result = checkAgent($feature);
//        dd($result);

        if ($result) {
            return redirect()->back();
        }

        return view('second-admin.pages.feature.editFeature', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Feature $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $result = checkAgent($feature);

        if ($result) {
            return redirect()->back();
        }

        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'nullable|unique:features,slug',
            'code' => 'Required',
        ]);
//        $feature = new Feature;
        $feature->name = $request->name;
        $feature->slug = $request->slug;
        $feature->code = $request->code;
        $feature->save();
        return redirect(route('features.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Feature $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $result = checkAgent($feature);

        if ($result) {
            return redirect()->back();
        }

        $feature->delete();
        return redirect(route('features.list'));

    }
}
