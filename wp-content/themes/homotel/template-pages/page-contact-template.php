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
							<li class="">
								<div class="">
									<h3>Address</h3>
								</div>   
								<div class="">
									<a href="">Kathmandu Nepal</a>
								</div>
							</li>
							<li class="">
								<div class="">
									<h3>Phone</h3>
								</div>   
								<div class="">
									<a href="">+9779704141584</a>
								</div>
							</li>
							<li class="">
								<div class="">
									<h3>Email</h3>
								</div>   
								<div class="">
									<a href="">info@homotel.com.np</a>
								</div>
							</li>
							<li class="">
								<div style="background-size: cover; background-repeat: no-repeat;">
									<h3 class="fs-20">Connect With Us</h3>
									<div class="social-icons mb-sm-30" style="background-size: cover; background-repeat: no-repeat;">
										<a href="https://www.facebook.com/ApartmentHotels/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
										<a href="#"><i class="fa-brands fa-instagram"></i></a>
										<a href="#"><i class="fa-brands fa-twitter"></i></a>
										<a href="#"><i class="fa-brands fa-youtube"></i></a>
									</div>

								</div>
							</li>
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
	<section class="p-0">   
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4743215329836!2d85.34861911044632!3d27.702637776085954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19efa0e3ecd1%3A0x90f007e066483426!2sHomotel%20International%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1724750503740!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>            

</div>
<!-- content close -->

<?php 
get_footer();