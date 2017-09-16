<!--
Author: Marvin Tunji-ola
-->
<?php
  include_once('/php/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Store | Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store, Computers, kitchen electronics, Household Electronic, Mobile Phone" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	  <link href="css/spinners.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
  <!-- //for bootstrap working -->
  <script type="text/javascript" src="js/index.js"></script>
  <!-- cart modal -->
  <script type="text/javascript">
  $"(cart_table_body").ready(function() {

  alert("Hello!");
});
  </script>

  <div class="modal fade" id="cart_modal" tabindex="-1" role="dialog" aria-labelledby="myModal88"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;</button>

        </div>
        <div class="modal-body modal-body-sub">
          <div class="row">
            <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
              <div class="sap_tabs">
                <div id="horizontalTab2" style="display: block; width: 100%; margin: 0px;">
                  <h4 class="modal-title" id="myModal88Label">Your Cart</h4>
                    <div class="facts">
                      <div class="table-responsive">
                          <table id="cartTable" class="table table-hover table-striped">
                              <thead>
                                  <tr>
                                      <th>Product Name</th>
                                      <th>Quantity</th>
                                      <th>Price</th>
                                      <th>Total</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody class="cart_table_body">

                              </tbody>
                          </table>
                      </div>


                  </div>


                  <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                    <div class="facts cart_table ">

                    </div>
                  </div>
                </div>
              </div>
              <div  class="hidden-xs"></div>
            </div>
            <div class="col-md-4 modal_body_right modal_body_right1">
              <div class="row text-right sign-with">
                <h5 class="btn success">Postal Address</h5>
                <div class="col-md-12">
                  <!-- <ul class="social">
                    <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                    <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                    <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                    <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                  </ul> -->

                  <form class="form-horizontal form-material" action="payment.php" method="post" id="product_form" enctype="multipart/form-data">
                      <div class="form-group">
                          <!-- <label class="col-sm-12">Choose State</label> -->
                          <div class="col-sm-12">
                              <select class="form-control form-control-line " name = "state" required>
                                  <option value="">Choose Postal State</option>
                                  <option value="lagos">Lagos</option>
                                  <option value="abuja">Abuja</option>
                                  <option value="jos">Jos</option>
                                  <option value="port_harcourt">Port Harcourt</option>

                              </select>
                          </div>
                      </div>

                      <div class="form-group">

                          <!-- <label class="col-md-12"></label> -->
                          <div class="col-md-12">
                            <hr />
                              <textarea rows="5" name="description" placeholder="Enter Postal Address"  class="form-control form-control-line" required></textarea>
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-sm-12">
                              <hr />
                              <input type="submit" value="Proceed to Payment" id="payment" class="btn btn-success">
                          </div>
                      </div>
                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- //cart modal  -->

  	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModal88Label">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>
                  <!-- Sign In-->

									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
											<div class="register">
												<form action="" id="sign-in" method="post">
													<input name="email" placeholder="Email Address" type="text" required="">
													<input name="password" placeholder="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit"  value="Sign in"/>
													</div>
												</form>
											</div>
										</div>
									</div>

                                    <!-- Register New Account-->
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="" id="sign-up" method="post">
													<input placeholder="Name" name="name" type="text" required="">
													<input placeholder="Email Address" name="email" type="email" required="">
													<input placeholder="Password" name="password" type="password" required="">
													<input placeholder="Confirm Password" name="confirm_password" type="password" required="">
													<div class="sign-up">
													<input type="submit" value="Create Account" />
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	if ($session_status == 0){
	?>

	<script>
		$('#myModal88').modal('show');
	</script>
	<?php
	}
	?>
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="nav nav-bar">
			<div class="dropdown">
				<a class="dropdown-toggle btn"  data-toggle="dropdown">
				<span class="glyphicon glyphicon-user " aria-hidden="true"></span>
				<span ></span>
				<span class="caret"></span></a>
				<ul class=" dropdown-menu sign_out">
					<li id = "sign_out"><a href="/php/sign_out.php">
              <?php
                if($session_status == 1){
                  echo "Sign-out";
                }else if($session_status == 0){
                  echo "Sign-in";
                }

              ?>
            </a></li>

				</ul>
				</div>


			</div>
			<div class="w3l_logo cener-block" >
				<h1><a href="index.php">Computer Store<span>Your Store. Your Device.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1 cart_div">
					<button class="w3view-cart view_cart"  name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><br />
            <sup id="cart_count" style="color:#fff;"><?php if(isset($_SESSION['cart_q'])){echo $_SESSION['cart_q']."";}else{echo "0Items";}  ?></sup>
          </button>

			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.html" class="act">Home</a></li>
						<!-- Mega Menu -->
						<li>
							<a href="#myTabContent" >Products <b class="caret"></b></a>
							<!-- <ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="">
										<ul class="col-sm-6 multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="#myTabContent">Mobile Phones<span>New</span></a></li>
											<li><a href="#">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="">
										<ul class="col-sm-6 multi-column-dropdown">
											<h6>Computers</h6>
											<li><a href="">Laptop<span>New</span></a></li>
											<li><a href="">Desktop<span>New</span></a></li>
											<li><a href="">Wearables<span>New</span>	</a></li>
										</ul>
									</div>
								</div>
							</ul> -->
						</li>
						<li><a href="">About Us</a></li>
						<li><a href="">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner2">
	  <span>Computer Store, <br>Special Offers</span>

		</div>
	</div>
	<!-- //banner -->
	<!-- content-->


				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
    			<ul id="myTab" class="nav nav-tabs center-block " role="tablist">
            <li role="presentation" class="active"><a href="#computer" role="tab" id="computer-tab" data-toggle="tab" aria-controls="computer">Computers</a></li>
            <li role="presentation" ><a href="#mobile" id="mobile-tab" role="tab" data-toggle="tab" aria-controls="mobile">Mobiles</a></li>
						<li role="presentation"><a href="#accessory" role="tab" id="accessory-tab" data-toggle="tab" aria-controls="accessory">Accessories</a></li>
					</ul>
        </div>
	      <div id="myTabContent" class="tab-content">
          <!--Computer Tab Content -->
          <div role="tabpanel" class="tab-pane fade active in" id="computer" aria-labelledby="computer-tab">

			      <div class="agile_ecommerce_tabs" id ="computers" >


            </div>

  				<!-- Preloader -->
      		<div class="preloader">
          	 <div class="cssload-speeding-wheel"></div>
      			</div>
  				<div class="agile_ecommerce_tabs">

                    <button id="load_computers" class="btn btn-primary center-block">Load More</button>
  				</div>
        </div>



          <!-- //Computer Tab Content -->

          <!--Mobile Tab Content -->
            <div role="tabpanel" class="tab-pane fade " id="mobile" aria-labelledby="mobile-tab">
              <div class="agile_ecommerce_tabs" id ="mobiles" >


              </div>
              <!-- Preloader -->
              <div class="preloader">
                <div class="cssload-speeding-wheel"></div>
              </div>
              <div class="agile_ecommerce_tabs">
                <button id="load_mobiles" class="btn btn-primary center-block">Load More</button>
              </div>
            </div>
            <!--//Mobile Tab Content -->
            <!--Accessory Tab Content -->
  			<div role="tabpanel" class="tab-pane fade " id="accessory" aria-labelledby="accessory-tab">
  				<div class="agile_ecommerce_tabs" id ="accessories" >


              	</div>
  							<!-- Preloader -->
      			<div class="preloader">
          		<div class="cssload-speeding-wheel"></div>
      			</div>
  				<div class="agile_ecommerce_tabs">
                    <button id="load_accessories" class="btn btn-primary center-block">Load More</button>
  				</div>
              </div>
            <!--Accessory Tab Content -->
        </div>



	<!-- //content -->


    </body>
    </html>
