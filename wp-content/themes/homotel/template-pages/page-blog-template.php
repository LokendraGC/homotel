<?php 
get_header();
/* Template Name: Blog */
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-detail-section'); ?>


	<?php 
	$blog_args = array(
		'post_type'         => 'post',
		'posts_per_page'    => -1,
		'post_status'       => 'publish',
	);

	$blogs_data = new WP_Query( $blog_args );
	if( $blogs_data->have_posts()):   
		?>
		<section class="lines-deco">
			<div class="container">
				<div class="row g-4">
					<?php
					while( $blogs_data->have_posts() ) :$blogs_data->the_post();
						?>
						<div class="col-lg-4 col-md-6">
							<div>
								<?php if( has_post_thumbnail() ): ?>
									<div class="post-image mb-3">
										<div class="d-tagline start-0 ps-3">
											<span>News</span>
										</div>
										<img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>" class="lazy">
									</div>
								<?php endif; ?>
								<div class="pt-2 h-100">
									<h4 class="mb-3 lh-1-4"><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<div class="py-1">


										<div class="d-inline fs-14 fw-500"><i class="icofont-ui-calendar id-color me-2"></i><?php echo get_the_date('d M, Y'); ?></div>
									</div>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>

					<!-- pagination begin -->
					<!-- <div class="col-lg-12 pt-4 text-center">
						<div class="d-inline-block">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
										</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div> -->
					<!-- pagination end -->
				</div>
			</div>
		</section>
	<?php endif; ?>
</div>
<!-- content close -->


<?php 
get_footer();