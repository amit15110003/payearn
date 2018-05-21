<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<!--begin::Form-->

	        <?php $attributes = array("name" => "social_d"); echo form_open("home/update_social_d", $attributes);?>
			<div class="m-form m-form--label-align-right">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Social Information
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--last">
						<div class="form-group m-form__group row">
		                    <label class="col-lg-2 col-form-label">Facebook:</label>
		                    <div class="col-lg-6">
		                        <div class="input-group">
		                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
		                            <input type="text" name="a_fb" class="form-control m-input" value="<?php echo $a_fb;?>">
		                        </div>
		                    </div>
		                </div>
						<div class="form-group m-form__group row">
		                    <label class="col-lg-2 col-form-label">SoundCloud:</label>
		                    <div class="col-lg-6">
		                        <div class="input-group">
		                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
		                            <input type="text" name="a_soundcloud" class="form-control m-input"  value="<?php echo $a_soundcloud;?>">
		                        </div>
		                    </div>
		                </div>
						<div class="form-group m-form__group row">
		                    <label class="col-lg-2 col-form-label">Youtube:</label>
		                    <div class="col-lg-6">
		                        <div class="input-group">
		                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
		                            <input type="text" name="a_youtube" class="form-control m-input"  value="<?php echo $a_youtube;?>">
		                        </div>
		                    </div>
		                </div>
						<div class="form-group m-form__group row">
		                    <label class="col-lg-2 col-form-label">Instagram:</label>
		                    <div class="col-lg-6">
		                        <div class="input-group">
		                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
		                            <input type="text" name="a_insta" class="form-control m-input" value="<?php echo $a_insta;?>">
		                        </div>
		                    </div>
		                </div>
						<div class="form-group m-form__group row">
		                    <label class="col-lg-2 col-form-label">Twitter:</label>
		                    <div class="col-lg-6">
		                        <div class="input-group">
		                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
		                            <input type="text" name="a_twitter" class="form-control m-input"  value="<?php echo $a_twitter;?>">
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
