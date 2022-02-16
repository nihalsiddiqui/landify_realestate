@extends('user.home')
@section('bg-img',asset('public/user/img/home-bg.jpg'))
@section('banner-title','Saaf Blog')
@section('banner-subtitle','A Blog Theme by AR')
@section('main-section')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach( $posts as $post )
            <div class="post-preview">
                <a href="{{route('sample-post',$post -> slug)}}">
                    <h2 class="post-title">
                        {{ $post -> title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post -> subtitle }}
                    </h3>
                </a>
                <p class="post-meta">Posted
                    {{ $post -> created_at ->diffForHumans() }}</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <div class="clearfix">
                {{ $posts -> links() }}
            </div>
        </div>
    </div>
</div>
<hr>
@endsection