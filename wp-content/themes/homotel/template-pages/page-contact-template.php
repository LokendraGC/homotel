<?php 
get_header();
/* Template Name: Contact */
?>

<!-- content begin -->
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

						<form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
							<div class="row gx-4">
								<div class="col-lg-12 col-md-12 mb10">
									<div class="field-set">
										<input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
									</div>

									<div class="field-set">
										<input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
									</div>

									<div class="field-set">
										<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="field-set mb20">
										<textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
									</div>
								</div>
							</div>


							<div class="text-center">
								<div class="g-recaptcha d-inline-block " data-sitekey="copy-your-sitekey-here"></div>

								<div id='submit' class="mt20 text-cen">
									<input type='submit' id='send_message' value='Send Message' class="btn-main">
								</div>
							</div>

							<div id="success_message" class='success'>
								Your message has been sent successfully. Refresh this page if you want to send more messages.
							</div>
							<div id="error_message" class='error'>
								Sorry there was an error sending your form.
							</div>
						</form>

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