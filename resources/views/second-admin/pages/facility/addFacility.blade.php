@section('page_title', 'Add Facility')

@extends('second-admin.layouts.master')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Facility</h4>
                                </div>
                                @if(Session::has('message'))
                                    <div class="alert alert-danger text-center" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data"
                                          action="{{route('facility.store')}}" class="form form-horizontal">
                                        {{{csrf_field()}}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Type <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="search_address" class="form-control"
                                                               name="type" placeholder="Type"/>
                                                        @error('type')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Slug <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="slug" class="form-control"
                                                               name="slug" placeholder=" Slug"/>
                                                        @error('slug')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                            <div class="col-12">--}}
                                            {{--                                                <div class="form-group row">--}}

                                            {{--                                                    <input type="hidden" id="lat" class="form-control"--}}
                                            {{--                                                           name="latitude" value="{{ old('latitude') }}"/>--}}
                                            {{--                                                    <input type="hidden" id="lng" class="form-control"--}}
                                            {{--                                                           name="longitude" value="{{ old('longitude') }}"/>--}}

                                            {{--                                                    @error("latitude")--}}
                                            {{--                                                    <span class="text-danger">{{ $message }}</span>--}}
                                            {{--                                                    @enderror--}}
                                            {{--                                                    @error("longitude")--}}
                                            {{--                                                    <span class="text-danger">{{ $message }}</span>--}}
                                            {{--                                                    @enderror--}}

                                            {{--                                                    <div class="col-sm-12 w-100" style="height: 350px;"--}}
                                            {{--                                                         id="selectLocation"></div>--}}

                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Add Facility</button>
                                                <a href="{{route('facility.list')}}" class="btn btn-outline-secondary">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('quillJs')
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts&libraries=places&v=3&sensor=false"></script>

    <script>
        //Set up some of our variables.
        var map; //Will contain map object.
        var marker = false; ////Has the user plotted their location marker?

        //Function called to initialize / create the map.
        //This is called when the page has loaded.
        function initMap() {

            //The center location of our map.
            var centerOfMap = new google.maps.LatLng(31.520370, 74.358749);

            //Map options.
            var options = {
                gestureHandling: "greedy",
                center: centerOfMap, //Set center.
                zoom: 7 //The zoom value.
            };

            //Create the map object.
            map = new google.maps.Map(document.getElementById('selectLocation'), options);

            const input = document.getElementById('search_address');
            const searchBox = new google.maps.places.SearchBox(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    marker = new google.maps.Marker({
                        map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                        draggable: true,
                    });

                    markers.push(marker);

                    markerLocation();
                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        markerLocation();
                    });

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

        //This function will get the marker's current location and then add the lat/long
        //values to our textfields so that we can save the location.
        function markerLocation() {
            //Get location.
            var currentLocation = marker.getPosition();
            //Add lat and lng values to a field that we can save.
            document.getElementById('lat').value = currentLocation.lat(); //latitude
            document.getElementById('lng').value = currentLocation.lng(); //longitude
        }

        //Load the map when the page has finished loading.
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
@endsection
