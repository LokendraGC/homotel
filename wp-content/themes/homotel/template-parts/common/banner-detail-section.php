	<div id="top"></div>

	<?php 

	$banner_img = get_field('banner_image');

	if( $banner_img ){
		$banner = $banner_img['url'];
	}else{
		$banner = get_template_directory_uri() ."/assets/images/background/3.webp";
	}

	?>
	<section id="subheader" class="relative jarallax text-light">

		<img src="<?php echo $banner; ?>" class="jarallax-img" 
		alt="<?php the_title(); ?>">

		<div class="container relative z-index-1000">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<h1><?php the_title(); ?></h1>
					<p class="mt-3 lead"><?php the_content(); ?></p>
					<ul class="crumb">
						<li><a href="<?php echo site_url(''); ?>">Home</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="de-overlay"></div>
	</section>
