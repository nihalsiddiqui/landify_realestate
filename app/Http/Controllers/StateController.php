<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:state-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:state-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:state-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:state-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all();
        return Datatables::of($state)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })
            ->addColumn('country_id', function ($row) {
                return " <small class=''>$row->country_id</small";
            })
            ->addColumn('description', function ($row) {
                return "$row->description";
            })

            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('state-edit') ? '' : '<a type="button" name="edit" href="'.route('state.edit',$row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('state-delete') ? '' : '<form id="del-form-'.$row->id.'"  action="'.route('state.destroy',$row->id).'" method="post">
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
//
//
            ->rawColumns(['id', 'name','country_id','description','action'])
            ->make(true);
    }

    public function allShow(){
        return view('second-admin.pages.state.allState');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view("second-admin.pages.state.addState",compact('countries'));
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
        $state = new State;
        $state->name = $request->name;
        $state->country_id = $request->country_id;
        $state->description = $request->description;
        $state->save();
//        $state->country()->sync($request->country);
        return redirect(route('state.list'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        $countries = Country::all();
        return view('second-admin.pages.state.editState',compact('state','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $this->validate($request,[
            'name' => 'Required',
            'description' => 'Required'
        ]);
        $state->name = $request->name;
        $state->country_id = $request->country_id;
        $state->description = $request->description;
        $state->save();
        return redirect(route('state.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect(route('state.list'));
    }
}
