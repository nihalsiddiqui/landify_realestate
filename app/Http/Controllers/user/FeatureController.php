<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\Feature;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature = Feature::where('user_id',\auth()->id())->get();
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
                $button = '<a type="button" href="' . route('user.feature.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= '<form id="del-form-' . $row->id . '"  action="' . route('user.feature.destroy', $row->id) . '" method="post">
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

    public function allShow()
    {
        return view('user.Feature.allFeature');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.Feature.addFeature',);
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
            'name' => 'Required',
            'slug' => 'Required',
            'code' => 'Required',
        ]);
        $feature = new Feature;
        $feature->name = $request->name;
        $feature->slug = $request->slug;
        $feature->code = $request->code;
        if (Auth::user() instanceof admin){
            $feature->admin_id = \auth()->id();
        }
        if (Auth::user() instanceof User){
            $feature->user_id = \auth()->id();
        }
        $feature->save();
        return redirect(route('user.feature.list'));
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
    public function edit(Feature $feature)
    {
//        dd($feature->id);
        if (!$feature->user_id === \auth()->id()) {
            return redirect()->back();
        }

        return view('user.Feature.editFeature', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        if (!$feature->user_id === \auth()->id()) {
            return redirect()->back();
        }

        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'Required',
            'code' => 'Required',
        ]);
//        $feature = new Feature;
        $feature->name = $request->name;
        $feature->slug = $request->slug;
        $feature->code = $request->code;
        $feature->save();
        return redirect(route('user.feature.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        if (!$feature->user_id === \auth()->id()) {
            return redirect()->back();
        }
        $feature->delete();
        return redirect(route('user.feature.list'));
    }
}
