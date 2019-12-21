<?php
/**
 * Created by PhpStorm.
 * User: emamu
 * Date: 12/15/2019
 * Time: 9:05 PM
 */
?>
<div class="main_header" id="home">
    <div class="bar_header">
        <div class="top_information">
            <div class="contact_information">
                <ul>
                    <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+8801717-828103</p>
                    </li>
                    <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="#">shakti@gain.media</a></p>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="up_header row">
                <div class="col-lg-3 col-md-3 logo">
                    <h1><a class="navbar-brand" href="index.blade.php">Fruits-Shop</a></h1>
                </div>
                <div class="col-lg-5 col-md-6 search_button">
                    <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Here">
                        <button class="btn" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 icons_cart">
                    <div class="cart-icons">
                        <ul>
                            <li>
                                <span class="far fa-heart"></span>
                            </li>
                            <li>
                                <button type="button" data-toggle="modal" data-target="#userLoginModal"> <span class="far fa-user"></span></button>
                            </li>
                            <li class="fruitscart fruitscart2 cart cart box_1">
                                <router-link to="/carts" class="last">
                                    <span class="fas fa-cart-arrow-down"></span>
                                    <span class="" style="margin-left: -5px;border: none;">.</span>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <router-link to="/home" class="nav-link">Home <span class="sr-only">(current)</span></router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/all-invoice" class="nav-link">All Invoice</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/carts" class="nav-link">Cart</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--//headder-->


<!-- banner -->
<div class="inner_page-banner one-img">
</div>
<!--//banner -->
