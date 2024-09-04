<?php 
get_header();
/* Template Name: Services */
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">

	<?php get_template_part('template-parts/common/banner-detail-section'); ?>

	<?php if( have_rows('service_details') ): ?>
    <section class="relative lines-deco">
        <div class="container">
            <?php 
            $count = 1;
            while( have_rows('service_details') ): the_row();

                $service_desc = get_sub_field('service_description');
                $service_img = get_sub_field('service_image');
                $image_id = $service_img['ID'];
                $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                ?>
                
                <div class="row g-0 align-items-center justify-content-center">
                    <?php 
                    if( $count % 2 == 1 ): // Odd row
                        if( $service_img ): ?>
                            <div class="col-lg-5">
                                <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                    <div class="shape-mask-1 jarallax">
                                        <img src="<?php echo esc_url($service_img['url']); ?>" class="jarallax-img" alt="<?php echo esc_attr($alt_text); ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if( $service_desc ): ?>
                            <div class="col-lg-5">
                                <div class="ms-lg-5 wow scaleIn">
                                    <?php echo $service_desc; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php else: // Even row ?>
                        <?php if( $service_desc ): ?>
                            <div class="col-lg-5">
                                <div class="ms-lg-5 wow scaleIn">
                                    <?php echo $service_desc; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if( $service_img ): ?>
                            <div class="col-lg-5">
                                <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                                    <div class="shape-mask-2 jarallax">
                                        <img src="<?php echo esc_url($service_img['url']); ?>" class="jarallax-img" alt="<?php echo esc_attr($alt_text); ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div> <!-- End of row -->
                
                <?php 
                $count++;
            endwhile; 
            ?>
        </div>
    </section>
<?php endif; ?>


</div>
<!-- content close -->

<?php 
get_footer();