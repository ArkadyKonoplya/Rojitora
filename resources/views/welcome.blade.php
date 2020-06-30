<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ロジとら</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <!-- Styles -->
        
        <!-- Own define Style-->
        <link href="{{asset('css/style_r.bundle.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style_r.bundle_sec.css')}}" rel="stylesheet" type="text/css">

        <!--begin::Page Vendors Styles(used by this page) -->
    	<link href="{{asset('css/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Page Vendors Styles -->

        <!--begin:: Global Mandatory Vendors -->
        <link href="{{asset('css/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <link href="{{asset('css/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendors/general/@fortawesome/fontawesome-free/css/fontawesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css" rel="stylesheet">
        <!--end:: Global Optional Vendors -->
        <script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
        <script src="https://unpkg.com/vuejs-datepicker"></script>
        <!--begin::Global Theme Styles(used by all pages) -->

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{asset('/media/logos/favicon.ico')}}" />
    </head>
    <body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="#">
                    <img alt="Logo" src="{{asset('/media/img/logo_sm.png')}}" />
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
            </div>
        </div>

        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">

                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
                        <div class="kt-header__top">
                            <div class="kt-container form_style">

                                <!-- begin:: Brand -->
                                <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                    <div class="kt-header__brand-logo">
                                        <a href="/">
                                            <img alt="Logo" src="{{asset('/media/img/logo.png')}}" class="" />
                                            <img alt="Logo" src="{{asset('/media/img/logo_sm.png')}}" class="kt-header__brand-logo-sticky" />
                                        </a>
                                    </div>
                                </div>
                                <!-- end:: Brand -->
                                <!-- begin:: Brand -->
                                <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                    <div class="kt-header__brand-logo">
                                        <a href="javascript:void(0)">
                                            <img alt="Logo" src="{{asset('/media/img/support_avator.png')}}" class="kt-header__brand-logo-default" />
                                            <img alt="Logo" src="{{asset('/media/img/support_avator_sm.png')}}" class="kt-header__brand-logo-sticky" />
                                        </a>
                                    </div>
                                </div>
                                <!-- end:: Brand -->

                                <!-- begin:: Brand -->
                                <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                    <div class="kt-header__brand-logo">
                                    <a href="/question">                                
                                        <img alt="Logo" src="{{asset('/media/img/mail_icon.png')}}" class="kt-header__brand-logo-default"/>
                                        <img alt="Logo" src="{{asset('/media/img/mail_icon_sm.png')}}" class="kt-header__brand-logo-sticky" />
                                    </a>
                                    </div>
                                </div>
                                <!-- end:: Brand -->
                            </div>
                        </div>
                    </div>

                    <!-- end:: Header -->

                    <div>
                        <div id="app">
                            <router-view></router-view>
                        </div>
                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
                        <div class="kt-footer__top">
                            <div class="kt-container">
                                <!--begin:: Widgets/Outbound Bandwidth-->
                                <div class="kt-footer__section kt-footer--fit kt-footer--head-noborder kt-footer--phone">
                                    <div class="kt-footer__title kt-footer__space-x d-flex justify-content-center flex-wrap">
                                        <a>操作不明点がございましたら、お気軽にお問い合わせください。</a>
                                    </div>
                                    <div class="kt-footer__content kt-align-center mb-3">
                                        <a class="btn">受付時間 8:00〜18:00</a> <br>
                                        <a href="#" class="phone_number"><i><img src="{{asset('/media/img/phone_number_icon.png')}}"></i>0120-050-570</a>
                                    </div>
                                </div>
                                <!--end:: Widgets/Outbound Bandwidth-->
                            </div>
                        </div>
                        <div class="kt-footer__middle">
                            <img src="{{asset('/media/img/footer_background.png')}}" style="width:100%" alt="">
                            <div class="footer__nav">
                                <div class="kt-container">
                                    <div class="kt-footer__wrapper">
                                        <div class="kt-footer__menu d-flex justify-content-around">
                                            <a href="#" target="_blank">ご利用方法</a>
                                            <a href="#" target="_blank">会員登録</a>
                                            <a href="#" target="_blank">運営会社情報</a>
                                            <a href="#" target="_blank">よくあるご質問</a>
                                            <a href="#" target="_blank">お問い合わせ</a>
                                            <a href="#" target="_blank">利用規約</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-footer__bottom">
                            <div class="footer__top mb-4">
                                <div class="kt-container">
                                    <div class="kt-footer__wrapper d-flex justify-content-center">
                                        <div class="kt-footer__logo">
                                            <a href="/home">
                                                <img alt="Logo" src="{{asset('/media/img/logo_sm.png')}}">
                                            </a>
                                            <div class="kt-footer__copyright">
                                                テラテクニカル 株式会社<br>
                                                〒370-1207 群馬県高崎市綿貫町 1475-4 高南 F
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__end ">
                                <div class="kt-container border-bottom-line">
                                    <div class="kt-footer__wrapper">
                                        <div class="row w-100">
                                            <div class="col-xl-6">
                                                <div class="kt-footer__menu d-flex justify-content-around">
                                                    <a href="javascript:void(0)" target="_blank"><i><img src="{{asset('/media/img/phone_icon.png')}}"></i> 027-386-4141</a>
                                                    <a href="javascript:void(0)" target="_blank"><i class="btn">フリーダイヤル</i>0120-050-570</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="kt-footer__menu d-flex justify-content-around">
                                                    <a href="javascript:void(0)" target="_blank"><i><img src="{{asset('/media/img/printer_icon.png')}}"></i> 027-386-5019</a>
                                                    <a href="javascript:void(0)" target="_blank"><i class="btn">インターネット FAX</i><i><img src="{{asset('/media/img/phone_icon.png')}}"></i> 03-6369-3549</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-footer__copyright mt-4">
                                    (C)2019 ROJITORA
                                </div>
                            </div>
                        </div>
                    </div>

				    <!-- end:: Footer -->
			    </div>
            </div>
        </div>

    <!-- end:: Page -->
    
    <!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->
    </div>
           <script src="{{asset('js/app.js')}}"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>
    </body>
</html>
