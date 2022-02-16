@extends("npls.layouts.master")
@section("page-title"," Apply Agent")
@section('style')
<style>
    /*media query start*/
    li:after{
        display: none !important;
    }
    @media screen and (max-width: 480px) {
    .applyagent{
        padding: 20px !important;
    }
        .image_work{
            margin-top: 0px !important;
            padding: 0px !important;
        }
        .applyagent_text{
            padding: 9px !important;
        }
}
    /*media query end*/
    /*.page-header-area {*/
    /*    background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url("images/npls_banner.jpg") no-repeat scroll center center / cover!important;*/
    /*    text-align: left!important;*/
    /*    padding: 100px 0!important;*/
    /*}*/
</style>
@endsection
@section("main-content")
    <div class="page-header-area" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url(/applyagent/Images/banner2.jpg)no-repeat scroll center center / cover!important ;text-align: left!important;padding: 100px 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1 >Earn More as a <br> NPLS Real-estate Agent </h1>
                        <p style="color: #fff;font-size: 17px">Quality Leads, Insightful data and Innovative Technology to help You Grow with Us faster</p>
                        <ul>
                             <a href="{{route('agent.contact')}}" class="btn btn-lg " style="color: #fff; background: #46BFE2">
                                 <li class="list" style="color: #fff0ff;background: #46BFE2; ">join us </li></a>
                            {{-- <li>Apply Agent</li> --}}
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
            <div class="row text-center" style="margin: auto;padding:25px;">
                <div class="col-md-6 col-sm-6 col-lg-6" >
                   <div class="text-left applyagent" style="padding:60px;">
                    <h4 style="font-size: 22px">Use our national network to
                        grow your Own
                        </h4>
                        <p style="font-size: 17px">Connect with active buyers and sellers
                            on NPLS as they start their home search,
                           Our national network help clients find You
                            and you help them to sell or find them
                            dream home
                           </p>
                   </div>
                </div>
                <div class="col-md-6  col-sm-6 col-lg-6" style="margin-bottom: 41px">
                    <img src="{{asset('applyagent/Images/Agent webpage 2.jpg')}}" alt="" style="width:400px; height:300px;">
                </div>
                <hr  style="padding: 0.5px;  background-color: lightgrey;">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="text-left applyagent" style="padding:60px; margin-top:15px;">
                        <h4 style="font-size: 22px">Do what you do best, even
                            better than before
                        </h4>
                        <p style="font-size: 17px">Get more than just leads- use the innovative technology to succeed, NPLS empowers you to
                            Win all home buying moments that lead to the bigger commission and reward
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6" style="margin-bottom: 41px" >
                    <img src="{{asset('applyagent/Images/Agent webpage 3.jpg')}}" alt="" style="width:400px; height:300px; margin-top:15px;  ">
                </div>
            </div>
            <hr  style="padding: 0.5px;margin-top: -15px!important;  background-color: lightgrey;">
            <div class="row text-center" style="margin: auto;padding:25px;">
                <div class="col-md-6 col-sm-6 col-lg-6" >
                   <div class="text-left applyagent" style="padding:60px;">
                    <h4 style="font-size: 22px">Start your rewarding career with
                        International brand
                        </h4>
                        <p style="font-size: 17px">Qualified Leads, New Client in your Inbox
                            Work full time or part time
                            Earn more with quality lifestyle
                             Work from home
                            Tools and customer support for top performing
                            agents
                           </p>
                   </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="{{asset('applyagent/Images/Agent webpage 4.jpg')}}" alt="" style="width:400px; height:300px;">
                </div>

            </div>
                {{-- <div class="col-md-6 col-sm-6 col-lg-6" >
                    <img src="{{asset('applyagent/Images/Agent webpage 5.jpg')}}" alt="" style="width:400px; height:300px;">
                </div>
                 <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="text-left applyagent" style="padding:60px;">
                        <h4>Use our national network to
                            grow your Own
                            </h4>
                            <p>Connect with active buyers and sellers
                                on NPLS as they start their home search,
                               Our national network help clients find You
                                and you help them to sell or find them
                                dream home
                               </p>
                       </div>
                 </div>
            </div>

            <div class="row text-center" style="margin: auto;padding:25px;">
                <div class="col-md-6 col-sm-6 col-lg-6" >
                   <div class="text-left applyagent" style="padding:60px;">
                    <h4>Use our national network to
                        grow your Own
                        </h4>
                        <p>Connect with active buyers and sellers
                            on NPLS as they start their home search,
                           Our national network help clients find You
                            and you help them to sell or find them
                            dream home
                           </p>
                   </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="{{asset('applyagent/Images/Agent webpage 6.jpg')}}" alt="" style="width:400px; height:300px;">
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6" >
                    <img src="{{asset('applyagent/Images/Agent webpage 7.jpg')}}" alt="" style="width:400px; height:300px;">
                </div>
                 <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="text-left applyagent" style="padding:60px;">
                        <h4>Use our national network to
                            grow your Own
                            </h4>
                            <p>Connect with active buyers and sellers
                                on NPLS as they start their home search,
                               Our national network help clients find You
                                and you help them to sell or find them
                                dream home
                               </p>
                       </div>
                 </div>
            </div> --}}

            <div class="row " >
                <h3 class="text-center" style="margin:25px; font-size:3rem;">What we are looking for </h3>
                <div class="col-md-4 col-sm-12">
                    <div class="card text-center" style="padding: 25px;">
                        <img src="{{asset('applyagent/Images/quick.jpg')}}" alt="" style="width: 70px; height:70px;">
                        <h3 style="margin-top: 15px;">Quick and Responsive</h3>
                        <div class="card-body" style="font-size: 17px" >
                            Clients searching for their dream Home, responding to active leads within 3-5 minutes, can convert them to serious buyers to homeowners
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card text-center" style="padding: 25px;">
                        <img src="{{asset('applyagent/Images/expert_icon.jpg')}}" alt="" style="width: 70px; height:70px;">
                        <h3 style="margin-top: 15px;">Expert & Honest</h3>
                        <div class="card-body" style="font-size: 19px" >
                            You should be customer oriented on re-sale or new construction and have expertise to verify the title/registry
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card text-center" style="padding:15px;">
                        <img src="{{asset('applyagent/Images/neighborhood_icon.jpg')}}" alt="" style="margin:auto;height:70px;">
                        <h3 style="margin-top: 25px; ">Neighborhood Knowledge</h3>
                        <div class="card-body" style="font-size: 20px">
                            you should be Up to date on local real  estate market in your area and potential Home sellers/buyers
                        </div>
                    </div>
                </div>
            </div>

            <div class="row applyagent" style="padding: 50px;">
                <h3 class="text-center" style="font-size:3rem;">How it works </h3>
                <div class="col-md-6 col-sm-6" >
                    <div class="applyagent_text" style="width:90%;padding:25px;">
                        <h4 style="font-size: 25px">1. Submit your application</h4>
                        <p style="font-size: 18px">Apply by submitting your resume along with
                            why think you could make a difference
                        </p>
                        <h4 style="font-size: 23px">2. Pick your local Neighborhood</h4>
                        <p style="font-size: 18px">You decide which city your add will
                            Appear in, we will advertise you to home shoppers in
                            That neighborhood
                        </p>
                        <h4 style="font-size: 23px">3. Receive Leads and close deals </h4>
                        <p style="font-size: 18px">Serious buyers lead will be sent directly to your inbox you Decide how many leads per months you can manage We will provide you tools and resources from first showing to Closing.
                        </p>
                        <h4 style="font-size: 23px">4. Start Earning </h4>
                        <p style="font-size: 18px">Make six-digit income and more, Quality of life, Happy family time as a NPLS Realtor or NPLS Franchise
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 image_work" style="padding: 50px;margin-top:60px">
                    <img src="{{asset('applyagent/Images/work_agent.jpg')}}" class="img-thumbnail" alt="">
                </div>
            </div>

            <div class="text-center" style="padding: 10px;">
                <a href="{{route('agent.contact')}}" class="btn btn-lg" style="color: #fff; background: #46BFE2;">join us</a>
            </div>
        </div>
    </div>



    {{-- end of privacy content --}}

@endsection

