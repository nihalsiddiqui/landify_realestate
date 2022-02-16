<?php

namespace App\Http\Controllers\admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class categoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:category-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        return Datatables::of($categories)
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
                $button = !auth()->user()->can('category-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('category.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('category-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('category.destroy', $row->id) . '" method="post">
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.category.addCategory');
    }

    public function allShow()
    {
        return view('second-admin.pages.category.allCategory');
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
        $category = new category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->for_property = $request->for_property;
        $category->admin_id = \auth()->id();
        $category->save();
        return redirect(route('category.list'));
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
        $category = category::where('id', $id)->first();

        $result = checkAgent($category);

        if ($result) {
            return redirect()->back();
        }

        return view('second-admin.pages.category.editCategory', compact('category'));
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
            'slug' => 'Required',
        ]);
        $category = category::find($id);

        $result = checkAgent($category);

        if ($result) {
            return redirect()->back();
        }

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->for_property = $request->for_property;
        $category->save();
        return redirect(route('category.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::where('id', $id)->first();

        $result = checkAgent($category);

        if ($result) {
            return redirect()->back();
        }

        $category->delete();

        return redirect()->back();
    }
}
