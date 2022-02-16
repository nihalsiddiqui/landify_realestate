<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\Facility;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facility = Facility::where('user_id',auth()->id())->get();
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
                $button = '<a type="button" href="' . route('user.facility.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= '<form id="del-form-' . $row->id . '"  action="' . route('user.facility.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'type', 'slug', 'action'])
            ->make(true);
    }

    public function allShow(){
        return view('user.Facility.allFacility');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.Facility.addFacility');
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
            'type' => 'Required',
            'slug' => 'Required|unique:facilities,slug',

        ]);
        $facility = new Facility;
        $facility->type = $request->type;
        $facility->slug = $request->slug;
        if (Auth::user() instanceof admin){
            $facility->admin_id = \auth()->id();
        }
        if (Auth::user() instanceof User){
            $facility->user_id = \auth()->id();
        }
        $facility->save();
        return redirect(route('user.facility.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        if(!$facility->user_id == \auth()->id()){
            return redirect()->back();
        }

        return view('user.Facility.editFacility', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        if (!$facility->user_id === \auth()->id()){
            return redirect()->back();
        }
        $this->validate($request, [
            'type' => 'Required',
            'slug' => 'Required',

        ]);
//        $facility = new Facility;
        $facility->type = $request->type;
        $facility->slug = $request->slug;
        $facility->save();
        return redirect(route('user.facility.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        if (!$facility->user_id === \auth()->id()){
            return redirect()->back();
        }
        $facility->delete();
        return redirect(route('user.facility.list'));
    }
}
