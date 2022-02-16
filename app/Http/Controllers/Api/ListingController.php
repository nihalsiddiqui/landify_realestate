<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listings()
    {
        $listings = Listing::active('Active')->latest()->take(10)->get();
        return response()->json([
            'listings' => $listings
        ]);
    }
    public function featuredList()
    {
        $featured_listings = Listing::where('featured', true)->active('Active')->get();
        return response()->json([
            'listings' => $featured_listings
        ]);
    }
    public function HotOfferList()
    {
        $featured_listings = Listing::where('hot_offer', true)->active('Active')->get();
        return response()->json([
            'listings' => $featured_listings
        ]);
    }
    public function OpenHouseList()
    {
        $featured_listings = Listing::where('open_house', true)->active('Active')->get();
        return response()->json([
            'listings' => $featured_listings
        ]);
    }
    public function ForeClosureList()
    {
        $featured_listings = Listing::where('foreclosure', true)->active('Active')->get();
        return response()->json([
            'listings' => $featured_listings
        ]);
    }
    public function getList($id)
    {
        $list = Listing::whereId($id)->with(['features' => function ($q) {
            $q->with('admin');
        }, 'facility:id,admin_id', 'appliances:id,name,admin_id'])->first();
        return response()->json([
            'lists' => $list
        ]);
    }
}
