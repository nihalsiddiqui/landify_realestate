@extends("npls.layouts.master")
@section("page-title","NPLS Homes | Agent")
@section("main-content")
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> Find Property</h1>
                        <ul>
                            <li> <a href="index.html">Home</a> </li>
                            <li> Property</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
    <!-- find property Page Start Here -->
    <div class="find-property-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="inner-content-area">
                        <div class="title">
                            <h2>Find Your <strong>Dream Home</strong> Here</h2>
                        </div>
                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="share-deals">
                            <h2>share your deals.</h2>
                            <div class="deal-form-area">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">House</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Office</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Apartment</a></li>
                                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Residential</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Room Name</label>
                                                        <input type="input" class="form-control" placeholder="Office/House/Flat/Rent/Sale">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Min Area</label>
                                                        <input type="input" class="form-control" placeholder="Min Area">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Max Area</label>
                                                        <input type="input" class="form-control" placeholder="Max Area">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-control select-box">
                                                            <option>Australia</option>
                                                            <option>Pakisthan</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Min Price</label>
                                                        <input type="input" class="form-control" placeholder="Min Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Max Price</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Max Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <p>Facilities  &nbsp; &nbsp;  &nbsp; <img src="images/wifi.png" alt=""> <img src="images/plus.png" alt="">     </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li>Property Type</li>
                                                            <li><input type="input" class="form-control" placeholder="AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Non AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Casual"></li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tags</label>
                                                        <input type="input" class="form-control" placeholder="Type Category">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Tag Name</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Office">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <div class="form-group mt-3">
                                                        <ul>
                                                            <li class="big">Attached Sample</li>
                                                            <li>
                                                                <div class="upload-btn-wrapper">
                                                                    <button class="btn"><img src="images/link.png" alt=""></button>
                                                                    <input type="file" name="myfile" />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Mode Details" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mt-2 text-right">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li class="sbig"> <span>* Note  : </span> Image must be  500 x 200 Resolution</li>
                                                            <li><button type="submit" class="btn btn-lg btn-primary">Search</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Room Name</label>
                                                        <input type="input" class="form-control" placeholder="Office/House/Flat/Rent/Sale">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Min Area</label>
                                                        <input type="input" class="form-control" placeholder="Min Area">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Max Area</label>
                                                        <input type="input" class="form-control" placeholder="Max Area">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-control select-box">
                                                            <option>Australia</option>
                                                            <option>Pakisthan</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Min Price</label>
                                                        <input type="input" class="form-control" placeholder="Min Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Max Price</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Max Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <p>Facilities  &nbsp; &nbsp;  &nbsp; <img src="images/wifi.png" alt=""> <img src="images/plus.png" alt="">     </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li>Property Type</li>
                                                            <li><input type="input" class="form-control" placeholder="AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Non AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Casual"></li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tags</label>
                                                        <input type="input" class="form-control" placeholder="Type Category">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Tag Name</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Office">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <div class="form-group mt-3">
                                                        <ul>
                                                            <li class="big">Attached Sample</li>
                                                            <li>
                                                                <div class="upload-btn-wrapper">
                                                                    <button class="btn"><img src="images/link.png" alt=""></button>
                                                                    <input type="file" name="myfile" />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Mode Details" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mt-2 text-right">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li class="sbig"> <span>* Note  : </span> Image must be  500 x 200 Resolution</li>
                                                            <li><button type="submit" class="btn btn-lg btn-primary">Search</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Room Name</label>
                                                        <input type="input" class="form-control" placeholder="Office/House/Flat/Rent/Sale">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Min Area</label>
                                                        <input type="input" class="form-control" placeholder="Min Area">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Max Area</label>
                                                        <input type="input" class="form-control" placeholder="Max Area">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-control select-box">
                                                            <option>Australia</option>
                                                            <option>Pakisthan</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Min Price</label>
                                                        <input type="input" class="form-control" placeholder="Min Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Max Price</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Max Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <p>Facilities  &nbsp; &nbsp;  &nbsp; <img src="images/wifi.png" alt=""> <img src="images/plus.png" alt="">     </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li>Property Type</li>
                                                            <li><input type="input" class="form-control" placeholder="AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Non AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Casual"></li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tags</label>
                                                        <input type="input" class="form-control" placeholder="Type Category">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Tag Name</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Office">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <div class="form-group mt-3">
                                                        <ul>
                                                            <li class="big">Attached Sample</li>
                                                            <li>
                                                                <div class="upload-btn-wrapper">
                                                                    <button class="btn"><img src="images/link.png" alt=""></button>
                                                                    <input type="file" name="myfile" />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Mode Details" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mt-2 text-right">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li class="sbig"> <span>* Note  : </span> Image must be  500 x 200 Resolution</li>
                                                            <li><button type="submit" class="btn btn-lg btn-primary">Search</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="settings">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Room Name</label>
                                                        <input type="input" class="form-control" placeholder="Office/House/Flat/Rent/Sale">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Min Area</label>
                                                        <input type="input" class="form-control" placeholder="Min Area">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Max Area</label>
                                                        <input type="input" class="form-control" placeholder="Max Area">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-control select-box">
                                                            <option>Australia</option>
                                                            <option>Pakisthan</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Min Price</label>
                                                        <input type="input" class="form-control" placeholder="Min Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Max Price</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Max Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <p>Facilities  &nbsp; &nbsp;  &nbsp; <img src="images/wifi.png" alt=""> <img src="images/plus.png" alt="">     </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li>Property Type</li>
                                                            <li><input type="input" class="form-control" placeholder="AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Non AC"></li>
                                                            <li><input type="input" class="form-control" placeholder="Casual"></li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tags</label>
                                                        <input type="input" class="form-control" placeholder="Type Category">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Tag Name</label>
                                                        <input type="input" class="form-control bg-gray" placeholder="Office">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <div class="form-group mt-3">
                                                        <ul>
                                                            <li class="big">Attached Sample</li>
                                                            <li>
                                                                <div class="upload-btn-wrapper">
                                                                    <button class="btn"><img src="images/link.png" alt=""></button>
                                                                    <input type="file" name="myfile" />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Mode Details" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mt-2 text-right">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li class="sbig"> <span>* Note  : </span> Image must be  500 x 200 Resolution</li>
                                                            <li><button type="submit" class="btn btn-lg btn-primary">Search</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar-area">
                        <div class="agent-contact-area">
                            <h3>Contact Me</h3>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit. Proin viverra eget arcu cursus. Sed sit amet nibh.</p>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +(000)88-123-4455-88 </li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> unname@gmail.com </li>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> Sun-Fri09.00-12.00 </li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Elefent road 212, Australia.Inner cirlar section, </li>
                                </ul>
                            </div>
                            <div class="best-agent">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
