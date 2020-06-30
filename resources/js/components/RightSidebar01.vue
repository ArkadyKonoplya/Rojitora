<template>
    <div class="col-xl-2 mt-3">
        <!--begin:: Widgets/Inbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--login">
            <div class="kt-portlet__body kt-portlet__space-x" id="logged">
            <div class="alert mb-0 pb-0" v-if="has_error" style="color:red">
                <p>エラー、メールまたはパスワードが無効です。</p>
            </div>
            <form class="kt-form" ref="form" method="post">
                <div class="kt-portlet__body">
                <div class="form-group mb-3">
                    <label for="loginID">会員ID</label>
                    <input  type="text"  v-model="loginID" class="form-control form-control-sm" required />
                </div>
                <div class="form-group mb-3">
                    <label for="loginPWD">パスワード</label>
                    <input type="password" v-model="loginPWD" class="form-control form-control-sm" required />
                </div>
                <div class="form-group mb-1">
                    <a href="#" class="login_btn d-flex justify-content-center flex-wrap mb-3" v-on:click="logged">
                    <img class="w-100" src="/media/img/login_btn.png" alt />
                    </a>
                </div>
                <a href="#" v-on:click="forget_pwd" class="mb-3 mt-0">
                    <strong style="color:#fecf5f">会員ID、パスワード</strong><font style="color:#fff">を</font>
                    <br>
                    <font href="#" class="mb-3" style="color:#fff;">お忘れの方はこちら</font>
                </a>
                <span>または</span>
                <h3 class="mb-0">0120-050-570</h3>
                <span>までお問い合わせください</span>
                </div>
            </form>
            </div>
        </div>
        <!--end:: Widgets/Inbound Bandwidth-->
        <div class="kt-space-20"></div>

        <!--begin:: Widgets/Outbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--services">
            <a href="#" v-on:click="register" style="color: #fff;">
            <!-- <router-link :to="{ name: 'Index6' }" class="btn btn-primary">Create Item</router-link> -->
            <div class="kt-portlet__body kt-portlet__space-x d-flex justify-content-center flex-wrap mb-3" >
                <p>ロジとら の</p>
                <p>サービスは全て無料</p>
                <a class="btn mt-2" style="background-color:#ed9312">
                まずは
                <br />
                <div style="font-size:17px;">無料会員登録</div>
                </a>
            </div>
            </a>
        </div>
        <!--end:: Widgets/Outbound Bandwidth-->
        <div class="kt-space-20"></div>
        <!--begin:: Widgets/Outbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--light">
            <a href="#" v-on:click="using" >
            <div class="kt-portlet__body kt-portlet__space-x">
                <div class="kt-current_info__content kt-widget5 mb-3">
                <div class="kt-widget5__item">
                    <div class="kt-widget5__content d-flex justify-content-center flex-wrap">
                    <div class="kt-widget5__pic">
                        <img class="kt-widget7__img" src="/media/img/light_icon.png" />
                    </div>
                    <div class="kt-widget5__section">
                        <a style="font-size:17px; font-weight:bold; color:#000;">ご利用方法</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </a>
        </div>
        <!--end:: Widgets/Outbound Bandwidth-->
        <div class="kt-space-20"></div>

        <!--begin:: Widgets/Outbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--first_time">
            <a href="#" v-on:click="question_answer">
                <div class="kt-portlet__body kt-portlet__space-x d-flex justify-content-center flex-wrap mb-3" >
                    <a class="btn mt-1 mb-2" style="background-color:#396ec2;color: #fff;font-size:17px;">無料会員登録</a>
                    <a>ロジとら の</a>
                </div>
             </a>
        </div>
        <!--end:: Widgets/Outbound Bandwidth-->
        <div class="kt-space-20"></div>
        <!--begin:: Widgets/Outbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--phone">
            <div class="kt-portlet__title kt-portlet__space-x d-flex justify-content-center flex-wrap">
              <a style="background-color:#f5f5f5;color: #000;font-weight: bold;">お問い合わせ</a>
            </div>
            <div class="kt-portlet__body kt-portlet__space-x d-flex justify-content-center flex-wrap mb-3">
            <a class="phone_number">0120-050-570</a>
            <span class="btn btn-sm">受付時間 8:00〜18:00</span>
            </div>
            <ul>
              <li>
                <router-link to="/corpInfo">運営会社情報</router-link>
              </li>
              <li>
                <router-link to="/membership">利用規約</router-link>
              </li>
            </ul>
        </div>
        <!--end:: Widgets/Outbound Bandwidth-->
    </div>
</template>
<script>
export default {
  data() {
    return {
      loginID: null,
      loginPWD: null,
      has_error: false
    }
  },
  methods: {
    logged: function() {
      var app = this;
     
      this.$auth.login({
        params: {
          member_id: app.loginID,
          password: app.loginPWD
        },
        success: function() {
          // this.$session.start();
          // this.$session.set('jwt', response.body.token);
          //this.$session.set('memberId',app.loginID);
          // handle redirection
          this.$router.push({ name: 'index4' });
        },
        error: function() {
          app.has_error = true;
        },
        rememberMe: true,
        fetchUser: true
      });
    },
     register: function() {
      console.log("register");
      this.$router.push({ name: 'index6' });
    },
    forget_pwd: function(){
      this.$router.push({name: 'index5'});
    },
    using: function(){
      this.$router.push({name: 'index2'});
    },
    question_answer: function(){
        this.$router.push({name: 'index3'});
    }
  }
}
</script>

