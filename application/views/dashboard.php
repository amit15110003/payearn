<div class="container" style="padding-top: 60px; padding-bottom: 60px;">
	<div class="col-md-2">
		<a href="#" class="list-group-item"> Orders</a>
		<a href="#" class="list-group-item"> Wishlist</a>
		<a href="<?php echo base_url("index.php/profile/address"); ?>" class="list-group-item">Addresses</a>
		<a href="<?php echo base_url("index.php/profile/account_details"); ?>" class="list-group-item">Account details</a>
		<a href="<?php echo base_url("index.php/shop/logout"); ?>" class="list-group-item">Logout</a>
	</div>
	<div class="col-md-9 col-md-offset-1">
		<h2 style="text-transform: capitalize;">Hello <?php echo $this->session->userdata('u_name'); echo " "; echo $this->session->userdata('u_lname');?></h2>
		<br>
		<h4>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</h4>
	</div>
</div>