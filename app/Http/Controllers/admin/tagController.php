<?php

namespace App\Http\Controllers\admin;

use App\Models\tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Yajra\DataTables\DataTables;

class tagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:tag-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:tag-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:tag-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:tag-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = tag::all();
        return Datatables::of($tags)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('slug', function ($row) {
                return $row->slug;
            })
            ->addColumn('forProperty', function ($row) {
                return $row->for_property;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('tag-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('tags.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('tag-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('tags.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'slug', 'forProperty', 'action'])
            ->make(true);
    }

    //tags List
    public function allShow()
    {
        return view('second-admin.pages.tag.allTags');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin/pages/tag/addTag');
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
            'slug' => 'Required'
        ]);
        $tag = new tag;
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->for_property = $request->for_property;
        $tag->admin_id = \auth()->id();
        $tag->save();
        return redirect(route('tags.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = tag::find($id);

        $result = checkAgent($tag);

        if ($result) {
            return redirect()->back();
        }

        return view('second-admin.pages.tag.editTag', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'Required'
        ]);
        $tag = tag::find($id);

        $result = checkAgent($tag);

        if ($result) {
            return redirect()->back();
        }

        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->for_property = $request->for_property;
        $tag->save();
        return redirect(route('tags.list'));
    }

    /**
     * Remove the specified resource from storeditage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = tag::where('id', $id)->first();

        $result = checkAgent($tag);

        if ($result) {
            return redirect()->back();
        }

        $tag->delete();

        return redirect()->back();
    }
}
