<div class="container-fluid" style="padding:2% 5%;">
    <div class="col-md-8 col-md-offset-2">
        <ol class="breadcrumb">
                  <li><a class="hitem hidden-xs" href="#">ADDRESS</a></li>
        </ol>
    </div>  
    
    <div class="col-md-8 col-md-offset-2">
    	<!-- Edit existing address -->
    	<?php foreach ($query as $row) {?>
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-8 col-xs-12">
              
              <p style="text-transform: capitalize;"><?php echo $row->d_fname;?> <?php echo $row->d_lname;?></p>
              <p style="text-transform: capitalize;"><?php echo $row->d_add;?> , <?php echo $row->d_town;?></p>
              <p style="text-transform: capitalize;"><?php echo $row->d_state;?> ,  <?php echo $row->d_pin;?></p>
              <p style="text-transform: capitalize;"><?php echo $row->d_mob;?></p><hr>
            </div>
            <div class="col-md-2 col-xs-12 th-pb">
              <button type="button" class="th-btn-inv-sm cbtn  col-xs-12" data-toggle="collapse" data-target="#address<?php echo $row->id;?>">Edit</button>
            </div>
            <div class="col-md-2 col-xs-12 th-pb">
              <button type="button" class="th-btn-inv-sm cbtn  col-xs-12"  onclick="javascript:deleteadd(<?php echo $row->id;?>);">Delete</button>
            </div>
          </div>
          <div id="address<?php echo $row->id;?>" class="collapse col-md-12  col-xs-12 ">
				     <?php $attributes = array("name" => "billing");
      					echo form_open("profile/address1/$row->id", $attributes);?>
              <div class="col-md-6">
				<label>First Name <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_fname" value="<?php echo $row->d_fname;?>" required>
              </div>
              <div class="col-md-6">
				<label>Last Name<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_lname" value="<?php echo $row->d_lname;?>" required>
              </div>
              <div class="col-md-6">
				<label>Phone <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="d_mob" value="<?php echo $row->d_mob;?>" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Street address<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" placeholder="House number and street name"  name="d_add" value="<?php echo $row->d_add;?>" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Town/City<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_town" value="<?php echo $row->d_town;?>" required>
         	  </div>
              <div class="col-md-12">
				<label>State<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text"  name="d_state" value="<?php echo $row->d_state;?>"required>
          	  </div>
              <div class="col-md-12">
				<label>Zip/Postal Code<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="d_pin" value="<?php echo $row->d_pin;?>" required>
          	  </div>
              <div class="col-md-12 th-pt th-pb">
              	<button type="submit" class="btn th-btn col-xs-12 col-md-3" data-toggle="collapse" data-target="#address">Continue</button>
          	</div>
      				<?php echo form_close(); ?>
          </div>
        </div>
        <?php }?>
    	<!-- Add new address -->
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            
            <div class="col-md-3 col-xs-12 th-pb">
              <button type="button" class="th-btn-inv-sm cbtn  col-xs-12" data-toggle="collapse" data-target="#add_ress">Add New Address</button>
            </div>
          </div>
          <div id="add_ress" class="collapse col-md-12  col-xs-12 ">
				     <?php $attributes = array("name" => "billing");
      					echo form_open("profile/address", $attributes);?>
              <div class="col-md-6">
				<label>First Name <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_fname" required>
              </div>
              <div class="col-md-6">
				<label>Last Name<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_lname" required>
              </div>
              <div class="col-md-6">
				<label>Phone <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="d_mob" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Street address<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" placeholder="House number and street name"  name="d_add" value="" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Town/City<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_town" required>
         	  </div>
              <div class="col-md-12">
				<label>State<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text"  name="d_state" required>
          	  </div>
              <div class="col-md-12">
				<label>Zip/Postal Code<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="d_pin" required>
          	  </div>
              <div class="col-md-12">
				<label>Country<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="d_country" value="INDIA" readonly>
          	  </div>
              <div class="col-md-12 th-pt th-pb">
              	<button type="submit" class="btn th-btn col-xs-12 col-md-3" data-toggle="collapse" data-target="#add_ress">Continue</button>
          	</div>
      				<?php echo form_close(); ?>
          </div>
        </div>
	</div>
</div>	
<script type="text/javascript">
      function deleteadd(id)
      {
            $.ajax({
                      type: "POST",
                      url: "<?php echo site_url('profile/deleteadd');?>",
                      data:"id="+id,
                    success: function (response) {
                       location.reload();
                    }
            });
      }
</script>
