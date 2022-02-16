@extends('admin.layouts.master')

@section('main-content')
    <section class="content-header">
        <h1>
            All Users
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">All Users</li>
        </ol>
    </section>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Users Information Is Show On This Page</h3>
                <a href="{{ route('user.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Del</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>abdul</td>
                            <td>abc</td>
                            <td>123</td>
                            <td>active</td>
                            <td>edit</td>
                            <td>del</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection