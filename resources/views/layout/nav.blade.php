<input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign" />
<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0" />
<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0" />
<input type="hidden" id="pp_image_path" name="pp_image_path" value="http://themes.themegoods.com/grandcarrental/demo/wp-content/themes/grandcarrental/images/" />
<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
<input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
<input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="0" />
<input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1" />
<input type="hidden" id="pp_topbar" name="pp_topbar" value="1" />
<input type="hidden" id="post_client_column" name="post_client_column" value="4" />
<input type="hidden" id="pp_back" name="pp_back" value="Back" />
<input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="" />
<input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value="" />
<input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value="" />
<input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black" />
<input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal" />
<input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1" />
<input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8" />
<input type="hidden" id="tg_cart_url" name="tg_cart_url" value="http://themes.themegoods.com/grandcarrental/demo/cart/" />
<input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0" />
<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3" />

 <!-- Begin mobile menu -->
 <a id="close_mobile_menu" href="javascript:;"></a>

 <div class="mobile_menu_wrapper">
     <a id="mobile_menu_close" href="javascript:;" class="button"><span class="ti-close"></span></a>

     <div class="mobile_menu_content">

         <div class="menu-main-menu-container">
             <ul id="mobile_main_menu" class="mobile_main_nav">
                 <li class="menu-item current-menu-item menu-item-has-children"><a href="{{route('home', [App::getLocale()]) }}">{{ __('home.home') }}</a>
                 </li>
                 <li class="menu-item menu-item-has-children"><a href="{{route('about', [App::getLocale()]) }}">{{ __('home.about') }}</a>
                 </li>
                 <li class="menu-item menu-item-has-children"><a href="#">{{ __('home.services') }}</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="{{route('air', [App::getLocale()]) }}">{{ __('home.ser.one') }}</a></li>
                        <li class="menu-item"><a href="{{route('city', [App::getLocale()]) }}">{{ __('home.ser.two') }}</a></li>
                        <li class="menu-item"><a href="{{route('trans', [App::getLocale()]) }}">{{ __('home.ser.three') }}</a></li>
                        <li class="menu-item"><a href="{{route('mar', [App::getLocale()]) }}">{{ __('home.ser.four') }}</a></li>
                        <li class="menu-item"><a href="{{route('bus', [App::getLocale()]) }}">{{ __('home.ser.five') }}</a></li>
                        <li class="menu-item"><a href="{{route('mat', [App::getLocale()]) }}">{{ __('home.ser.sex') }}</a></li>
                    </ul>
                 </li>
                 <li class="menu-item menu-item-has-children"><a href="{{route('contact', [App::getLocale()]) }}">{{ __('home.contact') }}</a>
                 <li class="menu-item menu-item-has-children"><a href="tel:01200497400">{{ __('home.book') }}</a>
                 </li>
                 <li class="menu-item menu-item-has-children"><a href="#">@if(App::getLocale() == 'ar') {{ __('home.arabic') }} @else {{ __('home.english') }} @endif</a>
                    <ul class="sub-menu">
                        {{-- <li class="menu-item"><a href="{{url('en')}}">{{ __('home.english') }}</a></li> --}}
                        <li class="menu-item"><a href="{{url('ar')}}">{{ __('home.arabic') }}</a></li>
                    </ul>
                </li>
             </ul>
         </div>
         <!-- Begin side menu sidebar -->
         <div class="page_content_wrapper">
             <div class="sidebar_wrapper">
                 <div class="sidebar">

                     <div class="content">

                         <ul class="sidebar_widget">
                             <li id="text-8" class="widget widget_text">
                                 <h2 class="widgettitle">{{ __('home.mor-info') }}</h2>
                                 <div class="textwidget">
                                     <span class="ti-mobile" style="margin-right:10px;"></span>{{ __('home.phone-v') }}
                                     <br />
                                     <span class="ti-mobile" style="margin-right:10px;"></span>{{ __('home.phone-s') }}
                                     <br/>
                                     {{-- <span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00</div> --}}
                             </li>
                         </ul>

                     </div>

                 </div>
             </div>
         </div>
         <!-- End side menu sidebar -->

         <div class="social_wrapper">
             <ul>
                <li class="whatsapp"><a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send/?phone=201155135558&text&app_absent=0"><i class="fa fa-whatsapp"></i></a></li>
             </ul>
         </div>
     </div>
 </div>
 <!-- End mobile menu -->
 <!-- Begin template wrapper -->
 <div id="wrapper" class="hasbg transparent">

     <div class="header_style_wrapper">


         <div class="top_bar hasbg">
             <div class="standard_wrapper">
                 <!-- Begin logo -->
                 <div id="logo_wrapper">

                     <div id="logo_normal" class="logo_container">
                         <div class="logo_align">
                             <a id="custom_logo" class="logo_wrapper hidden" href="{{route('home', [App::getLocale()]) }}">
                                 <img src="{{asset('images/logo.png')}}" alt="" width="175" height="101" />
                             </a>
                         </div>
                     </div>

                     <div id="logo_transparent" class="logo_container">
                         <div class="logo_align">
                             <a id="custom_logo_transparent" class="logo_wrapper default" href="{{route('home', [App::getLocale()]) }}">
                                 <img src="{{asset('images/logo.png')}}" alt="" width="175" height="101" />
                             </a>
                         </div>
                     </div>
                     <!-- End logo -->

                     <div id="menu_wrapper">
                         <div id="nav_wrapper">
                             <div class="nav_wrapper_inner">
                                 <div id="menu_border_wrapper">
                                     <div class="menu-main-menu-container">
                                         <ul id="main_menu" class="nav">
                                             <li class="menu-item current-menu-item menu-item-has-children "><a href="{{route('home', [App::getLocale()]) }}">{{ __('home.home') }}</a>
                                             </li>
                                             <li class="menu-item menu-item-has-children "><a href="{{route('about', [App::getLocale()]) }}">{{ __('home.about') }}</a>
                                             </li>
                                             <li class="menu-item menu-item-has-children "><a href="#">{{ __('home.services') }}</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="{{route('air', [App::getLocale()]) }}">{{ __('home.ser.one') }}</a></li>
                                                    <li class="menu-item"><a href="{{route('city', [App::getLocale()]) }}">{{ __('home.ser.two') }}</a></li>
                                                    <li class="menu-item"><a href="{{route('trans', [App::getLocale()]) }}">{{ __('home.ser.three') }}</a></li>
                                                    <li class="menu-item"><a href="{{route('mar', [App::getLocale()]) }}">{{ __('home.ser.four') }}</a></li>
                                                    <li class="menu-item"><a href="{{route('bus', [App::getLocale()]) }}">{{ __('home.ser.five') }}</a></li>
                                                    <li class="menu-item"><a href="{{route('mat', [App::getLocale()]) }}">{{ __('home.ser.sex') }}</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-has-children "><a href="{{route('contact', [App::getLocale()]) }}">{{ __('home.contact') }}</a>
                                             </li>
                                             <li class="menu-item menu-item-has-children"><a href="#">@if(App::getLocale() == 'ar') {{ __('home.arabic') }} @else {{ __('home.english') }} @endif</a>
                                                <ul class="sub-menu">
                                                    {{-- <li class="menu-item"><a href="{{url('en')}}">{{ __('home.english') }}</a></li> --}}
                                                    <li class="menu-item"><a href="{{url('ar')}}">{{ __('home.arabic') }}</a></li>
                                                </ul>
                                            </li>
                                             <li class="menu-item menu-item-has-children "><a href="tel:01200497400">{{ __('home.book') }}</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!-- Begin right corner buttons -->
                             <div id="logo_right_button">

                                 <!-- Begin side menu -->
                                 <a href="javascript:;" id="mobile_nav_icon"><span class="ti-menu"></span></a>
                                 <!-- End side menu -->



                             </div>
                             <!-- End right corner buttons -->
                         </div>
                         <!-- End main nav -->
                     </div>

                 </div>
             </div>
         </div>
     </div>