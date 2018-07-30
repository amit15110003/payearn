			<div id="main">
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="wishlist-wrap">
									<table class="table shop-cart">
										<thead>
											<tr class="cart_item">
												<td class="product-remove">&nbsp;</td>
												<td class="product-thumbnail">&nbsp;</td>
												<td class="product-info">Product Name</td>
												<td class="product-subtotal">Unit Price</td>
												<td class="product-stock">Stock Status</td>
												<td>&nbsp;</td>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($query as $row) {$details=$this->user->get_product_by_id($row->p_id);?>
											<tr class="cart_item">
												<td class="product-remove">
													<a href="#" class="remove">×</a>
												</td>
												<td class="product-thumbnail">
													<a href="shop-detail.html">
														<img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $details[0]->p_image;?>" alt="">
													</a>
												</td>
												<td class="product-info">
													<a href="shop-detail.html"><?php  echo $details[0]->p_name;?></a>
													<span class="sub-title"><?php  echo $details[0]->p_category;?></span>
													<span class="amount">Rs. <?php  echo $details[0]->p_sp;?></span>
												</td>
												<td class="product-subtotal">
													<span class="amount">Rs. <?php  echo $details[0]->p_sp;?></span>
												</td>
												<td class="product-stock">
													<span class="color">In Stock</span>
												</td>
												<td>
													<a class="organik-btn small" href="#"> Add to cart </a>
												</td>
											</tr>
										<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>