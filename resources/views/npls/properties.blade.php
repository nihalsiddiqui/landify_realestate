@extends("npls.layouts.master")
@section("page-title", 'Properties')
@section('style')
    <link rel="stylesheet" href="{{ asset("npls/css/jquery.webui-popover.min.css") }}">
@endsection
@section("main-content")

    <style>
        .acurate > .pagination-area > .pagination-area {
            padding-top: 0 !important;
        }
        #kitchens{
            display: block !important;
        }
        #bath_rooms{
            display: block !important;
        }
        #no_of_rooms{
            display: block !important;
        }
        #area{
            display: block !important;
        }
        #area_type{
            display: block !important;
        }
        #amount{
            display: block !important;
        }
        #pagination_ul {
            padding-top: 0px !important;
        }
    </style>

    <!-- Page Header Section breadcumb Start Here -->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1>Property Grid</h1>
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
        <div class="container-fluid" style="margin: 0 25px!important;">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="sidebar-area">
                        <div class="widget">
                            <h2 class="widget-title">Search Property</h2>
                            <div class="property-filtering">

                                <form method="get" action="{{route('properties')}}" >
                                    @csrf

                                    <div class="form-group" style="line-height: 30px;">
                                        <div id="beds" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Number of Rooms</p>
                                                <div class="input-box">
                                                    <select class="form-control" name="rooms" id="no_of_rooms">
                                                        <option  class="form-control" value="0" selected="selected" disabled>Select Number of
                                                            Rooms
                                                        @foreach($rooms_count as $room_c)
                                                            <option {{ request()->get('rooms') == $room_c ? "selected":"" }} value="{{ $room_c }}">{{ $room_c }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="nice-select" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="baths" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Max of Baths</p>
                                                <div class="input-box">
                                                    <select class="form-control" name="baths" id="bath_rooms">
                                                        <option class="form-control" value="0" selected="selected" disabled>Number of Baths
                                                        </option>
                                                        @foreach($baths_count as $bath_c)
                                                            <option {{ request()->get('baths') == $bath_c ? "selected":"" }} value="{{ $bath_c }}">{{ $bath_c }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="nice-select" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="baths" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Number of Kitchens</p>
                                                <div class="input-box">
                                                    <select class="form-control" name="kitchens" id="kitchens">
                                                        <option class="form-control" value="0" selected="selected" disabled>Number of Kitchens
                                                        </option>
                                                        @foreach($kitchen_count as $kitchen_c)
                                                            <option {{ request()->get('kitchens') == $kitchen_c ? "selected":"" }} value="{{ $kitchen_c }}">{{ $kitchen_c }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="nice-select" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="square_feats" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Area</p>
                                                <div class="input-box ">
                                                    <select class="form-control" name="area" id="area" >
                                                        <option class="form-control"  selected="selected" disabled>Select Area</option>
                                                        <option class="form-control" value="1-2" {{ (Request::get('area') === '1-2') ? 'selected' : '' }}>1 - 2 </option>
                                                        <option class="form-control" value="2-5" {{ (Request::get('area') === '2-5') ? 'selected' : '' }}>2 - 5 </option>
                                                        <option class="form-control" value="5-10" {{ (Request::get('area') === '5-10') ? 'selected' : '' }}>5 - 10 </option>
                                                        <option class="form-control" value="10-50" {{ (Request::get('area') === '10-50') ? 'selected' : '' }}>10 - 50 </option>
                                                        <option class="form-control" value="50-100" {{ (Request::get('area') === '50-100') ? 'selected' : '' }}>50 - 100 </option>
                                                        <option class="form-control" value="100-200" {{ (Request::get('area') === '100-200') ? 'selected' : '' }}>100 - 200 </option>
                                                        <option class="form-control" value="200-300" {{ (Request::get('area') === '200-300') ? 'selected' : '' }}>200 - 300 </option>
                                                        <option class="form-control" value="300-400" {{ (Request::get('area') === '300-400') ? 'selected' : '' }}>300 - 400 </option>
                                                        <option class="form-control" value="400-500" {{ (Request::get('area') === '400-500') ? 'selected' : '' }}>400 - 500 </option>
                                                        <option class="form-control" value="500-1000" {{ (Request::get('area') === '500-1000') ? 'selected' : '' }}>500 - 1000 </option>
                                                    </select>
                                                    <div class="nice-select" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="square_feats" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Area Type</p>
                                                <div class="input-box">
                                                    <select class="form-control" name="area_type" id="area_type">
                                                        <option class="form-control" value="0" selected="selected" disabled>Select Area Type</option>
                                                        @foreach(getPossibleEnumValues('listings','area_type') as $area_type)
                                                            <option
                                                                value="{{$area_type}}" {{ old("area_type") == $area_type ? "selected" : "" }}>{{ucfirst($area_type)}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="nice-select" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-field">
                                                <p style="margin: 0">Price Range</p>
                                                <div class="input-box">
                                                    <select class="form-control" name="amount" id="amount" >
                                                        <option  class="form-control" selected="selected" disabled>Select Price Range</option>
                                                        <option class="form-control"
                                                            value="0-5000000" {{ (Request::get('amount') === '0-5000000') ? 'selected' : '' }}>
                                                            0 - 5 Million
                                                        </option>
                                                        <option class="form-control"
                                                            value="5000000-10000000" {{ (Request::get('amount') === '5000000-10000000') ? 'selected' : '' }}>
                                                            5 Million - 1 Crore
                                                        </option>
                                                        <option class="form-control"
                                                            value="10000000-50000000" {{ (Request::get('amount') === '10000000-50000000') ? 'selected' : '' }}>
                                                            1 Crore - 5 Crore
                                                        </option>
                                                        <option class="form-control"
                                                            value="50000000-100000000" {{ (Request::get('amount') === '50000000-100000000') ? 'selected' : '' }}>
                                                            5 Crore - 10 Crore
                                                        </option>
                                                        <option class="form-control"
                                                            value="100000000-500000000" {{ (Request::get('amount') === '100000000-500000000') ? 'selected' : '' }}>
                                                            10 Crore - 50 Crore
                                                        </option>
                                                    </select>
                                                    <div class="nice-select" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px;">
                                            <div class="read-more">
                                                <a id="f-property" class="button btn btn-danger btn-lg">Find Property</a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" hidden name="" id="form_submit">

                                </form>
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h2 class="widget-title">Listings</h2>
                            <ul>
                                <li><a href="#"> Sale<span class="count">{{$properties_sale}}</span></a></li>
                                <li><a href="#">Rent<span class="count">{{$properties_rent}}</span></a></li>
                                <li><a href="#">For Lease <span class="count">{{$properties_for_lease}}</span></a></li>
                                <li><a href="#">Sold<span class="count">{{$properties_purpose}}</span></a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h2>Feature Property</h2>
                            @foreach ($feauture_properties as $properties )
                            <div class="media single-post">
                                <div class="pull-left">
                                    @if($properties->thumbnail)
                                    <img src="{{ asset( $properties->thumbnail )}}" style="height: 100px!important;"
                                            alt="">
                                    @else
                                        <img src="{{ asset('images/default.jpg')}}" style="height: 100px!important;"
                                            alt="">
                                    @endif
                                </div>
                                <div class="media-body">
                                    <div class="posted-date">
                                        <a href="#">{{$properties->name}}<img src="images/property/star.png" alt=""></a>
                                        <p>$ {{$properties->price}}</p>
                                        <span style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;"><i class="fa fa-map-marker"></i> {{$properties->address}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        {{-- <div class="widget">
                            <h2 class="widget-title">Tags</h2>
                            <div class="popular-tags">
                                <ul>
                                    <li><a href="#">Flat</a></li>
                                    <li><a href="#">Realestate</a></li>
                                    <li><a href="#">Building</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Rent</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">House</a></li>
                                    <li><a href="#">Agent</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="widget">
                            <h2 class="widget-title">Best Agents</h2>
                            <div class="">
                                <ul>
                                    @foreach ($best_agents as $agent)
                                    <li>
                                        <div class="media">
                                            <div class="pull-left">
                                                @if($agent->image)
                                                <img src="{{asset('users/'.$agent->image)}}" style="height: 100px!important;"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('images/default.jpg')}}" style="height: 100px!important;"
                                                        alt="">
                                                @endif
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">{{$agent->name}}</a></h4>
                                                <p>E-mail Address <br/> {{$agent->email}}</p>
                                            </div>
                                        </div>
                                    </li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="property-content-area">
                        <div class="row">
                            <div class="property-topbar">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                                    <div class="show-result">
                                        @php
                                            $from = $listings->toJson();
                                        @endphp
                                        <p>Showing {{ json_decode($from)->from }}–{{ json_decode($from)->to }}
                                            of {{ json_decode($from)->total }} results</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#grid" aria-controls="grid" role="tab"
                                                              data-toggle="tab"><i class="fa fa-th"
                                                                                   aria-hidden="true"></i></a></li>
                                        <li><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i
                                                    class="fa fa-th-list" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!$listings->count())
                        <label for="" class="alert" role="alert">No listing found!</label>
                    @else
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="grid">
                                    <div class="show-property-area">
                                        <div class="row">
                                            @foreach($listings as $listing)
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="single-property"
                                                         style="border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">
                                                        <div class="images" style="margin-bottom: 0 !important;">
                                                            <div class="image-frame"
                                                                 style="width: 100%;height: 175px;overflow: hidden;">
                                                                <img style="height: 100%;width: 100%;"
                                                                     src="{{ asset($listing->thumbnail ?? 'images/default.jpg') }}"
                                                                     alt="">
                                                            </div>
                                                            <div class="icons-area">
                                                                <ul>
                                                                    <li>
                                                                        <a class="fancybox"
                                                                           href="{{ asset($listing->thumbnail) }}"
                                                                           data-fancybox-group="gallery"
                                                                           title="{{ ucwords($listing->name) }}">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <span>{{ ucwords($listing->purpose) }}</span>
                                                        </div>
                                                        <div class="property-details" style="padding: 10px;">
                                                            <h3>
                                                                <a href="{{ route("listing.details", ['slug' => $listing->slug]) }}">
                                                                    <span>{{ ucwords($listing->name) }}</span>
                                                                    {{--                                                                <img src="npls/images/property/star.png" alt="">--}}
                                                                </a>
                                                            </h3>
                                                            <p>PKR. {{ @number_format($listing->price) }}</p>
                                                            <span style="display: flex;align-items: center;">
                                                                <i class="fa fa-map-marker"></i>
                                                                <div
                                                                    style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;margin-left: 5px;">{{ $listing->address }}</div>
                                                            </span>
                                                            {{--                                                        <span style="display: flex;align-items: center;">--}}
                                                            {{--                                                            <i class="fa fa-chart-area"></i>--}}
                                                            {{--                                                            <a class="area_conversion"--}}
                                                            {{--                                                               data-area-type="{{ $listing->area_type }}"--}}
                                                            {{--                                                               data-area="{{ $listing->square_feats }}"--}}
                                                            {{--                                                               style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;margin-left: 5px;">{{ $listing->square_feats }} {{ ucwords($listing->area_type) }}</a>--}}
                                                            {{--                                                        </span>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="list">
                                    <div class="list-view-area">
                                        @foreach($listings as $listing)
                                            <div class="media row" style="box-shadow: 0px 10px 16px -3px rgb(0 0 0 / 50%);">
                                                <div class="pull-left col-md-4" style="padding: 0;margin: 0;">
                                                    <div class="images" style="margin-bottom: 0;">
                                                        <div style="height: 175px;">
                                                            <img src="{{ $listing->thumbnail }}" alt="" style="height:100%;">
                                                        </div>
                                                        <div class="icons-area">
                                                            <ul>
                                                                <li>
                                                                    <a class="fancybox" href="{{ $listing->thumbnail }}"
                                                                       data-fancybox-group="gallery"
                                                                       title="{{ ucwords($listing->name) }}"><i
                                                                            class="fa fa-plus" aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span>{{ ucwords($listing->purpose) }}</span>
                                                    </div>
                                                </div>
                                                <div class="media-body col-md-8" style="width: 66.66666667% !important;padding: 15px;">
                                                    <div class="property-details">
                                                        <h3>
                                                            <a href="property-details.html">
                                                                {{ $listing->name }}
                                                                {{--                                                        <img src="images/property/star.png" alt="">--}}
                                                            </a>
                                                        </h3>
                                                        <p>RS. {{ $listing->price }}</p>
                                                        <span style="display: flex;align-items: center;">
                                                        <i class="fa fa-map-marker"></i>
                                                        <div
                                                            style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; margin-left: 5px;">
                                                            {{ $listing->address }}
                                                        </div>
                                                    </span>
                                                        <div class="property-content">
                                                            <div
                                                                style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{!! strip_tags($listing->description) !!}</div>
                                                            <div class="read-more">
                                                                <a class="button"
                                                                   href="{{ route('listing.details', [$listing->slug]) }}">Read
                                                                    More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="pagination-area">
                                {{ $listings->links() }}
                                {{--                                <ul>--}}
                                {{--                                    <li class="active"><a href="#">1</a></li>--}}
                                {{--                                    <li><a href="#">2</a></li>--}}
                                {{--                                    <li><a href="#">3</a></li>--}}
                                {{--                                </ul>--}}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Property Area End Here -->

{{--Disclaimer--}}
    <section class="py-5" style="margin-bottom: 30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="width: 100%;">
                    <h2>Disclaimer</h2>
                    <p>The listing data above is provided by Techno-Genes  -The listing data is deemed reliable but Techno-Genes and npls.pk  assume no responsibility for the accuracy of any information shown. </p>
                    <div class="date">Data last updated:
                        @php
                            $dt = new DateTime();
                            echo $dt->format('Y-m-d  , H:i:s');
                       @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    {{  now()->format('Y-m-d') }}--}}
{{--end of Disclaimer--}}
@endsection
@section('script')
    <script src="{{ asset('npls/js/jquery.webui-popover.min.js') }}"></script>

    <script>
        $("#f-property").click(function (e) {
            $('#form_submit').click();
        });

        // var content = '';
        //
        // var convertedArea = null;
        //
        // $('.area_conversion').hover(function () {
        //     let area = $(this).data('area');
        //     let area_type = $(this).data('area-type');
        //     convertedArea = convertArea(area_type, area);
        // })
        //
        // $.each(convertedArea, function (key, value) {
        //     content += '<p class="area_p"><label>' + ucwords(value.type) + ':</label> ' + value.area + '</p>';
        // })
        //
        // var settings = {
        //     trigger: 'hover',
        //     // placement:function(el){return el.data('placement')},
        //     title: 'Land Area',
        //     content: content,
        //     width: 300,
        //     multi: true,
        //     closeable: false,
        //     style: '',
        //     padding: true,
        //     onShow: function (event) {
        //         console.log($(this))
        //     }
        // };
        //
        // $('.area_conversion').webuiPopover(settings);

    </script>
@endsection

