<?php 
get_header();
?>
<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <?php if( have_rows('slider_details') ): ?>
        <section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
            <div class="v-center">
                <div class="swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->

                    <?php
                    while( have_rows('slider_details') ):the_row();

                        $slider_image = get_sub_field('slider_image');
                        $slider_title = get_sub_field('slider_title');
                        $slider_description = get_sub_field('slider_description');
                        ?>
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url(<?php echo $slider_image['url']; ?>)">
                                <div class="sw-caption z-1000">
                                    <div class="container">
                                        <div class="row g-4 align-items-center justify-content-center">

                                            <div class="spacer-double"></div>
                                            <?php if( $slider_title ): ?>
                                                <div class="col-lg-12 text-center">     
                                                    <div class="spacer-single"></div>
                                                    <div class="sw-text-wrapper">

                                                        <span class="slider-title mb-0"><?php echo $slider_title; ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="col-lg-6 text-center">
                                                <?php if( $slider_description ): ?>
                                                    <p class="slider-teaser mb-0"><?php echo $slider_description; ?></p>
                                                    <div class="spacer-30"></div>
                                                <?php endif; ?>
                                                <a class="btn-main mb10 mb-3" href="<?php echo get_the_permalink(26); ?>">View More</a>
                                            </div>

                                            <div class="spacer-single"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="sw-overlay op-3"></div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- Slides -->    

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$content = get_the_content();
if(!empty($content) ):
   ?>
   <section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
             <?php the_content(); ?>
         </div>
     </div>
 </div>
</section>
<?php endif; ?>

<?php if( $rooms = get_field('select_room_type') ): ?>
    <section class="bg-dark text-light relative">
        <div class="container relative z-2">
            <div class="row g-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="mb-0 wow fadeInUp">Accomodations</h2>
                </div>

                <!-- room begin -->
                <?php
                $count = 3;
                foreach( $rooms as $room ):
                    $price = get_field('room_price',$room->ID);
                    $guest = get_field('room_capacity',$room->ID);
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $room->ID ), 'single-post-thumbnail' );
                    ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".<?php echo $count; ?>s">
                                <?php if( $image ): ?>
                            <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="<?php echo $room->post_title; ?>">
                        <?php endif; ?>
                            <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered w-100">
                                <div class="fs-14">From</div>
                                <h3 class="fs-40 lh-1 mb-4"><?php echo $price; ?></h3>
                                <a class="btn-line" href="<?php echo get_permalink($room->ID); ?>">View Details</a>
                            </div>
                            <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h3 class="mb-0"><?php echo $room->post_title; ?></h3>
                                <?php if( $price ): ?>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            <?php echo $guest; ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="gradient-trans-black-bottom abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                <?php 
                $count++;
            endforeach;
         ?>
                <!-- room end -->

            </div>
        </div>
    </section>
<?php endif; ?>

<section class="bg-light">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2 class="wow fadeInUp">Our Café</h2>

                <div class="spacer-half"></div>

                <?php
                if( $cafe_content = get_field('hm_cafe_details') ):
                    echo $cafe_content;
                endif;
                if( $cafe_gallery = get_field('related_icons') ):

                   ?>
                   <div class=" bottom-0 mb-4" style="background-size: cover; background-repeat: no-repeat;">
                    <ul class="foodlist wow fadeInUp animated" data-wow-delay=".8s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <?php
                        foreach( $cafe_gallery as $gallery ):
                           ?>
                           <li><img src="<?php echo $gallery['url']; ?>"  alt="<?php echo $gallery['alt']; ?>"></li>
                       <?php endforeach; ?>
                   </ul>
               </div>
           <?php endif; ?>
           <a class="btn-main mb10 mb-3" href="<?php echo get_the_permalink(26); ?>">View Menu</a>
       </div>

       <div class="col-lg-6">
        <div class="relative">
            <div class="row g-3 align-items-center">
                <?php if( $first_img = get_field('feature_image_one') ): ?>
                    <div class="col-6 wow fadeInUp" data-wow-delay=".2s">
                        <img src="<?php echo $first_img['url']; ?>" class="img-fluid" alt="Best cafe in Nepal">
                    </div>
                    <?php 
                endif;
                if( $second_img = get_field('feature_image_two') ):
                   ?>
                   <div class="col-6 wow fadeInUp" data-wow-delay=".4s">
                    <img src="<?php echo $second_img['url']; ?>" class="img-fluid" alt="Testy Coffee">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

