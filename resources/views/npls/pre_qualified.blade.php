@extends("npls.layouts.master")
@section("page-title","Pre Qualified")
@section("main-content")
@section('style')
<style>
    * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}


#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    /* padding: 15px 15px 15px 0; */
    margin: 0;
    letter-spacing: 1px;
}

#msform input:focus,
#msform textarea:focus {
    font-weight: bold;
    font-size: 1rem;

}

#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}


.fit-image {
    width: 100%;
    object-fit: cover
}
@media screen and (max-width: 480px) {
.checkbox{
    font-size: 40rem;
}
.check_field{
    justify-content: space-around;
}
#msform{
    width: 100%;
}
#progressbar{
    margin-left: auto;
    margin-right: auto;
}
#credit{
    display: block;
}
}
</style>
@endsection
<div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="header-page">
                        <h1> Pre-Qualified</h1>
                        <ul>
                            <li> <a href="index.html">Home</a> </li>
                            <li> Pre-Qualified </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section breadcumb End Here -->

<!-- MultiStep Form -->
<div class="container-fluid" >
    <div class="row justify-content-center mt-0" style="display: flex;margin-left:0%;margin-right:0%; ">
        <div class="col-md-12 col-sm-9 text-center mt-3">
            <div class="card  pt-4 pb-0 mt-3" >
                <div class="row">
                    <div class="col-md-12">
                        <form id="msform" method="post" action="{{route('pre.Qualified')}}" style="width: 100%;">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar" >
                                <li class="active" style="width:32.3%;" id="account"><strong>Home Information</strong></li>
                                <li id="personal" style="width:32.3%;"><strong>Personal</strong></li>
                                <li id="confirm" style="width:32.3%;"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset style="width:100%;">
                                <div class="form-card" style=" box-shadow:0px 10px 16px -3px rgb(0 0 0 / 50%)" >
                                    <h4><b style="color: #000000">Are you first time home buyers?</b></h4>
                                    <div class="row" style=" color:#000000;" >
                                        <div class="col-md-6 col-lg-6 col-sm-6" style="display: flex;">
                                            <input type="checkbox" class="checkbox" name="first" value="yes" id="first" style="width: 10%; ">
                                            <h5 style="font-weight: normal; font-size:15px;"> Yes</h5>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6" style="display: flex;">
                                            <input type="checkbox" class="checkbox" name="first" value="No" id="first" style="width: 10%; ">
                                            <h5 style="font-weight: normal; font-size:15px;"> No</h5>
                                        </div>
                                    </div>
                                    <span class="hidden text-danger" id="error" style="font-size:1.1rem;"><b>Please select an option</b></span>


                                    <h4><b style="color: #000000">Where are you in your home-buying journey?</b></h4>
                                    <div class="row" style="color:#000">
                                        <div class="col-md-4 col-sm-12 col-lg-4" style="display: flex;">
                                            <input type="checkbox" class="checkbox" name="second" value="Just looking at houses" id="second" style="width: 10%; ">
                                            <h6 style="font-weight: normal; font-size:15px; "> Just looking at houses</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4" style="display: flex;">
                                            <input type="checkbox" class="checkbox" value="Only interest free mortgage" name="second" id="second" style="width: 10%; ">
                                            <h6 style="font-weight: normal; font-size:15px;"> only interest free mortgage</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4" style="display: flex;">
                                            <input type="checkbox" class="checkbox" name="second" value=" Under contract with agent" id="second" style="width: 10%; ">
                                            <h4 style="font-weight: normal; font-size:15px;"> Under contract with agent</h4>
                                        </div>

                                    </div>
                                    <span class="hidden text-danger" id="seconderror" style="font-size:1.1rem;"><b>Please select an option</b></span>

                                    <h4><b style="color: #000000">What type of a home are you looking for?</b></h4>
                                    <div class="row" style=" color:#000">
                                        <div class="col-md-3 col-lg-3 col-sm-12" style="display: flex;">
                                            <input type="checkbox" name="third" value="Detached" id="third" style="width: 10%; ">
                                            <h4 style="font-weight: normal; font-size:15px;"> House</h4>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-12" style="display: flex;">
                                            <input type="checkbox" name="third" value="Semi-Detached" id="third" style="width: 10%; ">
                                            <h4 style="font-weight: normal; font-size:15px;"> Lot</h4>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-12" style="display: flex;">
                                            <input type="checkbox" name="third" value="Townhouse" id="third" style="width: 10%; ">
                                            <h4 style="font-weight: normal; font-size:15px;">  File/Assignment</h4>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-12" style="display: flex;">
                                            <input type="checkbox" name="third" value="Condo/Appartment" id="third" style="width: 10%; ">
                                            <h4 style="font-weight: normal; font-size:15px;">Condo/Appartment</h4>
                                        </div>
                                    </div>
                                    <span class="hidden text-danger" id="thirderror" style="font-size:1.1rem;"><b>Please select an option</b></span>

                                    <h4><b style="color: #000000">What will you use this house as?</b></h4>
                                    <div class="row" style="color:#000">
                                        <div class="col-md-6 col-lg-6 col-sm-6" style="display: flex;">
                                        <input type="checkbox" class="checkbox" name="fourth" value="Prime Residence" id="fourth" style="width: 10%; ">
                                        <h4 style="font-weight: normal; font-size:15px;"> Prime Residence</h4>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6" style="display: flex;">
                                        <input type="checkbox" class="checkbox" name="fourth" value="Investment Property" id="fourth" style="width: 10%; ">
                                        <h4 style="font-weight: normal; font-size:15px;"> Investment Property</h4>
                                        </div>


                                    </div>
                                    <span class="hidden text-danger" id="fourtherror" style="font-size:1.1rem;"><b>Please select an option</b></span>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset >
                                <div class="form-card " style="box-shadow:0px 10px 16px -3px rgb(0 0 0 / 50%)">
                                    <h4><b style="color: #000000">How much of a down payment are you willing to make?</b></h4>
                                    <div class="row" style="color: #000">
                                    <div class="col-md-3" style="display: flex;">
                                        <input type="checkbox" name="fifth" id="fifth" value="Under Rs 50,000"  style="width: 10%;">
                                        <h5 style="font-weight: normal; font-size:15px;"> Under Rs 50,000</h5>
                                    </div>
                                    <div class="col-md-3" style="display: flex;">
                                        <input type="checkbox" name="fifth" value="Rs 50,000 - Rs 75,000" id="fifth" style="width: 10%; ">
                                        <h5 style="font-weight: normal; font-size:15px;"> Rs 50,000 - Rs 75,000</h5>
                                    </div>
                                    <div class="col-md-3" style="display: flex;">
                                        <input type="checkbox" name="fifth" value="Rs 75,000- Rs 100,000" id="fifth" style="width: 10%; ">
                                        <h5 style="font-weight: normal; font-size:15px;"> Rs 75,000- Rs 100,000</h5>
                                    </div>
                                    <div class="col-md-3" style="display: flex;">
                                        <input type="checkbox" name="fifth" value="Rs100,000 +" id="fifth" style="width: 10%; ">
                                        <h5 style="font-weight: normal; font-size:15px;"> Rs 100,000 +</h5>
                                    </div>
                                    <span class="hidden text-danger" id="fiftherror" style="font-size:1.1rem;"><b>Please select an option</b></span>
                                    </div>
                                    <h4><b style="color: #000000">What is your annual household income?</b></h4>
                                    <div class="row" style="display: flex; margin-bottom:3%; color:#000;">
                                        <input type="text" value="Rs" name="sixth"  id="sixth" required>
                                    </div>
                                    <span class="hidden text-danger"  id="sixtherror" style="font-size:1.1rem;"><b>Invalid Input</b></span>
                                    <h4><b style="color: #000000">
                                        What’s your credit score? (A rough estimate)</b></h4>
                                    <div class="row" style=" justify-content:space-between;color:#000">
                                    <div class="col-md-2 col-sm-12" id="credit" style="display: flex;">
                                        <input type="checkbox" name="seven" value="Good (650 +)" id="seven" style="width: auto; ">
                                        <h5 style="font-weight: normal; font-size:15px;">Good (650 +)</h5>
                                    </div>
                                    <div class="col-md-2 col-sm-12" id="credit" style="display: flex;">
                                        <input type="checkbox" name="seven" value=" Fair (550 – 649)" id="seven" style="width: auto; ">
                                        <h5 style="font-weight: normal; font-size:15px;"> Fair (550 – 649)</h5>
                                    </div>
                                    <div class=" col-md-2 col-sm-12" id="credit" style="display: flex;">
                                        <input type="checkbox" name="seven" value="Poor (Below 549)" id="seven" style="width: auto; ">
                                        <h5 style="font-weight: normal; font-size:15px;"> Poor (Below 549)</h5>
                                    </div>
                                    <div class=" col-md-3 col-sm-12" id="credit" style="display: flex;">
                                        <input type="checkbox" name="seven" value="Overseas Pakistani" id="seven" style="width: auto; ">
                                        <h5 style="font-weight: normal; font-size:15px;"> Overseas Pakistani</h5>
                                    </div>
                                    <div class=" col-md-2 col-sm-12" id="credit" style="display: flex;">
                                        <input type="checkbox" name="seven" value="Bankruptcy" id="seven" style="width: auto; ">
                                        <h5 style="font-weight: normal; font-size:15px;">Bankruptcy</h5>
                                    </div>
                                    </div>
                                    <span class="hidden text-danger" id="seventherror" style="font-size:1.1rem;"><b>Please fill an option</b></span>
                                    <h4><b style="color: #000000"   >What is your source of income?</b></h4>
                                    <div class="row" style=" color:#000">
                                        <div class="col-md-4 col-lg-4 col-sm-12" style="display: flex;">
                                        <input type="checkbox" name="eight" value="Self Employed" id="eight" style="width: 10%; ">
                                        <h5 style="font-weight: normal; font-size:15px;">Self Employed</h5>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-12" style="display: flex;">
                                        <input type="checkbox" name="eight" value="Salaried Professional" id="eight" style="width: 10%; ">
                                        <h5 style="font-weight: normal; font-size:15px;">Salaried Professional</h5>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-12" style="display: flex;">
                                        <input type="checkbox" name="eight" value="Business owner" id="eight" style="width: 10%; ">
                                        <h5 style="font-weight: normal; font-size:15px;">Business owner</h5>
                                        </div>
                                    </div>
                                    <span class="hidden text-danger" id="eighterror" style="font-size:1.1rem;"><b>Please fill an option</b></span>
                                </div>
                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                 <input type="button" name="nextbtn" class="nextbtn action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card" style="box-shadow:0px 10px 16px -3px rgb(0 0 0 / 50%)">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="firstname" id="firstname" style="border: 3px solid skyblue;margin-bottom:2%;"  class="form-control" placeholder="First Name" required aria-required="true">
                                            {{-- <span class="hidden text-danger" style="font-size: 1.1rem;" id="firstName" >Please Enter First Name </span> --}}
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="lastname"  style="border: 3px solid skyblue;margin-bottom:2%;" class="form-control" placeholder="Last Name" required aria-required="true">
                                            <span class="hidden text-danger" style="font-size: 1.1rem;" id="lastname" >Please Enter Last Name </span>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="email" id="email" style="border: 3px solid skyblue;margin-bottom:2%;"  class="form-control" placeholder="Email*" required aria-required="true">
                                            <span class="hidden text-danger" style="font-size: 1.1rem;" id="emailerror" >Please Enter Email </span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="contact" id="contact" style="border: 3px solid skyblue;margin-bottom:2%;" class="form-control" placeholder="Contact Number*" required aria-required="true">
                                            <span class="hidden text-danger" style="font-size: 1.1rem;" id="contacterror" >Please Contact Number </span>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="postal_code" id="postal_code" style="border: 3px solid skyblue;margin-bottom:2%;"  class="form-control" id="postal_code" placeholder=" your postal code/ zip code" required aria-required="true">
                                            <span class="hidden text-danger" style="font-size: 1.1rem;" id="postal_code_error" >Please Enter Postal Code </span>
                                        </div>
                                        <div class="col-md-12" style="color: #000">
                                            <h4>I agree to your <a href="" style="color:red;">Privacy Statement</a>
                                                 {{-- And <a href="" style="color: red;">CASL( Canada's Anti Span Legislation)</a> --}}
                                            </h4>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="" style="display: flex; color:#000">
                                                <input type="checkbox" name="submitcheckbox" id="submitcheckbox" style="width: auto; ">
                                                <h5 style="font-weight: normal; font-size:15px; width:auto;"> Yes</h5>
                                            </div>
                                            <span class="hidden text-danger" style="font-size: 1.1rem;" id="submiterror">Please fill checkbox</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="button_field">
                                    <input type="submit" name="" class="submit btn btn-lg btn-info" style="width: 100px;" value="submit" />
                                    <input type="button" name="previousbtn" class="previousbtn action-button-previous" value="Previous" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

    if($("input[name='first']").is(":checked") == true ){
        $('#error').addClass('hidden');
        // return true;
    }
    else if($("input[name='first']").is(":checked") != true) {
        $('#error').removeClass('hidden');
        return false;
    }
    if($("input[name='second']").is(":checked") == true){
        $('#seconderror').addClass('hidden');
        // return true;
    }
    else if($("input[name='second']").is(":checked") != true) {
        $('#seconderror').removeClass('hidden');
        return false;
    }
    if($("input[name='third']").is(":checked") == true){
        $('#thirderror').addClass('hidden');
        // return true;
    }
    else if($("input[name='third']").is(":checked") != true) {
        $('#thirderror').removeClass('hidden');
        return false;
    }
    if($("input[name='fourth']").is(":checked") == true){
        $('#fourtherror').addClass('hidden');
        // return true;
    }
    else if($("input[name='fourth']").is(":checked") != true) {
        $('#fourtherror').removeClass('hidden');
        return false;
    }else
    if($("input[name='fifth']").is(":checked") == true){
        $('#fiftherror').addClass('hidden');
        // return true;
    }
    else if($("input[name='fifth']").is(":checked") != true) {
        $('#fiftherror').removeClass('hidden');
        return false;
    }


current_fs = $(this).parent();
next_fs = $(this).parent().next();
//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});
$(".previous").click(function(){
current_fs = $(this).parent();
previous_fs = $(this).parent().prev();
// alert(current_fs);
//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
//show the previous fieldset
previous_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;
current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});
$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

});


$(document).ready(function(){
var current_fv, next_fv, previous_fv; //fieldsets
var opacity_fv;
$(".nextbtn").click(function(){

    if($("input[name='fifth']").is(":checked") == true ){
        $('#fiftherror').addClass('hidden');
        // return true;
    }
    else if($("input[name='fifth']").is(":checked") != true) {
        $('#fiftherror').removeClass('hidden');
        return false;
    }
    // if(inputfield == is("")){
    //     alert('done');
    //     $('#sixtherror').addClass('hidden');
    //     // return true;
    // }
    // // == null || inputfield == ''
    // else if(inputfield != true) {
    //     alert('error');
    //     $('#sixtherror').removeClass('hidden');
    //     return false;
    // }
    if($("input[name='seven']").is(":checked") == true){
        $('#seventherror').addClass('hidden');
        // return true;
    }
    else if($("input[name='seven']").is(":checked") != true) {
        $('#seventherror').removeClass('hidden');
        return false;
    }

    if($("input[name='eight']").is(":checked") == true){
        $('#eighterror').addClass('hidden');
        // return true;
    }
    else if($("input[name='eight']").is(":checked") != true) {
        $('#eighterror').removeClass('hidden');
        return false;
    }


current_fv = $(this).parent();
next_fv = $(this).parent().next();
//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fv)).addClass("active");
//show the next fieldset
next_fv.show();
//hide the current fieldset with style
current_fv.animate({opacity_fv: 0}, {
step: function(now) {
// for making fielset appear animation
opacity_fv = 1 - now;
current_fv.css({
'display': 'none',
'position': 'relative'
});
next_fv.css({'opacity': opacity_fv});
},
duration: 600
});
});
$(".previousbtn").click(function(){
    // alert('secondprev');
current_fv = $(this).parent().parent();
previous_fv = $(this).parent().parent().prev();
//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fv)).removeClass("active");
//show the previous fieldset
previous_fv.show();
//hide the current fieldset with style
current_fv.animate({opacity_fv: 0}, {
step: function(now) {
// for making fielset appear animation
opacity_fv = 1 - now;
current_fv.css({
'display': 'none',
'position': 'relative'
});
previous_fv.css({'opacity': opacity_fv});
},
duration: 600
});
});
$(".submit").click(function(){

    if($("input[name='submitcheckbox']").is(":checked") == true ){
        $('#submiterror').addClass('hidden');
    }
    else if($("input[name='submitcheckbox']").is(":checked") != true) {
        $('#submiterror').removeClass('hidden');
        return false;
    }
    // if($("input[name='firstname']").is(":checked") == true ){
    //     $('#firstName').addClass('hidden');
    //     // $('#lastname').removeClass('hidden');
    //     // $('#emailerror').removeClass('hidden');
    //     // $('#contacterror').removeClass('hidden');
    //     // $('#postal_code_error').removeClass('hidden');
    //     return false;
    // }else {
    //     // alert('asask');
    //     $('#firstName').removeClass('hidden');
    //     // $('#lastname').addClass('hidden');
    //     // $('#emailerror').addClass('hidden');
    //     // $('#contacterror').addClass('hidden');
    //     // $('#postal_code_error').addClass('hidden');
    // }
})
});
</script>
@endsection

@endsection
