@section('page_title', 'Edit Town')

@extends('second-admin.layouts.master')
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
                                    <h4 class="card-title">Edit Town</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post" action="{{route('town.update',$town->id)}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Town Name<span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$town->name}}" placeholder=" Name" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">City<span class="text-danger">*</span></label>
                                                        <select name="city_id" id="" class="form-control">
                                                            <option selected disabled value="">Select City</option>
                                                            @foreach($cities as $city)
                                                                <option  value="{{$city->id}}"
                                                                         @if($town->city_id == $city->id)
                                                                             selected
                                                                         @endif
                                                                >{{$city->name}}</option>
                                                            @endforeach

                                                        </select>
                                                        @error("city_id")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Latitude</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="latitude" value="{{$town->latitude}}" placeholder=" latitude" />
                                                        @error("latitude")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Longitude</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="longitude" value="{{$town->longitude}}" placeholder=" longitude" />
                                                        @error("longitude")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Description</label>
                                                        <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$town->description}}</textarea>
                                                        @error("description")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Town</button>
                                                <a href="{{route('town.list')}}" class="btn btn-outline-secondary">Back</a>
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
    <!-- END: Content-->
@endsection
