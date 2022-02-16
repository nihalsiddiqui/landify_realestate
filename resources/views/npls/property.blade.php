@extends("npls.layouts.master")
@section("page-title","NPLS Homes | Home Page")
@section("main-content")
    <style>
        .fa.fa-chevron-circle-right {
            color: red !important;
        }

        .property-details-area {
            padding: 0 0 !important;
        }
    </style>
    <!-- Page Header Section breadcumb Start Here -->
    <div class="page-header-area"
         style="background: rgba(0, 0, 0, 0) url({{ asset("npls/images/bg.jpg") }})!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1>{{ ucwords($generic->name) }}</h1>
                        <ul>
                            <li><a href="{{ route("frontend.home") }}">Home</a></li>
                            <li>{{ ucwords(str_replace("."," ",Route::currentRouteName())) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
    <!-- Property Area Start Here -->
    <div class="propery-area">
        <div class="container-fluid"
             style="margin: 0 25px!important;padding-left: 0px!important;padding-right: 0px!important;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="property-details-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="big-photo">
                                        {{--                                        @foreach($generic->thumbnail as $picture)--}}
                                        <div class="item"><img style="height: 400px!important;"
                                                               src="{{ asset( $generic->thumbnail )}}" alt=""></div>
                                        {{--                                        @endforeach--}}
                                    </div>
                                    <div class="pagin-slider">
                                        {{--                                        @foreach($generic->thumbnail as $picture)--}}
                                        <div class="item"><img style="height: 107px!important;"
                                                               src="{{ asset( $generic->thumbnail )}}" alt=""></div>
                                        {{--                                        @endforeach--}}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="content-details-one">
                                        <div class="top-details">
                                            <h3>{{ ucwords($generic->name) }} <small>Overview</small></h3>
                                            <h4><i class="fa fa-map-marker"></i> {{ ($generic->address) }}</h4>
                                            <p>
                                                {{ $generic->summary }}
                                            </p>
                                        </div>
                                        <div class="last-details">
                                            <h3>Essential Information:</h3>
                                            <ul>
                                                <li><i class="fa fa-chevron-circle-right"></i> Property ID: HZ01</li>
                                                <li><i class="fa fa-chevron-circle-right"></i> Price:
                                                    ${{ @number_format($generic->price) }}</li>
                                                <li><i class="fa fa-chevron-circle-right"></i> Property
                                                    Size: {{ $generic->square_feet }} Sq
                                                </li>
                                                <li><i class="fa fa-chevron-circle-right"></i> Bathrooms: 3</li>
                                                <li><i class="fa fa-chevron-circle-right"></i> Bedroom: 4</li>
                                                <li><i class="fa fa-chevron-circle-right"></i> Garage: 1</li>
                                            </ul>
                                            <div class="read-more">
                                                <a class="button btn btn-danger btn-lg" href="#">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="property-map">
                                        {{--                                        @php--}}
                                        {{--                                            $details = $generic->detail;--}}
                                        {{--                                        @endphp--}}
                                        <h3>Property Details</h3>
                                        <div class="property-details">
                                            <div class="single-property-details row">
                                                <h5>Features:</h5>
                                                @foreach($generic->features as $feature)
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="single-informations">
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-chevron-circle-right"></i> {{ $feature->name }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="single-property-details margin-top row">
                                                <h5>Facilities:</h5>
                                                @foreach($generic->facility as $facility)
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="single-informations">
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-chevron-circle-right"></i> {{ $facility->type }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="single-property-details margin-top row">
                                                <h4>More Informations</h4>
                                                <p>
                                                    {!! htmlspecialchars_decode($generic->description) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">--}}
                {{--                    <div class="sidebar-area">--}}
                {{--                        <div class="widget">--}}
                {{--                            <h2 class="widget-title">Search Property</h2>--}}
                {{--                            <div class="property-filtering">--}}
                {{--                                <form>--}}
                {{--                                    <div class="form-fields">--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Max Of Bedrooms</p>--}}
                {{--                                                <div class="input-box">--}}
                {{--                                                    <select>--}}
                {{--                                                        <option value="" selected="selected">Select Bedrooms</option>--}}
                {{--                                                        <option value="">1</option>--}}
                {{--                                                        <option value="">2</option>--}}
                {{--                                                        <option value="">3</option>--}}
                {{--                                                        <option value="">4</option>--}}
                {{--                                                        <option value="">5</option>--}}
                {{--                                                        <option value="">6</option>--}}
                {{--                                                        <option value="">7</option>--}}
                {{--                                                    </select>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Max Of Bathrooms</p>--}}
                {{--                                                <div class="input-box">--}}
                {{--                                                    <select>--}}
                {{--                                                        <option value="" selected="selected">Select Bathrooms</option>--}}
                {{--                                                        <option value="">1</option>--}}
                {{--                                                        <option value="">2</option>--}}
                {{--                                                        <option value="">3</option>--}}
                {{--                                                        <option value="">4</option>--}}
                {{--                                                        <option value="">5</option>--}}
                {{--                                                        <option value="">6</option>--}}
                {{--                                                        <option value="">7</option>--}}
                {{--                                                    </select>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Min Area(Sqft)</p>--}}
                {{--                                                <div class="input-box">--}}
                {{--                                                    <select>--}}
                {{--                                                        <option value="" selected="selected">Select Min Area</option>--}}
                {{--                                                        <option value="">100 Sqft</option>--}}
                {{--                                                        <option value="">150 Sqft</option>--}}
                {{--                                                        <option value="">200 Sqft</option>--}}
                {{--                                                        <option value="">250 Sqft</option>--}}
                {{--                                                        <option value="">300 Sqft</option>--}}
                {{--                                                        <option value="">350 Sqft</option>--}}
                {{--                                                        <option value="">400 Sqft</option>--}}
                {{--                                                        <option value="">450 Sqft</option>--}}
                {{--                                                        <option value="">500 Sqft</option>--}}
                {{--                                                    </select>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Max Area(Sqft)</p>--}}
                {{--                                                <div class="input-box">--}}
                {{--                                                    <select>--}}
                {{--                                                        <option value="" selected="selected">Select Max Area</option>--}}
                {{--                                                        <option value="">200 Sqft</option>--}}
                {{--                                                        <option value="">250 Sqft</option>--}}
                {{--                                                        <option value="">300 Sqft</option>--}}
                {{--                                                        <option value="">350 Sqft</option>--}}
                {{--                                                        <option value="">400 Sqft</option>--}}
                {{--                                                        <option value="">450 Sqft</option>--}}
                {{--                                                        <option value="">500 Sqft</option>--}}
                {{--                                                        <option value="">550 Sqft</option>--}}
                {{--                                                        <option value="">600 Sqft</option>--}}
                {{--                                                    </select>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Property Type</p>--}}
                {{--                                                <div class="input-box">--}}
                {{--                                                    <select>--}}
                {{--                                                        <option value="" selected="selected">Select Property Type</option>--}}
                {{--                                                        <option value="">Apartment</option>--}}
                {{--                                                        <option value="">Flat</option>--}}
                {{--                                                        <option value="">House</option>--}}
                {{--                                                        <option value="">Condominium</option>--}}
                {{--                                                        <option value="">Cottage</option>--}}
                {{--                                                    </select>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Room Type</p>--}}
                {{--                                                <div class="input-box">--}}
                {{--                                                    <select>--}}
                {{--                                                        <option value="" selected="selected">Select Room Type</option>--}}
                {{--                                                        <option value="">Single Room</option>--}}
                {{--                                                        <option value="">Double Room</option>--}}
                {{--                                                        <option value="">Deluxe Single Room</option>--}}
                {{--                                                        <option value="">Deluxe Double Room</option>--}}
                {{--                                                    </select>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <!-- shop-filter start -->--}}
                {{--                                            <div class="single-field">--}}
                {{--                                                <p>Priceing Range</p>--}}
                {{--                                                <div id="slider-range"></div>--}}
                {{--                                                <div class="price-area">--}}
                {{--                                                    <input type="text" id="amount">--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <!-- shop-filter end -->--}}
                {{--                                        </div>--}}
                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--                                            <div class="read-more">--}}
                {{--                                                <a class="button btn btn-danger btn-lg">Find Property</a>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </form>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="widget widget_categories">--}}
                {{--                            <h2 class="widget-title">Category</h2>--}}
                {{--                            <ul>--}}
                {{--                                <li><a href="#">Real Estate   <span class="count">(10)</span></a></li>--}}
                {{--                                <li><a href="#">Building Sale    <span class="count">(09)</span></a></li>--}}
                {{--                                <li><a href="#">Realestate Flat    <span class="count">(17)</span></a></li>--}}
                {{--                                <li><a href="#">Flat Rent <span class="count">(31)</span></a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                        <div class="widget">--}}
                {{--                            <h2>Feature Property</h2>--}}
                {{--                            <div class="media single-post">--}}
                {{--                                <div class="pull-left">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img class="media-object" src="/npls/images/property/01.jpg" alt="post">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="media-body">--}}
                {{--                                    <div class="posted-date">--}}
                {{--                                        <a href="#">Masons Villas <img src="/npls/images/property/star.png" alt=""></a>--}}
                {{--                                        <p>$550,000</p>--}}
                {{--                                        <span><i class="fa fa-map-marker"></i> Australia / South Vellly</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="media single-post">--}}
                {{--                                <div class="pull-left">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img class="media-object" src="/npls/images/property/02.jpg" alt="post">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="media-body">--}}
                {{--                                    <div class="posted-date">--}}
                {{--                                        <a href="#">Masons Villas  <img src="/npls/images/property/star.png" alt=""></a>--}}
                {{--                                        <p>$820,000</p>--}}
                {{--                                        <span><i class="fa fa-map-marker"></i> USA / Rock Vellly</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="widget">--}}
                {{--                            <h2 class="widget-title">Tags</h2>--}}
                {{--                            <div class="popular-tags">--}}
                {{--                                <ul>--}}
                {{--                                    <li><a href="#">Flat</a></li>--}}
                {{--                                    <li><a href="#">Realestate</a></li>--}}
                {{--                                    <li><a href="#">Building</a></li>--}}
                {{--                                    <li><a href="#">Corporate</a></li>--}}
                {{--                                    <li><a href="#">Rent</a></li>--}}
                {{--                                    <li><a href="#">Office</a></li>--}}
                {{--                                    <li><a href="#">House</a></li>--}}
                {{--                                    <li><a href="#">Agent</a></li>--}}
                {{--                                    <li><a href="#">Help</a></li>--}}
                {{--                                    <li><a href="#">Support</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="widget">--}}
                {{--                            <h2 class="widget-title">Best Agents</h2>--}}
                {{--                            <div class="">--}}
                {{--                                <div class="best-agent">--}}
                {{--                                    <h3>Best Agent</h3>--}}
                {{--                                    --}}
                {{--                                </div>--}}
                {{--                                <ul>--}}
                {{--                                    <li>--}}
                {{--                                        <div class="media">--}}
                {{--                                            <div class="pull-left">--}}
                {{--                                                <img src="/npls/images/agent/a1.jpg" class="media-object" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body">--}}
                {{--                                                <h4 class="media-heading"><a href="#">Caelan Sinclair</a></h4>--}}
                {{--                                                <p>E-mail Address <br/> realestate@gmail.com</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <div class="media">--}}
                {{--                                            <div class="pull-left">--}}
                {{--                                                <img src="/npls/images/agent/a2.jpg" class="media-object" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body">--}}
                {{--                                                <h4 class="media-heading"><a href="#">Jasica Doron</a></h4>--}}
                {{--                                                <p>E-mail Address <br/> realestate@gmail.com</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <div class="media">--}}
                {{--                                            <div class="pull-left">--}}
                {{--                                                <img src="/npls/images/agent/a3.jpg" class="media-object" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body">--}}
                {{--                                                <h4 class="media-heading"><a href="#">Marjan Hok</a></h4>--}}
                {{--                                                <p>E-mail Address <br/> realestate@gmail.com</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <div class="media">--}}
                {{--                                            <div class="pull-left">--}}
                {{--                                                <img src="/npls/images/agent/a4.jpg" class="media-object" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body">--}}
                {{--                                                <h4 class="media-heading"><a href="#">Anger Jerry</a></h4>--}}
                {{--                                                <p>E-mail Address <br/> realestate@gmail.com</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Property Area End Here -->
@endsection
