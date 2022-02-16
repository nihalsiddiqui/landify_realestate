@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Edit Permission
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Permissions</a></li>
            <li class="active">Edit Permission</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box box-primary">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form role="form" method="post" action="{{ route('permission.update',$permission -> id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Permission Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}" placeholder="Enter Permission Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Permission For</label>
                            <select name="for" id="for" class="form-control">
                                <option disabled selected>Select Permission For</option>
                                <option value="post"
                                    @if($permission ->for == 'post')
                                        selected
                                        @endif
                                >Post</option>
                                <option value="user"
                                        @if($permission ->for == 'user')
                                            selected
                                        @endif
                                >User</option>
                                <option value="other"
                                        @if($permission ->for == 'other')
                                            selected
                                        @endif
                                >Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update Permission</button>
                    <a href="{{ route('permission.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection