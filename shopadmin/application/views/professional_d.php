<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<!--begin::Form-->

	        <?php $attributes = array("name" => "professional_d"); echo form_open_multipart("home/update_professional_d", $attributes);?>
			<div class="m-form m-form--label-align-right">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Professional Details
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
		            <div class="m-form__section row">
		            	<div class="col-lg-8">
							<div class="m-form__group form-group row">
								<label class="col-lg-3 col-form-label">Artist/Band Name:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control m-input" name="a_name" placeholder="Band name" value="<?php echo $a_name;?>">
									<span class="m-form__help">band name</span>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-3 col-form-label" for="exampleTextarea">About:</label>
								<div class="col-lg-9">
									<textarea class="form-control m-input" name="a_about" id="exampleTextarea" rows="3"><?php echo $a_about;?></textarea>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-3 col-form-label">Genre:</label>
								<div class="col-lg-9">
									<select class="form-control m-input" name="a_genre" id="exampleSelect1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-3 col-form-label">Type:</label>
								<div class="col-lg-9">
									<select class="form-control m-input" name="a_type" id="exampleSelect1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-4">							
							<div style="width: 200px; height: 200px; position: relative; overflow: hidden; border-radius: 50%; margin: auto;">					 
								<img src="<?php echo base_url();?>uploads/logo/<?php echo $a_logo;?>" alt="" style=" display: inline; margin: 0 auto; height: 100%; width: auto;">   
							</div>
							<div class="m-form__group form-group row">
								<div class="col-lg-12">
									<input type="hidden" name="delpicture" value="<?php echo $a_logo;?>">
								  	<input type="file" name="picture" class="custom-file-input" id="customFile">
								  	<label class="custom-file-label" for="customFile">Choose file</label>
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
