@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Edit Post
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Post</a></li>
            <li class="active">Edit Post</li>
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
            <form role="form" method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Title" value="{{ $post->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug" value="{{ $post->slug }}">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" value="1"
                                    @if($post -> status == 1)
                                        checked
                                        @endif
                                > Publish
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Tag"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        @foreach($post->tags as $posttag)
                                            @if($posttag -> id == $tag -> id)
                                                selected
                                            @endif
                                        @endforeach
                                    >{{ $tag -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="categories[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Tag"
                                    style="width: 100%;">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @foreach($post->categories as $postcategory) {{--here the categories is function is post model--}}
                                            @if($postcategory -> id == $category -> id)
                                                selected
                                            @endif
                                        @endforeach
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="body">Post Data</label>
                        <div class="form-group">
                            <textarea id="body" name="body">
                                {{ $post->body }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Edit Post</button>
                    <a href="{{ route('post.index') }}" class="btn btn-warning">Go Back</a>
                </div>

            </form>
        </div>
        <!-- /.box -->
    </div>

@endsection
