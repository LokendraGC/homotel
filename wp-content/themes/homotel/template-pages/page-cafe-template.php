<?php 
get_header();
/* Template Name: Cafe */
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-section'); ?>

	<section class="bg-light">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-lg-6">
					<h2 class="wow fadeInUp">Our Café</h2>

					<div class="spacer-half"></div>

					<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
					<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
					<div class=" bottom-0 mb-4" style="background-size: cover; background-repeat: no-repeat;">
						<ul class="foodlist wow fadeInUp animated" data-wow-delay=".8s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bibimbap.png"  alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cake.png"  alt=""></li>

							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinner.png"  alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fast-food.png"  alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bibimbap.png"  alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cake.png"  alt=""></li>

							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinner.png"  alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fast-food.png"  alt=""></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="relative">
						<div class="row g-3 align-items-center">
							<div class="col-6 wow fadeInUp" data-wow-delay=".2s">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe.jpg" class="img-fluid" alt="">
							</div>
							<div class="col-6 wow fadeInUp" data-wow-delay=".4s">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe-1.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


</div>
<!-- content close -->

<?php 
get_footer();