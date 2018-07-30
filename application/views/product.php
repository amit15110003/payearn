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
												<?php if(!empty($this->user->check_wish($this->session->userdata('u_id'),$p_id))) {?>
										           	<a onclick="javascript:wishlist(<?php echo $p_id;?>);" id="wish"><span id="wishtext">Added To Wishlist</span></a>
										            <?php }else{?>
			            							<a onclick="javascript:wishlist(<?php echo $p_id;?>);" id="wish"><span id="wishtext">Add To Wishlist</span></a>
			          								<?php } ?>
											</div><br>
											<div>
												<h6>Description: </h6> <p>
														<?php echo $p_adddesc;?>
													</p>
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
									<div class="col-md-12"><br><br>
										
										<div class="related">
											<div class="related-title"><br>
												<div class="text-center mb-1 section-pretitle fz-34">Related</div>
												<h2 class="text-center section-title mtn-2 fz-24">Products</h2>
											</div>
											<div class="organik-seperator center">
									<span class="sep-holder"><span class="sep-line"></span></span>
									<div class="sep-icon"><i class="organik-flower"></i></div>
									<span class="sep-holder"><span class="sep-line"></span></span><br>
								</div><br><br>
											<div class="product-grid masonry-grid-post">
								<?php foreach ($query2 as $row ) {
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
      <script type="text/javascript">
      function wishlist(id)
      {
              $.ajax({
                      type: "POST",
                      url: "<?php echo site_url('profile/wishlist');?>",
                      data:"id="+id,
                    success: function (response) {
                     location.reload();
                    }
                  });
      }
      </script>