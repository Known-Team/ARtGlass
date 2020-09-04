<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ARtGlass_Group
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="container-full bgimg-top pt-5 pb-5" style="background-image: url('http://artglass.local/wp-content/uploads/2020/09/footerimage-scaled.jpg')">
			<div class="row fullheight">
				<div class="col">
					<div class="container mt-5 mb-5">
						<div class="row mb-5">
							<div class="col-lg-3">
							</div>
							<div class="col-lg-6">
								<img class="site-branding-footer" src="http://artglass.local/wp-content/uploads/2020/09/logo-light.png">
							</div>
							<div class="col-lg-3">
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-lg-3">
							</div>
							<div class="col-lg-6">
								<p class="center whitetext"> 
									<a class="footerlink" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> 
									<a class="footerlink" target="_blank" href="https://twitter.com/artglassgroup"><i class="fab fa-twitter"></i></a>
									<a class="footerlink" target="_blank" href="https://twitter.com/artglassgroup"><i class="fab fa-facebook-f"></i></a>
									<a class="footerlink" target="_blank" href="https://twitter.com/artglassgroup"><i class="fab fa-linkedin-in"></i></a>
									<a class="footerlink" target="_blank" href="https://twitter.com/artglassgroup"><i class="fab fa-youtube"></i></a> 
								</p>
							</div>
							<div class="col-lg-3">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">
							</div>
							<div class="col-lg-6">
								<p class="center"><a class="footerlink" target="_blank" href="mailto:hello@artglass.com">hello@artglass.com</a></p>
							</div>
							<div class="col-lg-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-full pt-3 pb-3">
			<div class="row">
				<div class="col-lg-6">
					<div class="site-info">
						<p>2020 ARtGlass All Rights Reserved.</p>
					</div><!-- .site-info -->
				</div>
				<div class="col-lg-6">
					<div class="site-info">
						<p class="right"><a href="#">terms of use</a></p>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
		<script>
		/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		    acc[i].onclick = function(){
		        this.classList.toggle("active");
		        this.nextElementSibling.classList.toggle("show");
		};
		}

		</script>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
