<table class="poscounter" width="100%">
			<thead>
			<tr style="color:#fff;background-color:#34BFA3;">
				<th style="padding:10px;text-align: center;">Product</th>
				<th style="padding:10px;text-align: center;">Price</th>
				<th style="padding:10px;text-align: center;">Qty</th>
				<th style="padding:10px;text-align: center;">Subtotal</th>
				<th style="padding:10px;text-align: center;">Edit</th>
			</tr>
			</thead>
			<tbody style="padding-top:10px;padding-bottom: 10px;" >
			<?php $count=0;$amount=0;
                						if ($cart = $this->cart->contents()){$i=0;
                    					foreach ($cart as $item ) {$count++;
              							$details=$this->posmodal->get_product_by_id($item['id']);
             							?>
										<tr>
											<td>
												<a href=""><?php  echo $details[0]->p_name;?></a>
											</td>
											<td>
												<span class="amount">Rs <span id="itemcost_<?php echo $i;?>"><?php  echo $details[0]->p_sp;?></span></span>
											</td>
											<td>
												<div class="quantity">
													<input type="number" min="0" name="quantity" value="<?php echo $item['qty'];?>" class="form-control m-input qty text" size="4" id="itemno_<?php echo $i;?>" onchange="javascript:item1(<?php echo $i;?>);">
												</div>
											</td>
											<td >Rs
												<span class="amount" id="cost_<?php echo $i;?>"><?php echo  $details[0]->p_sp*$item['qty'];?></span>
											</td>
											<td>
												<a class="remove" href="<?php echo base_url()?>index.php/pos/removecart/<?php echo $item['rowid'];?>"><i class="la la-times-circle"></i></a>
											</td>
										</tr>
										<?php $i++;  $amount=$amount+$details[0]->p_sp*$item['qty'];$pid[] = $item['id'];$pc[] = $details[0]->p_sp*$item['qty'];$qty[]=$item['qty'];}}?>
				<tr style="border-top: solid 1px #c7c7c7;">
					<td></td>
					<td></td>
					<td>Total:</td>
					<td>Rs. <?php echo $amount?></td>
					<input type="hidden" name="pid" value="<?php if(!empty($pid)){echo implode(",",$pid);}?>">
            		<input type="hidden" name="pc" value="<?php if(!empty($pc)){echo implode(",",$pc);}else{$pc=0;}?>">
            		<input type="hidden" name="qty" value="<?php if(!empty($qty)){echo implode(",",$qty);}?>">
            		<input type="hidden" name="amount" value="<?php echo $amount;?>">
				</tr>
			</tbody>
		</table>