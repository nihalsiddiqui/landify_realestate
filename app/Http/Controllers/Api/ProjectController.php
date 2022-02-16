<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Company;
use App\Models\Property;
use App\Models\Town;
use App\Models\Listing;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::latest()->take(10)->get();
        return response()->json([
            'projects' => $projects
        ]);
    }

    public function get($id)
    {
        $projects = Project::whereId($id)->with('property')->first();
        return response()->json([
            'project' => $projects
        ]);
    }
}
