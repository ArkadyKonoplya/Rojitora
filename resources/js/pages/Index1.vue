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
                                <div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
                                    
                                    <firsttopsidebar></firsttopsidebar>
                                    <secondtopsidebar></secondtopsidebar>     
                                    <div class="kt-portlet__body ask_sign">
                                        <div  class = "ask-sign-title kt-align-center">
                                            お問い合わせ
                                                <img class="kt-widget7__img tooltip_sty" src="/media/img/contact-1.png" alt="">		 
                                        </div>
                                        <div  class = "required-sign kt-align-right">
                                            <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>必須
                                        </div>
                                        <!--begin::Portlet-->
                                        <div class="ask-sign-body">
                                            
                                            <!--begin::Form-->
                                            <form @submit.prevent="questionFormdata" action="#"  id="validated-form" class="kt-form needs-validation">
                                                <div class="kt-portlet__body form-check">
                                                    
                                                    <div class="form-group">
                                                        <label>ご氏名</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                                <input type="text" placeholder="(例) 露地虎一郎" aria-describedby="basic-addon1" v-model="formdata.name01" v-validate="'required'"
                                                                   id="name01" name="name01" class="form-control" :class="{ 'is-invalid': submitted && errors.has('name01') }">
                                                                <div v-if="submitted && errors.has('name01')" class="invalid-feedback">
                                                                {{ errors.first("name01") }}
                                                                </div>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                                <input type="text" class="form-control" placeholder="(例) ロジとら タロウ" aria-describedby="basic-addon1" v-model="formdata.name02" v-validate="'required'"
                                                                  id="name02"  name="name02" :class="{'is-invalid':submitted && errors.has('name02')}">
                                                                <div v-if="submitted && errors.has('name02')" class="invalid-feedback">
                                                                {{ errors.first("name02") }}
                                                                </div>
                                                            </div>
                                                            <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">御社名</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="text" placeholder="(例) 株式会社ロジとら" aria-describedby="basic-addon2" v-model="formdata.corpName01" v-validate="'required'" id="corpName01" name="corpName01" class="form-control" :class="{ 'is-invalid': submitted && errors.has('corpName01') }" />
                                                            <div v-if="submitted && errors.has('corpName01')" class="invalid-feedback">
                                                            {{ errors.first("corpName01") }}
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="text"  placeholder="(例) カブシキガイシャロジとら" aria-describedby="basic-addon2" v-model="formdata.corpName02" v-validate="'required'" id="corpName02" name="corpName02" class="form-control" :class="{ 'is-invalid': submitted && errors.has('corpName02') }" />
                                                            <div v-if="submitted && errors.has('corpName02')" class="invalid-feedback">
                                                            {{ errors.first("corpName02") }}
                                                            </div>
                                                        </div>
                                                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                    </div>

                                                    <div class="form-group">

                                                        <label> ご住所 </label>
                                                        <div class="input-group row">
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" v-model="formdata.address01" placeholder="郵便番号（ハイフンなし）">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control address" v-model="formdata.address02" placeholder="(例) 〒370-1207 群⾺県⾼崎市">
                                                            
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control address" v-model="formdata.address03" placeholder="(例) 綿貫町 1475-4 ⾼南 F">
                                                        </div>
                                                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputMail">メールアドレス</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="email" v-model="formdata.mail" v-validate="'required|email'" id="mail" name="mail" placeholder="(例) sample@abcd.co.jp" class="form-control" :class="{ 'is-invalid': submitted && errors.has('mail') }" aria-describedby="basic-addon1" />
                                                            <div v-if="submitted && errors.has('mail')" class="invalid-feedback">
                                                            {{ errors.first("mail") }}
                                                            </div>                                                                 
                                                        </div>
                                                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="exampleInputMail">TEL</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control address" v-model="formdata.tel" placeholder="(例) 0120 - 050 - 570">
                                                        </div>
                                                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                    </div>

                                                    <div class="form-group form-group-last">
                                                        <label for="exampleTextarea">お問い合わせ内容</label>
                                                        <textarea class="form-control" id="exampleTextarea" v-model="formdata.textarea" rows="3" placeholder="こちらにお問い合わせ内容をご記入ください。"></textarea>
                                                    </div>
                                                    <div style="border-top: 0px  #000000; margin-top: 46px"></div>
                                                    <div class="kt-form__actions kt-align-center">
                                                        <div class = "conculusion ">利用規約をご確認の上、「送信内容確認」を押してください。</div>
                                                        <div style="border-top: 0px  #000000; margin-top: 15px"></div>
                                                        <div><button type="submite" class="reset btn">送信内容確認</button></div>
                                                        
                                                    </div>
                                                </div>
                                            </form>

                                            <!--end::Form-->
                                        </div>
                                        <!--end::Portlet-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Blog-->

                                
                            </div>
                        <rightsidebar02></rightsidebar02>
                    </div>

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
export default {
    name: "app",
    data() {
        return{
            formdata:{
                 corpName01:    "",
                 corpName02:    "",
                 name01:    "",
                 name02:    "",
                 address01: "",
                 address02: "",
                 address03: "",
                 tel:   "",
                 mail:  "",
                 textarea:  ""
            },
             submitted: false,
        }
    },
    components: {
        firsttopsidebar,secondtopsidebar,rightsidebar02
    },
    methods: {
        questionFormdata(){
            this.submitted = true;
            this.$validator.validate().then(valid => {
                console.log(this.formdata);
                if (valid) {
                    let uri = '/mail_manage/store';
                    this.axios.post(uri, this.formdata).then((response) => {
                        this.$router.push({name: 'index4'});
                    });
                }
            });
        }
    }
}
</script>