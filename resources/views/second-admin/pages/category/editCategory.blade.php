@section('page_title', 'Edit Category')

@extends('second-admin.layouts.master')
@section('quillStyle')

    <!-- Select2 -->
{{--    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">--}}

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
                                    <h4 class="card-title">Edit Category</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" role="form" method="post" action="{{ route('category.update',$category->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="first-name">Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$category->name}}" placeholder=" Name" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="email-id">Slug <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="email-id" class="form-control"
                                                               name="slug" value="{{$category->slug}}" placeholder="slug" />
                                                        @error("slug")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-info">Category Purpose <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">

                                                        <select class="custom-select" required name="for_property" id="customSelect">
                                                            <option selected>Select Category Purpose</option>
                                                            <option value="1"{{ $category->for_property == 1?"selected":"" }}>For Properties</option>
                                                            <option value="0"{{ $category->for_property == 0?"selected":"" }}>For Blog Section</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="Submit" class="btn btn-primary mr-1">Update Category</button>
                                                <a href="{{ route('category.list') }}" class="btn btn-outline-secondary">Back</a>
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
