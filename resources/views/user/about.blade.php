@extends("npls.layouts.master")
@section("page-title","NPLS Homes | Agent")
@section("main-content")
    <!-- Page Header Section breadcumb Start Here -->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> About Us</h1>
                        <ul>
                            <li> <a href="index.html">Home</a> </li>
                            <li> About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
    <!-- About Us Area Start Here -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <div class="about-use-area-content">
                        <h2>WHO <span>WE ARE ?</span> </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus turpis. Donec maximus odio nec odio commodo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus turpis. Donec maximus odio nec odio commodo euismod. Quisque augue purus, porta vel facilisis ac, accumsan eu elit. Nulla ultricies odio sit amet arcu sodales, id ornare tortor tempor. Cras pellentesque lorem eget tincidunt eleifend. Phasellus a finibus metus. Aliquam eu nisl pellentesque ellentesque libero quis, tempor nisi. Donec vitae mattis libero. Mauris est ipsum, vestibulum nec nibh quis, lacinia fringilla magna. Proin nec lacus ut odio euismod tincidunt necet lectus. </p>
                        <div class="read-more">
                            <a class="button btn btn-danger btn-lg" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-feature">
                        <img src="{{ asset('npls/images/about/about-us1.jpg') }}" alt="About Us Feature Image">
                        <img src="{{ asset('npls/images/about/about-us2.jpg') }}" alt="About Us Feature Image">
                        <img src="{{ asset('npls/images/about/about-us.jpg') }}" alt="About Us Feature Image">
                        <img src="{{ asset('npls/images/about/about-us3.jpg') }}" alt="About Us Feature Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End Here -->
    <!-- Services Area Start Here -->
    <div class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Real Estate <span>Services</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum, veniam, eius, incidunt laudantium illo inventore deserunt explicabo consequuntur vero illum aut perspiciatis nesciunt sit, rem! Temporibus laborum, atque eveniet!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-md-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <h4>Financial Planning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore cum dignissimos maiores autem pariatur molestias corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-md-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                        <h4>Financial Curve</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore cum dignissimos maiores autem pariatur molestias corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-md-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        <h4>Money Funded</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore cum dignissimos maiores autem pariatur molestias corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-md-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <h4>Earn Money</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore cum dignissimos maiores autem pariatur molestias corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-md-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <h4>Investment Planning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore cum dignissimos maiores autem pariatur molestias corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-md-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <i class="fa fa-signal" aria-hidden="true"></i>
                        <h4>Business Plainning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore cum dignissimos maiores autem pariatur molestias corrupti.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End Here -->
    <!-- Home One Counter Area Start Here -->
    <div class="counter-up-area">
        <div class="container">
            <div class="row">
                <div class="ab-count">
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" data-wow-delay="0.1s">
                        <div class="about-counter-list">
                            <h1 class="about-counter">850</h1>
                            <p>Completed Project</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" data-wow-delay="0.2s">
                        <div class="about-counter-list">
                            <h1 class="about-counter">2050</h1>
                            <p>Property Sold</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                        <div class="about-counter-list">
                            <h1 class="about-counter">1500</h1>
                            <p>Rent Property</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" data-wow-delay="0.4s">
                        <div class="about-counter-list">
                            <h1 class="about-counter">850</h1>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Home One Counter Area End Here -->
    <!-- Real Estate Agent Area Start Here -->
    <div class="real-estate-agent-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Real Estate <span>Agent</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum, veniam, eius, incidunt laudantium illo inventore deserunt explicabo consequuntur vero illum aut perspiciatis nesciunt sit, rem! Temporibus laborum, atque eveniet!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agent-slider">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/1.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Jack Mark</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/2.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Robert John</a></h3>
                                <span>Manage, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/3.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Austin Brown</a></h3>
                                <span>Agent, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/4.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Brad David</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/1.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Jack Mark</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/2.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Robert John</a></h3>
                                <span>Manage, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/3.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Austin Brown</a></h3>
                                <span>Agent, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/4.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Brad David</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/1.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Jack Mark</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/2.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Robert John</a></h3>
                                <span>Manage, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/3.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Austin Brown</a></h3>
                                <span>Agent, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/4.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Brad David</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/1.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Jack Mark</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/2.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Robert John</a></h3>
                                <span>Manage, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/3.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Austin Brown</a></h3>
                                <span>Agent, Real Estate</span>
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
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent">
                            <div class="images">
                                <div class="image-frame">
                                    <img src="{{ asset('npls/images/agent/4.jpg') }}" alt="">
                                </div>
                                <a href="agent-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="agent-details">
                                <h3> <a href="agent-details.html">Brad David</a></h3>
                                <span>Founder, Real Estate</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Real Estate Agent Area End Here -->
    <!-- Testimonial Start Here -->
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>What <span>Client</span> Say</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="client-content">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                                </blockquote>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                                </blockquote>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="client-img text-center">
                                <a data-slide-index="0" href="#.">
                                    <div class="over-img"><img src="{{ asset('npls/images/testimonial/2.png') }}" alt=""/></div>
                                    <h4>John Deo</h4>
                                    <p>CEO, Real Estate</p>
                                </a>
                                <a data-slide-index="1" href="#.">
                                    <div class="over-img"><img src="{{ asset('npls/images/testimonial/3.png') }}" alt=""/></div>
                                    <h4>Robert Von</h4>
                                    <p>Agency</p>
                                </a>
                                <a data-slide-index="2" href="#.">
                                    <div class="over-img"><img src="{{ asset('npls/images/testimonial/4.png') }}" alt=""/></div>
                                    <h4>Brad Rert</h4>
                                    <p>Manager</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End Here -->
@endsection
