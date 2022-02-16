@extends("npls.layouts.master")
@section("page-title"," Contact ")
@section('style')
    <style>
        select {
            display: block !important;
        }

        @media only screen and (max-width: 600px) {
            #name {
                margin-top: 10px !important;
            }

            .sidetext {
                padding: 50px !important;
                list-style: disc;
                margin-top: 0px !important;
            }

            form {
                padding: 25px !important;
                height: 950px !important;
            }

            .contact-form {
                margin-left: 14px !important;
            }

            select {
                display: block !important;
            }

            .button_mob {
                padding: 43px !important;
            }

            .footer_mob {
                margin-top: -62px !important;
            }

            #submiterror {
                margin-left: 15px !important;
            }

            .realtor {
                width: unset !important;
            }
        }

    </style>
@endsection
@section("main-content")
    {{--    <div class="page-header-area">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">--}}
    {{--                    <div class="header-page">--}}
    {{--                        <h1> Contact Us</h1>--}}
    {{--                        <ul>--}}
    {{--                            <li> <a href="{{route('frontend.home')}}">Home</a> </li>--}}
    {{--                            <li>Contact Us</li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Page Header Section breadcumb End Here -->
    <!-- Contact Page Start Here -->
    <div class="contact-page-area"
         style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url(/npls/images/contact.jpg)no-repeat scroll center center / cover!important ;text-align: left!important;padding: 100px 0!important;">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!--google map start section -->
                    <div class="google-map-area">
                        <div id="gmap" class="gmap-area"></div>
                    </div><!--google map end section -->
                </div> --}}
                <div class="col-md-6 col-lg-6 col-sm-12 sidetext" style="color: white;">
                    <div class="realtor"
                         style="background:linear-gradient(45deg, black, transparent); border: 2px solid #46BFE2;padding: 10px;margin-bottom: 100px;width: 34%">
                        <h4 style="margin:0">NPLS Realtor</h4>
                        <h4 style="margin:0">NPLS Franchise</h4>
                    </div>
                    <div style="background:linear-gradient(45deg, black, transparent);margin-bottom: 100px">
                        <h3 style="padding: 10px">Transparent Efficent Trust</h3>
                    </div>
                    <div class="single-contact "
                         style="color: #fff0ff;background:linear-gradient(45deg, black, transparent);border-radius: 30px;padding: 20px">
                        {{--                        <i class="fa fa-phone" aria-hidden="true"></i>--}}
                        <h4 style="color: #fff0ff;">Npls Help Center</h4>
                        <p style="margin-bottom: 5px"> Fortress Square Mall <br>Lahore Cantt,Pakistan. </p>
                        <p style="margin-bottom: 5px">Email: Support@npls.pk</p>
                        <p style="margin-bottom: 5px">Web: www.npls.pk</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form"
                         style="width: 90%;margin-bottom: 35px;background:linear-gradient(45deg, black, transparent);">
                        <form action="{{route('contact.form')}}" method="POST"
                              style=" padding:50px; height:900px;color: white">
                            @csrf
                            <fieldset>
                                <h3>Find Your Dream Home</h3>
                                <div class="col-sm-12">
                                    <label for="name">I am</label>
                                    <div class="input-box " style="border:2px solid #46BFE2;">
                                        <select class="form-control" name="category" id="category">
                                            <option class="form-control" selected="selected">Real Estate Agent/Broker
                                            </option>
                                            <option class="form-control" value="Other Professional"> Landlord,
                                                Buyer/Seller
                                            </option>
                                            <option class="form-control" value="Other Professional"> Home Builder
                                            </option>
                                            <option class="form-control" value="Other Professional"> Mortgage Lender
                                            </option>
                                            <option class="form-control" value="Other Professional"> Tenant</option>
                                            <option class="form-control" value="Other Professional"> Other Real Estate
                                                Professional
                                            </option>
                                        </select>
                                        <div class="nice-select" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name" name="name" style="margin-top: 25px;">Full Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Name*"
                                               name="name" id="name" style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="E-mail*"
                                               name="email" id="email" style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                               name="phone" id="phone" placeholder="You Phone*"
                                               style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                        name="subject" id="subject" placeholder="Subject*" style="border:2px solid #46BFE2;"
                                        required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea cols="40" rows="7" class="textarea form-control" placeholder="Your Message"
                                        name="message" id="message" style="border:2px solid #46BFE2;"
                                        required aria-required="true"></textarea>
                                    </div>
                                </div> --}}
                                <div class="col-sm-12" style="margin-bottom: 0px;">
                                    <div class="form-group" style="float: left;display:-webkit-box;">
                                        <input type="checkbox" name="submitcheckbox" id="submitcheckbox">
                                        <p style="margin-left:27px;"><b>yes</b></p>
                                    </div>
                                    <span class="hidden text-danger"
                                          style="font-size: 1.1rem;float:left;margin-left:41px;" id="submiterror">Please fill checkbox</span>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group button_mob" style=" padding:0px;">
                                        <input type="submit" id="submit" name="submit"
                                               class="submit btn btn-lg btn-info" style="width:130px;margin-top:-66px;"
                                               value="Contact Us"/>
                                    </div>
                                </div>

                                <div class="col-sm-12 footer_mob" style="margin-top:-10px;">
                                    <div class="form-group">
                                        <h4 style="margin-bottom:6%;">Or call <a href="#">1-800-000-000</a></h4>
                                        <h5 style="margin-bottom: 4px;">We respect your privacy, See our <a
                                                href="{{route('privacy.policy')}}" target="_blank"
                                                style="color: rgb(35, 15, 214)">Privacy Policy</a></h5>
                                        <h5 style="width: 99%;">
                                            <br> By pressing “contact US”, you agree that NPLS may contact you via
                                            Phone/text or email about your inquiry, which may involve the use of
                                            automated means.
                                        </h5>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="contact-info">--}}
            {{--                    <div class="col-sm-4 text-center">--}}
            {{--                        <div class="single-contact">--}}
            {{--                            <i class="fa fa-phone" aria-hidden="true"></i>--}}
            {{--                            <h3>Contact Number</h3>--}}
            {{--                            <p> + 1-800-000-000</p>--}}
            {{--                            <p>+ 1-800-000-000</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-sm-4 text-center">--}}
            {{--                        <div class="single-contact">--}}
            {{--                            <i class="fa fa-envelope-o" aria-hidden="true"></i>--}}
            {{--                            <h3>Email Address</h3>--}}
            {{--                            <p>support@npls.pk</p>--}}
            {{--                            <p>www.npls.pk</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-sm-4 text-center">--}}
            {{--                        <div class="single-contact">--}}
            {{--                            <i class="fa fa-map-marker" aria-hidden="true"></i>--}}
            {{--                            <h3>Official Address</h3>--}}
            {{--                            <p>Fortress Square Mall</p>--}}
            {{--                            <p>Lahore Cantt, Pakistan</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function () {
            $(".submit").click(function () {>>>>>>>
                main
                63

                if ($("input[name='submitcheckbox']").is(":checked") == true) {
                    $('#submiterror').addClass('hidden');
                } else if ($("input[name='submitcheckbox']").is(":checked") != true) {
                    $('#submiterror').removeClass('hidden');
                    return false;
                }
            })
        });

    </script>
@endsection

@endsection
