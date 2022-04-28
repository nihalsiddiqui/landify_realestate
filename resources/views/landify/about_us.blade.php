@extends("landify.layouts.master")
@section("page-title","panel of experts")
@section('style')
    <style>
        @media only screen  and (max-width: 480px) {
            .content-area{
                padding: 0px!important;
            }
        }
    </style>
@endsection
@section('main-content')

    <div class="content-area" style="padding: 100px">
        <div class="container">
            <div class="row ">
                <div class="col-md-5">
                    <img src="{{asset('landify/images/about_landify.png')}}" alt="landify">
                </div>
                <div class="col-md-7 w-50 content text-left" style="font-size: 13px;">
                        <h3 style="font-size: 17px;margin: 0 0 6px!important;">Landify</h3>
                        <h3 style="font-size: 17px">The trusted name for your land verification</h3>
                        <p style="margin: 0 0 15px;font-weight: bold">About us:</p>
                        <p style="color: #abb8c3">

                            Buying and selling land is a high-risk decision that involves countless verification and legal processes. People invest their hard-earned money to either buy a home for them to invest in a property that will secure their family’s future and their businesses.<br>

                            To cater this gap, ‘Landify’ derived from Land Verification, the website provides nationwide services to help people with their property. Legal experts do the evaluation of the land i.e. who is the actual owner, is the land free of any dispute and future value of the property etc.<br>

                            Moreover, Landify will provide the services for building, structural engineering design and strength/weaknesses of MEP and for residential/farm housing projects, infrastructure status is part of the assessment. For all types of plots and land, it principally provides verification and valuation.</p>

                </div>
            </div>
        </div>
    </div>


@endsection
