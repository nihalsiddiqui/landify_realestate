@extends('user.home')
@section('bg-img',asset('public/storage/images/'.$post -> image))
@section('banner-title', $post -> title )
@section('banner-subtitle',$post -> subtitle)
@section('main-section')
    <!-- Post Content -->
    <article>
        <div class="container">
            <p>Categories <span>
                    @foreach($categories as $category)
                        @foreach($post -> categories as $postCategory)
                            @if($postCategory -> id == $category -> id)
                                <a href="{{ route('category',$category->slug) }}">{{ $category -> name }}</a>
                            @endif
                        @endforeach
                    @endforeach
                    </span></p>
            <p style="float: right;">Tags <span>
                    @foreach($tags as $tag)
                        @foreach($post -> tags as $postTag)
                            @if($postTag -> id == $tag -> id)
                                <a href="{{ route('tag',$tag->slug) }}">{{ $tag -> name }}</a>
                            @endif
                        @endforeach
                    @endforeach
                    </span></p>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! htmlspecialchars_decode($post -> body) !!}
                </div>
            </div>
        </div>
    </article>

    <hr>
    @endsection
