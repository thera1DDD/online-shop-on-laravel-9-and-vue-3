<template>
  <main class="overflow-hidden">
    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" >
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb-content text-center wow fadeInUp animated">
              <h2>Корзина</h2>
              <div class="breadcrumb-menu">
                <ul>
                  <li><a href="/"><i class="flaticon-home pe-2"></i>Home</a></li>
                  <li> <i class="flaticon-next"></i> </li>
                  <li class="active">Корзина</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Breadcrumb Style2-->
    <!--Start cart area-->
    <section class="cart-area pt-120 pb-120"  >
      <div  class="container"  >
          <div class="row wow fadeInUp animated">
              <div v-if="products.qty !== 0" class="col-xl-12 col-lg-12 col-md-12 col-sm-12" id="cartContent">
                  <div class="cart-table-box">
                      <div class="table-outer">
                          <table class="cart-table">
                              <thead class="cart-header">
                              <tr>
                                  <th class="hidden-xs">Название</th>
                                  <th class="price">Цена</th>
                                  <th>Количество</th>
                                  <th>Стоимость</th>
                                  <th class="hide-me"></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr v-for="product in products" :key="product.id">
                                  <td data-th="Название">
                                      <div class="thumb-box">
                                          <router-link :to="{ name: 'products.show', params: { id: product.id } }" class="thumb">
                                              <img :src="product.image_url" :alt="product.title">
                                          </router-link>
                                          <router-link :to="{ name: 'products.show', params: { id: product.id } }" class="title">
                                              <h5 class="hidden-xs">{{ product.title }}</h5>
                                          </router-link>
                                      </div>
                                  </td>
                                  <td data-th="Цена" class="price">{{ product.price }}₽</td>
                                  <td data-th="Кол-во" class="qty">
                                      <div class="qtySelector text-center">
                                          <span @click.prevent="minusQty(product), getCartProducts()" class="decreaseQty"><p class="product-minus">-</p></span>
                                          <input type="number" class="qtyValue" :value="product.qty" />
                                          <span @click.prevent="plusQty(product), getCartProducts()" class="increaseQty"><p class="product-plus">+</p></span>
                                      </div>
                                  </td>
                                  <td data-th="Стоимость" class="sub-total">{{ product.price * product.qty }}₽</td>
                                  <td data-th="" class="hide-me">
                                      <div @click.prevent="removeProduct(product.id)" class="remove"><i class="flaticon-cross"></i></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="cart-button-box">
              <div class="apply-coupon wow fadeInUp animated">

                <div class="apply-coupon-input-box mt-30 "> <input type="text" v-model="username" name="username"
                                                                   placeholder="Имя"> </div>
                <div class="apply-coupon-input-box mt-30 "> <input type="text"  v-model="phone_number" name="phone_number"
                                                                  placeholder="Номер телефона"> </div>

              </div>
                <div class="cart-button-box-right wow fadeInUp animated"> </div>
              <div class="cart-button-box-right wow fadeInUp animated"> <button @click.prevent="addPerson()" class="btn--primary mt-30"
                                                                                type="submit">Заказать</button>  </div>

            </div>
          </div>
        </div>
        <div class="row pt-120">
          <div class="col-xl-6 col-lg-7 wow fadeInUp animated">

          </div>
        </div>
        <div class="row mt--30">
          <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
            <div class="cart-check-out mt-30">

              <h3>Чек</h3>
              <ul class="cart-check-out-list">
                <li>
                  <div class="left">
                    <p>  </p>
                  </div>
                  <div class="right">
                    <p></p>
                  </div>
                </li>
                <li>
                  <div  class="left">
                    <p>Сумма: {{totalPrice()}}₽ </p>
                  </div>
                  <div class="right">
                    <p></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End cart area-->
  </main>
  <!--==== Js Scripts Start ====-->
  <!-- Jquery v3.6.0 Js -->
  <component :is="'script'" src="assets/js/jqurey.v3.6.0.min.js"> </component><!-- Popper v2.9.3 Js -->
  <component :is="'script'" src="assets/js/popper.v2.9.3.min.js"> </component> <!-- Bootstrap v5.1.1 js -->
  <component :is="'script'" src="assets/js/bootstrap.v5.1.1.min.js"> </component> <!-- jquery ui js -->
  <component :is="'script'" src="assets/js/plugin/jquery-ui.min.js"> </component> <!-- Parallax js -->
  <component :is="'script'" src="assets/js/plugin/jarallax.min.js"> </component> <!-- Slick Slider Js -->
  <component :is="'script'" src="assets/js/plugin/slick.min.js"> </component> <!-- isotope Js -->
  <component :is="'script'" src="assets/js/plugin/isotope.js"> </component> <!-- magnific-popup v2.3.4 Js -->
  <component :is="'script'" src="assets/js/plugin/jquery.magnific-popup.min.js"> </component> <!-- Tweenmax v2.3.4 Js -->
  <component :is="'script'" src="assets/js/plugin/tweenMax.min.js"> </component> <!-- Nice Select Js -->
  <component :is="'script'" src="assets/js/plugin/nice-select.v1.0.min.js" > </component> <!-- Wow js -->
  <component :is="'script'" src="assets/js/plugin/wow.v1.3.0.min.js" > </component> <!-- Wow js -->
  <component :is="'script'" src="assets/js/plugin/jquery.countdown.min.js" > </component> <!-- Main js -->
  <component :is="'script'" src="assets/js/main.js"></component>
  <!--==== Js Scripts End ====-->

