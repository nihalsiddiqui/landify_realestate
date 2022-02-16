@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            Super Admin Post Page
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Post</a></li>
            <li class="active">All Post</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Posts</h3>
                @can('posts.create',Auth::user())
                    <a href="{{ route('super_admin_posts') }}" class="btn btn-primary">My Own Posts</a>
                    <a href="{{ route('post.create') }}" class="btn btn-primary" style="margin-left: 800px;">Add New</a>
                @endcan
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Posted By</th>
                        <th>Image</th>
                        <th>Tags</th>
                        <th>Categories</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        @can('posts.update',Auth::user())
                            <th>Edit</th>
                        @endcan
                        @can('posts.delete',Auth::user())
                            <th>Del</th>
                        @endcan
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1?>
                    @foreach($posts as $post)

                            <tr>
                                <td>{{ $i++}}</td>

                                <td>{{ $post -> title }}</td>
                                <td>{{ $post -> slug }}</td>
                                <td>
                                    @foreach($admins as $admin)
                                        @if($admin->id == $post->posted_by)
                                            {{ucwords($admin->name)}}
                                        @endif
                                    @endforeach
                                </td>
                                <td><img src="{{ asset('public/storage/images') }}/{{ $post -> image }}" width="70px" height="40px" alt="Not Found"></td>
                                <td>
                                    [@foreach($post ->tags as $tag)
                                        {{ ucwords($tag->name) }}
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach]
                                </td>
                                <td>
                                    [@foreach($post ->categories as $cat)
                                        {{ ucwords($cat->name) }}
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach]
                                </td>
                                <td>{{ $post -> created_at->diffForHumans() }}</td>
                                <td>{{ $post -> updated_at->diffForHumans() }}</td>
                                @can('posts.update',Auth::user())
                                    <td>
                                        <a href="{{ route('post.edit',$post->id) }}"><i class="fa fa-edit text-primary"></i></a>
                                    </td>
                                @endcan
                                @can('posts.delete',Auth::user())
                                    <td>
                                        <a href="" onclick="
                                                if (confirm('Are You Sure To Delete?')){
                                                event.preventDefault();
                                                document.getElementById('delete_form{{ $post -> id }}').submit();
                                                }
                                                else {
                                                event.preventDefault();
                                                }
                                                ">
                                            <i class="fa fa-trash text-primary"></i>
                                        </a>
                                        <form method="post" action="{{ route('post.destroy',$post -> id ) }}" id="delete_form{{ $post -> id }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </td>
                                @endcan
                            </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
