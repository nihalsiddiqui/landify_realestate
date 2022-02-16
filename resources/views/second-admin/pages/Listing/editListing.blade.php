@section('page_title', 'Edit Listing')

@extends('second-admin.layouts.master')
@section('quillStyle')

    {{--    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">--}}
    <link rel="stylesheet" type="text/css"
          href="{{asset("second-admin/app-assets/css/plugins/extensions/ext-component-ratings.css")}}">
    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">

    <style>
        div.pac-container {
            z-index: 99999999999 !important;
        }
        .select2-selection__arrow{
            display: none !important;
        }
    </style>

@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <form enctype="multipart/form-data" method="post" action="{{route('listing.update',$listing->id)}}"
                          class="form form-horizontal">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Listing</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="name"> Listing Title <span class="text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control"
                                               name="name" value="{{$listing->name}}" placeholder="title"/>
                                        @error("name")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Listing Page Title</label>
                                        <input type="text" id="first-name" class="form-control"
                                               name="slug" value="{{$listing->slug}}" placeholder="url"/>
                                        @error("slug")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="first-name">Description</label>

                                                <textarea class="form-control" name="description" id="" cols="30"
                                                          rows="5"
                                                          placeholder="description">{{$listing->description}}</textarea>
                                                @error("description")
                                                <span class="text-danger"
                                                      style="text-align: right">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label" for="first-name">Construction Status <span
                                                class="text-danger">*</span></label>
                                        <select id="selecterdiv" name="constructions_status" class="form-control" id="">
                                            <option selected disabled value="">Select Construction Status</option>
                                            <option
                                                value="foundation" {{ ($listing->constructions_status === 'foundation'? 'selected' : '')}}>
                                                Foundation
                                            </option>
                                            <option
                                                value="grey_structure" {{ ($listing->constructions_status === 'grey_structure'? 'selected' : '')}}>
                                                Grey Structure
                                            </option>
                                            <option
                                                value="under_construction" {{ ($listing->constructions_status === 'under_construction'? 'selected' : '')}}>
                                                New Construction
                                            </option>
                                            <option
                                                value="semi_finished" {{ ($listing->constructions_status === 'semi_finished'? 'selected' : '')}}>
                                                Semi Finished
                                            </option>
                                            <option
                                                value="constructed" {{ ($listing->constructions_status === 'constructed'? 'selected' : '')}}>
                                                Constructed
                                            </option>

                                        </select>
                                        @error("constructions_status")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Listing Type <span
                                                class="text-danger">*</span></label>
                                        <select name="purpose" class="form-control" id="">
                                            <option selected disabled value="">Select Listing Type</option>
                                            <option value="sale" {{ ($listing->purpose === 'sale'? 'selected' : '')}}>
                                                Sale
                                            </option>
                                            <option value="rent" {{ ($listing->purpose === 'rent'? 'selected' : '')}}>
                                                Rent
                                            </option>
                                            <option
                                                value="for_lease" {{ ($listing->purpose === 'for_lease'? 'selected' : '')}}>
                                                For Lease
                                            </option>
                                            <option
                                                value="mortgage" {{ ($listing->purpose === 'mortgage'? 'selected' : '')}}>
                                                Mortgage
                                            </option>
                                            <option value="sold" {{ $listing->purpose === 'sold' ? "selected" : "" }}>
                                                Sold
                                            </option>
                                            <option
                                                value="listing_only" {{ ($listing->purpose === 'listing_only'? 'selected' : '')}}>
                                                Listing Only
                                            </option>
                                        </select>

                                    </div>

                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Listing Category <span
                                                class="text-danger">*</span></label>

                                        <select class="form-control select2" name="category_ids[]" id="category">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{$category->id}}" {{ in_array($category->id, $listing->categories()->pluck('category_id')->toArray()) ? 'selected' : '' }}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label class="col-form-label" for="first-name">Listing Sub Category <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="sub_category_id" id="subcategory_id">

                                            @if($categories->isNotEmpty())
                                                @foreach($listing->categories->first()->subCategory as $subCategory)
                                                    <option value="{{$subCategory->id}}" {{ $subCategory->id == $listing->sub_category_id ? 'selected' : '' }}>
                                                        {{$subCategory->name}}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error("town_id")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Bed Rooms <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_living_rooms" value="{{$listing->no_of_living_rooms}}"
                                               placeholder="no of bed rooms"/>
                                        @error("no_of_living_rooms")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Rooms <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_rooms" value="{{$listing->no_of_rooms}}"
                                               placeholder="no of rooms"/>
                                        @error("no_of_rooms")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Bath Rooms <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_baths" value="{{$listing->no_of_baths}}"
                                               placeholder="no of bath rooms"/>
                                        @error("no_of_baths")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3 ">
                                        <label class="col-form-label" for="first-name">Area<span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="square_feats" value="{{$listing->square_feats}}"
                                               placeholder="area in square feets"/>
                                        @error("square_feats")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="first-name">Area Type <span
                                                class="text-danger">*</span></label>
                                        <select name="area_type" class="form-control" id="area_type">
                                            <option selected disabled value="">Select Area Type</option>
                                            @foreach(getPossibleEnumValues('listings','area_type') as $area_type)
                                                <option value="{{$area_type}}" {{$area_type === $listing->area_type ? 'selected' : ''}}>{{ucfirst($area_type)}}</option>
                                            @endforeach
                                        </select>
                                        @error("area_type")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Built Year <span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="first-name" class="form-control"
                                               name="built_year" value="{{$listing->built_year}}"/>
                                        @error("built_year")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Property Title</label>
                                        <select class="form-control" name="property_id" id="">
                                            <option selected value="">Select Property</option>
                                            @foreach($properties as $property)
                                                <option value="{{$property->id}}"
                                                        @foreach($listing->property as $listingProperty)
                                                        @if($listingProperty->id == $property->id)
                                                        selected
                                                    @endif
                                                    @endforeach
                                                >{{$property->title}}</option>
                                            @endforeach
                                        </select>
                                        @error("property_id")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label" for="city_id">City Name</label>
                                        <select class="form-control" name="city_id" id="city_id">
                                            @foreach($cities as $city)
                                                <option
                                                    value="{{$city->id}}" {{ $defaultCity->id == $city->id ? "selected" : "" }}>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("city_id")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label" for="first-name">Town Name <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="town_id" id="town_id">
                                            @foreach($defaultCity->town as $town)
                                                <option
                                                    value="{{$town->id}}" {{ $town->id == $listing->town_id ? "selected" : "" }}>{{$town->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("town_id")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label" for="npls_number">NPLS Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="npls_number" class="form-control"
                                               name="npls_number" placeholder="LA5544"
                                               value="{{ $listing->npls_number }}"/>
                                        @error("npls_number")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Floors <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_floors" value="{{$listing->no_of_floors}}"
                                               placeholder="no of floors"/>
                                        @error("no_of_floors")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label" for="first-name">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="" class="form-control">
                                            <option {{$listing->status === '1'? 'selected' : ''}}>Active</option>
                                            <option {{$listing->status === '0'? 'selected' : ''}}>UnActive</option>

                                        </select>
                                        @error("status")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Beds <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_beds" value="{{$listing->no_of_beds}}"
                                               placeholder="no of beds"/>
                                        @error("no_of_beds")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Dinning Rooms <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_dinning_rooms" value="{{$listing->no_of_dinning_rooms}}"
                                               placeholder="no of dining rooms"/>
                                        @error("no_of_dinning_rooms")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Kitchens <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_kitchens" value="{{$listing->no_of_kitchens}}"
                                               placeholder="no of kitchens"/>
                                        @error("no_of_kitchens")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Laundry Rooms <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_laundry_rooms" value="{{$listing->no_of_laundry_rooms}}"
                                               placeholder="no of laundary rooms"/>
                                        @error("no_of_laundry_rooms")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Number of Garages <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="no_of_garages" value="{{$listing->no_of_garages}}"
                                               placeholder="no of garages"/>
                                        @error("no_of_garages")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Built Style</label>
                                        <input type="text" id="first-name" class="form-control"
                                               name="built_style" value="{{$listing->built_style}}"
                                               placeholder="built style"/>
                                        @error("built_style")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="first-name">Listing Source</label>
                                        <input type="text" id="first-name" class="form-control"
                                               name="listing_source" value="{{$listing->listing_source}}"
                                               placeholder="listing source"/>
                                        @error("listing_source")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 " id="registry">
                                        <label class="col-form-label" for="registry">Registry <span class="text-danger">*</span></label>
                                        <select name="registry" class="form-control" id="registry">
                                            <option selected disabled value="">Select Registry</option>
                                            <option value="yes" {{ $listing->registry === 'yes' ? 'selected' : '' }}>
                                                Yes
                                            </option>
                                            <option value="no" {{ $listing->registry === 'no' ? 'selected' : '' }}>No
                                            </option>
                                            <option
                                                value="under_process" {{ $listing->registry === 'under_process' ? 'selected' : '' }}>
                                                Under Process
                                            </option>
                                        </select>
                                        @error("registry")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 " id="mutation">
                                        <label class="col-form-label" for="mutation">Mutation <span class="text-danger">*</span></label>
                                        <select name="mutation" class="form-control" id="mutation">
                                            <option selected disabled value="">Select Mutation</option>

                                            <option value="yes" {{ $listing->mutation == 'yes' ? "selected" : "" }}>
                                                Yes
                                            </option>
                                            <option value="no" {{  $listing->mutation == 'no' ? "selected" : "" }}>No
                                            </option>
                                            <option
                                                value="under_process" {{  $listing->mutation == 'under_process' ? "selected" : "" }}>
                                                Under Process
                                            </option>
                                        </select>
                                        @error("mutation")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 " id="registry_file">
                                        <label class="col-form-label" for="registry_file">Registry File</label>
                                        <input type="file" id="registry_file" class="form-control"
                                               name="registry_file"/>
                                        @error("registry_file")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 " id="city_approval">
                                        <label class="col-form-label" for="city_approval">City Approval <span
                                                class="text-danger">*</span></label>
                                        <select name="city_approval" class="form-control" id="city_approval">
                                            <option selected disabled value="">Select City Approval</option>
                                            <option
                                                value="yes" {{ $listing->city_approval == 'yes' ? "selected" : "" }}>Yes
                                            </option>
                                            <option value="no" {{ $listing->city_approval == 'no' ? "selected" : "" }}>
                                                No
                                            </option>
                                            <option
                                                value="under_process" {{ $listing->city_approval == 'under_process' ? "selected" : "" }}>
                                                Under Process
                                            </option>
                                        </select>
                                        @error("city_approval")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="thumbnail">Thumbnail <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="thumbnail" class="form-control"
                                               name="thumbnail" accept="image/*"/>
                                        @error("thumbnail")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="images">Images</label>
                                        <input type="file" id="images" class="form-control"
                                               name="images[]" multiple accept="image/*" value="{{ old('images') }}"/>
                                        @error("images")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 ">
                                        <label class="col-form-label" for="images">Meta Tags</label> <br>
                                        <textarea name="meta_tags" id="meta_tags" class="form-control" rows="10"
                                                  value="{{ old('meta_tags') }}"
                                                  placeholder='<meta name="meta name" content="meta description">'>{{$listing->meta_tag}}</textarea>
                                        @error("meta_tags")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Video Area</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-form-label">
                                        <label for="video_title">Video Title</label>
                                        <input type="text" id="video_title" class="form-control"
                                               name="video_title" placeholder="video title.."
                                               value="{{$listing->video_title }}"/>
                                        @error("video_title")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label class="col-form-label" for="video_url">Video Link</label>
                                        <input type="url" id="video_url" class="form-control" placeholder="url"
                                               name="video_url" value="{{$listing->video_link }}"/>
                                        @error("video_url")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-form-label">
                                        <label for="video_description">Video Description</label>
                                        <textarea class="form-control" placeholder="video description..."
                                                  name="video_description" id="video_description"
                                                  cols="30" rows="5">{{$listing->video_description}}</textarea>
                                        @error("video_description")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pricing Area</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 " id="amount_per_square_feet">
                                        <label class="col-form-label" for="first-name">Amount Per Square Feet <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="amount_per_square_feet"
                                               value="{{$listing->amount_per_square_feet}}"
                                               placeholder="amount per square feet"/>
                                        @error("amount_per_square_feet")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6" id="cost_per_square_feet">
                                        <label class="col-form-label" for="first-name">Cost Per Square Feet <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="cost_per_square_feet" value="{{$listing->cost_per_square_feet}}"
                                               placeholder="cost per square feet"/>
                                        @error("cost_per_square_feet")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6" id="installment_per_month">
                                        <label class="col-form-label" for="first-name">Installment Per Month <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="first-name" class="form-control"
                                               name="installment_per_month" value="{{$listing->installment_per_month}}"
                                               placeholder="installment per month"/>
                                        @error("installment_per_month")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6" id="price">
                                        <label class="col-form-label" for="price">Price <span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="price" class="form-control"
                                               name="price" value="{{$listing->price}}" placeholder="Price"/>
                                        @error("price")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="first-name">Summary</label>
                                        <textarea class="form-control" name="summary" id="" cols="30" rows="5"
                                                  placeholder="summery">{{$listing->summary}}</textarea>
                                        @error("summary")
                                        <span class="text-danger" style="text-align: right">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Appliance</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="feature-repeater">
                                            <div data-repeater-list="appliance">
                                                @foreach($listing->appliances as $appliance)
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="appliance_name">Select Appliance <span
                                                                            class="text-danger">*</span></label>
                                                                    <select class="form-control select2"
                                                                            name="appliance_id"
                                                                            id="appliance_name"
                                                                            aria-describedby="itemname">
                                                                        {{--                                                                        <option selected disabled value="">--}}
                                                                        {{--                                                                            Select Appliance Name--}}
                                                                        {{--                                                                        </option>--}}
                                                                        @foreach($appliances as $value)
                                                                            <option
                                                                                value="{{$value->id}}" {{ $value->id === $appliance->id ? 'selected' : '' }}>{{$value->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="appliance_count">Count <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="number" name="count"
                                                                           class="form-control"
                                                                           id="appliance_count" placeholder="1"
                                                                           value="{{$appliance->pivot->count }}"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="appliance_description">Description</label>
                                                                    <textarea name="description"
                                                                              id="appliance_description" cols="30"
                                                                              class="form-control"
                                                                              rows="8"
                                                                              placeholder="write specification of Appliance">{{$appliance->pivot->description }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-50">
                                                                <div class="form-group">
                                                                    <button
                                                                        class="btn btn-outline-danger text-nowrap px-1"
                                                                        data-repeater-delete type="button">
                                                                        <i data-feather="x"
                                                                           class="mr-25"></i>
                                                                        <span>Delete</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button class="btn btn-icon btn-primary"
                                                            type="button" data-repeater-create>
                                                        <i data-feather="plus" class="mr-25"></i>
                                                        <span>Add New</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Features</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="feature-repeater">
                                            <div data-repeater-list="features">

                                                @foreach($listing->features as $feature)
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="feature_name">Select Feature <span
                                                                            class="text-danger">*</span></label>
                                                                    <select class="form-control select2" name="feature_id"
                                                                            id="feature_name"
                                                                            aria-describedby="itemname">
                                                                        @foreach($features as $item)
                                                                            <option
                                                                                value="{{$item->id}}" {{ $item->id === $feature->id ? 'selected' : '' }}>{{$item->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <span class="select2-selection__arrow"></span>
                                                                    @error("feature_id")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="feature_count">Count <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="number" name="count"
                                                                           class="form-control" placeholder="1"
                                                                           id="feature_count"
                                                                           value="{{ $feature->pivot->count }}"/>
                                                                    @error("count")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-50">
                                                                <div class="form-group">
                                                                    <button
                                                                        class="btn btn-outline-danger text-nowrap px-1"
                                                                        data-repeater-delete type="button">
                                                                        <i data-feather="x" class="mr-25"></i>
                                                                        <span>Delete</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button class="btn btn-icon btn-primary" type="button"
                                                            data-repeater-create>
                                                        <i data-feather="plus" class="mr-25"></i>
                                                        <span>Add New</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Facilities</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="invoice-repeater">
                                            <div data-repeater-list="facilities">

                                                @foreach($listing->facility as $facility)
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-4 col-12">
                                                                <div class="form-group">
                                                                    <label for="itemname">Facility Type <span
                                                                            class="text-danger">*</span></label>
                                                                    <select class="form-control select2" name="facility_id"
                                                                            id="itemname" aria-describedby="itemname">
                                                                        @foreach($facilities as $item)
                                                                            <option
                                                                                value="{{$item->id}}">{{$item->type}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error("facility_id")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <div class="form-group">
                                                                    <label for="facility_name">Facility Name <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="name" class="form-control" name="name"
                                                                           placeholder="facility name"
                                                                           id="facility_name"
                                                                           value="{{ $facility->pivot->name }}"/>
                                                                    @error("name")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 col-12">
                                                                <div class="form-group">
                                                                    <label for="itemquantity">Distance (in KM) <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="number" step="0.001"
                                                                           class="form-control" name="distance"
                                                                           placeholder="distance" id="itemquantity"
                                                                           value="{{ $facility->pivot->distance }}"/>
                                                                    @error("distance")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="rate col-md-2 col-12 form-group ">
                                                                <label for="rating">Rating <span
                                                                        class="text-danger">*</span></label>
                                                                <select name="rating" class="form-control" id="rating">
                                                                    @for($i = 1; $i<=5; $i++)
                                                                        <option
                                                                            value="{{ $i }}" {{ $facility->pivot->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                @error("rating")
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="form-group">
                                                                    <label for="staticprice">Min Grade <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" name="min_grade"
                                                                           class="form-control" placeholder="min grade"
                                                                           id="staticprice"
                                                                           value="{{ $facility->pivot->min_grade }}"/>
                                                                    @error("min_grade")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="form-group">
                                                                    <label for="staticprice">Max Grade <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" name="max_grade"
                                                                           class="form-control" placeholder="max grade"
                                                                           id="staticprice"
                                                                           value="{{ $facility->pivot->min_grade }}"/>
                                                                    @error("max_grade")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <div class="form-group">
                                                                    <label for="facility_map_location">Map Location <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                           id="facility_map_location" placeholder="map location"
                                                                           name="map_location"
                                                                           disabled
                                                                           value="{{ $facility->pivot->map_location }}"/>
                                                                    @error("map_location")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="form-group">
                                                                    <button type="button"
                                                                            class="btn btn-outline-primary btn-block facilityLocationModalBtn"
                                                                            data-toggle="modal"
                                                                            data-target="#selectFacilityLocationModal">
                                                                        <i data-feather="map-pin" class="mr-25"></i>
                                                                        <span>Location</span>
                                                                    </button>

                                                                    <div class="facilityLocationDiv">
                                                                        <input type="hidden" name="lat" id="facility_lat" value="{{ $facility->pivot->lat }}">
                                                                        <input type="hidden" name="lng" id="facility_lng" value="{{ $facility->pivot->lng }}">
                                                                        <input type="hidden" name="map_location" id="facility_location" value="{{ $facility->pivot->map_location }}">
                                                                    </div>

                                                                    @error("lat")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                    @error("lng")
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="form-group">
                                                                    <button
                                                                        class="btn btn-danger btn-block"
                                                                        data-repeater-delete type="button">
                                                                        <i data-feather="x" class="mr-25"></i>
                                                                        <span>Delete</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button class="btn btn-icon btn-primary" type="button"
                                                            data-repeater-create>
                                                        <i data-feather="plus" class="mr-25"></i>
                                                        <span>Add New</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Specialities</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <span class="switch-label mr-1">Featured</span>
                                                    <input type="checkbox" class="custom-control-input"
                                                           name="featured"
                                                           id="featured" value="true" {{ $listing->featured ? 'checked' : '' }} >
                                                    @error("featured")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <label class="custom-control-label" for="featured">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <span class="switch-label mr-1">Hot Offer</span>
                                                    <input type="checkbox" class="custom-control-input"
                                                           name="hot_offer"
                                                           id="hot_offer" value="true" {{ $listing->hot_offer ? 'checked' : '' }}>
                                                    @error("hot_offer")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <label class="custom-control-label" for="hot_offer">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <span class="switch-label mr-1">Open House</span>
                                                    <input type="checkbox" class="custom-control-input"
                                                           name="open_house"
                                                           id="open_house" value="true" {{ $listing->open_house ? 'checked' : '' }}>
                                                    @error("open_house")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <label class="custom-control-label" for="open_house">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <span class="switch-label mr-1">Foreclosure</span>
                                                    <input type="checkbox" class="custom-control-input"
                                                           name="foreclosure"
                                                           id="foreclosure" value="true" {{ $listing->foreclosure ? 'checked' : '' }}>
                                                    @error("foreclosure")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <label class="custom-control-label" for="foreclosure">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Address</h4>
                                <div class="custom-control custom-switch custom-control-inline">
                                    <span class="switch-label mr-1">Hide Address</span>
                                    <input type="checkbox" class="custom-control-input" name="hide_address"
                                           id="hide_address" value="true" {{ $listing->hide_address ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="hide_address">
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5 col-form-label">
                                        <label for="search_address">Address <span class="text-danger">*</span></label>
                                        <input type="text" id="search_address" class="form-control"
                                               name="address" value="{{$listing->address}}" placeholder="address"/>
                                        @error("address")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5 col-form-label">
                                        <label for="search_address">Address2 <span class="text-danger">*</span></label>
                                        <input type="text" id="" class="form-control"
                                               name="address2" placeholder="address..." value="{{$listing->address_two}}"/>
                                        @error("address")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2 col-form-label">
                                        <label for="first-name">Postal Code</label>
                                        <input type="text" id="first-name" class="form-control"
                                               name="postal_code" value="{{$listing->postal_code}}"
                                               placeholder="postal code"/>
                                        @error("postal_code")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">

                                            <input type="hidden" id="lat" class="form-control"
                                                   name="latitude" value="{{ $listing->latitude }}"/>
                                            <input type="hidden" id="lng" class="form-control"
                                                   name="longitude" value="{{ $listing->longitude }}"/>

                                            @error("latitude")
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @error("longitude")
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="col-sm-12 w-100" style="height: 350px;"
                                                 id="selectLocation"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mr-1">Update Listing</button>
                                        <a href="{{route('listing.list')}}" class="btn btn-outline-secondary">Back</a>
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
                        <span aria-hidden="true">×</span>
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

    <script>
        $(document).ready(function (){
            $("#selecterdiv").on('change',function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue == 'under_construction'){
                        $("#registry").hide();
                        $("#registry_file").hide();
                        $('#mutation').hide();
                        $('#city_approval').show();
                        $('#amount_per_square_feet').show();
                        $('#cost_per_square_feet').show();
                        $('#installment_per_month').show();
                        $('#price').show();
                    }else if(optionValue != 'under_construction'){
                        $('#registry').show();
                        $('#registry_file').show();
                        $('#mutation').show();
                        $('#city_approval').hide();
                        $('#amount_per_square_feet').hide();
                        $('#cost_per_square_feet').hide();
                        $('#installment_per_month').hide();
                        $('#price').show();
                    }
                });
            }).change();

        })
    </script>

    <!-- Select2 -->
    <script>
        $(function () {
            $('.select2').select2({
                placeholder: "select"
            })
        })

        $('#city_id').on('change', function () {

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

        $('#category').on('change', function () {

            $.ajax({
                url: '{{ url("/admin/listing/subcategory-change") }}' + '/' + $(this).val(),
                method: 'GET',
                success: function (response) {
                    $('#subcategory_id').empty();

                    var options = '';

                    $.each(response.subcategory, function (key, value) {
                        options += '<option value="' + value.id + '">' + value.name + '</option>';
                    });

                    $('#subcategory_id').append(options);
                }
            })
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
        google.maps.event.addDomListener(document.getElementById('search_address'), 'keydown', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
            }
        });

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

                if (facilityLatInput.val() || facilityLngInput.val()) {
                    $('#search_facility_location').val(facilityLocation.val());
                    let latLng = new google.maps.LatLng(facilityLatInput.val(), facilityLngInput.val());
                    map.setCenter(latLng)

                    if (!fmarker) {
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

