@extends("npls.layouts.master")
@section("page-title"," Agents")
@section("main-content")
    {{-- <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> Our Agent </h1>
                        <ul>
                            <li> <a href="index.html">Home</a> </li>
                            <li> Agent </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Page Header Section breadcumb End Here -->
    <!-- Our Agent Area Start Here -->
    <div class="our-agent-area">
        <div class="container">
            <div class="row">
                @foreach ($agents as $agent)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-agent">
                        <div class="images" style="padding: 0%;border:none;">
                            <div class="image-frame" style="height:100%;width:100%;">
                                <img src="{{asset($agent->image ?'users/' . $agent->image: 'images/default.jpg')}}" alt="" style="height: 100%;width:100%;">
                            </div>
                            <a class="fancybox" href="{{asset($agent->image ?'users/' . $agent->image: 'images/default.jpg')}}" data-fancybox-group="gallery" title="{{$agent->image}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                        <div class="agent-details">
                            <h3 style=" margin-bottom:20px;"> <a href="{{route('agent.detail', $agent->id)}}" style="font-size: 28px; font-weight: bold;">{{$agent->name}}</a></h3>
                            {{-- <span>Founder, Real Estate</span> --}}
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center" >
                    {{ $agents->links('pagination::default')}}
                </div>
            </div>
            <div class="row">
                @if ($agents->isEmpty())
                <div class="col-12 text-center" style="font-size: 3rem;" >
                    No Agent
                </div>

                @endif

            </div>
        </div>
    </div>

@endsection