</div>
</div>
</section>


<section class="relative lines-deco">
    <div class="container">
        <div class="row g-4">
            <?php if( $img_left = get_field('left_image') ): ?>
                <div class="col-lg-4 sm-hide">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                        <div class="abs top-0 w-100">
                            <div class="shape-mask-1 jarallax">
                                <img src="<?php echo $img_left['url']; ?>" class="jarallax-img" alt="Clean and Attractive Room">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $service_main_content = get_field('service_main_title') ): ?>
                <div class="col-lg-4 text-center">
                    <div class="wow scaleIn">
                        <div class="subtitle id-color mb-3">Our Services</div>
                        <?php echo $service_main_content; ?>
                    </div>
                </div>
            <?php endif; ?>

            
            <?php if( $img_right = get_field('right_image') ): ?>
                <div class="col-lg-4 sm-hide">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">                                
                        <div class="abs top-0 w-100">
                            <div class="shape-mask-1 jarallax">
                                <img src="<?php echo $img_right['url']; ?>" class="jarallax-img" alt="Grill Chicken">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="spacer-double"></div>

        <?php if( have_rows('service_details') ): ?>
            <div class="row g-4 relative z-2">

                <?php 
                $count = 3;
                while( have_rows('service_details') ):the_row();

                    $icon = get_sub_field('service_icon');
                    $desc = get_sub_field('service_description');
                    ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo $count; ?>s">
                        <div class="relative p-4 bg-white border-grey">
                            <?php if( $icon ): ?>
                             <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                                <img src="<?php echo $icon['url']; ?>" class="w-100" alt="Our Services">
                            </span>
                        <?php endif; ?>
                        <?php if( $desc ): ?>
                            <div class="pl-90">
                                <?php echo $desc; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                if( $count == 8 ){
                    break;
                }
                $count++;
            endwhile;
            ?>
            

        </div>
    <?php endif; ?>
</div>

</section>


<?php 
$testi_args = array(
    'post_type'         => 'testimonial',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
);

if( $testi_data = get_posts( $testi_args )):   
    ?>
    <section class="jarallax relative overflow-hidden text-light section-dark" data-video-src="mp4:video/2.mp4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="wow fadeInUp z-2 position-relative">Clients Says</h2>
                </div>
                <div class="col-lg-8 text-center">
                    <div class="owl-single-dots owl-carousel owl-theme">
                        <?php
                        foreach( $testi_data as $post ):
                            setup_postdata($post);
                            ?>
                            <div class="item">
                                <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                                <h3 class="mb-4 wow fadeInUp fs-32"><?php echo $post->post_content; ?></h3>
                                <span class="wow fadeInUp"><?php echo $post->post_title; ?></span>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images-mountain-hotel/misc/leaf-rt.webp" class="w-20 abs end-0 top-0 z-2" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images-mountain-hotel/misc/leaf-lt.webp" class="w-20 abs start-0 top-0 z-2" alt="">

        <div class="de-overlay"></div>
    </section>
<?php endif; ?>


<?php 
$blog_args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 3,
    'post_status'       => 'publish',
);

$blogs_data = new WP_Query( $blog_args );
if( $blogs_data->have_posts()):   
    ?>
    <section class="relative homeblog">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-8 text-center">
                    <div class="wow scaleIn">
                        <h2 class="wow fadeInUp">Our Blog</h2>

                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">

                <?php
                while( $blogs_data->have_posts() ) :$blogs_data->the_post();

                   ?>
                   <div class="col-lg-4 col-md-6">
                    <div>
                        <?php if( has_post_thumbnail() ): ?>
                            <div class="post-image mb-3">
                                <img alt="Our Blogs and News" src="<?php echo get_the_post_thumbnail_url(); ?>" class="lazy">
                            </div>
                        <?php endif; ?>

                        <div class="pt-2 h-100">
                            <div class="py-1">

                                <div class="d-inline fs-14 fw-500"><i class="icofont-ui-calendar id-color me-2"></i><?php echo get_the_date('d M, Y'); ?></div>
                            </div>
                            <h4 class="mb-3 lh-1-4"><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p class="mb-2"><?php echo wp_trim_words(get_the_content(),20); ?></p>

                        </div>
                    </div>
                </div>
                <?php 
            endwhile; 
            wp_reset_postdata();

            ?>
        </div>
    </div>
</section>
<?php endif; ?>

</section>
</div>
<!-- content close -->
<?php 
get_footer();