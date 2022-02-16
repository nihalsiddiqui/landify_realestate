@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            All Permission
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Permissions</a></li>
            <li class="active">All Permissions</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">All Permissions Are Shown Here</h5>
                <a href="{{ route('permission.create') }}" class="pull-right btn btn-primary">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>For</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Del</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $permission -> name }}</td>
                            <td>{{ $permission ->for }}</td>
                            <td>{{ $permission -> created_at -> diffForHumans() }}</td>
                            <td>{{ $permission -> updated_at -> diffForHumans()}}</td>
                            <td><a href="{{ route('permission.edit',$permission) }}"><i class="fa fa-edit text-primary"></i></a></td>
                            <td>
                                <form style="display: none" id="del-form-{{ $permission->id}}" action="{{ route('permission.destroy',$permission -> id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route('permission.destroy',$permission->id) }}" onclick="
                                    if(confirm('Are You Sure To Delete( {{ $permission -> name }} )')){
                                        event.preventDefault();
                                        document.getElementById('del-form-{{ $permission -> id }}').submit();
                                    }else{
                                        event.preventDefault();
                                        }
                                    "><i class="fa fa-trash text-primary"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection