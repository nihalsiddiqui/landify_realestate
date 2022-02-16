<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\Appliance;
use App\Models\category;
use App\Models\City;
use App\Models\Facility;
use App\Models\Feature;
use App\Models\Listing;
use App\Models\Property;
use App\Models\tag;
use App\Models\Town;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ListingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/dashboard';
    public function index()
    {
//        dd('adef');
        $listing = Listing::get();
        if (\auth()->user()) {
            $listing = Listing::where('user_id', auth()->id())->get();
        }
        return Datatables::of($listing)
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
            ->addColumn('price', function ($row) {
                return 'PKR. ' . $row->price;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user()? '' : '<a type="button" href="' . route('user.listing.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user()? '' : '<form id="del-form-' . $row->id . '"  action="' . route('user.listing.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'slug', 'price', 'action'])
            ->make(true);
    }

    //all listings
    public function allShow(){
        return view('user.Listing.allListing');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Property::all();
        $facilities = Facility::all();
        $features = Feature::all();
        $cities = City::with('town')->get();
        $categories = category::where("for_property", 1)->get();
        $tags = tag::all();
        $appliances = Appliance::all();
        return view('user.Listing.addListing',compact('properties','facilities','features','cities','categories','tags','appliances'));
    }

    public function addListingUser()
    {
//        $users = User::all();
        $properties = Property::all();
        $facilities = Facility::all();
        $features = Feature::all();
        $cities = City::with('town')->get();
        $categories = category::with('subCategory')->where("for_property", 1)->get();
        $tags = tag::all();
        $appliances = Appliance::all();
        return view('user.addListingUser',compact('properties','facilities','features','cities','categories','tags','appliances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
//        dd($request->npls_number);
        if($request->slug) {
            $request->slug = Str::slug($request->slug, '-');
        } else {
            $request->slug = Str::slug($request->name, '-');
        }
        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'nullable|unique:listings,slug',
            'property_id' => 'Required',
//            'category_ids' => 'Required|array',
            //            'subcategory_id' => 'Required',
            'town_id' => 'Required',
            'no_of_floors' => 'Required',
//            'status' => 'Required',
            'no_of_rooms' => 'Required',
            'no_of_beds' => 'Required',
            'no_of_baths' => 'Required',
            'no_of_living_rooms' => 'Required',
            'no_of_dinning_rooms' => 'Required',
            'no_of_kitchens' => 'Required',
            'no_of_laundry_rooms' => 'Required',
            'no_of_garages' => 'Required',
            'square_feats' => 'Required',
            'built_year' => 'Required',
            'purpose' => 'Required',
            'constructions_status' => 'Required',
            'address' => 'Required',
            'latitude' => 'Required',
            'longitude' => 'Required',
//            'npls_number' => 'Required',
//            'mutation' => 'Required',
            'video_url' => 'nullable',
            'video_description' => 'nullable',
            'video_title' => 'nullable',
//            'meta_tags' => 'nullable',
//            'amount_per_square_feet' => 'Required',
            'area_type' => 'Required',
//            'cost_per_square_feet' => 'Required',
//            'installment_per_month' => 'Required',
//            'price' => 'Required|numeric',
            'feature' => 'Required|array',
            'appliance' => 'Required|array',
            'facilities' => 'Required|array',
//            'registry' => 'Required|in:yes,no,under_process',
//            'city_approval' => 'Required|in:yes,no,under_process',
            'thumbnail' => 'required|image|mimes:pdf,jpeg,png,jpg,gif,svg|max:5000',
//            'registry_file' => 'nullable|mimes:pdf,jpeg,png,jpg,gif,svg|max:5000',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $listing = new Listing;
        $listing->name = $request->name;
        if (Auth::user() instanceof admin){
            $listing->admin_id = \auth()->id();

        }
        if (Auth::user() instanceof User){
            $listing->user_id = \auth()->id();
        }
        $listing->slug = $request->slug;
        $listing->town_id = $request->town_id;
        $listing->sub_category_id = $request->sub_category_id;
        $listing->no_of_floors = $request->no_of_floors;
        $listing->status = 'Inactive';
        $listing->no_of_rooms = $request->no_of_rooms;
        $listing->no_of_beds = $request->no_of_beds;
        $listing->no_of_baths = $request->no_of_baths;
        $listing->no_of_living_rooms = $request->no_of_living_rooms;
        $listing->no_of_dinning_rooms = $request->no_of_dinning_rooms;
        $listing->no_of_kitchens = $request->no_of_kitchens;
        $listing->no_of_laundry_rooms = $request->no_of_laundry_rooms;
        $listing->no_of_garages = $request->no_of_garages;
        $listing->square_feats = $request->square_feats;
        $listing->area_type = $request->area_type;
        $listing->built_year = $request->built_year;
        $listing->built_style = $request->built_style;
        $listing->purpose = $request->purpose;
//        $listing->listing_source = $request->listing_source;
        $listing->constructions_status = $request->constructions_status;
        $listing->description = $request->description;
        $listing->address = $request->address;
        $listing->postal_code = $request->postal_code;
        $listing->latitude = $request->latitude;
        $listing->longitude = $request->longitude;
        $listing->amount_per_square_feet = $request->amount_per_square_feet;
        $listing->cost_per_square_feet = $request->cost_per_square_feet;
        $listing->installment_per_month = $request->installment_per_month;
        $listing->price = $request->price;
        $listing->summary = $request->summary;
//        dd('hello');
        $listing->npls_number = $request->npls_number;
        $listing->mutation = $request->mutation;
        $listing->video_link = $request->video_url;
        $listing->video_title = $request->video_title;
        $listing->video_description = $request->video_description;
//        $listing->meta_tag = $request->meta_tags;
        $listing->registry = $request->registry;
        $listing->city_approval = $request->city_approval;
        $listing->hide_address = $request->hide_address === "true" ? true : false;
        if ($request->hasFile('registry_file')) {
            $temp = $request->file('registry_file');
            $image = $request->registry_file->getClientOriginalName();
            $destination = 'images/registry/';
            $temp->move($destination, $image);
            $listing->registry_file = $destination . $image;
        }
        if ($request->hasFile('thumbnail')) {
            $temp = $request->file('thumbnail');
            $image = $request->thumbnail->getClientOriginalName();
            $destination = 'images/thumbnail/';
            $temp->move($destination, $image);
            $listing->thumbnail = $destination . $image;
        }

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $extention = $image->getClientOriginalName();
                $destination = '/images/thumbnail/';
                $image->move(public_path() . $destination, $extention);

                array_push($images, $destination . $extention);
            }
        }

        $listing->images = json_encode($images);

        $listing->save();
        $listing->property()->sync($request->property_id);
        $listing->categories()->attach($request->category_ids);
        $listing->features()->attach($request->feature);
        $listing->facility()->attach($request->facilities);
        $listing->appliances()->attach($request->appliance);
//        if(auth()->user()){
            return view('user.returnmessage');
//        }
//        else{
//            return redirect(route('user.listing.list'));
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        if(!$listing->user_id == \auth()->id()){
            return redirect()->back();
        }

        $properties = Property::all();
        $facilities = Facility::all();
        $features = Feature::all();
        $categories = category::where("for_property", 1)->get();
        $tags = tag::all();
        $cities = City::with('town')->get();
        $defaultCity = City::whereId($listing->town->city->id)->with('town')->first();
        $appliances = Appliance::all();
        return view('user.Listing.editListing', compact('listing', 'properties', 'cities', 'defaultCity', 'categories', 'tags', 'features', 'facilities', 'appliances'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        if(!$listing->user_id == \auth()->id()){
            return redirect()->back();
        }

        if($request->slug) {
            $request->slug = Str::slug($request->slug, '-');
        } else {
            $request->slug = Str::slug($request->name, '-');
        }

        $this->validate($request, [
            'name' => 'Required',
            'slug' => 'nullable|unique:listings,slug,' . $listing->id,
            'property_id' => 'Required',
            'category_ids' => 'Required|array',
            'town_id' => 'Required',
            'no_of_floors' => 'Required',
//            'status' => 'Required',
            'no_of_rooms' => 'Required',
            'no_of_beds' => 'Required',
            'no_of_baths' => 'Required',
            'no_of_living_rooms' => 'Required',
            'no_of_dinning_rooms' => 'Required',
            'no_of_kitchens' => 'Required',
            'no_of_laundry_rooms' => 'Required',
            'no_of_garages' => 'Required',
            'square_feats' => 'Required',
            'built_year' => 'Required',
            'purpose' => 'Required',
            'constructions_status' => 'Required',
            'address' => 'Required',
            'latitude' => 'Required',
            'longitude' => 'Required',
//            'npls_number' => 'Required',
            'mutation' => 'Required',
            'video_url' => 'nullable',
            'video_description' => 'nullable',
            'video_title' => 'nullable',
            'meta_tags' => 'nullable',
            'amount_per_square_feet' => 'Required',
            'area_type' => 'Required',
            'cost_per_square_feet' => 'Required',
            'installment_per_month' => 'Required',
            'price' => 'Required|numeric',
            'features' => 'Required|array',
            'facilities' => 'Required|array',
//            'appliance' => 'Required|array',
            'registry' => 'Required|in:yes,no,under_process',
            'city_approval' => 'Required|in:yes,no,under_process',
            'thumbnail' => 'nullable|image|mimes:pdf,jpeg,png,jpg,gif,svg|max:5000',
            'registry_file' => 'nullable|mimes:pdf,jpeg,png,jpg,gif,svg|max:5000',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $listing->name = $request->name;
        $listing->slug = $request->slug;
        $listing->town_id = $request->town_id;
        $listing->no_of_floors = $request->no_of_floors;
        $listing->status = 'Unactive';
        $listing->no_of_rooms = $request->no_of_rooms;
        $listing->no_of_beds = $request->no_of_beds;
        $listing->no_of_baths = $request->no_of_baths;
        $listing->no_of_living_rooms = $request->no_of_living_rooms;
        $listing->no_of_dinning_rooms = $request->no_of_dinning_rooms;
        $listing->no_of_kitchens = $request->no_of_kitchens;
        $listing->no_of_laundry_rooms = $request->no_of_laundry_rooms;
        $listing->no_of_garages = $request->no_of_garages;
        $listing->square_feats = $request->square_feats;
        $listing->area_type = $request->area_type;
        $listing->built_year = $request->built_year;
        $listing->built_style = $request->built_style;
        $listing->purpose = $request->purpose;
        $listing->listing_source = $request->listing_source;
        $listing->constructions_status = $request->constructions_status;
        $listing->description = $request->description;
        $listing->address = $request->address;
        $listing->postal_code = $request->postal_code;
        $listing->latitude = $request->latitude;
        $listing->longitude = $request->longitude;
        $listing->amount_per_square_feet = $request->amount_per_square_feet;
        $listing->cost_per_square_feet = $request->cost_per_square_feet;
        $listing->installment_per_month = $request->installment_per_month;
        $listing->price = $request->price;
        $listing->summary = $request->summary;
        $listing->npls_number = $request->npls_number;
        $listing->mutation = $request->mutation;
        $listing->video_link = $request->video_url;
        $listing->video_title = $request->video_title;
        $listing->video_description = $request->video_description;
        $listing->meta_tag = $request->meta_tags;
        $listing->registry = $request->registry;
        $listing->city_approval = $request->city_approval;
        $listing->hide_address = $request->hide_address === "true" ? true : false;
        if ($request->hasFile('registry_file')) {
            $file = 'images/registry/' . $listing->registry_file;
            if (!empty($listing->registry_file)) {
                if (File::exists($file)) {
                    unlink($file);
                }
            }
            $temp = $request->file('registry_file');
            $image = $request->registry_file->getClientOriginalName();
            $destination = 'images/registry';
            $temp->move($destination, $image);
            $listing->registry_file = $image;
        }
        if ($request->hasFile('thumbnail')) {
            $file = 'images/thumbnail/' . $listing->thumbnail;
            if (!empty($listing->thumbnail)) {
                if (File::exists($file)) {
                    unlink($file);
                }
            }
            $temp = $request->file('thumbnail');
            $image = $request->thumbnail->getClientOriginalName();
            $destination = 'images/thumbnail/';
            $temp->move($destination, $image);
            $listing->thumbnail = $destination . $image;
        }

        $images = [];
        if ($request->hasFile('images')) {

            if (!empty($listing->images)) {
                foreach (json_decode($listing->images) as $image) {
                    if (!empty($listing->images)) {
                        if (File::exists($image)) {
                            unlink($image);
                        }
                    }
                }
            }

            foreach ($request->file('images') as $image) {
                $extention = $image->getClientOriginalName();
                $destination = '/images/thumbnail/';
                $image->move(public_path() . $destination, $extention);

                array_push($images, $destination . $extention);
            }
        }

        $listing->images = json_encode($images);

        $listing->save();

        $listing->categories()->detach();
        $listing->features()->detach();
        $listing->facility()->detach();
        $listing->appliances()->detach();

        $listing->property()->sync($request->property_id);
        $listing->categories()->attach($request->category_ids);
        $listing->features()->attach($request->features);
        $listing->facility()->attach($request->facilities);
        $listing->appliances()->attach($request->appliance);
        return redirect(route('user.listing.list'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        if(!$listing->user_id == \auth()->id()){
            return redirect()->back();
        }

        $listing->delete();
        return redirect(route('user.listing.list'));
    }
    public function onChangeCity($id)
    {
        $towns = Town::where('city_id', $id)->get();
        return response()->json([
            'towns' => $towns
        ]);
    }
}
