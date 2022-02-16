@extends("npls.layouts.master")
@section("page-title", "Search Page")

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
@endsection

@section("main-content")
    <div style="background-color: #F0F0EB;">
        <div class="bs-example row" style="margin:0;background: #F2F2F2;    padding: 12px;">

            @if($message)
                <div class="alert alert-danger"  role="alert">{{ $message }}</div>
            @endif

            <form id="search-form" class="col-md-offset-2 col-lg-offset-2" method="get"
                  action="{{route('home.search')}}">
                @csrf
                <input type="hidden" id="bath" name="bath">
                <input type="hidden" id="rooms" name="rooms">
                <input type="hidden" id="areas" name="area">
                <input type="hidden" id="price_range" name="price_range">
                <input type="hidden" id="category" name="category">
                <input type="hidden" id="purpose" name="purpose">
                <input type="hidden" id="date_range" name="date_range">
                <input type="hidden" id="sortBy" name="sort_by">

                <div class="form-fields">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-field">
                            <div class="input-box">
                                <div class="input-group">
                                    <input type="search" style="text-transform: uppercase;border-radius: 25px;"
                                           id="search"
                                           name="search_query"
                                           class="form-control typeahead " autocomplete="off"
                                           value="{{ Request::get('search_query') }}"
                                           placeholder="City, Town or Npls number...." aria-label="...">
                                            <span class="input-group-btn">
                                                <span id="search_Button" class="btn btn-lg form-control"
                                                        style="background: #46BFE2;border-radius: 50%">
                                                    <i class="fa fa-search" style="font-size: 20px;color: white;margin-top: 7px;"></i>
                                                </span>
                                                <input type="submit" hidden name="" id="form_submit">
                                            </span>
                                    <a class="button form-control"
                                       style="width: 45px !important;border-radius: 50%;margin:0 !important;height: 45px !important;padding: 10px;margin-left: 50px"
                                       data-toggle="modal" data-target="#myModal">
                                        <img style="" src="{{asset("images/filter.svg")}}" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-field">
                            <div class="input-box">

                            </div>
                        </div>
                    </div>

                </div>
            </form>

            <!-- Filter Modal Start Here -->
            <div class="modal fade" id="myModal" role="dialog" style="z-index: 99999999!important;">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <a class="btn btn-danger " style="float: right;    transform: translate(10px, -16px);"
                           data-dismiss="modal">&times;</a>
                        <div class="modal-body">
                            <div class="form-fields">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                </div>
                                <div id="square_feats" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-field">
                                        <p style="margin: 0">Listed since</p>
                                        <div class="input-box">
                                            <input style="padding: 10px 15px;border: solid 1px #e8e8e8;" type="text"
                                                   id="dateRange" name="daterange"
                                                   value="{{ Request::get('date_range') }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div id="beds" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-field">
                                        <p style="margin: 0">Number of Rooms</p>
                                        <div class="input-box">
                                            <select id="bed_rooms">
                                                <option value="0" selected="selected" disabled>Select Number of
                                                    Rooms
                                                </option>
                                                <option
                                                    value="1" {{ (Request::get('rooms') === '1') ? 'selected' : '' }}>
                                                    1
                                                </option>
                                                <option
                                                    value="2" {{ (Request::get('rooms') === '2') ? 'selected' : '' }}>
                                                    2
                                                </option>
                                                <option
                                                    value="3" {{ (Request::get('rooms') === '3') ? 'selected' : '' }}>
                                                    3
                                                </option>
                                                <option
                                                    value="4" {{ (Request::get('rooms') === '4') ? 'selected' : '' }}>
                                                    4
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="baths" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-field">
                                        <p style="margin: 0">Number of Baths</p>
                                        <div class="input-box">
                                            <select name="baths" id="bath_rooms">
                                                <option value="0" selected="selected" disabled>Number of Baths
                                                </option>
                                                <option
                                                    value="1" {{ (Request::get('bath') === '1') ? 'selected' : '' }}>1
                                                </option>
                                                <option
                                                    value="2" {{ (Request::get('bath') === '2') ? 'selected' : '' }}>2
                                                </option>
                                                <option
                                                    value="3" {{ (Request::get('bath') === '3') ? 'selected' : '' }}>3
                                                </option>
                                                <option
                                                    value="4" {{ (Request::get('bath') === '4') ? 'selected' : '' }}>4
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="square_feats" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                                <div id="square_feats" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-field">
                                        <p style="margin: 0">Category Type</p>
                                        <div class="input-box">
                                            <select id="category_type">
                                                <option value="0" selected="selected" disabled>Select Property Type
                                                </option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-field">
                                        <p style="margin: 0">Purpose</p>
                                        <div class="input-box">
                                            <select id="select_purpose">
                                                <option selected="selected" disabled>Select Purpose</option>
                                                <option
                                                    value="sale" {{ (Request::get('purpose') === 'sale') ? 'selected' : '' }}>
                                                    Sale
                                                </option>
                                                <option
                                                    value="rent" {{ (Request::get('purpose') === 'rent') ? 'selected' : '' }}>
                                                    Rent
                                                </option>
                                                <option
                                                    value="for_lease" {{ (Request::get('purpose') === 'for_lease') ? 'selected' : '' }}>
                                                    For Lease
                                                </option>
                                                <option
                                                    value="mortgage" {{ (Request::get('purpose') === 'mortgage') ? 'selected' : '' }}>
                                                    Mortgage
                                                </option>
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
                                                <option
                                                    value="0-5000000" {{ (Request::get('price_range') === '0-5000000') ? 'selected' : '' }}>
                                                    0 - 5 Million
                                                </option>
                                                <option
                                                    value="5000000-10000000" {{ (Request::get('price_range') === '5000000-10000000') ? 'selected' : '' }}>
                                                    5 Million - 1 Crore
                                                </option>
                                                <option
                                                    value="10000000-50000000" {{ (Request::get('price_range') === '10000000-50000000') ? 'selected' : '' }}>
                                                    1 Crore - 5 Crore
                                                </option>
                                                <option
                                                    value="50000000-100000000" {{ (Request::get('price_range') === '50000000-100000000') ? 'selected' : '' }}>
                                                    5 Crore - 10 Crore
                                                </option>
                                                <option
                                                    value="100000000-500000000" {{ (Request::get('price_range') === '100000000-500000000') ? 'selected' : '' }}>
                                                    10 Crore - 50 Crore
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="button btn btn-danger btn-lg " type="button"
                               style="float: right;font-size: 17px" data-toggle="modal" data-target="#myModal">Ok </a>

                            </form>

                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>

                </div>
            </div>

            <!-- Filter Modal End Here -->
        </div>
        <div class="bs-example row" style="margin:0;">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="" style="">
                <ul class="nav nav-tabs" style="float: right">
                    <li role="presentation" id="map"><a href="#" style="border: 1px solid;border-radius: 25px;">Map</a>
                    </li>
                    <li role="presentation" id="list"><a href="#"
                                                         style="border: 1px solid;border-radius: 25px;border-radius: 25px;">List</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="listing_view" hidden>
            @foreach($listings as $listing)
                <div class="bs-example row" id=""
                     style="margin:0;background: white;margin-top: 10px;margin-bottom: 10px; margin-left: 0;margin-right: 0;padding: 8px">
                    <div class=" col-xs-4" style="padding: 0;">
                        @if($listing->thumbnail)
                            <img
                                src="{{ asset($listing->thumbnail) }}"
                                class="card-img-top " style="width: 100%;height: 64px;" alt="...">
                        @else
                            <div
                                style="width: 112px;height: 64px;background-color: #f2f2f2;text-align: center;">
                                <span style="vertical-align: center;color: #7B7B7C;">No Image!</span>
                            </div>
                        @endif
                    </div>
                    <div class=" col-xs-8" style="padding-left: 5px;">
                        <div class="card-body">
                            <h5 class="card-title" style="margin: 0">{{ $listing->name }}</h5>
                            <p class="card-text"
                               style="margin: 0;line-height: normal;font-size: 12px;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{{ $listing->address }}</p>
                            <div style="display: flex;justify-content: space-around; margin-top: 10px;">
                                <div>
                                    <span style="font-size: 12px">{{ $listing->no_of_rooms }}</span>
                                    <image style="margin-left:1px;width: 20px;height: 20px;"
                                           src="/npls/images/bed.png"/>
                                </div>
                                <div>
                                    <span style="font-size: 12px">{{ $listing->no_of_baths }}</span>
                                    <image style="margin-left:1px;width: 20px;height: 20px;"
                                           src="/npls/images/bathtub.png"/>
                                </div>
                                <div>
                                    <span style="font-size: 12px">{{ $listing->no_of_garages }}</span>
                                    <image style="margin-left:1px;width: 20px;height: 20px;"
                                           src="/npls/images/garage.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bs-example row" style="margin:0;">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="gmap" style="height: 500px;padding: 0"></div>
            {{--        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="listing_data" style="height: 500px;padding: 0"></div>--}}

        </div>

        <div class="bs-example " id="listing_data"
             style="margin:0;background: white;bottom: 0;z-index: 111;position: fixed; width: 100%;z-index: -99999999">

        </div>
    </div>

