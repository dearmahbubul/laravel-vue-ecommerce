<template>
    <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="shop_inner_inf">
                <div class="privacy about">
                    <h3>Chec<span>kout</span></h3>
                    <div class="checkout-right">
                        <h4>Your shopping cart contains: <span>{{totalCount}} Products</span></h4>
                        <table class="timetable_sub">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quality</th>
                                <th>Product Name</th>
                                <th>Sub Total</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="rem1" v-for="cart in cartItems">
                                <td class="invert-image"><a href="single.html"><img src="images/f1.jpg" alt=" " class="img-responsive"></a></td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select d-flex">
                                            <div class="entry value-minus" @click="updateCart(cart.rowId,--cart.qty)">&nbsp;</div>
                                            <div class="entry value"><span>{{cart.qty}}</span></div>
                                            <div class="entry value-plus active" @click="updateCart(cart.rowId,++cart.qty)">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{cart.name}}</td>
                                <td class="invert">TK.{{cart.subtotal}}</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1" @click="removeFromCart(cart.rowId)"> </div>
                                    </div>
                                </td>
                            </tr>
                            <tr v-if="cartItems.length == 0" class="rem1 text-center border-bottom">
                                <td colspan="5">Your Cart is Empty</td>
                                <div class="clearfix"></div>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="checkout-right">
                        <div class="col-md-6 mx-auto checkout-right-basket">
                            <h4 class="btn btn-warning w-100">Total Details</h4>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item border-bottom border-info" v-for="cart in cartItems">{{cart.name.slice(0,25)}} <i>-</i> <span>TK.{{cart.subtotal}} </span></li>
                                <!--<li>Total Service Charges <i>-</i> <span>$55.00</span></li>-->
                                <li class="list-group-item">Total <i>-</i> <span>TK. {{totalPrice}}</span></li>
                            </ul>
                            <span class="alert-info">Only Cash on Delivery</span>
                            <div class="">
                                <router-link to="/home" class="btn btn-lg btn-warning" style="width: 49%;">Continue Shopping</router-link>
                                <button class="btn btn-lg btn-success w-50" v-bind:disabled="empty" @click="orderSubmit()">Order Now</button>
                            </div>
                        </div>
                    </div>
                    <!--<div class="checkout-right">
                        <div class="col-md-4 checkout-right-basket">
                            <a class="btn btn-lg btn-warning" href="/">Continue Shopping</a>
                        </div>
                    </div>-->
                    <div class="clearfix"></div>
                </div>

            </div>
            <!-- //top products -->
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Cart Component mounted.')
        },
        data() {
            return {
                cartItems:[],
                totalCount:'',
                totalPrice:'',
                empty: false
            }
        },
        /*computed: {
            carts(){
                axios.get("carts").then((data) => data.data)
            }
        },*/
        methods: {
            loadCart(){
                axios.get("cart").then(
                    (data) => {
                        this.cartItems = data.data.data;
                        this.totalCount = data.data.total_count;
                        if(this.totalCount == 0){
                            this.empty = true;
                        }
                        this.totalPrice = data.data.total_price
                    }
                );
            },
            updateCart(rowId,qty){
                axios.put("cart/"+rowId,{'qty':qty})
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
            },
            orderSubmit(){
                axios.get("checkout")
                .then(
                    (data) => {
                        toast.fire({
                            icon: 'success',
                            title: 'You order submitted successfully'
                        });
                        console.log(data.data.data);
                        this.$router.push('invoice/'+data.data.data)
                    }
                )
            }
        },
        created(){
            this.$Progress.start();
            this.loadCart();
            this.$Progress.finish()
        }
    }
</script>
<style lang="css">
    /*@import '@/css/checkout.css';*/
</style>
