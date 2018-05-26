<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Update Product
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_user"); echo form_open_multipart("user/update_user/$u_id", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	
						<input type="hidden" name="u_id" value="<?php echo $u_id;?>">
			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">User Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="u_name" placeholder="" value="<?php echo $u_name;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Contact:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="u_contact" placeholder="" value="<?php echo $u_contact;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Address:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="u_add" placeholder="" value="<?php echo $u_add;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Email:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="u_mail" placeholder="" value="<?php echo $u_mail;?>">
								</div></div>
								
							
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Status:</label>
								<div class="col-lg-2">
									<select class="form-control m-input" name="u_status" id="exampleSelect1">
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
									<button type="submit" class="btn btn-primary" value="Upload">Submit</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
				<!--end::Form-->
			</div>
		</div>
	</div>

<!--end:: Widgets/User Progress -->  </div></div></div>