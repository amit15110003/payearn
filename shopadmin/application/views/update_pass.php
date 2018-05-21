<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<!--begin::Form-->

	        <?php $attributes = array("name" => "update_pass"); echo form_open("home/update_pass", $attributes);?>
			<div class="m-form m-form--label-align-right">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Update Password
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">	
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">New Password:</label>
							<div class="col-lg-6">
								<input type="password" class="form-control m-input" name="a_pass" placeholder="**********" required>
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
