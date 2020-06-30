<template>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch mt-4">
        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                <!-- begin:: Content -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid">

                    <!--Begin::Dashboard 2-->

                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-10">
                            <!--begin:: Widgets/Blog-->
                            <div class="kt-space-40"></div>
                            <div class="kt-current_info__wrapper" style="padding-top: 50px;">
                                <div class="kt-current_info__text1 kt-align-center">
                                    運営会社情報
                                        <img alt="Logo" style= "vertical-align: sub;" src="/media/img/arrow_mail_small.png" class="kt-header__brand-logo-sticky" />
                                </div>
                            </div>
                            <div class="kt-space-40"></div>
                            
                            <div class="kt-portlet" style="background-color: #efefef; color: #000;font-size: 15px;font-weight: bold;border-radius: 5px;display:inline-block;width: 100%;">

                                <span class = "kt-portlet-sty-left" style="border-radius: 5px 0 0 0;"> 
                                    会社名
                                </span>
                                <span class = "kt-portlet-sty-right" style="border-radius: 0 5px 0 0;">
                                    テラテクニカル株式会社
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    資本金
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    4000000円
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    設立
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    2013年3月
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    所在地
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    〒370-1207群馬県高崎市綿貫町1475-4高南F
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    代表者
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    影山力也
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    電話
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    TEL：027-386-4141  フリーダイヤル：0120-050-570
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    FAX
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    027-386-5019  インターネットFAX：03-6369-3549
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    従業員数
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    18名
                                </span>

                                <span class = "kt-portlet-sty-left"> 
                                    事業内容
                                </span>
                                <span class = "kt-portlet-sty-right">
                                    一般貨物自動車運送事業・貨物利用運送事業
                                </span>

                                <span class = "kt-portlet-sty-left" style="border-bottom:1px solid #a9aaa9;border-radius: 0 0 0 5px;"> 
                                    事業免許
                                </span>
                                <span class = "kt-portlet-sty-right" style="border-bottom:1px solid #a9aaa9;border-radius: 0 0 5px 0;">
                                    関自貨第943号/関自貨第2309号
                                </span>
                                <!--begin::Form-->
                                <!--end::Form-->
                            </div>
                            <!--end:: Widgets/Blog-->
                        </div>
                        <rightsidebar01></rightsidebar01>
                    </div>

                    <!--End::Section-->
                    <!--End::Dashboard 2-->
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
</template>
<style>
	@import '/css/style_r.bundle.css';
    @import '/css/style_r.bundle_sec.css';
</style>
<script>
import rightsidebar01 from '../components/RightSidebar01.vue'
export default {
    components: {
        rightsidebar01
    }
}
</script>