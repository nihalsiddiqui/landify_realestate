@extends("landify.layouts.master")
@section("style")
    <style>
        .contact-page-area {
            padding: 200px 0 !important;
        }
    </style>
@endsection
@section("main-content")

    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                    <div class="header-page">
                        <h1> WELCOME TO <br><span style="font-size: 70px">LANDIFY</span> <br>
                            <hr style="width: 575px;float: left">
                            <br>
                        </h1>
                        <span style="font-size: 38px;color: #fff;"> Verify and valuate the Real Estate</span>
                        <ul>
                            <li style="text-decoration: none">
                                <button type="submit" class="btn btn-lg btn-danger" style="color: #fff;">Registration
                                    Search
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="py-5" style="padding: 100px ; background-color: lightgray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Digital Registration Deed Search</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <select name="district" id="district">
                        <option value="Abbottabad">Abbottabad</option>
                        <option value="Astore">Astore</option>
                        <option value="Attock">Attock</option>
                        <option value="Awaran">Awaran</option>
                        <option value="Badin">Badin</option>
                        <option value="Bagh">Bagh</option>
                        <option value="Bahawalnagar">Bahawalnagar</option>
                        <option value="Bajaur">Bajaur</option>
                        <option value="Bannu">Bannu</option>
                        <option value="Barkhan">Barkhan</option>
                        <option value="Barkhan">Barkhan</option>
                    </select>
                </div>
                <div class="col-md-3 text-center">
                    <select name="select_type" id="select_type">
                        <option value="Land title report
">Land title report
                        </option>
                        <option value="Pricing">Pricing</option>
                        <option value="Is it a good investment?">Is it a good investment?</option>
                        <option value="Structure & building
Valuation & Evaluation">Structure & building
                            Valuation & Evaluation</option>
                        <option value="Valuation of large size projects
">Valuation of large size projects
                        </option>

                    </select>
                </div>
                <div class="col-md-2 text-center">
                    <button type="submit" class="btn btn-lg" style="color: #fff; background: #008000;border-radius: 20px"> Submit</button>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#" style="color: #008000 ;text-underline: green!important" >Advance Search</a>
                </div>
                <div class="col-md-2 text-center">
                    <div style="border: 1.5px solid;border-radius: 10px;background-color: #fff">
                        <img  style="width: 43px;" src="{{asset('landify/images/geo_tag.jpg')}}" alt=""><span style="border-left: 0.5px solid ;padding: 6.5px">Geo Tagging</span>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section style="padding: 100px; background-color: lightgreen">
        <div class="container">
            <div class="row">
                <div class="text-left">
                    <h2>Properties in Pakistan
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-property">
                        <img src="{{asset('landify/images/img_property.jpeg')}}" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="img-property">
                        <img src="{{asset('landify/images/image_property2.jpeg')}}" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="img-property">
                        <img src="{{asset('landify/images/image_prpopery3.jpeg')}}" alt="">
                    </div>
                </div>

            </div>


            <div class="row " style="margin-top: 20px">

                <div class="col-md-4">
                    <div class="img-property">
                        <img src="{{asset('landify/images/image_prpopery4.jpeg')}}" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="img-property">
                        <img src="{{asset('landify/images/image_prpopery5.jpeg')}}" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="img-property">
                        <img src="{{asset('landify/images/image_property6.jpeg')}}" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section style="padding: 100px">
        <div class="container">
            <div class="row">
              <!-- Real Estate Agent Area Start Here -->
                    <div class="real-estate-agent-area" style="padding:20px 0;background:none;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-title" style="margin-bottom:0;padding:0;">
                                        <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                            News</h2>
                                    </div>
                                </div>
                            </div>
                                <div class="" style="display: flex;justify-content: space-between;flex-flow: row">
                                    <div class="row" style="width: 429px">
                                        <div class="col-md-3" >
                                            <p style="border-right: 1px solid;margin-right: -13px">Latest News</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p style="border-right: 1px solid;margin-right: -23px">Featured News</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p style="border-right: 1px solid;margin-right: -22px">Press Release</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p >Blogs</p>
                                        </div>
                                    </div>

                                    <a href="#" class="text-success" style="text-underline: green">View All</a>
                                </div>
                            <div class="row">
                                <div class="agent-slider" style="margin: 0;">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="single-agent"
                                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                                <div class="images"
                                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                    <div class="image-frame"
                                                         style="width: 261px;height: 175px;border-radius: 0!important;">
                                                            <img style="width: 100%;height: 100%"
                                                                 src="{{asset('landify/images/city_images/Karachi.jpg')}}" alt="">

                                                        <div class="icons-area">
                                                            <ul>
                                                                <li><a class="fancybox"
                                                                       href="{{ asset('landify/images/city_images/Karachi.jpg' )}}"
                                                                       data-fancybox-group="gallery"
                                                                       title="{{ ''}}"><i
                                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <span
                                                        style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                                </div>
                                                <div class="agent-details" style="padding: 8px">
                                                    <p class="text-left">Iciendia sinturi tatatustis
                                                        et alignam adi alissi tes
                                                        estore voluptas magnimod
                                                        es expliquo</p>

                                                    <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        Dec 28, 2021
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/Peshawar.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/Peshawar.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/Rawalpindi.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/Rawalpindi.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/Lahore.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/Lahore.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/islamabad.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/islamabad.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/Faisalabad.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/Faisalabad.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/my.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/my.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/Karachi.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/Karachi.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-agent"
                                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                            <div class="images"
                                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                                <div class="image-frame"
                                                     style="width: 261px;height: 175px;border-radius: 0!important;">
                                                    <img style="width: 100%;height: 100%"
                                                         src="{{asset('landify/images/city_images/Lahore.jpg')}}" alt="">

                                                    <div class="icons-area">
                                                        <ul>
                                                            <li><a class="fancybox"
                                                                   href="{{ asset('landify/images/city_images/Lahore.jpg' )}}"
                                                                   data-fancybox-group="gallery"
                                                                   title="{{ ''}}"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span
                                                    style="font-weight: 500;line-height: 18px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);padding: -1px 5px 2px 27px;text-align: left;position: absolute;bottom: 0;left: 23px;display: inline-block;width: 54%;"><button type="submit" style="background: #ff0000;color: #fff;">Featured</button></span>


                                            </div>
                                            <div class="agent-details" style="padding: 8px">
                                                <p class="text-left">Iciendia sinturi tatatustis
                                                    et alignam adi alissi tes
                                                    estore voluptas magnimod
                                                    es expliquo</p>

                                                <p class="text-left"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    Dec 28, 2021
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Real Estate Agent Area End Here -->

            </div>
        </div>
    </section>

@endsection
@section("script")
@endsection
