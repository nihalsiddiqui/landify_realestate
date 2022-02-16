@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            All Tags
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tags</a></li>
            <li class="active">All Tags</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">All Tags Are Shown Here</h5>
                <a href="{{ route('tags.create') }}" class="btn btn-primary col-md-offset-11">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>For</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Del</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $tag -> name }}</td>
                            <td>{{ $tag -> slug }}</td>
                            <td>{{ ($tag->for_property)?"Properties":"Blog Section" }}</td>
                            <td>{{ $tag -> created_at -> diffForHumans() }}</td>
                            <td>{{ $tag -> updated_at -> diffForHumans()}}</td>
                            <td><a href="{{ route('tags.edit',$tag -> id) }}"><i class="fa fa-edit text-primary"></i></a></td>
                            <td>
                                <form style="display: none" id="del-form-{{ $tag -> id }}" action="{{ route('tags.destroy',$tag -> id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                    if(confirm('Are You Sure To Delete( {{ $tag -> name }} )')){
                                        event.preventDefault();
                                        document.getElementById('del-form-{{ $tag -> id }}').submit();
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
