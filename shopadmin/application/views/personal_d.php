<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<!--begin::Form-->

	        <?php $attributes = array("name" => "personal_d"); echo form_open("home/update_personal_d", $attributes);?>
			<div class="m-form m-form--label-align-right">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Personal Details
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">	
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">ID:</label>
							<div class="col-lg-6">
								<input type="text" class="form-control m-input" name="a_username" placeholder="<?php echo $a_id;?>" readonly>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Email address:</label>
							<div class="col-lg-6">
								<input type="email" class="form-control m-input" name="a_mail" placeholder="Enter email">
								<span class="m-form__help">We'll never share your email with anyone else</span>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Contact No.:</label>
							<div class="col-lg-6">
								<div class="input-group">
									<input type="number" class="form-control m-input" name="a_contact" placeholder="Enter phone">
									<div class="input-group-append">
										<a href="#" class="btn btn-brand"><i class="la la-phone"></i></a>
									</div>
								</div>
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
		</div></div></div>
