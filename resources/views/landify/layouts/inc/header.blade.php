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

    <div class="main-header-area" id="sticky">
        <div class="container">
            <div class="row" >
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ route("frontend.home") }}">
                            <img src="{{ asset('/landify/images/landif-1.jpg') }}" alt="npls logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="{{ Route::currentRouteName() == "frontend.home"?"active":"" }}"><a href="{{ route("frontend.home") }}">Home</a></li>
                                <li  class=""><a href="#">Verification services</a></li>
                                {{--                                {{ ((Route::currentRouteName() == "properties") or str_contains(Route::currentRouteName(),"properties."))?"active":"" }}--}}
                                {{--                                {{ route("properties", ['type' => 'grid']) }}--}}

                                <li class=""><a href="#">Panel Of Experts</a></li>

                                <li class=""><a href="#">
                                        FAQs
                                    </a>
                                    {{--                                    <ul class="sub-menu">--}}
                                    {{--                                        <li ><a href="{{ route("properties.for.sale") }}">Properties for Sale <i class="{{ Route::currentRouteName() == "properties.sale"?"fa fa-check":"" }}"></i></a></li>--}}
                                    {{--                                        <li ><a href="{{ route("properties.for.rent") }}">Propertiest for Rent <i class="{{ Route::currentRouteName() == "properties.rent"?"fa fa-check":"" }}"></i></a></li>--}}
                                    {{--                                    </ul>--}}
                                </li>
                                <li class=""><a href="#"> About US

                                    </a>
                                <li class=""><a href="#">Contact US</a>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

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
                                <li class="{{ Route::currentRouteName() == "frontend.home"?"active":"" }}"><a href="{{ route("frontend.home") }}">Home</a></li>
                                <li  class="{{ Route::currentRouteName() == "about.us"?"active":"" }}"><a href="{{route('about.us')}}">Verification Services</a></li>
                                {{--                                {{ ((Route::currentRouteName() == "properties") or str_contains(Route::currentRouteName(),"properties."))?"active":"" }}--}}
                                <li class=""><a href="{{route('login')}}">Panel Of Experts

                                    </a>
                                </li>
                                <li class=""><a href="{{route('agent')}}">FAQs</a>

                                </li>

                                <li class="{{ Route::currentRouteName() == "blog"?"active":"" }}?"><a href="{{route('why_npls')}}">About Us </a>
\
                                </li>
                                <li class="{{ Request::routeIs("post.create")?"active":"" }}"><a href="{{route('contact')}}">Contact Us</a></li>
                                <li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
