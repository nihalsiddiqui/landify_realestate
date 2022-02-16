@extends("npls.layouts.master")
@section("page-title"," Agent contact")
@section('style')
    <style>
        #category {
            display: block !important;
        }

        #city {
            display: block !important;
        }

        @media only screen and (max-width: 600px) {

            .contact-form {
                width: unset !important;
            }

            .submit {
                margin: 35px !important;
                margin-top: 62px !important;
            }

            #submiterror {
                margin-bottom: -30px !important;
            }

            .sub_mob {
                padding: 0px !important;
                width: 50%;
                margin: auto;
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
    {{--                        <h1>Join us</h1>--}}
    {{--                        <ul>--}}
    {{--                            <li> <a href="{{route('frontend.home')}}">Home</a> </li>--}}
    {{--                            <li>Join Us</li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Page Header Section breadcumb End Here -->
    <!-- Contact Page Start Here -->
    <div class="contact-page-area"
         style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)),url('/npls/images/join.jpg') no-repeat scroll center center/cover">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!--google map start section -->
                    <div class="google-map-area">
                        <div id="gmap" class="gmap-area"></div>
                    </div><!--google map end section -->
                </div> --}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-form"
                         style="width: 70%;margin:auto;background:linear-gradient(40deg,black,transparent);border: 2px solid white">
                        <h3 class="text-center" style="padding:35px; color: #fff">Create a Free Profile</h3>
                        <form action="{{route('contact.agent')}}" method="POST">
                            @csrf
                            <fieldset>
{{--                                @if ($errors->has('g-recaptcha-response'))--}}
{{--                                    <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
{{--                                 </span>--}}
{{--                                @endif--}}
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail*"
                                               name="email" id="email" style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="input-box " style="border:2px solid #46BFE2;">
                                        <select class="form-control" name="category" id="category">
                                            <option class="form-control" selected="selected">Real Estate Agent/ Broker
                                            </option>
                                            <option class="form-control" value="Mortgage Lender">Mortgage Lender
                                            </option>
                                            <option class="form-control" value="Home Improvement Services">Home
                                                Improvement Services
                                            </option>
                                            <option class="form-control" value="Landlord">Landlord</option>
                                            <option class="form-control" value="Photographer">Photographer</option>
                                            <option class="form-control" value="Home Biulder">Home Biulder</option>
                                            <option class="form-control" value="Home Inspector">Home Inspector</option>
                                            <option class="form-control" value="Property Manager">Property Manager
                                            </option>
                                            <option class="form-control" value="Other Real Estate Professional">Other
                                                Real Estate Professional
                                            </option>
                                        </select>
                                        <div class="nice-select" style="display: none;"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name*"
                                               name="firstname" id="firstname"
                                               style="border:2px solid #46BFE2; margin-top:15px;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name*"
                                               name="lastname" id="lastname"
                                               style="border:2px solid #46BFE2;margin-top:15px;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                        name="subject" id="subject" placeholder="Subject*" style="border:2px solid #46BFE2;"
                                        required aria-required="true">
                                    </div>
                                </div> --}}
                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <div class="input-box" style="border:2px solid #46BFE2;">
                                            <select class="form-control" name="city" id="city">
                                                <option selected disabled>Select City</option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->name}}">{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="nice-select" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               name="phone" id="phone" placeholder="Your Phone*"
                                               style="border:2px solid #46BFE2;"
                                               required aria-required="true">
                                    </div>
                                </div>
                                {{-- <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control "
                                        name="CNIC" id="CNIC"  placeholder="Your CNIC*" pattern="^[0-9]{5}-[0-9]{7}-[0-9]{1}$"  style="border:2px solid #46BFE2;"
                                        required aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea cols="40" rows="7" class="textarea form-control" placeholder="Your Message"
                                        name="message" id="message" style="border:2px solid #46BFE2; margin-top:15px;"
                                        required aria-required="true"></textarea>
                                    </div>
                                </div> --}}
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <h5 style="width: 99%; margin:auto; color: #fff">We respect your privacy, See
                                            our <a href="{{route('privacy.policy')}}" target="_blank"
                                                   style="color: rgb(214, 15, 15)">Privacy Policy</a>By pressing
                                            “Submit” you agree that NPLS may contact you via Phone/text or email about
                                            your inquiry, which may involve the use of automated means.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group" style="float: left;display:-webkit-box;">

                                    <span class="g-recaptcha-response" name="g-recaptcha-response">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </span>
                                        @error("g-recaptcha-response")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        {{--                                        <input type="checkbox" name="submitcheckbox" id="submitcheckbox">--}}
                                        {{--                                        <p style="margin-left:27px;color: #fff"><b>yes</b></p>--}}
                                    </div>
                                    {{--                                    <span class="hidden text-danger"--}}
                                    {{--                                          style="font-size: 1.1rem;float:left;margin-top:30px;margin-left:-41px;"--}}
                                    {{--                                          id="submiterror">Please fill checkbox</span>--}}
                                    {{--                                </div>--}}

                                </div>

                                {{--                                <div class="col-md-12">--}}
                                {{--                                    <div class="form-group" style=" padding-left:200px; padding-bottom:21px;">--}}
                                {{--                                        {!! NoCaptcha::renderJs() !!}--}}
                                {{--                                        {!! NoCaptcha::display() !!}--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="col-sm-12">
                                    <div class="form-group sub_mob" style=" padding-left:327px; padding-bottom:21px;">
                                        <input type="submit" id="submit" name="submit"
                                               class="submit btn btn-lg btn-info" style="width:100px;" value="submit"/>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="contact-info">
                    <div class="col-sm-4 text-center">
                        <div class="single-contact">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Contact Number</h3>
                            <p> + 088-555-888-55</p>
                            <p>+ 088-555-888-55</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="single-contact">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>Email Address</h3>
                            <p>info@gmail.com</p>
                            <p>www.carpress.com</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="single-contact">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Official Address</h3>
                            <p>Iner circular road, 24</p>
                            <p>512, North America.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function () {
            // $(".submit").click(function () {
            //     if ($("input[name='submitcheckbox']").is(":checked") == true) {
            //         $('#submiterror').addClass('hidden');
            //     } else if ($("input[name='submitcheckbox']").is(":checked") != true) {
            //         $('#submiterror').removeClass('hidden');
            //         return false;
            //     }
            // })
        });
        // var onloadCallback = function() {
        //     alert("grecaptcha is ready!");
        // };

    </script>

@endsection

@endsection

