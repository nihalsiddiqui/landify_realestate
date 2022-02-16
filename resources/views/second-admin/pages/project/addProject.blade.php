@section('page_title', 'Add Project')

@extends('second-admin.layouts.master')
@section('quillStyle')
    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Project</h4>
                                </div>
                                <div class="card-body">
                                    <form  enctype="multipart/form-data" method="post" action="{{route('project.store')}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Project Name<span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" placeholder="Name" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="project-type">Project Type <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="project_type" id="project-type">
                                                            @foreach($project_types as $type)
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("project_type")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Company <span class="text-danger">*</span></label>
                                                        <select class="form-control project_type select2" name="company_id[]" multiple="multiple" id="">
                                                            @foreach($companies as $company)
                                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>



                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Start Date <span class="text-danger">*</span></label>
                                                        <input type="date" id="first-name" class="form-control"
                                                               name="start_date" placeholder=" " />
                                                        @error("start_date")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">End Date <span class="text-danger">*</span></label>
                                                        <input type="date" id="first-name" class="form-control"
                                                               name="end_date" placeholder=" " />
                                                        @error("end_date")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Description</label>

                                                        <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                                                        @error("description")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Add Project</button>
                                                <a href="{{route('project.list')}}" class="btn btn-outline-secondary">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('quillJs')
    <script src="{{asset('admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script>
        $(function () {
            $('.select2').select2({
                placeholder: "select"
            })
        })
    </script>
@endsection
