<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:project-type-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:project-type-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-type-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-type-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectType = ProjectType::all();
        return Datatables::of($projectType)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })


            ->addColumn('description', function ($row) {
                return "$row->description";
            })

            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('project-type-edit') ? '' : '<a type="button" name="edit" href="' . route('projectType.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('project-type-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('projectType.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'description', 'action'])
            ->make(true);
    }

    //all project types list
    public function allShow()
    {
        return view('second-admin.pages.projectType.allProjectTypes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second-admin.pages.projectType.addProjectType');
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

            // 'description' => 'Required',
            //            'slug' => 'Required',

        ]);
        $project = new ProjectType;
        $project->name = $request->name;

        $project->description = $request->description;

        $project->save();
        return redirect(route('projectType.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $projectType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectType $projectType)
    {
        return view('second-admin.pages.projectType.editProjectType', compact('projectType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectType $projectType)
    {
        $this->validate($request, [
            'name' => 'Required',

            // 'description' => 'Required',
            //            'slug' => 'Required',

        ]);
        //        $project = new ProjectType;
        $projectType->name = $request->name;

        $projectType->description = $request->description;

        $projectType->save();
        return redirect(route('projectType.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();
        return redirect(route('projectType.list'));
    }
}
