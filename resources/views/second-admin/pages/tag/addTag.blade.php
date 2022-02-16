@section('page_title', 'Add Tag')

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
                                    <h4 class="card-title">Add Tag</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="post" action="{{route('tags.store')}}" ENCTYPE="multipart/form-data" class="form form-horizontal" >
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="name">Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" placeholder=" Name" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="slug">Slug <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="email-id" class="form-control"
                                                               name="slug" placeholder="slug" />
                                                        @error("slug")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-info">Tag Purpose <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">

                                                        <select class="custom-select" required name="for_property" id="customSelect">
                                                            <option selected>Select Tag Purpose</option>
                                                            <option value="1">For Properties</option>
                                                            <option value="0">For Blog Section</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Add Tag</button>
                                                <a href="{{ route('tags.list') }}" class="btn btn-outline-secondary">Back</a>
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
