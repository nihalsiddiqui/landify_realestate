@extends('npls.layouts.inc.head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks You!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<style>
    @media screen and (max-width: 480px) {
        .single-contact{
            margin: 10px;
        }
    }
    </style>
<body style="background: gray;">

    <section class="py-5">
        <div class="container">
            <div class="col-md-8 col-sm-12 col-xs-12 " style="width:100%;margin: auto;background:#fff; padding:37px;">
                <div class="row" >
                    <div class="col-md-12 col-sm-12 " >
                        <div class="text-center">
                            <h3 style="font-size: 2.3rem;">Thanks You! We'll be in touch soon.</h3>
                            <h4>while waiting to hear from us, you can also:</h4>
                        </div>
                    </div>
                </div>

                <div class="row" style="justify-content: space-between;" >
                    <div class="col-md-4 text-center" >
                        <a href="#"  style="color: #000; ">
                            <div class="single-contact" style="border: 0.3px solid gray; padding:25px;">
                                <span><i class="fa fa-user fa-3x" aria-hidden="true"></i>
                                </span>
                                <h3>Create your Zillow Premier Agent profile</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 text-center" >
                        <a href="#" style="color: #000;">
                            <div class="single-contact" style="border: 0.3px solid gray;padding:25px; ">
                                <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                                <h3>Download the Zillow Premier Agnet app</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 text-center" >
                        <a href="#" style="color: #000;">
                            <div class="single-contact" style="border: 0.3px solid gray;padding:25px; ">
                                <i class="fa fa-book fa-3x"></i>
                                <h3>Accesss training and resources</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-12 col-sm-12 " >
                        <div class="text-center" style="padding: 25px;">
                            <h4 style="line-height: 40px;">or call <a href="#" style="color: #46BFE2;">855-885-0115</a>
                            <br> We respect your privacy. See our <a href="{{route('privacy.policy')}}" style="color: #46BFE2;">privacy policy</a>.
                        </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
