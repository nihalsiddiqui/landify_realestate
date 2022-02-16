<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Appliance;
use App\Models\category;
use App\Models\City;
use App\Models\Facility;
use App\Models\Feature;
use App\Models\Listing;
use App\Models\Listing_detail;
use App\Models\Property;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class listing_details_controller extends Controller
{
    public function index()
    {
//        dd('adef');
        $listing = Listing_detail::get();
//        if (\auth()->user()) {
//            $listing = Listing_detail::where('user_id', auth()->id())->get();
//        }
        return Datatables::of($listing)
            ->addIndexColumn()
            ->addColumn('id', function ($row) {
                return $row->id;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('email', function ($row) {
                return $row->email;
            })
            ->addColumn('city', function ($row) {
                return $row->city;
            })
            ->addColumn('action', function ($row) {
                $button = !auth()->user() ? '' : '<a type="button" href="' . route('user.listing_details.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $button .= !auth()->user() ? '' : '<form id="del-form-' . $row->id . '"  action="' . route('user.listing_details.destroy', $row->id) . '" method="post">
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
            ->rawColumns(['id', 'name', 'email', 'city', 'action'])
            ->make(true);
    }

    public function create()
    {
        return view('user.Listing.addListing');

    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'Required',
            'cnic' => 'Required',
            'phone_no' => 'Required',
            'telephone_no' => 'Required',
            'email' => 'Required',
            'address' => 'Required',
            'city' => 'Required',
            'area_of_Property' => 'Required',
            'nature_of_query' => 'Required',
            'province' => 'Required',
            'district' => 'Required',
            'union_council' => 'Required',
            'khewat' => 'Required',
            'khasra' => 'Required',
            'khetoni' => 'Required',
//            'registry_file' => 'Required',
//            'list_one' => 'Required',
//            'list_two' => 'Required',
//            'list_three' => 'Required',
//            'list_four' => 'Required',
//            'list_five' => 'Required',
            'category' => 'Required',
//            'others' => 'Required',
            'nationality' => 'Required',
            'tehsil' => 'Required',
            'sub_category' => 'Required',

        ]);
        $listing = new Listing_detail();
        $listing->name = $request->name;
        $listing->cnic = $request->cnic;
        $listing->phone_no = $request->phone_no;
        $listing->telephone_no = $request->telephone_no;
        $listing->email = $request->email;
        $listing->address = $request->address;
        $listing->city = $request->city;
        $listing->area_of_Property = $request->area_of_Property;
        $listing->nature_of_query = $request->nature_of_query;
        $listing->province = $request->province;
        $listing->district = $request->district;
        $listing->union_council = $request->union_council;
        $listing->khewat = $request->khewat;
        $listing->khasra = $request->khasra;
        $listing->khetoni = $request->khetoni;
        $listing->list_one = $request->list_one;
        $listing->list_two = $request->list_two;
        $listing->list_three = $request->list_three;
        $listing->list_four = $request->list_four;
        $listing->list_five = $request->list_five;
        $listing->category = $request->category;
        $listing->sub_category = $request->sub_category;
        $listing->others = $request->others;
        $listing->nationality = $request->nationality;
        $listing->tehsil = $request->tehsil;

        if ($request->hasFile('registry_file')) {
            $temp = $request->file('registry_file');
            $image = $request->registry_file->getClientOriginalName();
            $destination = 'images/registry/';
            $temp->move($destination, $image);
            $listing->registry_file = $destination . $image;
        }

        $listing->save();

        return redirect(route('user.listing_details.list'));

    }

    public function allshow()
    {
        return view('user.Listing.allListing');

    }


    public function edit($id)
    {
        $listing = Listing_detail::find($id);
//        if (!$listing->user_id === \auth()->id()){
//            return redirect()->back();
//        }
        return view('user.Listing.editListing', compact('listing'));
    }

    public function update(Request $request, $id)
    {
//        if (!$listing->user_id == \auth()->id()) {
//            return redirect()->back();
//        }
        $listing = Listing_detail::find($id);


            $this->validate($request, [
                'name' => 'Required',
                'cnic' => 'Required',
                'phone_no' => 'Required',
                'telephone_no' => 'Required',
                'email' => 'Required',
                'address' => 'Required',
                'city' => 'Required',
                'area_of_Property' => 'Required',
                'nature_of_query' => 'Required',
                'province' => 'Required',
                'district' => 'Required',
                'union_council' => 'Required',
                'khewat' => 'Required',
                'khasra' => 'Required',
                'khetoni' => 'Required',
//                'registry_file' => 'Required',
//                'list_one' => 'Required',
//                'list_two' => 'Required',
//                'list_three' => 'Required',
//                'list_four' => 'Required',
//                'list_five' => 'Required',
                'category' => 'Required',
                'sub_category' => 'Required',
//                'others' => 'Required',
                'nationality' => 'Required',
                'tehsil' => 'Required',
            ]);

            $listing->name = $request->name;
            $listing->cnic = $request->cnic;
            $listing->phone_no = $request->phone_no;
            $listing->telephone_no = $request->telephone_no;
            $listing->email = $request->email;
            $listing->address = $request->address;
            $listing->city = $request->city;
            $listing->area_of_Property = $request->area_of_Property;
            $listing->nature_of_query = $request->nature_of_query;
            $listing->province = $request->province;
            $listing->district = $request->district;
            $listing->union_council = $request->union_council;
            $listing->khewat = $request->khewat;
            $listing->khasra = $request->khasra;
            $listing->khetoni = $request->khetoni;
            $listing->list_one = $request->list_one;
            $listing->list_two = $request->list_two;
            $listing->list_three = $request->list_three;
            $listing->list_four = $request->list_four;
            $listing->list_five = $request->list_five;
            $listing->category = $request->category;
            $listing->sub_category = $request->sub_category;
            $listing->others = $request->others;
            $listing->registry_file = $request->registry_file;
            $listing->nationality = $request->nationality;
            $listing->tehsil = $request->tehsil;

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

            $listing->save();
            return redirect(route('user.listing_details.list'));
        }

        public
        function destroy(Listing_detail $listing)
        {
//            if (!$listing->user_id == \auth()->id()) {
//                return redirect()->back();
//            }

            $listing->delete();
            return redirect(route('user.listing_details.list'));
        }



}
