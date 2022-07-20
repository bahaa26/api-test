<div id="footer" class=" ppb_wrapper">

    <ul class="sidebar_widget three">
        <li id="text-2" class="widget widget_text">
            <h2 class="widgettitle">{{__('home.about')}}</h2>
            <div class="textwidget">
                <p>{{__('home.footer.one')}}</p>
                <p class="logo"><img src="{{asset('images/logo.png')}}" alt="" width="175" height="24"></p>
            </div>
        </li>
        <li id="text-3" class="widget widget_text">
            <h2 class="widgettitle">{{__('home.footer.contact-info')}}</h2>
            <div class="textwidget">
                <p class="mobile"><span class="ti-mobile" style="margin-right:10px;"></span>{{__('home.phone-v')}}</p>
                <!-- <p><span class="ti-location-pin" style="margin-right:10px;"></span>184 Main Street East Perl Habour 8007</p>
                <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00 Sunday CLOSED</p> -->
                <div style="margin-top:20px;">
                    <div class="social_wrapper shortcode dark ">
                        <ul>
                            <li class="whatsapp"><a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send/?phone=201155135558&text&app_absent=0"><i class="fa fa-whatsapp"></i></a></li>
                            <!-- <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                            <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li id="mc4wp_form_widget-5" class="widget widget_mc4wp_form_widget">
            <h2 class="widgettitle">{{__('home.contact')}}</h2>

            <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-27" method="post" data-id="27" data-name="Newsletter">
                <p><span class="ti-location-pin" style="margin-right:10px;"></span>{{__('home.adress')}}</p>
                <p><span class="ti-location-pin" style="margin-right:10px;"></span>{{__('home.adress2')}}</p>
                <p><span class="ti-email" style="margin-right:10px;"></span>info@deep-egypt.com</p>
                <br>
                <a href="{{route('contact', [App::getLocale()]) }}" id="car_search_btn" class="button"> {{__('home.contact')}} </a>
            </form>
        </li>
    </ul>
</div>

<div class="footer_bar  ppb_wrapper ">

    <div class="footer_bar_wrapper ">
        <div class="menu-footer-menu-container">
            <ul id="footer_menu" class="footer_nav">
                <li class="menu-item"><a href="{{route('about', [App::getLocale()]) }}">{{__('home.about')}}</a></li>
                <li class="menu-item"><a href="{{route('home', [App::getLocale()]) }}">{{__('home.limousine')}}</a></li>
                <li class="menu-item"><a href="{{route('home', [App::getLocale()]) }}">{{__('home.services')}}</a></li>
                <li class="menu-item"><a href="https://api.whatsapp.com/send/?phone=201155135558&text&app_absent=0">{{__('home.faqs')}}</a></li>
                <li class="menu-item"><a href="{{route('contact', [App::getLocale()]) }}">{{__('home.contact')}}</a></li>
            </ul>
        </div>
        <div id="copyright">© Copyright DEEB EGYPR All Rights Reserved  2022</div>
        <br class="clear" />
    </div>
</div>




