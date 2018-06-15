			<div id="main">
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="single-product">
									<div class="col-md-6">
										<div class="image-gallery">
											<div class="image-gallery-inner">
												<div>
													<div class="image-thumb">
														<a href="<?php echo base_url();?>uploads/product/<?php echo $p_image;?>" data-rel="prettyPhoto[gallery]">
															<img src="<?php echo base_url();?>uploads/product/<?php echo $p_image;?>" alt="" />
														</a>
													</div>
												</div>
											</div>
										</div>
										<!--<div class="image-gallery-nav">
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $p_image;?>" alt=""/>
												</div>
											</div>
										</div>-->
									</div>
									<div class="col-md-6">
										<div class="summary">
											<h1 class="product-title"><?php echo $p_name;?></h1>
											<div class="product-price">
												<del>Rs <?php echo $p_cp;?></del>
												<ins>Rs <?php echo $p_sp;?></ins>
											</div>
											<div class="mb-3">
												<p><?php echo $p_desc;?></p>
											</div>
											<div class="cart">
												<div class="quantity-chooser">
													<div class="quantity">
														<span class="qty-minus" data-min="1"><i class="ion-ios-minus-outline"></i></span>
														<input type="text" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" id="itemqty1">
														<span class="qty-plus" data-max=""><i class="ion-ios-plus-outline"></i></span>
													</div>
												</div><?php if(!empty($this->session->userdata('u_id'))){?>
												<button type="submit" class="single-add-to-cart" onclick="javascript:cartadd(<?php echo $p_id;?>);">ADD TO CART</button>
			                					<?php }else{?>
												<button type="submit" class="single-add-to-cart" onclick="javascript:cartadd1(<?php echo $p_id;?>);">ADD TO CART</button>
			                					<?php }?>
											</div>
											<div class="product-tool">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> Browse Wishlist </a>
											</div>
											<div class="product-meta">
												<table>
													<tbody>
														<tr>
															<td class="label">Category</td>
															<td><a href="#"><?php echo $p_category;?></a></td>
														</tr>
														<tr>
															<td class="label">Share</td>
															<td class="share">
																<a target="_blank" href="#"><i class="fa fa-facebook"></i></a> 
																<a target="_blank" href="#"><i class="fa fa-twitter"></i></a> 
																<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="commerce-tabs tabs classic">
											<ul class="nav nav-tabs tabs">
												<li class="active">
													<a data-toggle="tab" href="#tab-description" aria-expanded="true">Description</a>
												</li>
												<li class="">
													<a data-toggle="tab" href="#tab-reviews" aria-expanded="false">Reviews</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade active in" id="tab-description">
													<p>
														<?php echo $p_adddesc;?>
													</p>
												</div>
											</div>
										</div>
										<div class="related">
											<div class="related-title">
												<div class="text-center mb-1 section-pretitle fz-34">Related</div>
												<h2 class="text-center section-title mtn-2 fz-24">Products</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<script type="text/javascript">
      function cartadd(id)
      { 
        var qty = $("#itemqty1").val();
        alert(qty);
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd');?>",
                      data:'&id='+id+'&qty='+qty,
                      success: function (response) {
                        location.reload();
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function cartadd1(id)
      { 
        var x = document.getElementById("cartcounter").innerHTML;
        var qty = $("#itemqty1").val();
        alert(qty);
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd1');?>",
                      data:'&id='+id+'&qty='+qty,
                      success: function (response) {
                        document.getElementById("cartcounter").innerHTML = ++x;
                       // document.getElementById("cartcounter1").innerHTML = x;
                    }
                  });
      }
      </script>