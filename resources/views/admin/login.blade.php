@extends('admin.layouts.app')

@section('content')
    <div class="login-box-body"
         style="background: linear-gradient(45deg, black, transparent)!important; padding: 20px!important;border-top: 0!important;color: #fff!important;">
        <p class="login-box-msg">Sign in to start your session</p>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <p class="text text-danger" style="font-weight: bold;">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('admin.login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
@endsection
