<style>
    #join_us{
        display: block!important;
        height: 30px!important;
       padding: 0px!important;
    }
    /*#pakistan{*/
    /*    background-image: url(npls/images/pakistan.png);*/
    /*}*/
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 0px 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 225px;
        box-shadow: 0px 8px 16px
        0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
    .img-width{
        min-width: 171px!important;
    }



    .dropdown-content a {
        color: black;
        padding: 0px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: unset;
    }
</style>

<header>
{{--    <div class="header-top-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="header-top-left">--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{route('pre_qualified')}}" style="text-decoration: none; background: transparent;color: #fff">--}}
{{--                                    Halal Morgage</a></li>--}}
{{--                            <li><a href="" style="color: #fff;">Building Materials</a></li>--}}
{{--                            <li><a href="" style="color: #fff;">Décor & Architecture</a></li>--}}
{{--                            <li><a href="" style="color: #fff;">List Property</a></li>--}}
{{--                            <li>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button class="dropbtn">--}}
{{--                                        Join Us--}}
{{--                                    </button>--}}

{{--                                    <div class="dropdown-content">--}}
{{--                                        <a href="#">--}}
{{--                                             Agent</a>--}}

{{--                                        <a href="#"> Agent Portal, Support Center</a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li><a href="" style="color: #fff;">Why NPLS</a></li>--}}
{{--                            <li><a href="" style="color: #fff;"><i class="fa fa-sign-in"></i>sign in</a></li>--}}
{{--                            <li>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button class="dropbtn">--}}
{{--                                        <a href="#" style="text-decoration: none;color: #fff">--}}
{{--                                            <img src=--}}
{{--                                                 "{{asset('npls/images/pakistan.png')}}"--}}
{{--                                                 width="20" height="15" ><span style="margin-left: 10px">Pakistan</span> </a>--}}
{{--                                    </button>--}}

{{--                                    <div class="dropdown-content img-width">--}}
{{--                                        <button class="dropbtn" style="padding: 0px!important;">--}}
{{--                                        <a href="#">--}}
{{--                                            <img class="img" src=--}}
{{--                                                 "{{asset('npls/images/usa_canda_edit.jpg')}}"--}}
{{--                                                 width="20" height="15"><span style="margin-left: 10px">Canadian/USA </span> </a>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="header-top-right">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>--}}
{{--                            <li>--}}


