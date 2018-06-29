<div id="main"><?php $amount=0;
                    if(!empty($cart =$this->cart->contents()))
                    { foreach ($cart as $item )
                        {
                            $details=$this->user->get_product_by_id($item['id']);
                            $amount=$amount+($details[0]->p_sp*$item['qty']);$pid[] = $item['id'];$pc[] = $details[0]->p_sp;
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_by_id($row->p_id);
                   $amount=$amount+($details[0]->p_sp*$row->item);$pid[] = $row->productid;$pc[] = $details[0]->p_sp;}}
                   ?>
				<div class="section section-checkout pt-7 pb-7">
					<div class="container">
						<div class="row">
								<?php $attributes = array("name" => "payment");
            echo form_open("payment", $attributes);?>
							<div class="col-md-7">
								<h3>Billing details</h3>
									<div class="row">
										<div class="col-md-6">
											<label>First name <span class="required">*</span></label>
											<div class="form-wrap">
												<input type="text" name="your-firstname" value="" size="40" />
											</div>
										</div>
										<div class="col-md-6">
											<label>Last name <span class="required">*</span></label>
											<div class="form-wrap">
												<input type="text" name="your-lastname" value="" size="40" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>Company name</label>
											<div class="form-wrap">
												<input type="text" name="your-company-name" value="" size="40" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>Country <span class="required">*</span></label>
											<div class="form-wrap">
												<input type="text" name="your-company-name" value="India" size="40"  readonly />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>Address <span class="required">*</span></label>
											<div class="form-wrap">
												<input type="text" name="your-address" value="" size="40" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>Postcode / ZIP</label>
											<div class="form-wrap">
												<input type="text" name="your-postal" value="" size="40" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>Town/City <span class="required">*</span></label>
											<div class="form-wrap">
												<input type="text" name="your-postal" value="" size="40" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Phone</label>
											<div class="form-wrap">
												<input type="text" name="your-phone" value="" size="40" />
											</div>
										</div>
										<div class="col-md-6">
											<label>Email <span class="required">*</span></label>
											<div class="form-wrap">
												<input type="email" name="your-email" value="" size="40" />
											</div>
										</div>
									</div>
							</div>
							<div class="col-md-5">
								<h3 class="mt-3">Your order</h3>
								<div class="order-review">
									<table class="checkout-review-order-table">
										<tfoot>
											<tr>
												<th>Subtotal</th>
												<td>Rs <?php echo $amount; ?></td>
											</tr>
											<tr>
												<th>Tax</th>
												<td>Rs 0</td>
											</tr>
											<tr class="order-total">
												<th>Total</th>
												<td><strong>Rs <?php echo $amount; ?></strong></td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="col-md-12">
								<div class="checkout-payment">
									<ul class="payment-method">
										<li>
											<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
											<span>Cash on delivery</span>
										</li>
										<li>
											<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
											PayPal <img src="images/payment.jpg" alt="">
										</li>
									</ul>
									<div class="text-right text-center-sm">
										<button class="organik-btn mt-6" type="submit"> Place Order </a>
									</div>
								</div>
							</div>
							</div>
         					<?php echo form_close();?>
						</div>
					</div>
				</div>
			</div>
<script>
  window.onload = function() {
    var d = new Date().getTime();
    document.getElementById("tid").value = d;
  };
</script>