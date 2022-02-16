@extends("npls.layouts.master")
@section("page-title", 'Homepage')
@section('style')
    <style>
        .info-form h2:after {
            /* border-style: none !important; */
        }

        input[name='search_query']::-webkit-input-placeholder, textarea::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #909090;
            opacity: 1; /* Firefox */
        }

        .favourite-heart img:hover {
            cursor: pointer;
        }
        #city_image{
            position: relative;
        }
        #city_image_fas{
            position: relative;
        }
        #city_image_phes{
            position: relative;
            margin-left: 24px;
            height: 195px!important;
        }
        #mob_img_rawal{
            position: relative;
            margin-left: 24px;
            max-width: 262px;
            height: 195px!important;
        }
        .mob_text_rawal{
            margin-left: 55px!important;
        }
        .city_text_phes{
            position: absolute!important;
            margin-top: -165px;
            color: #fff;
            margin-left: 37px;
            font-size: 20px;
        }
        .city_btn_phes{
            position: absolute!important;
            top: 137px;
            margin-left: 45px;
            color: #0a0a0a;
            background: #fff;
            padding: 5px;
            border-radius: 14px;
            text-decoration: none;
        }
        .city_text_fas{
            position: absolute!important;
            margin-top: -165px;
            color: #fff;
            margin-left: -31px;
            font-size: 20px;
        }
        .city_btn_fas{
            position: absolute!important;
            top: 137px;
            margin-left: -27px;
            color: #0a0a0a;
            background: #fff;
            padding: 5px;
            border-radius: 14px;
            text-decoration: none;
        }
        .city_text{
            position: absolute!important;
            margin-top: -349px;
            color: #fff;
            margin-left: 20px;
            font-size: 30px;
        }
        .city_btn{
            position: absolute!important;
            top: 316px;
            margin-left: -296px;
            color: #0a0a0a;
            background: #fff;
            padding: 5px;
            border-radius: 14px;
            text-decoration: none;
        }


        .gm-style-iw-d {
            overflow-x: hidden !important;
        }

        .background-image {
            background-image: none;
        }

        .owl-wrapper-outer {
            padding-bottom: 30px;
        }

        @media screen and (max-width: 480px) {
            #city_image{
                position: relative;
                max-width: 371px!important;
                margin-left: 20px!important;
            }
            #mob_img_kara{
                position: relative;
                max-width: 99%!important;
                margin-left: 6px!important;
            }
            #city_image_fas{
                position: relative;
                max-width: 339px!important;
                margin-left: 20px!important;
            }
            #mob_img_rawal{
                position: relative;
                max-width: 99%!important;
                margin-left: 34px!important;
            }
            #mob_isla{

                position: relative;
                max-width: 340px!important;
                margin-left: 20px!important;
                width: 372px!important;
            }
            #city_image_phes{
                position: relative;
                max-width: 340px!important;
                margin-left: 34px;
                height: 195px!important;
            }
            .city_text_phes{
                position: absolute!important;
                margin-top: -165px;
                color: #fff;
                margin-left: 68px;
                font-size: 32px!important;
            }
            .city_btn_phes{
                position: absolute!important;
                top: 137px;
                margin-left: -286px!important;
                color: #0a0a0a;
                background: #fff;
                padding: 5px;
                border-radius: 14px;
                text-decoration: none;
            }
            #mob_btn_rawal{
                margin-left: -229px!important;
            }
            .city_text_fas{
                position: absolute!important;
                margin-top: -218px!important;
                color: #fff;
                margin-left: 55px!important;
                font-size: 32px!important;
            }
            .mob_text_isla{
                position: absolute!important;
                margin-top: -174px!important;
                color: #fff;
                margin-left: 55px!important;
                font-size: 32px!important;
            }
            .city_btn_fas{
                position: absolute!important;
                top: 174px!important;
                margin-left: -291px!important;
                color: #0a0a0a;
                background: #fff;
                padding: 5px;
                border-radius: 14px;
                text-decoration: none;
            }
            .mob_btn_isla{
                position: absolute!important;
                top: 129px!important;
                margin-left: -284px!important;
                color: #0a0a0a;
                background: #fff;
                padding: 5px;
                border-radius: 14px;
                text-decoration: none;
            }

            .city_text{
                position: absolute!important;
                margin-top: -349px;
                color: #fff;
                margin-left: 55px;
                font-size: 37px!important;
            }
            .kara_text{
                position: absolute!important;
                margin-top: -349px;
                color: #fff;
                margin-left: 55px!important;
                font-size: 37px!important;
            }
            .city_btn{
                position: absolute!important;
                top: 316px;
                margin-left: -288px!important;
                color: #0a0a0a;
                background: #fff;
                padding: 5px;
                border-radius: 14px;
                text-decoration: none;
            }
            .mob_btn_kara{
                position: absolute!important;
                top: 316px;
                margin-left: 74px!important;
                color: #0a0a0a;
                background: #fff;
                padding: 5px;
                border-radius: 14px;
                text-decoration: none;
            }

        }


        @media only screen and (max-width: 600px) {
            .image-frame {
                width: 100% !important;
                height: 100% !important;
            }
            .gm-style-iw-c{
            max-width: 240px !important;
        }
            .mob-card{
                width: unset!important;
            }
            .mob-search{
                width: unset!important;
            }



        }


    </style>
