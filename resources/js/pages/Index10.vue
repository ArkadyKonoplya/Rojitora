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
                                <div class="kt-portlet__body">
                                    <div class="kt-widget5__content">
                                        <div class="row">
                                            <div class="col-4 text-right"></div>
                                            <div class="col-4 text-center"><h2 class="kt-widget5__normal text-dark"><img src="/media/img/truck_icon-2.png" class="mr-3">空車情報新規登録
                                                </h2>
                                            </div>
                                            <div class="col-4 text-right mt-4">
                                                    <label class="kt-radio kt-radio--brand text-dark kt-font-lg">
                                                        <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>必須
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body bg-grey text-dark">
                                    <div class="kt-form mt-5">
                                        <div class="kt-portlet__body">
                                            <form class="kt-form form_style" action="#" @submit.prevent="add_truck">
                                                <input type="hidden" name="emptyplace" id="emptyplace"  value="" >
                                                <input type="hidden" name="beginplace" id="beginplace"  value="" >
                                                <input type="hidden" name="endplace" id="endplace"  value="">
                                                <div class="form-group">
                                                    <label class="kt-checkbox kt-checkbox--brand kt-font-xl text-dark">
                                                        <input type="checkbox" name="emergencyCase" v-model="formdata.urgent_matter">   
                                                            <span class="bg-white border-dark"></span>
                                                    </label>
                                                    <label class="form-group kt-font-xl text-dark ml-5">
                                                        ※大至急手配しなくてはいけない案件の場合はチェックしてください。
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group mr-xl-5">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>空車日時
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <datepicker :value="state.date" class="form-control kt-font-xl action-date" style="height:3.82rem" format = "yyyy-MM-dd"
                                                                                v-model="formdata.emptycar_date" name="emptycar_date"></datepicker>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label class="kt-font-xl" for="emptycar_time">時間
                                                                        </label>
                                                                        <select class="col form-control input_style kt-font-xl" v-model="formdata.emptycar_time" id="emptycar_time">
                                                                            <option value="99">問わず</option>
                                                                           <option value="0">0時</option>
                                                                           <option value="1">1時</option>
                                                                           <option value="2">2時</option>
                                                                           <option value="3">3時</option>
                                                                           <option value="4">4時</option>
                                                                           <option value="5">5時</option>
                                                                           <option value="6">6時</option>
                                                                           <option value="7">7時</option>
                                                                           <option value="8">8時</option>
                                                                           <option value="9">9時</option>
                                                                           <option value="10">10時</option>
                                                                           <option value="11">11時</option>
                                                                           <option value="12">12時</option>
                                                                           <option value="13">13時</option>
                                                                           <option value="14">14時</option>
                                                                           <option value="15">15時</option>
                                                                           <option value="16">16時</option>
                                                                           <option value="17">17時</option>
                                                                           <option value="18">18時</option>
                                                                           <option value="19">19時</option>
                                                                           <option value="20">20時</option>
                                                                           <option value="21">21時</option>
                                                                           <option value="22">22時</option>
                                                                           <option value="23">23時</option>
                                                                           <option value="30">午前</option>
                                                                           <option value="31" selected>午後</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mr-xl-5">
                                                                <label class="kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>積可能地
                                                                </label>
                                                                <div class="box_left form-control kt-font-xl input_style" id="box_left" v-on:click="leftClick">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mr-xl-5">
                                                                <div class="row mt-5">
                                                                    <div class="col-xl-6">
                                                                        <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>降日時
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <datepicker :value="state.date" class="form-control kt-font-xl action-date" v-model="formdata.drop_date" format = "yyyy-MM-dd" name=""></datepicker>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label class="kt-font-xl">時間
                                                                        </label>
                                                                        <select class="col form-control input_style kt-font-xl" v-model="formdata.drop_time"  id="drop_time">
                                                                           <option value="99">問わず</option>
                                                                           <option value="0">0時</option>
                                                                           <option value="1">1時</option>
                                                                           <option value="2">2時</option>
                                                                           <option value="3">3時</option>
                                                                           <option value="4">4時</option>
                                                                           <option value="5">5時</option>
                                                                           <option value="6">6時</option>
                                                                           <option value="7">7時</option>
                                                                           <option value="8">8時</option>
                                                                           <option value="9">9時</option>
                                                                           <option value="10">10時</option>
                                                                           <option value="11">11時</option>
                                                                           <option value="12">12時</option>
                                                                           <option value="13">13時</option>
                                                                           <option value="14">14時</option>
                                                                           <option value="15">15時</option>
                                                                           <option value="16">16時</option>
                                                                           <option value="17">17時</option>
                                                                           <option value="18">18時</option>
                                                                           <option value="19">19時</option>
                                                                           <option value="20">20時</option>
                                                                           <option value="21">21時</option>
                                                                           <option value="22">22時</option>
                                                                           <option value="23">23時</option>
                                                                           <option value="30">午前</option>
                                                                           <option value="31" selected>午後</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mr-xl-5">
                                                                <label class="kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>降可能地
                                                                </label>
                                                                <div class="box_right form-control kt-font-xl input_style" id="box_right" v-on:click="rightClick">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group ml-xl-5">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>空車地
                                                                        </label>
                                                                        <div id="box_empty" v-on:click="emptyClick"   class="box_empty form-control kt-font-xl">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label class="kt-font-xl">市区町村</label>
                                                                        <div class="input-group">
                                                                            <input class="col form-control kt-font-xl input_style" v-model="formdata.emptycar_city" name="emptycar_city" style="height:60px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <deliveryMap></deliveryMap>
                                                <div class="kt-portlet__content text-dark">
                                                    <div class="form-group row">
                                                    <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>降可能地</label>
                                                    <div class="col-10 mt-3">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" value="unspecified" id="unspecified" v-model="formdata.vehicle_inf">指定なし
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" checked="checked" id="15t" value="15t" v-model="formdata.vehicle_inf">15t
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="10t" value="10t" v-model="formdata.vehicle_inf">10t
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio"id="7t" value="7t" v-model="formdata.vehicle_inf">7t
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="4t" value="4t" v-model="formdata.vehicle_inf">4t
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="2t" value="2t"v-model="formdata.vehicle_inf">2t
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="light" value="light" v-model="formdata.vehicle_inf">軽
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="trailer" value="trailer" v-model="formdata.vehicle_inf">トレーラー
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <!--end::Form-->
                                            <!--begin::Form-->
                                            
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>種類1</label>
                                                    <div class="col-10 mt-3">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="unspecified_type1" vaule="unspecified_type1" v-model="formdata.vehicle_type1">指定なし
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" checked="checked" id="wing" value="wing" v-model="formdata.vehicle_type1">ウイング
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="box" value="box" v-model="formdata.vehicle_type1">箱
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="flat" value="flat" v-model="formdata.vehicle_type1">平
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="one" vaule="one" v-model="formdata.vehicle_type1">ユニック
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="wing_box" value="wing_box" v-model="formdata.vehicle_type1">ウイング・箱
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                                                <input type="radio" id="wing_taria" value="wing_taria" v-model="formdata.vehicle_type1">ウイング・平
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="flat_unic" value="flat_unic"  v-model="formdata.vehicle_type1">平・ユニック
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="other" value="other" name="other" v-model="formdata.vehicle_type1">その他
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-text kt-text--brand kt-font-lg">
                                                                <input type="text" class="form-control kt-font-xl input_style" id="vehicle_type1_content" v-model="formdata.vehicle_type1_content" name="vehicle_type1_content">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <!--end::Form-->
                                            <!--begin::Form-->
                                            
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label kt-font-xl">種類2</label>
                                                    <div class="col-10">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="unspecified_type2" value="unspecified_type2" v-model="formdata.vehicle_type2">指定なし
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" checked="checked" id="high_floor" value="high_floor" v-model="formdata.vehicle_type2">高床
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="medium_floor" value="medium_floor" v-model="formdata.vehicle_type2">中低床
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="low_floor" value="low_floor" v-model="formdata.vehicle_type2">低床
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="full_wide" value="full_wide" v-model="formdata.vehicle_type2">フルワイド
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="semi_wide" value="semi_wide" v-model="formdata.vehicle_type2">セミワイド
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                                                <input type="radio" id="standard" value="standard" v-model="formdata.vehicle_type2">標準
                                                                <span></span>
                                                            </label><br>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="long" value="long" v-model="formdata.vehicle_type2">ロング
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="short" value="short" v-model="formdata.vehicle_type2">ショート
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <!--end::Form-->
                                            <!--begin::Form-->
                                            
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label kt-font-xl">種類3</label>
                                                    <div class="col-10">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="unspecified_type3" value="unspecified_type3" v-model="formdata.vehicle_type3">指定なし
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" checked="checked" id="all_wheel" value="all_wheel" v-model="formdata.vehicle_type3">総輪エアサス
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="rear_wheel" value="rear_wheel" v-model="formdata.vehicle_type3">後輪エアサス
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="air_suspension" value="air_suspension" v-model="formdata.vehicle_type3">エアサスゲート
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="aluminum" value="aluminum" v-model="formdata.vehicle_type3">アルミ
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="hood" value="hood" v-model="formdata.vehicle_type3">幌
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                                                <input type="radio" id="power_gate" value="power_gate" v-model="formdata.vehicle_type3">パワーゲート
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="flat" value="flat" v-model="formdata.vehicle_type3">フラット
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="stachoin" value="stachoin" v-model="formdata.vehicle_type3">スタンション
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="jorder" value="jorder" v-model="formdata.vehicle_type3">ジョルダー
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="frozen" value="frozen" v-model="formdata.vehicle_type3">冷凍
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--brand kt-font-lg">
                                                                <input type="radio" id="refrigerated" value="refrigerated" v-model="formdata.vehicle_type3">冷蔵
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label kt-font-xl">備考</label>
                                                    <div class="col-10 mt-3">
                                                        <textarea class="form-control kt-font-lg input_style" name="bigo" v-model="formdata.bigo" spellcheck="true" rows="7"></textarea>
                                                        <label class="col-form-label kt-font-xl" style="color: #ff6600">※備考には金額、連絡先等は明記しないでください</label>
                                                    </div>
                                                </div>
                                                    <div class="form-group row mt-5">
                                                        <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>電話番号</label>
                                                        <div class="col-10 mt-2">
                                                            <input class="col form-control kt-font-xl input_style" v-model="formdata.phone_number" name="phone_number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-5">
                                                        <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>担当者</label>
                                                        <div class="col-10 mt-2">
                                                            <input class="col form-control kt-font-xl input_style" v-model="formdata.person_charge" name="person_charge">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4 mt-5">
                                                        <button type="submit" class="btn btn-primary first_time_btn custom-btn" style="max-width: 300px; height: 80px; border-radius: 10px 10px">登錄内容確認</button>
                                                    </div>
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
	@import '/css/style_r.bundle.css?v=1.1';
	@import '/css/style_contact.css';
