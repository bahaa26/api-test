<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>


    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <title>  {{ __('home.title') }}</title>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">

    <link rel='stylesheet' href='{{asset('js/plugins/grandcarrental-custom-post/css/fontawesome-stars-o.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('js/plugins/post-views-counter/css/frontend.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('js/plugins/revslider/public/assets/css/settings.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/reset.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/wordpress.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/animation.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/ilightbox/ilightbox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/jqueryui/custom.css')}}' type='text/css' media='all' />
    {{-- <link rel='stylesheet' href='{{asset('js/plugins/mediaelement/mediaelementplayer-legacy.min.css')}}' type='text/css' media='all' /> --}}
    <link rel='stylesheet' href='{{asset('js/plugins/flexslider/flexslider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/tooltipster.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/odometer-theme-minimal.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/menus/leftalignmenu.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/font-awesome.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/themify-icons.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/kirki.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/grid.css')}}' type='text/css' media='all' />
    @if(App::getLocale() == 'ar') 
    <link rel='stylesheet' href='{{asset('css/rtl.css')}}' type='text/css' media='all' />
    @endif

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Work+Sans%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A300%2Cregular%2C500%2C600%2C700%2C900&#038;subset' type='text/css' media='all' />



</head>

<body class="home page-template-default page page-id-3075 woocommerce-no-js ppb_enable">

    @include('layout/nav')
    <div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url({{asset('images/air/banner_c.jpg')}});">
        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <div class="page_title_content">
                    <h1 class="withtopbar">{{__('home.contact')}}</h1>
                    <div class="page_tagline">
                       {{__('pages.contact.one')}} </div>
                </div>
            </div>
        </div>
    </div>

            <div class="ppb_wrapper hasbg withtopbar">
                <div class="one withsmallpadding ppb_text" style="text-align:center;padding:0px 0 0px 0;margin-top:20px;">
                    <div class="standard_wrapper">
                        <div class="page_content_wrapper">
                            <div class="inner">
                                <div style="margin:auto;width:80%">
                                    </p>
                                    <h4 class="p1"><span class="s1"><b>{{__('pages.contact.time_d')}}, {{__('pages.contact.serv_d')}} </b></span></h4>
                                    {{-- <div style="margin-top: 30px;">
                                        <div class="social_wrapper shortcode dark ">
                                            <ul>
                                                <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                                <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                                                <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one withsmallpadding ppb_text" style="text-align:left;padding:0px 0 0px 0;margin-bottom:60px;">
                    <div class="standard_wrapper">
                        <div class="page_content_wrapper">
                            <div class="inner">
                                <div style="margin:auto;width:60%">
                                    <div role="form" class="wpcf7" id="wpcf7-f2465-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form class="quform" action="{{route('send')}}" method="post" enctype="multipart/form-data" onclick="">
                                            @csrf
                                            <div class="quform-elements">
                                                <div class="quform-element">
                                                    
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                        </span> 
                                                    
                                                </div>
                                                <div class="quform-element">
                                                    
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-email">
                                                            <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                        </span> 
                                                    
                                                </div>
                                                <div class="quform-element">
                                                    
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-message">
                                                            <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                        </span>
                                                    
                                                </div>
                                                
                                                <!-- Begin Submit button -->
                                                <div class="quform-submit">
                                                    <div class="quform-submit-inner">
                                                        <button type="submit" class="submit-button"><span>Send</span></button>
                                                    </div>
                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one_half_bg withsmallpadding ppb_text_image withbg parallax " style="font-size:18px;width:50%;background-image:url({{asset('images/smoha.jpg')}});background-position: center center;text-align:center;padding:100px 0 100px 0;color:#ffffff !important;">
                    <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.5);background:rgba(0,0,0,0.5);"></div>
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:100%">
                                </p>
                                <h2 style="color: #fff;">{{__('home.country')}}</h2>
                                <p> {{__('home.adress')}} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="one_half_bg withsmallpadding ppb_text_image withbg parallax " style="font-size:18px;width:50%;background-image:url({{asset('images/cairo.jpg')}});background-position: center center;text-align:center;padding:100px 0 100px 0;color:#ffffff !important;">
                    <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.5);background:rgba(0,0,0,0.5);"></div>
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:100%">
                                </p>
                                <h2 style="color: #fff;">{{__('home.country')}}</h2>
                                <p> {{__('home.adress2')}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @include('layout/footer')
    </div>
    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
    </div>

    <script type='text/javascript' src='{{asset('js/jquery.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery-migrate.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/grandcarrental-custom-post/js/jquery.barrating.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js')}}'></script>
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script> 
 <script>
        (function() {
            function addEventListener(element, event, handler) {
                if (element.addEventListener) {
                    element.addEventListener(event, handler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + event, handler);
                }
            }

            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields && urlFields.length > 0) {
                for (var j = 0; j < urlFields.length; j++) {
                    addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                }
            } /* test if browser supports date fields */
            var testInput = document.createElement('input');
            testInput.setAttribute('type', 'date');
            if (testInput.type !== 'date') {

                /* add placeholder & pattern to all date fields */
                var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                for (var i = 0; i < dateFields.length; i++) {
                    if (!dateFields[i].placeholder) {
                        dateFields[i].placeholder = 'YYYY-MM-DD';
                    }
                    if (!dateFields[i].pattern) {
                        dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                    }
                }
            }

        })();
    </script> 
    <script type='text/javascript' src='{{asset('js/plugins/ui/core.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/ui/datepicker.min.js')}}'></script>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script> 
    <script type='text/javascript' src='{{asset('js/plugins/jquery.requestAnimationFrame.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/ilightbox.packed.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.easing.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/waypoints.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.isotope.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.masory.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.tooltipster.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jarallax.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.sticky-kit.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.stellar.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.cookie.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/custom_plugins.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/custom.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/custom_onepage.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jarallax-video.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/plugins/jquery.cookie.js')}}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(Session::get('success')) {!! Session::get('success') !!} @endif
</body>
</html>