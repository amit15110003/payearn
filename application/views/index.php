<div id="main">
				<div class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12 col-md-12 p-0">
								
									<img src="<?php echo base_url();?>media/images/slider/11.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" />
											
							</div>
						</div>
					</div>
				</div>
				
				<div class="section pt-12 pb-9">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="text-center mb-1 section-pretitle">Discover</div>
								<h2 class="text-center section-title mtn-2">Our products</h2>
								<div class="organik-seperator center">
									<span class="sep-holder"><span class="sep-line"></span></span>
									<div class="sep-icon"><i class="organik-flower"></i></div>
									<span class="sep-holder"><span class="sep-line"></span></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="product-grid masonry-grid-post">
								<?php foreach ($query as $row ) {
				$p_category=str_replace(' ', '-', $row->p_category);
				$p_name=str_replace(' ', '-', $row->p_name);?>
								<div class="col-md-3 col-sm-6 product-item masonry-item text-center juice">
									<div class="product-thumb">
											<a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>">
												<img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $row->p_image;?>" alt="" />
											</a>
											<div class="product-action">
												<span class="add-to-cart">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
												</span>
												<span class="wishlist">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
												</span>
											</div>
										</div>
										<div class="product-info">
											<a href="shop-detail.html">
												<h2 class="title"><?php echo $p_name;?></h2>
												<span class="price">
													<del><?php echo $row->p_cp;?></del> 
													<ins><?php echo $row->p_sp;?></ins>
												</span>
											</a>
										</div>
								</div>
       							<?php }?>
							</div>
							<div class="loadmore-contain">
								<a class="organik-btn small" href="#"> Load more </a>
							</div>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4 p-0" >
								<img src="<?php echo base_url();?>media/images/spices.jpg" alt="" />
							</div>
							<div class="col-sm-4 p-0" >
								<img src="<?php echo base_url();?>media/images/boost.jpg" alt="" />
							</div>
							<div class="col-sm-4 p-0">
								<img src="<?php echo base_url();?>media/images/aata.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>
				<div class="section pt-9 pb-8">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="organik-featured-product" data-bg-color="#e7f2d8" data-bg-image="<?php echo base_url();?>media/images/featured_product01.png">
									<div class="organik-featured-product-box">
										<h3 class="title">Fresh products</h3>
										<h1 class="subtitle">More offers for May</h1>
										<a class="organik-btn small" href="#">Shop now</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="organik-product-column">
									<h2 class="title">Top Rated</h2>
									<div class="product-slider">
										<div class="slider">
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_9.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Tomato</a></span>
													<div class="product-price">$20.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_5.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Carrot</a></span>
													<div class="product-price">$9.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_10.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Carrot Juice</a></span>
													<div class="product-price">$35.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="slider">
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_8.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Tieton Cherry</a></span>
													<div class="product-price">$9.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_11.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Beetroot Juice</a></span>
													<div class="product-price">$35.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_12.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Seville Orange</a></span>
													<div class="product-price">$3.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="slider">
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_13.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Tropical Twist</a></span>
													<div class="product-price">$20.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_14.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Banana Marshmallow</a></span>
													<div class="product-price">$12.00</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_15.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Almonds</a></span>
													<div class="product-price">
														<del>$15.00</del> 
														<ins>$12.00</ins>
													</div>
													<div class="product-rate">
														<div class="star-rating">
															<span style="width:100%;"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="organik-product-column">
									<h2 class="title">Best Seller</h2>
									<div class="product-slider">
										<div class="slider">
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_14.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Banana Marshmallow</a></span>
													<div class="product-price">$12.00</div>
													<div class="product-categories">
														<a href="#">Dried</a>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_5.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Cucumber</a></span>
													<div class="product-price">$18.00</div>
													<div class="product-categories">
														<a href="#">Vegetables</a>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_17.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Corn Flour</a></span>
													<div class="product-price">$15.00</div>
													<div class="product-categories">
														<a href="#">Dried</a>
													</div>
												</div>
											</div>
										</div>
										<div class="slider">
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_11.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Beetroot Juice</a></span>
													<div class="product-price">$35.00</div>
													<div class="product-categories">
														<a href="#">Juice</a>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_12.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Seville Orange</a></span>
													<div class="product-price">$3.00</div>
													<div class="product-categories">
														<a href="#">Fruits</a>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_9.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Tomato</a></span>
													<div class="product-price">$20.00</div>
													<div class="product-categories">
														<a href="#">Vegetables</a>
													</div>
												</div>
											</div>
										</div>
										<div class="slider">
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_2.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Aurore Grape</a></span>
													<div class="product-price">$9.00</div>
													<div class="product-categories">
														<a href="#">Fruits</a>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_2.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Sienevyi Pomegranate</a></span>
													<div class="product-price">$3.00</div>
													<div class="product-categories">
														<a href="#">Fruits</a>
													</div>
												</div>
											</div>
											<div class="product-item">
												<div class="product-thumb">
													<img src="<?php echo base_url();?>media/images/shop/shop_1.jpg" alt="" />
												</div>
												<div class="product-info">
													<span class="product-title"><a href="shop-detail.html">Orange Juice</a></span>
													<div class="product-price">
														<del>$15.00</del> 
														<ins>$12.00</ins>
													</div>
													<div class="product-categories">
														<a href="#">Juice</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section section-bg-5 section-cover pt-11 pb-11">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="text-center mb-1 section-pretitle">We love our clients</div>
								<div class="organik-seperator mb-4 center">
									<span class="sep-holder"><span class="sep-line"></span></span>
									<div class="sep-icon"><i class="organik-flower"></i></div>
									<span class="sep-holder"><span class="sep-line"></span></span>
								</div>
								<div class="testimonial-carousel organik-testimonial style-1" data-auto-play="true" data-desktop="3" data-laptop="3" data-tablet="2" data-mobile="1">
									<div class="testi-item">
										<div class="text"> 
											I am a continuous buyer of products from Pay&earn, and quite frankly this online store has always lived up to my expectations. 
											They have always delivered the orders on time and the payment portal is easy and secure.
										</div>
										<div class="info">
											<div class="author">
												<span class="name">Leslie</span>
												<span class="tagline">Accountant, USA</span>
											</div>
										</div>
									</div>
									<div class="testi-item">
										<div class="text"> 
											A great friendly service delivering market quality produce to your door. It’s so hard to find time to get to the market and keep a steady supply of grocery items for my kids lunchboxes and snacks. The prices are consistent with the prices I normally pay at Local Markets.
										</div>
										<div class="info">
											<div class="author">
												<span class="name">Andrea</span>
												<span class="tagline">Teacher, USA</span>
											</div>
										</div>
									</div>
									<div class="testi-item">
										<div class="text"> 
											I’ve been using Pay&earn for a couple of months now & absolutely rave about it. Incredible service, always in delivery window, communication clear if substitutes not available, great customer service via email & the best bit - really great groceries from all your favourite stores.
										</div>
										<div class="info">
											<div class="author">
												<span class="name">Kenne</span>
												<span class="tagline">Manager, USA</span>
											</div>
										</div>
									</div>
									<div class="testi-item">
										<div class="text"> 
											Great service, huge range of products! 
											Love the convenience. 
											Nice knowing I’m supporting local small businesses. 
											Highly recommend trying 
											Best thing I’ve done swapping from a larger market to your online grocery store.
										</div>
										<div class="info">
											<div class="author">
												<span class="name">Leslie</span>
												<span class="tagline">Accountant, USA</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				