<template>
    <div class="col-xl-2 pr-0 pl-0">
        <!--begin:: Widgets/Inbound Bandwidth-->
        <div class="kt-space-20"></div>
        <div class="kt-portlet  kt-portlet--check kt-portlet--fit kt-portlet--head-noborder">
            <div class="kt-portlet__body kt-portlet__space-x">
                <div class ="kt-align-center sidebar-name mb-3">簡易検索 </div>
                <div class = "kt-align-center loads-check">荷物情報検索</div>
            </div>
        </div>
        <div class = "kt-portlet">
            <div class = "kt-portlet__body kt-portlet_check">
                <form  @submit.prevent="luggage_search" action="#" id="validated-form" class="kt-form">
                    <div class="form-group">
                        <label>積地</label>
                        <select class="form-control mb-2" id="area01" name="accumulate_city" v-model="luggagedata.accumulate_city">
                            <option :value="null">県を選択</option>
                            <option value="0"></option>
                            <option value="1">北海道</option>
                            <option value="2">北東北</option>
                            <option value="3">南東北</option>
                            <option value="4">北関東</option>
                            <option value="5">南関東</option>
                            <option value="6">甲信越</option>
                            <option value="7">北陸</option>
                            <option value="8">中京</option>
                            <option value="9">関西</option>
                            <option value="10">中国</option>
                            <option value="11">四国</option>
                            <option value="12">九州・沖縄</option>
                        </select>
                    
                        <select class="form-control" name="accumulate_country" id="pref01" v-model="luggagedata.accumulate_country">
                            <option :value="null">地方を選択</option>
                            <option value="0" data-val="0"></option>
                            <option value="pref17" data-val="1">北海道</option>
                            <option value="pref19" data-val="2">青森県</option>
                            <option value="pref21" data-val="2">岩手県</option>
                            <option value="pref16" data-val="3">宮城県</option>
                            <option value="pref22" data-val="2">秋田県</option>
                            <option value="pref18" data-val="3">山形県</option>
                            <option value="pref20" data-val="3">福島県</option>
                            <option value="pref41" data-val="4">茨城県</option>
                            <option value="pref43" data-val="4">栃木県</option>
                            <option value="pref45" data-val="4">群馬県</option>
                            <option value="pref42" data-val="5">埼玉県</option>
                            <option value="pref44" data-val="5">千葉県</option>
                            <option value="pref46" data-val="5">東京都</option>
                            <option value="pref47" data-val="5">神奈川県</option>
                            <option value="pref12" data-val="6">新潟県</option>
                            <option value="pref03" data-val="7">富山県</option>
                            <option value="pref07" data-val="7">石川県</option>
                            <option value="pref11" data-val="7">福井県</option>
                            <option value="pref04" data-val="6">山梨県</option>
                            <option value="pref08" data-val="6">長野県</option>
                            <option value="pref34" data-val="8">静岡県</option>
                            <option value="pref36" data-val="8">岐阜県</option>
                            <option value="pref38" data-val="8">愛知県</option>
                            <option value="pref40" data-val="8">三重県</option>
                            <option value="pref01" data-val="9">滋賀県</option>
                            <option value="pref05" data-val="9">京都府</option>
                            <option value="pref09" data-val="9">兵庫県</option>
                            <option value="pref13" data-val="9">大阪府</option>
                            <option value="pref23" data-val="9">和歌山県</option>
                            <option value="pref15" data-val="9">奈良県</option>
                            <option value="pref02" data-val="10">島根県</option>
                            <option value="pref06" data-val="10">鳥取県</option>
                            <option value="pref10" data-val="10">岡山県</option>
                            <option value="pref14" data-val="10">広島県</option>
                            <option value="pref24" data-val="10">山口県</option>
                            <option value="pref33" data-val="11">徳島県</option>
                            <option value="pref35" data-val="11">香川県</option>
                            <option value="pref37" data-val="11">愛媛県</option>
                            <option value="pref39" data-val="11">高知県</option>
                            <option value="pref26" data-val="12">福岡県</option>
                            <option value="pref28" data-val="12">佐賀県</option>
                            <option value="pref30" data-val="12">長崎県</option>
                            <option value="pref32" data-val="12">熊本県</option>
                            <option value="pref25" data-val="12">大分県</option>
                            <option value="pref27" data-val="12">宮崎県</option>
                            <option value="pref29" data-val="12">鹿児島県</option>
                            <option value="pref31" data-val="12">沖縄県</option>
                        </select>
                    </div>

                    <div class = "form-group mb-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" v-model="luggagedata.accumulate_start"
                           name="accumulate_start" placeholder="積日を指定"></datepicker>
                    </div>
                    <div class = "from_text kt-align-center">～</div>
                    <div class = "form-group mt-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd"  v-model="luggagedata.accumulate_end" 
                        name="accumulate_end" placeholder="積日を指定"></datepicker>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleSelect2">降地</label>
                        <select class="form-control mb-2" name="landing_city" id="exampleSelect2" v-model="luggagedata.landing_city">
                            <option :value="null">地方を選択</option>
                            <option value="0"></option>
                            <option value="1">北海道</option>
                            <option value="2">北東北</option>
                            <option value="3">南東北</option>
                            <option value="4">北関東</option>
                            <option value="5">南関東</option>
                            <option value="6">甲信越</option>
                            <option value="7">北陸</option>
                            <option value="8">中京</option>
                            <option value="9">関西</option>
                            <option value="10">中国</option>
                            <option value="11">四国</option>
                            <option value="12">九州・沖縄</option>
                        </select>
                    
                        <select class="form-control" name="landing_country" v-model="luggagedata.landing_country">
                            <option :value="null">県を選択</option>
                            <option value="0" data-val="0"></option>
                            <option value="pref17" data-val="1">北海道</option>
                            <option value="pref19" data-val="2">青森県</option>
                            <option value="pref21" data-val="2">岩手県</option>
                            <option value="pref16" data-val="3">宮城県</option>
                            <option value="pref22" data-val="2">秋田県</option>
                            <option value="pref18" data-val="3">山形県</option>
                            <option value="pref20" data-val="3">福島県</option>
                            <option value="pref41" data-val="4">茨城県</option>
                            <option value="pref43" data-val="4">栃木県</option>
                            <option value="pref45" data-val="4">群馬県</option>
                            <option value="pref42" data-val="5">埼玉県</option>
                            <option value="pref44" data-val="5">千葉県</option>
                            <option value="pref46" data-val="5">東京都</option>
                            <option value="pref47" data-val="5">神奈川県</option>
                            <option value="pref12" data-val="6">新潟県</option>
                            <option value="pref03" data-val="7">富山県</option>
                            <option value="pref07" data-val="7">石川県</option>
                            <option value="pref11" data-val="7">福井県</option>
                            <option value="pref04" data-val="6">山梨県</option>
                            <option value="pref08" data-val="6">長野県</option>
                            <option value="pref34" data-val="8">静岡県</option>
                            <option value="pref36" data-val="8">岐阜県</option>
                            <option value="pref38" data-val="8">愛知県</option>
                            <option value="pref40" data-val="8">三重県</option>
                            <option value="pref01" data-val="9">滋賀県</option>
                            <option value="pref05" data-val="9">京都府</option>
                            <option value="pref09" data-val="9">兵庫県</option>
                            <option value="pref13" data-val="9">大阪府</option>
                            <option value="pref23" data-val="9">和歌山県</option>
                            <option value="pref15" data-val="9">奈良県</option>
                            <option value="pref02" data-val="10">島根県</option>
                            <option value="pref06" data-val="10">鳥取県</option>
                            <option value="pref10" data-val="10">岡山県</option>
                            <option value="pref14" data-val="10">広島県</option>
                            <option value="pref24" data-val="10">山口県</option>
                            <option value="pref33" data-val="11">徳島県</option>
                            <option value="pref35" data-val="11">香川県</option>
                            <option value="pref37" data-val="11">愛媛県</option>
                            <option value="pref39" data-val="11">高知県</option>
                            <option value="pref26" data-val="12">福岡県</option>
                            <option value="pref28" data-val="12">佐賀県</option>
                            <option value="pref30" data-val="12">長崎県</option>
                            <option value="pref32" data-val="12">熊本県</option>
                            <option value="pref25" data-val="12">大分県</option>
                            <option value="pref27" data-val="12">宮崎県</option>
                            <option value="pref29" data-val="12">鹿児島県</option>
                            <option value="pref31" data-val="12">沖縄県</option>
                        </select>
                    </div>
                    <div class = "form-group mb-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" name="landing_start" v-model="luggagedata.landing_start" placeholder="積日を指定"></datepicker>
                    </div>
                    <div class="from_text kt-align-center">～</div>
                    
                    <div class = "form-group mt-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" name="landing_end" v-model="luggagedata.landing_end" placeholder="積日を指定"></datepicker>
                    </div>
                    
                    <div class="kt-action_info__content">
                        <div class = "kt-widget5_section-left">
                            <button type="submit" class="btn  btn-wide" style =" width:100%">検 索</button>
                        </div>
                    </div>	
                    
                </form>
            </div>
        </div>

        <div class="kt-portlet  kt-portlet--check kt-portlet--fit kt-portlet--head-noborder">
            <div class="kt-portlet__body kt-portlet__space-x">
                <div class = "kt-align-center emptytruck-check ">空車情報検索</div>
            </div>
        </div>

        <div class = "kt-portlet">
            <div class = "kt-portlet__body kt-portlet_check">
                <form action="#" method="post" class="kt-form" @submit.prevent="emptytruck_search">
                    <div class="form-group">
                        <label for="exampleSelect3">積地</label>
                        <select class="form-control mb-2" id="exampleSelect3" v-model="truckdata.accumulate_city">
                            <option :value="null">北海道</option>
                             <option value="0"></option>
                            <option value="1">北海道</option>
                            <option value="2">北東北</option>
                            <option value="3">南東北</option>
                            <option value="4">北関東</option>
                            <option value="5">南関東</option>
                            <option value="6">甲信越</option>
                            <option value="7">北陸</option>
                            <option value="8">中京</option>
                            <option value="9">関西</option>
                            <option value="10">中国</option>
                            <option value="11">四国</option>
                            <option value="12">九州・沖縄</option>
                        </select>
                    
                        <select class="form-control" v-model="truckdata.accumulate_country">
                            <option :value="null">北海道</option>
                           <option value="0" data-val="0"></option>
                            <option value="pref17" data-val="1">北海道</option>
                            <option value="pref19" data-val="2">青森県</option>
                            <option value="pref21" data-val="2">岩手県</option>
                            <option value="pref16" data-val="3">宮城県</option>
                            <option value="pref22" data-val="2">秋田県</option>
                            <option value="pref18" data-val="3">山形県</option>
                            <option value="pref20" data-val="3">福島県</option>
                            <option value="pref41" data-val="4">茨城県</option>
                            <option value="pref43" data-val="4">栃木県</option>
                            <option value="pref45" data-val="4">群馬県</option>
                            <option value="pref42" data-val="5">埼玉県</option>
                            <option value="pref44" data-val="5">千葉県</option>
                            <option value="pref46" data-val="5">東京都</option>
                            <option value="pref47" data-val="5">神奈川県</option>
                            <option value="pref12" data-val="6">新潟県</option>
                            <option value="pref03" data-val="7">富山県</option>
                            <option value="pref07" data-val="7">石川県</option>
                            <option value="pref11" data-val="7">福井県</option>
                            <option value="pref04" data-val="6">山梨県</option>
                            <option value="pref08" data-val="6">長野県</option>
                            <option value="pref34" data-val="8">静岡県</option>
                            <option value="pref36" data-val="8">岐阜県</option>
                            <option value="pref38" data-val="8">愛知県</option>
                            <option value="pref40" data-val="8">三重県</option>
                            <option value="pref01" data-val="9">滋賀県</option>
                            <option value="pref05" data-val="9">京都府</option>
                            <option value="pref09" data-val="9">兵庫県</option>
                            <option value="pref13" data-val="9">大阪府</option>
                            <option value="pref23" data-val="9">和歌山県</option>
                            <option value="pref15" data-val="9">奈良県</option>
                            <option value="pref02" data-val="10">島根県</option>
                            <option value="pref06" data-val="10">鳥取県</option>
                            <option value="pref10" data-val="10">岡山県</option>
                            <option value="pref14" data-val="10">広島県</option>
                            <option value="pref24" data-val="10">山口県</option>
                            <option value="pref33" data-val="11">徳島県</option>
                            <option value="pref35" data-val="11">香川県</option>
                            <option value="pref37" data-val="11">愛媛県</option>
                            <option value="pref39" data-val="11">高知県</option>
                            <option value="pref26" data-val="12">福岡県</option>
                            <option value="pref28" data-val="12">佐賀県</option>
                            <option value="pref30" data-val="12">長崎県</option>
                            <option value="pref32" data-val="12">熊本県</option>
                            <option value="pref25" data-val="12">大分県</option>
                            <option value="pref27" data-val="12">宮崎県</option>
                            <option value="pref29" data-val="12">鹿児島県</option>
                            <option value="pref31" data-val="12">沖縄県</option>
                        </select>
                    </div>

                    <div class = "form-group mb-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" v-model="truckdata.accumulate_start" placeholder="降日を指定"></datepicker>
                    </div>
                    <div class="from_text kt-align-center">～</div>
                    
                    <div class = "form-group mt-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" v-model="truckdata.accumulate_end" placeholder="降日を指定"></datepicker>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleSelect4">降地</label>
                        <select class="form-control mb-2" id="exampleSelect4" v-model="truckdata.landing_city">
                            <option :value="null">地方を選択</option>
                            <option value="0"></option>
                            <option value="1">北海道</option>
                            <option value="2">北東北</option>
                            <option value="3">南東北</option>
                            <option value="4">北関東</option>
                            <option value="5">南関東</option>
                            <option value="6">甲信越</option>
                            <option value="7">北陸</option>
                            <option value="8">中京</option>
                            <option value="9">関西</option>
                            <option value="10">中国</option>
                            <option value="11">四国</option>
                            <option value="12">九州・沖縄</option>
                        </select>
                    
                        <select class="form-control" v-model="truckdata.landing_country">
                            <option :value="null">県を選択</option>
                            <option value="0" data-val="0"></option>
                            <option value="pref17" data-val="1">北海道</option>
                            <option value="pref19" data-val="2">青森県</option>
                            <option value="pref21" data-val="2">岩手県</option>
                            <option value="pref16" data-val="3">宮城県</option>
                            <option value="pref22" data-val="2">秋田県</option>
                            <option value="pref18" data-val="3">山形県</option>
                            <option value="pref20" data-val="3">福島県</option>
                            <option value="pref41" data-val="4">茨城県</option>
                            <option value="pref43" data-val="4">栃木県</option>
                            <option value="pref45" data-val="4">群馬県</option>
                            <option value="pref42" data-val="5">埼玉県</option>
                            <option value="pref44" data-val="5">千葉県</option>
                            <option value="pref46" data-val="5">東京都</option>
                            <option value="pref47" data-val="5">神奈川県</option>
                            <option value="pref12" data-val="6">新潟県</option>
                            <option value="pref03" data-val="7">富山県</option>
                            <option value="pref07" data-val="7">石川県</option>
                            <option value="pref11" data-val="7">福井県</option>
                            <option value="pref04" data-val="6">山梨県</option>
                            <option value="pref08" data-val="6">長野県</option>
                            <option value="pref34" data-val="8">静岡県</option>
                            <option value="pref36" data-val="8">岐阜県</option>
                            <option value="pref38" data-val="8">愛知県</option>
                            <option value="pref40" data-val="8">三重県</option>
                            <option value="pref01" data-val="9">滋賀県</option>
                            <option value="pref05" data-val="9">京都府</option>
                            <option value="pref09" data-val="9">兵庫県</option>
                            <option value="pref13" data-val="9">大阪府</option>
                            <option value="pref23" data-val="9">和歌山県</option>
                            <option value="pref15" data-val="9">奈良県</option>
                            <option value="pref02" data-val="10">島根県</option>
                            <option value="pref06" data-val="10">鳥取県</option>
                            <option value="pref10" data-val="10">岡山県</option>
                            <option value="pref14" data-val="10">広島県</option>
                            <option value="pref24" data-val="10">山口県</option>
                            <option value="pref33" data-val="11">徳島県</option>
                            <option value="pref35" data-val="11">香川県</option>
                            <option value="pref37" data-val="11">愛媛県</option>
                            <option value="pref39" data-val="11">高知県</option>
                            <option value="pref26" data-val="12">福岡県</option>
                            <option value="pref28" data-val="12">佐賀県</option>
                            <option value="pref30" data-val="12">長崎県</option>
                            <option value="pref32" data-val="12">熊本県</option>
                            <option value="pref25" data-val="12">大分県</option>
                            <option value="pref27" data-val="12">宮崎県</option>
                            <option value="pref29" data-val="12">鹿児島県</option>
                            <option value="pref31" data-val="12">沖縄県</option>
                        </select>
                    </div>
                    <div class = "form-group mb-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" v-model="truckdata.landing_start" placeholder="積日を指定"></datepicker>
                    </div>
                    <div class="from_text kt-align-center">～</div>
                    
                    <div class = "form-group mt-2">
                        <datepicker :value="state.date" class="form-control" format = "yyyy-MM-dd" v-model="truckdata.landing_end" placeholder="積日を指定"></datepicker>
                    </div>
                    
                    <div class="kt-action_info__content">
                        <div class = "kt-widget5_section-right">
                                <button type="submit" class="btn  btn-wide" style =" width:100%">検 索</button>
                        </div>
                    </div>	
                    
                </form>
            </div>
        </div>

        <!--end:: Widgets/Inbound Bandwidth-->
        <div class="kt-space-20"></div>
    </div>
