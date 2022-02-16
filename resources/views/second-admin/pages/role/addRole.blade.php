@section('page_title', 'Add Role')

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
                                    <h4 class="card-title">Create New Role</h4>
                                </div>
                                <div class="card-body">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success p-1">{{ Session::get('success') }}</div>
                                    @endif
                                    <form class="form form-horizontal" role="form" method="post" action="{{ route('admin.role.store') }}">
                                        {{csrf_field()}}

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="name">Role Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="name" class="form-control"
                                                               name="name" placeholder="Role Name" value="{{ old('name') }}"/>
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="first-name">Permission's <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select class="form-control select2" multiple="multiple"
                                                                name="permissions[]" id="permissions">
                                                            @foreach($permissions as $permission)
                                                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("permissions")
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3"style="text-align: end">
                                                <button type="submit" class="btn btn-primary mr-1">Create Role</button>
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
