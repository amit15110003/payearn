<!--<?php $count=0;
                						if ($cart = $this->cart->contents()){$i=0;
                    					foreach ($cart as $item ) {$count++;
              							$details=$this->posmodal->get_product_by_id($item['id']);
             							?>
										<tr class="cart_item">
											<td class="product-remove">
												<a class="remove" onclick="javascript:remove_cart(<?php echo $item['id'];?>);">×</a>
												<span class="hidden" id="itemid_<?php echo $i;?>"><?php echo $item['rowid'];?></span>
											</td>
											<td class="product-thumbnail">
												<a href="shop-detail.html">
													<img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $details[0]->p_image;?>" alt="">
												</a>
											</td>
											<td class="product-info">
												<a href="shop-detail.html"><?php  echo $details[0]->p_name;?></a>
												<span class="sub-title"><?php  echo $details[0]->p_category;?></span>
												<span class="amount">Rs <span id="itemcost_<?php echo $i;?>"><?php  echo $details[0]->p_sp;?></span></span>
											</td>
											<td class="product-quantity">
												<div class="quantity">
													<input type="number" min="0" name="quantity" value="<?php echo $item['qty'];?>" class="input-text qty text" size="4" id="itemno_<?php echo $i;?>" onchange="javascript:item1(<?php echo $i;?>);">
												</div>
											</td>
											<td class="product-subtotal">Rs
												<span class="amount" id="cost_<?php echo $i;?>"><?php echo  $details[0]->p_sp*$item['qty'];?></span>
											</td>
										</tr>
										<?php $i++;}}?>-->