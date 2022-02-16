@extends("npls.layouts.master")
@section("page-title","Single Blog")
@section("main-content")
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> Blog</h1>
                        <ul>
                            <li> <a href="index.html">Home</a> </li>
                            <li> Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
 <!-- Blog Page Start Here -->
 <div class="blog-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog-area">
                    <div class="blog-image">
                        <a href="single-blog.html"><img src="{{asset($singlepost->image ?'images/posts/' . $singlepost->image: 'images/default.jpg')}}" alt="" style="height: 600px;width:100%;"></a>
                        <div class="overley"></div>
                    </div>
                    <div class="blog-details">
                        <h3>Realestate Post</h3>
                        <div class="blog-info">
                            <ul>
                                <li><i class="fa fa-user" aria-hidden="true"></i> {{$singlepost->title}}</li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$singlepost->created_at}}</li>
                            </ul>
                        </div>
                        <p>{!!$singlepost->body!!}</p>
                    </div>
                    {{-- <div class="comments-area">
                      <h3>COMMENTS (5)</h3>
                      <div class="single-comments-box">
                        <div class="media">
                          <a class="pull-left" href="#">
                            <img src="images/blog/author.png" alt="image">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Robert Hook</h4>
                            <span>5 mins ago</span>
                            <div class="reply">reply</div>
                            <p>Cras gravida arcu tincidunt, suscipit velit sed, porta sapien. Maecenas a aliquam lectus. Vivamus consequat purus quis ligula vestibulum, eget mattis ex fermentum. Donec placerat felis sit amet venenatis faucibus. Praesent aliquet convallis.</p>
                          </div>
                        </div>
                      </div>
                      <div class="single-comments-box second-comments">
                        <div class="media">
                          <a class="pull-left" href="#">
                            <img src="images/blog/author1.png" alt="image">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">David Warn</h4>
                            <span>2 mins ago</span>
                            <div class="reply">reply</div>
                            <p>Cras gravida arcu tincidunt, suscipit velit sed, porta sapien. Maecenas a aliquam lectus. Vivamus consequat purus quis ligula vestibulum, eget mattis ex fermentum. Donec placerat felis sit amet venenatis faucibus. Praesent aliquet convallis.</p>
                          </div>
                        </div>
                      </div>
                      <div class="single-comments-box">
                        <div class="media">
                          <a class="pull-left" href="#">
                            <img src="images/blog/author2.png" alt="image">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Teem Southee</h4>
                            <span>5 mins ago</span>
                            <div class="reply">reply</div>
                            <p>Cras gravida arcu tincidunt, suscipit velit sed, porta sapien. Maecenas a aliquam lectus. Vivamus consequat purus quis ligula vestibulum, eget mattis ex fermentum. Donec placerat felis sit amet venenatis faucibus. Praesent aliquet convallis.</p>
                          </div>
                        </div>
                      </div>
                      <div class="single-comments-box second-comments">
                        <div class="media">
                          <a class="pull-left" href="#">
                            <img src="images/blog/author1.png" alt="image">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Bravan</h4>
                            <span>9 mins ago</span>
                            <div class="reply">reply</div>
                            <p>Cras gravida arcu tincidunt, suscipit velit sed, porta sapien. Maecenas a aliquam lectus. Vivamus consequat purus quis ligula vestibulum, eget mattis ex fermentum. Donec placerat felis sit amet venenatis faucibus. Praesent aliquet convallis.</p>
                          </div>
                        </div>
                      </div>
                      <div class="single-comments-box second-comments">
                        <div class="media">
                          <a class="pull-left" href="#">
                            <img src="images/blog/author.png" alt="image">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Steve</h4>
                            <span>5 mins ago</span>
                            <div class="reply">reply</div>
                            <p>Cras gravida arcu tincidunt, suscipit velit sed, porta sapien. Maecenas a aliquam lectus. Vivamus consequat purus quis ligula vestibulum, eget mattis ex fermentum. Donec placerat felis sit amet venenatis faucibus. Praesent aliquet convallis.</p>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar-area">
                    <div class="widget">
                        <h2 class="widget-title">Search Property</h2>
                        <div class="property-filtering">
                            <form>
                                <div class="form-fields">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="read-more">
                                            <a class="button btn btn-danger btn-lg">Find Property</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget widget_categories">
                      <h2 class="widget-title">Category</h2>
                      <ul>
                        <li><a href="#">Real Estate   <span class="count">(10)</span></a></li>
                        <li><a href="#">Building Sale    <span class="count">(09)</span></a></li>
                        <li><a href="#">Realestate Flat    <span class="count">(17)</span></a></li>
                        <li><a href="#">Flat Rent <span class="count">(31)</span></a></li>
                      </ul>
                    </div>
                    <div class="widget">
                        <h2>Feature Property</h2>
                        <div class="media single-post">
                            <div class="pull-left">
                                <a href="property-details.html">
                                   <img class="media-object" src="images/property/01.jpg" alt="post">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="posted-date">
                                    <a href="property-details.html">Masons Villas <img src="images/property/star.png" alt=""></a>
                                    <p>$550,000</p>
                                    <span><i class="fa fa-map-marker"></i> Australia / South Vellly</span>
                                </div>
                            </div>
                        </div>
                        <div class="media single-post">
                            <div class="pull-left">
                                <a href="property-details.html">
                                    <img class="media-object" src="images/property/02.jpg" alt="post">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="posted-date">
                                    <a href="property-details.html">Masons Villas  <img src="images/property/star.png" alt=""></a>
                                    <p>$820,000</p>
                                    <span><i class="fa fa-map-marker"></i> USA / Rock Vellly</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h2 class="widget-title">Tags</h2>
                        <div class="popular-tags">
                            <ul>
                                <li><a href="single-blog.html">Flat</a></li>
                                <li><a href="single-blog.html">Realestate</a></li>
                                <li><a href="single-blog.html">Building</a></li>
                                <li><a href="single-blog.html">Corporate</a></li>
                                <li><a href="single-blog.html">Rent</a></li>
                                <li><a href="single-blog.html">Office</a></li>
                                <li><a href="single-blog.html">House</a></li>
                                <li><a href="single-blog.html">Agent</a></li>
                                <li><a href="single-blog.html">Help</a></li>
                                <li><a href="single-blog.html">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Blog Page End Here -->
@endsection
