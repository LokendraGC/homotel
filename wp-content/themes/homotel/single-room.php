<?php 
get_header();
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">
	<?php get_template_part('template-parts/common/banner-section'); ?>


	<?php 
	$capacity = get_field('room_capacity');
	?>
	<section class="relative z-4 lines-deco no-top no-bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="mt-70">
						<div class="row g-0">
							<div class="col-md-6 col-12 text-center">
								<div class="bg-color text-light p-4 h-100 wow fadeInRight" data-wow-delay=".0s">
									<div class="de_count fs-15 wow fadeInRight" data-wow-delay=".4s">
										<?php if( $room_price = get_field('room_price') ): ?>
											<h2 class="mb-0"><?php echo $room_price; ?></h2>
											<?php
										endif;
										if( $per_what = get_field('per_what') ):
											?>
											<span><?php echo $per_what; ?></span>
										<?php endif; ?>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-12 text-center">
								<div class="text-light p-4 h-100 wow fadeInRight" data-bgcolor="rgb(249 15 3)" data-wow-delay=".2s">
									<div class="de_count fs-15 wow fadeInRight" data-wow-delay=".6s">
										<a class="btn-main btn-line no-bg mt-lg-4 red-btn" href="<?php echo site_url('reservation'); ?>">Book This Room</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="relative lines-deco room-detail">
		<?php 
		$room_content = get_the_content();
		if( !empty( $room_content ) ):
			?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7 text-center">
						<h2 class="wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;"><?php the_content(); ?></h2>
						
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div class="spacer-single"></div>

		<?php if( $room_images = get_field('room_images') ): ?>
			<div class="relative wow fadeIn">
				<div class="owl-custom-nav menu-float" data-target="#room-carousel">
					<a class="btn-next"></a>
					<a class="btn-prev"></a>                                

					<div id="room-carousel" class="owl-2-cols-center owl-carousel owl-theme">
						<!-- room begin -->
						<?php foreach( $room_images as $room_img ): ?>
							<div class="item">
								<div class="hover relative text-light">
									<img src="<?php echo $room_img['url']; ?>" class="w-100" alt="<?php echo $room_img['alt']; ?>">
								</div>
							</div>
						<?php endforeach; ?>
						<!-- room end -->
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div class="spacer-double"></div>

		<div class="container">
			<?php if( $room_features = get_field('room_features') ): ?>
				<h3 class="mb-4 text-center">Room Amenities</h3>
				<div class="row g-4 justify-content-center room-amenities">

					<?php
					foreach( $room_features as $feature ):

						?>
						<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
							<div class="d-block relative">
								<img src="<?php echo $feature['url']; ?>" class="w-40px" alt="<?php echo $feature['alt']; ?>">
								<p class="absolute abs-middle ml70 text-dark fw-500"><?php echo $feature['alt']; ?></p>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
			<?php endif; ?>
			<div class="spacer-single mt70"></div>

			<?php if( $room_feature = get_field('room_feature') ): ?>
				<h3 class="mb-4 text-center">Room Features</h3>
				<?php echo $room_feature; ?>
			<?php endif; ?>
			<div class="spacer-single mt30"></div>
			<div class="text-center">
				<a class="btn-main btn-line no-bg mt-lg-4 red-btn" href="<?php echo site_url('reservation'); ?>">Book This Room</a>
			</div>
		</div>
	</section>


	<?php 
	$unique_ID = get_the_ID();
	$rooms_args = array(
		'post_type'         => 'room',
		'posts_per_page'    => -1,
		'post_status'       => 'publish',
		'post__not_in' 		=> array($unique_ID)
	);

	if( $room_datas = get_posts( $rooms_args )):   
		?>
		<section class="relative bg-light pt80 lines-deco">
			<div class="container-fluid relative z-2">
				<div class="row g-4">
					<div class="col-lg-8 offset-lg-2 text-center">
						<h2 class="mb-0 wow fadeInUp">You May also Like</h2>
					</div>

					<div class="col-lg-12">
						<div class="owl-custom-nav menu-float px-5" data-target="#more-rooms">
							<a class="btn-next"></a>
							<a class="btn-prev"></a>                                

							<div id="more-rooms" class="owl-3-cols owl-carousel owl-theme">
								<!-- room begin -->
								<?php 
								$count = 3;
								foreach( $room_datas as $post ):
									setup_postdata( $post );
									$price = get_field('room_price',$post->ID);
									$guest = get_field('room_capacity',$post->ID);
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									?>
									<div class="item">
										<div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".<?php echo $count; ?>s">
											<?php if( $image ): ?>
												<img src="<?php echo $image[0]; ?>" class="w-100 " alt="<?php echo $post->post_title; ?>">
											<?php endif; ?>
											<div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
												<?php if( $price ): ?>
													<div class="fs-14">From</div>
													<h3 class="fs-40 lh-1 mb-4"><?php echo $price; ?></h3>
												<?php endif; ?>
												<a class="btn-line" href="<?php echo get_the_permalink($post->ID); ?>">View Details</a>
											</div>
											<div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 "></div>
											<div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
												<h3 class="mb-0"><?php echo $post->post_title; ?></h3>
												<div class="text-center fs-14">
													<?php if( $guest ): ?>
														<span class="mx-2">
															<?php echo $guest; ?>
														</span>
													<?php endif; ?>
												</div>
											</div>
											<div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
										</div>
									</div>
									<?php 
									$count++;
								endforeach;
								wp_reset_postdata();
								?>
								<!-- room end -->

							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
	<?php endif; ?>

</div>
<!-- content close -->

<?php 
get_footer();