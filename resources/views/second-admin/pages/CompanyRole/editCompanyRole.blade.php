@section('page_title', 'Edit Company Role')

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
                                    <h4 class="card-title">Edit Company ROle</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post" action="{{route('companyRole.update',$companyRole->id)}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Role Name<span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$companyRole->name}}" placeholder=" name" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    {{--                                                    <div class="col-sm-6">--}}
                                                    {{--                                                        <label for="contact-info">Slug</label>--}}
                                                    {{--                                                        <input type="text" id="first-name" class="form-control"--}}
                                                    {{--                                                               name="slug" placeholder=" slug" />--}}
                                                    {{--                                                    </div>--}}

                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Description</label>

                                                        <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$companyRole->description}}</textarea>
                                                        @error("description")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Role</button>
                                                <a href="{{route('company.role.list')}}" class="btn btn-outline-secondary">Back</a>
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