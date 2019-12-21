<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Checkout | Murshalin Shop</title>
      
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="" />
   
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">

      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">

      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
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
                     <h1><a class="navbar-brand" href="master.blade.php">Fruits-Shop</a></h1>
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
                              <button class="last">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 <span class="" style="margin-left: -5px;border: none;">6 item</span>
                              </button>
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
                     <li class="nav-item active">
                        <a class="nav-link" href="master.blade.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="master.blade.php" class="nav-link">Shop Now</a>
                     </li>
                     <li class="nav-item">
                        <a href="cart.html" class="nav-link">Cart</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      <!--//headder-->


      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="master.blade.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Shop Now</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!-- top Products -->
      <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="ads-grid_shop">
               <div class="shop_inner_inf">
                  <div class="col-md-12 mx-auto address_form">
                     <h4>Add a your details</h4>
                     <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                        <section class="creditly-wrapper wrapper">
                           <div class="information-wrapper">
                              <div class="first-row form-group">
                                 <div class="controls">
                                    <label class="control-label">Full name: </label>
                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                 </div>
                                 <div class="card_number_grids">
                                    <div class="card_number_grid_left">
                                       <div class="controls">
                                          <label class="control-label">Mobile number:</label>
                                          <input class="form-control" type="text" placeholder="Mobile number">
                                       </div>
                                    </div>
                                    <div class="card_number_grid_right">
                                       <div class="controls">
                                          <label class="control-label">Landmark: </label>
                                          <input class="form-control" type="text" placeholder="Landmark">
                                       </div>
                                    </div>
                                    <div class="clear"> </div>
                                 </div>
                                 <div class="controls">
                                    <label class="control-label">Town/City: </label>
                                    <input class="form-control" type="text" placeholder="Town/City">
                                 </div>
                              </div>
                           </div>
                        </section>
                     </form>
                  </div>
                  <div class="clearfix"></div>
                  <div class="privacy about">
                     <h3>Pay<span>ment</span></h3>
                     <!--/tabs-->
                     <div class="responsive_tabs">
                        <div id="horizontalTab">
                           <ul class="resp-tabs-list">
                              <li>Cash on delivery (COD)</li>
                              <li>Credit/Debit</li>
                              <li>Net Banking</li>
                              <li>Paypal Account</li>
                           </ul>
                           <div class="resp-tabs-container">
                              <!--/tab_one-->
                              <div class="tab1">
                                 <div class="pay_info">
                                    <div class="vertical_post check_box_agile">
                                       <h5>COD</h5>
                                       <div class="checkbox">
                                          <div class="check_box_one cashon_delivery">
                                             <label class="anim">
                                             <input type="checkbox" class="checkbox">
                                             <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span> 
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--//tab_one-->
                              <div class="tab2">
                                 <div class="pay_info">
                                    <form action="#" method="post" class="creditly-card-form agileinfo_form">
                                       <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                          <div class="credit-card-wrapper">
                                             <div class="first-row form-group">
                                                <div class="controls">
                                                   <label class="control-label">Name on Card</label>
                                                   <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                </div>
                                                <div class="w3_agileits_card_number_grids">
                                                   <div class="w3_agileits_card_number_grid_left">
                                                      <div class="controls">
                                                         <label class="control-label">Card Number</label>
                                                         <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                            autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                      </div>
                                                   </div>
                                                   <div class="w3_agileits_card_number_grid_right">
                                                      <div class="controls">
                                                         <label class="control-label">CVV</label>
                                                         <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                      </div>
                                                   </div>
                                                   <div class="clear"> </div>
                                                </div>
                                                <div class="controls">
                                                   <label class="control-label">Expiration Date</label>
                                                   <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </form>
                                 </div>
                              </div>
                              <div class="tab3">
                                 <div class="pay_info">
                                    <div class="vertical_post">
                                    </div>
                                 </div>
                              </div>
                              <div class="tab4">
                                 <div class="row pay_info">
                                    <div class="col-md-6 tab-grid">
                                       <img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
                                       <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                                       <a class="btn btn-primary">Checkout via Paypal</a>
                                    </div>
                                    <div class="col-md-6">
                                       <form class="cc-form">
                                          <div class="clearfix">
                                             <div class="form-group form-group-cc-number">
                                                <label>Card Number</label>
                                                <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text"><span class="cc-card-icon"></span>
                                             </div>
                                             <div class="form-group form-group-cc-cvc">
                                                <label>CVV</label>
                                                <input class="form-control" placeholder="xxxx" type="text">
                                             </div>
                                          </div>
                                          <div class="clearfix">
                                             <div class="form-group form-group-cc-name">
                                                <label>Card Holder Name</label>
                                                <input class="form-control" type="text">
                                             </div>
                                             <div class="form-group form-group-cc-date">
                                                <label>Valid Thru</label>
                                                <input class="form-control" placeholder="mm/yy" type="text">
                                             </div>
                                          </div>
                                          <div class="checkbox checkbox-small">
                                             <label>
                                             <input class="i-check" type="checkbox" checked="">Add to My Cards</label>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--//tabs-->
                  </div>

                  <div class="checkout-right-basket">
                     
                     <a href="payment.html">Submit Payment </a>
                  </div>
               </div>
               <!-- //payment -->
               <div class="clearfix"></div>
            </div>
         </div>
      </section>
      <!-- //show Now-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2019 Online Fruits Shop | Design by <a href="http://themangobd.com/" target="_blank">Md Emamul Murshalin</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="userLoginModal" tabindex="-1" role="dialog" aria-labelledby="userLoginModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="userLoginModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                           <button type="submit" data-toggle="modal" data-target="#userRegistrationModal" class="btn subscrib-btnn">Registration</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->


      <!-- Modal 2-->
      <div class="modal fade" id="userRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="userRegistrationModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="userRegistrationModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" data-toggle="modal" data-target="#userRegistrationModal" class="btn subscrib-btnn">Registration</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 2-->


      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- easy-responsive-tabs -->
      <script src="js/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
               type: 'default', //Types: default, vertical, accordion           
               width: 'auto', //auto or any width like 600px
               fit: true, // 100% fit in a container
               closed: 'accordion', // Start closed if in accordion view
               activate: function (event) { // Callback function if tab is switched
                  var $tab = $(this);
                  var $info = $('#tabInfo');
                  var $name = $('span', $info);
                  $name.text($tab.text());
                  $info.show();
               }
            });
            $('#verticalTab').easyResponsiveTabs({
               type: 'vertical',
               width: 'auto',
               fit: true
            });
         });
      </script>
      <!-- credit-card -->
      <script src="js/creditly.js"></script>
      <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
      <script>
         $(function () {
            var creditly = Creditly.initialize(
               '.creditly-wrapper .expiration-month-and-year',
               '.creditly-wrapper .credit-card-number',
               '.creditly-wrapper .security-code',
               '.creditly-wrapper .card-type');
         
            $(".creditly-card-form .submit").click(function (e) {
               e.preventDefault();
               var output = creditly.validate();
               if (output) {
                  // Your validated credit card output
                  console.log(output);
               }
            });
         });
      </script>
      <!-- //credit-card -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         $(document).ready(function () {
         
            var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1200,
               easingType: 'linear'
            };
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         
         });
      </script>
      <script>
         $(document).ready(function(){
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		},10);
         	});
         });
      </script>
      <script>

         $("#userRegistrationModal").click( function()
               {
                  $('#userLoginModal').modal('hide')
                  $('#userRegistrationModal').modal('show')
               }
            );
      </script>
   </body>
</html>
