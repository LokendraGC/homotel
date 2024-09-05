<?php 
get_header();
/* Template Name: Contact */
?>

<!-- content begin -->

<style type="text/css">
input[type="text"], input[type="email"],  textarea {
			background: none !important;
	}
</style>
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-detail-section'); ?>

	<section class="relative lines-deco">
		<div class="container">
			<div class="row g-4 justify-content-center align-items-center">
				<div class="col-lg-5">
					<div class="content-contact">
						<h2>Contact Information</h2>
						<ul>
							<?php if( $address = get_field('wtn_address','options') ): ?>
								<li class="">
									<div class="">
										<h3>Address</h3>
									</div>   
									<div class="">
										<a href=""><?php echo $address; ?></a>
									</div>
								</li>
							<?php endif; ?>
							<?php if( $phone = get_field('wtn_phone_number','options') ): ?>
								<li class="">
									<div class="">
										<h3>Phone</h3>
									</div>   
									<div class="">
										<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
									</div>
								</li>
							<?php endif; ?>
							<?php if( $email = get_field('wtn_email_address','options') ): ?>
								<li class="">
									<div class="">
										<h3>Email</h3>
									</div>   
									<div class="">
										<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
									</div>
								</li>
							<?php endif; ?>

							<?php if( have_rows('wtn_social_media','options') ): ?>
								<li class="">
									<div style="background-size: cover; background-repeat: no-repeat;">
										<h3 class="fs-20">Connect With Us</h3>
										<div class="social-icons mb-sm-30" style="background-size: cover; background-repeat: no-repeat;">
											<?php while( have_rows('wtn_social_media','options') ):the_row();

												$media_icon = get_sub_field('wtn_media','options');
												$media_link = get_sub_field('wtn_link','options');
												if( $media_link ){
													$url = $media_link;
													$target = '_blank';
												}else{
													$url = '#';
													$target = '_self';
												}
												?>
												<a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><i class="fa-brands <?php echo $media_icon; ?>"></i></a>
											<?php endwhile; ?>

										</div>

									</div>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="bg-light p-5 box-shadow">
						<div class="text-center">
							<h3 class="mb-4 ">Write a Message</h3>
						</div>

						<?php echo do_shortcode('[contact-form-7 id="8c0f17d" title="Contact Form", html_id = "contact_form", html_class = "position-relative z1000"]'); ?>

					</div>
				</div>
			</div>
		</div>
	</section>  

	<?php if( $map_url = get_field('wtn_map_iframe_url','options') ): ?>
		<section class="p-0">   
			<?php echo $map_url; ?>
		</section>            
	<?php endif; ?>
</div>
<!-- content close -->

<?php 
get_footer();