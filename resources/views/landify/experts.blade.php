@extends("landify.layouts.master")
@section("page-title","panel of experts")
@section('style')
    <style>
        .page-header-area {
            background: #fff;
            text-align: left;
            padding: 10px 0;
            color: #0a0a0a;
        }

        .page-header-area h1 {
            font-size: 30px;
            color: #000;
            margin-bottom: 15px;
            font-weight: 600;
        }
        .circle{
            border-radius: 50%;
            margin: 0.15em;
            font-size: 2em;
        }
        .fa-facebook{
            background: #f0f9fb;
            color: #94b6be;
            padding: 0.05em 0.3em;
        }
        .fa-google-plus
        {
            background: #f0f9fb;
            color: #94b6be;
            padding: 0.05em 0.3em;
        }
        .fa-twitter{
            background: #f0f9fb;
            color: #94b6be;
            padding: 0.05em 0.3em;
        }
        .fa-linkedin{
            background: #f0f9fb;
            color: #94b6be;
            padding: 0.05em 0.3em;
        }
        .hover_view{
            display: none;
        }
        .single-agent:hover .hover_view{
            display: unset;
            transition: all 0.5s ease-in-out;
        }
        .owl-carousel .owl-wrapper-outer{
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 461px;
        }
        .real-estate-agent-area .agent-slider .owl-controls{
            display: none!important;
        }
    </style>
@endsection
@section('main-content')

    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="header-page">

                        <ul>
                            <li><a href="{{route('frontend.home')}}">Home &nbsp; &nbsp; &nbsp; -</a></li>
                            <li> Panel of Expert</li>
                        </ul>
                        <h1> Panel of Expert </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="real-estate-agent-area " style="padding:auto;background:#f7f7f7;">
        <div class="container">
{{--            row 1--}}
            <div class="row">
                <div class="agent-slider" style="margin: 0;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">

                                </div>

                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            row 2--}}
            <div class="row">
                <div class="agent-slider" style="margin: 0;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">

                                </div>

                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            row 3--}}
            <div class="row">
                <div class="agent-slider" style="margin: 0;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">

                                </div>

                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="width: 261px;height: 227px;border-radius: 0!important;">
                                    <img style="width: 100%;height: 100%"
                                         src="{{asset('landify/images/penal_experts/landify_one.png')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <p class="text-left">Majeed</p>
                                <p class="text-left">Architect & Town Planner</p>
                                <p class="text-left hover_view">
                                    <i class="fa fa-facebook  circle" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus circle" aria-hidden="true"></i>
                                    <i class="fa fa-twitter circle" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin circle" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            end row--}}

        </div>
    </div>


    <div class="real-estate-agent-area" style="padding: auto;background: none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h4>Majeed</h4>
                    <p>Architect & Town Planner</p>
                    <p>0323 4701671</p>
                </div>
            </div>
            {{--            row 1--}}
            <div class="row">

                <h1 class="display-4">NEWS AND STORIES</h1>

                <div class="agent-slider" style="margin: 0;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="border-radius: 0!important;">
                                    <img width="934" height="560"
                                         src="{{asset('landify/images/penal_experts/img_one.jpg')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <a style="margin: 0 0 10px;text-decoration: none;color: #000;" class="text-left">SBP takes another step to boost investment in real estate</a>
                                <div style="display: flex;flex-flow: row;justify-content: space-between;margin: 0 0 -10px">
                                    <a href="" style="height: 33px" class="btn btn-info text-left">Admin@landify</a>
                                    <p>March 16,2022</p>
                                </div>
                                <p class="text-left">1 comments</p>
                                <hr>
                                    <div  style="display: flex;flex-flow: row;justify-content: space-between">
                                        <a href="" style="text-decoration: none;color: #000">Read Article</a>
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="border-radius: 0!important;">
                                    <img width="934" height="560"
                                         src="{{asset('landify/images/penal_experts/img_two.jpg')}}" alt="panel">

                                </div>

                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <a style="margin: 0 0 10px;text-decoration: none;color: #000" class="text-left">6 real estate investment trusts worth Rs38bn expected this year</a>
                                <div style="display: flex;flex-flow: row;justify-content: space-between;margin: 0 0 -10px">
                                    <a href="" style="height: 33px" class="btn btn-info text-left">Admin@landify</a>
                                    <p>August 28,2017</p>
                                </div>
                                <p class="text-left">0 comments</p>
                                <hr>
                                <div  style="display: flex;flex-flow: row;justify-content: space-between">
                                    <a href="" style="text-decoration: none;color: #000">Read Article</a>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="border-radius: 0!important;">
                                    <img width="934" height="560"
                                         src="{{asset('landify/images/penal_experts/img_three.jpg')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <a style="margin: 0 0 10px;text-decoration: none;color: #000" class="text-left">Pakistan’s real estate market tends to ignore broad-scale macroeconomic indicators</a>
                                <div style="display: flex;flex-flow: row;justify-content: space-between;margin: 0 0 -10px">
                                    <a href="" style="height: 33px" class="btn btn-info text-left">Admin@landify</a>
                                    <p>March 16,2022</p>
                                </div>
                                <p class="text-left">1 comments</p>
                                <hr>
                                <div  style="display: flex;flex-flow: row;justify-content: space-between">
                                    <a href="" style="text-decoration: none;color: #000">Read Article</a>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-agent"
                             style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                            <div class="images"
                                 style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                <div class=""
                                     style="border-radius: 0!important;">
                                    <img width="934" height="560"
                                         src="{{asset('landify/images/penal_experts/img_four.jpg')}}" alt="panel">
                                </div>
                            </div>
                            <div class="agent-details" style="padding: 8px">
                                <a style="margin: 0 0 10px;text-decoration: none;color: #000" class="text-left">Real estate sector strikes gold</a>
                                <div style="display: flex;flex-flow: row;justify-content: space-between;margin: 0 0 -10px">
                                    <a href="" style="height: 33px" class="btn btn-info text-left">Admin@landify</a>
                                    <p>March 16,2022</p>
                                </div>
                                <p class="text-left">1 comments</p>
                                <hr>
                                <div  style="display: flex;flex-flow: row;justify-content: space-between">
                                    <a href="" style="text-decoration: none;color: #000">Read Article</a>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    </div>
    </div>






@endsection
