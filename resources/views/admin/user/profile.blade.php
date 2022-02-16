
<!DOCTYPE html>
<html >
<head>
    @include('admin/layouts/head');
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <base target="_self">
    <meta name="description" content="User information form snippet with timezones" />
    <meta name="google" value="notranslate">



    <!--stylesheets / link tags loaded here-->


    <link rel="stylesheet"href="{{asset('public/admin')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/bower_components/font-awesome/css/font-awesome.min.css">




    <style type="text/css">/* CSS used here will be applied after bootstrap.css */</style>

</head>
<body >

<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <form class="form-horizontal" role="form" action="{{route('user.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="col-md-12">
                <div class="col-md-3">
                <div class="text-center">
                    <img src="{{asset('public/storage/user-images')}}/{{Auth::user()->image}}" width="100%" height="250px" class="avatar img-circle" alt="avatar" name="image">
                    <h6>Upload a different photo...</h6>

                    <input type="file" class="form-control">
                </div>

                <div class="">
                    <form role="form">
                        <div class="form-group" style="margin-top: 20px;">
                            <label for="exampleInputRole">Role</label>
                            @foreach(Auth::user()->role as $role)
                            <input type="text" class="form-control" name="role" disabled="" value="
                            {{$role->name}}">
                            @endforeach
                        </div>
                    </form>

                </div>
            </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <h3 class="text-center text-primary">Personal Information</h3>
                        <div class="error-page">
                            @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                    <div>
                                        <strong class="alert text-danger">{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-lg-3 control-label">Full Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="email"  value="{{Auth::user()->email}}">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Change Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Confirm password:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label ">Phone:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="phone" value="{{Auth::user()->phone}}">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Description</label>
                            <div class="col-md-8">
                                <textarea cols="70" rows="10" name="description" id="body">
                                    {{Auth::user()->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <span></span>
                        <a href="{{route('admin-home')}}" class="btn btn-warning">Cencel</a>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>

<script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
        window.alert = function(){/*disable alert*/};
        window.confirm = function(){/*disable confirm*/};
        window.prompt = function(){/*disable prompt*/};
        window.open = function(){/*disable open*/};
    }

    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
        var links = document.getElementsByTagName("A");
        for(var i=0; i < links.length; i++) {
            if(links[i].href.indexOf('#')!=-1) {
                links[i].addEventListener("click", function(e) {
                    console.debug("prevent href=# click");
                    if (this.hash) {
                        if (this.hash=="#") {
                            e.preventDefault();
                            return false;
                        }
                        else {
                            /*
                            var el = document.getElementById(this.hash.replace(/#/, ""));
                            if (el) {
                              el.scrollIntoView(true);
                            }
                            */
                        }
                    }
                    return false;
                })
            }
        }
    }, false);
</script>

@include('admin/layouts/footer');
<!--scripts loaded here-->

<!-- jQuery 3 -->
<script src="{{asset('public/admin')}}/bower_components/jquery/dist/jquery2.2.4.js"></script>


<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('body')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>

</body>
</html>
