@section('page_title', 'Edit User')

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
                                    <h4 class="card-title">Edit User</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" class="form form-horizontal" method="post" action="{{route('user.update',$user->id)}}">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="name">Name <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="first-name" class="form-control"
                                                                   name="name" value="{{$user->name}}" placeholder="name" />
                                                            @error("name")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="email">Email <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="email" id="email-id" class="form-control"
                                                                   name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="{{$user->email}}" placeholder="email" />
                                                            @error("email")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col-sm-3 col-form-label">--}}
{{--                                                            <label for=password">Password</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-9">--}}
{{--                                                            <input type="password" id="contact-info" class="form-control"--}}
{{--                                                                   name="password" value="{{$user->password}}" placeholder="password" />--}}
{{--                                                            @error("password")--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="phone">Phone</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" id="phone" value="{{$user->phone}}" name="phone" placeholder="Enter Phone">
                                                            @error("phone")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="image">Image <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="file" style="height:28px; width:175px;" accept="image/png, image/jpeg" id="image" name="image">
                                                            <img style="height:50px; width:84px;" src="/users/{{ $user->image }}" >
                                                            @error("image")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="password">Role <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select required class="custom-select" id="customSelect" name="roles[]">
                                                                @foreach($roles as $role)
                                                                    <option value="{{$role->id}}" {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>{{$role->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="password">City <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select class="form-control"
                                                                    name="city" id="">
                                                                <option selected disabled>Select city</option>
                                                                @foreach($cities as $city)
                                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error("roles")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="status">Status</label>
                                                        </div>
                                                        <div class="col-sm-9 mt-1">
                                                            <input class="w-25 p-3" style="height: 20px" value="1"
                                                                   @if($user-> status == 1)
                                                                        checked
                                                                   @endif type="checkbox" name="status" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-6">
                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="description">Description</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <textarea class="ckeditor"  name="description">{{$user->description}}</textarea>
                                                            @error("body")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3" style="text-align: end">
                                                <button type="submit" class="btn btn-primary mr-1">Update</button>
                                                <a href="{{route('user.list')}}" class="btn btn-outline-secondary">Back</a>
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

