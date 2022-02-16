@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Edit User
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Edit User</li>
        </ol>
    </section>
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary with-border">
        {{--<div class="box-header with-border">--}}
        {{--<h3 class="box-title">Add Post</h3>--}}
        {{--</div>--}}
        <!-- /.box-header -->
            <!-- form start -->
            {{--showing the errors--}}
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form role="form" method="post" action="{{ route('user.update',$user -> id) }}" enctype="multipart/form-data">
                {{ csrf_field()}}
                {{ method_field('PUT') }}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="pass" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"
                                   @if($user-> status == 1)
                                           checked
                                   @endif
                                   value="1">
                        </div>
                        <div class="form-group">
                            <label for="">User Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="role">User Role</label>
                            <select name="role" id="role" class="form-control">
                                <option disabled selected>Select User Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role -> id }}"
                                        @foreach($user->role as $userRole) {{--here the role is function is admin model--}}
                                            @if($userRole -> id == $role-> id)
                                                selected
                                            @endif
                                        @endforeach
                                    >{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="des">User Description</label>
                        <div class="form-group">
                            <textarea id="body" name="des">
                                {{ $user->description }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ route('user.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>

@endsection
