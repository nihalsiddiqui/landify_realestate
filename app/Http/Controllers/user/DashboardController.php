<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Appliance;
use App\Models\Facility;
use App\Models\Feature;
use App\Models\Listing;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userListing = Listing::where('user_id', auth()->user()->id)->count();
        $userFacility = Facility::where('user_id', auth()->user()->id)->count();
        $userFeature = Feature::where('user_id', auth()->user()->id)->count();
        $userAppliance = Appliance::where('user_id', auth()->user()->id)->count();
        return view('user.dashboard', compact('userListing', 'userFacility', 'userFeature', 'userAppliance'));
    }
}
