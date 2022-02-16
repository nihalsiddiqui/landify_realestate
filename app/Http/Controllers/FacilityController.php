<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class FacilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:facility-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:facility-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:facility-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:facility-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facility = Facility::get();
        return Datatables::of($facility)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('type', function ($row) {
                return $row->type;
            })
            ->addColumn('slug', function ($row) {
                return $row->slug;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('facility-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('facility.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('facility-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('facility.destroy', $row->id) . '" method="post">
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
        return view('second-admin.pages.facility.allFacility');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.facility.addFacility');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = Facility::where('type', $request->type)->where('slug',$request->slug)->first();
        if ($check) {
            Redirect::back()->with([
                'message' => 'Facility Already Found'
            ]);

        }
        $this->validate($request, [
            'type' => 'Required',
            'slug' => 'nullable|unique:facilities,slug',
        ]);
        $facility = new Facility;
        $facility->type = $request->type;
        $facility->slug = $request->slug;
        $facility->admin_id = \auth()->id();
        $facility->save();
        return redirect(route('facility.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        $result = checkAgent($facility);

        if ($result) {
            return redirect()->back();
        }

        return view('second-admin.pages.facility.editFacility', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $result = checkAgent($facility);

        if ($result) {
            return redirect()->back();
        }

        $this->validate($request, [
            'type' => 'Required',
            'slug' => 'nullable|unique:facilities,slug',
        ]);
//        $facility = new Facility;
        $facility->type = $request->type;
        $facility->slug = $request->slug;
        $facility->save();
        return redirect(route('facility.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        $result = checkAgent($facility);

        if ($result) {
            return redirect()->back();
        }

        $facility->delete();
        return redirect(route('facility.list'));
    }
}