</template>
<script>
import Datepicker from 'vuejs-datepicker';
import JQuery from 'jquery'
import moment from 'moment'
let $ = JQuery
export default {
    name: "app",
    data(){
        return {
           
            state: '',
            luggagedata:{
                accumulate_city: "null",
                accumulate_country: "null",
                accumulate_start:   "",
                accumulate_end: "",
                landing_city:   "null",
                landing_country:    "null",
                landing_start:  "",
                landing_end:    "",

            },
            truckdata:{
                accumulate_city: "null",
                accumulate_country: "null",
                accumulate_start:   "",
                accumulate_end: "",
                landing_city:   "null",
                landing_country:    "null",
                landing_start:  "",
                landing_end:    "",

            },
            
            submitted: false,
           
        }
    },
    created: function(){
         this.changecity();
    },
    components: {
         Datepicker
    },
    methods: {
        luggage_search(){
            this.luggagedata.accumulate_start = moment(this.luggagedata.accumulate_start).format('YYYY-MM-DD');
            this.luggagedata.accumulate_end = moment(this.luggagedata.accumulate_end).format('YYYY-MM-DD');
            this.luggagedata.landing_start = moment(this.luggagedata.landing_start).format('YYYY-MM-DD');
            this.luggagedata.landing_end = moment(this.luggagedata.landing_end).format('YYYY-MM-DD');
           console.log(this.luggagedata); 
            // let uri = '/luggage/search';
            // this.axios.patch(uri, this.luggagedata).then((response) => {
            //         this.$router.push({name: 'index16'});
            // });
        },
        emptytruck_search(){
             alert("Search keywords :-)\n\n" + JSON.stringify(this.truckdata));
            let uri = '/truck/search';
            this.axios.post(uri, this.truckdata).then((response) => {
                    this.$router.push({name: 'index12'});
            });
        },
        changecity(){
           $(function() {
               
                var $children = $('#pref01');
                var original = $children.html();
               
                $('#area01').change(function() {
                    //選択された地方のvalueを取得し変数に入れる
                    var val1 = $(this).val();

                    //削除された要素をもとに戻すため.html(original)を入れておく
                    $children.html(original).find('option').each(function() {
                        var val2 = $(this).data('val'); //data-valの値を取得

                        //valueと異なるdata-valを持つ要素を削除
                        if (val1 != val2 && val1 != 0) {
                            $(this).not(':first-child').remove();
                        }
                    });

                    //地方側のselect要素が未選択の場合、都道府県をdisabledにする
                    if ($(this).val() === "") {
                        $children.attr('disabled', 'disabled');
                    } else {
                        $children.removeAttr('disabled');
                    }
                });
            });
        }
    }
    
}
var state = {
    date: new Date(2016, 9,  16)
    }
</script> 

<style scope>
.vdp-datepicker *{
    border: none !important;
    border-radius: 4px;
}
</style>