</style>

<script>
import firsttopsidebar from '../components/FirstTopSidebar.vue'
import secondtopsidebar from '../components/SecondTopSidebar.vue'
import rightsidebar02 from '../components/RightSidebar02.vue'
import deliveryMap from '../components/DeliveryMap.vue'
import Datepicker from 'vuejs-datepicker'
import moment from 'moment'
export default {
    data() {
        return{
            state: '',
             formdata:{vehicle_inf: '', vehicle_type1: '', vehicle_type2: '', vehicle_type3: '',
            bigo: '', phone_number: '', person_charge: '',emptycar_space: '',land_pos_loading: [], land_pos_drop:[], emptycar_date:'',emptycar_time:'',
            emptycar_city:'',drop_date:'',drop_time:'', vehicle_type1_content:'',}
        }
       
    },
    
    methods:{
        emptyClick() {
            $('.box_empty').css('border-color', '#F03');
            $('.box_empty').css('background-color', '#EEFFFF');
            $('.box_left').css('border-color', '#d9d9d9');
            $('.box_left').css('background-color', '#fff');
            $('.box_right').css('border-color', '#d9d9d9');
            $('.box_right').css('background-color', '#fff');
        },

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
        add_truck() {
          
            this.formdata.emptycar_date = moment(this.formdata.emptycar_date).format('YYYY-MM-DD');
            this.formdata.drop_date = moment(this.formdata.drop_date).format('YYYY-MM-DD');
            this.formdata.emptycar_space = $('#emptyplace').val();
            this.formdata.land_pos_loading = $('#beginplace').val();
            this.formdata.land_pos_drop = $('#endplace').val();
            let uri = '/emptycar/store';
                this.axios.post(uri, this.formdata).then((response) => {
                    this.$router.push({name: 'index12'});
                });
        }
    },
    components: {
        firsttopsidebar,secondtopsidebar,rightsidebar02,deliveryMap, Datepicker
    },
}


</script>
