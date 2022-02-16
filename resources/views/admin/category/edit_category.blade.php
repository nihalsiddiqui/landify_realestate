@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Edit Category
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Edit Category</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box box-primary">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form role="form" method="post" action="{{ route('category.update',$category -> id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="Enter Name" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug" value="{{ $category->slug }}">
                    </div>
                    <div class="form-group">
                        <label for="">Category Purpose</label>
                        <select class="form-control" required name="for_property">
                            <option disabled selected>Select Category Purpose</option>
                            <option value="1" {{ $category->for_property == 1?"selected":"" }}>For Properties</option>
                            <option value="0" {{ $category->for_property == 0?"selected":"" }}>For Blog Section</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Edit Category</button>
                    <a href="{{ route('category.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </form>
        </div>
    </div>
    </div>

@endsection

