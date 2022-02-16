    <!DOCTYPE html>
    <html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    @include('second-admin.layouts.head')
    <!-- END: Head-->
    @include('second-admin.layouts.style')
    @yield('quillStyle')
    @yield('agGridStyle')
    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    @include('second-admin.layouts.navbar')
    @include('second-admin.layouts.header')


    @include('second-admin.layouts.sidebar')

    {{-- @include('second-admin.pages.dashboard') --}}
    <div class="container">
        @section('content')
        @show
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('second-admin.layouts.footer')

    @include('second-admin.layouts.script')
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
