<?php 
get_header();
/* Template Name: Testimonials */
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-detail-section'); ?>
	
	<?php 
	$testi_args = array(
		'post_type'         => 'testimonial',
		'posts_per_page'    => -1,
		'post_status'       => 'publish',
	);

	if( $testi_data = get_posts( $testi_args )):   

		?>

		<section class="relative lines-deco">
			<div class="container">


				<div class="row g-4 relative z-2">

					<?php
					foreach( $testi_data as $post ):
						setup_postdata($post);
						?>
						<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
							<div class="relative p-4 bg-white border-grey">
								<span class="abs top-= w-70px p-3 rounded-up-100  d-block">
									<i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></i>
								</span>
								<div class="pl-90 testimonial-contents">

									<?php echo $post->post_content; ?>
								</div>
								<div class="text-end mt-4">  
									<h4><?php echo $post->post_title; ?></h4>
								</div>

							</div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>

		</section>
	<?php endif; ?>
	</div>
	<!-- content close -->

	<?php 
	get_footer();