<div id="main">
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-md-push-3">
								<div class="shop-filter">
									<div class="col-md-6">
										<p class="result-count"> Showing 1–12 of 23 results</p>
									</div>
									<div class="col-md-6">
										<div class="shop-filter-right">
											<form class="commerce-ordering">
												<select name="orderby" class="orderby">
													<option value="">Sort by popularity</option>
													<option value="">Sort by average rating</option>
													<option value="" selected="selected">Sort by newness</option>
													<option value="">Sort by price: low to high</option>
													<option value="">Sort by price: high to low</option>
												</select>
											</form>
										</div>
									</div>
								</div>
								<div class="category-carousel-2 mb-3" data-auto-play="true" data-desktop="3" data-laptop="3" data-tablet="2" data-mobile="1">
									<div class="cat-item">
										<div class="cats-wrap" data-bg-color="#f8c9c2">
											<a href="#">
												<img src="images/category/cate_7.png" alt="" />
												<h2 class="category-title"> 
													Dried <mark class="count">(6)</mark>
												</h2>
											</a>
										</div>
									</div>
									<div class="cat-item">
										<div class="cats-wrap" data-bg-color="#ebd3c3">
											<a href="#">
												<img src="images/category/cate_5.png" alt="" />
												<h2 class="category-title"> 
													Fruiy <mark class="count">(5)</mark>
												</h2>
											</a>
										</div>
									</div>
									<div class="cat-item">
										<div class="cats-wrap" data-bg-color="#c6e6f6">
											<a href="#">
												<img src="images/category/cate_9.png" alt="" />
												<h2 class="category-title"> 
													Juice <mark class="count">(6)</mark>
												</h2>
											</a>
										</div>
									</div>
									<div class="cat-item">
										<div class="cats-wrap" data-bg-color="#e0d1a1">
											<a href="#">
												<img src="images/category/cate_6.png" alt="" />
												<h2 class="category-title"> 
													Vegetables <mark class="count">(6)</mark>
												</h2>
											</a>
										</div>
									</div>
								</div>
								<div class="product-grid">
									<?php foreach ($query as $row) {
				$p_category=str_replace(' ', '-', $row->p_category);
				$p_name=str_replace(' ', '-', $row->p_name);?>
									<div class="col-md-4 col-sm-6 product-item text-center mb-3">
										<div class="product-thumb">
											<a href="shop-detail.html">
												<div class="badges">
													<span class="hot">Hot</span>
													<span class="onsale">Sale!</span>
												</div>
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
								<div class="pagination"> 
									<a class="prev page-numbers" href="#">Prev</a>
									<a class="page-numbers" href="#">1</a>
									<span class="page-numbers current">2</span> 
									<a class="page-numbers" href="#">3</a> 
									<a class="next page-numbers" href="#">Next</a>
								</div>
							</div>
							<div class="col-md-3 col-md-pull-9">
								<div class="sidebar">
									<div class="widget widget-product-search">
										<form class="form-search">
											<input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
											<input type="submit" value="Search" />
										</form>
									</div>
									<div class="widget widget-product-categories">
										<h3 class="widget-title">Product Categories</h3>
										<ul class="product-categories">
											<li><a href="#">Dried</a> <span class="count">6</span></li>
											<li><a href="#">Fruits</a> <span class="count">5</span></li>
											<li><a href="#">Juice</a> <span class="count">6</span></li>
											<li><a href="#">Vegetables</a> <span class="count">6</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>