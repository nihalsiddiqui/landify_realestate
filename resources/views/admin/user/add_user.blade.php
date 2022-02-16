@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Add User
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Add User</li>
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
            <form role="form" method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="pass" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" value="1">
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
                                    <option value="{{ $role -> id }}">{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="des">User Description</label>
                        <div class="form-group">
                         <textarea id="body" name="des"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add User</button>
                    <a href="{{ route('user.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>

@endsection