{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="main-header-area" id="sticky">
        <div class="container">
            <div class="row" >
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ route("frontend.home") }}">
                            <img src="{{ asset('/npls/images/logo1.png') }}" alt="npls logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="{{ Route::currentRouteName() == "pre_qualified"?"active":"" }}"><a href="{{ route("pre_qualified") }}">Halal Morgage</a></li>
                                <li  class="{{ Route::currentRouteName() == "about.us"?"active":"" }}"><a href="{{route('about.us')}}">Building Materials</a></li>
                                {{--                                {{ ((Route::currentRouteName() == "properties") or str_contains(Route::currentRouteName(),"properties."))?"active":"" }}--}}
{{--                                {{ route("properties", ['type' => 'grid']) }}--}}

                                <li class="{{ Route::currentRouteName() == "contact"?"active":"" }}?"><a href="{{route('contact')}}">Décor & Architecture</a></li>

                                <li class=""><a href="{{route('login')}}">
                                        List Property
                                    </a>
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li ><a href="{{ route("properties.for.sale") }}">Properties for Sale <i class="{{ Route::currentRouteName() == "properties.sale"?"fa fa-check":"" }}"></i></a></li>--}}
{{--                                        <li ><a href="{{ route("properties.for.rent") }}">Propertiest for Rent <i class="{{ Route::currentRouteName() == "properties.rent"?"fa fa-check":"" }}"></i></a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="{{ Route::currentRouteName() == "agent"?"active":"" }}"><a href="{{route('agent')}}"> Join Us
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('applynow')}}">Agent  </a></li>
                                    <li><a href="{{route('admin.login')}}" >Agent Portal  </a></li>
                                    <li><a href="{{route('contact')}}" >Support Center  </a></li>
                                </ul>
                                {{-- </li> --}}
                                {{--                                <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>--}}
                                {{--                                    <div class="mega-menu">--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li class="mega-item"><a href="index.html">Home One</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="index2.html">Home Two</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="index3.html">Home Three</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="about.html">About Us</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li class="mega-item"><a href="property-grid.html">Property Grid View</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="property-list.html">Property List View</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="property-details.html">Property Details Style 1</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="property-details1.html">Property Details Style 2</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li class="mega-item"><a href="agent.html">Agent</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="agent-details.html">Agent Details</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="blog.html">Blog Page</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="404.html">Error Page</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                {{--                                </li>--}}
                                <li class="{{ Route::currentRouteName() == "blog"?"active":"" }}?"><a href="{{route('why_npls')}}">Why NPLS </a>
                                    {{--                                    <ul class="sub-menu">--}}
                                    {{--                                        <li><a href="blog.html">Blog Grid View</a></li>--}}
                                    {{--                                        <li><a href="blog1.html">Blog Sidebar View</a></li>--}}
                                    {{--                                        <li><a href="single-blog.html">Blog Details</a></li>--}}
                                    {{--                                    </ul>--}}

                                </li>

                                <li>
                                    <div class="dropdown">
                                        <button class="dropbtn" style="padding: 0px!important;">
                                            <a href="http://npls.xencorps.com/" style="text-decoration: none;color: #000;width: 100px;background: transparent;">
                                                Pak <i class="fa fa-angle-down"></i> </span> </a>
                                        </button>

                                        <div class="dropdown-content" style="min-width: 100px!important; ">
                                            <button class="dropbtn" style="padding: 0px!important;">
                                                <a href="https://nplshomes.com/" style="color: #0a0a0a;background: transparent;padding: 5px">Can/USA  </a>
                                            </button>
                                        </div>
                                    </div>
                                </li>

                                <li><a href="{{route('login')}}" class="btn "  style="color:white;background: #46BFE2;width: 100px;padding: 9px!important;"><i class="fa fa-sign-in" style="margin-right: 10px"></i>sign in</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
{{--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" style="padding: 8px">--}}
{{--                    <div class="submit-property">--}}
{{--                        --}}{{-- <a class="button btn btn-danger btn-lg {{ Route::currentRouteName() == "find.property"?"active":"" }}?" href="{{route('find.property')}}">Find property</a> --}}
{{--                        <ul>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <li>--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <button class="dropbtn">--}}
{{--                                                <a href="http://npls.xencorps.com/" style="text-decoration: none;color: #000;width: 100px">--}}
{{--                                                    Pak <i class="fa fa-angle-down"></i> </span> </a>--}}
{{--                                            </button>--}}

{{--                                            <div class="dropdown-content" style="min-width: 81px!important; ">--}}
{{--                                                <button class="dropbtn" style="padding: 0px!important;">--}}
{{--                                                    <a href="https://nplshomes.com/" style="color: #0a0a0a;">Can/USA  </a>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <a href="{{route('login')}}" class="btn "  style="color:white;background: #46BFE2;width: 100px;margin-left: 37px"><i class="fa fa-sign-in" style="margin-right: 10px"></i>sign in</a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </ul>--}}
{{--                        @if (!auth()->check())--}}
{{--                        @else--}}
{{--                        <a href="{{route('dashboard')}}" class="btn btn-lg" style="color: white;background: #46BFE2;"><i class="fa fa-sign-in" style="margin-right: 6px;" aria-hidden="true"></i>Dashboard</a>--}}
{{--                        @endif--}}



{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container acurate">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="{{ Route::currentRouteName() == "pre_qualified"?"active":"" }}"><a href="{{ route("pre_qualified") }}">Halal Morgage</a></li>
                                <li  class="{{ Route::currentRouteName() == "about.us"?"active":"" }}"><a href="{{route('about.us')}}">Building Materials</a></li>
                                {{--                                {{ ((Route::currentRouteName() == "properties") or str_contains(Route::currentRouteName(),"properties."))?"active":"" }}--}}
                                <li class=""><a href="{{route('login')}}">List Property
                                    {{-- <i class="fa fa-angle-down"></i> --}}
                                </a>
                                    {{-- <ul class="sub-menu">
                                        <li ><a href="{{ route("properties.for.sale") }}">Properties for Sale <i class="{{ Route::currentRouteName() == "properties.sale"?"fa fa-check":"" }}"></i></a></li>
                                        <li ><a href="{{ route("properties.for.rent") }}">Propertiest for Rent <i class="{{ Route::currentRouteName() == "properties.rent"?"fa fa-check":"" }}"></i></a></li>
                                    </ul> --}}
                                </li>
                                <li class=""><a href="{{route('agent')}}">Join Us</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('applynow')}}">Agent  </a></li>
                                    <li><a href="{{route('admin.login')}}" >Agent Portal  </a></li>
                                    <li><a href="{{route('contact')}}" >Support Center  </a></li>
                                </ul>
                                </li>
                                {{--                                <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>--}}
                                {{--                                    <div class="mega-menu">--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li class="mega-item"><a href="index.html">Home One</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="index2.html">Home Two</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="index3.html">Home Three</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="about.html">About Us</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li class="mega-item"><a href="property-grid.html">Property Grid View</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="property-list.html">Property List View</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="property-details.html">Property Details Style 1</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="property-details1.html">Property Details Style 2</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li class="mega-item"><a href="agent.html">Agent</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="agent-details.html">Agent Details</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="blog.html">Blog Page</a></li>--}}
                                {{--                                            <li class="mega-item"><a href="404.html">Error Page</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                {{--                                </li>--}}
                                <li class="{{ Route::currentRouteName() == "blog"?"active":"" }}?"><a href="{{route('why_npls')}}">Why NPLS </a>
                                    {{--                                    <ul class="sub-menu">--}}
                                    {{--                                        <li><a href="blog.html">Blog Grid View</a></li>--}}
                                    {{--                                        <li><a href="blog1.html">Blog Sidebar View</a></li>--}}
                                    {{--                                        <li><a href="single-blog.html">Blog Details</a></li>--}}
                                    {{--                                    </ul>--}}

                                </li>
                                <li class="{{ Request::routeIs("post.create")?"active":"" }}"><a href="{{route('contact')}}">Décor & Architecture</a></li>
                                <li>

{{--                        @if (!auth()->check())--}}
                        <a href="{{route('login')}}" target="_blank" class="btn text-center" style="color:white;background: #46BFE2;width:110px;padding:4% 3% ;margin:4% 36% 4% 36%;"><i class="fa fa-sign-in" style="margin-right: 10px"></i>sign in</a>
{{--                        @else--}}
{{--                        <a href="{{route('dashboard')}}" class="btn" style="color: white;background: #46BFE2; padding:4% 5%;width:80px;margin:4% 34% 4% 34%;"><i class="fa fa-sign-in" style="margin-right: 6px; " aria-hidden="true"></i>Dashboard</a>--}}
{{--                        @endif--}}
                                </li>

{{--                                <li>--}}
{{--                                    <div class="dropdown">--}}
{{--                                        <button class="dropbtn">--}}
{{--                                            <a href="#" style="text-decoration: none;color: #000;width: 100px">--}}
{{--                                                <img src=--}}
{{--                                                     "{{asset('npls/images/pakistan.png')}}"--}}
{{--                                                     width="20" height="15" ><span style="margin-left: 10px">Pakistan</span> </a>--}}
{{--                                        </button>--}}

{{--                                        <div class="dropdown-content img-width">--}}
{{--                                            <button class="dropbtn" style="padding: 0px!important;">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img class="img" src=--}}
{{--                                                    "{{asset('npls/images/usa_canda_edit.jpg')}}"--}}
{{--                                                         width="20" height="15"><span style="margin-left: 10px;color: #0a0a0a">Canadian/USA </span> </a>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
