@section('page-title','Edit Listing')
@extends('user.layouts.master')
@section('quillStyle')

    {{--    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/css/plugins/extensions/ext-component-ratings.css")}}">
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
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Details</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post" action="{{route('user.listing_details.update',$listing->id)}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 ">

                                                        <label class="col-form-label" for="first-name">Name<span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$listing->name}}" placeholder=" title" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">CNIC</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="cnic"  value="{{$listing->cnic}}" placeholder=" cnic" />
                                                        @error("cnic")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
{{--                                                    <div class="col-sm-12 ">--}}
{{--                                                        <label class="col-form-label" for="first-name">Property Name<span class="text-danger">*</span></label>--}}
{{--                                                        <select class="form-control" name="property_id" id="">--}}
{{--                                                            <option selected disabled value="">Select Property</option>--}}
{{--                                                            @foreach($properties as $property)--}}
{{--                                                                <option value="{{$property->id}}"--}}
{{--                                                                        @foreach($listing->property as $listingProperty)--}}
{{--                                                                        @if($listingProperty->id == $property->id)--}}
{{--                                                                        selected--}}
{{--                                                                    @endif--}}
{{--                                                                    @endforeach--}}
{{--                                                                >{{$property->title}}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        </select>--}}
{{--                                                        @error("property_id")--}}
{{--                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-sm-2">--}}
{{--                                                        <label class="col-form-label" for="city_id">City Name</label>--}}
{{--                                                        <select class="form-control" name="city_id" id="city_id">--}}
{{--                                                            @foreach($cities as $city)--}}
{{--                                                                <option value="{{$city->id}}" {{ $defaultCity->id == $city->id ? "selected" : "" }}>{{$city->name}}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        </select>--}}
{{--                                                        @error("city_id")--}}
{{--                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-sm-2">--}}
{{--                                                        <label class="col-form-label" for="first-name">Town Name <span class="text-danger">*</span></label>--}}
{{--                                                        <select class="form-control" name="town_id" id="town_id">--}}
{{--                                                            @foreach($defaultCity->town as $town)--}}
{{--                                                                <option value="{{$town->id}}" {{ $town->id == $listing->town_id ? "selected" : "" }}>{{$town->name}}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        </select>--}}
{{--                                                        @error("town_id")--}}
{{--                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-sm-2">--}}
{{--                                                        <label class="col-form-label" for="npls_number">NPLS Number<span class="text-danger">*</span></label>--}}
{{--                                                        <input type="text"  id="npls_number" class="form-control"--}}
{{--                                                               name="npls_number" placeholder="LA5544" value="{{ $listing->npls_number }}"/>--}}
{{--                                                        @error("npls_number")--}}
{{--                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}
                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">Category
                                                            <span class="text-danger">*</span></label>
                                                        <select class="form-control "
                                                                name="category" id="" >
                                                            <option value="" selected disabled>Select Category</option>

                                                            <option
                                                                value="Commercial" {{ $listing->category === 'Commercial' ? 'selected' : '' }}>
                                                                Commercial
                                                            </option>
                                                            <option
                                                                value="Residential" {{ $listing->category === 'Residential' ? 'selected' : '' }}>
                                                                Residential
                                                            </option>
{{--                                                            <option value="Commercial">Commercial</option>--}}
{{--                                                            <option value="Residential">Residential</option>--}}
{{--                                                            <option value="Agriculture">Agriculture</option>--}}
                                                        </select>
                                                        @error("category_id")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">Sub-category
                                                            <span class="text-danger">*</span></label>
                                                        <select class="form-control "
                                                                name="sub_category" id="" >
                                                            <option value="" selected disabled>Select Sub-category</option>
                                                            <option
                                                                value="Empty land" {{ $listing->sub_category === 'Empty land' ? 'selected' : '' }}>
                                                                Empty land
                                                            </option>
                                                            <option
                                                                value="Plot" {{ $listing->sub_category === 'Plot' ? 'selected' : '' }}>
                                                                Plot
                                                            </option>
{{--                                                            <option value="Empty land">Empty land</option>--}}
{{--                                                            <option value="Plot">Plot</option>--}}
{{--                                                            <option value="House">House</option>--}}
{{--                                                            <option value="Apartment">Apartment</option>--}}
{{--                                                            <option value="Shop">Shop</option>--}}
{{--                                                            <option value="Plaza">Plaza</option>--}}
{{--                                                            <option value="Society">Society</option>--}}
                                                        </select>
                                                        @error("category_ids")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    </div>


                                                    {{--                                                    <div class="col-sm-6 ">--}}
                                                    {{--                                                        <label class="col-form-label" for="first-name">Feature</label>--}}
                                                    {{--                                                        <select class="form-control" name="feature_id" id="">--}}
                                                    {{--                                                            <option selected disabled value="">Select Feature Name</option>--}}
                                                    {{--                                                            @foreach($features as $feature)--}}
                                                    {{--                                                                <option  value="{{$feature->id}}"--}}
                                                    {{--                                                                @if($listing->features == $feature->id)--}}
                                                    {{--                                                                    selected--}}
                                                    {{--                                                                @endif--}}
                                                    {{--                                                                >{{$feature->name}}</option>--}}
                                                    {{--                                                            @endforeach--}}
                                                    {{--                                                        </select>--}}
                                                    {{--                                                        @error("feature_id")--}}
                                                    {{--                                                        <span class="text-danger">{{ $message }}</span>--}}
                                                    {{--                                                        @enderror--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="col-sm-6 ">--}}
                                                    {{--                                                        <label class="col-form-label" for="first-name">Facility</label>--}}
                                                    {{--                                                        <select class="form-control" name="facility_id" id="">--}}
                                                    {{--                                                            <option selected disabled value="">Select Facility Name</option>--}}
                                                    {{--                                                            @foreach($facilities as $facility)--}}
                                                    {{--                                                                <option  value="{{$facility->id}}">{{$facility->type}}</option>--}}

                                                    {{--                                                            @endforeach--}}
                                                    {{--                                                        </select>--}}
                                                    {{--                                                        @error("facility_id")--}}
                                                    {{--                                                        <span class="text-danger">{{ $message }}</span>--}}
                                                    {{--                                                        @enderror--}}
                                                    {{--                                                    </div>--}}

                                                    {{--                                                </div>--}}
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Others<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="others" value="{{$listing->others}}" placeholder="others " />
                                                            @error("others")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label class="col-form-label" for="first-name">Nature of Query<span
                                                                    class="text-danger">*</span></label>
                                                            <select name="nature_of_query" class="form-control" id="nature_of_query">
                                                                <option selected disabled value="">Select Nature of Query</option>
                                                                <option
                                                                    value="urgent" {{ ($listing->nature_of_query === 'urgent'? 'selected' : '')}}>
                                                                    urgent
                                                                </option>
                                                                <option
                                                                    value="regular" {{ ($listing->nature_of_query === 'regular'? 'selected' : '')}}>
                                                                    regular
                                                                </option>
                                                            </select>
                                                            @error("area_type")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <label class="col-form-label" for="first-name">Status<span class="text-danger">*</span></label>--}}
{{--                                                            <select name="status" id="" class="form-control">--}}
{{--                                                                <option {{$listing->status === '1'? 'selected' : ''}}>Active</option>--}}
{{--                                                                <option {{$listing->status === '0'? 'selected' : ''}}>UnActive</option>--}}

{{--                                                            </select>--}}
{{--                                                            --}}{{--                                                        <input type="text" id="first-name" class="form-control"--}}
{{--                                                            --}}{{--                                                               name="status" value="{{$listing->status}}" placeholder=" " />--}}
{{--                                                            @error("status")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Cell Phone<span class="text-danger">*</span></label>
                                                            <input type="number" id="first-name" class="form-control"
                                                                   name="phone_no" value="{{$listing->phone_no}}" placeholder=" " />
                                                            @error("phone_no")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Telephone no<span class="text-danger">*</span></label>
                                                            <input type="number" id="first-name" class="form-control"
                                                                   name="telephone_no" value="{{$listing->telephone_no}}" placeholder=" " />
                                                            @error("telephone_no")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Email<span class="text-danger">*</span></label>
                                                            <input type="email" id="first-name" class="form-control"
                                                                   name="email" value="{{$listing->email}}" placeholder=" " />
                                                            @error("email")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">City<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="city" value="{{$listing->city}}" placeholder=" " />
                                                            @error("city")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Nationality<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="nationality" value="{{$listing->nationality}}" placeholder=" " />
                                                            @error("nationality")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Area of Property<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="area_of_Property" value="{{$listing->area_of_Property}}" placeholder=" " />
                                                            @error("area_of_Property")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-12 ">
                                                            <label class="col-form-label" for="first-name">Address<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="address" value="{{$listing->address}}" placeholder=" " />
                                                            @error("address")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <label class="col-form-label" for="first-name">Property Details
                                                                <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Province<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="province" value="{{$listing->province}}" placeholder=" " />
                                                            @error("province")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">District<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="district" value="{{$listing->district}}" placeholder=" " />
                                                            @error("district")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label" for="first-name">Tehsil<span class="text-danger">*</span></label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="tehsil" value="{{$listing->tehsil}}" placeholder=" " />
                                                            @error("tehsil")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

{{--                                                        <div class="col-sm-3">--}}
{{--                                                            <label class="col-form-label" for="first-name">Area Type <span--}}
{{--                                                                    class="text-danger">*</span></label>--}}
{{--                                                            <select name="area_type" class="form-control" id="area_type">--}}
{{--                                                                <option selected disabled value="">Select Area Type</option>--}}
{{--                                                                @foreach(getPossibleEnumValues('listings','area_type') as $area_type)--}}
{{--                                                                    <option value="{{$area_type}}" {{$area_type === $listing->area_type ? 'selected' : ''}}>{{ucfirst($area_type)}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}
{{--                                                            @error("area_type")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Union council<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="date" id="first-name" class="form-control"--}}
{{--                                                                   name="union_council" value="{{$listing->union_council}}" placeholder=" " />--}}
{{--                                                            @error("union_council")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Khewat</label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="khewat" value="{{$listing->khewat}}" placeholder=" " />
                                                            @error("khewat")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Union council</label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="union_council" value="{{$listing->union_council}}" placeholder=" " />
                                                            @error("union_council")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Khasra</label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="khasra" value="{{$listing->khasra}}" placeholder=" " />
                                                            @error("khasra")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="first-name">Khetoni</label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="khetoni" value="{{$listing->khetoni}}" placeholder=" " />
                                                            @error("khetoni")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Purpose<span class="text-danger">*</span></label>--}}
{{--                                                            <select name="purpose" class="form-control" id="">--}}
{{--                                                                <option selected disabled value="">Select Purpose</option>--}}
{{--                                                                <option value="sale" {{ ($listing->purpose === 'sale'? 'selected' : '')}}>Sale</option>--}}
{{--                                                                <option value="rent" {{ ($listing->purpose === 'rent'? 'selected' : '')}}>Rent</option>--}}
{{--                                                                <option value="for_lease" {{ ($listing->purpose === 'for_lease'? 'selected' : '')}}>For Lease</option>--}}
{{--                                                                <option value="mortgage" {{ ($listing->purpose === 'mortgage'? 'selected' : '')}}>Mortgage</option>--}}
{{--                                                                <option value="sold" {{ $listing->purpose === 'sold' ? "selected" : "" }}>Sold</option>--}}
{{--                                                                <option value="listing_only" {{ ($listing->purpose === 'listing_only'? 'selected' : '')}}>Listing Only</option>--}}
{{--                                                            </select>--}}

{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Listing Source</label>--}}
{{--                                                            <input type="text" id="first-name" class="form-control"--}}
{{--                                                                   name="listing_source" value="{{$listing->listing_source}}" placeholder=" " />--}}
{{--                                                            @error("listing_source")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Construction Status<span class="text-danger">*</span></label>--}}
{{--                                                            <select name="constructions_status" class="form-control" id="">--}}
{{--                                                                <option selected disabled value="">Select Construction Status</option>--}}
{{--                                                                <option value="foundation" {{ ($listing->constructions_status === 'foundation'? 'selected' : '')}}>Foundation</option>--}}
{{--                                                                <option value="grey_structure" {{ ($listing->constructions_status === 'grey_structure'? 'selected' : '')}}>Grey Structure</option>--}}
{{--                                                                <option value="under_construction" {{ ($listing->constructions_status === 'under_construction'? 'selected' : '')}}>Under Construction</option>--}}
{{--                                                                <option value="semi_finished" {{ ($listing->constructions_status === 'semi_finished'? 'selected' : '')}}>Semi Finished</option>--}}
{{--                                                                <option value="constructed" {{ ($listing->constructions_status === 'constructed'? 'selected' : '')}}>Constructed</option>--}}
{{--                                                            </select>--}}
{{--                                                            @error("constructions_status")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="registry">Registry<span class="text-danger">*</span></label>--}}
{{--                                                            <select name="registry" class="form-control" id="registry">--}}
{{--                                                                <option selected disabled>Select One</option>--}}
{{--                                                                <option value="yes" {{ $listing->registry === 'yes' ? 'selected' : '' }}>Yes</option>--}}
{{--                                                                <option value="no" {{ $listing->registry === 'no' ? 'selected' : '' }}>No</option>--}}
{{--                                                                <option value="under_process" {{ $listing->registry === 'under_process' ? 'selected' : '' }}>Under Process</option>--}}
{{--                                                            </select>--}}
{{--                                                            @error("registry")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="mutation">Mutation<span class="text-danger">*</span></label>--}}
{{--                                                            <select name="mutation" class="form-control" id="mutation">--}}
{{--                                                                <option value="yes" {{ $listing->mutation == 'yes' ? "selected" : "" }}>Yes</option>--}}
{{--                                                                <option value="no" {{  $listing->mutation == 'no' ? "selected" : "" }}>No</option>--}}
{{--                                                                <option value="under_process" {{  $listing->mutation == 'under_process' ? "selected" : "" }}>Under Process</option>--}}
{{--                                                            </select>--}}
{{--                                                            @error("mutation")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
                                                        <div class="col-sm-6 ">
                                                            <label class="col-form-label" for="registry_file">Registry File</label>
                                                            <input type="file" id="registry_file" class="form-control"
                                                                   name="registry_file"/>
                                                            @error("registry_file")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="city_approval">City Approval<span class="text-danger">*</span></label>--}}
{{--                                                            <select name="city_approval" class="form-control" id="city_approval">--}}
{{--                                                                <option value="yes" {{ $listing->city_approval == 'yes' ? "selected" : "" }}>Yes</option>--}}
{{--                                                                <option value="no" {{ $listing->city_approval == 'no' ? "selected" : "" }}>No</option>--}}
{{--                                                                <option value="under_process" {{ $listing->city_approval == 'under_process' ? "selected" : "" }}>Under Process</option>--}}
{{--                                                            </select>--}}
{{--                                                            @error("city_approval")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="thumbnail">Thumbnail<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="file" id="thumbnail" class="form-control"--}}
{{--                                                                   name="thumbnail" accept="image/*"/>--}}
{{--                                                            @error("thumbnail")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="images">Images</label>--}}
{{--                                                            <input type="file" id="images" class="form-control"--}}
{{--                                                                   name="images[]" multiple accept="image/*" value="{{ old('images') }}"/>--}}
{{--                                                            @error("images")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-12 ">--}}
{{--                                                            <label class="col-form-label" for="images">Meta Tags</label> <br>--}}
{{--                                                            <textarea name="meta_tags" id="meta_tags" class="form-control" rows="10" value="{{ old('meta_tags') }}" placeholder='<meta name="meta name" content="meta description">'>{{$listing->meta_tag}}</textarea>--}}
{{--                                                            @error("meta_tags")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}

                                                    </div>
                                                </div>
                                        </div>
                                                <div class="row mb-1">
                                                    <label for="l2" class="col-sm-1 col-form-label">L1</label>
                                                    <div class="col-sm-11">
                                                        <div class="form-check">
                                                            <input class="form-check-input"  value="list_one" {{ ($listing->list_one === 'list_one' ? 'selected' : '')}} name="list_one" type="checkbox" id="list2">
                                                            <label class="form-check-label" for="list2">
                                                                I need financial property ownership details
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label for="l2" class="col-sm-1 col-form-label">L2</label>
                                                    <div class="col-sm-11">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="list_two" type="checkbox" id="list2">
                                                            <label class="form-check-label" for="list2">
                                                                I need financial valuation as well
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label for="l2" class="col-sm-1 col-form-label">L3</label>
                                                    <div class="col-sm-11">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="list_three" type="checkbox" id="list2">
                                                            <label class="form-check-label" for="list2">
                                                                I need financial investment report of the property
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label for="l2" class="col-sm-1 col-form-label">L4</label>
                                                    <div class="col-sm-11">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="list_four" type="checkbox" id="list2">
                                                            <label class="form-check-label" for="list2">
                                                                I need construction & structure assessment
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label for="l2" class="col-sm-1 col-form-label">L5</label>
                                                    <div class="col-sm-11">
                                                        <div class="form-check">
                                                            <input class="form-check-input"  name="list_five" type="checkbox" id="list2">
                                                            <label class="form-check-label" for="list2">
                                                                I need services for large scale society project
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


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

{{--                                                <div class="col-12">--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        --}}{{--                                                    <div class="col-sm-3 col-form-label">--}}
{{--                                                        --}}{{--                                                    </div>--}}
{{--                                                        <div class="col-sm-12">--}}
{{--                                                            <label for="first-name">Description</label>--}}

{{--                                                            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$listing->description}}</textarea>--}}
{{--                                                            @error("description")--}}
{{--                                                            <span class="text-danger" style="text-align: right">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-header">--}}
{{--                                                    <h4 class="card-title">Video Area</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col-sm-6 col-form-label">--}}
{{--                                                            <label for="video_title">Video Title</label>--}}
{{--                                                            <input type="text" id="video_title" class="form-control"--}}
{{--                                                                   name="video_title" placeholder="video title.." value="{{$listing->video_title }}"/>--}}
{{--                                                            @error("video_title")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="video_url">Video Link</label>--}}
{{--                                                            <input type="url" id="video_url" class="form-control" placeholder="url"--}}
{{--                                                                   name="video_url" value="{{$listing->video_link }}"/>--}}
{{--                                                            @error("video_url")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-12 col-form-label">--}}
{{--                                                            <label for="video_description">Video Description</label>--}}
{{--                                                            <textarea class="form-control" placeholder="video description..." name="video_description" id="video_description"--}}
{{--                                                                      cols="30" rows="5">{{$listing->video_description}}</textarea>--}}
{{--                                                            @error("video_description")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="card-header">--}}
{{--                                                    <h4 class="card-title">Pricing Area</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Amount Per Square Feet<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="number" id="first-name" class="form-control"--}}
{{--                                                                   name="amount_per_square_feet" value="{{$listing->amount_per_square_feet}}" placeholder=" " />--}}
{{--                                                            @error("amount_per_square_feet")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Cost Per Square Feet<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="number" id="first-name" class="form-control"--}}
{{--                                                                   name="cost_per_square_feet" value="{{$listing->cost_per_square_feet}}" placeholder=" " />--}}
{{--                                                            @error("cost_per_square_feet")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-12 ">--}}
{{--                                                            <label class="col-form-label" for="first-name">Installment Per Month<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="number" id="first-name" class="form-control"--}}
{{--                                                                   name="installment_per_month" value="{{$listing->installment_per_month}}" placeholder=" " />--}}
{{--                                                            @error("installment_per_month")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-sm-6 ">--}}
{{--                                                            <label class="col-form-label" for="price">Price<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="number" id="price" class="form-control"--}}
{{--                                                                   name="price" value="{{$listing->price}}" placeholder="Price" />--}}
{{--                                                            @error("price")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-12">--}}
{{--                                                            <label for="first-name">Summary</label>--}}

{{--                                                            <textarea class="form-control" name="summary" id="" cols="30" rows="5">{{$listing->summary}}</textarea>--}}
{{--                                                            @error("summary")--}}
{{--                                                            <span class="text-danger" style="text-align: right">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                        <div class="card-header">--}}
{{--                                                            <h4 class="card-title">Appliance</h4>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <div class="feature-repeater">--}}
{{--                                                                <div data-repeater-list="appliance">--}}
{{--                                                                    @foreach($listing->appliances as $appliance)--}}
{{--                                                                        <div data-repeater-item>--}}
{{--                                                                            <div class="row d-flex align-items-end">--}}
{{--                                                                                <div class="col-md-6 col-12">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <label for="appliance_name">Select Appliance<span class="text-danger">*</span></label>--}}
{{--                                                                                        <select class="form-control"--}}
{{--                                                                                                name="appliance_id"--}}
{{--                                                                                                id="appliance_name"--}}
{{--                                                                                                aria-describedby="itemname">--}}
{{--                                                                                            <option selected disabled value="">--}}
{{--                                                                                                Select Appliance Name--}}
{{--                                                                                            </option>--}}
{{--                                                                                            @foreach($appliances as $value)--}}
{{--                                                                                                <option--}}
{{--                                                                                                    value="{{$value->id}}" {{ $value->id === $appliance->id ? 'selected' : '' }}>{{$value->name}}</option>--}}
{{--                                                                                            @endforeach--}}
{{--                                                                                        </select>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="col-md-6 col-12">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <label for="appliance_count">Count<span class="text-danger">*</span></label>--}}
{{--                                                                                        <input type="number" name="count"--}}
{{--                                                                                               class="form-control"--}}
{{--                                                                                               id="appliance_count" value="{{$appliance->pivot->count }}"/>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="col-md-12 col-12">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <label for="appliance_description">Description</label>--}}
{{--                                                                                        <textarea name="description" id="appliance_description" cols="30" class="form-control"--}}
{{--                                                                                                  rows="8" placeholder="write specification of Appliance">{{$appliance->pivot->description }}</textarea>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="col-md-2 col-12 mb-50">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <button--}}
{{--                                                                                            class="btn btn-outline-danger text-nowrap px-1"--}}
{{--                                                                                            data-repeater-delete type="button">--}}
{{--                                                                                            <i data-feather="x"--}}
{{--                                                                                               class="mr-25"></i>--}}
{{--                                                                                            <span>Delete</span>--}}
{{--                                                                                        </button>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <hr/>--}}
{{--                                                                        </div>--}}
{{--                                                                    @endforeach--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-12">--}}
{{--                                                                        <button class="btn btn-icon btn-primary"--}}
{{--                                                                                type="button" data-repeater-create>--}}
{{--                                                                            <i data-feather="plus" class="mr-25"></i>--}}
{{--                                                                            <span>Add New</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="card-header">--}}
{{--                                                            <h4 class="card-title">Features</h4>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <div  class="feature-repeater">--}}
{{--                                                                <div data-repeater-list="features">--}}

{{--                                                                    @foreach($listing->features as $feature)--}}
{{--                                                                        <div data-repeater-item>--}}
{{--                                                                            <div class="row d-flex align-items-end">--}}
{{--                                                                                <div class="col-md-6 col-12">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <label for="feature_name">Select Feature<span class="text-danger">*</span></label>--}}
{{--                                                                                        <select class="form-control" name="feature_id" id="feature_name" aria-describedby="itemname">--}}
{{--                                                                                            @foreach($features as $item)--}}
{{--                                                                                                <option value="{{$item->id}}" {{ $item->id === $feature->id ? 'selected' : '' }}>{{$item->name}}</option>--}}
{{--                                                                                            @endforeach--}}
{{--                                                                                        </select>--}}
{{--                                                                                        @error("feature_id")--}}
{{--                                                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                        @enderror--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="col-md-6 col-12">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <label for="feature_count">Count<span class="text-danger">*</span></label>--}}
{{--                                                                                        <input type="number" name="count" class="form-control" id="feature_count" value="{{ $feature->pivot->count }}" />--}}
{{--                                                                                        @error("count")--}}
{{--                                                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                        @enderror--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="col-md-2 col-12 mb-50">--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">--}}
{{--                                                                                            <i data-feather="x" class="mr-25"></i>--}}
{{--                                                                                            <span>Delete</span>--}}
{{--                                                                                        </button>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <hr />--}}
{{--                                                                        </div>--}}
{{--                                                                    @endforeach--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-12">--}}
{{--                                                                        <button class="btn btn-icon btn-primary" type="button" data-repeater-create>--}}
{{--                                                                            <i data-feather="plus" class="mr-25"></i>--}}
{{--                                                                            <span>Add New</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="card-header">--}}
{{--                                                            <h4 class="card-title">Facilities</h4>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <div class="card">--}}
{{--                                                                <div class="col-md-12">--}}
{{--                                                                    <div class="invoice-repeater">--}}
{{--                                                                        <div data-repeater-list="facilities">--}}

{{--                                                                            @foreach($listing->facility as $facility)--}}
{{--                                                                                <div data-repeater-item>--}}
{{--                                                                                    <div class="row d-flex align-items-end">--}}
{{--                                                                                        <div class="col-md-4 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="itemname">Facility Type <span--}}
{{--                                                                                                        class="text-danger">*</span></label>--}}
{{--                                                                                                <select class="form-control" name="facility_id"--}}
{{--                                                                                                        id="itemname" aria-describedby="itemname">--}}
{{--                                                                                                    @foreach($facilities as $item)--}}
{{--                                                                                                        <option--}}
{{--                                                                                                            value="{{$item->id}}">{{$item->type}}</option>--}}
{{--                                                                                                    @endforeach--}}
{{--                                                                                                </select>--}}
{{--                                                                                                @error("facility_id")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="col-md-4 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="facility_name">Facility Name <span--}}
{{--                                                                                                        class="text-danger">*</span></label>--}}
{{--                                                                                                <input type="name" class="form-control" name="name"--}}
{{--                                                                                                       placeholder="facility name"--}}
{{--                                                                                                       id="facility_name"--}}
{{--                                                                                                       value="{{ $facility->pivot->name }}"/>--}}
{{--                                                                                                @error("name")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}

{{--                                                                                        <div class="col-md-2 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="itemquantity">Distance (in KM) <span--}}
{{--                                                                                                        class="text-danger">*</span></label>--}}
{{--                                                                                                <input type="number" step="0.001"--}}
{{--                                                                                                       class="form-control" name="distance"--}}
{{--                                                                                                       placeholder="distance" id="itemquantity"--}}
{{--                                                                                                       value="{{ $facility->pivot->distance }}"/>--}}
{{--                                                                                                @error("distance")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="rate col-md-2 col-12 form-group ">--}}
{{--                                                                                            <label for="rating">Rating <span--}}
{{--                                                                                                    class="text-danger">*</span></label>--}}
{{--                                                                                            <select name="rating" class="form-control" id="rating">--}}
{{--                                                                                                @for($i = 1; $i<=5; $i++)--}}
{{--                                                                                                    <option--}}
{{--                                                                                                        value="{{ $i }}" {{ $facility->pivot->rating == $i ? 'selected' : '' }}>{{ $i }}</option>--}}
{{--                                                                                                @endfor--}}
{{--                                                                                            </select>--}}
{{--                                                                                            @error("rating")--}}
{{--                                                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                            @enderror--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="col-md-2 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="staticprice">Min Grade <span--}}
{{--                                                                                                        class="text-danger">*</span></label>--}}
{{--                                                                                                <input type="text" name="min_grade"--}}
{{--                                                                                                       class="form-control" placeholder="min grade"--}}
{{--                                                                                                       id="staticprice"--}}
{{--                                                                                                       value="{{ $facility->pivot->min_grade }}"/>--}}
{{--                                                                                                @error("min_grade")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="col-md-2 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="staticprice">Max Grade <span--}}
{{--                                                                                                        class="text-danger">*</span></label>--}}
{{--                                                                                                <input type="text" name="max_grade"--}}
{{--                                                                                                       class="form-control" placeholder="max grade"--}}
{{--                                                                                                       id="staticprice"--}}
{{--                                                                                                       value="{{ $facility->pivot->min_grade }}"/>--}}
{{--                                                                                                @error("max_grade")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="col-md-4 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <label for="facility_map_location">Map Location <span--}}
{{--                                                                                                        class="text-danger">*</span></label>--}}
{{--                                                                                                <input type="text" class="form-control"--}}
{{--                                                                                                       id="facility_map_location" placeholder="map location"--}}
{{--                                                                                                       name="map_location"--}}
{{--                                                                                                       disabled--}}
{{--                                                                                                       value="{{ $facility->pivot->map_location }}"/>--}}
{{--                                                                                                @error("map_location")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="col-md-2 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <button type="button"--}}
{{--                                                                                                        class="btn btn-outline-primary btn-block facilityLocationModalBtn"--}}
{{--                                                                                                        data-toggle="modal"--}}
{{--                                                                                                        data-target="#selectFacilityLocationModal">--}}
{{--                                                                                                    <i data-feather="map-pin" class="mr-25"></i>--}}
{{--                                                                                                    <span>Location</span>--}}
{{--                                                                                                </button>--}}

{{--                                                                                                <div class="facilityLocationDiv">--}}
{{--                                                                                                    <input type="hidden" name="lat" id="facility_lat" value="{{ $facility->pivot->lat }}">--}}
{{--                                                                                                    <input type="hidden" name="lng" id="facility_lng" value="{{ $facility->pivot->lng }}">--}}
{{--                                                                                                    <input type="hidden" name="map_location" id="facility_location" value="{{ $facility->pivot->map_location }}">--}}
{{--                                                                                                </div>--}}

{{--                                                                                                @error("lat")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                                @error("lng")--}}
{{--                                                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                                                @enderror--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="col-md-2 col-12">--}}
{{--                                                                                            <div class="form-group">--}}
{{--                                                                                                <button--}}
{{--                                                                                                    class="btn btn-danger btn-block"--}}
{{--                                                                                                    data-repeater-delete type="button">--}}
{{--                                                                                                    <i data-feather="x" class="mr-25"></i>--}}
{{--                                                                                                    <span>Delete</span>--}}
{{--                                                                                                </button>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <hr/>--}}
{{--                                                                                </div>--}}
{{--                                                                            @endforeach--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="row">--}}
{{--                                                                            <div class="col-12">--}}
{{--                                                                                <button class="btn btn-icon btn-primary" type="button"--}}
{{--                                                                                        data-repeater-create>--}}
{{--                                                                                    <i data-feather="plus" class="mr-25"></i>--}}
{{--                                                                                    <span>Add New</span>--}}
{{--                                                                                </button>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}

{{--                                                        <div class="col-12">--}}
{{--                                                            <div class="card-header">--}}
{{--                                                                <h4 class="card-title">Address</h4>--}}
{{--                                                                <div class="custom-control custom-switch custom-control-inline">--}}
{{--                                                                    <span class="switch-label mr-1">Hide Address</span>--}}
{{--                                                                    <input type="checkbox" class="custom-control-input" name="hide_address" id="hide_address" value="true" {{ $listing->hide_address ? 'checked' : '' }}>--}}
{{--                                                                    <label class="custom-control-label" for="hide_address">--}}
{{--                                                                    </label>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <div class="form-group row">--}}
{{--                                                                <div class="col-sm-10 col-form-label">--}}
{{--                                                                    <label for="search_address">Address<span class="text-danger">*</span></label>--}}
{{--                                                                    <input type="text" id="search_address" class="form-control"--}}
{{--                                                                           name="address" value="{{$listing->address}}" placeholder=" " />--}}
{{--                                                                    @error("address")--}}
{{--                                                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                    @enderror--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-sm-2 col-form-label">--}}
{{--                                                                    <label for="first-name">Postal Code</label>--}}
{{--                                                                    <input type="text" id="first-name" class="form-control"--}}
{{--                                                                           name="postal_code" value="{{$listing->postal_code}}" placeholder=" " />--}}
{{--                                                                    @error("postal_code")--}}
{{--                                                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                    @enderror--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <div class="form-group row">--}}

{{--                                                                <input type="hidden" id="lat" class="form-control"--}}
{{--                                                                       name="latitude" value="{{ $listing->latitude }}"/>--}}
{{--                                                                <input type="hidden" id="lng" class="form-control"--}}
{{--                                                                       name="longitude" value="{{ $listing->longitude }}"/>--}}

{{--                                                                @error("latitude")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                                @error("longitude")--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}

{{--                                                                <div class="col-sm-12 w-100" style="height: 350px;"--}}
{{--                                                                     id="selectLocation"></div>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="col-sm-12">--}}
{{--                                                    <button type="submit" class="btn btn-primary mr-1">Update Listing</button>--}}
{{--                                                    <a href="{{route('user.listing.list')}}" class="btn btn-outline-secondary">Back</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
{{--    <div class="modal fade" id="selectFacilityLocationModal" tabindex="-1" role="dialog"--}}
{{--         aria-labelledby="myModalLabel33" style="display: none; padding-right: 17px; overflow: auto; "--}}
{{--         aria-modal="true">--}}
{{--        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title" id="myModalLabel33">Select Facility Location</h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">×</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body" style="overflow-y:auto;">--}}
{{--                    <div class=" row">--}}
{{--                        <div class="col-12 float-left">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Search Location</label>--}}
{{--                                <input type="text" class="form-control" id="search_facility_location"--}}
{{--                                       placeholder="search location">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="w-100" style="height: 350px;" id="selectFacilityLocation"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" id="closeButton" class="btn btn-primary mb-1 waves-effect waves-light" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- END: Content-->
@endsection
@section('quillJs')


    {{--        <script src="{{asset("second-admin/app-assets/js/scripts/forms/form-quill-editor.js")}}"></script>--}}
    <!-- END: Page JS-->

    <script src="{{asset('admin')}}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            CKEDITOR.replace('.ckeditor')
        })
    </script>

    <script src="{{asset("second-admin/app-assets/js/scripts/extensions/ext-component-ratings.js")}}"></script>


    <script src="{{asset("second-admin/app-assets/js/scripts/components/components-modals.js")}}"></script>

    <script src="{{asset("second-admin/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/js/scripts/forms/form-repeater.js")}}"></script>
    <script src="{{asset('admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts&libraries=places&v=3&sensor=false"></script>

    <!-- Select2 -->
    <script>
        $(function () {
            $('.select2').select2({
                placeholder: "select"
            })
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

        //Set up some of our variables.
        var map; //Will contain map object.
        var marker = false; ////Has the user plotted their location marker?

        //Function called to initialize / create the map.
        //This is called when the page has loaded.
        function initMap() {

            //The center location of our map.
            var centerOfMap = new google.maps.LatLng('{{ $listing->latitude }}', '{{ $listing->longitude }}');

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

            marker = new google.maps.Marker({
                map,
                // icon,
                position: centerOfMap,
                draggable: true,
            });

            markers.push(marker);

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
                // marker.setMap(null);

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

            google.maps.event.addListener(marker, 'dragend', function (event) {
                markerLocation();
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
                        // Only geocodes have viewport.
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

                    if(!fmarker) {
                        fmarker = new google.maps.Marker({
                            map,
                            position: latLng,
                            draggable: true,
                        });

                        facilityMarkerLocation();
                        google.maps.event.addListener(fmarker, 'dragend', function (event) {
                            facilityMarkerLocation();
                        });
                    }

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

