<?php 
get_header();
/* Template Name: Reservation */


get_template_part('template-parts/common/banner-section');

	$banner_img = get_field('banner_image');

	if( $banner_img ){
		$banner = $banner_img['url'];
	}else{
		$banner = get_template_directory_uri() ."/assets/images/background/3.webp";
	}

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

							<img src="<?php echo $banner; ?>" class="w-100 rounded-up-100" alt="Homotel Banner Image">
						</div>
					</div>

					<div id="booking_form">
						<?php
						 echo do_shortcode('[contact-form-7 id="630c915" title="Reservation Form" html_id = "contact_form" html_class= "form-border"]');
						  ?>

						<div id='error_message' class='error'>Sorry, error occured this time sending your message.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- content close -->

<?php 
get_footer();