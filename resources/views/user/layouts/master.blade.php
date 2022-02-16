<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('user.layouts.head')
<!-- END: Head-->
@include('user.layouts.style')
@yield('quillStyle')
@yield('agGridStyle')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static"  data-open="click" data-menu="vertical-menu-modern" data-col="">
@include('user.layouts.navbar')
@include('user.layouts.header')


@include('user.layouts.sidebar')

<div class="container">
    @section('content')
    @show
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('user.layouts.footer')

@include('user.layouts.script')
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

@yield('agGridJs')
@yield('quillJs')

</body>
<!-- END: Body-->

</html>
