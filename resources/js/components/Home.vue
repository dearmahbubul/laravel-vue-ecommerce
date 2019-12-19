<template>
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Fruits Shop</h3>
            <div class="row">
                <div class="left-ads-display col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two" v-for="product in products" :key="product.id">
                            <div class="product-toys-info">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a href="single.html">{{product.name.slice(0,20)+'...'}}</a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money ">TK.{{product.total_price}}</span>
                                                    </div>
                                                </div>
                                                <ul class="stars">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star" ></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-star-half-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="toys single-item hvr-outline-out">
                                                <button type="submit" class="toys-cart ptoys-cart" @click="addToCart(product.id)">
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-ads-display col-lg-3 product-toys-info">
                    <div class="d-flex border-bottom-1">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center border-bottom">
                                <th>Apple</th>
                                <th contenteditable="true">2</th>
                                <th>Tk.50</th>
                                <th><button class="text-danger">x</button></th>
                            </tr>
                            </tbody>
                        </table>


                        <!--<div class="product-cart-info">
                            <img src="images/a2.jpg" width="50px" alt="">
                            <p>Mango Jos</p>
                        </div>
                        <div class="">
                            <h6>Price</h6>
                            <p>Tk. 250</p>
                        </div>
                        <div class="">
                            <li class="fa fa-trash"></li>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            //console.log('mounted');
        },
        data() {
            return {
                products: [],
                cart:[]
            }
        },
        /*computed:{
            carts(){
                axios.get("api/cart").then(
                    return this.products = data.data
                )
            }
        },*/

        methods:{
            load(){
                axios.get("api/products").then(
                    (data) => (this.products = data.data.data)
                );
            },
            loadCart(){
                axios.get("api/cart").then(
                    (data) => (this.cart = data.data)
                );
            },
            addToCart(id){
                axios.post("api/cart",{'id':id})
                .then(
                    (data) => {
                        this.loadCart();
                        toast.fire({
                            icon: 'success',
                            title: 'Product added to cart successfully'
                        })
                    }
                )
            }
        },
        created(){
            this.$Progress.start();
            this.load();
            this.loadCart();

            /*Swal.fire({
                title: 'Success!',
                text: 'Do you want to continue',
                icon: 'success',
                confirmButtonText: 'Cool'
            });*/
            this.$Progress.finish()
        }


    }
</script>
