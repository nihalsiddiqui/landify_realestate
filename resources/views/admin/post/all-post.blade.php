@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Add Post
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Post</a></li>
            <li class="active">Add Post</li>
        </ol>
    </section>
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary with-border">
            {{--showing the errors--}}
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form role="form" method="post" action="{{route('post.store')}}" ENCTYPE="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field()}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Title">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" value="1"> Publish
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Tag"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="categories[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Tag"
                                    style="width: 100%;">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="body">Post Data</label>
                        <div class="form-group">
                            <textarea id="body" name="body"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add Post</button>
                    <a href="{{ route('post.index') }}" class="btn btn-warning">Go Back</a>
                </div>

            </form>
        </div>
        <!-- /.box -->
    </div>

@endsection
