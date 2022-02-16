<style>
    .pointer:hover{
        cursor: pointer;
    }
</style>

<footer>

    <div id="footer" class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-heading">
                        <h2>Real Estate Markets</h2>
                       <ul>
                           <li><a href="" style="color: #000;">Azad Kashmir Real Estate</a></li>
                           <li style="padding-top: 8px;"><a href="" style="color: #000;">Baluchistan Real Estate</a></li>
                           <li style="padding-top: 7px;"><a href="" style="color: #000;">Gilgit-Baltistan Real Estate</a></li>
                           <li style="padding-top: 13px;"><a href="" style="color: #000;">KPK Real Estate</a></li>
                          <li style="padding-top: 10px;">
                              <a class="showmoreButton pointer" style="color: #4EC6E8;">Show More</a>
                              <div class="wrapper">
                                  <div class="showmore" style="display: none;">
                                      <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Punjab Real Estate</div>
                                      <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Sindh Real Estate</div>
                                      <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Canada/USA Real Estate</div>
                                  </div>
                              </div>
                          </li>

                       </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-heading">
                        <h2> Popular Search  </h2>
                        <div class="footer-two">
                            <nav>
                                <ul>
                                    <li><a href="#."><i class="fa fa-angle-right" aria-hidden="true"></i>Plot for sale near me</a></li>
                                    <li><a href="{{ route("properties", ['type' => 'grid']) }}"><i class="fa fa-angle-right" aria-hidden="true"></i>House for sale near me</a></li>
                                    <li><a href="{{ route("about.us") }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Apartment for rent near me</a></li>
                                    <li><a href="{{route("privacy.policy")}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Shop for sale near me</a></li>
                                    <div class="showmoreButton1 pointer" style="color: #4EC6E8;">Show More</div>
                                    <div class="wrapper">
                                        <div class="showmore1" style="display: none;">
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Office for sale near me</div>
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Farmhouse for sale near me</div>
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;"> Apartment for sale near me </div>
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;"> Agricultural Land near me </div>
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;"> Cottage/Vacation Home for sale near me </div>
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;"> Cottage/Vacation home for rent near me  </div>
                                        </div>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-heading heading-margin">
                        <h2>Explorer NPLS</h2>
                        <div class="footer-two">
                            <nav>
                                <ul>
                                    <li><a href="#."><i class="fa fa-angle-right" aria-hidden="true"></i>Facebook</a></li>
                                    <li><a href="{{ route("properties", ['type' => 'grid']) }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Instagram</a></li>
                                    <li><a href="{{ route("about.us") }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Twitter</a></li>
                                    <li><a href="{{route("privacy.policy")}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Blogs</a></li>
                                    <div class="showmoreButton2 pointer" style="color: #4EC6E8;">Show More</div>
                                    <div class="wrapper">
                                        <div class="showmore2" style="display: none;">
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Privacy</div>
                                            <div class="ty-compact-list" style="padding: 5px 5px 5px 0px; float: left; width: 100%;">Term</div>
                                        </div>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-heading">
                        <h2>Professional Services</h2>
                        <ul>
                            <li><a href="" style="color: #000;">Own NPLS Brokerage</a></li>
                            <li><a href="" style="color: #000;">Become NPLS Realtor</a></li>
                            <li><a href="" style="color: #000;">Partner with Us</a></li>
                            <li><a href="" style="color: #000;">Support Centre</a></li>
                            <li><a href="" style="color: #000;">Career</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) ,url('{{asset('npls/images/Footer.jpg')}}') center/cover no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-bottom-left">
                        <p>&copy; {{ now()->format("Y") }} All Rights Reserved Designed, & Developed By  <a target="_blank" style="color: #4EC6E8" href="https://xencorps.com/">XenCorps</a></p>
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