@endsection
@section("script")
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    {{--    map scripts--}}
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts&sensor=false&libraries=drawing"></script>
    <script src="{{ asset("npls/js/gmaps.js") }}"></script>
    {{--    cluster for map pins--}}
    <script src="https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js"></script>
    {{--    typehead for search--}}
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    {{--    slider--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>

    <script>

        $('#dateRange').daterangepicker();

        $('#map').click(function () {
            $("#gmap").show("1000");
            $("#listing_view").hide("1000");
        });
        $('#list').click(function () {
            $("#gmap").hide("1000");
            $("#listing_view").show("1000");
            $("#cross").click()
        });

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

        var sliderCard = '';
        var mySwiper;

        $(document).ready(function () {
            $.each(listings, function (key, location) {
                var image = '';
                if (location.thumbnail) {
                    image = '<image style="";height: 5rem;" src=' + '/' + location.thumbnail + ' />';
                } else {
                    image = '<div style="width: 112px;height: 64px;background-color: #f2f2f2;text-align: center;">' +
                        ' <span style="vertical-align: center;color: #7B7B7C;">No Image!</span>' +
                        '</div>';
                }

                var url = '{{ url("/listing") }}' + '/' + location.slug;
                var favListingCookies = getCookie('favourite_listings');
                var heartImage = 'blank-heart.png';
                var iconPath = null;

                    if (location.registry === 'yes') {
                        iconPath = '/npls/images/registry_check.png';
                    } else if (location.registry === 'no') {
                        iconPath = '/npls/images/registry_no.jpg';
                    } else {
                        iconPath = '/npls/images/registry_under_process.jpg';
                    }

                if (!(favListingCookies == undefined || favListingCookies == '')) {
                    favListingCookies = JSON.stringify(favListingCookies);
                    if (!favListingCookies.includes(location.id)) {
                        heartImage = 'blank-heart.png';
                    } else {
                        heartImage = 'heart.png';
                    }
                }

                sliderCard +=
                    '<div class="swiper-slide swiper_' + location.id + '">' +
                    '<div class="row" style="width: 100%">' +
                    '<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="border-bottom: 1px solid #cdcdcd;margin-bottom: 11px;" >' +
                    '<p id="cross" style="float: right;margin: 0;cursor: pointer">❌</p>' +
                    '</div>' +
                    '<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 favourite-heart" data-id="' + location.id + '" style="margin-bottom: 11px;margin-left:7px;" >' +
                        '<image style="width:30px;" src=' + iconPath + ' />'+
                        '<label style="margin-left: 5px;">Registry: ' + location.registry + '</label>' +
                    '<image style="float: right;cursor: pointer;" width="40" src="/npls/images/' + heartImage + '" />' +
                    '</div>' +
                    '<a href=' + url + '>' +
                    '<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >' +
                    image +
                    '</div>' +
                    '<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8" style="text-align: left">' +
                    ' <h3 style="color:#000;margin-bottom: 5px;font-size: 16px;font-weight: bold;text-transform: capitalize;">Rs. ' + numToWords(location.price) + '</h3>' +
                    '<span style="color:#000;margin: 0;line-height: normal;font-size: 16px !important;font-weight: bold">' + location.name + '</span>' +
                    '<div style="display:flex;justify-content:space-between;margin-top:10px;">' +
                    '<div>' +
                    '<span style="color:#000; font-size: 13px;">' + location.no_of_rooms + '</span>' +
                    '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/bed.png"/>' +
                    '</div>' +
                    '<div>' +
                    '<span style="color:#000; font-size: 13px;">' + location.no_of_baths + '</span>' +
                    '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/bathtub.png"/>' +
                    '</div>' +
                    '<div>' +
                    '<span style="color:#000; font-size: 13px;">' + location.no_of_garages + '</span>' +
                    '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/garage.png"/>' +
                    '</div>' +
                    '<div class="area_conversion">' +
                        '<span style="color:#000; font-size: 12px;">' + location.square_feats +'('+location.area_type +')'+ '</span>' +
                        '<image style="margin-left:1px;width: 20px;height: 20px;" src="/npls/images/kanal.png"/>' +
                        '</div>'+
                    '</div>' +
                    '<div style="margin-top:10px;margin-bottom: 10px;line-height: 1">' +
                    '<small style="color: #505050;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">' + location.address    + '</small>' +
                    '</div>' +
                    '</div>' +
                    '</a>' +
                    '</div>' +
                    '</div>';

                listingData(location);
            })

            mySwiper = new Swiper('.swiper-container', {
                // If we need pagination
                pagination: {
                    clickable: true,
                },
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            })

            mySwiper.on('slideChange', function () {
                $('.listing_index').text(mySwiper.activeIndex + 1);
            });
        })

        const map = new google.maps.Map(document.getElementById("gmap"), {
            zoom: 10,
            gestureHandling: "greedy",
            styles: [
                {
                    "featureType": "poi",
                    "stylers": [
                        {"visibility": "off"}
                    ]
                }
            ],
            center: {lat: listings[0].latitude, lng: listings[0].longitude},
        });

        const centerControlDiv = document.createElement("div");
        schoolControl(centerControlDiv, map);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(centerControlDiv);

        const markers = listings.map((location, i) => {

            var obj = {lat: location.latitude, lng: location.longitude};

            var marker = new google.maps.Marker({
                position: obj,
                icon: {
                    url: "/npls/images/green-map-marker.png"
                }
            });

            google.maps.event.addListener(marker, 'click', function (e) {
                $('#listing_data').css({'z-index': '9999999'});
                mySwiper.slideTo(i, 200, true)
                $('.listing_index').text(i + 1);
            });
            return marker;
        });

        new MarkerClusterer(map, markers, {
            imagePath:
                "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
        });

        //searching code
        var path = "{{ route('search.suggestion') }}";
        $('input.typeahead').typeahead({
            source: function (query, process) {
                return $.get(path, {query: query}, function (data) {
                    return process(data);
                });
            }
        })

        function listingData(location) {

            var html =
                '<div class="swiper-container" style="width: 100%;height: 100%;">' +
                '<div class="swiper-wrapper">' +
                sliderCard +
                '</div>' +
                '<div class="swiper-pagination" style="position: absolute;top: 10px;right: 10px;width: auto !important;left: auto !important;margin: 0;"></div>' +
                '<div class="row" style="width: 100%;background: #f2f2f2;margin: 0;height: 35px;" >' +
                '<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  >' +
                '<div class="swiper-button-prev" style="height: 20px;margin-top: -6px !important;"></div>' +
                '<p style="margin: 0;text-align: center">' +
                '<span class="listing_index" ></span>' +
                '/' + '{{ $listing_count }}' + '</p>' +
                '<div class="swiper-button-next" style="height: 20px;margin-top: -6px !important;"></div>' +
                '</div>' +
                '</div>' +
                '</div>';

            $('#listing_data').html(html);
        }

        $('body').on('click', '#cross', function () {
            $('#listing_data').css({'z-index': '-9999999'});
        })

        //submit data
        $("#search_Button").click(function () {
            $('#bath').val($('#bath_rooms').val());
            $('#rooms').val($('#bed_rooms').val());
            $('#areas').val($('#area').val());
            $('#price_range').val($('#amount').val());
            $('#category').val($('#category_type').val());
            $('#purpose').val($('#select_purpose').val());
            $('#date_range').val($('#dateRange').val());
            $('#form_submit').click();
        })

        //date input script
        $('#dateRange').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('#dateRange').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + '/' + picker.endDate.format('YYYY-MM-DD'));
        });

        $('#dateRange').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });

        $('body').on('change', '#soryByFilter', function () {
            $('#sortBy').val($(this).val())
            $('#search_Button').click();
        })

        // const triangleCoords = [
        //     { lat: 25.774, lng: -80.19 },
        //     { lat: 18.466, lng: -66.118 },
        //     { lat: 32.321, lng: -64.757 },
        //     { lat: 25.774, lng: -80.19 },
        // ];

        // const triangleCoords = `7.41338348388666,43.734588623047
        //                         7.43630027771002,43.750888824463
        //                         7.43923950195318,43.7490272521972
        //                         7.43958282470709,43.7492141723633
        //                         7.43958187103277,43.7481956481934
        //                         7.4145817756654,43.7240295410157
        //                         7.41430711746216,43.7240295410157
        //                         7.41430711746216,43.7243041992189
        //                         7.41365289688116,43.7243041992189
        //                         7.41562128067011,43.7257347106935
        //                         7.40952730178844,43.729866027832
        //                         7.4128274917602,43.7317237854004
        //                         7.41338348388666,43.734588623047`;

        // var coordinates = buildCoordinatesArrayFromString(triangleCoords);
        //
        // console.log(coordinates)
        //
        // const bermudaTriangle = new google.maps.Polygon({
        //     paths: coordinates,
        //     strokeColor: "#FF0000",
        //     strokeOpacity: 0.8,
        //     strokeWeight: 2,
        //     fillColor: "#FF0000",
        //     fillOpacity: 0.35,
        // });
        // bermudaTriangle.setMap(map);

        {{--function buildCoordinatesArrayFromString(MultiGeometryCoordinates) {--}}
        {{--    var finalData = [];--}}
        {{--    var grouped = MultiGeometryCoordinates.split("\n");--}}

        {{--    grouped.forEach(function (item, i) {--}}
        {{--        let a = item.trim().split(',');--}}

        {{--        finalData.push({--}}
        {{--            lat: parseFloat(a[0]),--}}
        {{--            lng: parseFloat(a[1])--}}
        {{--        });--}}
        {{--    });--}}

        {{--    return finalData;--}}
        {{--}--}}

        {{--var ctaLayer = new google.maps.KmlLayer({--}}
        {{--    url: '{{ asset("/npls/gadm36_PAK_3.kml") }}',--}}
        {{--    map: map--}}
        {{--});--}}

        // $('#search-form').on('submit', function (e) {
        //     console.log($('#bath_rooms').val())
        //     e.preventDefault();
        //     var data = new $(this).serializeArray();
        //     data.push(
        //         {name: $('#bath_rooms').attr('name'), value: $('#bath_rooms').val()},
        //         {name: $('#bed_rooms').attr('name'), value: $('#bed_rooms').val()},
        //         {name: $('#area').attr('name'), value: $('#area').val()},
        //         {name: $('#slider-range').attr('name'), value: $('#slider-range').val()},
        //     )

        {{--    $.ajax({--}}
        {{--        url: '{{ route("home.search") }}',--}}
        {{--        method: 'get',--}}
        {{--        data: data,--}}
        {{--        success: function (response) {--}}
        {{--            console.log(response)--}}
        {{--        },--}}
        {{--        error: function (error) {--}}
        {{--            console.log(error);--}}
        {{--        }--}}
        {{--    })--}}
        {{--});--}}

    </script>
@endsection
