<template>

<div>
        <!--Start cart area-->
        <section class="cart-area pt-120 pb-120">
            <div  class="container">
                <div  class="row wow fadeInUp animated">
                    <div  v-if="products.qty!==0" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="cart-table-box">
                            <div class="table-outer">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                    <tr>
                                        <th  style="font-size: 28px"  class="">Название</th>
                                        <th  style="font-size: 28px"  class="price">Цена</th>
                                        <th  style="font-size: 28px">Количество</th>
                                        <th  style="font-size: 28px">Стоимость</th>
                                        <th  class="hide-me"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="product in products">
                                        <td>
                                            <div class="thumb-box"> <router-link :to="{name: 'products.show',params:{id:product.id}}" class="thumb">
                                                <img :src="product.image_url" :alt="product.title">
                                            </router-link> <router-link :to="{name:'products.show',params:{ id: product.id}}"  class="title">
                                                <h5 style="font-size: 35px"> {{product.title}} </h5>
                                            </router-link> </div>
                                        </td>
                                        <td style="font-size: 35px" >{{product.price}}₽ </td>
                                        <td class="qty">
                                            <div class="qtySelector text-center">
                                                <span @click.prevent="minusQty(product),getCartProducts()" class="decreaseQty"><i class="flaticon-minus"></i></span>
                                                <input style="font-size: 30px" type="number" class="qtyValue" :value="product.qty" />
                                                <span @click.prevent="plusQty(product),getCartProducts()" class="increaseQty"> <i class="flaticon-plus"></i> </span>
                                            </div>
                                        </td>
                                        <td style="font-size: 35px" class="sub-total">{{product.price*product.qty}}₽</td>
                                        <td>
                                            <div @click.prevent="removeProduct(product.id)" class="remove"> <i class="flaticon-cross"></i> </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-120">
                    <div class="row mt--30">
                        <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                            <div class="cart-check-out mt-30">
                                <h3 style="font-size: 40px" >Итог: {{totalPrice()}}₽</h3>
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
                                            <p> </p>
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
            </div>
        </section>
        <!--End cart area-->

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
    </div>

</template>

<script>
import axios from "axios";
import router from "../../router";

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




    },


    data() {
        return {
            products:[],
            cartCount:[],
            username:null,
            phone_number:null
        }
    },

    methods: {
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

        addPerson(){
            if(this.username == null||this.phone_number == null){
                alert('Заполните все поля!')
            }
            else{
                axios.post('/api/order',{
                    username:this.username,phone_number:this.phone_number,image_url:this.getImageUrls(),product_name:this.getTitles(),price:this.getPrices(),quantity:this.getQty(),subtotal:this.getSubtotals(),total:this.totalPrice()
                }).then(res=>{
                    if(res!==null){
                        this.$router.push('/notification')

                    }
                })
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

</style>
