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
                                    <h4 class="card-title">Edit Permission</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="post" action="{{ route('permission.update',$permission->id) }}" class="form form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="first-name">Name</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$permission->name}}" placeholder=" Name" />
                                                        @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-info">Permission For</label>
                                                    </div>
                                                    <div class="col-sm-9">

                                                        <select name="for" class="custom-select" id="customSelect">
                                                            <option selected>Select Permission</option>
                                                            <option value="post" @if($permission->for == 'post')
                                                            selected
                                                                @endif
                                                               >post
                                                            </option>
                                                            <option value="user" @if($permission->for == 'user')
                                                                selected
                                                            @endif>user</option>
                                                            <option value="other" @if($permission->for == 'other')
                                                                selected
                                                            @endif>other</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Permission</button>
                                                <a href="{{ route('permission.list') }}" class="btn btn-warning">Go Back</a>
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
