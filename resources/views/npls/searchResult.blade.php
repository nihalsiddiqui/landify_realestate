@extends("npls.layouts.master")
@section("page-title", "Search Page")
@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <style>
        .favourite-heart img:hover {
            cursor: pointer;
        }
    </style>

@endsection
@section("main-content")
    <div class="bs-example row" style="margin:0;background: #F2F2F2;    padding: 12px;">

        @if($message)
            <div class="alert alert-danger text-center" role="alert">{!! $message !!}</div>
        @endif

        <form id="search-form" class="col-md-offset-2 col-lg-offset-2" method="get" action="{{route('home.search')}}">
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
                                <input type="search" style="text-transform: uppercase;border-radius: 25px;" id="search"
                                       name="search_query"
                                       class="form-control typeahead " autocomplete="off"
                                       placeholder="City, Town or Npls number...." aria-label="..."
                                       value="{{ Request::get('search_query') }}">
                                            <span class="input-group-btn">
                                                <span id="search_Button" class="btn btn-lg form-control"
                                                        style="background: #46BFE2;border-radius: 50%;height: 50px;width: 50px;padding: 0;padding-top: 5px;">
                                                    <i class="fa fa-search" style="color: white;margin-top: 8px;"></i>
                                                </span>
                                                <input type="submit" hidden name="" id="form_submit">
                                            </span>

                                <a class="button form-control"
                                   style="width: 50px !important;height: 50px !important;border-radius: 50%;margin:0 !important;padding: 10px;margin-left: 50px"
                                   data-toggle="modal" data-target="#myModal">
                                    <img style="" src="{{asset("images/filter.svg")}}" alt="">
                                </a>
                            </div>

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
                            <div id="square_feats" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single-field">
                                    <p style="margin: 0">Property Type</p>
                                    <div class="input-box">
                                        <select name="Property" id="property_type">
                                            <option value="any" {{ (Request::get('category') === 'any') ? 'selected' : '' }}>Any</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{ (Request::get('category') == $category->id) ? 'selected' : '' }}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="purpose" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single-field">
                                    <p style="margin: 0">Listing Type</p>
                                    <div class="input-box">
                                        <select id="select_purpose">
                                            <option selected="selected" disabled>Select Listing Type</option>
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
                            <div id="baths" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single-field">
                                    <p style="margin: 0">Number of Baths</p>
                                    <div class="input-box">
                                        <select name="baths" id="bath_rooms">
                                            <option value="0" selected="selected" disabled>Number of Baths
                                            </option>
                                            <option value="1" {{ (Request::get('bath') === '1') ? 'selected' : '' }}>1
                                            </option>
                                            <option value="2" {{ (Request::get('bath') === '2') ? 'selected' : '' }}>2
                                            </option>
                                            <option value="3" {{ (Request::get('bath') === '3') ? 'selected' : '' }}>3
                                            </option>
                                            <option value="4" {{ (Request::get('bath') === '4') ? 'selected' : '' }}>4
                                            </option>
                                        </select>
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
                                            <option value="1" {{ (Request::get('rooms') === '1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Request::get('rooms') === '2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                            <option value="3" {{ (Request::get('rooms') === '3') ? 'selected' : '' }}>
                                                3
                                            </option>
                                            <option value="4" {{ (Request::get('rooms') === '4') ? 'selected' : '' }}>
                                                4
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="square_feats" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single-field">
                                    <p style="margin: 0">Area</p>
                                    <div class="input-box">
                                        <select id="area">
                                            <option selected="selected" disabled>Select Area</option>
                                            <option value="1-2" {{ (Request::get('area') === '1-2') ? 'selected' : '' }}>1 - 2 Acres</option>
                                            <option value="2-5" {{ (Request::get('area') === '2-5') ? 'selected' : '' }}>2 - 5 Acres</option>
                                            <option value="5-10" {{ (Request::get('area') === '5-10') ? 'selected' : '' }}>5 - 10 Acres</option>
                                            <option value="10-50" {{ (Request::get('area') === '10-50') ? 'selected' : '' }}>10 - 50 Acres</option>
                                            <option value="50-100" {{ (Request::get('area') === '50-100') ? 'selected' : '' }}>50 - 100 Acres</option>
                                            <option value="100-200" {{ (Request::get('area') === '100-200') ? 'selected' : '' }}>100 - 200 Acres</option>
                                            <option value="200-300" {{ (Request::get('area') === '200-300') ? 'selected' : '' }}>200 - 300 Acres</option>
                                            <option value="300-400" {{ (Request::get('area') === '300-400') ? 'selected' : '' }}>300 - 400 Acres</option>
                                            <option value="400-500" {{ (Request::get('area') === '400-500') ? 'selected' : '' }}>400 - 500 Acres</option>
                                            <option value="500-1000" {{ (Request::get('area') === '500-1000') ? 'selected' : '' }}>500 - 1000 Acres</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="listed_since" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single-field">
                                    <p style="margin: 0">Listed since</p>
                                    <div class="input-box">
                                        <input style="padding: 10px 15px;border: solid 1px #e8e8e8;" type="text"
                                               id="dateRange" name="daterange"
                                               value="{{ Request::get('date_range') }}"/>
                                    </div>
                                </div>
                            </div>
                            <div id="price_range" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                           style="margin-top: 20px;float: right;font-size: 17px" data-toggle="modal"
                           data-target="#myModal">Ok </a>
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
        <div class="card col-lg-3 col-md-3 col-sm-3 col-xs-12" style="max-width: 500px;padding: 0;">
            <div style="background-color: #F2F2F2;padding: 10px;">
                <div style="width: 90%;margin: auto;">
                    <div style="">
                        <label for="">Results: {{ $listing_count }} Listings</label>
                    </div>
                    <hr style="padding: 0;margin-top: 8px;margin-bottom: 8px;border-color: #E6E6E6;">
                    <div style="display: flex;flex-flow: row;justify-content: space-between;align-content: center;">
                        <label style="width: 30%;align-self: center;">Sort By:</label>
                        <select id="soryByFilter">
                            <option value="newest" {{ (Request::get('sort_by') === 'newest') ? 'selected' : '' }}>
                                Newest
                            </option>
                            <option value="oldest" {{ (Request::get('sort_by') === 'oldest') ? 'selected' : '' }}>
                                Oldest
                            </option>
                            <option
                                value="lower_price" {{ (Request::get('sort_by') === 'lower_price') ? 'selected' : '' }}>
                                Lower Price
                            </option>
                            <option
                                value="higher_price" {{ (Request::get('sort_by') === 'higher_price') ? 'selected' : '' }}>
                                Higher Price
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="scroll"
                 style="max-height: 442px;overflow-y: scroll;overflow-x: hidden;margin-top: 15px;margin-left: 20px;">
                @php
                    $heartImage = 'blank-heart.png';
                    $favListings = null;

                    if(isset($_COOKIE['favourite_listings'])) {
                        $favListings = json_decode($_COOKIE['favourite_listings']);
                    }
                @endphp

                @foreach($listings_paginate as $listing)

                    @php
                        if ($favListings) {
                            if(!(in_array($listing->id, $favListings))) {
                                $heartImage = 'blank-heart.png';
                            } else {
                                $heartImage = 'heart.png';
                            }
                        }
                    @endphp
                        <div style="justify-content: space-between;display:flex;flex-flow:row;">
                            <div>
                                @if ($listing->registry === 'yes')
                                    <img src="/npls/images/registry_check.png" alt="" style="width:40px; height:40px;">
                                    @elseif ($listing->registry === 'no')
                                    <img src="/npls/images/registry_no.jpg" style="width:40px; height:40px;" alt="">
                                    @else
                                    <img src="/npls/images/registry_under_process.jpg" style="width:40px; height:40px;" alt="">
                                    @endif

                                    <label for="registry" style="margin-left: 5px;"><b>Registry: {{$listing->registry}}</b></label>
                            </div>
                            <div class="favourite-heart"  data-id="{{ $listing->id }}" style="margin-right:10px;margin-bottom: 5px;justify-content:space-between">

                                 <image width="40" src="/npls/images/{{ $heartImage }}"/>
                            </div>
                        </div>

                    <a href="{{ route("listing.details", ['slug' => $listing->slug]) }}" style="color: #000">
                        <div class="row no-gutters">

                            <div class="col-sm-4" style="padding: 0;">
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
                            <div class="col-sm-8" style="padding-left: 5px;">
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
                        <p style="margin: 0;color: #7B7B7C;font-size: 12px;"><label>By: </label> {{$listing->admin ? $listing->admin->name : $listing->user->name }}</p>
                    </a>
                    <hr style="margin-bottom: 10px;margin-top: 0px;">
                @endforeach
            </div>
            <div style="display: flex; justify-content: center;align-content: center">
                {{ $listings_paginate->links('vendor.pagination.default') }}
            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12" id="gmap" style="height: 47rem;padding: 0"></div>
    </div>

@endsection
@section("script")
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts&sensor=false&libraries=drawing"></script>
    <script src="{{ asset("npls/js/gmaps.js") }}"></script>
    <script src="https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script>
        var listings = JSON.parse('{!! $listings !!}');

        if (!Array.isArray(listings)) {
            let obj = listings[Object.keys(listings)[0]];
            listings = [obj];
        }

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

                infowindow.open(map, marker);
            });

            return marker;
        });

        new MarkerClusterer(map, markers, {
            imagePath:
                "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
        });

        $('#property_type').on('change', function () {
            let value = $(this).find(":selected").text();

            // purpose
            // baths
            // beds
            // square_feats
            // listed_since
            // price_range

            if(value === 'Any' || value === 'commercial' || value === 'residential') {
                $('#baths').show();
                $('#beds').show();
            } else if(value === 'agriculture') {
                $('#baths').hide();
                $('#beds').hide();
            }
        })

        //submit data
        $("#search_Button").click(function () {
            console.log($('#area').val())
            $('#bath').val($('#bath_rooms').val());
            $('#rooms').val($('#bed_rooms').val());
            $('#areas').val($('#area').val());
            $('#price_range').val($('#amount').val());
            $('#category').val($('#property_type').val());
            $('#purpose').val($('#select_purpose').val());
            $('#date_range').val($('#dateRange').val());
            $('#form_submit').click();
        })

        //searching code
        var path = "{{ route('search.suggestion') }}";
        $('input.typeahead').typeahead({
            source: function (query, process) {

                return $.get(path, {query: query}, function (data) {
                    return process(data);
                });
            }
        });

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

    </script>
@endsection
