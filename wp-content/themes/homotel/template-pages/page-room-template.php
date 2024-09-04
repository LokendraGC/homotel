<?php 
get_header();
/* Template Name: Room */
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-section'); ?>
	
	<?php 
	$unique_ID = get_the_ID();
	$rooms_args = array(
		'post_type'         => 'room',
		'posts_per_page'    => -1,
		'post_status'       => 'publish',
		'post__not_in' 		=> array($unique_ID)
	);

	if( $room_datas = get_posts( $rooms_args )):   

		$count = 1;
		foreach( $room_datas as $post ):
			setup_postdata( $post );
			$price = get_field('room_price',$post->ID);
			$guest = get_field('room_capacity',$post->ID);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			if( $count % 2 == 1 ){

				$custom_class = '';
				$text_class = 'col-lg-6 py-5 pe-lg-5';
				$left_right = 'right-half';

			}else{

				$custom_class = 'bg-dark text-light';
				$text_class = 'col-lg-6 offset-lg-6 py-5 ps-lg-5';
				$left_right = 'left-half';
			}
			?>
			<section class="<?php echo $custom_class; ?> no-top no-bottom overflow-hidden">
				<div class="container-fluid position-relative half-fluid">
					<div class="container">
						<div class="row">

							<!-- Image -->
							<div class="col-lg-6 position-lg-absolute <?php echo $left_right; ?> h-100">
								<div class="image" data-bgimage="url(<?php echo $image[0]; ?>) center"></div>
							</div>

							<!-- Text -->
							<div class="<?php echo $text_class; ?>">

								<h3><?php echo $post->post_title; ?></h3>
								<div class="fs-14 mb-3">
									<?php if( $guest ): ?>
										<span class="me-4">
											<?php echo $guest; ?>
										</span>
									<?php endif; ?>

								</div>
								<p class="pe-lg-5"><?php echo $post->post_content; ?></p>
								<a class="btn-main mt-2" href="<?php echo get_the_permalink( $post->ID ); ?>">View Details</a>

							</div>

						</div>
					</div>
				</div>
			</section>
			<?php 
			$count++;
		endforeach;
		wp_reset_postdata();
	endif;
	?>

</div>
<!-- content close -->

<?php 
get_footer();