@endsection
@section("main-content")


    <!--google map start section -->
    <div class="google-map-area">
        <div id="gmap" class="gmap-area"></div>
    </div>
    <!--google map end section -->
    <!-- Find Your Home Start Here -->
    <div class="find-your-home-area home-three-map">
        <div class="container">
            <div class="row">
                <div style="padding-bottom: 10px" class="info-form">
                    <div class="about-feature">
                        <h2 style="font-size: 15px!important;">Find your dream home in Pakistan</h2>
                        <h2 style="font-size: 15px!important;">NPLS Realtor Earn more 2X - <a href="{{route('agent.contact')}}" style="color: #fff">Join Us</a> </h2>
                    </div>

                    <form method="get" action="{{route('home.search')}}">
                        @csrf
                        <input type="hidden" id="bath" name="bath">
                        <input type="hidden" id="rooms" name="rooms">
                        <input type="hidden" id="areas" name="area">
                        <input type="hidden" id="prices" name="price_range">

                        <div class="form-fields">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-field">
                                    <p></p>
                                    <div class="input-box">

                                        <div class="input-group">
                                            <input type="search" style="" id="search"
                                                   name="search_query"
                                                   class="form-control typeahead " autocomplete="off"
                                                   placeholder="City, Town or NPLS Number..." aria-label="..."
                                                   id="searchQuery">
                                            <span class="input-group-btn">
                                                <span id="search_Button" class="btn btn-lg form-control"
                                                      style="background: #46BFE2">
                                                    <i class="fa fa-search"
                                                       style="font-size: 24px;color: white;margin-top: 6px;"></i>
                                                </span>
                                                <input type="submit" hidden name="" id="form_submit">
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <div class="single-field">
                                    <p></p>
                                    <div class="input-box">
                                        <select name="category" id="category"
                                                style="text-transform: uppercase">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{$category->name}}" {{ $category->name === 'commercial'?'selected':'' }}>{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="single-field">
                                    <p></p>
                                    <div class="input-box">
                                        <a class="button form-control" style="width: 60px !important;    float: right;"
                                           data-toggle="modal" data-target="#myModal">
                                            <img style="" src="{{asset("images/filter.svg")}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                    <!-- Filter Modal Start Here -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <a class="btn btn-danger " style="float: right;    transform: translate(10px, -16px);"
                                   data-dismiss="modal">&times;</a>
                                <div class="modal-body">
                                    <div class="form-fields">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        </div>

                                        <div id="beds" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Number of Rooms</p>
                                                <div class="input-box">
                                                    <select name="beds" id="no_of_rooms">
                                                        <option value="0" selected="selected" disabled>Select Number of
                                                            Rooms
                                                        </option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="baths" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Number of Baths</p>
                                                <div class="input-box">
                                                    <select name="baths" id="bath_rooms">
                                                        <option value="0" selected="selected" disabled>Number of Baths
                                                        </option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="square_feats" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Square Feats</p>
                                                <div class="input-box">
                                                    <select name="rooms" id="area">
                                                        <option value="0" selected="selected" disabled>Select Square
                                                            Feats
                                                        </option>
                                                        <option value="1">0-5,000 sqft</option>
                                                        <option value="2">5,001 - 10,000 sqft</option>
                                                        <option value="3">10,001 - 15,000 sqft</option>
                                                        <option value="4">15,001 - 20,000 sqft</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Price Range</p>
                                                <div class="input-box">
                                                    <select id="amount">
                                                        <option selected="selected" disabled>Select Price Range</option>
                                                        <option value="0-5000000">0 - 5 Million</option>
                                                        <option value="5000000-10000000">5 Million - 1 Crore</option>
                                                        <option value="10000000-50000000">1 Crore - 5 Crore</option>
                                                        <option value="50000000-100000000">5 Crore - 10 Crore</option>
                                                        <option value="100000000-500000000">10 Crore - 50 Crore</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button btn btn-danger btn-lg" type="button"
                                       style="margin-top: 1rem;float: right;font-size: 17px" data-toggle="modal"
                                       data-target="#myModal">Ok </a>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Filter Modal End Here -->

                </div>
                {{--                <div class="shadow text-center" >--}}
                {{--                    <img src="{{asset("npls/images/shadow.png")}}" alt="shadow">--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Find Your Home End Here -->
    <!-- Feature Property Area Start Here -->
    <div class="feature-property-area" style="padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Feature <span>Property</span></h2>
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum, veniam, eius,--}}
{{--                            incidunt laudantium illo inventore deserunt explicabo consequuntur vero illum aut--}}
{{--                            perspiciatis nesciunt sit, rem! Temporibus laborum, atque eveniet!</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="property-menu">
                        <ul>
                            <li data-filter="*" class="active">All</li>
                            @foreach($categories as $category)
                                <li data-filter=".{{ strtolower(str_ireplace(" ","-",$category->name)) }}">{{ ucwords($category->name) }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid">
                    {{--                    {{dd($properties)}}--}}
                    @foreach($featuredListings as $property)
                        <div
                            class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item @foreach($property->categories->pluck("name") as $g_cat){{ strtolower(str_replace(" ","-",$g_cat)) }} @endforeach">
                            <div class="single-property">
                                <div class="images">

                                    @if($property->thumbnail)
                                        <img src="{{ asset( $property->thumbnail )}}" style="height: 266px!important;"
                                             alt="">
                                    @else
                                        <img src="{{ asset('images/default.jpg')}}" style="height: 266px!important;"
                                             alt="">
                                    @endif

                                    <div class="icons-area">
                                        <ul>
                                            <li><a class="fancybox"
                                                   href="{{ asset( $property->thumbnail )}}"
                                                   data-fancybox-group="gallery" title="{{ $property->thumbnail }}"><i
                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <span>{{ ucwords($property->purpose) }}</span>
                                </div>
                                <div class="property-details">
                                    <h3>
                                        <a href="{{ route("listing.details", ['slug' => $property->slug]) }}">{{ ucwords($property->name) }}
                                            <img src="{{ asset("npls/images/property/star.png") }}" alt=""></a></h3>
                                    <p>PKR.{{ @number_format($property->price) }}</p>
                                    <span style=""><i class="fa fa-map-marker"></i> {{ $property->address }}</span>
                                </div>
                            </div>
                        </div>
                @endforeach

                <!--
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item apartment sale residential">
                        <div class="single-property">
                            <div class="images">
                                <img src="{{ asset("npls/images/property/2.jpg") }}" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="{{ asset("npls/images/property/2.jpg") }}" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <span>Rent</span>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Masons Villas <img src="{{ asset("npls/images/property/star.png") }}" alt=""></a></h3>
                                <p>$550,000</p>
                                <span><i class="fa fa-map-marker"></i> Australia / South Vellly</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item house office">
                        <div class="single-property">
                            <div class="images">
                                <img src="{{ asset("npls/images/property/3.jpg") }}" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="{{ asset("npls/images/property/3.jpg") }}" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Park Avenue <img src="{{ asset("npls/images/property/star.png") }}" alt=""></a></h3>
                                <p>$950,000</p>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item residential apartment">
                        <div class="single-property">
                            <div class="images">
                                <img src="{{ asset("npls/images/property/4.jpg") }}" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="{{ asset("npls/images/property/4.jpg") }}" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <span>Sale</span>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Meridian Villas <img src="{{ asset("npls/images/property/star.png") }}" alt=""></a></h3>
                                <p>$990,000</p>
                                <span><i class="fa fa-map-marker"></i> Unite State / South Dokota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item rent house">
                        <div class="single-property">
                            <div class="images">
                                <img src="{{ asset("npls/images/property/5.jpg") }}" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="{{ asset("npls/images/property/5.jpg") }}" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Masons Villas <img src="{{ asset("npls/images/property/star.png") }}" alt=""></a></h3>
                                <p>$550,000</p>
                                <span><i class="fa fa-map-marker"></i> Australia / South Vellly</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item sale residential">
                        <div class="single-property">
                            <div class="images">
                                <img src="{{ asset("npls/images/property/6.jpg") }}" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="{{ asset("npls/images/property/6.jpg") }}" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <span>Rent</span>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Park Avenue <img src="../../../npls/images/property/star.png" alt=""></a></h3>
                                <p>$950,000</p>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item office sale house">
                        <div class="single-property">
                            <div class="images">
                                <img src="../../../npls/images/property/7.jpg" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="../../../npls/images/property/7.jpg" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <span>Sale</span>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Meridian Villas <img src="../../../npls/images/property/star.png" alt=""></a></h3>
                                <p>$990,000</p>
                                <span><i class="fa fa-map-marker"></i> Unite State / South Dokota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item rent">
                        <div class="single-property">
                            <div class="images">
                                <img src="../../../npls/images/property/8.jpg" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="../../../npls/images/property/8.jpg" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <span>Rent</span>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Masons Villas <img src="../../../npls/images/property/star.png" alt=""></a></h3>
                                <p>$550,000</p>
                                <span><i class="fa fa-map-marker"></i> Australia / South Vellly</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item apartment rent">
                        <div class="single-property">
                            <div class="images">
                                <img src="../../../npls/images/property/9.jpg" alt="">
                                <div class="icons-area">
                                    <ul>
                                        <li><a class="fancybox" href="../../../npls/images/property/9.jpg" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <span>Rent</span>
                            </div>
                            <div class="property-details">
                                <h3><a href="property-details.html">Park Avenue <img src="../../../npls/images/property/star.png" alt=""></a></h3>
                                <p>$950,000</p>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City</span>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Property Area End Here -->

    @if($hotOfferListings)
        <!-- Real Estate Agent Area Start Here -->
        <div class="real-estate-agent-area" style="padding:0;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                Hot Offers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($hotOfferListings as $listing)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">
                                            @if($listing->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($listing->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}" alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $listing->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $listing->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">
                                            <div style="display: flex;justify-content: space-between;">
                                                <span style="padding: 5px;">{{ ucwords($listing->purpose) }}</span>
                                                @if($listing->hot_offer)
                                                    <span style="background-color: #cc4117;padding: 5px;">Hot Offer</span>
                                                @endif
                                            </div>
                                        </span>

                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$listing->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$listing->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$listing->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Real Estate Agent Area End Here -->
    @endif

    @if($openHouseListings)
        <!-- Real Estate Agent Area Start Here -->
        <div class="real-estate-agent-area" style="padding:0;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                Open House</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($openHouseListings as $listing)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">
                                            @if($listing->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($listing->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}" alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $listing->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $listing->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">
                                            <div style="display: flex;justify-content: space-between;">
                                                <span style="padding: 5px;">{{ ucwords($listing->purpose) }}</span>
                                                @if($listing->open_house)
                                                    <span style="background-color: #cc4117;padding: 5px;">Open House</span>
                                                @endif
                                            </div>
                                        </span>

                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$listing->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$listing->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$listing->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Real Estate Agent Area End Here -->
    @endif

    @if($foreClosureListings)
        <!-- Real Estate Agent Area Start Here -->
        <div class="real-estate-agent-area" style="padding:0;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                Foreclosure</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($foreClosureListings as $listing)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">
                                            @if($listing->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($listing->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}" alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $listing->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $listing->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">
                                            <div style="display: flex;justify-content: space-between;">
                                                <span style="padding: 5px;">{{ ucwords($listing->purpose) }}</span>
                                                @if($listing->foreclosure)
                                                    <span style="background-color: #cc4117;padding: 5px;">Foreclosure</span>
                                                @endif
                                            </div>
                                        </span>

                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$listing->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$listing->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$listing->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Real Estate Agent Area End Here -->
    @endif

    <!-- Amazing Features Start Here -->
    <div class="amazing-features-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature-content">
                        <h2 class="wow  text-center mx-auto " style="color: #000;font-size: 37px!important;"><span style="color: #0a0a0a">Explore Homes on </span>
                            npls.pk</h2>

                        <p class="text-black text-center mx-auto" style="font-size: 21px;">Find a place you love to live in your neighborhood</p>
                        <div class="feature-list wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-4" style="padding: 1px!important;">
                                    <img class="city_image" id="city_image" style="max-width: 83%;height: 393px;" src="{{asset('npls/images/city_images/Lahore.jpg')}}" alt="">
                                    <h4 class="city_text" id="city_text">Lahore, PB</h4>
                                    <a class="city_btn" id="city_btn" href="{{route('home.search')}}" class="btn ">View Homes</a>
                                </div>
                                <div class="col-md-4"  style="padding: 1px!important;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="city_image_fas" id="city_image_fas" style="max-width: 262px;margin-left: -50px;" src="{{asset('npls/images/city_images/Faisalabad.jpg')}}" alt="">
                                            <h4 class="city_text_fas" id="city_text_fas">Faisalabad, PB</h4>
                                            <a class="city_btn_fas" id="city_btn_fas" href="{{route('home.search')}}" class="btn ">View Homes</a>
                                        </div>
                                        <div class="col-md-6" style="padding: 1px!important;">
                                            <img class="city_image_phes" id="city_image_phes" style="max-width: 262px;" src="{{asset('npls/images/city_images/Peshawar.jpg')}}" alt="">
                                            <h4 class="city_text_phes" id="city_text_phes">Peshawar, KP</h4>
                                            <a class="city_btn_phes" id="city_btn_phes" href="{{route('home.search')}}" class="btn ">View Homes</a>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="city_image_fas" id="mob_isla" style="max-width: 262px;margin-left: -50px;height: 196px;" src="{{asset('npls/images/city_images/islamabad.jpg')}}" alt="">
                                            <h4 class="city_text_fas mob_text_isla" id="city_text_fas mob_text_isla">Islamabad, ICT</h4>
                                            <a class="city_btn_fas mob_btn_isla" id="city_btn_fas mob_btn_isla" href="{{route('home.search')}}" class="btn ">View Homes</a>
                                        </div>
                                        <div class="col-md-6" style="padding: 1px!important;">
                                            <img class="city_image_phes" id="mob_img_rawal" style="max-width: 262px;margin-left: 25px;height: 195px;" src="{{asset('npls/images/city_images/Rawalpindi.jpg')}}" alt="">
                                            <h4 class="city_text_phes mob_text_rawal" id="city_text_phes">Rawalpindi, PB</h4>
                                            <a class="city_btn_phes mob_btn_rawal " id="city_btn_phes mob_btn_rawal" href="{{route('home.search')}}" class="btn ">View Homes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img class="city_image" id="mob_img_kara" style="max-width: 83%;height: 393px;margin-left: 97px;" src="{{asset('npls/images/city_images/Karachi.jpg')}}" alt="">
                                    <h4 class="city_text kara_text" id="city_text" style="margin-left: 114px;">Karachi, SD</h4>
                                    <a class="city_btn mob_btn_kara" id="city_btn" style="margin-left: 136px;" href="{{route('home.search')}}" class="btn ">View Homes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
{{--                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">--}}
{{--                    <div class="feature-image wow fadeInRight" data-wow-delay="0.5s"--}}
{{--                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">--}}
{{--                        <img src="../../../npls/images/feature/woman.png" alt="women image">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Amazing Features End Here -->
    <!-- Recent Property Area Start Here -->
    {{--    <div class="recent-property-area">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--                    <div class="section-title">--}}
    {{--                        <h2>Recent <span>Property</span></h2>--}}
    {{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum, veniam, eius,--}}
    {{--                            incidunt laudantium illo inventore deserunt explicabo consequuntur vero illum aut--}}
    {{--                            perspiciatis nesciunt sit, rem! Temporibus laborum, atque eveniet!</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="property-slider">--}}
    {{--                    <div class="single-property">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="property-images">--}}
    {{--                                    <img src="../../../npls/images/property/12.jpg" alt="">--}}
    {{--                                    <div class="icons-area">--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a class="fancybox" href="../../../npls/images/property/12.jpg"--}}
    {{--                                                   data-fancybox-group="gallery" title="Image Name Here"><i--}}
    {{--                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="content-property">--}}
    {{--                                    <h3><a href="property-details.html">Interior design boundary</a></h3>--}}
    {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor.--}}
    {{--                                        Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet--}}
    {{--                                        consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>--}}
    {{--                                    <span>$65,000/month</span>--}}
    {{--                                    <a href="property-details.html">Read More...</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="content-property">--}}
    {{--                                    <h3><a href="property-details.html">Interior design boundary</a></h3>--}}
    {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor.--}}
    {{--                                        Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet--}}
    {{--                                        consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>--}}
    {{--                                    <span>$45,000/month</span>--}}
    {{--                                    <a href="property-details.html">Read More...</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="property-images">--}}
    {{--                                    <img src="../../../npls/images/property/13.jpg" alt="">--}}
    {{--                                    <div class="icons-area">--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a class="fancybox" href="../../../npls/images/property/13.jpg"--}}
    {{--                                                   data-fancybox-group="gallery" title="Image Name Here"><i--}}
    {{--                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="single-property">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="property-images">--}}
    {{--                                    <a class="fancybox" href="public/npls/images/property/12.jpg"--}}
    {{--                                       data-fancybox-group="gallery" title="Image Name Here"><img--}}
    {{--                                            src="../../../npls/images/property/12.jpg" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="content-property">--}}
    {{--                                    <h3><a href="property-details.html">Interior design boundary</a></h3>--}}
    {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor.--}}
    {{--                                        Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet--}}
    {{--                                        consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>--}}
    {{--                                    <a href="property-details.html">Read More...</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="content-property">--}}
    {{--                                    <h3><a href="property-details.html">Interior design boundary</a></h3>--}}
    {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor.--}}
    {{--                                        Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet--}}
    {{--                                        consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>--}}
    {{--                                    <a href="property-details.html">Read More...</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                <div class="property-images">--}}
    {{--                                    <a class="fancybox" href="../../../npls/images/property/13.jpg"--}}
    {{--                                       data-fancybox-group="gallery" title="Image Name Here"><img--}}
    {{--                                            src="../../../npls/images/property/13.jpg" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Recent Property Area End Here -->
    <!-- Real Estate Agent Area Start Here -->
    @if($upcommingListings->isNotEmpty())
    <div class="real-estate-agent-area" style="padding:20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title" style="margin-bottom:0;">
                        <h2>Upcoming <span>Projects</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agent-slider">
                    @foreach($upcommingListings as $upcommingListing)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-agent">
                                <div class="images">
                                    <div class="image-frame" style="height: 100%;width: 100%;">
                                        @if($upcommingListing->thumbnail)
                                            <img src="{{ asset( $upcommingListing->thumbnail )}}"
                                                 style="height: 266px!important;"
                                                 alt="">
                                        @else
                                            <img src="{{ asset('images/default.jpg')}}" style="height: 266px!important;"
                                                 alt="">
                                        @endif

                                        <div class="icons-area">
                                            <ul>
                                                <li><a class="fancybox"
                                                       href="{{ asset( $upcommingListing->thumbnail )}}"
                                                       data-fancybox-group="gallery"
                                                       title="{{ $upcommingListing->thumbnail }}"><i
                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="images">--}}
                                {{--                                    <div class="image-frame" style="height: 100%;width: 100%;">--}}
                                {{--                                        @if($upcommingListing->thumbnail)--}}
                                {{--                                            <img style="height: 100%;width: 100%;"--}}
                                {{--                                                 src="{{asset($upcommingListing->thumbnail)}}" alt="">--}}
                                {{--                                        @endif--}}
                                {{--                                            <div class="icons-area">--}}
                                {{--                                                <ul>--}}
                                {{--                                                    <li><a class="fancybox"--}}
                                {{--                                                           href="{{ asset( $property->thumbnail )}}"--}}
                                {{--                                                           data-fancybox-group="gallery" title="{{ $property->thumbnail }}"><i--}}
                                {{--                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
                                {{--                                                </ul>--}}
                                {{--                                            </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <a href="#"><i--}}
                                {{--                                            class="fa fa-plus" aria-hidden="true"></i></a>--}}
                                {{--                                </div>--}}
                                <div class="agent-details">
                                    <h3>
                                        <a href="{{ route("listing.details", ['slug' => $upcommingListing->slug]) }}">{{$upcommingListing->name}}</a>
                                    </h3>
                                    <span
                                        style="margin: 0;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"> {{$upcommingListing->address}}</span>
                                    <span>PKR.{{$upcommingListing->price}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- Real Estate Agent Area End Here -->
    @endif
    <div style="height: 30px;display: block"></div>
    @if($lahoreListings)
        <!-- Real Estate Agent Area Start Here -->
        <div class="real-estate-agent-area" style="padding:20px 0;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                New Homes Trending in Lahore</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($lahoreListings as $listing)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">
                                            @if($listing->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($listing->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}" alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $listing->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $listing->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span
                                            style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: 6px 0 6px 10px;text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">{{ ucwords($listing->purpose) }}</span>

                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$listing->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$listing->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$listing->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Real Estate Agent Area End Here -->
    @endif

    @if($karachiListings)
        <!-- Real Estate Agent Area Start Here -->
        <div class="real-estate-agent-area" style="padding:20px 0;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                New Homes Trending in Karachi</h2></div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($karachiListings as $listing)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);;">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">
                                            @if($listing->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($listing->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}"
                                                     alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $listing->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $listing->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span
                                            style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: 6px 0 6px 10px;text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">{{ ucwords($listing->purpose) }}</span>
                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$listing->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$listing->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$listing->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Real Estate Agent Area End Here -->
    @endif

    @if($islamabadListings)
        <!-- Real Estate Agent Area Start Here -->
        <div class="real-estate-agent-area" style="padding:20px 0;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                New Homes Trending in Islamabad</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($islamabadListings as $listing)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);;">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">
                                            @if($listing->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($listing->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}" alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $listing->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $listing->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span
                                            style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: 6px 0 6px 10px;text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">{{ ucwords($listing->purpose) }}</span>
                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$listing->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$listing->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$listing->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Real Estate Agent Area End Here -->
    @endif

    <section class="innovation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h1><b>Innovation in Real-Estate Solution</b></h1>
                </div>
            </div>
                <div class="row" >
                    <div class="col-md-6 col-lg-6 col-sm-12 text-center " >
                        <div class="card mob-card" style="margin-bottom: 6%;width: 400px">
                            <img src="{{asset('npls/images/innovation/doller.png')}}" style="width: 40%; height:100px; margin-bottom:5%;" alt="innovation">

                            <h5 style="line-height: 30px; margin-bottom:2%;">
                                <li style="list-style: none;">Transparency, Innovation, Trust </li>

                            </h5>
                                <p>One Stop solution Professional Realtor+ Real Estate Lawyer Sell Fast for high, Buyer Agent earn more</p>
                            <div class="card-footer">
                            <a href="" class="btn btn-lg btn-info" >Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 text-center ">
                        <div class="card mob-card" style="margin-bottom: 6%;width: 400px">
                            <img src="{{asset('npls/images/innovation/mortgage.png')}}" style="width: 40%; height:100px; margin-bottom:5%;" alt="innovation">
                            <h5 style="line-height: 30px; margin-bottom:2%;">
                                <li style="list-style: none;">Halal Mortgage</li>
                            </h5>
                            <p>Buying a home is long term investment, we, will help you to take first step to your exciting homeownership  Journey with Sharia Compliance Mortgage </p>

                            <div class="card-footer">
                            <a href="{{route('pre_qualified')}}" class="btn btn-lg btn-info" >Get Pre-Qualifiled</a>
                        </div>
                        </div>
                    </div>
{{--                    <div class="col-md-4 col-lg-4 col-sm-12 text-center ">--}}
{{--                        <div class="card" >--}}
{{--                            <div class="card-body" style="height: 140%;">--}}
{{--                            <img src="{{asset('npls/images/innovation/gold.png')}}" style="width: 40%; height:100px; margin-bottom:2%;" alt="innovation">--}}

{{--                            <h5 style="line-height: 30px;margin-bottom:2%;">--}}
{{--                            <li style="list-style: none;">Down Payment with Gold</li>--}}
{{--                        </h5>--}}
{{--                            <p>We don’t mind that you are short of cash. If you have unused and unwanted gold jewelry in your possession, you can use that as down payment! Compensate your down payment with gold!--}}
{{--                            </p>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <a href="" class="btn btn-lg btn-info " >Learn More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
        </div>
    </section>
    <!-- Testimonial Start Here -->
    @if ($agents->isNotEmpty())
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="section-title">
                                <h2>Our <span>Agents</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="client-content">

                                    @foreach ($agents as $agent)
                                        <blockquote>
                                            <p>{!! strip_tags($agent->description)!!}</p>
                                        </blockquote>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="client-img text-center">

                                    @foreach ($agents as $key => $agent)
                                        <a data-slide-index="{{ $key }}" href="">
                                            <div class="over-img">
                                                @if($agent->image)
                                                    <img
                                                        src="{{asset('users/'.$agent->image)}}" alt="">
                                                @else
                                                    <img src="{{ asset('images/default.jpg')}}" alt="">
                                                @endif
                                                {{--                                                <img src="{{ asset('users/'.$agent->image) }}" alt=""/>--}}
                                            </div>
                                            <h4>{{ $agent->name }}</h4>
                                            {{-- <p>CEO, Real Estate</p> --}}
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <!-- Testimonial End Here -->


    <section class="py-5 ">
        <div class="container">
            <div class="row" >
                <div class="col-md-12 text-center" style="margin-bottom: 41px">
                    <h3 style="font-size: 24px;">Find your dream home in Pakistan </h3>

                    <form method="get" action="{{route('home.search')}}">
                        @csrf
                        <input type="hidden" id="bath" name="bath">
                        <input type="hidden" id="rooms" name="rooms">
                        <input type="hidden" id="areas" name="area">
                        <input type="hidden" id="prices" name="price_range">

                        <div class="form-fields">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px" >
                                <div class="single-field">
                                    <p></p>
                                    <div class="input-box mob-search" style="width: 500px;margin: auto;">

                                        <div class="input-group">
                                            <input type="search" style="" id="search"
                                                   name="search_query"
                                                   class="form-control typeahead " autocomplete="off"
                                                   placeholder="City, Town or NPLS Number..." aria-label="..."
                                                   id="searchQuery">
                                            <span class="input-group-btn">
                                                <span id="search_Button" class="btn btn-lg form-control"
                                                      style="background: #46BFE2">
                                                    <i class="fa fa-search"
                                                       style="font-size: 24px;color: white;margin-top: 6px;"></i>
                                                </span>
                                                <input type="submit" hidden name="" id="form_submit">
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection
@section("script")
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts"></script>
    <script src="{{ asset("npls/js/gmaps.js") }}"></script>
    <script src="https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script>
        var defaultLat = parseFloat(localStorage.getItem('defaultLat'));
        var defaultLong = parseFloat(localStorage.getItem('defaultLong'));

        //Feature property
        $(document).ready(function () {
            $('#commercial').on('click', function () {
                $('.commercial').show();
                $('.residential').hide();
                $('.agriculture').hide();

            });
            $('#residential').on('click', function () {
                $('.residential').show();
                $('.commercial').hide();
                $('.agriculture').hide();
            });
            $('#agriculture').on('click', function () {
                $('.commercial').hide();
                $('.residential').hide();
                $('.agriculture').show();
            });
            //End Feature property
            let userLat = null;
            let userLong = null;

            // if (!defaultLat || !defaultLat) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, error);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
            // }

            function error(err) {
                console.warn(`ERROR(${err.code}): ${err.message}`);
            }

            function success(pos) {
                userLat = pos.coords.latitude
                userLong = pos.coords.longitude

                // console.log(Math.round(parseFloat(userLat)*100)/100, Math.round(parseFloat(defaultLat)*100)/100)
                // console.log(Math.round(parseFloat(userLong)*100)/100, Math.round(parseFloat(defaultLong)*100)/100)

                if(defaultLat != userLat || defaultLong != userLong) {
                    localStorage.setItem('defaultLat', userLat);
                    localStorage.setItem('defaultLong', userLong);
                    defaultLat = userLat;
                    defaultLong = userLong;
                    initMap();
                }
            }

        });

        <?php
        $listings = json_encode(\App\Models\Listing::whereStatus('Active')->with('admin:id,name')->get()->toArray());
        ?>

        var listings = JSON.parse('{!! $listings !!}');

        function schoolControl(controlDiv, map) {
            const controlUI = document.createElement("div");
            controlUI.style.backgroundColor = "#fff";
            controlUI.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
            controlUI.style.cursor = "pointer";
            controlUI.style.marginTop = "8px";
            controlUI.style.marginBottom = "22px";
            controlUI.style.textAlign = "center";
            controlUI.title = "Display Schools";
            controlDiv.appendChild(controlUI);
            const controlText = document.createElement("div");
            controlText.style.color = "rgb(25,25,25)";
            controlText.style.fontFamily = "Roboto,Arial,sans-serif";
            controlText.style.fontSize = "16px";
            controlText.style.borderRadius = "3px";
            controlText.style.lineHeight = "38px";
            controlText.style.paddingLeft = "5px";
            controlText.style.paddingRight = "5px";
            controlText.innerHTML = "<i class='fa fa-graduation-cap'></i> Schools";
            controlText.setAttribute('id', 'map-schools-btn');
            controlText.classList.add('inactive');
            controlUI.appendChild(controlText);
            controlUI.addEventListener("click", (e) => {

                var showSchools = null;

                if ($('#map-schools-btn').hasClass('inactive')) {
                    showSchools = {
                        styles: [
                            {
                                featureType: "poi",
                                stylers: [
                                    {
                                        visibility: "off"
                                    }
                                ]
                            },
                            {
                                featureType: "poi.school",
                                // elementType: "all",
                                icon: 'http://maps.google.com/mapfiles/kml/pal4/icon39.png',
                                stylers: [
                                    {
                                        visibility: "simplified",
                                    }
                                ]
                            }]
                    };
                    $('#map-schools-btn').removeClass('inactive');
                    $('#map-schools-btn').addClass('active');
                    $('#map-schools-btn').css({'background-color': '#b1454b', 'color': '#fff'});
                } else {
                    showSchools = {
                        styles: [
                            {
                                featureType: "poi",
                                stylers: [
                                    {
                                        visibility: "off"
                                    }
                                ]
                            }
                        ]
                    };
                    $('#map-schools-btn').removeClass('active');
                    $('#map-schools-btn').addClass('inactive');
                    $('#map-schools-btn').css({'background-color': '#fff', 'color': 'rgb(25,25,25)'});
                }
                map.setOptions(showSchools);
            });
        }

        function initMap() {

            const map = new google.maps.Map(document.getElementById("gmap"), {
                zoom: (defaultLat && defaultLong) ? 10 : 5,
                gestureHandling: "greedy",
                styles: [
                    {
                        featureType: "poi",
                        stylers: [
                            {visibility: "off"}
                        ]
                    }
                ],
                center: {lat: defaultLat ? defaultLat : 33.738045, lng: defaultLong ? defaultLong : 73.084488},
            });

            const centerControlDiv = document.createElement("div");
            schoolControl(centerControlDiv, map);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(centerControlDiv);

            const markers = listings.map((location, i) => {
                var obj = {lat: location.latitude, lng: location.longitude};

                // var iconURL = "/npls/images/green-map-marker.jpg";

                // if(location.registry === 'yes') {
                //     iconURL = "/npls/images/green-map-marker.png";
                // }

                var marker = new google.maps.Marker({
                    position: obj,
                    // label: location.name[0],
                    icon: {
                        url: "/npls/images/green-map-marker.png"
                    }
                });

                var infowindow = new google.maps.InfoWindow();

                google.maps.event.addListener(marker, 'click', function (e) {
                    map.setCenter(marker.getPosition());

                    var url = '{{ url("/listing") }}' + '/' + location.slug;
                    var iconPath = null;

                    if (location.registry === 'yes') {
                        iconPath = '/npls/images/registry_check.png';
                    } else if (location.registry === 'no') {
                        iconPath = '/npls/images/registry_no.jpg';
                    } else {
                        iconPath = '/npls/images/registry_under_process.jpg';
                    }

                    let countryCode = [
                        'cny',
                        'usd',
                        'cad',
                        'try',
                        'aed',
                        'gbp',
                        'aud',
                        'eur',
                    ];

                    let exchangeResults = [];
                    $.each(countryCode, function (key, value) {
                        let response = (fetch('https://kurrency-konvert.herokuapp.com/api/v1/convert?from=pkr&to=' + value + '&amount=' + location.price, {
                            headers: {
                                'x-api-key': '5f281ab0912d4314a343ff3a'
                            }
                        }).then(response => response.json()));

                        exchangeResults.push(response);
                    })

                    Promise.allSettled(exchangeResults)
                        .then((result) => {
                            $.each(countryCode, function (key, value) {
                                $('#listing_' + value + '_' + location.id).text(result.find(x => x.value.to === value.toUpperCase()).value.exchange_rate);
                            })
                        })

                    var favListingCookies = getCookie('favourite_listings');
                    var heartImage = 'blank-heart.png';

                    if (!(favListingCookies == undefined || favListingCookies == '')) {
                        favListingCookies = JSON.stringify(favListingCookies);
                        if (!favListingCookies.includes(location.id)) {
                            heartImage = 'blank-heart.png';
                        } else {
                            heartImage = 'heart.png';
                        }
                    }

                    let exchangeRateDivs = '';

                    $.each(countryCode, function (key, value) {
                        exchangeRateDivs += '<div class="col-md-6">' +
                            '<label style="color:#000;">' + value.toUpperCase() + ': <span style="color:#505050;" id="listing_' + value + '_' + location.id + '"></span></label>' +
                            '</div>';
                    })
                    infowindow.setContent(
                        '<div class="" style="display:flex;justify-content:space-between;margin-bottom: 5px">' +
                        '<div>' +
                        '<image style="width:30px;" src=' + iconPath + ' />' +
                        '<label style="margin-left: 5px;">Registry: ' + location.registry + '</label>' +
                        '</div>' +
                        '<div class="favourite-heart" data-id="' + location.id + '">' +
                        '<image width="40" src="/npls/images/' + heartImage + '" />' +
                        '</div>' +
                        '</div>' +
                        '<a href=' + url + '>' +
                        '<div class="row" style="width: 30rem;">' +
                        '<div class="col-md-4 col-sm-4 col-lg-4" style="overflow:hidden;padding:0;">' +
                        '<div style="width:220px;height:100px;margin:0;padding:0;">' +
                        '<image style="width:100%;height: 100%;" src=' + '/' + location.thumbnail + ' />' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-8 col-sm-8 col-lg-8" style="width:55%; margin-top:3%;">' +
                        '<h5 style="color:#000; margin-bottom: 5px;text-transform: capitalize;">Rs. ' + numToWords(location.price) + '</h5>' +
                        '<span style="color:#000; margin: 0;line-height: normal;font-size: 12px;">' + location.address + '</span>' +
                        '<div style="display:flex;justify-content:space-around;margin-top:10px;">' +
                        '<div>' +
                        '<span style="color:#000; font-size: 12px;">' + location.no_of_rooms + '</span>' +
                        '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/bed.png"/>' +
                        '</div>' +
                        '<div>' +
                        '<span style="color:#000; font-size: 12px;">' + location.no_of_baths + '</span>' +
                        '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/bathtub.png"/>' +
                        '</div>' +
                        '<div>' +
                        '<span style="color:#000; font-size: 12px;">' + location.no_of_garages + '</span>' +
                        '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/garage.png"/>' +
                        '</div>' +
                        '<div class="area_conversion">' +
                        '<span style="color:#000; font-size: 12px;">' + location.square_feats +'('+location.area_type +')'+ '</span>' +
                        '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/kanal.png"/>' +
                        '</div>' +
                        '</div>' +
                        '<div style="margin-top:10px;">' +
                        '<small style="color: #505050;"><label>By: </label> ' + location.admin.name + '</small>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-12">' +
                        '<hr>' +
                        '<div class="row justify-content-between" style="">' +
                        exchangeRateDivs +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</a>'
                    );
                    // alert('open');
                    infowindow.open(map, marker);
                });
                // infowindow.close(map, marker);
                return marker;
            });

            new MarkerClusterer(map, markers, {
                imagePath:
                    "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
            });
            return infowindow.close();
        }

        google.maps.event.addDomListener(window, 'load', initMap);

        //searching code
        var path = "{{ route('search.suggestion') }}";
        $('input.typeahead').typeahead({
            source: function (query, process) {

                return $.get(path, {query: query}, function (data) {
                    return process(data);
                });
            }
        });

        //category form change
        $('#category').change(function () {
            $category = $(this).val();
            if ($category == 'residential') {
                $('#square_feats').hide();
                $('#beds').show();
                $('#baths').show();
            } else if ($category == 'commercial') {
                $('#square_feats').show();
                $('#beds').show();
                $('#baths').show();
            } else if ($category == 'agriculture') {
                $('#square_feats').show();
                $('#beds').hide();
                $('#baths').hide();
            }
        })

        //submit data

        $("#search_Button").click(function (e) {
            $('#bath').val($('#bath_rooms').val());
            $('#rooms').val($('#no_of_rooms').val());
            $('#areas').val($('#area').val());
            $('#prices').val($('#amount').val());

            $('#form_submit').click();
        });


    </script>
@endsection
