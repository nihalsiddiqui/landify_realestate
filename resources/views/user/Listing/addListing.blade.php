@section('page-title','Add Listing')
@extends('user.layouts.master')
@section('quillStyle')

    {{--    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/css/plugins/extensions/ext-component-ratings.css")}}">--}}

    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">
    <style>
        div.pac-container {
            z-index: 99999999999 !important;
        }
    </style>
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <form enctype="multipart/form-data" method="post" action="{{route('user.listing_details.store')}}" class="form form-horizontal">
                        {{csrf_field()}}

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Information Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Name <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="name" placeholder="name" value="{{ old('name') }}"/>
                                                @error("name")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">CNIC</label>
                                                <input type="cnic" id="first-name" class="form-control"
                                                       name="cnic" placeholder=" CNIC" value="{{ old('cnic') }}"/>
                                                @error("cnic")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Category of Property
                                                    <span class="text-danger">*</span></label>
                                                <select class="form-control "
                                                        name="category" id="">
                                                    <option value="" selected disabled>Category of Property</option>
                                                    <option value="Commercial">Commercial</option>
                                                    <option value="Residential">Residential</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                @error("category_ids")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Type of Property
                                                    <span class="text-danger">*</span></label>
                                                <select class="form-control "
                                                        name="sub_category" id="">
                                                    <option value="" selected disabled>Type of Property</option>
                                                    <option value="Empty land">Empty land</option>
                                                    <option value="Plot">Plot</option>
                                                    <option value="House">House</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Shop">Shop</option>
                                                    <option value="Plaza">Plaza</option>
                                                    <option value="Society">Society</option>
                                                </select>
                                                @error("category_ids")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
{{--                                                <label class="col-form-label" for="first-name">--}}
{{--                                                    Name <span class="text-danger">*</span></label>--}}
{{--                                                <select class="form-control" name="property_id" id="">--}}
{{--                                                    <option selected disabled value="">Select Property</option>--}}
{{--                                                    @foreach($properties as $property)--}}
{{--                                                        <option--}}
{{--                                                            value="{{$property->id}}" {{ old("property_id") == $property->id ? "selected" : "" }}>{{$property->title}}</option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                                @error("property_id")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-2">--}}
{{--                                                <label class="col-form-label" for="city_id">City Name</label>--}}
{{--                                                <select class="form-control" name="city_id" id="city_id">--}}
{{--                                                    @if($cities->isNotEmpty())--}}
{{--                                                        @foreach($cities as $city)--}}
{{--                                                            <option value="{{$city->id}}" {{ old("city_id") == $city->id ? "selected" : "" }}>{{$city->name}}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    @endif--}}
{{--                                                </select>--}}
{{--                                                @error("city_id")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-2">--}}
{{--                                                <label class="col-form-label" for="first-name">Town Name <span class="text-danger">*</span></label>--}}
{{--                                                <select class="form-control" name="town_id" id="town_id">--}}
{{--                                                    @if($cities->isNotEmpty())--}}
{{--                                                        @foreach($cities->first()->town as $town)--}}
{{--                                                            <option value="{{$town->id}}" {{ old("town_id") == $town->id ? "selected" : "" }}>{{$town->name}}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    @endif--}}
{{--                                                </select>--}}
{{--                                                @error("town_id")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-2">--}}
{{--                                                <label class="col-form-label" for="npls_number">NPLS Number <span class="text-danger">*</span></label>--}}
{{--                                                <input type="text"  id="npls_number" class="form-control"--}}
{{--                                                       name="npls_number" placeholder="LA5544"/>--}}
{{--                                                @error("npls_number")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}

{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Others--}}
{{--                                                     <span class="text-danger">*</span></label>--}}
{{--                                                <input type="text" id="first-name" class="form-control"--}}
{{--                                                       name="others" placeholder="Others" value="{{ old('others') }}"/>--}}
{{--                                                @error("others")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}


                                        </div>
                                        </div>
{{--                                        <div class="col-sm-6 ">--}}
{{--                                            <label class="col-form-label" for="first-name">Number of--}}
{{--                                                Floors <span class="text-danger">*</span></label>--}}
{{--                                            <input type="number" id="first-name" class="form-control"--}}
{{--                                                   name="no_of_floors" placeholder="no of floors" value="{{ old('no_of_floors') }}"/>--}}
{{--                                            @error("no_of_floors")--}}
{{--                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Cell Phone
                                                    <span class="text-danger">*</span></label>
                                                <input type="tel" id="first-name" class="form-control"
                                                       name="phone_no" placeholder="Cell Phone" value="{{ old('phone_no') }}"/>
                                                @error("phone_no")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
{{--                                            <div class="col-sm-6">--}}
{{--                                                <label class="col-form-label" for="first-name">Status <span class="text-danger">*</span></label>--}}
{{--                                                <select name="status" class="form-control" id="">--}}
{{--                                                    <option value="Active" {{ old("status") === 'Active' ? "selected" : "" }}>Active</option>--}}
{{--                                                    <option value="Inactive" {{ old("status") === 'Inactive' ? "selected" : "" }}>InActive</option>--}}
{{--                                                </select>--}}
{{--                                                @error("status")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Telephone No
                                                     <span class="text-danger">*</span></label>
                                                <input type="tel" id="first-name" class="form-control"
                                                       name="telephone_no" placeholder="Telephone No" value="{{ old('telephone_no') }}"/>
                                                @error("telephone_no")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Email
                                                     <span class="text-danger">*</span></label>
                                                <input type="email" id="first-name" class="form-control"
                                                       name="email" placeholder="Email" value="{{ old('email') }}"/>
                                                @error("email")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Address--}}
{{--                                                    <span class="text-danger">*</span></label>--}}
{{--                                                <input type="number" id="first-name" class="form-control"--}}
{{--                                                       name="no_of_baths" placeholder="Address" value="{{ old('no_of_baths') }}"/>--}}
{{--                                                @error("no_of_baths")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class=" col-sm-12 card">--}}
{{--                                                <div class="card-header">--}}
{{--                                                    <h4 class="card-title">Address</h4>--}}
{{--                                                    <div class="custom-control custom-switch custom-control-inline">--}}
{{--                                                        <span class="switch-label mr-1">Hide Address</span>--}}
{{--                                                        <input type="checkbox" class="custom-control-input" name="hide_address" id="hide_address" value="true">--}}
{{--                                                        <label class="custom-control-label" for="hide_address">--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-sm-10 col-form-label">--}}
{{--                                                            <label for="search_address">Address <span class="text-danger">*</span></label>--}}
{{--                                                            <input type="text" id="search_address" class="form-control"--}}
{{--                                                                   name="address" placeholder="address..." value="{{ old('address') }}"/>--}}
{{--                                                            @error("address")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-2 col-form-label">--}}
{{--                                                            <label for="first-name">Postal Code</label>--}}
{{--                                                            <input type="text" id="first-name" class="form-control"--}}
{{--                                                                   name="postal_code" placeholder="postal code..." value="{{ old('postal_code') }}"/>--}}
{{--                                                            @error("postal_code")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <div class="form-group row">--}}

{{--                                                                <input type="hidden" id="lat" class="form-control"--}}
{{--                                                                       name="latitude" value="{{ old('latitude') }}"/>--}}
{{--                                                                <input type="hidden" id="lng" class="form-control"--}}
{{--                                                                       name="longitude" value="{{ old('longitude') }}"/>--}}

{{--                                                                @error("latitude")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                                @error("longitude")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}

{{--                                                                <div class="w-100" style="height: 350px;" id="selectLocation"></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">City
                                                     <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="city" placeholder="City" value="{{ old('city') }}"/>
                                                @error("city")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Nationality
                                                     <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="nationality" placeholder="Nationality" value="{{ old('nationality') }}"/>
                                                @error("nationality")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Area/Size of the Property
                                                     <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="area_of_Property" placeholder="Area/Size of the Property" value="{{ old('area_of_Property') }}"/>
                                                @error("area_of_Property")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Number of Laundry--}}
{{--                                                    Rooms <span class="text-danger">*</span></label>--}}
{{--                                                <input type="number" id="first-name" class="form-control"--}}
{{--                                                       name="no_of_laundry_rooms" placeholder="no of laundry rooms" value="{{ old('no_of_laundry_rooms') }}"/>--}}
{{--                                                @error("no_of_laundry_rooms")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Number of--}}
{{--                                                    Garages <span class="text-danger">*</span></label>--}}
{{--                                                <input type="number" id="first-name" class="form-control"--}}
{{--                                                       name="no_of_garages" placeholder="no of garages" value="{{ old('no_of_garages') }}"/>--}}
{{--                                                @error("no_of_garages")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-3 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Area<span class="text-danger">*</span></label>--}}
{{--                                                <input type="number" id="first-name" class="form-control"--}}
{{--                                                       name="square_feats" placeholder="area in square feet" value="{{ old('square_feats') }}"/>--}}
{{--                                                @error("square_feats")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

                                            <div class="col-sm-12 ">
                                                <label class="col-form-label" for="first-name">Address
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="address" placeholder="Others" value="{{ old('address') }}"/>
                                                @error("address")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-form-label" for="first-name">Nature of Query <span
                                                        class="text-danger">*</span></label>
                                                <select name="nature_of_query" class="form-control" id="area_type">
                                                    <option selected disabled value="">Select Nature of Query</option>
                                                    <option value="urgent">urgent</option>
                                                    <option value="regular">regular</option>
                                                </select>
                                                @error("nature_of_query")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12">
                                            <label class="col-form-label" for="first-name">Property Details
                                                <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Province
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="province" placeholder="Province" value="{{ old('province') }}"/>
                                                @error("province")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">District
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="district" placeholder="District" value="{{ old('district') }}"/>
                                                @error("district")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Tehsil
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="tehsil" placeholder="Tehsil" value="{{ old('tehsil') }}"/>
                                                @error("tehsil")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Union Council
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="union_council" placeholder="Union Council" value="{{ old('union_council') }}"/>
                                                @error("union_council")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Khewat
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="khewat" placeholder="Khewat" value="{{ old('khewat') }}"/>
                                                @error("khewat")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Khasra
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="khasra" placeholder="Khasra" value="{{ old('khasra') }}"/>
                                                @error("khasra")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label class="col-form-label" for="first-name">Khetoni
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" id="first-name" class="form-control"
                                                       name="khetoni" placeholder="Khetoni" value="{{ old('khetoni') }}"/>
                                                @error("khetoni")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Built--}}
{{--                                                    Year <span class="text-danger">*</span></label>--}}
{{--                                                <input type="date" id="first-name" class="form-control"--}}
{{--                                                       name="built_year" value="{{ old('built_year') }}"/>--}}
{{--                                                @error("built_year")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Built--}}
{{--                                                    Style</label>--}}
{{--                                                <input type="text" id="first-name" class="form-control"--}}
{{--                                                       name="built_style" placeholder="built style" value="{{ old('built_style') }}"/>--}}
{{--                                                @error("built_style")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Purpose <span class="text-danger">*</span></label>--}}
{{--                                                <select name="purpose" class="form-control" id="">--}}
{{--                                                    <option selected disabled value="">Select Purpose</option>--}}
{{--                                                    <option value="sale" {{ old("purpose") == 'sale' ? "selected" : "" }}>Sale</option>--}}
{{--                                                    <option value="rent" {{ old("purpose") == 'rent' ? "selected" : "" }}>Rent</option>--}}
{{--                                                    <option value="for_lease" {{ old("purpose") == 'for_lease' ? "selected" : "" }}>For Lease</option>--}}
{{--                                                    <option value="mortgage" {{ old("purpose") == 'mortgage' ? "selected" : "" }}>Mortgage</option>--}}
{{--                                                    <option value="sold" {{ old("purpose") == 'sold' ? "selected" : "" }}>Sold</option>--}}
{{--                                                    <option value="listing_only" {{ old("purpose") == 'listing_only' ? "selected" : "" }}>Listing Only</option>--}}
{{--                                                </select>--}}
{{--                                                @error("purpose")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Listing--}}
{{--                                                    Source</label>--}}
{{--                                                <input type="text" id="first-name" class="form-control"--}}
{{--                                                       name="listing_source" placeholder="listing source" value="{{ old('listing_source') }}"/>--}}
{{--                                                @error("listing_source")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="first-name">Construction--}}
{{--                                                    Status <span class="text-danger">*</span></label>--}}
{{--                                                <select name="constructions_status" class="form-control" id="">--}}
{{--                                                    <option selected disabled value="">Select Construction--}}
{{--                                                        Status--}}
{{--                                                    </option>--}}
{{--                                                    <option value="foundation" {{ old("constructions_status") == 'foundation' ? "selected" : "" }}>Foundation</option>--}}
{{--                                                    <option value="grey_structure" {{ old("constructions_status") == 'grey_structure' ? "selected" : "" }}>Grey Structure</option>--}}
{{--                                                    <option value="under_construction" {{ old("constructions_status") == 'under_construction' ? "selected" : "" }}>Under Construction--}}
{{--                                                    </option>--}}
{{--                                                    <option value="semi_finished" {{ old("constructions_status") == 'semi_finished' ? "selected" : "" }}>Semi Finished</option>--}}
{{--                                                    <option value="constructed" {{ old("constructions_status") == 'constructed' ? "selected" : "" }}>Constructed</option>--}}
{{--                                                </select>--}}
{{--                                                @error("constructions_status")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="registry">Registry <span class="text-danger">*</span></label>--}}
{{--                                                <select name="registry" class="form-control" id="registry">--}}
{{--                                                    <option value="yes" {{ old("registry") == 'yes' ? "selected" : "" }}>Yes</option>--}}
{{--                                                    <option value="no" {{ old("registry") == 'no' ? "selected" : "" }}>No</option>--}}
{{--                                                    <option value="under_process" {{ old("registry") == 'under_process' ? "selected" : "" }}>Under Process</option>--}}
{{--                                                </select>--}}
{{--                                                @error("registry")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="mutation">Mutation <span class="text-danger">*</span></label>--}}
{{--                                                <select name="mutation" class="form-control" id="mutation">--}}
{{--                                                    <option value="yes" {{ old("mutation") == 'yes' ? "selected" : "" }}>Yes</option>--}}
{{--                                                    <option value="no" {{ old("mutation") == 'no' ? "selected" : "" }}>No</option>--}}
{{--                                                    <option value="under_process" {{ old("mutation") == 'under_process' ? "selected" : "" }}>Under Process</option>--}}
{{--                                                </select>--}}
{{--                                                @error("mutation")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
                                            <div class="col-sm-6">
                                                <label class="col-form-label" for="registry_file">Registry File</label>
                                                <input type="file" id="registry_file" class="form-control"
                                                       name="registry_file" value="{{ old('registry_file') }}"/>
                                                @error("registry_file")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="l3" class="col-sm-2 col-form-label">L3</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" id="list3">--}}
{{--                                                        <label class="form-check-label" for="list3">--}}
{{--                                                            I need financial investment report of the property--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="l4" class="col-sm-2 col-form-label">L4</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" id="list4">--}}
{{--                                                        <label class="form-check-label" for="list4">--}}
{{--                                                            I need construction & structure assessment--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="l5" class="col-sm-2 col-form-label">L5</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" id="list5">--}}
{{--                                                        <label class="form-check-label" for="list5">--}}
{{--                                                            I need services for large scale society project--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="city_approval">City Approval <span class="text-danger">*</span></label>--}}
{{--                                                <select name="city_approval" class="form-control" id="city_approval">--}}
{{--                                                    <option value="yes" {{ old("city_approval") == 'yes' ? "selected" : "" }}>Yes</option>--}}
{{--                                                    <option value="no" {{ old("city_approval") == 'no' ? "selected" : "" }}>No</option>--}}
{{--                                                    <option value="under_process" {{ old("city_approval") == 'under_process' ? "selected" : "" }}>Under Process</option>--}}
{{--                                                </select>--}}
{{--                                                @error("city_approval")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6">--}}
{{--                                                <label class="col-form-label" for="thumbnail">Thumbnail <span class="text-danger">*</span></label>--}}
{{--                                                <input type="file" id="thumbnail" class="form-control"--}}
{{--                                                       name="thumbnail" accept="image/*" value="{{ old('thumbnail') }}"/>--}}
{{--                                                @error("thumbnail")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6">--}}
{{--                                                <label class="col-form-label" for="images">Images</label>--}}
{{--                                                <input type="file" id="images" class="form-control"--}}
{{--                                                       name="images[]" multiple accept="image/*" value="{{ old('images') }}"/>--}}
{{--                                                @error("images")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                            <div class="col-sm-12 ">--}}
{{--                                                <label class="col-form-label" for="images">Meta Tags</label> <br>--}}
{{--                                                <textarea name="meta_tags" id="meta_tags" class="form-control" rows="10" value="{{ old('meta_tags') }}" placeholder='<meta name="meta name" content="meta description">'></textarea>--}}
{{--                                                @error("meta_tags")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <div class="col-sm-12">--}}
{{--                                                <label for="first-name">Description</label>--}}

{{--                                                <textarea class="form-control" name="description" id=""--}}
{{--                                                          cols="30" rows="5" placeholder="listing description">{{ old('description') }}</textarea>--}}
{{--                                                @error("description")--}}
{{--                                                <span class="text-danger"--}}
{{--                                                      style="text-align: right">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                            </div>
                        </div>

{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">Video Area</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <div class="col-sm-6 col-form-label">--}}
{{--                                                <label for="video_title">Video Title</label>--}}
{{--                                                <input type="text" id="video_title" class="form-control"--}}
{{--                                                       name="video_title" placeholder="video title.." value="{{ old('video_title') }}"/>--}}
{{--                                                @error("video_title")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6 ">--}}
{{--                                                <label class="col-form-label" for="video_url">Video Link</label>--}}
{{--                                                <input type="url" id="video_url" class="form-control" placeholder="url"--}}
{{--                                                       name="video_url" value="{{ old('video_url') }}"/>--}}
{{--                                                @error("video_url")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-12 col-form-label">--}}
{{--                                                <label for="video_description">Video Description</label>--}}
{{--                                                <textarea class="form-control" placeholder="video description..." name="video_description" id="video_description"--}}
{{--                                                          cols="30" rows="5">{{ old('video_description') }}</textarea>--}}
{{--                                                @error("video_description")--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">Pricing Area</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6 ">--}}
{{--                                        <label class="col-form-label" for="first-name">Amount Per Square--}}
{{--                                            Feet <span class="text-danger">*</span></label>--}}
{{--                                        <input type="number" id="first-name" class="form-control"--}}
{{--                                               name="amount_per_square_feet" placeholder="amount per square feet" value="{{ old('amount_per_square_feet') }}"/>--}}
{{--                                        @error("amount_per_square_feet")--}}
{{--                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6 ">--}}
{{--                                        <label class="col-form-label" for="first-name">Cost Per Square--}}
{{--                                            Feet <span class="text-danger">*</span></label>--}}
{{--                                        <input type="number" id="first-name" class="form-control"--}}
{{--                                               name="cost_per_square_feet" placeholder="cost per square feet" value="{{ old('cost_per_square_feet') }}"/>--}}
{{--                                        @error("cost_per_square_feet")--}}
{{--                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <label class="col-form-label" for="first-name">Installment Per--}}
{{--                                            Month <span class="text-danger">*</span></label>--}}
{{--                                        <input type="number" id="first-name" class="form-control"--}}
{{--                                               name="installment_per_month" placeholder="installment per month" value="{{ old('installment_per_month') }}"/>--}}
{{--                                        @error("installment_per_month")--}}
{{--                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <label class="col-form-label" for="price">Price <span class="text-danger">*</span></label>--}}
{{--                                        <input type="number" id="price" class="form-control"--}}
{{--                                               name="price" placeholder="Price" value="{{ old('price') }}"/>--}}
{{--                                        @error("price")--}}
{{--                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <label for="first-name">Summary</label>--}}

{{--                                        <textarea class="form-control" name="summary" id="" cols="30"--}}
{{--                                                  rows="5" placeholder="summery">{{ old('summary') }}</textarea>--}}
{{--                                        @error("summary")--}}
{{--                                        <span class="text-danger"--}}
{{--                                              style="text-align: right">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}




                                <div class="col-sm-12 my-2">
                                    <label class="col-form-label" for="first-name">I need following services for all the above mentioned property :
                                        <span class="text-danger">*</span></label>
                                    <div class="row mb-1">
                                        <label for="l1" class="col-sm-1 col-form-label">L1</label>
                                        <div class="col-sm-11">
                                            <div class="form-check col-form-label">
                                                <input class="form-check-input " name="list_one" value="list_one" type="checkbox" id="list2">
                                                <label class="form-check-label " for="list2">
                                                    Financial property ownership details
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="l2" class="col-sm-1 col-form-label">L2</label>
                                        <div class="col-sm-11">
                                            <div class="form-check col-form-label">
                                                <input class="form-check-input" name="list_two" value="list_two" type="checkbox" id="list2">
                                                <label class="form-check-label" for="list2">
                                                    Financial valuation as well
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="l2" class="col-sm-1 col-form-label">L3</label>
                                        <div class="col-sm-11">
                                            <div class="form-check col-form-label">
                                                <input class="form-check-input" name="list_three" value="list_three" type="checkbox" id="list2">
                                                <label class="form-check-label" for="list2">
                                                    Financial investment report of the property
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="l2" class="col-sm-1 col-form-label">L4</label>
                                        <div class="col-sm-11">
                                            <div class="form-check col-form-label">
                                                <input class="form-check-input" name="list_four" value="list_four" type="checkbox" id="list2">
                                                <label class="form-check-label" for="list2">
                                                    Construction & structure assessment
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="l2" class="col-sm-1 col-form-label">L5</label>
                                        <div class="col-sm-11">
                                            <div class="form-check col-form-label">
                                                <input class="form-check-input"  name="list_five" value="list_five" type="checkbox" id="list2">
                                                <label class="form-check-label" for="list2">
                                                    Services for large scale society project
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>



{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">Appliance</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="feature-repeater">--}}
{{--                                            <div data-repeater-list="appliance">--}}
{{--                                                <div data-repeater-item>--}}
{{--                                                    <div class="row d-flex align-items-end">--}}
{{--                                                        <div class="col-md-6 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="appliance_name">Select Appliance <span class="text-danger">*</span></label>--}}
{{--                                                                <select class="form-control"--}}
{{--                                                                        name="appliance_id"--}}
{{--                                                                        id="appliance_name"--}}
{{--                                                                        aria-describedby="itemname">--}}
{{--                                                                    --}}{{--                                                                    <option selected disabled value="">--}}
{{--                                                                    --}}{{--                                                                        Select Appliance Name--}}
{{--                                                                    --}}{{--                                                                    </option>--}}
{{--                                                                    @foreach($appliances as $appliance)--}}
{{--                                                                        <option--}}
{{--                                                                            value="{{$appliance->id}}">{{$appliance->name}}</option>--}}
{{--                                                                    @endforeach--}}
{{--                                                                </select>--}}
{{--                                                                @error("appliance_id")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-6 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="appliance_count">Count <span class="text-danger">*</span></label>--}}
{{--                                                                <input type="number" name="count"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       id="count" value="{{ old('count') }}" placeholder="1"/>--}}
{{--                                                                @error("count")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-12 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="appliance_description">Description</label>--}}
{{--                                                                <textarea name="description" id="appliance_description" cols="30" class="form-control"--}}
{{--                                                                          rows="8" placeholder="write specification of Appliance">{{ old('description') }}</textarea>--}}
{{--                                                                @error("description")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12 mb-50">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <button--}}
{{--                                                                    class="btn btn-outline-danger text-nowrap px-1"--}}
{{--                                                                    data-repeater-delete type="button">--}}
{{--                                                                    <i data-feather="x"--}}
{{--                                                                       class="mr-25"></i>--}}
{{--                                                                    <span>Delete</span>--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <hr/>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <button class="btn btn-icon btn-primary"--}}
{{--                                                            type="button" data-repeater-create>--}}
{{--                                                        <i data-feather="plus" class="mr-25"></i>--}}
{{--                                                        <span>Add New</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">Features</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="feature-repeater">--}}
{{--                                            <div data-repeater-list="feature">--}}
{{--                                                <div data-repeater-item>--}}
{{--                                                    <div class="row d-flex align-items-end">--}}
{{--                                                        <div class="col-md-6 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="feature_name">Select--}}
{{--                                                                    Feature <span class="text-danger">*</span></label>--}}
{{--                                                                <select class="form-control"--}}
{{--                                                                        name="feature_id"--}}
{{--                                                                        id="feature_name"--}}
{{--                                                                        aria-describedby="itemname">--}}
{{--                                                                    --}}{{--                                                                    <option selected disabled value="">--}}
{{--                                                                    --}}{{--                                                                        Select Feature Name--}}
{{--                                                                    --}}{{--                                                                    </option>--}}
{{--                                                                    @foreach($features as $feature)--}}
{{--                                                                        <option--}}
{{--                                                                            value="{{$feature->id}}">{{$feature->name}}</option>--}}
{{--                                                                    @endforeach--}}
{{--                                                                </select>--}}
{{--                                                                @error("feature_id")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-6 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="feature_count">Count <span class="text-danger">*</span></label>--}}
{{--                                                                <input type="number" name="count"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       id="feature_count" value="" placeholder="1"/>--}}
{{--                                                                @error("count")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12 mb-50">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <button--}}
{{--                                                                    class="btn btn-outline-danger text-nowrap px-1"--}}
{{--                                                                    data-repeater-delete type="button">--}}
{{--                                                                    <i data-feather="x"--}}
{{--                                                                       class="mr-25"></i>--}}
{{--                                                                    <span>Delete</span>--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <hr/>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <button class="btn btn-icon btn-primary"--}}
{{--                                                            type="button" data-repeater-create>--}}
{{--                                                        <i data-feather="plus" class="mr-25"></i>--}}
{{--                                                        <span>Add New</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">Facilities</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="invoice-repeater">--}}
{{--                                            <div data-repeater-list="facilities">--}}
{{--                                                <div data-repeater-item>--}}
{{--                                                    <div class="row d-flex align-items-end">--}}
{{--                                                        <div class="col-md-4 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="itemname">Facility--}}
{{--                                                                    Type <span class="text-danger">*</span></label>--}}
{{--                                                                <select class="form-control"--}}
{{--                                                                        name="facility_id"--}}
{{--                                                                        id="itemname"--}}
{{--                                                                        aria-describedby="itemname">--}}
{{--                                                                    --}}{{--                                                                        <option selected disabled--}}
{{--                                                                    --}}{{--                                                                                value="">Select--}}
{{--                                                                    --}}{{--                                                                            Facility Type--}}
{{--                                                                    --}}{{--                                                                        </option>--}}
{{--                                                                    @foreach($facilities as $facility)--}}
{{--                                                                        <option value="{{$facility->id}}">{{$facility->type}}</option>--}}
{{--                                                                    @endforeach--}}
{{--                                                                </select>--}}
{{--                                                                @error("facility_id")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-4 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="facility_name">Facility--}}
{{--                                                                    Name <span class="text-danger">*</span></label>--}}
{{--                                                                <input type="name"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       name="name"--}}
{{--                                                                       id="facility_name"--}}
{{--                                                                       placeholder="facility name"--}}
{{--                                                                       aria-describedby="itemquantity"/>--}}
{{--                                                                @error("name")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="itemquantity">Distance(in KM) <span class="text-danger">*</span></label>--}}
{{--                                                                <input type="number"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       name="distance"--}}
{{--                                                                       id="itemquantity"--}}
{{--                                                                       aria-describedby="itemquantity"--}}
{{--                                                                       placeholder="1"/>--}}
{{--                                                                @error("distance")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="staticprice">Min--}}
{{--                                                                    Grade <span class="text-danger">*</span></label>--}}
{{--                                                                <input type="text"--}}
{{--                                                                       name="min_grade"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       id="staticprice"--}}
{{--                                                                       value="{{ old('min_grade') }}" placeholder="min grade"/>--}}
{{--                                                                @error("min_grade")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="staticprice">Max--}}
{{--                                                                    Grade <span class="text-danger">*</span></label>--}}
{{--                                                                <input type="text"--}}
{{--                                                                       name="max_grade"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       id="staticprice"--}}
{{--                                                                       value="{{ old('max_grade') }}"--}}
{{--                                                                       placeholder="max grade"/>--}}
{{--                                                                @error("max_grade")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <button type="button"--}}
{{--                                                                        class="btn btn-outline-primary btn-block facilityLocationModalBtn"--}}
{{--                                                                        data-toggle="modal"--}}
{{--                                                                        data-target="#selectFacilityLocationModal">--}}
{{--                                                                    <i data-feather="map-pin" class="mr-25"></i>--}}
{{--                                                                    <span>Location</span>--}}
{{--                                                                </button>--}}

{{--                                                                <div class="facilityLocationDiv">--}}
{{--                                                                    <input type="hidden" name="lat" id="facility_lat">--}}
{{--                                                                    <input type="hidden" name="lng" id="facility_lng">--}}
{{--                                                                    <input type="hidden" name="map_location" id="facility_location">--}}
{{--                                                                </div>--}}

{{--                                                                @error("lat")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                                @error("lng")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="rate col-md-2 col-12 form-group ">--}}
{{--                                                            <label for="rating">Rating <span class="text-danger">*</span></label>--}}
{{--                                                            <select name="rating"--}}
{{--                                                                    class="form-control"--}}
{{--                                                                    id="rating">--}}
{{--                                                                <option value="1">1</option>--}}
{{--                                                                <option value="2">2</option>--}}
{{--                                                                <option value="3">3</option>--}}
{{--                                                                <option value="4">4</option>--}}
{{--                                                                <option value="5">5</option>--}}
{{--                                                            </select>--}}
{{--                                                            @error("rating")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2 col-12 mb-50">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <button--}}
{{--                                                                    class="btn btn-outline-danger text-nowrap px-1"--}}
{{--                                                                    data-repeater-delete--}}
{{--                                                                    type="button">--}}
{{--                                                                    <i data-feather="x"--}}
{{--                                                                       class="mr-25"></i>--}}
{{--                                                                    <span>Delete</span>--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <hr/>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <button class="btn btn-icon btn-primary"--}}
{{--                                                            type="button" data-repeater-create>--}}
{{--                                                        <i data-feather="plus"--}}
{{--                                                           class="mr-25"></i>--}}
{{--                                                        <span>Add New</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">Address</h4>--}}
{{--                                <div class="custom-control custom-switch custom-control-inline">--}}
{{--                                    <span class="switch-label mr-1">Hide Address</span>--}}
{{--                                    <input type="checkbox" class="custom-control-input" name="hide_address" id="hide_address" value="true">--}}
{{--                                    <label class="custom-control-label" for="hide_address">--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-10 col-form-label">--}}
{{--                                        <label for="search_address">Address <span class="text-danger">*</span></label>--}}
{{--                                        <input type="text" id="search_address" class="form-control"--}}
{{--                                               name="address" placeholder="address..." value="{{ old('address') }}"/>--}}
{{--                                        @error("address")--}}
{{--                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-2 col-form-label">--}}
{{--                                        <label for="first-name">Postal Code</label>--}}
{{--                                        <input type="text" id="first-name" class="form-control"--}}
{{--                                               name="postal_code" placeholder="postal code..." value="{{ old('postal_code') }}"/>--}}
{{--                                        @error("postal_code")--}}
{{--                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group row">--}}

{{--                                            <input type="hidden" id="lat" class="form-control"--}}
{{--                                                   name="latitude" value="{{ old('latitude') }}"/>--}}
{{--                                            <input type="hidden" id="lng" class="form-control"--}}
{{--                                                   name="longitude" value="{{ old('longitude') }}"/>--}}

{{--                                            @error("latitude")--}}
{{--                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                            @enderror--}}
{{--                                            @error("longitude")--}}
{{--                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                            @enderror--}}

{{--                                            <div class="w-100" style="height: 350px;" id="selectLocation"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mr-1">Upload</button>
                                        <a href="{{route('user.listing.list')}}" class="btn btn-outline-secondary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </section>
            </div>
        </div>
    </div>
    <div class="modal fade" id="selectFacilityLocationModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel33" style="display: none; padding-right: 17px; overflow: auto; "
         aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Select Facility Location</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-y:auto;">
                    <div class=" row">
                        <div class="col-12 float-left">
                            <div class="form-group">
                                <label for="">Search Location</label>
                                <input type="text" class="form-control" id="search_facility_location"
                                       placeholder="search location">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="w-100" style="height: 350px;" id="selectFacilityLocation"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeButton" class="btn btn-primary mb-1 waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Content-->
@endsection
@section('quillJs')
    <script src="{{asset("second-admin/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/js/scripts/forms/form-repeater.js")}}"></script>
    {{--    <script src="{{asset("second-admin/app-assets/js/scripts/extensions/ext-component-ratings.js")}}"></script>--}}
    <script src="{{asset('admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts&libraries=places&v=3&sensor=false"></script>

    <script>

        var npls_number;

        $(document).ready(function () {
            $('#npls_number').val(randomNPLSNumber())
        })

        $('#city_id').on('change',function () {

            $.ajax({
                url: '{{ url("/admin/listing/city-change") }}' + '/' + $(this).val(),
                method: 'GET',
                success: function (response) {

                    $('#town_id').empty();

                    var options = '';

                    $.each(response.towns, function (key, value) {
                        options += '<option value="' + value.id + '">' + value.name + '</option>';
                    });

                    $('#town_id').append(options);
                }
            })

            $('#npls_number').val(randomNPLSNumber())
        })

        function randomNPLSNumber() {
            var seq = (Math.floor(Math.random() * 10000) + 10000).toString().substring(1);
            var city_name = $('#city_id option:selected').text();
            city_name = city_name.substring(0, 2);
            npls_number = city_name.toUpperCase() + seq;

            return npls_number;
        }

        $(function () {
            $('.select2').select2({
                placeholder: "select"
            })
        })

        //Set up some of our variables.
        var map; //Will contain map object.
        var marker = false; ////Has the user plotted their location marker?

        //Function called to initialize / create the map.
        //This is called when the page has loaded.
        function initMap() {

            //The center location of our map.
            var centerOfMap = new google.maps.LatLng(31.520370, 74.358749);

            //Map options.
            var options = {
                gestureHandling: "greedy",
                center: centerOfMap, //Set center.
                zoom: 7 //The zoom value.
            };

            //Create the map object.
            map = new google.maps.Map(document.getElementById('selectLocation'), options);

            const input = document.getElementById('search_address');
            const searchBox = new google.maps.places.SearchBox(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    marker = new google.maps.Marker({
                        map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                        draggable: true,
                    });

                    markers.push(marker);

                    markerLocation();
                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        markerLocation();
                    });

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

        //This function will get the marker's current location and then add the lat/long
        //values to our textfields so that we can save the location.
        function markerLocation() {
            //Get location.
            var currentLocation = marker.getPosition();
            //Add lat and lng values to a field that we can save.
            document.getElementById('lat').value = currentLocation.lat(); //latitude
            document.getElementById('lng').value = currentLocation.lng(); //longitude
        }

        //Load the map when the page has finished loading.
        google.maps.event.addDomListener(window, 'load', initMap);

    </script>
    <script>

        //Function called to initialize / create the map.
        //This is called when the page has loaded.
        function initFacilityMap() {

            //Set up some of our variables.
            var map; //Will contain map object.
            var fmarker = false; ////Has the user plotted their location marker?
            var fmarkers = [];

            //The center location of our map.
            var centerOfMap = new google.maps.LatLng(31.520370, 74.358749);

            //Map options.
            var options = {
                gestureHandling: "greedy",
                center: centerOfMap, //Set center.
                zoom: 7 //The zoom value.
            };

            //Create the map object.
            map = new google.maps.Map(document.getElementById('selectFacilityLocation'), options);

            const input = document.getElementById('search_facility_location');
            const searchBox = new google.maps.places.SearchBox(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                fmarkers.forEach((fmarker) => {
                    fmarker.setMap(null);
                });
                fmarkers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    fmarker = new google.maps.Marker({
                        map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                        draggable: true,
                    });

                    fmarkers.push(fmarker);

                    facilityMarkerLocation();
                    google.maps.event.addListener(fmarker, 'dragend', function (event) {
                        facilityMarkerLocation();
                    });

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });

            let facilityLatInput = null;
            let facilityLngInput = null;
            let facilityLocation = null;

            $('body').on('click', '.facilityLocationModalBtn', function () {

                facilityLatInput = $(this).next('.facilityLocationDiv').children('#facility_lat');
                facilityLngInput = $(this).next('.facilityLocationDiv').children('#facility_lng');
                facilityLocation = $(this).next('.facilityLocationDiv').children('#facility_location');

                if(facilityLatInput.val() || facilityLngInput.val()) {
                    $('#search_facility_location').val(facilityLocation.val());
                    let latLng = new google.maps.LatLng(facilityLatInput.val(), facilityLngInput.val());
                    map.setCenter(latLng)
                    fmarker.setPosition(latLng)
                }
            })

            //This function will get the marker's current location and then add the lat/long
            //values to our textfields so that we can save the location.

            function facilityMarkerLocation() {
                //Get location.
                var currentLocation = fmarker.getPosition();
                //Add lat and lng values to a field that we can save.

                $("input[name='" + facilityLatInput.attr('name') + "']").val(currentLocation.lat()) //latitude
                $("input[name='" + facilityLngInput.attr('name') + "']").val(currentLocation.lng()) //longitude
                $("input[name='" + facilityLocation.attr('name') + "']").val($('#search_facility_location').val()) //location
            }
        }

        //Load the map when the page has finished loading.
        google.maps.event.addDomListener(window, 'load', initFacilityMap);

    </script>

@endsection

