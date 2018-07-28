<div class="m-content">
		            <div class="row">
	<div class="col-lg-12">
		<div class="m-portlet">	 
			<div class="m-portlet__body m-portlet__body--no-padding">
				<div class="m-invoice-2">
					<div class="m-invoice__wrapper">
						<div class="m-invoice__head" style="background-image: url(assets/app/media/img/logos/bg-6.html);">	
							<div class="m-invoice__container m-invoice__container--centered">			 		 
								<div class="m-invoice__logo">
										<h1>INVOICE</h1> <br>
										<h6>TRANSACTION ID : <?php echo $txnid;?> </h6>	

									<a href="#">
										<img src="<?php echo base_url(); ?>../media/img/logosm.png">  	
									</a>
								</div> 
								<span class="m-invoice__desc">
									<span>Sadatpur Ext. Pusta area & </span>
                                    <span>E East Delhi, 110094</span>
									<span>+91 75494 90959</span>
								</span>
								<div class="m-invoice__items">
									<div class="m-invoice__item">
										<span class="m-invoice__subtitle">DATE</span>
										<span class="m-invoice__text"><?php 
                          $time = date(' dS M Y', strtotime($o_time));
                        echo $time; ?></span>
									</div>
									<div class="m-invoice__item">
										<span class="m-invoice__subtitle">INVOICE NO.</span>
										<span class="m-invoice__text"><?php echo $order_id;?></span>
									</div>
									<div class="m-invoice__item">
										<span class="m-invoice__subtitle">ORDER ID</span>
										<span class="m-invoice__text"><?php echo $order_id;?></span>
									</div>
									<div class="m-invoice__item">
										<span class="m-invoice__subtitle">PAYMENT MODE</span>
										<span class="m-invoice__text"><?php echo $payment_mode;?></span>
									</div>
								</div><hr>
							</div>					 	
						</div>
						<div class="m-invoice__body m-invoice__body--centered">
							<div class="table-responsive"> 
							    <table class="table">
									<thead> 							 			 
										<tr>
											<th>IMAGE</th>
										 	<th>PRODUCT</th>
										 	<th>QUANTITY</th>
										 	<th>SUB TOTAL</th>
										</tr>
									</thead>	
									<tbody>	
										<?php $i=0; $pid = explode(",", $p_id);
                  foreach($pid as $item) {$details1=$this->admin->get_product_id($item);?>

										<tr>
											<td class="product-thumbnail"><a class="reveal-inline-block"><img src="<?php echo base_url(); ?>../uploads/product/thumb/<?php echo $details1[0]->p_image; ?>" width="100" height="100" alt=""></a></td>
										 	<td><?php  echo $details1[0]->p_name;?></td>
										 	<td><?php $j=0; $pqty = explode(",", $p_qty);
                  foreach($pqty as $item1) {if($i==$j){echo $item1; }$j++;}?></td>
										 	<td class="m--font-danger"><?php $k=0; $psp = explode(",", $p_sp);
                  foreach($psp as $item2) {if($i==$k){echo $item2; }$k++;}?></td>
										</tr>	
																 
									</tbody> 
									<?php $i++;}?>
								</table>
							</div>					 		
						</div>
						<div class="m-invoice__footer">						 
							<div class="m-invoice__table  m-invoice__table--centered table-responsive"> 
								<table class="table">
									<thead> 							 			 
										<tr>
											<th>PAYMENT MODE</th>
											<th>DUE DATE</th>
											<th>TOTAL AMOUNT</th>
										</tr>
									</thead>	
									<tbody>	 
										<tr>
											<td><?php echo $payment_mode;?></td>
											<td><?php 
                          $time = date(' dS M Y', strtotime($o_time));
                        echo $time; ?></td>
											<td class="m--font-danger"><?php echo "<b>"; echo $amount;?> INR</td>
										</tr>										 					 
									</tbody> 
								</table>
							</div>							 				 					
						</div>				 
					</div>	 
				</div>
			</div>
		</div>
	</div>
</div>		


 						 		        </div>