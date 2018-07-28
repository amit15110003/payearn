<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					POS Order Details <br> Total Sale : Rs.<?php $i=0; foreach($query as $row){$i=$i+$row->amount;} echo $i;?>
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<?php $attributes = array("name" => "account"); echo form_open_multipart("account/filter", $attributes);?>
					<input type="date" name="s">
					<input type="date" name="e" value="<?php echo date('Y-m-d H:i:s'); ?>">
					<button type="submit">Filter</button>
	                <?php echo form_close(); ?>
					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
					</div>				
				</li>
				<li>
					<?php $attributes = array("name" => "account"); echo form_open_multipart("account/filterd", $attributes);?>
					<input type="date" name="o">
					<button type="submit">Filter</button>
	                <?php echo form_close(); ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<th title="Field #1">Order ID</th>
				<th title="Field #2">Client Name</th>
				<th title="Field #3">Payment</th>
				<th title="Field #4">Amount</th>
				<th title="Field #7">Edit</th>
			</tr>
			</thead>
			<tbody>
			<?php
        foreach( $query as $row)
          {?>
			<tr>
				<td><?php echo $row->order_id; ?></td>
				<td><?php echo $row->u_id;?></td>
				<td><?php echo $row->payment_mode;?></td>
				<td><?php echo $row->amount;?></td>
				<td><a href="<?php echo base_url().'index.php/order/orderview/'.$row->order_id; ?>" class="btn btn-primary">
						<span>
							
							<span>Details</span>
						</span>
					</a></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
</div>		        </div>
			    		    </div>

				
		
				<!-- end:: Body -->
