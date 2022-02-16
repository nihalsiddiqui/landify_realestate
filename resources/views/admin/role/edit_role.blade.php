@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Edit Role
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Roles</a></li>
            <li class="active">Edit Role</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box box-primary">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form role="form" method="post" action="{{ route('role.update',$role -> id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Role Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role" value="{{ $role -> name }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>Post</label>
                                    <div>
                                        @foreach($permissions as $permission)
                                            @if($permission ->for == 'post')
                                                <div>
                                                    <input type="checkbox" name="permissions[]"
                                                           @foreach($role->permissions as $rolePermission)
                                                               @if($rolePermission->id == $permission -> id)
                                                                    checked
                                                               @endif
                                                           @endforeach
                                                           value="{{ $permission->id }}"> {{ $permission -> name }}
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>User</label>
                                    <div>
                                        @foreach($permissions as $permission)
                                            @if($permission ->for == 'user')
                                                <div>
                                                    <input type="checkbox" name="permissions[]"
                                                           @foreach($role->permissions as $rolePermission)
                                                               @if($rolePermission->id == $permission -> id)
                                                                    checked
                                                               @endif
                                                           @endforeach
                                                           value="{{ $permission->id }}"> {{ $permission -> name }}
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Other</label>
                                    <div>
                                        @foreach($permissions as $permission)
                                            @if($permission ->for == 'other')
                                                <div>
                                                    <input type="checkbox" name="permissions[]"
                                                           @foreach($role->permissions as $rolePermission) {{--here the permissions is function is role model--}}
                                                               @if($rolePermission->id == $permission -> id)
                                                                    checked
                                                               @endif
                                                           @endforeach
                                                           value="{{ $permission->id }}"> {{ $permission -> name }}
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update Role</button>
                    <a href="{{ route('role.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection