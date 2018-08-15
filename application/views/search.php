<div id="main">
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="product-grid">
									<?php foreach ($query as $row) {
				$p_category=str_replace(' ', '-', $row->p_category);
				$p_name=str_replace(' ', '-', $row->p_name);?>
									<div class="col-md-3 col-sm-6 product-item text-center mb-3">
										<div class="product-thumb">
											<a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>">
												<img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $row->p_image;?>" alt="" />
											</a>
											<div class="product-action">
												<span class="add-to-cart">
													<input type="hidden" name="quantity" value="1" id="itemqty1">
													<?php if(!empty($this->session->userdata('u_id'))){?>
													<a onclick="javascript:cartadd(<?php echo $row->p_id;?>);" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
			                					<?php }else{?>
													<a onclick="javascript:cartadd1(<?php echo $row->p_id;?>);" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
			                					<?php }?>
												</span>
												<span class="wishlist">
													<?php  if(!empty($this->session->userdata('u_id')))  {if(!empty($this->user->check_wish($this->session->userdata('u_id'),$row->p_id))) {?>
													<a  onclick="javascript:wishlist(<?php echo $row->p_id;?>);" id="wish" data-toggle="tooltip" data-placement="top" title="Added to wishlist"></a> 
												   <?php }else{?>
			            							<a  onclick="javascript:wishlist(<?php echo $row->p_id;?>);" id="wish" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a> 
			          								<?php }}else{?>
			          									<a  href="<?php echo base_url();?>index.php/login" id="wish" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a><?php }?>
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
									<?php echo $links; ?>
									<!--<a class="prev page-numbers" href="#">Prev</a>
									<a class="page-numbers" href="#">1</a>
									<span class="page-numbers current">2</span> 
									<a class="page-numbers" href="#">3</a> 
									<a class="next page-numbers" href="#">Next</a>-->
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