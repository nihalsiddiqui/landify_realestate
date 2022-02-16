@section('page_title','Update Profile')
@extends('second-admin.layouts.master')
@section('quillStyle')
    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">
@endsection
@section('content')
    <!-- Include stylesheet -->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Profile</h4>
                                </div>
                                <div class="card-body">

                                    @if (Session::has('update_profile'))
                                        <div class="alert alert-success p-1" role="alert">
                                            {{Session::get('update_profile')}}
                                        </div>

                                    @endif

                                    <form enctype="multipart/form-data" class="form form-horizontal" method="post"
                                          action="{{route('admin.profile.update')}}">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name <span class="text-danger">*</span></label>
                                                    <input type="text" id="name" class="form-control "
                                                           name="name" value="{{auth('admin')->user()->name}}"
                                                           placeholder="name"/>
                                                    @error("name")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                    <input type="text" id="email" class="form-control "
                                                           name="email" value="{{auth('admin')->user()->email}}"
                                                           placeholder="email"/>
                                                    @error("email")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="phone">Phone</label>
                                                    <input type="number" class="form-control " id="phone"
                                                           value="{{auth('admin')->user()->phone}}" name="phone"
                                                           placeholder="Enter Phone">
                                                    @error("phone")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="image">Image <span class="text-danger">*</span></label>
                                                    <input type="file" style="height:28px; width:175px;"
                                                           accept="image/png, image/jpeg" id="image" name="image">
                                                    <img style="height:50px; width:84px;"
                                                         src="{{ asset('users/'.auth('admin')->user()->image) }}">
                                                    @error("image")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="description">Description</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <textarea class="ckeditor"
                                                                      name="description">{{auth('admin')->user()->description}}</textarea>
                                                            @error("body")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3" style="text-align: end">
                                                <button type="submit" class="btn btn-primary mr-1">Update</button>
                                                <a href="{{route('user.list')}}"
                                                   class="btn btn-outline-secondary">Back</a>
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
        <div class="content-wrapper">
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Password</h4>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success p-1" role="alert">
                                            {{Session::get('message')}}
                                        </div>
                                    @elseif(Session::has('error'))
                                        <div class="alert alert-danger p-1" role="alert">
                                            {{Session::get('error')}}
                                        </div>
                                    @endif
                                    <form class="form form-horizontal" method="post"
                                          action="{{route('admin.profile.password.update')}}">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="old_password">Old Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="name" class="form-control "
                                                           name="old_password" value="" placeholder=""/>
                                                    @error("old_password")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="new_password">New Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="name" class="form-control "
                                                           name="new_password" value="" placeholder=""/>
                                                    @error("new_password")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Confirm Password <span class="text-danger">*</span></label>
                                                    <input type="password" id="email" class="form-control "
                                                           name="confirm_password" value="" placeholder=""/>
                                                    @error("confirm_password")
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3" style="text-align: end">
                                                <button type="submit" class="btn btn-primary mr-1">Update</button>
                                                <a href="{{route('dashboard')}}"
                                                   class="btn btn-outline-secondary">Back</a>
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
    <script src="{{asset('admin')}}/bower_components/ckeditor/ckeditor.js"></script>
    <script src="{{asset('admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>

    <script>
        $(function () {
            $('.select2').select2({
                'placeholder': ' select'
            })
            // Replace the <textarea id="editor1"> with a CKEditor
            CKEDITOR.replace('.ckeditor')
        })
    </script>

@endsection

