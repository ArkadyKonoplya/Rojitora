<template>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch mt-4">
        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                <!-- begin:: Content -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid">
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-10">
                            <!--begin:: Widgets/Blog-->
                            <div class="kt-portlet kt-portlet--height-fluid kt-current_info">
                                <div class="kt-portlet__body">
                                    <div class="kt-current_info__wrapper">
                                        <div class="kt-current_info__text1 kt-align-center">

                                            よくある質問
                                            <span class="tooltip11">
                                                <i class='fas fa-question-circle tooltip_sty'></i>
                                            </span>
                                        </div>
                                        <div class="flex-wrap bg-content-color-green">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body" style = "background-color: #efefef;">
                                                    <div class="kt-widget1 kt-widget1--fit">
                                                        <div class="kt-widget1__item mb-3" style = "border-bottom: 0.1px solid #c0c1c1;">
                                                            <div class="kt-widget1__info" style="width:100%;margin-top: 40px;">
                                                                <span class = "kt-wiget-sty-page3-span" style = "color: #ff6600; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;Q&nbsp;</span>
                                                                <span class="kt-widget1__title kt-wiget-sty-page3-span" style = "color: #2c5aa0; font-size: 20px; font-weight: bold;">「ロジとら」は無料で使用できますか。</span><br><br>
                                                                <span class = "kt-wiget-sty-page3-span" style = "color: #2c5aa0; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;A&nbsp;&nbsp;</span>

                                                                <span class="kt-widget1__desc kt-wiget-sty-page3-span" style = "color: #000000; font-size: 18px; font-weight: bold;display: inline;">会員登録〜情報閲覧まで無料でご利用できます</span>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget1__item mb-3" style = "border-bottom: 0.1px solid #c0c1c1;">
                                                            <div class="kt-widget1__info" style="width:100%">
                                                                <span style = "color: #ff6600; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;Q&nbsp;</span>
                                                                <span class="kt-widget1__title" style = "color: #2c5aa0; font-size: 20px; font-weight: bold;">どういった情報が載ってますか</span><br><br>
                                                                <span style = "color: #2c5aa0; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;A&nbsp;&nbsp;</span>
                                                                <span class="kt-widget1__desc kt-wiget-sty-page3-span" style = "color: #000000; font-size: 18px; font-weight: bold;">全国各地の”ロジとら”に集まる全ての情報を掲載してます</span>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget1__item mb-3" style = "border-bottom: 0.1px solid #c0c1c1;">
                                                            <div class="kt-widget1__info" style="width:100%">
                                                                <span style = "color: #ff6600; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;Q&nbsp;</span>
                                                                <span class="kt-widget1__title" style = "color: #2c5aa0; font-size: 20px; font-weight: bold;">「ロジとら」でなにができるの</span><br><br>
                                                                <span class = "kt-wiget-sty-page3-span" style = "color: #2c5aa0; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;A&nbsp;&nbsp;</span>
                                                                <span class="kt-widget1__desc kt-wiget-sty-page3-span" style = "color: #000000; font-size: 18px; font-weight: bold;">お目当ての積地・降地を選択し荷物・空車情報が検索できます</span>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget1__item mb-3">
                                                            <div class="kt-widget1__info" style = "width:100% margin-bottom: 30px;">
                                                                <span style = "color: #ff6600; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;Q&nbsp;</span>
                                                                <span class="kt-widget1__title" style = "color: #2c5aa0; font-size: 20px; font-weight: bold;">目当ての情報があったらどうするの</span><br><br>
                                                                <span style = "color: #2c5aa0; font-size: 37px; font-weight: bold;">&nbsp;&nbsp;A&nbsp;&nbsp;</span>
                                                                <span class="kt-widget1__desc" style = "color: #000000; font-size: 18px; font-weight: bold;">問い合わせ番号と担当者名をお電話にてお伝えください。</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Blog-->
                        </div>
                        <rightsidebar01></rightsidebar01>
                    </div>
                    <!--End::Section-->
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
</template>
<script>
    import rightsidebar01 from '../components/RightSidebar01.vue'
    export default {
        components: {
            rightsidebar01
        }
    }
</script>

