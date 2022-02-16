@section('page_title', 'Edit Facility')

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
                                    <h4 class="card-title">Edit Facility</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post"  enctype="multipart/form-data" action="{{route('facility.update',$facility->id)}}" class="form form-horizontal">
                                        {{{csrf_field()}}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Type <span class="text-danger">*</span></label>
                                                        <input type="text" id="search_address" class="form-control"
                                                               name="type" value="{{$facility->type}}" placeholder=" Name" />
                                                        @error('type')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Slug <span class="text-danger">*</span></label>
                                                        <input type="text" id="slug" class="form-control"
                                                               name="slug" value="{{$facility->slug}}" placeholder=" Slug" />
                                                        @error('slug')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Facility</button>
                                                <a href="{{route('facility.list')}}" class="btn btn-outline-secondary">Back</a>
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
@section('quillJs')

@endsection
