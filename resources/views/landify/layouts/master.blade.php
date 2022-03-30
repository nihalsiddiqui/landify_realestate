<!doctype html>
<html class="no-js" lang="">

@include("landify.layouts.inc.head")

<style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px #e7afaf;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background:#ff0000;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background:#ff0000;
    }

</style>
<body>

{{--<!-- Page Loader Start Here -->--}}
{{--@include("npls.layouts.inc.preloader")--}}
<!-- Page Loader End Here -->
<!-- Header Area Start Here -->
@include("landify.layouts.inc.header")
<!-- Header Area End Here -->


<!-- Main Content Area-->
@section("main-content")
@show
<!-- Main Content Area ended -->
<!-- Subscribe Area Start Here -->
{{--@include("npls.layouts.inc.subscriber")--}}
<!-- Subscribe Area End Here -->
<!-- Footer top area start -->
@include("landify.layouts.inc.footer")
<!-- Footer End Here -->

<!-- all js here -->
@include("landify.layouts.inc.script")
@section('script')
@show

</body>
</html>
