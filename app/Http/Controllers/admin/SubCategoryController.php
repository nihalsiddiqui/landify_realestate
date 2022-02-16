<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubCategoryController extends Controller
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
        $subcategories = SubCategories::all();
        return Datatables::of($subcategories)
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
            ->addColumn('category_id', function ($row) {
                return $row->category_id;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('subcategory-edit') ? '' : (checkAgent($row) ? '' : '<a type="button" href="' . route('subcategory.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>');
                $button .= !auth()->user()->can('subcategory-delete') ? '' : (checkAgent($row) ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('subcategory.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'slug','category_id', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories = Category::all();
        return view('second-admin.pages.SubCategory.addSubCategory',compact('Categories'));
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
            'slug' => 'Required'
        ]);
        $subcategory = new SubCategories ;
        $subcategory->name = $request->name;
        $subcategory->slug = $request->slug;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        return redirect(route('subcategory.list'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    public function allShow()
    {
        return view('second-admin.pages.SubCategory.allSubCategories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategories::where('id', $id)->first();
        $categories = Category::all();

        $result = checkAgent($subcategory);

        if ($result) {
            return redirect()->back();
        }

        return view('second-admin.pages.SubCategory.editSubCategory', compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'Required',
        ]);
        $subcategory = SubCategories::find($id);

        $result = checkAgent($subcategory);

        if ($result) {
            return redirect()->back();
        }

        $subcategory->name = $request->name;
        $subcategory->slug = $request->slug;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        return redirect(route('subcategory.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategories::where('id', $id)->first();

        $result = checkAgent($subcategory);

        if ($result) {
            return redirect()->back();
        }

        $subcategory->delete();

        return redirect()->back();
    }
}
