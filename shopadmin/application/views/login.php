<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
        <meta charset="utf-8" />
        
        <title>Metronic | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts"> 

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       

        <!--begin::Web font -->
        <script src="<?php echo base_url();?>assets/vendors/base/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <link href="<?php echo base_url();?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		        <!--end::Base Styles -->

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/demo/default/media/img/logo/favicon.ico" /> 
</head>
    <!-- end::Head -->

    
    <!-- end::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
			
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
	<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
		<div class="m-stack m-stack--hor m-stack--desktop">
				<div class="m-stack__item m-stack__item--fluid">

					<div class="m-login__wrapper">

						<div class="m-login__logo">
							<a href="#">
							<img src="<?php echo base_url();?>assets/app/media/img/logos/logosm.png">  	
							</a>
						</div>

						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In To Admin</h3>

															</div>
                            <?php $attributes = array("name" => "loginform");
                               echo form_open("login/login", $attributes);?>
							<div class="m-login__form m-form" action="#">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="a_mail" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="a_pass">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign Up</h3>
								<div class="m-login__desc">Enter your details to create your account:</div>
							</div>
							<?php $attributes = array("name" => "loginform");
                               echo form_open("login/signup", $attributes);?>
							<div class="m-login__form m-form" action="#">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="User ID" name="a_username">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="a_mail" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="a_pass">
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
										<input type="checkbox" name="agree"> I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
										<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">Sign Up</button>
									<button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">Cancel</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<?php $attributes = array("name" => "loginform");
                               echo form_open("login/forget", $attributes);?>
							<div class="m-login__form m-form" action="#">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="a_mail" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>

				</div>
				<div class="m-stack__item m-stack__item--center">  
					
					<div class="m-login__account">
						<span class="m-login__account-msg">
						Don't have an account yet ?
						</span>&nbsp;&nbsp;
						<a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">Sign Up</a>
					</div>
				
				</div>
		</div>
	</div>
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(<?php echo base_url();?>assets/app/media/img/bg/bg-4.jpg)">
		<div class="m-grid__item m-grid__item--middle">
			<h3 class="m-login__welcome">Join Our Community</h3>
			<p class="m-login__msg">
				
			</p>
		</div>
	</div>
</div>				
		

</div>

<!-- begin::Quick Nav -->	
    	<!--begin::Base Scripts -->        
    	    	<script src="<?php echo base_url();?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		    	<script src="<?php echo base_url();?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Base Scripts -->   

         
        <!--begin::Page Vendors --> 
                <script src="<?php echo base_url();?>assets/snippets/pages/user/login.js" type="text/javascript"></script>
                <!--end::Page Vendors -->  
          

        
        
                    
        <!--begin::Page Snippets --> 
                <script src="<?php echo base_url();?>assets/app/js/dashboard.js" type="text/javascript"></script>
                <!--end::Page Snippets -->   
                
            </body>
    <!-- end::Body -->
</html>
