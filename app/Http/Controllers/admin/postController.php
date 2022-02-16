<?php

namespace App\Http\Controllers\admin;

use App\Models\post;
use App\Models\category;
use App\Models\tag;
use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:post-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();

        return Datatables::of($posts)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('title', function ($row) {
                return " <small class=''>$row->title</small";
            })
            ->addColumn('slug', function ($row) {
                return " <small class=''>$row->slug</small";
            })
            ->addColumn('postedBy', function ($row) {
                return "$row->posted_by";
            })
            ->addColumn('image', function ($row) {
                $url = asset('images/posts/' . $row->image);
                return '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('post-edit') ? '' : '<a type="button" name="edit" href="' . route('post.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('post-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('post.destroy', $row->id) . '" method="post">
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
            //
            //
            ->rawColumns(['id', 'title', 'slug', 'image', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::where("for_property", 0)->get();
        $tags = tag::where("for_property", 0)->get();
        return view('second-admin.pages.posts.addPost', compact('categories', 'tags'));
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
            'subtitle' => 'Required',
            'slug' => 'Required',
            'body' => 'Required'
        ]);
        $post = new post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->posted_by = Auth::user()->id;
        //        $post->image = $request->image;
        if ($request->hasFile('image')) {
            $temp = $request->file('image');
            $image = $request->image->getClientOriginalName();
            $destination = 'images/posts/';
            $temp->move($destination, $image);
            $post->image = $image;
        }
        $post->body = $request->body;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function allShow()
    {

        return view('second-admin.pages.posts.allPost');
    }

    public function show($id)
    {
        //        dd('fuck');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = tag::where("for_property", 0)->get();
        $categories = category::where("for_property", 0)->get();
        $post = post::with('categories', 'tags')->where('id', $id)->first();
        return view('second-admin/pages/posts/editPost', compact('post', 'tags', 'categories'));
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
            'title' => 'Required',
            'subtitle' => 'Required',
            'slug' => 'Required',
            'body' => 'Required'
        ]);
        $post = post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;

        //update image
        if ($request->hasFile('image')) {
            $file = 'images/' . $post->image;
            if (!empty($post->image)) {

                if (File::exists($file)) {
                    unlink($file);
                }
            }
            $temp = $request->file('image');
            $image = $request->image->getClientOriginalName();
            //                $photo  = str_random(5).'.'.$extension; // renameing image

            $destination = 'images/posts/';
            $temp->move($destination, $image);
            $post->image = $image;
        }

        $post->body = $request->body;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $name = post::find($id);
        //$destination='public/storage/images/';
        $image = 'public/storage/images/' . $name->image;

        if (File::exists($image)) {
            unlink($image);
        }
        post::where('id', $id)->delete();
        return redirect()->back();
    }
}
