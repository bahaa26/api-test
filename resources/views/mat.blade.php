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

    <div class="ppb_wrapper  ">
        @include('airport/banner')

        <div class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0; ">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <h2 class="ppb_title" style="">{{__('home.mot.title')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="one">
            <div class="one_half_bg parallax" style="background-image:url({{asset('images/air/mot_s.jpg')}});height:550px;"></div>
            <div class="one_half_bg" style="padding:80px;">
                <h2 class="ppb_title" style="">{{__('home.mot.name')}}</h2>
                <div class="ppb_header_content">
                    <p>{{__('home.mot.one')}}</p>
                </div>
            </div>
            <br class="clear" />
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
</body>
</html>