@extends("landify.layouts.master")
@section("page-title","panel of experts")
@section('style')
    <style>

    </style>
@endsection
@section('main-content')



        <div class="real-estate-agent-area " style="padding:auto;background:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title" style="margin-bottom:0;padding:0;">
                            <h2 style="font-size: 1.7rem;text-align:left;color: #3c4044;font-family: 'Roboto',Arial,sans-serif;font-weight: 700;line-height: 20px;padding-bottom: 20px;">
                                Foreclosure</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="" style="margin: 0;">

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-agent"
                                     style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">

                                    <div class="images"
                                         style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">
                                        <div class="image-frame"
                                             style="width: 261px;height: 175px;border-radius: 0!important;">

                                                <img style="width: 100%;height: 100%"
                                                     src="{{asset('landify/images/registry_check.png')}}" alt="">

                                                <img src="" alt="">

                                            <div class="icons-area">
                                                <ul>
                                                    <li><a class="fancybox"
                                                           href="{{asset('landify/images/heart.png')}}"
                                                           data-fancybox-group="gallery"
                                                           title=name"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">
                                            <div style="display: flex;justify-content: space-between;">
                                                <span style="padding: 5px;"></span>

                                                    <span style="background-color: #cc4117;padding: 5px;"></span>

                                            </div>
                                        </span>

                                    </div>
                                    <div class="agent-details" style="padding: 13px;">

                                        <a style="text-align: left"
                                           href="">
                                            <span
                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>
                                            <span
                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>
                                            <span
                                                style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>
                                        </a>

                                </div>
                            </div>

                    </div>
{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}





                    </div>
{{--                    <div class="" style="margin-top:100px;" >--}}

{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                            <div class="single-agent"--}}
{{--                                 style="padding: 0px; border: 1px solid #f2f2f2;box-shadow: 0px 10px 16px -3px rgba(0,0,0,0.5);">--}}

{{--                                <div class="images"--}}
{{--                                     style="margin-bottom: 3px!important;border-radius: 0!important;width: unset!important;height: unset!important;border: 0px!important;padding: 0px!important;">--}}
{{--                                    <div class="image-frame"--}}
{{--                                         style="width: 261px;height: 175px;border-radius: 0!important;">--}}

{{--                                        <img style="width: 100%;height: 100%"--}}
{{--                                             src="{{asset('landify/images/registry_check.png')}}" alt="">--}}

{{--                                        <img src="" alt="">--}}

{{--                                        <div class="icons-area">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="fancybox"--}}
{{--                                                       href="{{asset('landify/images/heart.png')}}"--}}
{{--                                                       data-fancybox-group="gallery"--}}
{{--                                                       title=name"><i--}}
{{--                                                            class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span style="font-weight: 500;line-height: 10px;letter-spacing: .3px;color: #fff;text-transform: uppercase;background-color: rgba(0,0,0,.4);text-align: left;position: absolute;bottom: 0;left: 0;display: inline-block;width: 100%;">--}}
{{--                                            <div style="display: flex;justify-content: space-between;">--}}
{{--                                                <span style="padding: 5px;"></span>--}}

{{--                                                --}}{{--                                                    <span style="background-color: #cc4117;padding: 5px;"></span>--}}

{{--                                            </div>--}}
{{--                                        </span>--}}

{{--                                </div>--}}
{{--                                <div class="agent-details" style="padding: 13px;">--}}

{{--                                    <a style="text-align: left"--}}
{{--                                       href="">--}}
{{--                                            <span--}}
{{--                                                style="font-family: 'Roboto',Arial,sans-serif;font-weight: 500;line-height: 16px;color: #46BFE2;text-transform: uppercase;">name</span>--}}
{{--                                        <span--}}
{{--                                        --}}{{--                                                style=";color: #73787d;text-align: left;max-width: 500px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;line-height: 22px">address</span>--}}
{{--                                        <span--}}
{{--                                            style="; text-align: left;font-family: 'Roboto',Arial,sans-serif;font-size: 16px;font-weight: 500;line-height: 20px;color: #3c4044;">icons</span>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}





{{--                    </div>--}}
            </div>
        </div>
        </div>






@endsection
