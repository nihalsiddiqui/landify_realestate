@extends("npls.layouts.master")
@section("page-title", ucwords($listing->name))
@section('style')
    <link rel="stylesheet" href="{{ asset("npls/css/jquery.webui-popover.min.css") }}">
@endsection
@section("main-content")

    <style>
        body {
            background-color: #F2F2F2;
        }

        .fa.fa-chevron-circle-right {
            color: red !important;
        }

        .property-details-area {
            padding: 0 0 !important;
        }

        .a2a_full_footer {
            display: none !important;
        }

        .widget {
            background-color: #fff;
            border: 1px solid #b9b9b9;
            margin: 0 0 1.5rem;
            padding: 20px 10px;
        }

        .widget {
            transition: 0.2s ease-in-out;
        }

        .widget:hover {
            -webkit-box-shadow: 0px 0px 10px 0px rgba(163, 163, 163, 1);
            -moz-box-shadow: 0px 0px 10px 0px rgba(163, 163, 163, 1);
            box-shadow: 0px 0px 10px 0px rgba(163, 163, 163, 1);
            cursor: pointer;
        }

        .widget a:hover {
            text-decoration: underline;
        }

        .owl-wrapper {
            padding-bottom: 10px !important;
        }

        .area_p {
            margin: 0;
        }

        .webui-popover .webui-popover-content {
            padding: 8px;
        }

        .webui-popover-title {
            background-color: #46BFE2;
            color: #fff;
        }

        #city {
            display: inherit !important;
            border: 2px solid #46BFE2;
        }

        @media only screen and (max-width: 400px) {
            .form-bottom {
                margin-bottom: 40px !important;
            }

            #city {
                display: inherit !important;
                border: 2px solid #46BFE2;
            }

            .footer_mob {
                margin-top: 0px !important;
            }
            .mob_captcha{
                margin: -15px!important;
            }
        }

    </style>

    {{--    <div class="page-header-area"--}}
    {{--         style="background: rgba(0, 0, 0, 0) url({{ asset("npls/images/bg.jpg") }})!important;">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">--}}
    {{--                    <div class="header-page">--}}
    {{--                        <h1>{{ ucwords($listing->name) }}</h1>--}}
    {{--                        <ul>--}}
    {{--                            <li><a href="{{ route("frontend.home") }}">Home</a></li>--}}
    {{--                            <li>{{ ucwords(str_replace("."," ",Route::currentRouteName())) }}</li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="propery-area" style="padding: 0 !important;">
        <div class="container-fluid"
             style="margin: 0 25px!important;padding-left: 0px!important;padding-right: 0px!important;">

            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="property-details-area">
                        <div class="big-photo">
                            @if($listing->thumbnail)
                                <div class="item"><img style="height: 400px!important;"
                                                       src="{{ asset( $listing->thumbnail )}}" alt=""></div>
                            @endif
                            @if(!empty(json_decode($listing->images)))
                                @foreach(json_decode($listing->images) as $image)
                                    <div class="item"><img style="height: 400px!important;" src="{{ asset( $image )}}"
                                                           alt=""></div>
                                @endforeach
                            @endif
                        </div>
                        <div class="pagin-slider">
                            @if($listing->thumbnail)
                                <div class="item"><img style="height: 107px!important;"
                                                       src="{{ asset( $listing->thumbnail )}}" alt=""></div>
                            @endif
                            @if(!empty(json_decode($listing->images)))
                                @foreach(json_decode($listing->images) as $image)
                                    <div class="item"><img style="height: 107px!important;" src="{{ asset( $image )}}"
                                                           alt=""></div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="sidebar-area">
                        <div class="widget" style="margin-top: 1.5rem;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3> {{ $listing->name }}</h3>
                                            <address style="font-size: 16px;">{{ $listing->address }}</address>
                                            <label for="">NPLS Number: #{{ $listing->npls_number }}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>PKR. {{ @number_format($listing->price) }}</h3>

                                            <label for="" class="text-center"
                                                   style="background: lightgrey;color: #00a65a;width: 74px;border-radius: 10px;"><b
                                                    class="text-capitalize"
                                                    style="font-size:1.1rem;">{{ $listing->purpose}}</b></label><br>
                                            <label for=""><b style="font-size: 1.1rem;">Listed
                                                    &nbsp;&nbsp;{{ $listing->created_at->diffInDays() }} Days
                                                    ago</b></label>
                                            <div>
                                                <a href="{{route('pre_qualified')}}"
                                                   class="btn btn-default btn-success "
                                                   style="text-decoration: none;"><i class="fa fa-home"></i>
                                                    Halal Morgage</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="display: flex;flex-direction: column;">

                                                @php
                                                    $heartImage = 'blank-heart.png';
                                                    $favListings = null;

                                                    if(isset($_COOKIE['favourite_listings'])) {
                                                        $favListings = json_decode($_COOKIE['favourite_listings']);
                                                    }
                                                @endphp

                                                @php
                                                    if ($favListings) {
                                                        if(!(in_array($listing->id, $favListings))) {
                                                            $heartImage = 'blank-heart.png';
                                                        } else {
                                                            $heartImage = 'heart.png';
                                                        }
                                                    }
                                                @endphp

                                                <div class="favourite-heart" data-id="{{ $listing->id }}"
                                                     style="text-align: right;margin-right:10px;margin-bottom: 5px;">
                                                    <image width="40" src="/npls/images/{{ $heartImage }}"/>
                                                </div>
                                                <div style="display: flex;justify-content: space-around;">
                                                    <div style="display: flex;flex-direction: column;">
                                                        <div style="display: flex;justify-content: space-between;">
                                                            <label
                                                                style="font-size: 1.2rem">{{$listing->no_of_beds}}</label>
                                                            <img style="margin-left:1px;width: 30px;height: 30px;"
                                                                 src="/npls/images/bed.png">
                                                        </div>
                                                        <label for="">Bedrooms</label>
                                                    </div>
                                                    <div style="display: flex;flex-direction: column;">
                                                        <div style="display: flex;justify-content: space-between;">
                                                            <label
                                                                style="font-size: 1.2rem">{{$listing->no_of_baths}}</label>
                                                            <img style="margin-left:1px;width: 30px;height: 30px;"
                                                                 src="/npls/images/bathtub.png">
                                                        </div>
                                                        <label for="">Bathtubs</label>
                                                    </div>
                                                    <div style="display: flex;flex-direction: column;">
                                                        <div style="display: flex;justify-content: space-between;">
                                                            <label
                                                                style="font-size: 1.2rem">{{$listing->square_feats}}</label>
                                                            <img style="margin-left:1px;width: 30px;height: 30px;"
                                                                 src="/npls/images/kanal.png">
                                                        </div>
                                                        <label for="">Kanal</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-area">
                        <div class="widget" style="margin-top: 1.5rem;">
                            <h2 class="widget-title">Property Details
                                @if($listing->featured)
                                    <span class="badge" style="background: #46BFE2;">Featured</span>
                                @endif
                                @if($listing->hot_offer)
                                    <span class="badge" style="background: #46BFE2;">Hot Offer</span>
                                @endif
                                @if($listing->open_house)
                                    <span class="badge" style="background: #46BFE2;">Open House</span>
                                @endif
                                @if($listing->foreclosure)
                                    <span class="badge" style="background: #46BFE2;">Fore Closure</span>
                                @endif
                            </h2>

                            <div class="row" style="font-size: 1.1rem;">
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Rooms</label></div>
                                        <div style="width: 50%">{{ $listing->no_of_rooms }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Living Rooms</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->no_of_living_rooms }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Dinning Rooms</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->no_of_dining_rooms }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Laundry Rooms</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->no_of_laundry_rooms }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Floor</label></div>
                                        <div style="width: 50%">{{ $listing->no_of_floors }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Beds</label></div>
                                        <div style="width: 50%">{{ $listing->no_of_beds }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">baths</label></div>
                                        <div style="width: 50%">{{ $listing->no_of_baths }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Kitchens</label></div>
                                        <div style="width: 50%">{{ $listing->no_of_kitchens }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Garages</label></div>
                                        <div style="width: 50%">{{ $listing->no_of_garages }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">

                                        <div style="width: 50%">
                                            <label style="color: #505050b0;">Area ({{ ucwords($listing->area_type) }}
                                                )</label>
                                        </div>
                                        <div style="width: 50%;background-color: aliceblue;"
                                             class="area_conversion"><u><b>{{ $listing->square_feats }}</b></u></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Purpose</label></div>
                                        <div style="width: 50%">{{ $listing->purpose }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Built Style</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->build_style }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Construction</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->construction_status }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Built Year</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->built_year }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Registry</label></div>
                                        <div style="width: 50%">{{ $listing->registry }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Mutation</label></div>
                                        <div style="width: 50%">{{ $listing->mutation }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">City Approval</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->city_approval }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">NPLS Number #</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->npls_number }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Listed on</label></div>
                                        <div style="width: 50%">{{ $listing->created_at }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 50%"><label style="color: #505050b0;">Updated On</label>
                                        </div>
                                        <div style="width: 50%">{{ $listing->updated_at }}</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label style="color: #505050b0;">Description</label>
                                    <p>{{ $listing->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-area">
                        <div class="widget" style="margin-top: 1.5rem;">
                            <h2>Feature's</h2>
                            <div class="row" style="font-size: 1.1rem;">
                                @foreach($listing->features as $feature)
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Name</label></div>
                                            <div style="width: 50%;">{{ $feature->name }} ({{ $feature->pivot->count }})
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-area">
                        <div class="widget" style="margin-top: 1.5rem;">
                            <h2>Facilities</h2>
                            <div class="row" style="font-size: 1.1rem;">
                                @foreach($listing->facility as $facility)
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Name</label></div>
                                            <div style="width: 50%;">{{ $facility->pivot->name }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Type</label></div>
                                            <div style="width: 50%;">{{ $facility->type }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Distance</label>
                                            </div>
                                            <div style="width: 50%;">{{ $facility->pivot->distance }} km.</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Min Grade</label>
                                            </div>
                                            <div style="width: 50%;">{{ $facility->pivot->min_grade }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Max Grade</label>
                                            </div>
                                            <div style="width: 50%;">{{ $facility->pivot->max_grade }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Ratings</label>
                                            </div>
                                            <div style="width: 50%;">
                                                @php
                                                    $star = '';
                                                    $temp = $facility->pivot->rating;

                                                    $i = 0;
                                                    while($i < $temp) {
                                                        $star .= '⭐';
                                                        $i++;
                                                    }
                                                    echo $star;
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                    @if(!$loop->last)
                                        <div class="col-12">
                                            <hr style="border: 1px solid #f2f2f2 !important;width: 98%">
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="sidebar-area">
                        <div class="widget" style="margin-top: 1.5rem;">
                            <h2>Feature's</h2>
                            <div class="row" style="font-size: 1.1rem;">
                                @foreach($listing->appliances as $appliance)
                                    <div class="col-md-6">
                                        <div style="display: flex">
                                            <div style="width: 50%;"><label style="color: #505050b0;">Name</label></div>
                                            <div style="width: 50%;">{{ $appliance->name }}
                                                ({{ $appliance->pivot->count }})
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-area">
                        <div class="widget" style="margin-top: 1.5rem;">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <ul class="nav nav-tabs">

                                        @if($url_string = $listing->video_link)
                                            {{--                                            $url= str_replace('watch?v=','embed/', $url_string);--}}

                                            <li class="active" id="highlights"><a style="font-size: 17px"
                                                                                  href="#video_link"><i
                                                        class="fa fa-star"
                                                        aria-hidden="true"></i>Highlights</a>
                                            </li>
                                        @endif
                                        <li class="" id="neighbourhood"><a style="font-size: 17px" href="#map-location"><i
                                                    class="fa fa-home"
                                                    aria-hidden="true"></i>Neighbourhood</a></li>

                                        <li class="" id="calculator"><a style="font-size: 17px" href="#mortgage"><i
                                                    class="fa fa-calculator"
                                                    aria-hidden="true"></i>Calculators</a></li>
                                    </ul>
                                </div>
                                <div id="video_link" class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 10px;">
                                    @php
                                        $url_string = $listing->video_link;
                                        $url= str_replace('watch?v=','embed/', $url_string);
                                    @endphp
                                    <iframe style="width: 100%;" height="500" src="{{$url}}" frameborder="0"
                                            allow="autoplay; encrypted-media" allowfullscreen>
                                    </iframe>
                                    <div>
                                        <label style="color: #505050b0;">Video Description</label>
                                        <p>{{$listing->video_description}}</p>

                                    </div>
                                </div>
                                <div hidden id="map-location" class="col-md-12">
                                    <div class="col-md-4 scroll"
                                         style="max-height: 442px;overflow-y: scroll;overflow-x: hidden;margin: 0;padding:0;">
                                        <label style="color: #505050b0;">Facilities</label>
                                        <ul style="list-style-type: none;padding: 0;margin: 0;">
                                            @foreach($listingFacilities as $facility)
                                                {{--                                                    @dump($facility)--}}
                                                <li style="border-bottom: 1px solid #ddd; background-color: #f6f6f6;padding: 12px;">
                                                    <div style="display: flex;justify-content: space-between">
                                                        <label style="font-size: 17px;font-weight: bold"
                                                               for="">{{$facility->type}}</label>
                                                        <span
                                                            style="border: 1px solid green;padding: 4px;border-radius: 25px;background: green;color: white;">{{$facility->count}}</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-8">
                                        <div id="facilitiesMap" style="height: 350px;"></div>
                                    </div>
                                    {{--                                    <div class="col-md-8" id="map" style="height: 350px;"></div>--}}
                                </div>

                                <div hidden id="mortgage"><p align="center">
                                        <a href="#."><img
                                                src="https://www.mortgagecalculator.org/images/mortgage-calculator-logo.png"
                                                width="589" height="57" alt="MortgageCalculator.org" border="0"
                                                style="max-width: 100%;" target="_blank"></a></p>
                                    <iframe
                                        src="https://www.mortgagecalculator.org/webmasters/?downpayment=50000&homevalue=300000&loanamount=250000&interestrate=4&loanterm=30&propertytax=2400&pmi=1&homeinsurance=1000&monthlyhoa=0"
                                        style="width: 100%; height: 1200px; border: 0;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar-area">
                        <div class="">
                            <div style="display: flex;flex-flow: row;justify-content: space-between;margin-bottom: 23px"
                                 class="" style="margin-top: 1.5rem;">

                                {{--                                <div>--}}
                                {{--                                    <a href="{{route('agent.contact')}}" class="btn btn-default"><i class="fa fa-user"--}}
                                {{--                                                                                                 aria-hidden="true"></i>--}}
                                {{--                                       Apply Agents</a>--}}
                                {{--                                </div>--}}
                                <div>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal_1"
                                       class="btn btn-default btn-success " id="book_showing"
                                       style="text-decoration: none;"><i class="fa fa-home"></i>
                                        Book Showing</a>
                                </div>

                                <!-- book showing Modal -->
                                <div class="modal fade" id="exampleModal_1" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title  text-center"
                                                    style="font-size: 26px;font-weight: bold;"
                                                    id="exampleModalLabel">Email NPLS</h5>
                                                {{--                                                    <button type="button" class="close"  data-dismiss="modal" aria-label="Close">--}}
                                                {{--                                                        <span aria-hidden="true">Close</span>--}}
                                                {{--                                                    </button>--}}
                                            </div>
                                            <form action="{{route('book.store')}}" role="form"
                                                  enctype="multipart/form-data"
                                                  method="post">
                                                {{csrf_field()}}
                                                {{--                                                            {{method_field('PUT')}}--}}

                                                <div class="modal-body">
                                                    <input type="text" name="id" hidden value="{{$listing->id}}">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="name">First Name <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="name" id="name"
                                                                       class="form-control"
                                                                       placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="lastname">Last Name <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="lastname" id="lastname"
                                                                       class="form-control" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="email">Email <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="email" id="email"
                                                                       class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone Number <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="number" name="phone" id="phone"
                                                                       class="form-control"
                                                                       placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="message"> Message <span
                                                                        class="text-danger">*</span></label>
                                                                <textarea name="message" id="message"
                                                                          class="form-control"
                                                                          placeholder="Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="preference"> I am a <span
                                                                        class="text-danger">*</span></label>
                                                                <select name="preference" id="preference"
                                                                        class="form-control text-black">
                                                                    <option value="preference" disabled selected>No
                                                                        Preference
                                                                    </option>
                                                                    <option value="First Time Buyer">First Time
                                                                        Buyer
                                                                    </option>
                                                                    <option value="Repeat Buyer">Repeat Buyer
                                                                    </option>
                                                                    <option value="Seller">Seller</option>
                                                                    <option value="Residentail investor">Residentail
                                                                        investor
                                                                    </option>
                                                                    <option value="Commercial investor">Commercial
                                                                        investor
                                                                    </option>
                                                                    <option value="Commercial buyer/leaser">
                                                                        Commercial buyer/leaser
                                                                    </option>
                                                                    <option value="Land for development">Land for
                                                                        development
                                                                    </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5 style="margin: 24px;font-weight: bold">Information
                                                                to help the NPLS respond:</h5>
                                                        </div>

                                                        <div class="col-sm-12 ">
                                                            <div class="" style="display: flex;">
                                                                <input type="checkbox"
                                                                       style="margin: 0px!important;width: 5%!important;"
                                                                       id="wish_to_book_showing"
                                                                       name="wish_to_book_showing">
                                                                <h5>I wish to book a showing. Choose up to 3 date
                                                                    and time combinations.</h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="date" name="date" class="form-control"
                                                                       id="date">
                                                            </div>
                                                            <div class="col-sm-6" id="any_time">
                                                                <select name="time" id="any_time"
                                                                        class="form-control text-black">
                                                                    <option value="Any Time">Any Time</option>
                                                                    <option value="Morning">Morning</option>
                                                                    <option value="Afternoon">Afternoon</option>
                                                                    <option value="Evening">Evening</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-12 " style="margin-top: 20px">
                                                            <div class="" style="display: flex;">
                                                                <input type="checkbox"
                                                                       style="margin: 0px!important;width: 5%!important;"
                                                                       id="currently_working"
                                                                       name="currently_working">
                                                                <h5>I am currently working with a RealEstate.</h5>
                                                            </div>
                                                            <input type="input" class="form-control"
                                                                   name="first_and_last_name" id="firstandlastName"
                                                                   placeholder="First and Last Name of My NPLS®.">


                                                        </div>


                                                        <div class="col-sm-12 " style="margin-top: 20px">
                                                            <div class="" style="display: flex;">
                                                                <input type="checkbox"
                                                                       style="margin: 0px!important;width: 5%!important;"
                                                                       id="wish_to_book_showing"
                                                                       name="pre_approved" value="pre_approved">
                                                                <h5>I have been pre-approved for a mortgage.</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 " style="margin-top: 20px">
                                                            <label for="city">City <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-control" name="city" id="city">
                                                                <option selected disabled>Select City</option>
                                                                @foreach($cities as $city)
                                                                    <option
                                                                        value="{{$city->name}}">{{$city->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="nice-select" style="display: none;"></div>

                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group"
                                                                 style="float: left;display:-webkit-box; margin: 10px; ">

                                                     <span class="g-recaptcha-response" name="g-recaptcha-response">
                                                             {!! NoCaptcha::renderJs() !!}
                                                            {!! NoCaptcha::display() !!}
                                                        </span>
                                                                @error("g-recaptcha-response")
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    {{--                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                                    <input type="submit" class="btn btn-primary"
                                                           style="width: 25%!important;float: right;margin: 30px;"
                                                           id="submit">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>


                                <a href="" class="btn " style="color: #fff; background: #46BFE2; width: 120px;"
                                   data-target="#exampleModal" data-toggle="modal">
                                    <i class="fa fa-share-alt"></i>&nbsp; &nbsp; Share</a>


                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content col-12">
                                            <div class="modal-header"
                                                 style="justify-content: space-between; display: flex;flex-flow: row;">
                                                <h5 class="modal-title ">Share</h5>

                                                {{--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                {{--                                                    <span style="color: #0a0a0a;background: #46BFE2" aria-hidden="true">&times;</span>--}}
                                                {{--                                                </button>--}}
                                            </div>
                                            <div class="modal-body">
                                                <div class="icon-container1 "
                                                     style="display: flex;justify-content: space-between;">
                                                    <div class="smd">
                                                        <a href="https://twitter.com/?lang=en"
                                                           style="color: #0a0a0a;text-decoration: none;"
                                                           target="_blank">
                                                            <i class=" img-thumbnail fa fa-twitter fa-2x"
                                                               style="color:#4c6ef5; padding: 10px; border-radius: 50%; background-color: aliceblue"></i>
                                                            <p>Twitter</p>
                                                        </a>
                                                    </div>
                                                    <div class="smd">
                                                        <a href="https://www.facebook.com/"
                                                           style="color: #0a0a0a;text-decoration: none;"
                                                           target="_blank">
                                                            <i class="img-thumbnail fa fa-facebook fa-2x text-center"
                                                               style="color: #3b5998;padding: 10px;width: 50px; border-radius: 50%;background-color: #eceff5;"></i>
                                                            <p>Facebook</p>
                                                        </a>
                                                    </div>
                                                    <div class="smd">
                                                        <a href="https://web.whatsapp.com/"
                                                           style="color: #0a0a0a;text-decoration: none;"
                                                           target="_blank">
                                                            <i class="img-thumbnail fa fa-whatsapp fa-2x"
                                                               style="color: #25D366;padding: 10px;width: 50px; border-radius: 50%;background-color: #cef5dc;"></i>
                                                            <p>Whatsapp</p>
                                                        </a>
                                                    </div>
                                                    <div class="smd">
                                                        <a href="https://www.messenger.com/"
                                                           style="color: #0a0a0a;text-decoration: none;"
                                                           target="_blank">
                                                            <i class="img-thumbnail fab fa-facebook-messenger fa-2x"
                                                               style="color: #3b5998;padding: 10px;width: 50px; border-radius: 50%;background-color: #eceff5;"></i>
                                                            <p>Messenger</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="icon-container1 "
                                                     style="display: flex;justify-content: space-between;">
                                                    <div class="smd">
                                                        <a href="https://www.instagram.com/"
                                                           style="color:#0a0a0a;text-decoration: none;"
                                                           target="_blank">
                                                            <i class=" img-thumbnail fa fa-instagram fa-2x"
                                                               style="color:#4c6ef5; padding: 10px; border-radius: 50%; background-color: aliceblue"></i>
                                                            <p>Instagram</p>
                                                        </a>
                                                    </div>
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fa fa-facebook fa-2x text-center" style="color: #3b5998;padding: 10px;width: 50px; border-radius: 50%;background-color: #eceff5;"></i>--}}
                                                    {{--                                                        <p>Facebook</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fa fa-whatsapp fa-2x" style="color: #25D366;padding: 10px;width: 50px; border-radius: 50%;background-color: #cef5dc;"></i>--}}
                                                    {{--                                                        <p>Whatsapp</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fa fa-facebook-messenger fa-2x" style="color: #3b5998;padding: 10px;width: 50px; border-radius: 50%;background-color: #eceff5;" ></i>--}}
                                                    {{--                                                        <p>Messenger</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                                <div class="icon-container2 d-flex">--}}
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fab fa-whatsapp fa-2x" style="color: #25D366;background-color: #cef5dc;"></i>--}}
                                                    {{--                                                        <p>Whatsapp</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fab fa-facebook-messenger fa-2x" style="color: #3b5998;background-color: #eceff5;"></i>--}}
                                                    {{--                                                        <p>Messenger</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fab fa-telegram fa-2x" style="color: #4c6ef5;background-color: aliceblue"></i>--}}
                                                    {{--                                                        <p>Telegram</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="smd"> <i class="img-thumbnail fab fa-weixin fa-2x" style="color: #7bb32e;background-color: #daf1bc;"></i>--}}
                                                    {{--                                                        <p>WeChat</p>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                                {{--                                            <div class="modal-footer">--}}
                                                {{--                                                <label class="text-left" style="font-weight: 600;">Page Link <span class="message"></span></label>--}}
                                                {{--                                                <br />--}}
                                                {{--                                                <div class="row">--}}
                                                {{--                                                    <input class="col-10 ur" type="url" placeholder="https://www.arcardio.app/acodyseyy" id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;">--}}
                                                {{--                                                    <button class="cpy" onclick="myFunction()"><i class="far fa-clone"></i></button>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                {{--                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">--}}
                                {{--                                    <a class="a2a_dd" href="{{ url()->current() }}"></a>--}}
                                {{--                                    --}}{{--                        <a class="a2a_button_facebook"></a>--}}
                                {{--                                    --}}{{--                        <a class="a2a_button_twitter"></a>--}}
                                {{--                                    --}}{{--                        <a class="a2a_button_linkedin"></a>--}}
                                {{--                                    --}}{{--                        <a class="a2a_button_skype"></a>--}}
                                {{--                                    --}}{{--                        <a class="a2a_button_sms"></a>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>

                        <div class="widget">
                            {{--                            <h2 class="widget-title">Search Property</h2>--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4" style="overflow: hidden;">
                                            <img src="{{ asset($listing->thumbnail) }}" alt=""
                                                 style="width: 100%;margin-bottom: 40px;">
                                        </div>
                                        <div class="col-md-8">
                                            <h2>{{ @$listing->admin->name }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{--                                    <div class="">--}}
                                    {{--                                        <i class="fa fa-phone"></i>--}}
                                    {{--                                        <a href="tel:{{ @$listing->admin->phone }}"--}}
                                    {{--                                           style="color: #000; margin-left: 8px;">{{ @$listing->admin->phone }}</a>--}}
                                    {{--                                    </div>--}}
                                    <div class="">
                                        <i class="fa fa-paper-plane"></i>
                                        <a href="mailto:{{ @$listing->admin->email }}"
                                           style="color: #000; margin-left: 8px;">{{ @$listing->admin->email }}</a>
                                    </div>
                                </div>

                                {{--                                <div class="col-md-12">--}}
                                {{--                                    <div class="row">--}}
                                {{--                                        <div class="col-md-4" style="overflow: hidden;">--}}
                                {{--                                            <img src="{{ asset($listing->thumbnail) }}" alt="" style="width: 100%;">--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-md-8">--}}
                                {{--                                            <h2>XYZ Company</h2>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <div class="widget form-bottom" style="margin-bottom: 131px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4" style="overflow: hidden;">
                                            <img src="{{ asset($listing->thumbnail) }}" alt=""
                                                 style="width: 100%;margin-bottom: 40px;">
                                        </div>
                                        <div class="col-md-8">
                                            <h2>XYZ Company</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{--                                    <div class="">--}}
                                    {{--                                        <i class="fa fa-phone"></i>--}}
                                    {{--                                        <a href="tel:03126612612" style="color: #000; margin-left: 8px;">03126612612</a>--}}
                                    {{--                                    </div>--}}
                                    <div class="">
                                        <i class="fa fa-paper-plane"></i>
                                        <a href="mailto:talha@admin.com" style="color: #000; margin-left: 8px;">talha@admin.com</a>
                                    </div>
                                    <div class="">
                                        <i class="fa fa-map"></i>
                                        <span style="color: #000; margin-left: 8px;">Address</span>
                                    </div>
                                    <div class="">
                                        <i class="fa fa-link"></i>
                                        <a href="#" target="_blank" style="margin-left: 8px;">www.abc.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{route('contact.user')}}" class="form-mob" method="post"
                              style="padding: 25px; background-color: #fff; border: 1px solid #b9b9b9">
                            @csrf
                            <fieldset>
                                <h3>Contact Agent</h3>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name" name="name" style="margin-top: 25px;">Full Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Name*"
                                               name="name" id="name" style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="E-mail*"
                                               name="email" id="email" style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <label for="name">City <span class="text-danger">*</span></label>

                                        <select class="form-control" name="city" id="city">
                                            <option selected disabled>Select City</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->name}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="nice-select" style="display: none;"></div>

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                               name="phone" id="phone" placeholder="You Phone*"
                                               style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Message <span class="text-danger">*</span></label>
                                        <textarea name="message" id="message" placeholder="Message"
                                                  style="border: 2px solid #46BFE2;margin-bottom: 61px;"></textarea>
                                    </div>
                                </div>
                                {{--                                style="padding-left: 0px!important;padding-right: 0px!important;"--}}
                               <div class="col-sm-12 mob_captcha" style="padding-left: 0;padding-right: 0;margin: -25px">
                                   <div class="form-group">
                                        <span class="" name="g-recaptcha-response">
                                        {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                    </span>
                                       @error("g-recaptcha-response")
                                       <span class="text-danger">{{ $message }}</span>
                                       @enderror

                                       <div class="rc-anchor-normal" style="width: 231px!important;"></div>
                                   </div>

                               </div>
                                <div class="col-sm-12">
                                    <div class="form-group button_mob" style=" padding:0px;">
                                        <input type="submit" id="submit" name="submit"
                                               class="submit btn btn-lg btn-info"
                                               style="width:130px;margin-top:42px;" value="Contact Us"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 footer_mob" style="margin-top:-10px;">
                                    <div class="form-group">
                                        <h4 style="margin-bottom:6%;">Or call <a href="#">1-800-000-000</a></h4>
                                        <h5 style="margin-bottom: 4px;">We respect your privacy, See our <a
                                                href="{{route('privacy.policy')}}" target="_blank"
                                                style="color: rgb(35, 15, 214)">Privacy Policy</a></h5>
                                        <h5 style="width: 99%;">
                                            <br> By pressing “contact US”, you agree that NPLS may contact you via
                                            Phone/text or email about your inquiry, which may involve the use of
                                            automated means.
                                        </h5>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="real-estate-agent-area" style="padding:20px 0;background:none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                Similar Listings</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="agent-slider" style="margin: 0;">
                        @foreach($similarListings as $list)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);;">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 379px;height: 175px;border-radius: 0!important;">
                                            @if($list->thumbnail)
                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset($list->thumbnail)}}" alt="">
                                            @else
                                                <img src="{{ asset('images/default.jpg')}}" alt="">
                                            @endif
                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{ asset( $list->thumbnail )}}"
                                                           data-fancybox-group="gallery"
                                                           title="{{ $list->thumbnail }}"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span
                                            style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: 6px 0 6px 10px;text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">{{ ucwords($list->purpose) }}</span>

                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="{{ route("listing.details", ['slug' => $list->slug]) }}">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">{{$list->name}}</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px"> {{$list->address}}</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">PKR.{{$list->price}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
@section('script')
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts"></script>
    <script src="https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js"></script>
    <script src="{{ asset('npls/js/jquery.webui-popover.min.js') }}"></script>

    <script>
        function myFunction() {
            $(".message").text("link copied");
        }
    </script>

    <script>


        //hide and show on click tabs
        $(document).ready(function () {
            $("#book_showing").click(function () {
                $("#date").hide();
                $("#any_time").hide();
                $("#firstandlastName").hide();
            })

            $("#wish_to_book_showing").click(function () {

                if ($("input[name='wish_to_book_showing']").is(":checked") == true) {
                    $("#date").show();
                    $("#any_time").show();
                } else if ($("input[name='wish_to_book_showing']").is(":checked") != true) {
                    $("#date").hide();
                    $("#any_time").hide();
                }
            })
            $("#currently_working").click(function () {

                if ($("input[name='currently_working']").is(":checked") == true) {
                    $("#firstandlastName").show();
                } else if ($("input[name='currently_working']").is(":checked") != true) {
                    $("#firstandlastName").hide();
                }
            })

            $("#highlights").click(function (e) {
                e.preventDefault();
                $("#video_link").show();
                $("#map-location").hide();
                $("#mortgage").hide();
                $("#neighbourhood").removeClass('active')
                $("#calculator").removeClass('active')
                $("#highlights").addClass('active')
            });
            $("#neighbourhood").click(function (e) {
                e.preventDefault(e);
                $("#video_link").hide();
                $("#map-location").show();
                $("#mortgage").hide();
                $("#highlights").removeClass('active')
                $("#calculator").removeClass('active')
                $("#neighbourhood").addClass('active')
            });
            $("#calculator").click(function (e) {
                e.preventDefault(e);
                $("#video_link").hide();
                $("#map-location").hide();
                $("#mortgage").show();
                $("#highlights").removeClass('active')
                $("#calculator").addClass('active')
                $("#neighbourhood").removeClass('active')
            });
        });
        var facilities = JSON.parse('{!! $listing->facility !!}');

        var defaultLat = parseFloat(facilities[0].pivot.lat);
        var defaultLng = parseFloat(facilities[0].pivot.lng);

        const map = new google.maps.Map(document.getElementById("facilitiesMap"), {
            zoom: (defaultLat && defaultLng) ? 10 : 5,
            gestureHandling: "greedy",
            styles: [
                {
                    featureType: "poi",
                    stylers: [
                        {visibility: "off"}
                    ]
                }
            ],
            center: {lat: defaultLat ?? 33.738045, lng: defaultLng ?? 73.084488},
        });

        const markers = facilities.map((location, i) => {
            var obj = {lat: parseFloat(location.pivot.lat), lng: parseFloat(location.pivot.lng)};

            var marker = new google.maps.Marker({
                position: obj,
                icon: {
                    url: "/npls/images/green-map-marker.png"
                }
            });

            var infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(marker, 'click', function (e) {
                map.setCenter(marker.getPosition());

                infowindow.setContent(
                    '<label>' + location.pivot.name + '</label>'
                );
                infowindow.open(map, marker);
            });

            return marker;
        });

        new MarkerClusterer(map, markers, {
            imagePath:
                "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
        });

        var content = '';

        var convertedArea = convertArea('{{ $listing->area_type }}', '{{ $listing->square_feats }}');
        $.each(convertedArea, function (key, value) {
            content += '<p class="area_p"><label>' + ucwords(value.type) + ':</label> ' + value.area + '</p>';
        })
        var settings = {
            trigger: 'hover',
            // placement:function(el){return el.data('placement')},
            title: 'Land Area',
            content: content,
            width: 300,
            multi: true,
            closeable: false,
            style: '',
            padding: true
        };
        $('.area_conversion').webuiPopover(settings);


    </script>
@endsection
