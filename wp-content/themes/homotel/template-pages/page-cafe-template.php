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

					<?php
					$content = get_the_content();

					if( !empty($content) ){
						echo $content; 
					}
					?>
					<div class="bottom-0 mb-4" style="background-size: cover; background-repeat: no-repeat;">
						<?php if( $gallery_cafe = get_field('related_icons') ): ?>
							<ul class="foodlist wow fadeInUp animated" data-wow-delay=".8s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
								<?php foreach( $gallery_cafe as $cafe_icon ): ?>
									<li><img src="<?php echo $cafe_icon['url']; ?>" alt="<?php echo $cafe_icon['alt']; ?>"></li>
								<?php endforeach; // Corrected from enforeach ?>
							</ul>
						<?php endif; ?>
					</div>

				</div>

				<div class="col-lg-6">
					<div class="relative">
						<div class="row g-3 align-items-center">
							<?php if( $first_img = get_field('hom_first_feature_image') ):?>
							<div class="col-6 wow fadeInUp" data-wow-delay=".2s">
								<img src="<?php echo $first_img['url']; ?>" class="img-fluid" alt="Cafe Image">
							</div>
						<?php endif; ?>

						<?php if( $second_img = get_field('hom_second_feature_image') ):?>
						<div class="col-6 wow fadeInUp" data-wow-delay=".4s">
							<img src="<?php echo $second_img['url']; ?>" class="img-fluid" alt="Coffee Image">
						</div>
					<?php endif; ?>
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