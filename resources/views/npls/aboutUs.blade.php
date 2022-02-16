@extends("npls.layouts.master")
@section("page-title"," About Us")
@section('style')
<style>
@media screen and (max-width: 480px) {

}
</style>
@endsection
@section("main-content")
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> About us</h1>
                        <ul>
                            <li> <a href="{{route('frontend.home')}}">Home</a> </li>
                            <li> About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
    {{-- privacy content --}}
    <div class="content-area">
        <div class="container">
            <div class="row ">
                <div class="content text-center" style="width:70%;margin:auto;padding-top:25px;">
                    <strong style="font-size: 2.7rem;"><b>NPLS Homes | Your Dream Home within Your Reach | About Us</b></strong>
                    <p>
                        NPLS Homes is an online marketplace for buyers, sellers, and rental seekers throughout Canada and USA. As a company, we strive to bring innovation and technology into every aspect of our program. For buyers who are struggling with the asking price of their dream home, we offer solutions that can help them achieve their dreams!
                    </p>
                    <strong style="font-size: 2.7rem;"><b>Solution for Specific Financing Needs</b></strong>
                    <p>
                        If you too feel like Interest Based Mortgage is not  a right solution for you or you might not be able to afford your dream home, we offer a multitude of financing solutions that will help you foot the bill. For instance, our <b>interest Free mortgage</b> and rent-to-own plans are a super hit with clients!
                    </p>
                    <strong style="font-size: 2.7rem;"><b>A Great Opportunity for Sellers</b></strong>
                    <p>
                        If you are a seller looking to list their property to bring in more buyers, we can help you achieve your goals in a better and faster way! Whether you want to sell your property completely or rent it out for a little extra income, we have pre-approved buyers that will prove to be satisfactory to you.

                        Earn extra income by listing and renting your furnished space for travelers who are looking for safe and quality short-term rental options (This option is not available in Canada and USA ).
                    </p>
                    <strong style="font-size: 2.7rem;"><b>About NPLS Homes</b></strong>
                    <h5 style="font-weight: normal;">30 Esther cres, Welland, ON, L3B 0G1</h5>
                    <p>
                        NPLS Homes is short for National Property Listing Services. The website is operated by Neemwood Inc. The organization provides software solutions and services to a growing list of clients, including those in Real Estate.

                        Neemwood Inc is directly committed and dedicated to contributing for a green, healthy, and safe living environment across the globe!

                    </p>
                        <p class="text-center">Further inquiries :<b style="font-weight:bold;">                         <a href="" style="color: #000;">support@nplshomes.com</a>

                        </b>
                            <br>
                            <a href="{{route('frontend.home')}}" class="btn btn-lg mx-auto" style="background: #46BFE2;color:#fff; margin:auto; border-shadow:2px 2px 2px solid #46BFE2;">Explore NPLS</a>
                        </p>

                    </p>


                </div>
            </div>
        </div>
    </div>


    {{-- end of privacy content --}}

@endsection
