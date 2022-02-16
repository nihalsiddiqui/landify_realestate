<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use App\Models\category;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Listing;
use App\Models\Project;
use App\Models\Property;
use App\Models\State;
use App\Models\tag;
use App\Models\Town;
use App\Models\User;
use Jenssegers\Agent\Facades\Agent;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class dashboardController extends Controller
{
    public function super_admin()
    {
        if (Auth::user()->can('posts.view')) {
            $posts = post::all();
            $admins = admin::all();
            return view('admin/post/all-post', compact('posts', 'admins'));
        }
        return redirect(route('home'));
    }
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        if (auth('admin')->user()->hasRole('agent')) {
            $listing_count = Listing::where('admin_id', auth('admin')->id())->with('agent', function ($q) {
                $q->role('agent');
            })->count();
        } else {
            $listing_count = Listing::count();
        }

        if (auth('admin')->user()->hasRole('agent')) {
            $properties_count = Property::where('admin_id', auth('admin')->id())->with('agent', function ($q) {
                $q->role('agent');
            })->count();
        } else {
            $properties_count = Property::count();
        }

        if (auth('admin')->user()->hasRole('agent')) {
            $categories_count = category::where('admin_id', auth('admin')->id())->with('agent', function ($q) {
                $q->role('agent');
            })->count();
        } else {
            $categories_count = category::count();
        }

        if (auth('admin')->user()->hasRole('agent')) {
            $tags_count = tag::where('admin_id', auth('admin')->id())->with('agent', function ($q) {
                $q->role('agent');
            })->count();
        } else {
            $tags_count = tag::count();
        }

        $companies_count = Company::count();
        $projects_count = Project::count();
        // $properties_count = Property::count();
        $roles_count = Role::count();
        $permissions_count = Permission::count();
        $admin_count = admin::count();
        $super_admin_count = admin::role('super-admin')->count();
        $agents_count = admin::role('agent')->count();
        $users_count = User::count();
        $country_count = Country::count();
        $states_count = State::count();
        $city_count  = City::count();
        $towns_count = Town::count();
        $posts_count = post::count();
        // $categories_count = category::count();
        // $tags_count = tag::count();




        return view('second-admin.pages.dashboard.dashboard', compact('companies_count', 'projects_count', 'properties_count', 'listing_count', 'roles_count', 'permissions_count', 'admin_count', 'agents_count', 'users_count', 'super_admin_count', 'country_count', 'states_count', 'city_count', 'towns_count', 'posts_count', 'categories_count', 'tags_count'));
    }
}
