@section('page_title', 'Edit Property')

@extends('second-admin.layouts.master')
@section('quillStyle')

        <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/css/plugins/extensions/ext-component-ratings.css")}}">


@endsection
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
                                    <h4 class="card-title">Edit Property</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post" action="{{route('property.update',$property->id)}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">Title <span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="title" value="{{$property->title}}" placeholder=" title" />
                                                        @error("title")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">Town Name <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="town_id" id="">
                                                            <option selected disabled value="">Select Town Name</option>
                                                            @foreach($towns as $town)
                                                                <option  value="{{$town->id}}"
                                                                         @if($property->town_id == $town->id )
                                                                             selected
                                                                         @endif
                                                                >{{$town->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">Min Price<span class="text-danger">*</span></label>
                                                        <input type="number" id="first-name" class="form-control"
                                                               name="min_price" value="{{$property->min_price}}" placeholder=" " />
                                                        @error("min_price")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label" for="first-name">Max Price <span class="text-danger">*</span></label>
                                                        <input type="number" id="first-name" class="form-control"
                                                               name="max_price" value="{{$property->max_price}}" placeholder=" " />
                                                        @error("max_price")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 ">
                                                        <label class="col-form-label" for="first-name">Number of Floors</label>
                                                        <input type="number" id="first-name" class="form-control"
                                                               name="no_of_floors" value="{{$property->no_of_floors}}" placeholder=" " />
                                                        @error("no_of_floors")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label" for="first-name">Radius<span class="text-danger">*</span></label>
                                                        <input type="number" id="first-name"  class="form-control"
                                                               name="radius" value="{{$property->radius}}" placeholder=" " />
                                                        @error("radius")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-sm-6 ">
                                                        <div class="form-group">
                                                            <label class="col-form-label" for="first-name">Category Name <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="category_id" id="">
                                                                <option selected disabled value="">Select Category Name</option>
                                                                @foreach($categories as $category)
                                                                    <option  value="{{$category->id}}"
                                                                             @if($property->category_id == $category->id )
                                                                             selected
                                                                             @endif
                                                                    >{{$category->name}}</option>

                                                                @endforeach
                                                            </select>
                                                            @error("category_id")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-form-label" for="first-name">Project Name<span class="text-danger">*</span></label>
                                                            <select class="form-control select2" name="project_ids[]" multiple="multiple" id="">
                                                                @foreach($projects as $project)
                                                                    <option  value="{{$project->id}}" {{ in_array($project->id, $property->projects->pluck('id')->toArray()) ? 'selected' : '' }}>{{$project->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error("project_ids")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="first-name">Description</label>
                                                        <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$property->description}}</textarea>
                                                        @error("description")
                                                        <span class="text-danger" style="text-align: right">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 ">
                                                <label class="col-form-label" for="first-name">Admin Name<span class="text-danger">*</span></label>
                                                <select class="form-control" name="created_by" id="">
                                                    <option selected disabled value="">Select Admin Name</option>
                                                    @foreach($admins as $admin)
                                                        <option  value="{{$admin->id}}"
                                                                 @if($admin->id == $property->created_by)
                                                                 selected
                                                            @endif
                                                        >{{$admin->name}}</option>


                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="card-header">
                                                <h4 class="card-title">Address</h4>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 col-form-label">
                                                        <label for="first-name">Address 1 <span class="text-danger">*</span></label>
                                                        <input type="text" id="search_address" class="form-control"
                                                               name="address_line_1" value="{{$property->address_line_1}}" placeholder=" " />
                                                        @error("address_line_1")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
{{--                                                    <div class="col-sm-6">--}}
{{--                                                        <label for="first-name">Address 2</label>--}}
{{--                                                        <input type="text" id="first-name" class="form-control"--}}
{{--                                                               name="address_line_2" value="{{$property->address_line_2}}" placeholder=" " />--}}
{{--                                                        @error("address_line_2")--}}
{{--                                                        <span class="text-danger">{{ $message }}</span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">

                                                    <div class="col-12">
                                                        <div class="form-group row">

                                                            <input type="hidden" id="lat" class="form-control"
                                                                   name="latitude" value="{{ $property->latitude }}"/>
                                                            <input type="hidden" id="lng" class="form-control"
                                                                   name="longitude" value="{{ $property->longitude }}"/>

                                                            @error("latitude")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            @error("longitude")
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                            <div class="col-sm-12 w-100" style="height: 350px;"
                                                                 id="selectLocation"></div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Property</button>
                                                <a href="{{route('property.list')}}" class="btn btn-outline-secondary">Back</a>
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

    {{--        <script src="{{asset("second-admin/app-assets/js/scripts/forms/form-quill-editor.js")}}"></script>--}}
    <!-- END: Page JS-->

    <script src="{{asset('admin')}}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            CKEDITOR.replace('.ckeditor')
        })
    </script>

    <script src="{{asset("second-admin/app-assets/js/scripts/extensions/ext-component-ratings.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/js/scripts/components/components-modals.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/js/scripts/forms/form-repeater.js")}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECkWZvW5uvOMrXXHaYUUdDQj-Od-jEts&libraries=places&v=3&sensor=false"></script>
    <script src="{{asset('admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script>
            $(function () {
                $('.select2').select2({
                    placeholder: 'Select'
                })
            })
        </script>
    <script>
        //Set up some of our variables.
        var map; //Will contain map object.
        var marker = false; ////Has the user plotted their location marker?

        //Function called to initialize / create the map.
        //This is called when the page has loaded.
        function initMap() {

            //The center location of our map.
            var centerOfMap = new google.maps.LatLng('{{ $property->latitude }}', '{{ $property->longitude }}');

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

            marker = new google.maps.Marker({
                map,
                // icon,
                position: centerOfMap,
                draggable: true,
            });

            markers.push(marker);

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
                // marker.setMap(null);

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

            google.maps.event.addListener(marker, 'dragend', function (event) {
                markerLocation();
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

