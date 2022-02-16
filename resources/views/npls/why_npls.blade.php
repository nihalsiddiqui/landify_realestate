@extends("npls.layouts.master")
@section("page-title"," Why NPLS")
@section('style')
    <style>
        @media only screen and (max-width: 600px) {
            .mob-search{
                width: unset!important;
            }
            .banner{
                padding: 100px 0px 50px!important;
                margin-top: 87px!important;
            }

        }
    </style>
@endsection
@section("main-content")
    <div class="page-header-area banner" style="padding: 150px 0px;background: url('{{asset('npls/images/why_npls_banner_replace.jpg')}}') center/cover no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
{{--                    <div class="header-page">--}}
{{--                        <h1> Why NPLS</h1>--}}
{{--                        <ul>--}}
{{--                            <li> <a href="{{route('frontend.home')}}">Home</a> </li>--}}
{{--                            <li> Why NPLS</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->
    <!-- Blog Page Start Here -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <h1 class="text-center font-weight-bold text-black">WHY NPLS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p style="font-size: 19px"><a href="" style="text-decoration: none;color: #4EC6E8">npls.pk</a> strive to bring transparency, innovation, and trust into every aspect of real estate transaction. Unlike other property portals in Pakistan, where properties are usually advertised by multiple agents at the same time results in like duplicated listings, listing missing location information, fraudulent listing, lead-bait listing and more. which impairs the buyer experience, because searching through lists with properties displayed multiple times is cumbersome and inefficient. It can also harm the seller experience since a property listed in multiple listings will often present different prices and content quality. This creates confusion, and can even hurt the seller’s bargaining power
                        <a href="" style="text-decoration: none;color: #4EC6E8">npls.pk</a> First of its kind in Pakistan, uses interactive map search and   innovative technology to introduce consumer focused  real-estate practice with Consumer verified data
                    </p>
                    <h2 class="text-center" style="font-size: 34px">What npls.pk offer </h2>
                    <div class="row">
                        <div class="col-md-2">
                            <h3 style="margin: 55px 0px 28px;font-size: 32px">Sell</h3>
                        </div>
                        <div class="col-md-10">
                            <p style="font-size: 19px">Nationwide property visibility with international presence <br>
                                CMA (Comparative Marketing Analysis) for listing price* <br>
                                Pre-Qualified buyers process enable faster closing <br>
                                One stop Services – Professional Realtor* + Real Estate Lawyer* <br>
                                New-Construction/Project roadshow & Marketing in North America* <br>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h3 style="margin: 55px 0px 28px;font-size: 32px">Buy</h3>
                        </div>
                        <div class="col-md-10">
                            <p style="font-size: 19px">Simplify & transparent home buying journey in Pakistan & North America <br>
                                One stop Services – Professional Realtor + Real Estate Lawyer* <br>
                                Buyer Deposit protection – Insured in Trust Account <br>
                                Buyer Deposit refund if conditional offer declined/Void <br>
                                Home Inspection services before closing the deal* <br>
                                Sharia Compliance Mortgage for qualified buyers in Pakistan & North America* <br>

                            </p>
                        </div>
                        <div class="col-md-2">
                            <h3 style="margin: 21px 0px 28px;font-size: 32px">Rent</h3>
                        </div>
                        <div class="col-md-10">
                            <p style="font-size: 19px">Nationwide rental property availability & visibility <br>
                                Pre-qualified, Identity verified rent seeker <br>
                                Professional Realtor services <br>
                            </p>
                        </div>
                    </div>
                    <h2 class="text-center" style="font-size: 34px">Who is npls.pk</h2>
                    <p style="font-size: 19px"><span style="color: #4EC6E8">National Property Listing Services (NPLS)</span> is a Pakistan national online marketplace for buyers, sellers, and rental seekers. As an online real estate brokerage our brand and partners services include, Sharia compliance mortgage, home inspection and reports, building materials, Home Decor & Professional Architecture <span style="color: #4EC6E8">npls.pk, </span>
                        a subsidiary of parent organization Neemwood Inc. is committed to its corporate social responsibility and believe, CSR programs is an essential component of ethical business practices.
                        Neemwood Inc is directly committed and dedicated to contributing for a green, healthy, and safe living environment in Pakistan and across the globe!

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Page End Here -->

{{--    find your dream --}}

    <section class="py-5 ">
        <div class="container">
            <div class="row" >
                <div class="col-md-12 text-center" style="margin-bottom: 41px">
                    <h3 style="font-size: 24px;">Find your dream home in Pakistan </h3>

                    <form method="get" action="{{route('home.search')}}">
                        @csrf
                        <input type="hidden" id="bath" name="bath">
                        <input type="hidden" id="rooms" name="rooms">
                        <input type="hidden" id="areas" name="area">
                        <input type="hidden" id="prices" name="price_range">

                        <div class="form-fields">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px" >
                                <div class="single-field">
                                    <p></p>
                                    <div class="input-box mob-search" style="width: 500px;margin: auto;">

                                        <div class="input-group">
                                            <input type="search" style="" id="search"
                                                   name="search_query"
                                                   class="form-control typeahead " autocomplete="off"
                                                   placeholder="City, Town or NPLS Number..." aria-label="..."
                                                   id="searchQuery">
                                            <span class="input-group-btn">
                                                <span id="search_Button" class="btn btn-lg form-control"
                                                      style="background: #46BFE2">
                                                    <i class="fa fa-search"
                                                       style="font-size: 24px;color: white;margin-top: 6px;"></i>
                                                </span>
                                                <input type="submit" hidden name="" id="form_submit">
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection
