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
                                                        <span class="money ">TK.{{product.selling_price}}</span>
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

                <div class="right-ads-display col-lg-3 product-toys-info" style="padding:0px !important;overflow:hidden">
                    <div class="d-flex border-bottom-1">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-if="cartItems.length == 0" class="text-center border-bottom">
                                <th colspan="4">Your Cart is Empty</th>
                            </tr>
                            <tr class="text-center border-bottom" v-for="cart in cartItems">
                                <th>{{cart.name.slice(0,10)}}</th>
                                <th>{{cart.qty}}</th>
                                <th>Tk.{{cart.subtotal}}</th>
                                <th><button class="text-danger" @click="removeFromCart(cart.rowId)">x</button></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <router-link to="/carts" class="btn btn-outline-success text-center w-50">Cart</router-link>
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
                cartItems:[]
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
                axios.get("cart").then(
                    (data) => (this.cartItems = data.data.data)
                );
            },
            addToCart(id){
                this.$Progress.start();
                axios.post("cart",{'id':id})
                .then(
                    (data) => {
                        this.loadCart();
                        toast.fire({
                            icon: 'success',
                            title: 'Product added to cart successfully'
                        })
                    }
                );
                this.$Progress.finish();
            },
            updateCart(rowId){
                axios.put("cart/"+rowId,{'id':rowId})
                .then(
                    (data) => {
                        this.loadCart();
                        toast.fire({
                            icon: 'success',
                            title: 'Product qty updated successfully'
                        })
                    }
                )
            },
            removeFromCart(rowId){
                axios.delete("cart/"+rowId)
                    .then(
                        (data) => {
                            this.loadCart();
                            toast.fire({
                                icon: 'success',
                                title: 'Product removed from cart successfully'
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
