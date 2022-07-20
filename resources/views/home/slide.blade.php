<div class="one withsmallpadding ppb_car_search_background parallax withbg " style="padding-top: 150px !important;text-align:center;height:800px;background-image:url({{asset('images/slide.jpg')}});background-position: center center;color:#ffffff;">
    <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.2);background:rgba(0,0,0,0.2);"></div>
    <div class="center_wrapper">
        <div class="inner_content">
            <div class="standard_wrapper">
                <h2 class="ppb_title" style="color:#ffffff;">{{__('home.slide.one')}} <span style="color: #ed2027;">{{__('home.slide.two')}}</span></h2>
                <div class="page_tagline" style="color:#ffffff;">{{__('home.slide.three')}}</div>
                <form class="car_search_form" method="get" action="#">
                    <a href="{{route('contact', [App::getLocale()]) }}" id="car_search_btn" class="button"> {{__('home.contact')}} </a>
                    <a href="tel:01200497400" id="car_search_btn" class="button"> {{__('home.book')}} </a>
                </form>
            </div>
        </div>
    </div>
</div>