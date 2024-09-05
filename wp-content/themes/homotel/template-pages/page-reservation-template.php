<?php 
get_header();
/* Template Name: Reservation */


get_template_part('template-parts/common/banner-section');

?>
<!-- content begin -->
<div class="no-bottom no-top" id="content">
	<section id="section_form" class="relative lines-deco">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div id="success_message" class="text-center">
						<h2>Your reservation has been sent successfully.</h2>
						<div class="col-lg-8 offset-lg-2">
							<p>We will contact you shortly. Refresh this page if you want to make another reservation.</p>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/misc/2.webp" class="w-100 rounded-up-100" alt="">
						</div>
					</div>

					<div id="booking_form">
						<?php
						 echo do_shortcode('[contact-form-7 id="630c915" title="Reservation Form" , html_id = "contact_form", html_class = "form-border"]');
						  ?>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- content close -->

<?php 
get_footer();