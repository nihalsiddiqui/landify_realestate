@section('page_title', 'All Tags')

@extends('second-admin.layouts.master')
@section('quillStyle')
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
    {{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    {{--    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" type="text/css"
          href="{{asset("second-admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset("second-admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset("second-admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset("second-admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css")}}">


@endsection
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-body">
            <!-- Ajax Sourced Server-side -->
            <section id="ajax-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-datatable">
                                <table class="datatables-ajax table data-list-view">
                                    <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>For Property</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--/ Ajax Sourced Server-side -->

        </div>
    </div>
    </div>

@endsection
@section('quillJs')
    <script src="{{asset("second-admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js")}}"></script>
    <script src="{{asset("second-admin/app-assets/js/scripts/tables/table-datatables-advanced.js")}}"></script>


    <!-- END: Page Vendor JS-->

    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
    {{--    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}
    {{--    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>--}}
    <script>
        $(document).ready(function () {
            dataListView = $(".data-list-view").DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                cache: true,
                dom:
                    '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                ajax: "{{ route('tags.index') }}",

                columns: [
                    // {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'slug', name: 'slug'},
                    {data: 'forProperty', name: 'forProperty'},
                    {data: 'action', name: 'action'},
                    // {data: 'action', name: 'action', 'orderable': false},
                ],
                columnDefs: [
                    {
                        orderable: true,
                        targets: 0,
                        // checkboxes: {selectRow: true}
                    }
                ],
                language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                }

            });

        });


    </script>

@endsection
