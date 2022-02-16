@extends("npls.layouts.master")
@section("page-title"," Blogs")
@section("main-content")
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> Blog</h1>
                        <ul>
                            <li> <a href="{{route('frontend.home')}}">Home</a> </li>
                            <li> Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
      <!-- Blog Page Start Here -->
      <div class="blog-page-area">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="total-blog-area">
                        <div class="single-blog">
                            <a href="#"> <img src="{{asset($post->image ?'images/posts/' . $post->image: 'images/default.jpg')}}" alt="" style="height: 220px;width:260px;"></a>
                            <div class="overley">
                                <ul>
                                    <li><a class="fancybox" href="{{asset($post->image ?'images/posts/' . $post->image: 'images/default.jpg')}}" data-fancybox-group="gallery" title="{{$post->image}}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="{{route('single-blog',['id'=>$post->id])}}">{{$post->title}}</a></h3>
                            <span>{{$post->created_at}} / By Admin</span>
                            <div style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;" > {!! strip_tags($post->body) !!}</div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-12 text-center" >
                    {{ $posts->links('pagination::default')}}
                </div>
            </div>
            <div class="row">
                @if ($posts->isEmpty())
                <div class="col-12 text-center" style="font-size: 3rem;" >
                    No Post
                </div>

                @endif

            </div>
        </div>
    </div>
    <!-- Blog Page End Here -->
@endsection
