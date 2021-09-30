<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package erase
 */

?>

<div class="page-section banner-home bg-image"
	style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/banner-pattern.svg);">
	<div class="container py-5 py-lg-0">
		<div class="row align-items-center">
			<div class="col-lg-4 wow zoomIn">
				<div class="img-banner d-none d-lg-block">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mobile_app.png" alt="">
				</div>
			</div>
			<div class="col-lg-8 wow fadeInRight">
				<h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/google_play.svg" alt=""></a>
				<a href="#" class="ml-2"><img src="<?php echo get_template_directory_uri(); ?>/img/app_store.svg"
						alt=""></a>
			</div>
		</div>
	</div>
</div> <!-- .banner-home -->

<footer class="page-footer">
	<div class="container">
		<div class="row px-md-3">
			<div class="col-sm-6 col-lg-3 py-3">
				<h5>Company</h5>
				<ul class="footer-menu">
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'my-custom-menu', 
							'container_class' => 'custom-menu-class',
							'add_a_class'  => 'nav-link',
							'add_li_class'  => 'nav-item',
							'items_wrap' => '%3$s',
							 ) ); 
					?>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 py-3">
				<h5>More</h5>
				<ul class="footer-menu">
					<?php wp_nav_menu( array( 

					'theme_location' => 'footer_menu' ,

					'container' => false,

					'add_a_class'  => 'nav-link',

					'add_li_class'  => 'nav-item',

					'items_wrap' => '%3$s',

					) );  ?>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 py-3">
				<h5>Our partner</h5>
				<ul class="footer-menu">
					<?php wp_nav_menu( array( 

					'theme_location' => 'footer_menu1' ,

					'container' => false,

					'add_a_class'  => 'nav-link',

					'add_li_class'  => 'nav-item',

					'items_wrap' => '%3$s',

					) );  ?>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 py-3">
				<h5>Contact</h5>
				<p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
				<a href="#" class="footer-link">701-573-7582</a>
				<a href="#" class="footer-link">healthcare@temporary.net</a>

				<h5 class="mt-3">Social Media</h5>
				<div class="footer-sosmed mt-3">
					<a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
					<a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
					<a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
					<a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
					<a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
				</div>
			</div>
		</div>

		<hr>

		<p id="copyright">Copyright &copy; <?php echo do_shortcode('[year]') ?> <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right
			reserved</p>
	</div>
</footer>



<?php wp_footer(); ?>

</body>

</html>