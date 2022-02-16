@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            All Categories
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">All Categories</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Categories Are Shown Here</h3>
                <a href="{{ route('category.create') }}" class="btn btn-primary col-md-offset-10">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>For</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Del</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories->all() as $category)
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ substr($category -> name,0,20) }}</td>
                        <td>{{ substr($category -> slug,0,50 )}}</td>
                        <td>{{ ($category->for_property)?"Properties":"Blog Section" }}</td>
                        <td>{{ $category -> created_at->diffForHumans() }}</td>
                        <td>{{ $category -> updated_at->diffForHumans() }}</td>
                        <td><a href="{{ route('category.edit',$category -> id) }}"><i class="fa fa-edit text-primary"></i></a></td>
                        <td>
                            <form style="display: none" action="{{ route('category.destroy',$category -> id) }}" method="post" id="del-form-{{ $category -> id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a onclick="
                                 if (confirm('Are You Sure TO Delete({{ $category->name }})?')){
                                     event.preventDefault();
                                     document.getElementById('del-form-{{ $category -> id }}').submit();
                                 }else {
                                     event.preventDefault();
                                 }
                            "><i class="fa fa-trash text-primary"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
