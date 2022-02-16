<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ApplianceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:appliance-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:appliance-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:appliance-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:appliance-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appliance = Appliance::all();
        return Datatables::of($appliance)
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('slug', function ($row) {
                return $row->slug;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('appliance-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('appliance.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('appliance-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('appliance.destroy', $row->id) . '" method="get">
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
            ->rawColumns(['id', 'name', 'slug', 'action'])
            ->make(true);
    }

    //list function
    public function list()
    {
        return view('second-admin.pages.Appliance.allAppliance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.Appliance.addAppliance');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable',
            'slug' => 'required|unique:appliances,slug',
            'description' => 'nullable',
        ]);
        $appliance = Appliance::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'admin_id' => \auth()->id(),
        ]);
        return redirect(route('appliance.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function show(Appliance $appliance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appliance = Appliance::findOrFail($id);
        $result = checkAgent($appliance);
        if ($result) {
            return redirect()->back();
        }
        return view('second-admin.pages.Appliance.editAppliance', ['appliance' => $appliance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'nullable',
            'slug' => 'required|unique:appliances,slug,' . $id,
            'description' => 'nullable',
        ]);

        $appliance = Appliance::findOrFail($id);
        $appliance->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
        return redirect(route('appliance.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appliance = Appliance::findOrFail($id);
        $result = checkAgent($appliance);
        if ($result) {
            return redirect()->back();
        }
        $appliance->delete();
        return redirect(route('appliance.list'));
    }
}
