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
                @can('users.create',Auth::user())
                    <a href="{{ route('user.create') }}" class="btn btn-primary pull-right">Add New</a>
                @endcan
            </div>

{{--            <form method="post" action="{{ route('user.bulk_option') }}" enctype="multipart/form-data">--}}
{{--                {{ csrf_field() }}--}}
{{--                {{ method_field('PUT') }}--}}
{{--                @can('users.update',Auth::user())--}}
{{--                    <div class="" style="margin-left:10px; ">--}}
{{--                        <select name="bulk_option" style="width: 250px;" class="form-control">--}}
{{--                            <option disabled selected>Select Bulk Option</option>--}}
{{--                            <option value="active" class="btn btn-success">Active</option>--}}
{{--                            <option value="deactivated" class="btn btn-default">Deactivate</option>--}}
{{--                            <option value="delete" class="btn btn-danger">Delete</option>--}}
{{--                        </select>--}}
{{--                        <input type="submit" name="bulk_select" class="btn btn-success" style="margin-left:190px; " value="Apply">--}}
{{--                    </div>--}}
{{--                @endcan--}}
                {{--@if(isset($_POST['bulk_select'])){--}}
                    {{--@foreach($_POST['single_item'] as $some_id)--}}
                        {{--{{ $bulk = $_POST['bulk_option'] }}--}}
                        {{--@if($bulk == 'active')--}}
                            {{--{{--}}
                                {{--admin::table('admins')--}}
                                {{--->where('id', $id )--}}
                                {{--->update(['status' => 1])--}}
                            {{--}}--}}
                        {{--@endif--}}
                        {{--@if($bulk == 'deactivated')--}}
                            {{--DB::table('admins')--}}
                                {{--->where('id', {{ $id }})--}}
                                {{--->update(['status' => 0]);--}}
                        {{--@endif--}}
                        {{--@if($bulk == 'delete')--}}
                            {{--$del_query = DB::table('admins')--}}
                                {{--->where('id', {{ $id }})--}}
                                {{--->delete();--}}
                            {{--@if($del_query)--}}

                            {{--@endif--}}
                        {{--@endif--}}

                    {{--@endforeach--}}
                {{--}--}}
                {{--@endif--}}

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
{{--                            @can('users.update',Auth::user())--}}
{{--                                <th><input type="checkbox" id="checkBoxes"></th>--}}
{{--                            @endcan--}}
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>Status</th>
                            @can('users.update',Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('users.delete',Auth::user())
                                <th>Del</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
{{--                                @can('users.update',Auth::user())--}}
{{--                                    <td><input type="checkbox" name="single_item[]" value="{{ $user->id }}" class="checkBox"></td>--}}
{{--                                @endcan--}}
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{ ucwords($user -> name) }}</td>
                                <td>{{ $user -> email }}</td>
                                <td>
                                    @foreach($roles as $role)
                                        @foreach($user -> role as $userRole)
                                            @if($userRole -> id == $role -> id)
                                                {{ ucwords($role -> name) }}
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                {{--<td><img src="{{ asset('public/storage/user') }}/{{$user->image}}" alt="not found" width="70px" height="40px"></td>--}}
                                <td class="text-center">
                                    @if($user -> status == 1)
                                        <p class="btn btn-success">Active</p>
                                    @else
                                        <p class="btn btn-default">Not Active</p>
                                    @endif
                                </td>
                                @can('users.update',Auth::user())
                                    <td><a href="{{ route('user.edit',$user->id) }}"><i class="fa fa-edit"></i></a></td>
                                @endcan
                                @can('users.delete',Auth::user())
                                    <td><a href="{{ route('user.destroy',$user->id) }}" onclick="
                                        if (confirm('Are you sure to delete User({{ $user -> name }})?')){
                                             event.preventDefault();
                                             document.getElementById('del_form{{ $user -> id }}').submit();
                                        }
                                        else{
                                            event.preventDefault();
                                        }
                                    "><i class="fa fa-trash"></i></a>
                                    </td>
                                @endcan
                                <form action="{{ route('user.destroy',$user -> id) }}" method="post" id="del_form{{ $user -> id }}" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--            </form>--}}
        </div>
    </div>

@endsection