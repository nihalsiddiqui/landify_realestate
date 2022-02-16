@section('page_title', 'Edit Company')

@extends('second-admin.layouts.master')
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
                                    <h4 class="card-title">Edit Company</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post" action="{{route('company.update',$company->id)}}" class="form form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Company Name <span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="name" value="{{$company->name}}" placeholder=" company" />
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Town Name <span class="text-danger">*</span></label>
                                                        <select class="form-control" id="" name="town_id">
                                                            <option value="" selected disabled>Select Town</option>

                                                            @foreach($towns as $town)
                                                                <option value="{{$town->id}}"
                                                                        @if($company->town_id == $town->id)
                                                                            selected
                                                                        @endif
                                                                >{{$town->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Company Role <span class="text-danger">*</span></label>
                                                        <select class="form-control" id="" name="company_role_id">
                                                            <option value="" selected disabled>Select Company Role</option>
                                                            @foreach($companyRoles as $companyRole)
                                                                <option value="{{$companyRole->id}} "
                                                                    @if($company->company_role_id == $companyRole->id  )
                                                                        selected
                                                                    @endif
                                                                    >{{$companyRole->name}}</option>
                                                            @endforeach                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Address 1<span class="text-danger">*</span></label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="address_line_1" value="{{$company->address_line_1}}" placeholder=" Address.." />
                                                        @error("address_line_1")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="contact-info">Address 2</label>
                                                        <input type="text" id="first-name" class="form-control"
                                                               name="address_line_2" value="{{$company->address_line_2}}" placeholder=" Address.." />
                                                        @error("address_line_2")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label for="contact-info">Description</label>

                                                        <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$company->description}}</textarea>
                                                        @error("description")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Update Company</button>
                                                <a href="{{route('company.list')}}" class="btn btn-outline-secondary">Back</a>
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
