<template>
  <div>
    <main class="overflow-hidden ">
      <!--Start Breadcrumb Style2-->
      <section class="breadcrumb-area" style="background-image: url(h/images/inner-pages/breadcum-bg.png);">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content text-center wow fadeInUp animated">
                <h2>Сравнить</h2>
                <div class="breadcrumb-menu">
                  <ul>
                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Главная</a></li>
                    <li> <i class="flaticon-next"></i> </li>
                    <li class="active">Сравнить</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Breadcrumb Style2-->
      <!--Start Compare-->
      <section class="compare pt-120 pb-120">
        <div class="container">
          <div  class="row"   >
            <div  class="col-xl-12 wow fadeInUp animated">
              <div class="compare-table-box">
                <div class="compare-table-outer">
                  <table  class="compare-table">
                    <thead class="compare-header">
                    <tr>
                      <th>
                        <p> Товар </p>
                      </th>
                      <th>
                        <p> Наименование </p>
                      </th>
                      <th>
                        <p> Описание </p>
                      </th>
                      <th>
                        <p> Цена </p>
                      </th>
                      <th>
                        <p> Наличие </p>
                      </th>
                      <th>
                        <p> Купить </p>
                      </th>
                      <th>
                        <p> Удалить </p>
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="product in products"      >
                      <td>
                        <div class="popup-product-main-image-box"> <img
                            :src="product.image_url" alt="">
                        </div>
                      </td>
                      <td style="width: 220px" >
                        <h5>{{product.title}}</h5>
                      </td>
                      <td>
                        <p>{{product.description}}</p>
                      </td>
                      <td class="price">{{product.price}}₽</td>
                      <td>
                        <p v-if="product.count!==0" style="color: green" >В наличии</p>
                        <p v-else="product.count==0" style="color: red"  >Нет в наличии</p>
                      </td>
                      <td style="width: 180px" > <a @click.prevent="addToCart(product.id,true,product.title,product.image_url,product.price,product.subtotal)" href="cart.html" class="btn--primary style2">В корзину</a> </td>
                      <td>
                        <div   class="delete-box"> <a  @click.prevent="removeProduct(product.id)" href="#"><i class="flaticon-delete"></i></a>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--End Order Compare-->
    </main>
    <footer class="footer-default footer-style-1">
      <!--Start Footer-->
      <div class="footer-default__main-footer position-relative">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
              <div class="footer-default__single-box">
                <div class="company-info">
                  <div class="footer-logo"> <a href="index.html"> <img src="assets/images/logo/logo-2.png"
                                                                       alt=""> </a> </div>
                  <div class="text1">
                    <p>Orchestrate maintainable mindshare through equity invested action items.
                      Compellingly procrastinate...</p>
                  </div>
                  <div class="newsletter-bottom d-flex align-items-center">
                    <ul class="footer__medio-boxx  medio-boxx  two d-flex align-items-center">
                      <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                          class="flaticon-facebook-app-symbol"></i></a></li>
                      <li><a href="https://www.youtube.com/" target="_blank"><i
                          class="flaticon-youtube"></i></a></li>
                      <li><a href="https://twitter.com/" target="_blank"><i
                          class="flaticon-twitter"></i></a></li>
                      <li><a href="https://www.instagram.com/" target="_blank"><i
                          class="flaticon-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
              <div class="footer-default__single-box">
                <div class="footer-title">
                  <h4> Useful Links </h4>
                </div>
                <ul class="footer-links">
                  <li><a href="my-account.html">Account</a></li>
                  <li><a href="login.html">Sign In</a></li>
                  <li><a href="cart.html">View Cart</a></li>
                  <li><a href="wishlist.html">My WishList</a></li>
                  <li><a href="compare.html">Compare Products</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
              <div class="footer-default__single-box">
                <div class="footer-title">
                  <h4> Information </h4>
                </div>
                <ul class="footer-links">
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="contact.html">Contact Us </a></li>
                  <li><a href="faq.html">Faq</a></li>
                  <li><a href="blog.html">Latest Posts</a></li>
                  <li><a href="order-track.html">Order Track</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
              <div class="footer-default__single-box">
                <div class="footer-title">
                  <h4> Office </h4>
                </div>
                <div class="footer-address-box ">
                  <div class="text1 pt-3">
                    <p>29 Holles Place, Dublin 2 D02 YY46</p>
                  </div>
                  <div class="text2">
                    <p>68 Jay Street, Suite 902 New Side <br> Brooklyn, NY 11201</p>
                  </div>
                  <div class="text3">
                    <p>New York, United States</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- footer-bottom Footer-->
      <div class="footer_bottom position-relative">
        <div class="container">
          <div class="footer_bottom_content">
            <div class="copyright wow fadeInUp animated">
              <p>© 2022 <a href="index.html">Karte.</a> All Rights Reserved.</p>
            </div>
            <div class="footer-payment wow fadeInUp animated"> <a href="#0"> <img
                src="assets/images/payment_method/payment_1.png" alt="payment"> </a> <a href="#0"> <img
                src="assets/images/payment_method/payment_2.png" alt="payment"> </a> <a href="#0"> <img
                src="assets/images/payment_method/payment_3.png" alt="payment"> </a> <a href="#0"> <img
                src="assets/images/payment_method/payment_4.png" alt="payment"> </a> </div>
            <div class="footer-bottom-menu wow fadeInUp animated">
              <ul class="d-flex align-items-center">
                <li> <a href="contact.html">Sitemap</a> </li>
                <li> <a href="contact.html">Terms of Service</a> </li>
                <li> <a href="contact.html">Privacy Policy</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
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
export default {
  name: "Index.vue" ,


  mounted() {
    $(document).trigger('changed')
    this.getCompareList()
  },
  data(){
    return{
      products:[],
    }
  }
  ,
  computed:{

  }
  ,
  methods:{
    getCompareList(){
      this.products = JSON.parse(localStorage.getItem('compareList'))
    }
    ,
    removeProduct(id) {
      this.products = this.products.filter(product => {
        return product.id !== id
      })
      this.updateCart()
    },
    updateCart() {
      // this.products = localStorage.getItem('cart')
      // for(let item of this.products){
      //   this.products.push(item.price * item.qty)
      //   this.products = this.products.reduce(function (sum,el){
      //     return Number(sum)+ Number(el);
      //   },0)
      //   return this.products
      // }
      localStorage.setItem('compareList', JSON.stringify(this.products))
    },

    addToCart(id, isSingle,title,image_url,price,subtotal){

      let qty = isSingle ? 1: $('.qtyValue').val()


      let cart = localStorage.getItem('cart')
      $('.qtyValue').val(1)

      let newProduct =[
        {
          'id': id,
          'qty': qty,
          'title':title,
          'image_url':image_url,
          'price':price,
          'subtotal':subtotal
        }
      ]

      if(!cart){
        localStorage.setItem('cart',JSON.stringify(newProduct))
      }
      else {
        cart = JSON.parse(cart)

        cart.forEach(productInCart =>{
          if(productInCart.id ===id){
            productInCart.subtotal = Number(productInCart.qty)* Number(productInCart.price)
            productInCart.qty = Number(productInCart.qty)+ Number(qty)
            newProduct = null

          }
        })
        Array.prototype.push.apply(cart, newProduct)
        localStorage.setItem('cart',JSON.stringify(cart))

        this.cartList = cart

      }
    },

  }
}
</script>

<style scoped>

</style>
