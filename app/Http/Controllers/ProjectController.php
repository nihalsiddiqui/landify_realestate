<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:project-list', ['only' => ['index', 'show', 'allShow']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        return Datatables::of($project)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return " <small class=''>$row->id</small";
            })
            ->addColumn('name', function ($row) {
                return " <small class=''>$row->name</small";
            })
            ->addColumn('stat_date', function ($row) {
                return " $row->stat_date";
            })
            ->addColumn('end_date', function ($row) {
                return " $row->end_date";
            })

            ->addColumn('description', function ($row) {
                return "$row->description";
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()->can('project-edit') ? '' : '<a type="button" name="edit" href="' . route('project.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()->can('project-delete') ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('project.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'start_date', 'end_date', 'description', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // projest list
    public function allShow()
    {
        return view('second-admin.pages.project.allProject');
    }

    public function create()
    {
        $companies = Company::all();
        $project_types = ProjectType::all();
        return view('second-admin.pages.project.addProject', [
            'companies' => $companies,
            'project_types' => $project_types
        ]);
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
            'start_date' => 'Required',
            // 'end_date' => 'Required',
            // 'description' => 'Required',
            'project_type' => 'required|integer|exists:project_types,id'
        ]);
        $project = new Project;
        $project->name = $request->name;
        $project->slug = Str::slug($request->name, '-');
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->description = $request->description;
        $project->project_type_id = $request->project_type;
        $project->save();
        $project->companies()->sync($request->company_id);
        return redirect(route('project.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $companies = Company::all();
        $project_types = ProjectType::all();
        return view('second-admin.pages.project.editProject', compact('project', 'companies', 'project_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [
            'name' => 'Required',
            'start_date' => 'Required',
            // 'end_date' => 'Required',
            // 'description' => 'Required',
            'project_type' => 'required|integer|exists:project_types,id'
        ]);
        $project->name = $request->name;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->description = $request->description;
        $project->project_type_id = $request->project_type;
        $project->save();
        $project->companies()->sync($request->company_id);
        return redirect(route('project.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('project.list'));
    }
}
