<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package homotel
 */

?>

<!-- footer begin -->
<footer class="text-light section-dark footer-contents">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-md-12">
				<div class="d-lg-flex align-items-center justify-content-between text-center">
					<?php if( $address = get_field('wtn_address','options') ): ?>
						<div>
							<h3 class="fs-20">Address</h3>
							<?php echo $address; ?>
						</div>
					<?php endif; ?>

					<?php if( have_rows('wtn_social_media','options') ): ?>
						<div>
							<h3 class="fs-20">Connect With Us</h3>
							<div class="social-icons mb-sm-30 mt-4">
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
					<?php endif; ?>
					<?php
					$phone = get_field('wtn_phone_number','options');
					$email = get_field('wtn_email_address','options');
					if( $phone && $email ): ?>
						<div>
							<h3 class="fs-20">Contact Us</h3>
							Phone. <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> <br>
							Email. <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>                    
		</div>
	</div>
	<div class="subfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					Copyright <?php echo Date('Y'); ?> Homotel. All Rights Reserved 
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer close -->
</div>

<?php wp_footer(); ?>

</body>
</html>
