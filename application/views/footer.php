			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<img src="<?php echo base_url();?>media/img/logow.png" class="footer-logo" alt="" />
							<p>
								Welcome to Pay & Earn. Our products hhave wide brand range, quantity ready for box and finally delivered from our warehouse  right to your doorstep.
							</p>
							<div class="footer-social">
								<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Infomation</h3>
								<ul>
									<li><a href="#">New Products</a></li>
									<li><a href="#">Top Sellers</a></li>
									<li><a href="#">Our Blog</a></li>
									<li><a href="#">About Our Shop</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Useful Link</h3>
								<ul>
									<li><a href="#">Our Team</a></li>
									<li><a href="#">Our Blog</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Secure Shopping</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Subscribe</h3>
								<p>
									Enter your email address for our mailing list to keep yourself updated.
								</p>
								<div class="newsletter" id="subcribed">
									<input type="email" id="subemail" placeholder="Your email address" required="" />
									<button onclick="javascript:subscribe('');"><i class="fa fa-paper-plane"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							Copyright © 2017 <a href="#">Organic Store</a> - All Rights Reserved.
						</div>
						<div class="col-md-4">
							<img src="images/footer_payment.png" alt="" />
						</div>
					</div>
				</div>
				<div class="backtotop" id="backtotop"></div>
			</div>
		</div>

		
		<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/modernizr-2.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.isotope.init.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/script.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/slider.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.ui.touch-punch.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>media/js/price-slider.js"></script>
		<script>
		         function subscribe() {
		             var email =document.getElementById("subemail").value;
		             $.ajax({
		                 type: 'POST',
		                 url: '<?php echo base_url(); ?>index.php/shop/subscribe',
		                 data:'&email='+email,
		                 beforeSend: function () {
		                     $('.loading').show();
		                 },
		                 success: function (html) {
		                     $('#subcribed').html(html);
		                     $('.loading').fadeOut("slow");
		                 }
		             });
		         }
		</script>
	</body>
</html>