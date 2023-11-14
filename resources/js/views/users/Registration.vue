<template>
  <div>
    <main class="overflow-hidden ">
      <!--Start Breadcrumb Style2-->
      <section class="breadcrumb-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content text-center wow fadeInUp animated">
                <h2>Регистрация</h2>
                <div class="breadcrumb-menu">
                  <ul>
                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Главная</a></li>
                    <li> <i class="flaticon-next"></i> </li>
                    <li class="active">Регистрация</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Breadcrumb Style2-->
      <!--Start Login Page-->
      <section class="login-page pt-120 pb-120">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-9 wow fadeInUp animated">
              <div class="login-register-form"
                   style="background-image: url('assets/images/inner-pages/login-bg.png');">
                <div class="top-title text-center ">
                  <h2>Регистрация</h2>
                  <p>Уже есть аккаунт? <a href="login">Log in</a></p>
                </div>
                <form class="common-form">
                  <div class="form-group">
                      <input v-model="name"   type="name" class="form-control"  placeholder="Имя">
                  </div>
                  <div class="form-group">
                      <input  v-model="email"  type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <input v-model="password"  type="password"   name="password"  class="form-control"  placeholder="Пароль">
                  </div>
                  <div class="form-group eye">
                    <div class="icon icon-1"></div>
                      <input v-model="password_confirmation"  type="password" id="password-field" class="form-control" placeholder="Повторите пароль">
                    <div class="icon icon-2 "></div>
                  </div>
                  <div class="checkk ">
                  </div> <input Зарегистрироваться @click.prevent="register()" type="submit" value="register" class="btn--primary style2">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Login Page-->
    </main>
    <!--==== Js Scripts Start ====-->
    <!-- Jquery v3.6.0 Js -->
    <component :is="'script'" src="assets/js/jqurey.v3.6.0.min.js"></component> <!-- Popper v2.9.3 Js -->
    <component :is="'script'" src="assets/js/popper.v2.9.3.min.js"></component> <!-- Bootstrap v5.1.1 js -->
    <component :is="'script'" src="assets/js/bootstrap.v5.1.1.min.js"></component> <!-- jquery ui js -->
    <component :is="'script'" src="assets/js/plugin/jquery-ui.min.js"></component> <!-- Parallax js -->
    <component :is="'script'" src="assets/js/plugin/jarallax.min.js"></component> <!-- Slick Slider Js -->
    <component :is="'script'" src="assets/js/plugin/slick.min.js"></component> <!-- isotope Js -->
    <component :is="'script'" src="assets/js/plugin/isotope.js"></component> <!-- magnific-popup v2.3.4 Js -->
    <component :is="'script'" src="assets/js/plugin/jquery.magnific-popup.min.js"></component> <!-- Tweenmax v2.3.4 Js -->
    <component :is="'script'" src="assets/js/plugin/tweenMax.min.js"></component> <!-- Nice Select Js -->
    <component :is="'script'" src="assets/js/plugin/nice-select.v1.0.min.js"></component> <!-- Wow js -->
    <component :is="'script'" src="assets/js/plugin/wow.v1.3.0.min.js"></component> <!-- Wow js -->
    <component :is="'script'" src="assets/js/plugin/jquery.countdown.min.js"></component> <!-- Main js -->
    <component :is="'script'" src="assets/js/main.js"></component>
    <!--==== Js Scripts End ====-->
  </div>
</template>

<script>
import axios from "axios";
import router from "../../router";

export default {
  name: "Registration"
,
  mounted() {

  }
  ,
  data(){
    return{
      name:null,
      email:null,
      password:null,
      password_confirmation:null
    }

  },

  methods:{

    register(){
        axios.get('/sanctum/csrf-cookie')
            .then(response =>{
            axios.post('/register',{
                name:this.name,
                email:this.email,
                password:this.password,
                password_confirmation:this.password_confirmation
            })
            .then(res=>{
                let user=[
                    {
                        'name':this.name,
                        'x_xsrf_token':res.config.headers['X-XSRF-TOKEN'],

                    }
                ]
                 localStorage.setItem ('userData',JSON.stringify(user))
                window.location.href = 'http://127.0.0.1:8000/';
                 console.log(res);
            })
        })
    }
  }
}
</script>

<style scoped>

</style>
