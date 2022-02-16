@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            All Roles
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Roles</a></li>
            <li class="active">All Roles</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">All Roles Are Shown Here</h5>
                @can('roles.create',Auth::user())
                    <a href="{{ route('role.create') }}" class="btn btn-primary col-md-offset-11">Add New</a>
                @endcan
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Role Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Del</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $role -> name }}</td>
                            <td>{{ $role -> created_at -> diffForHumans() }}</td>
                            <td>{{ $role -> updated_at -> diffForHumans()}}</td>
                            <td><a href="{{ route('role.edit',$role -> id) }}"><i class="fa fa-edit text-primary"></i></a></td>
                            <td>
                                <form style="display: none" id="del-form-{{ $role -> id }}" action="{{ route('role.destroy',$role -> id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                    if(confirm('Are You Sure To Delete( {{ $role -> name }} )')){
                                        event.preventDefault();
                                        document.getElementById('del-form-{{ $role -> id }}').submit();
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