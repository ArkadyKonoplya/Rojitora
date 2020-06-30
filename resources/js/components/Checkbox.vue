<template>
    <div>

        <div class="form-group row mt-4">
            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>荷物</label>
            <div class="col-5 mt-3">
                <input class="col form-control kt-font-xl input_style" v-model="formdata.baggage" name="baggage">
            </div>
            <label class="col-2 col-form-label kt-font-xl text-right mt-3"> 荷物重量</label>
            <div class="col-2 mt-3">
                <input class="col form-control kt-font-xl input_style ml-5" v-model="formdata.baggage_weight" name="baggage_weight">
            </div>
            <label class="col-1 col-form-label kt-font-lg text-right mt-4">kg</label>
        </div>
    
    <!--end::Form-->
    <!--begin::Form-->
    
        <div class="form-group row">
            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>車輌</label>
            <div class="col-10 mt-3">
                <div class="kt-radio-inline">
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" value="unspecified" id="unspecified" v-model="formdata.vehicle">指定なし
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" checked="checked" id="15t" value="15t" v-model="formdata.vehicle">15t
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="10t" value="10t" v-model="formdata.vehicle">10t
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio"id="7t" value="7t" v-model="formdata.vehicle">7t
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="4t" value="4t" v-model="formdata.vehicle">4t
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="2t" value="2t"v-model="formdata.vehicle">2t
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="light" value="light" v-model="formdata.vehicle">軽
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="trailer" value="trailer" v-model="formdata.vehicle">トレーラー
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
                        <input type="radio" id="unspecified_type1" vaule="unspecified_type1" v-model="formdata.type1">指定なし
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" checked="checked" id="wing" value="wing" v-model="formdata.type1">ウイング
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="box" value="box" v-model="formdata.type1">箱
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="flat" value="flat" v-model="formdata.type1">平
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="one" vaule="one" v-model="formdata.type1">ユニック
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="wing_box" value="wing_box" v-model="formdata.type1">ウイング・箱
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                        <input type="radio" id="wing_taria" value="wing_taria" v-model="formdata.type1">ウイング・平
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="flat_unic" value="flat_unic"  v-model="formdata.type1">平・ユニック
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="other" value="other" name="other" v-model="formdata.type1">その他
                        <span></span>
                    </label>
                    <label class="kt-text kt-text--brand kt-font-lg">
                        <input type="text" class="form-control kt-font-xl input_style" id="other_text" v-model="formdata.other_text" name="other_text">
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
                        <input type="radio" id="unspecified_type2" value="unspecified_type2" v-model="formdata.type2">指定なし
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" checked="checked" id="high_floor" value="high_floor" v-model="formdata.type2">高床
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="medium_floor" value="medium_floor" v-model="formdata.type2">中低床
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="low_floor" value="low_floor" v-model="formdata.type2">低床
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="full_wide" value="full_wide" v-model="formdata.type2">フルワイド
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="semi_wide" value="semi_wide" v-model="formdata.type2">セミワイド
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                        <input type="radio" id="standard" value="standard" v-model="formdata.type2">標準
                        <span></span>
                    </label><br>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="long" value="long" v-model="formdata.type2">ロング
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="short" value="short" v-model="formdata.type2">ショート
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
                        <input type="radio" id="unspecified_type3" value="unspecified_type3" v-model="formdata.type3">指定なし
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" checked="checked" id="all_wheel" value="all_wheel" v-model="formdata.type3">総輪エアサス
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="rear_wheel" value="rear_wheel" v-model="formdata.type3">後輪エアサス
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="air_suspension" value="air_suspension" v-model="formdata.type3">エアサスゲート
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="aluminum" value="aluminum" v-model="formdata.type3">アルミ
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="hood" value="hood" v-model="formdata.type3">幌
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                        <input type="radio" id="power_gate" value="power_gate" v-model="formdata.type3">パワーゲート
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="flat" value="flat" v-model="formdata.type3">フラット
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="stachoin" value="stachoin" v-model="formdata.type3">スタンション
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="jorder" value="jorder" v-model="formdata.type3">ジョルダー
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="frozen" value="frozen" v-model="formdata.type3">冷凍
                        <span></span>
                    </label>
                    <label class="kt-radio kt-radio--brand kt-font-lg">
                        <input type="radio" id="refrigerated" value="refrigerated" v-model="formdata.type3">冷蔵
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label kt-font-xl">備考</label>
            <div class="col-10 mt-3">
                <textarea class="form-control kt-font-lg input_style" name="remark" v-model="formdata.remark" spellcheck="true" rows="7"></textarea>
                <label class="col-form-label kt-font-xl" style="color: #ff6600">※備考には金額、連絡先等は明記しないでください</label>
            </div>
        </div>
    </div>
</template>
<<script>
export default {
    data(){
        return{
             formdata:{}
        }
    }
}
</script>