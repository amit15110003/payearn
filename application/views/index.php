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
				<div class="section mtn-10 mb-3">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12">
								<div class="category-carousel" data-auto-play="false" data-desktop="4" data-laptop="3" data-tablet="3" data-mobile="2">
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Fruits</span> 
													<span class="count"> 5 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_1.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Vegetables</span> 
													<span class="count"> 6 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_2.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Dried</span> 
													<span class="count"> 6 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_3.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Juice</span> 
													<span class="count"> 6 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_4.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Fruits</span> 
													<span class="count"> 5 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_1.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Vegetables</span> 
													<span class="count"> 6 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_2.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Dried</span> 
													<span class="count"> 6 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_3.jpg" alt="" />
											</a>
										</div>	
									</div>
									<div class="category-item">
										<div class="category-item-inner">
											<a href="#">
												<div class="info">
													<span class="name">Juice</span> 
													<span class="count"> 6 items </span>
												</div>
												<img src="<?php echo base_url();?>media/images/category/cate_4.jpg" alt="" />
											</a>
										</div>	
									</div>
								</div>
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
				<div class="section section-bg-4 pt-9 pb-12">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="text-center mb-1 section-pretitle">Hot deal</div>
								<h2 class="text-center section-title mtn-2">Deal of the day</h2>
								<div class="organik-seperator mb-9 center">
									<span class="sep-holder"><span class="sep-line"></span></span>
									<div class="sep-icon"><i class="organik-flower"></i></div>
									<span class="sep-holder"><span class="sep-line"></span></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="mt-6"></div>
								<div class="organik-product-spot type-left">
									<div class="info">
										<div class="title">Healthy Died</div>
										<div class="content">Maecenas tristique gravida, odio et sagi ttis justo endisse ultricies niaie</div>
									</div>
									<div class="icon">
										<div class="icon-inner">
											<i class="organik-carrot"></i>
											<div class="spot">
												<div class="spot-inner"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-12"></div>
								<div class="section-pretitle fz-35 mb-2">Information</div>
								<div class="organik-product-info">
									<div class="item">
										<div class="name">Categories</div>
										<div class="value">Vegetable / Package</div>
									</div>
									<div class="item">
										<div class="name">Weight</div>
										<div class="value">5.8kg/package</div>
									</div>
									<div class="item">
										<div class="name">Expire date</div>
										<div class="value">01/11/2018</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="text-center">
									<img src="<?php echo base_url();?>media/images/deal_of_day.png" alt="" />
								</div>
							</div>
							<div class="col-sm-3">
								<div class="mt-4"></div>
								<div class="organik-product-spot type-right">
									<div class="info">
										<div class="title">Safe From Pesticides</div>
										<div class="content">Maecenas tristique gravida, odio et sagi ttis justo endisse ultricies niaie</div>
									</div>
									<div class="icon">
										<div class="icon-inner">
											<i class="organik-lemon"></i>
											<div class="spot">
												<div class="spot-inner"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-12"></div>
								<div class="organik-product-spot type-right">
									<div class="info">
										<div class="title">Always Fresh</div>
										<div class="content">Maecenas tristique gravida, odio et sagi ttis justo endisse ultricies niaie</div>
									</div>
									<div class="icon">
										<div class="icon-inner">
											<i class="organik-lettuce"></i>
											<div class="spot">
												<div class="spot-inner"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-12"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="text-center mt-6">
									<div class="countdown-wrap mb-4">
										<div class="countdown-content">
											<div class="pl-clock countdown-bar color-primary" data-time="2017/10/10"></div>
										</div>
									</div>
									<a class="organik-btn brown" href="#">Shop Now</a>
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
											I'm absolutely thrilled with the beautiful produce. What a treat to find your box at our door. It means the world to my kids and me. Thank you so much for the delicious fruits and veggies!
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
											I've been receiving a box from you guys for roughly one year now, and absolutely love it. I could not be happier with the fresh produce I receive. Thanks so much for all you do!
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
											Since we have started receiving your produce my children are eating lots more carrots. It is because your carrots taste so much better than the kind we were getting in the grocery store.
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
											I'm absolutely thrilled with the beautiful produce. What a treat to find your box at our door. It means the world to my kids and me. Thank you so much for the delicious fruits and veggies!
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
											I've been receiving a box from you guys for roughly one year now, and absolutely love it. I could not be happier with the fresh produce I receive. Thanks so much for all you do!
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
											Since we have started receiving your produce my children are eating lots more carrots. It is because your carrots taste so much better than the kind we were getting in the grocery store.
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
											I'm absolutely thrilled with the beautiful produce. What a treat to find your box at our door. It means the world to my kids and me. Thank you so much for the delicious fruits and veggies!
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
											I've been receiving a box from you guys for roughly one year now, and absolutely love it. I could not be happier with the fresh produce I receive. Thanks so much for all you do!
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
											Since we have started receiving your produce my children are eating lots more carrots. It is because your carrots taste so much better than the kind we were getting in the grocery store.
										</div>
										<div class="info">
											<div class="author">
												<span class="name">Kenne</span>
												<span class="tagline">Manager, USA</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				