@extends("npls.layouts.master")
@section("page-title"," Agent Details")
@section("main-content")
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1>Agent Details</h1>
                        <ul>
                            <li> <a href="index.html">Home</a> </li>
                            <li> Agent Details </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
    <!-- Agent Details Area Start Here -->
    <div class="agent-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="single-agent">
                        <div class="images" style="padding: 0%;border:none;">
                            <div class="image-frame" style="height:100%;width:100%;">
                                <img src="{{asset($agent->image ?'users/' . $agent->image: 'images/default.jpg')}}" alt="" style="height: 100%;width:100%;">
                            </div>
                            <a class="fancybox" href="{{asset($agent->image ?'users/' . $agent->image: 'images/default.jpg')}}" data-fancybox-group="gallery" title="{{$agent->image}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                        <div class="agent-details">
                            <h3> <a href="agent-details.html">{{$agent->name}}</a></h3>
                            <span>Role,
                                @foreach ($agent->getRoleNames() as $roleName)
                                {{ $roleName }}
                                @endforeach
                            </span>
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="address-area">
                        <h4>Agent Address </h4>
                        <p>Effectivity Real Estate, Wardrobe Street 94410, London, United Kingdom</p>
                    </div> --}}
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="agent-details">
                        <h3>{{$agent->name}}</h3>
                        <span>Role,
                            @foreach ($agent->getRoleNames() as $roleName )
                            {{$roleName}}
                            @endforeach
                        </span>
                        <p>{!!$agent->description!!}</p>
                    </div>
                    {{-- <div class="contact-form">
                        <h3>Send Us Message</h3>
                        <div class="main-contact-form">
                            <form>
                                <fieldset>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail*">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="You Phone*">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="textarea form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group acurate">
                                            <a class="button btn btn-danger btn-lg">Send Message</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="agent-contact-area">
                        <h3>Contact Me</h3>
                        <div class="contact-list">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> {{$agent->phone}}</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$agent->email}} </li>
                            </ul>
                        </div>
                        {{-- <div class="best-agent">
                            <h3>Best Agent</h3>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="images/agent/a1.jpg" class="media-object" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="agent-details.html">Caelan Sinclair</a></h4>
                                            <p>E-mail Address <br/> 1401-123-456</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="images/agent/a2.jpg" class="media-object" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="agent-details.html">Jasica Doron</a></h4>
                                            <p>E-mail Address <br/> 5201-109-016</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
                    <div class="search-from">
                        <h3><b>Properties</b> </h3>
                        {{-- <form>
                            <fieldset>
                                <div class="col-sm-11 acurate">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" Enter search e.g. street, city, states or zip ">
                                    </div>
                                </div>
                                <div class="col-sm-1 acurate">
                                    <div class="form-group">
                                        <button class="btn-send" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </fieldset>
                        </form> --}}
                    </div>
                    <div class="row acurate search-property-show">
                      @if (!$agent->listing->isEmpty())
                      @foreach ($agent->listing as $list )
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <div class="single-property">
                              <div class="images">
                                <img src="{{asset($list->thumbnail)}}" alt="" style="height: 230px;width:270px;">
                                  <div class="icons-area">
                                      <ul>
                                          <li><a class="fancybox" href="{{asset($list->thumbnail)}}" data-fancybox-group="gallery" title="Image Name Here"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                      </ul>
                                  </div>
                                  <span>Sale</span>
                              </div>
                              <div class="property-details">
                                  <h3><a href="property-details.html">
                                      {{$list->name}}
                                  <img src="images/property/star.png" alt=""></a></h3>
                                  <p>${{$list->price}}</p>
                                  <span><i class="fa fa-map-marker"></i> {{$list->address}}</span>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      @else
                      <div class="col-12 text-center">
                        No Properties...
                      </div>
                      @endif

                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="property-filtering">
                        <h2>Property Filtering</h2>
                        <form>
                            <div class="form-fields">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="single-field">
                                        <p>Max Of Bedrooms</p>
                                        <div class="input-box">
                                            <select>
                                                <option value="" selected="selected">Select Bedrooms</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="single-field">
                                        <p>Max Of Bathrooms</p>
                                        <div class="input-box">
                                            <select>
                                                <option value="" selected="selected">Select Bathrooms</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="single-field">
                                        <p>Min Area(Sqft)</p>
                                        <div class="input-box">
                                            <select>
                                                <option value="" selected="selected">Select Min Area</option>
                                                <option value="">100 Sqft</option>
                                                <option value="">150 Sqft</option>
                                                <option value="">200 Sqft</option>
                                                <option value="">250 Sqft</option>
                                                <option value="">300 Sqft</option>
                                                <option value="">350 Sqft</option>
                                                <option value="">400 Sqft</option>
                                                <option value="">450 Sqft</option>
                                                <option value="">500 Sqft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="single-field">
                                        <p>Max Area(Sqft)</p>
                                        <div class="input-box">
                                            <select>
                                                <option value="" selected="selected">Select Max Area</option>
                                                <option value="">200 Sqft</option>
                                                <option value="">250 Sqft</option>
                                                <option value="">300 Sqft</option>
                                                <option value="">350 Sqft</option>
                                                <option value="">400 Sqft</option>
                                                <option value="">450 Sqft</option>
                                                <option value="">500 Sqft</option>
                                                <option value="">550 Sqft</option>
                                                <option value="">600 Sqft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="single-field">
                                        <p>Property Type</p>
                                        <div class="input-box">
                                            <select>
                                                <option value="" selected="selected">Select Property Type</option>
                                                <option value="">Apartment</option>
                                                <option value="">Flat</option>
                                                <option value="">House</option>
                                                <option value="">Condominium</option>
                                                <option value="">Cottage</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="single-field">
                                        <p>Room Type</p>
                                        <div class="input-box">
                                            <select>
                                                <option value="" selected="selected">Select Room Type</option>
                                                <option value="">Single Room</option>
                                                <option value="">Double Room</option>
                                                <option value="">Deluxe Single Room</option>
                                                <option value="">Deluxe Double Room</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <!-- shop-filter start -->
                                    <div class="single-field">
                                        <p>Priceing Range</p>
                                        <div id="slider-range"></div>
                                        <div class="price-area">
                                            <input type="text" id="amount">
                                        </div>
                                    </div>
                                    <!-- shop-filter end -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                                    <div class="read-more">
                                        <a class="button btn btn-danger btn-lg">Find Property</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

@endsection
