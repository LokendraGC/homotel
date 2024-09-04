<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package homotel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="wrapper">
		<a href="#" id="back-to-top"></a>


		<!-- header begin -->
		<header class="transparent has-topbar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="de-flex sm-pt10">
							<div class="de-flex-col">
								<!-- logo begin -->
								<?php 

								 $logo = get_field('wtn_header_logo','options');

										if( $logo ){
											$homo_logo = $logo['url'];
										}else{
											$homo_logo = get_template_directory_uri() ."/assets/images/hm-logo.svg";
										}

										if( $homo_logo ):
								 ?>
								<div id="logo">
									<a href="<?php echo site_url('/'); ?>">
										<img class="logo-main" src="<?php echo 
										$homo_logo; ?>" alt="<?php echo get_bloginfo(); ?>" >

										<img class="logo-scroll" src="<?php echo $homo_logo; ?>" alt="<?php echo get_bloginfo(); ?>" >
										<img class="logo-mobile" src="<?php echo $homo_logo; ?>" alt="<?php echo get_bloginfo(); ?>" >
									</a>
								</div>
							<?php endif; ?>
								<!-- logo close -->
							</div>
							<div class="de-flex-col header-col-mid">
								<ul id="mainmenu">
									<li><a class="menu-item" href="index.html">Home</a></li>
									<li><a class="menu-item" href="about.html">About us</a></li>
									<li><a class="menu-item" href="#">Room</a>
										<ul>
											<li><a href="room-detail.html">Micro Apartment</a></li>
											<li><a href="room-detail.html">Suite room</a></li>
											<li><a href="room-detail.html">Deluxe room</a></li>
											<li><a href="room-detail.html">Standard room  </a></li>
										</ul>
									</li>
									<li><a class="menu-item" href="news.html">Café</a>
										<ul>
											<li><a href="cafe.html">Himcha Cafe</a></li>
											<li><a href="">Food Menu</a></li>
										</ul>
									</li>

									<li><a class="menu-item" href="services.html">Services</a></li>
									<li><a class="menu-item" href="testimonials.html">Testimonials</a></li>
									<li><a class="menu-item" href="news.html">Blog</a></li>
									<li><a class="menu-item" href="contact.html">Contact</a></li>
								</ul>
							</div>
							<?php if( $res_link = get_field('se_inquire_button','options') ): ?>
							<div class="de-flex-col">
								<div class="menu_side_area">          
									<a href="<?php echo $res_link['url']; ?>" class="btn-main btn-line"><?php echo $res_link['title']; ?></a>
									<span id="menu-btn"></span>
								</div>
							</div>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</header>