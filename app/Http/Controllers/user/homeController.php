<?php

namespace App\Http\Controllers\user;

use App\Models\category;
use App\Models\City;
use App\Models\Country;
use App\Models\Facility;
use App\Models\Listing;
use App\Models\Property;
use App\Models\State;
use App\Models\tag;
use App\Models\post;
use App\Models\Town;
use App\Support\Collection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Models\admin;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent as FacadesAgent;
use phpDocumentor\Reflection\Types\Mixed_;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class homeController extends Controller
{
    public function index()
    {
//        $posts = post::where('status', 1)->paginate(2);
//        $properties = Listing::where("status", 'Active')->limit(6)->get();
//        $categories = category::Categories()->where("for_property", 1)->get();
//        $listings = Property::all();
//        $upcommingListings = Listing::active('Active')->where('constructions_status', '!=', 'constructed')->limit(10)->get();
//
//        $featuredListings = Listing::active('Active')->where('featured', true)->latest()->limit(6)->get();
//        $hotOfferListings = Listing::active('Active')->where('hot_offer', true)->latest()->limit(6)->get();
//        $openHouseListings = Listing::active('Active')->where('open_house', true)->latest()->limit(6)->get();
//        $foreClosureListings = Listing::active('Active')->where('foreclosure', true)->latest()->limit(6)->get();
//
//        $lahoreCity = City::where('name', 'Lahore')->first();
//
//        $lahoreListings = array();
//        if ($lahoreCity) {
//            foreach ($lahoreCity->town()->get() as $town) {
//                foreach ($town->listings()->where("status", 'Active')->latest()->limit(10)->get() as $listing) {
//                    array_push($lahoreListings, $listing);
//                }
//            }
//        }
//
//        $karachiCity = City::where('name', 'Karachi')->first();
//
//        $karachiListings = array();
//        if ($karachiCity) {
//            foreach ($karachiCity->town()->get() as $town) {
//                foreach ($town->listings()->where("status", 'Active')->latest()->limit(10)->get() as $listing) {
//                    array_push($karachiListings, $listing);
//                }
//            }
//        }
//
//        $islamabadCity = City::where('name', 'Islamabad')->first();
//
//        $islamabadListings = array();
//        if ($islamabadCity) {
//            foreach ($islamabadCity->town()->get() as $town) {
//                foreach ($town->listings()->where("status", 'Active')->latest()->limit(10)->get() as $listing) {
//                    array_push($islamabadListings, $listing);
//                }
//            }
//        }
//
//        $agents = admin::role('agent')->latest()->limit(3)->get();
//        npls.home
//        , compact('posts', 'featuredListings', 'hotOfferListings', 'openHouseListings', 'foreClosureListings', 'properties', 'categories', 'listings', 'upcommingListings', 'lahoreListings', 'karachiListings', 'islamabadListings', 'agents')
//        return view('auth.login');
        return view('landify.home');
    }

    //    public function searchResult(){
    //        $listings = Listing::all();
    //        $categories = category::all();
    //        dd($categories);
    //        return view('npls.searchResult',['categories'=>$categories,'listings'=>$listings]);
    //    }

    public function properties(Request $request)
    {
        $listings_query = Listing::where("status", 'Active');
        $baths_count_list = Listing::select('no_of_baths')->groupBy("no_of_baths")->pluck('no_of_baths')->toArray();
        $sqaure_feats_count_list = Listing::select('square_feats')->groupBy("square_feats")->pluck('square_feats')->toArray();
        // dd($sqaure_feats_count_list);
        $rooms_count_list = Listing::select('no_of_rooms')->groupBy("no_of_rooms")->pluck('no_of_rooms')->toArray();
        $kitchens_count_list = Listing::select('no_of_kitchens')->groupBy("no_of_kitchens")->pluck('no_of_kitchens')->toArray();
        $square_feets_count_list = Listing::select('no_of_baths')->groupBy("no_of_baths")->pluck('no_of_baths')->toArray();
        $properties_sale = Listing::where('purpose', "sale")->count();
        $properties_rent = Listing::where('purpose', "rent")->count();
        $properties_for_lease = Listing::where('purpose', "for_lease")->count();
        $properties_purpose = Listing::where('purpose', "sold")->count();

        $feauture_properties = Listing::where('featured', true)->latest()->limit(2)->get();

        $best_agents = admin::role('agent')->with('listing')->latest()->limit(4)->get();
        // dd($best_agents);
        if (!empty($request->get("baths"))) {
            $listings_query = $listings_query->where('no_of_baths', $request->get("baths"));
        }

        if (!empty($request->get("rooms"))) {
            $listings_query = $listings_query->where('no_of_rooms', $request->get("rooms"));
        }

        if (!empty($request->get("kitchens"))) {
            $listings_query = $listings_query->where('no_of_kitchens', $request->get("kitchens"));
        }
        if (!empty($request->get("area_type"))) {
            $listings_query = $listings_query->where('area_type', $request->get("area_type"));
        }


        if (!empty($request->get("area"))) {
            $area = explode('-', $request->area);
            $to = $area[0];
            $from = $area[1];

            $listings_query = $listings_query->whereBetween('square_feats', [$to, $from]);
        }

        if (!empty($request->get("amount"))) {
            $amount = explode('-', $request->amount);
            $to = $amount[0];
            $from = $amount[1];
            $listings_query = $listings_query->whereBetween('price', [$to, $from]);
        }

        $listings = $listings_query->latest()->paginate(12);

        return view('npls.properties', [
            'listings' => $listings,
            'baths_count' => $baths_count_list,
            'rooms_count' => $rooms_count_list,
            'kitchen_count' => $kitchens_count_list,
            'properties_sale' => $properties_sale,
            'properties_rent' => $properties_rent,
            'properties_for_lease' => $properties_for_lease,
            'properties_purpose' => $properties_purpose,
            'feauture_properties' => $feauture_properties,
            'best_agents' => $best_agents,
            'sqaure_feats_count_list' => $sqaure_feats_count_list,
        ]);
    }

    public function properties_sale()
    {
        $posts = post::where('status', 1)->paginate(2);
        $properties = Listing::where(["status" => 1, "purpose" => "sale"])->paginate(2);
        $categories = category::where("for_property", 1)->get();
        return view('npls.properties', compact('posts', 'properties', 'categories'));
    }

    public function properties_rent()
    {
        $posts = post::where('status', 1)->paginate(2);
        $properties = Listing::where(["status" => 1, "purpose" => "rent"])->paginate(2);
        $categories = category::where("for_property", 1)->get();
        return view('npls.properties', compact('posts', 'properties', 'categories'));
    }

    public function property(Listing $generic)
    {
        $posts = post::where('status', 1)->paginate(2);
        $properties = Listing::where("status", 1)->with("detail")->get();
        $categories = category::where("for_property", 1)->get();
        return view('npls.property', compact('posts', 'properties', 'categories', 'generic'));
    }

//    public function BookShowing(Request $request)
//    {
//        dd($request->all());
//    }

    public function listing($slug)
    {
        $cities = City::all();
        $listing = Listing::whereSlug($slug)->first();
        $listingPrice = $listing->price;
        $facilities = $listing->facility->groupBy('pivot.facility_id');
        $listingFacilities = [];
        foreach ($facilities as $index => $facility) {
            $facilityType = Facility::where('id', $index)->first()->type;
            $facilityCount = $facility->count();

            $temp = (object)[
                'type' => $facilityType,
                'count' => $facilityCount,
            ];

            //            foreach ($facility as $fac) {
            //                $facilityLat = $fac->pivot->lat;
            //                $facilityLng = $fac->pivot->lng;
            //                $facilityName = $fac->pivot->name;
            //                $facilityDistance = $fac->pivot->distance;
            //                $temporary = [
            //                    'name' => $facilityName,
            //                    'distance' => $facilityDistance,
            //                    'lat' => $facilityLat,
            //                    'lng' => $facilityLng,
            //                ];
            //                array_push($temp, $temporary);
            //            }
            array_push($listingFacilities, $temp);
        }
        $similarListings = Listing::where('price', '<=', $listingPrice)->limit(10)->orderBy('price', 'desc')->get();
        addCount($listing);
        return view('npls.listing-details', [
            'listing' => $listing,
            'similarListings' => $similarListings,
            'listingFacilities' => $listingFacilities,
            'cities' => $cities,
        ]);
    }
    public  function addListing()
    {
//        dd('aldee');
        return view('user.Appliance.addAppliance');
    }
    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user/blog', compact('posts'));
    }

    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('user/blog', compact('posts'));
    }
    public function privacy()
    {
        return view('npls.privacy');
    }

    public function searchSuggestions(Request $request)
    {
        $result = array();

        $countries = Country::where('name', "LIKE", "%{$request->get('query')}%")->get();
        $states = State::where('name', "LIKE", "%{$request->get('query')}%")->with('cities.town.listings')->get();
        $cities = City::where('name', "LIKE", "%{$request->get('query')}%")->with('town.listings')->get();
        $towns = Town::where('name', "LIKE", "%{$request->get('query')}%")->with('listings')->get();
        $listings = Listing::where('name', "LIKE", "%{$request->get('query')}%")->get();

        foreach ($countries as $country) {
            array_push($result, $country->name);
        }

        foreach ($states as $state) {
            array_push($result, $state->name);
        }

        foreach ($cities as $city) {
            array_push($result, $city->name);
        }

        foreach ($towns as $town) {
            array_push($result, $town->name);
        }

        foreach ($listings as $listing) {
            array_push($result, $listing->name);
        }

        $notFound = collect('Not Found');
        return response()->json(empty($result) ? $notFound : $result);
    }

    public function search(Request $request)
    {
        $store = $this->searchListings($request);

        $listings = new Collection();

        if ($store->count()) {

            $category = $request->category;

            if ($store->first()->getTable() == 'countries') {
                foreach ($store->states as $state) {
                    foreach ($state->cities as $city) {
                        foreach ($city->town as $town) {
                            foreach ($town->listings()->whereStatus('Active')->with('admin')->get() as $listing) {
                                if (!$category || $listing->categories()->where('category_id', $category)->exists()) {
                                    $listings[] = $listing;
                                } else if ($category === 'any') {
                                    $listings[] = $listing;
                                }
                            }
                        }
                    }
                }
            } elseif ($store->first()->getTable() == 'states') {
                foreach ($store->cities as $city) {
                    foreach ($city->town as $town) {
                        foreach ($town->listings()->whereStatus('Active')->with('admin')->get() as $listing) {
                            if (!$category || $listing->categories()->where('category_id', $category)->exists()) {
                                $listings[] = $listing;
                            } else if ($category === 'any') {
                                $listings[] = $listing;
                            }
                        }
                    }
                }
            } elseif ($store->first()->getTable() == 'cities') {
                foreach ($store->town as $town) {
                    foreach ($town->listings()->whereStatus('Active')->with('admin')->get() as $listing) {
                        if (!$category || $listing->categories()->where('category_id', $category)->exists()) {
                            $listings[] = $listing;
                        } else if ($category === 'any') {
                            $listings[] = $listing;
                        }
                    }
                }
            } elseif ($store->first()->getTable() == 'towns') {
                foreach ($store->listings()->whereStatus('Active')->with('admin')->get() as $listing) {
                    if (!$category || $listing->categories()->where('category_id', $category)->exists()) {
                        $listings[] = $listing;
                    } else if ($category === 'any') {
                        $listings[] = $listing;
                    }
                }
            } elseif ($store->first()->getTable() == 'listings') {
                foreach ($store as $listing) {
                    if (!$category && $listing->categories()->where('category_id', $category)->exists()) {
                        $listings[] = $listing;
                    } else if ($category === 'any') {
                        $listings[] = $listing;
                    }
                }
            }

            if ($request->rooms && $listings->count()) {
                $listings = $listings->filter(function ($item) use ($request) {
                    $item = $item->no_of_rooms === $request->rooms;
                    return $item;
                });
            }

            if ($request->no_of_baths && $listings->count()) {
                $listings = $listings->filter(function ($item) use ($request) {
                    $item = $item->no_of_baths === $request->bath;
                    return $item;
                });
            }

            if ($request->purpose && $listings->count()) {
                $listings = $listings->filter(function ($item) use ($request) {
                    $item = $item->purpose === $request->purpose;
                    return $item;
                });
            }

            if ($request->price_range && $listings->count()) {
                $listings = $listings->filter(function ($item) use ($request) {
                    $price = explode('-', $request->price_range);
                    $to = $price[0];
                    $from = $price[1];
                    $item = $item->price >= $to && $item->price <= $from;
                    return $item;
                });
            }

            if ($request->date_range && $listings->count()) {
                $listings = $listings->filter(function ($item) use ($request) {
                    $date = explode('/', $request->date_range);
                    $to = Carbon::parse($date[0]);
                    $from = Carbon::parse($date[1]);
                    $item = $item->created_at >= $to && $item->created_at <= $from;
                    return $item;
                });
            }

            if ($request->area && $listings->count()) {
                $listings = $listings->filter(function ($item) use ($request) {
                    $area = explode('-', $request->area);
                    $to = $area[0] * 43560;
                    $from = $area[1] * 43560;
                    $item = $item->square_feats >= $to && $item->square_feats <= $from;
                    return $item;
                });
            }
        }

        $message = '';
        if (!$listings->count() || !$store->count()) {
            $listings = Listing::whereStatus('Active')->with('admin')->latest()->get();
            $message = 'No property found against search !';
        }

        if ($request->sort_by === 'oldest') {
            $listings = $listings->sortBy('created_at');
        } else if ($request->sort_by === 'lower_price') {
            $listings = $listings->sortBy('price');
        } else if ($request->sort_by === 'higher_price') {
            $listings = $listings->sortByDesc('price');
        }

        //        foreach ($listings as $listing) {
        //            dump($listing->name);
        //        }
        //
        //        dd($listings);

        $categories = category::categories()->get();
        $agent = new Agent();
        return view($agent->isMobile() ? 'npls.mobileSearchResult' : 'npls.searchResult', [
            'listings_paginate' => $listings->paginate(10),
            'listings' => $listings,
            'categories' => $categories,
            'listing_count' => $listings->count(),
            'message' => $message,
        ]);
    }

    private function searchListings($request)
    {
        if (!$request->search_query) {
            return Listing::whereStatus('Active')->with('admin')->latest()->get();
        }

        $country = Country::where('name', "LIKE", "%{$request->search_query}%")->with('states.cities.town.listings.admin')->first();

        $state = State::where('name', "LIKE", "%{$request->search_query}%")->with('cities.town.listings.admin')->first();

        $city = City::where('name', "LIKE", "%{$request->search_query}%")->with('town.listings.admin')->first();

        $town = Town::where('name', "LIKE", "%{$request->search_query}%")->with('listings.admin')->first();

        $listing = Listing::whereStatus('Active')->where('name', "LIKE", "%{$request->search_query}%")->with('admin')->get();

        if ($country) {
            return $country;
        } elseif ($state) {
            return $state;
        } elseif ($city) {
            return $city;
        } elseif ($town) {
            return $town;
        } elseif ($listing) {
            return $listing;
        }
    }
}
