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
                                        会員情報修正登録
                                        <img class="kt-widget7__img member-icon" src="/media/img/member_icon.png?v=1.1" alt="">		 
                                    </div>
                                    <div  class = "required-sign kt-align-right">
                                        <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>必須
                                    </div>
                                    <!--begin::Portlet-->
                                    <div class="ask-sign-body">
                                        
                                        <!--begin::Form-->
                                        <form @submit.prevent="updateFormdata" action="#"  id="validated-form" class="kt-form needs-validation">
                                            <div class="kt-portlet__body form-check">
                                                <div class="form-group">
                                                    <label>問合番号</label>
                                                    <div class="input-group row">
                                                        <div class="col-lg-3">
                                                            <input type="text" class="form-control" v-model="formdata.questionNo" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>御社名</label>
                                                    <div class="input-group row">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                        <input type="text" v-model="formdata.corpName01" v-validate="'required'" id="corpName01" name="corpName01" class="form-control" :class="{ 'is-invalid': submitted && errors.has('corpName01') }" />
                                                        <div v-if="submitted && errors.has('corpName01')" class="invalid-feedback">
                                                        {{ errors.first("corpName01") }}
                                                        </div>
                                                    </div>
                                                    <div class="input-group row">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                        <input type="text" v-model="formdata.corpName02" v-validate="'required'" id="corpName02" name="corpName02" class="form-control" :class="{ 'is-invalid': submitted && errors.has('corpName02') }" />
                                                        <div v-if="submitted && errors.has('corpName02')" class="invalid-feedback">
                                                        {{ errors.first("corpName02") }}
                                                        </div>
                                                    </div>
                                                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>ご住所</label>
                                                    <div class="input-group row">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                        <div class="col-lg-3">
                                                            <input type="text" v-model="formdata.address01" v-validate="'required'" id="address01" name="address01" class="form-control" :class="{ 'is-invalid': submitted && errors.has('address01') }" />
                                                            <div v-if="submitted && errors.has('address01')" class="invalid-feedback">
                                                            {{ errors.first("address01") }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group flex-fill d-flex justify-content-between">
                                                        <div class = "d-flex">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <select v-model="formdata.address02" v-validate="'required'" id="address02" name="address02" class="form-control" :class="{ 'is-invalid': submitted && errors.has('address02') }">
                                                            <div v-if="submitted && errors.has('address02')" class="invalid-feedback">
                                                            {{ errors.first("address02") }}
                                                            </div>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <input type="text" class="form-control" v-model="formdata.address03" placeholder=""> 
                                                        </div>
                                                    </div>   
                                                    <div class="input-group row">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                        <input type="text" v-model="formdata.address04" v-validate="'required'" id="address04" name="address04" class="form-control" :class="{ 'is-invalid': submitted && errors.has('address04') }" aria-describedby="basic-addon1" />
                                                        <div v-if="submitted && errors.has('address04')" class="invalid-feedback">
                                                        {{ errors.first("address04") }}
                                                        </div>
                                                    </div>  
                                                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>ご担当者様</label>
                                                        <div class="input-group row">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="text" v-model="formdata.first_hello" v-validate="'required'" id="first_hello" name="first_hello" class="form-control" :class="{ 'is-invalid': submitted && errors.has('first_hello') }" aria-describedby="basic-addon1" />
                                                            <div v-if="submitted && errors.has('first_hello')" class="invalid-feedback">
                                                            {{ errors.first("first_hello") }}
                                                            </div>
                                                        </div>
                                                        <div class="input-group row">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="text" v-model="formdata.second_hello" v-validate="'required'" id="second_hello" name="second_hello" class="form-control" :class="{ 'is-invalid': submitted && errors.has('second_hello') }" aria-describedby="basic-addon1" />
                                                            <div v-if="submitted && errors.has('second_hello')" class="invalid-feedback">
                                                            {{ errors.first("second_hello") }}
                                                            </div>
                                                        </div>
                                                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>TEL(format: xxxx-xxx-xxxx):</label>
                                                    <div class="input-group row">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                        <input type="tel" v-model="formdata.tel" v-validate="'required'" id="tel" pattern="^\d{4}-\d{3}-\d{4}$" name="tel" class="form-control" :class="{ 'is-invalid': submitted && errors.has('tel') }" aria-describedby="basic-addon1" />
                                                        <div v-if="submitted && errors.has('tel')" class="invalid-feedback">
                                                        {{ errors.first("tel") }}
                                                        </div>
                                                    </div>  
                                                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                    <div class="kt-space-40"></div>
                                                    <label>FAX</label>
                                                    <div class="input-group row">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                        <input type="text" v-model="formdata.fax" v-validate="'required'" id="fax" name="fax" class="form-control" :class="{ 'is-invalid': submitted && errors.has('fax') }" aria-describedby="basic-addon1" />
                                                        <div v-if="submitted && errors.has('fax')" class="invalid-feedback">
                                                        {{ errors.first("fax") }}
                                                        </div> 
                                                    </div> 
                                                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>メールアドレス</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="text" class="form-control" v-model="formdata.email" placeholder="(例) sample@abcd.co.jp" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>パスワード</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="password" v-model="formdata.pwd" v-validate="{ required: true, min: 6 }" id="password" name="password" class="form-control" :class="{ 'is-invalid': submitted && errors.has('password') }" ref="password" />
                                                            <div v-if="submitted && errors.has('password')" class="invalid-feedback">
                                                            {{ errors.first("password") }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label class="">パスワード（確認用)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                                            <input type="password" v-model="formdata.confirm_pwd" v-validate="'required|confirmed:password'" id="confirm_pwd" name="confirm_pwd" class="form-control" :class="{ 'is-invalid': submitted && errors.has('confirm_pwd') }" aria-describedby="basic-addon1" />
                                                            <div v-if="submitted && errors.has('confirm_pwd')" class="invalid-feedback">
                                                            {{ errors.first("confirm_pwd") }}
                                                            </div>  
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>紹介先</label>
                                                            <select class="form-control" v-model="formdata.contact_address">
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select> 
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label class="">ロジとらをどこで知りましたか？</label>
                                                            <select class="form-control" v-model="formdata.meeting_place">
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select> 
                                                    </div>
                                                </div>
                                                
                                                <div class="kt-form__actions kt-align-center">
                                                    <div><button class="reset btn">登錄內容確認</button></div>
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
	@import '/css/style_contact.css';
	@import '/css/style_member-edit.css';
</style>
<script>
import firsttopsidebar from '../components/FirstTopSidebar.vue'
import secondtopsidebar from '../components/SecondTopSidebar.vue'
import rightsidebar02 from '../components/RightSidebar02.vue'
export default {
    name: "app",
    data(){
        return{
            formdata:{
                corpName01: "",
                address01:  "" ,
                address02:  "" ,
                address04:  "",
                first_hello:    "" ,
                second_hello:   "" ,
                tel:    "",
                fax:    "",
                pwd:    "",
                confirm_pwd:    ""
            },
            submitted: false,
            loginID: '1234'
        };
    },
    components: {
        firsttopsidebar,secondtopsidebar,rightsidebar02
    },
    // created: function(){
    //         this.getFormdata();
    // },
    
    methods: {
        getFormdata() {
                let uri = '/formdata/${this.loginID}/edit';
                this.axios.get(uri).then((response) => {
                    this.formdata = response.data;
                });
          },

        
        updateFormdata(e){
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    alert("SUCCESS!! :-)\n\n" + JSON.stringify(this.formdata));
                    let uri = '/formdata/'+this.loginID+'/update';
                    this.axios.patch(uri, this.formdata).then((response) => {
                        this.$router.push({name: 'index4'});
                    });
                }
            });
        }
    }
}

</script>

