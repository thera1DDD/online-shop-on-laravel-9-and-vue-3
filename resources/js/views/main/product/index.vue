<template>
  <div>
    <main class="overflow-hidden ">
      <!--Start Breadcrumb Style2-->
      <section class="breadcrumb-area" style="background-image: url(/assets/images/inner-pages/shapka6.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Breadcrumb Style2-->
      <!--Start Product Categories One-->
        <categories></categories>
      <!--End Product Categories One-->
      <!--Start product-grid-->
      <div class="product-grid pt-60 pb-120">
        <div class="container">
          <div class="row gx-4">
            <div class="col-xl-9 col-lg-8">
              <div class="row">

              </div>
              <div class="row">
                <div class="col-12">
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                         aria-labelledby="pills-grid-tab">
                      <div class="row">
                        <div v-for="product in products"  class="col-xl-4 col-lg-6 col-6 ">
                          <div class="products-three-single w-100  mt-30">
                            <div class="products-three-single-img">
                                <a  href="shop-details-3.html" class="d-block">
                                    <img  :src="product.image_url"  class="first-img" alt="">
                                    <img  :src="product.image_url" alt="" class="hover-img">
                                </a>
                              <div class="products-grid-one__badge-box"> <span
                                  class="bg_base badge new ">New</span>
                              </div> <a @click.prevent="addToCart(product.id,true,product.title,product.image_url,product.price)" href="cart.html" class="addcart btn--primary style2">
                                Добавить в корзину </a>
                              <div class="products-grid__usefull-links">
                                <ul>
                                  <li><a @click.prevent="addToWishlist(product.id,product.count,product.title,product.image_url,product.price)"  href="wishlist"> <i class="flaticon-heart">
                                  </i> <span>
                                                                            wishlist</span> </a> </li>

                                  <li>
                                      <a @click.prevent="addToCompare(product.id, product.count, product.title,product.image_url,product.price,product.description)">
                                        <i class="flaticon-left-and-right-arrows"></i>
                                        <span> compare</span>
                                      </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div :id="`popup${product.id}`" class="product-gird__quick-view-popup mfp-hide">
                              <div v-if="popupProduct" class="container">
                                <div class="row justify-content-between align-items-center">
                                  <div class="col-lg-6">
                                    <div class="quick-view__left-content" >
                                      <div class="tabs">
                                        <div class="popup-product-thumb-box">
                                          <ul>
                                            <li v-for="cameraImage in popupProduct.camera_images"
                                                class="tab-nav popup-product-thumb">
                                              <a :href="`#tabb1${cameraImage.id}`" >
                                                <img :src="cameraImage.url"
                                                     alt="" /> </a> </li>
                                          </ul>
                                        </div>
                                        <div class="popup-product-main-image-box">
                                          <div v-for="cameraImage in popupProduct.camera_images"  :id="`tabb1${cameraImage.id}`"
                                               class="tab-item popup-product-image">
                                            <div
                                                class="popup-product-single-image">
                                              <img :src="cameraImage.url"
                                                   alt="" /> </div>
                                          </div>
                                          <button class="prev"> <i
                                            class="flaticon-back"></i>
                                        </button> <button class="next"> <i
                                            class="flaticon-next"></i>
                                        </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="popup-right-content">
                                      <h3>{{ popupProduct.title }}</h3>
                                      <div class="ratting"> <i
                                          class="flaticon-star"></i> <i
                                          class="flaticon-star"></i> <i
                                          class="flaticon-star"></i>
                                        <i class="flaticon-star"></i> <i
                                            class="flaticon-star"></i>
                                        <span>(112)</span> </div>
                                      <p class="text"> {{popupProduct.description}}
                                      </p>
                                      <div class="price">
                                        <h2>${{popupProduct.price}} <del>{{popupProduct.old_price}}</del></h2>
                                      </div>

                                      <div class="add-product">
                                        <h6 style="font-weight: normal "  >В наличии: {{popupProduct.count}}</h6>
                                        <div class="button-group">
                                          <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                        class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue" value="1" />
                                            <span class="increaseQty"> <i
                                                class="flaticon-plus"></i>
                                                                                    </span> </div>
                                          <button @click.prevent="addToCart(product.id,true,product.title,product.image_url,product.price)" class="btn--primary "> Add to
                                            Cart </button>
                                        </div>
                                      </div>
                                      <div class="payment-method"> <a href="#0"> <img
                                          src="/assets/images/payment_method/method_1.png"
                                          alt=""> </a>
                                        <a href="#0"> <img
                                            src="/assets/images/payment_method/method_2.png"
                                            alt=""> </a> <a href="#0"> <img
                                            src="/assets/images/payment_method/method_3.png"
                                            alt=""> </a>
                                        <a href="#0"> <img
                                            src="/assets/images/payment_method/method_4.png"
                                            alt=""> </a> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="products-three-single-content text-center"> <span>{{product.category.title}}</span>
                              <h5>
                                <router-link :to="{name: 'products.show',params:{id: product.id}}">{{product.title}} </router-link>
                              </h5>
                              <p><del>{{product.old_price}}</del>$ {{product.price}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" v-if="pagination.last_page>1">
                <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                  <ul class="pagination text-center">
                    <li v-if="pagination.current_page !==1" class="next">
                      <a @click.prevent="getProducts(pagination.current_page -1)" href="#0"><i class="flaticon-left-arrows"
                                                     aria-hidden="true"></i> </a>
                    </li>
                    <li v-for="link in pagination.links" >
                      <template v-if="Number(link.label) &&
                         pagination.current_page -link.label <2 &&
                         pagination.current_page -link.label >-2||
                       Number(link.label)===1||Number(link.label)=== pagination.last_page

                       ">
                        <a @click.prevent="getProducts(link.label)" :class="link.active ? 'active': '' "  href="#0">{{link.label}}</a>
                      </template>
                      <template v-if="Number(link.label) &&
                         pagination.current_page!==3 &&
                         (pagination.current_page -link.label ===2)||
                         Number(link.label) &&
                          pagination.current_page !== pagination.last_page -2 &&
                         (pagination.current_page -link.label === -2)
">
                        <a>...</a>
                      </template>
                    </li>

                    <li v-if="pagination.current_page!==pagination.last_page" class="next">
                      <a @click.prevent="getProducts(pagination.current_page +1)"  href="#0"><i class="flaticon-next-1"
                                                     aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4">
              <div class="shop-grid-sidebar"> <button class="remove-sidebar d-lg-none d-block"> <i
                  class="flaticon-cross"> </i> </button>
                <div class="sidebar-holder">

                  <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                    <h4>Мегапиксели</h4>
                    <div class="checkbox-item">
                      <form>
                        <div v-for="megapixel in filterList.megapixels" class="form-group"> <input :value="megapixel.id"  v-model="megapixels" type="checkbox" :id="megapixel.id"> <label
                            :for="megapixel.id">{{megapixel.title}} MP</label> </div>
                      </form>
                    </div>
                  </div>

                  <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                    <h4>Фильтр по цене</h4>
                    <div class="slider-box">
                      <div id="price-range" class="slider"></div>
                      <div class="output-price"> <label for="priceRange">Цена:</label> <input
                          type="text" id="priceRange" readonly> </div> <button @click.prevent="filterProducts" class="filterbtn"
                                                                               type="submit"> Фильтр </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End product-grid-->
    </main>
  </div>
</template>

<script>
import Categories from "../../../components/Categories";
export default {
  name: "Index",
    components: {Categories},
    cartCount:[],
    mounted() {
      $(document).trigger('changed')
      this.getProducts()
      this.getFilterList()

    },


data(){
    return{
      products:[],
      popupProduct:null,
      filterList: [],
      megapixels:[],
      prices:[],
      pagination:[],
      cartCount:0,
    }
},

  methods: {

    addToCompare(id,count,title,image_url,price,description){
      let compareList = localStorage.getItem('compareList')

      let newProduct = [
        {
            'id':id,
            'count':count,
            'title':title,
            'image_url':image_url,
            'price':price,
            'description':description
        }
      ]
      if(!compareList){
        localStorage.setItem('compareList',JSON.stringify(newProduct))
      }
      else {
        compareList = JSON.parse(compareList)

        compareList.forEach(productInWishlist =>{
          if(productInWishlist.id ===id){
            newProduct = null
          }
        })

        Array.prototype.push.apply(compareList, newProduct)
        localStorage.setItem('compareList',JSON.stringify(compareList))

        this.compareList = compareList

      }
    },


    addToWishlist(id,count,title,image_url,price){


      let wishlist = localStorage.getItem('wishlist')


      let newProduct =[
        {
          'id': id,
          'count':count,
          'title':title,
          'image_url':image_url,
          'price':price,
        }
      ]

      if(!wishlist){
        localStorage.setItem('wishlist',JSON.stringify(newProduct))
      }
      else {
        wishlist = JSON.parse(wishlist)


        wishlist.forEach(productInWishlist =>{
          if(productInWishlist.id ===id){
            newProduct = null

          }
        })

        Array.prototype.push.apply(wishlist, newProduct)
        localStorage.setItem('wishlist',JSON.stringify(wishlist))

        this.wishlist = wishlist
      }
    },

      addToCart(id, isSingle, title, image_url, price) {
          // Ваш код для добавления товара в корзину
          const qty = isSingle ? 1 : $('.qtyValue').val();
          let orders_id;
          const product = {
              id,
              qty,
              title,
              image_url,
              price,
              subtotal: price * qty,
              orders_id,
          };
          this.$store.commit('addToCart', product);
          $('.qtyValue').val(1);
      },


    filterProducts(){
      let prices =$('#priceRange').val()

      this.prices = prices.replace(/[\s+]|[$]/g,'').split('-');

      this.getProducts();

    },
    getProducts(page=1){
        this.axios.post('/api/products',{
          'megapixels':this.megapixels,
          'prices':this.prices,
          'page': page
        })
            .then(res=>{
              this.products = res.data.data
              this.pagination = res.data.meta
                console.log(res.data.data);


            })
            .finally(v=>{
              $(document).trigger('changed')
            })
    },
    getProduct(id){
      this.axios.get(`/api/products/${id}`)
          .then(res=>{
            this.popupProduct = res.data.data

          })
          .finally(v=>{
            $(document).trigger('changed')

          })
    },



    getFilterList(){
      this.axios.get(`/api/products/filters`)
          .then(res=>{
            this.filterList = res.data

            //  Price Filter
            if ($("#price-range").length) {
              $("#price-range").slider({
                range: true,
                min: this.filterList.price.min,
                max: this.filterList.price.max,
                values: [this.filterList.price.min, this.filterList.price.max],
                slide: function (event, ui) {
                  $("#priceRange").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
              });
              $("#priceRange").val("$" + $("#price-range").slider("values", 0) + " - $" + $("#price-range").slider("values", 1));
            }
          })
          .finally(v=>{
            $(document).trigger('changed')
          })
    }
  }
}
</script>

<style scoped>

</style>
