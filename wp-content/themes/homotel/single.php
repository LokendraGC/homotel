<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package homotel
 */

get_header();
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<div id="top"></div>

	<section id="subheader" class="relative jarallax text-light">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/background/1.webp" class="jarallax-img" alt="">
		<div class="container relative z-index-1000">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<h2 class="mt-3 mb-3"><?php the_title(); ?></h2>
					<?php echo get_the_date(''); ?>
				</div>
			</div>
		</div>
		<div class="de-overlay"></div>
	</section>

	<?php 
	$content = get_the_content();
	?>
	<section class="lines-deco">
		<div class="container">
			<div class="row gx-5">
				<?php if( $content ): ?>
					<div class="col-lg-8">
						<div class="blog-read">

							<?php the_content(); ?>

						</div>

						<div class="spacer-single"></div>
					</div>
				<?php endif; ?>

				<?php
				$unique_ID = get_the_ID(); 
				$blog_args = array(
					'post_type'         => 'post',
					'posts_per_page'    => -1,
					'post_status'       => 'publish',
					'post_not_in'       => array($unique_ID)
				);

				$blogs_data = get_posts( $blog_args );
				if( $blogs_data ):   
					?>
					<div class="col-lg-4">
						<div class="widget widget-post">
							<h4>Recent Posts</h4>
							<ul class="de-bloglist-type-1">
								<?php
								foreach( $blogs_data as $post ):
									setup_postdata( $post );
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
									?>
									<li>
										<?php if( $image ): ?>
											<div class="d-image">
												<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
											</div>
										<?php endif; ?>
										<div class="d-content">
											<a href="<?php echo get_the_permalink( $post->ID ); ?>"><h4><?php echo $post->post_title; ?></h4></a>
											<div class="d-date"><?php echo get_the_date(); ?></div>
										</div>
									</li>
								<?php endforeach; ?>

							</ul>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

</div>
<!-- content close -->

<?php
get_footer();
