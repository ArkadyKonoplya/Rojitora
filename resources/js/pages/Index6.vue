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
                            <div class="kt-current_info__wrapper" style="padding-top: 50px;">
                                <div class="kt-current_info__text1 kt-align-center">
                                    無料会員登録
                                        <img alt="Logo" style= "vertical-align: sub;" src="/media/img/arrow-man.png" class="kt-header__brand-logo-sticky" />
                                    <p class="kt-font-xl kt-font-boldest"> 会員登録すると、明日以降の全ての情報が閲覧可能</p>
                                </div>
                            </div>
                            <div class="kt-portlet" style="background-color: #efefef; color: #000;font-size: 15px;font-weight: bold;border-radius: 5px;">
                                <div class="text-center mt-5" style="color: #000;">
                                    <h3><b>入力フォーム</b></h3>
                                </div>
                                <!--begin::Form-->
                               
                                <form class="kt-form needs-validation" action="#" @submit.prevent="submitform" id="validated-form">
                                    <div class="kt-portlet__body">
                                        <div class="form-group">
                                            <label class="font-weight-bolder">御社名</label>
                                            <input type="text" id="corp_name" v-validate="'required'" name="corp_name" class="form-control" v-model="formdata.corp_name" :class="{ 'is-invalid': submitted && errors.has('corp_name') }"  >
                                            <div v-if="submitted && errors.has('corp_name')" class="invalid-feedback">
                                            {{ errors.first("corp_name") }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder" for="exampleInputPassword1">フリガナ</label>
                                            <input type="text" class="form-control" v-validate="'required'" id="second_input" name="second_input" v-model="formdata.second_input" :class="{ 'is-invalid': submitted && errors.has('second_input') }" >
                                            <div v-if="submitted && errors.has('second_input')" class="invalid-feedback">
                                            {{ errors.first("second_input") }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bolder">ご住所郵便番号・プルダウン・住所</label>
                                            <input type="text" class="form-control" v-validate="'required'" id="post_address" name="email" v-model="formdata.post_address" :class="{ 'is-invalid': submitted && errors.has('post_address') }">
                                            <div v-if="submitted && errors.has('post_address')" class="invalid-feedback">
                                            {{ errors.first("post_address") }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder" for="">ご担当者様</label>
                                            <input type="text" class="form-control" v-validate="'required'" id="hello" name="hello" v-model="formdata.hello" :class="{ 'is-invalid': submitted && errors.has('hello') }">
                                            <div v-if="submitted && errors.has('hello')" class="invalid-feedback">
                                            {{ errors.first("hello") }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder">フリガナ</label>
                                            <input type="text" class="form-control" v-validate="'required'" id="third_input" name="third_input" v-model="formdata.third_input" :class="{ 'is-invalid': submitted && errors.has('hello') }">
                                            <div v-if="submitted && errors.has('third_input')" class="invalid-feedback">
                                            {{ errors.first("third_input") }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder" for="">TEL(format: xxxx-xxx-xxxx):</label>
                                            <input type="text" class="form-control" v-validate="'required'" id="tel" pattern="^\d{4}-\d{3}-\d{4}$" name="tel" :class="{ 'is-invalid': submitted && errors.has('tel') }" v-model="formdata.tel" >
                                            <div v-if="submitted && errors.has('tel')" class="invalid-feedback">
                                            {{ errors.first("tel") }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder">FAX</label>
                                            <input type="text" class="form-control" id="fax" nam="fax" v-validate="'required'" v-model="formdata.fax"  :class="{ 'is-invalid': submitted && errors.has('fax') }">
                                            <div v-if="submitted && errors.has('fax')" class="invalid-feedback">
                                            {{ errors.first("fax") }}
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder" for="exampleInputPassword1">メールアドレス</label>
                                            <input type="email" class="form-control" id="email_address" v-model="formdata.email_address" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder">パスワード</label>
                                            <input type="password" class="form-control" id="register_pwd" name="register_pwd" v-validate="{ required: true, min: 6 }" v-model="formdata.register_pwd" :class="{ 'is-invalid': submitted && errors.has('register_pwd') }" ref="password">
                                            <div v-if="submitted && errors.has('register_pwd')" class="invalid-feedback">
                                            {{ errors.first("register_pwd") }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bolder" for="exampleInputPassword1">パスワード確認用</label>
                                            <input type="password" class="form-control" v-validate="'required|confirmed:password'" id="confirm_pwd" name="confirm_pwd" v-model="formdata.confirm_pwd"  :class="{ 'is-invalid': submitted && errors.has('confirm_pwd') }">
                                            <div v-if="submitted && errors.has('confirm_pwd')" class="invalid-feedback">
                                            {{ errors.first("confirm_pwd") }}
                                            </div>  
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bolder">紹介先</label>
                                                    <input type="text" class="form-control" name="contact_address" id="contact_address" v-validate="'required'" v-model="formdata.contact_address" :class="{ 'is-invalid': submitted && errors.has('contact_address') }">
                                                    <div v-if="submitted && errors.has('contact_address')" class="invalid-feedback">
                                                    {{ errors.first("contact_address") }}
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bolder">「ロジとら」をどこで知りましたか？</label>
                                                    <input type="text" class="form-control"  id="meeting_part" name="meeting_part" v-validate="'required'" v-model="formdata.meeting_part" :class="{ 'is-invalid': submitted && errors.has('meeting_part') }">
                                                    <div v-if="submitted && errors.has('meeting_part')" class="invalid-feedback">
                                                    {{ errors.first("meeting_part") }}
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-2" style="color: #000;">
                                        <h5><b>プルダウン電話営業・FAX営業・メール広告・紹介・新聞広告・その他利用規約をご確認の<br>上、「登録内容確認」を教えてください。登録内容確認のボタン</b></h5>
                                    </div>
                                    <div class="text-center mt-5" style="color: #000;">
                                        <h5><b>操作不明点がございましたら、お気軽にお問い合わせください。<br> 受付時間8:00〜18:00<br>0120-050-570</b></h5>
                                    </div>
                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions d-flex justify-content-center flex-wrap">
                                            <button type="submit" class="btn first_time_btn">登録内容確認</button>
                                        </div>
                                    </div>
                                    <div class="kt-space-40"></div>
                                    <div class="kt-space-20"></div>
                                </form>

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
<script>
import rightsidebar01 from '../components/RightSidebar01.vue'
  export default {
    data() {
      return {
       formdata:{ corp_name: '',second_input: '',post_address: '',hello: '',third_input: '', tel: '', fax: '', 
                email_address: '', register_pwd: '', confirm_pwd: '', contact_address: '', meeting_part: ''},
       // this is formdata object to store form values
        submitted: false
      }
    },
    components: {
        rightsidebar01
    },
    methods: {
       
        submitform() {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                var app = this
               
                this.$auth.register({
                    data: app.formdata,
                    success: function (response) {
                        var memberid= response.data.member_id
                         alert("MemberID:"+ memberid)
                        this.$router.push({name: 'home', params: {successRegistrationRedirect: true}})
                    },
                })
            });
        }
    }
  }
</script>
