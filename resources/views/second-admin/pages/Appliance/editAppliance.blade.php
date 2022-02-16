@section('page_title', 'Edit Appliance')

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
                                    <h4 class="card-title">Add Appliance</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="post"
                                          action="{{route('appliance.update',$appliance->id)}}" class="form form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 col-form-label">
                                                        <label for="name">Name<span class="text-danger">*</span></label>
                                                        <input type="text" id="name" class="form-control"
                                                               name="name" value="{{$appliance->name}}" placeholder=" Name"/>
                                                        @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="slug">Slug <span class="text-danger">*</span></label>
                                                        <input type="text" id="slug" class="form-control"
                                                               name="slug" value="{{$appliance->slug}}" placeholder=" Slug"/>
                                                        @error('slug')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                        <label for="first-name">Description</label>
                                                        <textarea name="description" id="description"
                                                                  class="form-control" rows="10"
                                                                  value="{{ old('description') }}"
                                                                  placeholder=''>{{$appliance->description}}</textarea>

                                                        @error('description')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Add Appliance</button>
                                                <a href="{{route('appliance.list')}}" class="btn btn-outline-secondary">Back</a>
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