</template>

<script>
import axios from "axios";
import router from "../../router";
import html2canvas from "html2canvas";

export default {
  name: "Index",
  mounted() {
    $(document).trigger('changed')
    this.getCartProducts()
    this.getTitles()
    this.getSubtotals()
    this.getPrices()
    this.getImageUrls()
    this.getQty()
    this.getUsersId()
  },


  data() {
    return {
      products:[],
      cartCount:[],
      username:null,
      phone_number:null,
      orders_id:null,
    }
  },

  methods: {

      getSmeta()
      {
          window.location.href = 'http://127.0.0.1:8000/smeta'
      },


    getTitles(){
      let titles =''
      let cart = JSON.parse(localStorage.getItem('cart'))
      cart.forEach((function (item){
        titles += item.title + ' '
      }))
      return titles
    },
    getImageUrls(){
      let imageUrls =''
      let cart = JSON.parse(localStorage.getItem('cart'))
      cart.forEach((function (item){
        imageUrls += item.image_url + ' '
      }))
      return imageUrls
    },

    getPrices(){
      let prices = ''
      let cart = JSON.parse(localStorage.getItem('cart'))
      cart.forEach((function (item){
        prices += item.price + '₽ '

      }))
      return prices
    },

    getQty(){
      let qty = ''
      let cart = JSON.parse(localStorage.getItem('cart'))
      cart.forEach((function (item){
        qty += item.qty + 'шт '

      }))
      return qty
    },
    getSubtotals(){
      let subtotals = ''
      let cart = JSON.parse(localStorage.getItem('cart'))
      cart.forEach((function (item){
        subtotals += item.subtotal + ' '

      }))
      return subtotals
    },


    addToOrder(id,username,phone_number,image_url,product_name,price,quantity,subtotal){
      let order = localStorage.getItem('order')
      let newProduct =[
        {
          'id': id,
          'username': username,
          'phone_number':phone_number,
          'image_url':image_url,
          'title':product_name,
          'price':price,
          'qty':quantity,
          'subtotal':subtotal,
          'total':this.totalPrice(),
        }
      ]

      if(!order){
        localStorage.setItem('order',JSON.stringify(newProduct))
      }
      else {
        order = JSON.parse(order)

        order.forEach(productInCart =>{
          if(productInCart.username === username){
            newProduct = null

          }
        })
        Array.prototype.push.apply(order, newProduct)
        localStorage.setItem('order',JSON.stringify(order))

        this.order = order

      }
    },

      getUsersId(){
          const userId = JSON.parse(localStorage.getItem('userData')) || [];
          return userId[0].id;
      },
      //отправка данных со скриншотом в базу и телеграмм
      async uploadScreenshot(imageData) {
          try {
              // Создание заказа
              const orderResponse = await this.axios.post('/api/postOrder', {
                  screenshot: imageData,
                  username: this.username,
                  phone_number: this.phone_number,
                  total: this.totalPrice(),
                  users_id:this.getUsersId()
              });
              // Проверка успешного создания заказа и получение его ID
              if (!orderResponse.data.data || !orderResponse.data.data.id) {
                  console.error('Failed to create order.');
                  return;
              }

              this.orders_id = orderResponse.data.data.id;

              // Получаем продукты из localStorage
              const products = JSON.parse(localStorage.getItem('cart')) || [];

              // Добавляем к каждому продукту атрибут с ID заказа
              const productsWithOrderId = products.map(product => {
                  return { ...product, orders_id: this.orders_id };
              });
              console.log(this.orders_id);

              // Отправляем все продукты сразу
              await this.axios.post(`/api/postPosition`, { products: productsWithOrderId });

              // Переход на страницу уведомлений
              this.$router.push('/notification');
          } catch (error) {
              console.error(error);
          }
      },






      //проверка полей и подготовка скришота
    async addPerson() {
        if (this.username == null || this.phone_number == null) {
            alert('Заполните все поля!')
        } else {
            try {
                // Создаем скриншот области корзины
                const canvas = await html2canvas(document.getElementById('cartContent'));

                // Преобразуем изображение в base64-кодированную строку
                const screenshot = canvas.toDataURL('image/png');

                // Отправляем изображение на сервер
                await this.uploadScreenshot(screenshot);
            } catch (error) {
                console.error(error);
            }
        }
    },
    plusQty(product) {
      product.qty++
      product.subtotal = product.qty*product.price
      this.updateCart()
      this.totalPrice()
    },

    minusQty(product) {
      if (product.qty == 0) return
      product.qty--
      product.subtotal = product.price *product.qty
      this.updateCart()
      this.totalPrice()
    }
    ,
    totalPrice(){
      let total = 0
      this.cartProducts = JSON.parse(localStorage.getItem('cart'))
      this.cartProducts.forEach((function (item){
        total +=item.subtotal
      }))
      return total
    },


    getCartProducts() {
      this.products = JSON.parse(localStorage.getItem('cart'))
        this.products = this.products.filter(product => {
          return product.qty>0
        })
        this.updateCart()
        this.products = JSON.parse(localStorage.getItem('cart'))
    },
    removeProduct(id) {
      this.products = this.products.filter(product => {
        return product.id !== id
      })
      this.updateCart()
    }
    ,
    updateCart() {
      localStorage.setItem('cart', JSON.stringify(this.products))
    },

  }
}
</script>
<style scoped>
/* Общие стили для таблицы */
.cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px; /* Расстояние между таблицей и предыдущим элементом */
}

/* Стили для заголовка таблицы */
.cart-header th {
    text-align: left;
}

/* Стили для ячеек таблицы */
.cart-table td, .cart-table th {
    padding: 10px;
    border-bottom: 1px solid #ddd; /* Разделительные линии между строками таблицы */
}

/* Скрываем заголовок для мобильных устройств */
@media only screen and (max-width: 767px) {
    .cart-table th {
        display: none;
    }
    .cart-table td {
        display: block;
        text-align: -moz-left;
        padding: 5px;
        margin-bottom: 10px;
    }
    .cart-table td:before {
        content: attr(data-th);
        font-weight:normal;
        display: inline-block;
        width: 50%;
        margin-right: 10px;
    }
}
</style>
