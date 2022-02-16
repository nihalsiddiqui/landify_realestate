@section('page-title','Add Feature')
@extends('user.layouts.master')
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
                                    <h4 class="card-title">Add Feature</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post"  enctype="multipart/form-data" action="{{route('user.feature.store')}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 col-form-label">
                                                        <label for="first-name">Name <span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" placeholder=" Name" />
                                                        @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="first-name">Slug <span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="slug" placeholder=" Slug" />
                                                        @error('slug')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                        <label for="first-name">Code</label>
                                                        <input type="number" id="first-name" class="form-control"
                                                               name="code" placeholder=" Count" />
                                                        @error('code')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            {{--                                            <div class="col-sm-9 offset-sm-3">--}}
                                            {{--                                                <div class="form-group">--}}
                                            {{--                                                    <div class="custom-control custom-checkbox">--}}
                                            {{--                                                        <input type="checkbox" class="custom-control-input"--}}
                                            {{--                                                               id="customCheck1" />--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Add Feature</button>
                                                <a href="{{route('features.list')}}" class="btn btn-outline-secondary">Back</a>
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
