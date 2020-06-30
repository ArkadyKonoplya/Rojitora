<template>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                <!-- begin:: Content -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid">

                    <!--Begin::Dashboard 2-->

                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="kt-space-20"></div>
                            <!--begin:: Widgets/Blog-->
                            <div class="kt-portlet kt-portlet--height-fluid kt-current_info">
                                <firsttopsidebar></firsttopsidebar>
                                <secondtopsidebar></secondtopsidebar>                               
                                <!-- <div class="kt-portlet__body"> -->
                                    <div class="kt-portlet__body">
                                        <div class="kt-widget5__content">
                                            <div class="row">
                                                <div class="col-4 text-right"></div>
                                                <div class="col-4 text-center"><h2 class="kt-widget5__normal text-dark"><img src="/media/img/freight-1.png" class="mr-3">空車情報検索
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <div class="kt-portlet__body bg-grey text-dark">
                                    <div class="kt-form">
                                        <div class="kt-portlet__body">
                                            <form class="kt-form form_style" action="#" @submit.prevent="search_truck">
                                                <input type="hidden" name="emptyplace" value="">
                                                <input type="hidden" name="beginplace" value="">
                                                <input type="hidden" name="endplace" value="">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label class="kt-font-xl">積日指定
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-xl-5">
                                                                        <div class="input-group">
                                                                             <datepicker :value="state.date" class="form-control kt-font-xl action-date" style="font-size:1rem;height:3.82rem" format = "yyyy-MM-dd" name=""></datepicker>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-1 text-center kt-font-xl">
                                                                        <label class="kt-font-xl mt-3">~
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xl-5">
                                                                        <div class="input-group">
                                                                            <datepicker :value="state.date" class="form-control kt-font-xl action-date" style="height:3.82rem" format = "yyyy-MM-dd" name=""></datepicker>
                                                                        </div>							
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xl-11">
                                                                        <label class="kt-font-xl">積地</label>
                                                                        <div class="input-group">
                                                                            <div class="box_left col form-control kt-font-xl input_style" id="box_left" v-on:click="leftClick">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label class="kt-font-xl ml-5">降日指定
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-xl-5 ml-5">
                                                                        <div class="input-group">
                                                                            <datepicker :value="state.date" class="form-control kt-font-xl action-date" format = "yyyy-MM-dd" name=""></datepicker>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-1 text-center kt-font-xl">
                                                                        <label class="kt-font-xl mt-3">~
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xl-5">
                                                                        <div class="input-group">
                                                                            <datepicker :value="state.date" class="form-control kt-font-xl action-date" format = "yyyy-MM-dd" name=""></datepicker>
                                                                        </div>							
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xl-11 ml-5">
                                                                        <label class="kt-font-xl">降地
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <div class="box_right col form-control kt-font-xl input_style" id="box_right" v-on:click="rightClick">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <deliveryMap></deliveryMap>
                                                <div class="kt-portlet__content text-dark">
                                                    <div class="form-group text-center mt-4">
                                                        <label class="form-label kt-font-xl">さらに詳しい条件を選択</label>
                                                    </div>
                                                    <!--begin::Form-->
                                                    <form class="kt-form form_style">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label kt-font-xl">車輌</label>
                                                            <div class="col-10 mt-1">
                                                                <div class="kt-radio-inline">
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" checked="checked" name="checkbox4">15t
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">10t
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">7t
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">4t
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">2t
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">軽
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">トレーラー
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Form-->
                                                    <form class="kt-form mt-4">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label kt-font-xl">種類</label>
                                                            <div class="col-10 mt-1">
                                                                <div class="kt-radio-inline">
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" checked="checked" name="checkbox4">ウイング
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">箱
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">平
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">ユニック
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">ウイング・箱
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg mb-4">
                                                                        <input type="radio" name="checkbox4">ウイング・平
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">平・ユニック
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">その他
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-text kt-text--brand kt-font-lg">
                                                                        <input type="text" class="form-control kt-font-xl input_style" name="">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Form-->
                                                    <form class="kt-form mt-5">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label kt-font-xl">指定条件1</label>
                                                            <div class="col-10">
                                                                <div class="kt-radio-inline">
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">高床
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" checked="checked" name="checkbox4">中低床
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">低床
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">フルワイド
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">セミワイド
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">標準
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">ロング
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">ショート
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Form-->
                                                    <form class="kt-form mt-5">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label kt-font-xl">指定条件2</label>
                                                            <div class="col-10">
                                                                <div class="kt-radio-inline">
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" checked="checked" name="checkbox4">総輪エアサス
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">後輪エアサス
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">エアサスゲート
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">アルミ
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">幌
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">パワーゲート
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg mb-4">
                                                                        <input type="radio" name="checkbox4">フラット
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">スタンション
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">ジョルダー
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                                                        <input type="radio" name="checkbox4">冷凍
                                                                        <span class="bg-white border-dark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Form-->
                                                    <form class="kt-form mt-5">
                                                        <div class="form-group row mb-4 mt-5">
                                                            <button class="btn btn-primary first_time_btn custom-btn" style="width: 300px; height: 80px; border-radius: 10px 10px">検 &nbsp; 索</button>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Blog-->
                        </div>
                        <rightsidebar02></rightsidebar02>
                    </div>
                    <!--End::Dashboard 2-->
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
</template>
<style>
	@import '/css/style_r.bundle.css';
	@import '/css/style_contact.css';
</style>
<script>
import firsttopsidebar from '../components/FirstTopSidebar.vue'
import secondtopsidebar from '../components/SecondTopSidebar.vue'
import rightsidebar02 from '../components/RightSidebar02.vue'
import deliveryMap from '../components/DeliveryMap'
import Datepicker from 'vuejs-datepicker';
export default {
    data() {
        return{
            state: '',
        }
       
    },
     components: {
        firsttopsidebar,secondtopsidebar,rightsidebar02,deliveryMap, Datepicker
    },
    methods: {
        rightClick() {
            $('.box_empty').css('border-color', '#d9d9d9');
            $('.box_empty').css('background-color', '#fff');
            $('.box_left').css('border-color', '#d9d9d9');
            $('.box_left').css('background-color', '#fff');
            $('.box_right').css('border-color', '#F03');
            $('.box_right').css('background-color', '#EEFFFF');
        },

        leftClick() {
            $('.box_empty').css('border-color', '#d9d9d9');
            $('.box_empty').css('background-color', '#fff');
            $('.box_left').css('border-color', '#F03');
            $('.box_left').css('background-color', '#EEFFFF');
            $('.box_right').css('border-color', '#d9d9d9');
            $('.box_right').css('background-color', '#fff');
        },
        search_truck()  {
            alert('succesuful!');
            
        }
    }
}
</script>
<style scoped>
    .vdp-datepicker>div>input{
        font-size: 16px;
    }
</style>



