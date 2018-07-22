<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Members
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
					Active
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
					Disabled
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
					<i class="m-menu__link-icon fa fa-user-plus"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="m_widget4_tab1_content">
				<div class="m-widget4 m-widget4--progress">
					<?php foreach ($query as $member) { if($member->status=="1") {?>
						<div class="m-widget4__item">
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								<?php echo $member->a_username;?>
								</span><br> 
								<span class="m-widget4__sub">
								<?php echo $member->a_design;?> 
								</span>							 		 
							</div>
							<div class="m-widget4__progress">
							</div>
							<div class="m-widget4__ext">
								<a class="btn btn-danger" href="<?php echo base_url();?>/index.php/home/toggle_member/<?php echo $member->a_id; ?>/<?php echo $member->status; ?>">Disable</a>
							</div>
						</div>
					<?php }}?>					 
				</div>            
			</div>
			<div class="tab-pane" id="m_widget4_tab2_content">
				<div class="m-widget4 m-widget4--progress">
					<?php foreach ($query as $member) { if($member->status!="1") {?>
						<div class="m-widget4__item">
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								<?php echo $member->a_username;?>
								</span><br> 
								<span class="m-widget4__sub">
								<?php echo $member->a_design;?> 
								</span>							 		 
							</div>
							<div class="m-widget4__progress">
							</div>
							<div class="m-widget4__ext">
								<a class="btn btn-info" href="<?php echo base_url();?>/index.php/home/toggle_member/<?php echo $member->a_id; ?>/<?php echo $member->status; ?>">Activate</a>
							</div>
						</div>
					<?php }}?>					 
				</div> 						 
			</div>
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_member"); echo form_open_multipart("home/add_member", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="a_username" placeholder="Member name">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Mail:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="a_mail" id="exampleTextarea" >
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Contact:</label>
								<div class="col-lg-6">
									<input type="number" class="form-control m-input" name="a_contact" id="exampleTextarea">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Password:</label>
								<div class="col-lg-6">
									<input type="password" class="form-control m-input" name="a_pass" id="password" >
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Designation</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="a_design" id="exampleSelect1">
										<option value="Admin">Admin</option>
										<option value="Vendor">Vendor</option>
										<option value="Billing">Billing</option>
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Warehouse</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="a_wid" id="exampleSelect1">
										<?php foreach ($query1 as $member) { if($member->w_status=="1") {?>
										<option value="<?php echo $member->w_id;?>"><?php echo $member->w_name;?> </option>
										<?php }}?>	
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Status:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="a_status" id="exampleSelect1">
										<option value="1">Active</option>
										<option value="0">Disabled</option>
									</select>
								</div>
							</div>
						</div>
		            </div>
		            <div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-6">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
				<!--end::Form-->


				<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<th title="Field #1">Member ID</th>
				<th title="Field #2">User Name</th>
				<th title="Field #4">Contact</th>
				<th title="Field #6">Email</th>
				<th title="Field #7">Edit</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $row) {?>
			<tr>
				<td><?php echo $row->a_id;?></td>
				<td><?php echo $row->a_username;?></td>
				<td><?php echo $row->a_contact;?></td>
				<td><?php echo $row->a_mail;?></td>
				<td><a href="<?php echo base_url();?>index.php/home/members/member_id/<?php echo $row->a_id;?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							
							<span>Update</span>
						</span>
					</a></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/User Progress -->  </div></div>