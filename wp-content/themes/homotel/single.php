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
		<img src="<?php echo get_template_directory_uri(); ?>/images/background/1.webp" class="jarallax-img" alt="">
		<div class="container relative z-index-1000">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<h2 class="mt-3 mb-3">How Smart Technology is Transforming Hotel Experiences</h2>
					January 15, 2024
				</div>
			</div>
		</div>
		<div class="de-overlay"></div>
	</section>

	<section class="lines-deco">
		<div class="container">
			<div class="row gx-5">
				<div class="col-lg-8">
					<div class="blog-read">

						<div class="post-text">
							<p>uis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore. Sed minim nisi duis laborum est labore nisi amet elit adipisicing proident do consectetur dolor labore sit nisi ad proident esse ad velit nisi irure reprehenderit ut et dolor labore veniam quis.</p>

							<blockquote class="quote-s1">Quis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore.</blockquote>

							<p>Sunt duis laboris ex et quis laborum laborum cillum mollit voluptate culpa consequat ex cupidatat dolor eiusmod proident proident cillum pariatur sint adipisicing in nostrud do dolore consectetur quis incididunt minim consectetur. Exercitation elit proident dolor est id eiusmod dolor dolor incididunt ad voluptate laboris cupidatat est est sint veniam sint officia sint incididunt est sit ut tempor commodo pariatur ut proident et do.</p>

							<img src="<?php echo get_template_directory_uri(); ?>/images/misc/7.webp" class="img-fluid" alt="">

							<h4>Sint fugiat esse et dolore</h4>
							<p>Sed eu in ut sint dolor irure fugiat minim veniam sed ea proident ullamco occaecat irure ut velit eu ullamco fugiat cupidatat dolore fugiat. Lorem ipsum id non deserunt id consequat duis voluptate amet aliqua pariatur laboris officia pariatur veniam velit reprehenderit sint nostrud cupidatat magna eiusmod mollit exercitation pariatur nulla minim laboris dolore aliqua consectetur cillum duis aute consectetur.</p>

						</div>

					</div>

					<div class="spacer-single"></div>



				</div>

				<div class="col-lg-4">
					<div class="widget widget-post">
						<h4>Recent Posts</h4>
						<ul class="de-bloglist-type-1">
							<li>
								<div class="d-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/news-thumbnail/2.webp" alt="">
								</div>
								<div class="d-content">
									<a href="#"><h4>Exploring the Rise of Unique and Lifestyle Hotels</h4></a>
									<div class="d-date">January 15, 2023</div>
								</div>
							</li>
							<li>
								<div class="d-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/news-thumbnail/3.webp" alt="">
								</div>
								<div class="d-content">
									<a href="#"><h4>Hotels are Adapting to Modern Traveler Preferences</h4></a>
									<div class="d-date">January 15, 2023</div>
								</div>
							</li>
							<li>
								<div class="d-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/news-thumbnail/4.webp" alt="">
								</div>
								<div class="d-content">
									<a href="#"><h4>Innovative Marketing Strategies for Boutique Hotels</h4></a>
									<div class="d-date">January 15, 2023</div>
								</div>
							</li>
							<li>
								<div class="d-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/news-thumbnail/5.webp" alt="">
								</div>
								<div class="d-content">
									<a href="#"><h4>Transforming Common Spaces in Modern Hotels</h4></a>
									<div class="d-date">January 15, 2023</div>
								</div>
							</li>
						</ul>
					</div>



				</div>
			</div>
		</div>
	</section>

</div>
<!-- content close -->

<?php
get_footer();
