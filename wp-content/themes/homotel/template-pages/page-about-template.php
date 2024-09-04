<?php 
get_header();
/* Template Name: About */
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-section'); ?>

	<?php 
	$content = get_the_content();
	?>
	<section class="relative lines-deco">
		<div class="container">
			<div class="row gx-5 align-items-center">
				<?php if( !empty($content) ): ?>
					<div class="col-lg-6">
						<?php the_content(); ?>
					</div>
				<?php endif; ?>
				
				<?php if( have_rows('fact_details') ): ?>
					<div class="col-lg-6">
						<div class="row g-4">
							<?php
							while( have_rows('fact_details') ):the_row();
								$room_title = get_sub_field('fact_title');
								$total_room = get_sub_field('fact_number');
								$room_range = get_sub_field('fact_range');
								$room_img =  get_sub_field('fact_image');
								?>
								<div class="col-6">
									<?php if( $room_img ): ?>
										<img src="<?php echo $room_img['url']; ?>" class="img-fluid mb-4 wow zoomIn" alt="<?php echo $room_title; ?>">
									<?php endif;
									if( $room_title ):
										?>
										<div class="col-12 text-center">
											<div class="bg-color-2 text-light p-4">
												<div class="de_count wow fadeInUp">
													<h2 class="mb-0"><span class="timer" data-to="<?php echo $total_room; ?>" data-speed="3000"></span><?php echo $room_range; ?></h2>
													<span><?php echo $room_title; ?></span>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php if( have_rows('team_details') ): ?>
		<section class="bg-light lines-deco">
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-12 text-center">
						<div class="subtitle wow fadeInUp mb-3">Behind the Scene</div>
						<h2 class="wow fadeInUp mb-0" data-wow-delay=".2s">Our Team</h2>
					</div>

					<?php
					while( have_rows('team_details') ):the_row();
						$team_img = get_sub_field('team_image');
						$team_title = get_sub_field('team_name');
						$designation = get_sub_field('team_designation');
						if( $team_title ):
							?>
							<div class="col-lg-3">
								<?php if( $team_img ): ?>
									<img src="<?php echo $team_img['url']; ?>" class="img-fluid" alt="<?php echo $team_title; ?>">
								<?php endif; ?>
								<div class="p-3 text-center
								">
								<h4 class="mb-0"><?php echo $team_title; ?></h4>
								<p class="mb-2"><?php echo $designation; ?></p>

							</div>
						</div>
						<?php 
					endif;
				endwhile;
				?>


			</div>
		</div>
	</section>
<?php endif; ?>


<?php if( $our_vision = get_field('about_brief_section') ): ?>
<section class="relative lines-deco">
	<div class="container relative z-2">
		<div class="row g-4">

			<div class="col-lg-6">
				<div class="ms-4">
					<?php echo $our_vision; ?>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="row">
					<?php if( $first_feature_img = get_field('first_feature_image') ): ?>
					<div class="col-md-6">
						<div class="relative">
							<img src="<?php echo $first_feature_img['url']; ?>" class="img-fluid wow fadeInUp" alt="Hotel with clean room">
						</div>
					</div>
				<?php endif; ?>

				<?php if( $second_feature_img = get_field('second_feature_image') ): ?>
					<div class="col-md-6">
						<div class="spacer-single sm-hide"></div>
						<div class="relative">
							<img src="<?php echo $second_feature_img['url']; ?>" class="img-fluid wow fadeInUp" alt="Room with attach bathroom">
						</div>
					</div>
				<?php endif; ?>
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