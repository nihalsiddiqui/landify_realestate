<style>
    .pointer:hover{
        cursor: pointer;
    }
</style>

<footer>

    <div id="footer" class="footer-top-area" style="background: rgba(0,0,0,0.7); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                    <div class="footer-heading">
                        <a href="{{ route("frontend.home") }}">
                            <img src="{{ asset('/landify/images/landif-2.jpg') }}" alt="npls logo">
                        </a>
                        <ul >

                            <li style="padding-top: 116px;"><a href="" style="color: #fff;">&copy; {{ now()->format("Y") }} All Rights Reserved Designed, & Developed By  <a target="_blank" style="color: #ff0000" href="https://xencorps.com/">XenCorps</a></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-heading">
                        <div class="footer-two">
                            <nav>
                                <ul >
                                    <li ><a style="color: #fff" href="#.">Home</a></li>
                                    <li><a style="color: #fff" href="{{ route("properties", ['type' => 'grid']) }}">Verification Services</a></li>
                                    <li><a style="color: #fff" href="{{ route("about.us") }}">Panel Of Experts</a></li>
                                    <li><a style="color: #fff" href="{{route("privacy.policy")}}">FAQs</a></li>
                                    <li><a style="color: #fff" href="{{route("privacy.policy")}}">About Us</a></li>
                                    <li><a style="color: #fff" href="{{route("privacy.policy")}}">Contact Us</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-heading">
                        <h2 style="border-left: 1.8px solid #fff;padding: 10px;color: #fff">Follow Us <br><br>

                            <i class="fa fa-facebook fa-2x"></i>
                            <i class="fa fa-twitter fa-2x"></i>
                            <i class="fa fa-google-plus fa-2x"></i>
                            <i class="fa fa-pinterest fa-2x"></i>
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('.showmoreButton').on('click', function() {
                $('.showmore').slideToggle("fast");
            });

            $('.showmoreButton1').on('click', function() {
                $('.showmore1').slideToggle("fast");
            });
            $('.showmoreButton2').on('click', function() {
                $('.showmore2').slideToggle("fast");
            });
        });
    </script>

</footer>


