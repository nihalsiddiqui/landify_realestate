<style>
    #city{
        display: block!important;
        height: 51px!important;
    }
</style>
<div class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="subscribe-text">
                    <h3>SUBSCRIBE FOR NEW LISTING</h3>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="newsletter wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <form>
                        <div class="" style="display: flex;flex-flow: row;">
                            <label><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                            <input placeholder="youremail@domain.com"/>
                            <select  name="city" style="width: 32%;" id="city">
                                <option selected disabled>Select City</option>
                                @foreach($cities_provider as $city)
                                    <option
                                        value="{{$city->name}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            <div class="nice-select" style="display: none"></div>
                            <button>Subscribe</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
