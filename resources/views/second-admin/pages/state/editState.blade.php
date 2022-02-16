@section('page_title', 'Edit State')

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
                                    <h4 class="card-title">Edit State</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post" action="{{route('state.update',$state->id)}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Name/Title <span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$state->name}}" placeholder=" Name" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Country <span class="text-danger">*</span></label>
                                                        <select name="country_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select Country</option>
{{--                                                            {{dd($countries)}}--}}
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}"
                                                                        @if($state->country_id == $country->id)
                                                                            selected
                                                                        @endif
                                                                >{{$country->name}}</option>
                                                            @endforeach


                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Description</label>

                                                        <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$state->description}}</textarea>
                                                        @error("description")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                            @foreach($countries as $country)--}}
                                            {{--                                            <input type="hidden" name="country_id" value="{{$country->id}}">--}}
                                            {{--                                            @endforeach--}}


                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update State</button>
                                                <a href="{{route('state.list')}}" class="btn btn-outline-secondary">Back</a>
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
