<template>
  <div>
    <main class="overflow-hidden ">
      <!--Start Breadcrumb Style2-->
      <section class="breadcrumb-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content text-center wow fadeInUp animated">
                <h2>Личный кабинет</h2>
                <div class="breadcrumb-menu">
                  <ul>
                    <li><a href="/"><i class="flaticon-home pe-2"></i>Главная</a></li>
                    <li> <i class="flaticon-next"></i> </li>
                    <li class="active">Личный кабинет</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Breadcrumb Style2-->
      <!--Start My Account Page-->
      <section class="my-account-page pt-120 pb-120">
        <div class="container">
          <div class="row wow fadeInUp animated">
            <!--Start My Account Page Menu-->
            <div class="col-xl-3 col-lg-4">
              <div class="d-flex align-items-start">
                <div class="nav my-account-page__menu flex-column nav-pills me-3" id="v-pills-tab"
                     role="tablist" aria-orientation="vertical">
                                 <button class="nav-link active" id="v-pills-orders-tab"
                                  data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab"
                                  aria-controls="v-pills-orders" aria-selected="false"> <span> Заказы</span> </button>
                                  <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill"
                                  data-bs-target="#v-pills-account" type="button" role="tab"
                                  aria-controls="v-pills-account" aria-selected="false"> <span> Профиль</span>
                                  </button> <button @click.prevent="logout()" class="nav-link"> <span> Выход </span> </button> </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="tab-content " id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                     aria-labelledby="v-pills-dashboard-tab">
                    <div class="tabs-content__single">
                        <h4>Ваши Заказы:</h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Сумма</th>
                                <th scope="col">Дата создания</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(order, index) in orders" :key="order.id">
                                <th scope="row">{{ index + 1 }}</th>
                                <td>{{ order.username }}</td>
                                <td>{{ order.phone_number }}</td>
                                <td>{{ order.total }}</td>
                                <td>{{ order.created_at  }}</td>
                                <td data-th="" class="hide-me">
                                    <div @click.prevent="removeOrder(order.id)" class="remove" style="cursor: pointer;"><i class="flaticon-cross"></i></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-orders" role="tabpanel"
                     aria-labelledby="v-pills-orders-tab">
                    <div class="tabs-content__single">
                        <h4>Ваши Заказы:</h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Сумма</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(order, index) in orders" :key="order.id">
                                <th scope="row">{{ index + 1 }}</th>
                                <td>{{ order.username }}</td>
                                <td>{{ order.phone_number }}</td>
                                <td>{{ order.total }}</td>
                                <td data-th="" class="hide-me">
                                    <div @click.prevent="removeOrder(order.id)" class="remove" style="cursor: pointer;"><i class="flaticon-cross"></i></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-downloads" role="tabpanel"
                     aria-labelledby="v-pills-downloads-tab">
                  <div class="tabs-content__single">
                    <h4><span>Hello Admin</span> (Not Admin? Logout)</h4>
                    <h5>From your account dashboard you can view your <span>Recent Orders, manage your
                                            shipping</span> and <span>billing addresses,</span> and edit your
                      <span>Password and account details</span></h5>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                     aria-labelledby="v-pills-address-tab">
                  <div class="tabs-content__single">
                    <h4><span>Hello Admin</span> (Not Admin? Logout)</h4>
                    <h5>From your account dashboard you can view your <span>Recent Orders, manage your
                                            shipping</span> and <span>billing addresses,</span> and edit your
                      <span>Password and account details</span></h5>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-account" role="tabpanel"
                     aria-labelledby="v-pills-account-tab">
                  <div class="tabs-content__single">
                    <h4><span>Hello Admin</span> (Not Admin? Logout)</h4>
                    <h5>From your account dashboard you can view your <span>Recent Orders, manage your
                                            shipping</span> and <span>billing addresses,</span> and edit your
                      <span>Password and account details</span></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End My Account Page-->
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

  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "MyAccount",

    mounted() {
      this.getOrders()
    }

    ,
    data(){
      return{
          orders:[],
      }
    },
    methods:{

      getOrders(){
          this.axios.get(`api/myAccount/getOrders/${this.getUsersId()}`).then(res=>{
              this.orders = res.data.data
              console.log(res.data.data[0]);
          })
      },
        getUsersId(){
            const userId = JSON.parse(localStorage.getItem('userData')) || [];
            return userId[0].id;
        },

        removeOrder(id){
            this.axios.delete(`api/myAccount/deleteOrder/${id}`).then(result=>{
                console.log(result);
                this.getOrders();
            })
        },

        logout(){
            axios.post('/logout')
                localStorage.removeItem ('userData')
                    window.location.href = '/login';
        },
    }
}
</script>

<style scoped>

</style>
