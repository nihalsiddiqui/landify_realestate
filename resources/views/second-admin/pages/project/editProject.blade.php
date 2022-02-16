@section('page_title', 'Edit Project')

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
                                    <h4 class="card-title">Edit Project</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post"
                                          action="{{route('project.update',$project->id)}}"
                                          class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Project Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$project->name}}"
                                                               placeholder="Name"/>
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="project-type">Project Type <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="project_type"
                                                                id="project-type">
                                                            @foreach($project_types as $type)
                                                                <option
                                                                    value="{{$type->id}}" {{ $type->id == $project->project_type_id ? 'selected' : '' }}>{{$type->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Company <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control select2" name="company_id" multiple="multiple" id="">

                                                            @foreach($companies as $company)
                                                                <option
                                                                    value="{{$company->id}}" {{ in_array($company->id, $project->companies()->pluck('company_id')->toArray()) ? 'selected' : '' }}>{{$company->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>


                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Start Date<span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" id="first-name" class="form-control"
                                                               name="start_date" value="{{$project->start_date}}"
                                                               placeholder=" "/>
                                                        @error("start_date")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">End Date<span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" id="first-name" class="form-control"
                                                               name="end_date" value="{{$project->end_date}}"
                                                               placeholder=" "/>
                                                        @error("end_date")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Description</label>

                                                        <textarea class="form-control" name="description" id=""
                                                                  cols="30"
                                                                  rows="5">{{$project->description}}</textarea>
                                                        @error("description")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Project
                                                </button>
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
