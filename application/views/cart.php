			<div id="main">
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<table class="table shop-cart">
									<tbody>
										<?php $count=0;
                						if ($cart = $this->cart->contents()){$i=0;
                    					foreach ($cart as $item ) {$count++;
              							$details=$this->user->get_product_by_id($item['id']);
             							?>
										<tr class="cart_item">
											<td class="product-remove">
												<a class="remove" href="<?php echo base_url()?>index.php/cart/removecart/<?php echo $item['rowid'];?>">×</a>
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
										<?php $i++;}}?>
									    <?php foreach ($query as $row ) {
									    	$count++;
									              $details=$this->user->get_product_by_id($row->p_id);
									    ?>
										<tr class="cart_item" id="cart_<?php echo $row->id;?>">
											<td class="product-remove">
												<a class="remove" onclick="javascript:remove_cart(<?php echo $row->id;?>);">×</a>
											</td>
											<td class="product-thumbnail">
												<a href="shop-detail.html">
													<img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $details[0]->p_image;?>" alt="">
												</a>
											</td>
											<td class="product-info">
												<a href="shop-detail.html"><?php  echo $details[0]->p_name;?></a>
												<span class="sub-title"><?php  echo $details[0]->p_category;?></span>
												<span class="amount">Rs <span id="itemcost_<?php echo $row->id;?>"><?php  echo $details[0]->p_sp;?></span></span>
											</td>
											<td class="product-quantity">
												<div class="quantity">
													<input type="number" min="0" name="quantity" value="<?php echo $row->item;?>" class="input-text qty text" size="4" id="itemno_<?php echo $row->id;?>" onchange="javascript:item(<?php echo $row->id;?>);">
												</div>
											</td>
											<td class="product-subtotal">Rs
												<span class="amount" id="cost_<?php echo $row->id;?>"><?php echo  $details[0]->p_sp*$row->item;?></span>
											</td>
										</tr>
									<?php }?>
								     <?php if($count=='0')
								        {?>
								        <div class="row" style="margin-bottom: 15px;">
								                <div class="col-md-8 col-xs-12 col-md-offset-2 text-center" style="padding: 15px;padding-top: 100px;" >
								                    <p>Empty Cart</p>
								                    <a class="btn col-xs-12 col-md-4 col-md-offset-4 th-btn text-center pull-center" href="<?php echo base_url(); ?>" style="" > Continue Shopping</a>
								                </div>
								        </div>
								    <?php }?>
										<tr>
											<td colspan="5" class="actions">
												<a class="continue-shopping" href="#"> Continue Shopping</a>
												<a  class="update-cart" href="<?php echo base_url(""); ?>index.php/cart">Update Cart</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-md-4">
								<div class="cart-totals">
									<table>
										<tbody>
											<tr class="cart-subtotal">
												<th>Subtotal</th>
												<td>Rs <?php $amount=0;
								                    if(!empty($cart =$this->cart->contents()))
								                    { foreach ($cart as $item )
								                        {
								                            $details=$this->user->get_product_by_id($item['id']);
								                            $amount=$amount+($details[0]->p_sp*$item['qty']);$pid[] = $item['id'];$pc[] = $details[0]->p_sp;
								                        }
								                    }
								                    elseif(!empty($this->session->userdata('u_id'))){
								                   foreach ($query as $row ) {
								                  $details=$this->user->get_product_by_id($row->p_id);
								                   $amount=$amount+($details[0]->p_sp*$row->item);$pid[] = $row->p_id;$pc[] = $details[0]->p_sp;}}
								                   echo $amount;?>
								                </td>
											</tr>
											<tr class="shipping">
												<th>Shipping</th>
												<td>Free Shipping</td>
											</tr>
											<tr class="order-total">
												<th>Total</th>
												<td><strong>Rs <span id="totalcost"> <?php $amount=0;
								                    if(!empty($cart =$this->cart->contents()))
								                    { foreach ($cart as $item )
								                        {
								                            $details=$this->user->get_product_by_id($item['id']);
								                            $amount=$amount+($details[0]->p_sp*$item['qty']);$pid[] = $item['id'];$pc[] = $details[0]->p_sp;
								                        }
								                    }
								                    elseif(!empty($this->session->userdata('u_id'))){
								                   foreach ($query as $row ) {
								                  $details=$this->user->get_product_by_id($row->p_id);
								                   $amount=$amount+($details[0]->p_sp*$row->item);$pid[] = $row->p_id;$pc[] = $details[0]->p_sp;}}
								                   echo $amount;?><span></strong></td>
											</tr>
										</tbody>
									</table>
									<div class="proceed-to-checkout">
										<a href="<?php echo base_url();?>index.php/Checkout">Proceed to Checkout</a>
									</div>
								</div>
								<!--<div class="coupon-shipping">
									<div class="coupon">
										<form>
											<input type="text" name="coupon_code" class="coupon-code" id="coupon_code" value="" placeholder="Coupon code" />
											<input type="submit" class="apply-coupon" name="apply_coupon" value="Apply Coupon" />
										</form>
									</div>
								</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
<script type="text/javascript">
    function item(id)
    {
           var i=document.getElementById("itemno_"+id).value;
           var c=document.getElementById("itemcost_"+id).innerHTML;
           var t=document.getElementById("totalcost").innerHTML;
           var l=document.getElementById("cost_"+id).innerHTML;
           var r= i*c;
           var s=t-l;
           var item = $("#itemno_"+id).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/itemadd');?>",
                    data: {id: id, item: item},
                    success: function (response) {
                    document.getElementById("cost_"+id).innerHTML=r;
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function item1(id)
    {
           var i=document.getElementById("itemno_"+id).value;
           var id1=document.getElementById("itemid_"+id).innerHTML;
           var c=document.getElementById("itemcost_"+id).innerHTML;
           var t=document.getElementById("totalcost").innerHTML;
           var l=document.getElementById("cost_"+id).innerHTML;
           var r= i*c;
           var s=t-l;
           var item = $("#itemno_"+id).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/updatecart');?>",
                    data: {item: item,id:id1},
                    success: function (response) {
                    document.getElementById("cost_"+id).innerHTML=r;
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function remove_cart(postid)
    {
      //var x = document.getElementById("cartcounter").innerHTML;
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/remove_cart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                       // document.getElementById("cartcounter").innerHTML = --x;
                     $("#cart_"+postid).hide();
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function remove_cart1(postid,id)
    {
      var x = document.getElementById("cartcounter").innerHTML;
      var l=document.getElementById("cost_"+postid).innerHTML;
      var t=document.getElementById("totalcost").innerHTML;
      var s=t-l;
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/removecart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                        document.getElementById("cartcounter").innerHTML = --x;
                        document.getElementById("totalcost").innerHTML=s;
                     $("#cart_"+postid).hide();
                    }
                });
    }
  </script>