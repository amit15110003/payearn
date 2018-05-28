<!doctype html>
<html lang="en-US">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Pay&eARN</title>

		<link rel="stylesheet" href="<?php echo base_url();?>media/css/bootstrap.min.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/font-awesome.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/ionicons.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/owl.carousel.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/owl.theme.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/settings.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/style.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?php echo base_url();?>media/css/custom.css" type="text/css" media="all"/>
		<link href="http://fonts.googleapis.com/css?family=Great+Vibes%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"/>
	</head>
	<body>
		<div class="noo-spinner">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
		<div id="menu-slideout" class="slideout-menu hidden-md-up">
			<div class="mobile-menu">
				<ul id="mobile-menu" class="menu">
					<li>
						<a href="#">Home</a>
					</li>
					<li class="dropdown">
						<a href="#">Shop</a>
						<i class="sub-menu-toggle fa fa-angle-down"></i>
						<ul class="sub-menu">
							<li><a href="my-account.html">My Account</a></li>
							<li><a href="cart-empty.html">Empty Cart</a></li>
							<li><a href="cart.html">Cart</a></li>
							<li><a href="checkout.html">Check Out</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="shop-list.html">Shop List</a></li>
							<li><a href="shop-detail.html">Single Product</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url();?>shop/contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="site">
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="topbar-text">
								<span>Work time: Monday - Friday: 08AM-06PM</span> 
								<span>Saturday - Sunday: 10AM-06PM</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="topbar-menu">
								<ul class="topbar-menu">
									<li class="dropdown">
										<a href="#">Languages</a>
										<ul class="sub-menu">
											<li><a href="#">English</a></li>
											<li><a href="#">Français</a></li>
										</ul>
									</li>
									<?php if ($this->session->userdata('u_name')){ ?>
								        <li class="dropdown">
								          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
								           <?php echo $result = substr($this->session->userdata('u_name'), 0, 6); ?>
								          </a>
								          <ul class="dropdown-menu">
								            <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
								            <li><a href="<?php echo base_url("index.php/orders"); ?>" > Orders</a></li>
								            <li><a href="<?php echo base_url("index.php/wishlist"); ?>"> Wishlist</a></li>
								            <li><a href="<?php echo base_url("index.php/profile/address"); ?>">Address</a></li>
								            <li><a href="<?php echo base_url("index.php/profile/account_details"); ?>">Account details</a></li>
								            <li><a href="<?php echo base_url("index.php/shop/logout"); ?>">Logout</a></li>
								          </ul>
								        </li>
								        <?php } else{?>
								        <li><a href="<?php echo base_url();?>index.php/login">Login</a></li>
								        <?php }?>
									<!--<li><a href="<?php echo base_url();?>index.php/login">Login</a></li>
									<li><a href="<?php echo base_url();?>index.php/signup">Register</a></li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<header id="header" class="header header-desktop header-2">
				<div class="top-search">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<form>
									<input type="search" class="top-search-input" name="s" placeholder="What are you looking for?" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<a href="<?php echo base_url();?>" id="logo">
								<img class="logo-image" src="<?php echo base_url();?>media/img/logosm.png" alt="Organik Logo" />
							</a>
						</div>
						<div class="col-md-9">
							<div class="header-right">
								<nav class="menu">
									<ul class="main-menu">
										<li>
											<a href="<?php echo base_url();?>">Home</a>
										</li>
										<li>
											<a href="shortcodes.html">Shortcodes</a>
										</li>
										<li class="dropdown mega-menu">
											<a href="#">Shop</a>
											<ul class="sub-menu">
												<li>
													<div class="mega-menu-content">
														<div class="row">
															<div class="col-sm-3">
																<div class="pt-4 pb-4">
																	<h3>Shop Pages</h3>
																	<ul>
																		<li><a href="my-account.html">My Account</a></li>
																		<li><a href="cart-empty.html">Empty Cart</a></li>
																		<li><a href="cart.html">Cart</a></li>
																		<li><a href="checkout.html">Check Out</a></li>
																		<li><a href="wishlist.html">Wishlist</a></li>
																		<li><a href="shop.html">Shop</a></li>
																		<li><a href="shop-list.html">Shop List</a></li>
																		<li><a href="shop-detail.html">Single Product</a></li>
																	</ul>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="pt-4 pb-4">
																	<h3>Fruits</h3>
																	<ul>
																		<li><a href="#">Seville Orange</a></li>
																		<li><a href="#">Aurore Grape</a></li>
																		<li><a href="#">Tieton Cherry</a></li>
																		<li class="new"><a href="#">Tomato Juice</a></li>
																		<li><a href="#">Cauliflower</a></li>
																	</ul>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="pt-4 pb-4">
																	<h3>Featured</h3>
																	<ul>
																		<li><a href="#">Sprouting Broccoli</a></li>
																		<li class="sale"><a href="#">Chinese Cabbage</a></li>
																		<li><a href="#">Cara Orange</a></li>
																		<li><a href="#">Cauliflower</a></li>
																		<li><a href="#">Tomato Juice</a></li>
																	</ul>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="pt-4 pb-4">
																	<h3>Best Seller</h3>
																	<ul>
																		<li><a href="#">Uvina Grape</a></li>
																		<li><a href="#">Seville Orange</a></li>
																		<li><a href="#">Aurore Grape</a></li>
																		<li><a href="#">Tieton Cherry</a></li>
																		<li class="new"><a href="#">Tomato Juice</a></li>
																		<li><a href="#">Sprouting Broccoli</a></li>
																	</ul>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="pt-4 pb-4">
																	<img src="images/megamenu_ads.jpg" alt="" />
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<a href="<?php echo base_url();?>index.php/shop/contact">Contact</a>
										</li>
									</ul>
								</nav>
								<div class="btn-wrap">
									<div class="mini-cart-wrap">
										<div class="mini-cart">
											<div class="mini-cart-icon" data-count="2">
												<i class="ion-bag"></i>
											</div>
										</div>
										<div class="widget-shopping-cart-content">
											<ul class="cart-list">
												<li>
													<a href="#" class="remove">×</a>
													<a href="shop-detail.html">
														<img src="images/shop/thumb/shop_1.jpg" alt="" />
														Orange Juice&nbsp;
													</a>
													<span class="quantity">1 × $12.00</span>
												</li>
												<li>
													<a href="#" class="remove">×</a>
													<a href="shop-detail.html">
														<img src="images/shop/thumb/shop_2.jpg" alt="" />
														Aurore Grape&nbsp;
													</a>
													<span class="quantity">1 × $9.00</span>
												</li>
											</ul>
											<p class="total">
												<strong>Subtotal:</strong> 
												<span class="amount">$21.00</span>
											</p>
											<p class="buttons">
												<a href="cart.html" class="view-cart">View cart</a>
												<a href="checkout.html" class="checkout">Checkout</a>
											</p>
										</div>
									</div>
									<div class="top-search-btn-wrap">
										<div class="top-search-btn">
											<a href="javascript:void(0);">
												<i class="ion-search"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<header class="header header-mobile">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div class="header-left">
								<div id="open-left"><i class="ion-navicon"></i></div>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="header-center">
								<a href="index.html" id="logo-2">
									<img class="logo-image" src="images/logo.png" alt="Organik Logo" />
								</a>
							</div>
						</div>
						<div class="col-xs-2">
							<div class="header-right">
								<div class="mini-cart-wrap">
									<a href="cart.html">
										<div class="mini-cart">
											<div class="mini-cart-icon" data-count="2">
												<i class="ion-bag"></i>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>