<?php 
get_header();
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<div id="top"></div>

	<section id="subheader" class="relative jarallax text-light">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-hotel-2.jpg" class="jarallax-img" alt="">
		<div class="container relative z-index-1000">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<h1>Standard room  </h1>
					<ul class="crumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Standard room  </li>
					</ul>
					<div class="spacer-double"></div>
				</div>
			</div>
		</div>
		<div class="de-overlay"></div>
	</section>

	<section class="relative z-4 lines-deco no-top no-bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="mt-70">
						<div class="row g-0">
							<div class="col-md-6 col-12 text-center">
								<div class="bg-color text-light p-4 h-100 wow fadeInRight" data-wow-delay=".0s">
									<div class="de_count fs-15 wow fadeInRight" data-wow-delay=".4s">
										<h2 class="mb-0">$179</h2>
										<span>/night</span>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-12 text-center">
								<div class="text-light p-4 h-100 wow fadeInRight" data-bgcolor="rgb(249 15 3)" data-wow-delay=".2s">
									<div class="de_count fs-15 wow fadeInRight" data-wow-delay=".6s">
										<a class="btn-main btn-line no-bg mt-lg-4 red-btn" href="reservation.html">Book This Room</a>
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
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="wow fadeInUp">Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</h2>
				</div>
			</div>
		</div>

		<div class="spacer-single"></div>

		<div class="relative wow fadeIn">
			<div class="owl-custom-nav menu-float" data-target="#room-carousel">
				<a class="btn-next"></a>
				<a class="btn-prev"></a>                                

				<div id="room-carousel" class="owl-2-cols-center owl-carousel owl-theme">
					<!-- room begin -->
					<div class="item">
						<div class="hover relative text-light">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room-single/1.webp" class="w-100" alt="">
						</div>
					</div>
					<!-- room end -->

					<!-- room begin -->
					<div class="item">
						<div class="hover relative text-light">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room-single/2.webp" class="w-100" alt="">
						</div>
					</div>
					<!-- room end -->

					<!-- room begin -->
					<div class="item">
						<div class="hover relative text-light">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room-single/3.webp" class="w-100" alt="">
						</div>
					</div>
					<!-- room end -->

					<!-- room begin -->
					<div class="item">
						<div class="hover relative text-light">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room-single/4.webp" class="w-100" alt="">
						</div>
					</div>
					<!-- room end -->
				</div>
			</div>
		</div>

		<div class="spacer-double"></div>

		<div class="container">
			<h3 class="mb-4 text-center">Room Amenities</h3>
			<div class="row g-4 justify-content-center room-amenities">
				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/guests.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">4 Guests</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/size.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">35 Feets Size</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/door.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Connecting Rooms</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bed.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">1 King Bed</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tv.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Cable TV</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shower.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Shower</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/safebox.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Safebox</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/wifi.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Free WiFi</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/desk.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Work Desk</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/balcony.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Balcony</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bathub.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">Bathub</p>
					</div>
				</div>

				<div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="d-block relative">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/city.png" class="w-40px" alt="">
						<p class="absolute abs-middle ml70 text-dark fw-500">City View</p>
					</div>
				</div>
			</div>
			<div class="spacer-single mt70"></div>

			<h3 class="mb-4 text-center">Room Features</h3>
			<ul class="ul-style-2 d-inline-block">
				<li><strong>Wi-Fi</strong>: Complimentary High-Speed Wi-Fi</li>
				<li><strong>Climate Control</strong>: Individual Air Conditioning and Heating</li>
				<li><strong>Entertainment</strong>: 50-inch Flat-Screen TV with Cable and Satellite</li>
				<li><strong>Workspace</strong>: Ergonomic Work Desk and Chair</li>
				<li><strong>Safety</strong>: In-Room Safe</li>
				<li><strong>Communication</strong>: Direct-Dial Telephone with Voicemail</li>
				<li><strong>Convenience</strong>: Alarm Clock, Iron, and Ironing Board</li>
			</ul>
			<div class="spacer-single mt30"></div>
			<div class="text-center">
				<a class="btn-main btn-line no-bg mt-lg-4 red-btn" href="reservation.html">Book This Room</a>
			</div>
		</div>
	</section>

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
							<div class="item">
								<div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room/1.webp" class="w-100 " alt="">
									<div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
										<div class="fs-14">From</div>
										<h3 class="fs-40 lh-1 mb-4">$129</h3>
										<a class="btn-line" href="room-single.html">View Details</a>
									</div>
									<div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 "></div>
									<div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
										<h3 class="mb-0">Standard Room</h3>
										<div class="text-center fs-14">
											<span class="mx-2">
												2 Guests
											</span>

										</div>
									</div>
									<div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
								</div>
							</div>
							<!-- room end -->

							<!-- room begin -->
							<div class="item">
								<div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".4s">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room/2.webp" class="w-100 " alt="">
									<div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
										<div class="fs-14">From</div>
										<h3 class="fs-40 lh-1 mb-4">$129</h3>
										<a class="btn-line" href="room-single.html">View Details</a>
									</div>
									<div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 "></div>
									<div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
										<h3 class="mb-0">Deluxe Room</h3>
										<div class="text-center fs-14">
											<span class="mx-2">
												2 Guests
											</span>

										</div>
									</div>
									<div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
								</div>
							</div>
							<!-- room end -->

							<!-- room begin -->
							<div class="item">
								<div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".5s">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room/3.webp" class="w-100 " alt="">
									<div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
										<div class="fs-14">From</div>
										<h3 class="fs-40 lh-1 mb-4">$139</h3>
										<a class="btn-line" href="room-single.html">View Details</a>
									</div>
									<div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 "></div>
									<div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
										<h3 class="mb-0">Suite room</h3>
										<div class="text-center fs-14">
											<span class="mx-2">
												2 Guests
											</span>

										</div>
									</div>
									<div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
								</div>
							</div>
							<!-- room end -->

							<!-- room begin -->
							<div class="item">
								<div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".7s">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/room/4.webp" class="w-100 " alt="">
									<div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
										<div class="fs-14">From</div>
										<h3 class="fs-40 lh-1 mb-4">$149</h3>
										<a class="btn-line" href="room-single.html">View Details</a>
									</div>
									<div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 "></div>
									<div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
										<h3 class="mb-0">Micro Apartment</h3>
										<div class="text-center fs-14">
											<span class="mx-2">
												4 Guests
											</span>

										</div>
									</div>
									<div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
								</div>
							</div>
							<!-- room end -->
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