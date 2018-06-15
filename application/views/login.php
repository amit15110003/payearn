<header class="header header-mobile">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div class="header-left">
								<div id="open-left"><i class="ion-navicon"></i></div>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="header-center">
								<a href="index.html" id="logo-2">
									<img class="logo-image" src="images/logo.png" alt="Organik Logo" />
								</a>
							</div>
						</div>
						<div class="col-xs-2">
							<div class="header-right">
								<div class="mini-cart-wrap">
									<a href="cart.html">
										<div class="mini-cart">
											<div class="mini-cart-icon" data-count="2">
												<i class="ion-bag"></i>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="main">
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-6 col-xs-12">
								<div class="commerce">
									<h2>Register</h2>
									<?php $attributes = array("name" => "loginform");
            echo form_open("signup", $attributes);?>
									<div class="commerce-login-form">
										<div class="row">
											<div class="col-md-6">
												<label>First Name <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="u_name" value="" size="40" required>
												</div>
											</div>
											<div class="col-md-6">
												<label>Last Name <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="u_lname" value="" size="40" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label>Email address <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="u_mail" value="" size="40" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label>Contact <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="u_contact" value="" size="40" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label>Password <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="password" name="u_pass" value="" size="40" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<input type="submit" value="Register">					
												</div>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xs-12">
								<div class="commerce">
									<h2>Login</h2>
									<?php $attributes = array("name" => "loginform");
            echo form_open("login", $attributes);?>
									<div class="commerce-login-form">
										<div class="row">
											<div class="col-md-12">
												<label>Email address <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="u_mail" value="" size="40">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label>Password <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="password" name="u_pass" value="" size="40">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<input type="submit" value="LOGIN">					
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<a href="#">Lost your password?</a>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>