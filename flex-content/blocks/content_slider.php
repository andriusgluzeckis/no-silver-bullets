<?php
    $slides = get_sub_field('slides');

    if (empty($slides)) {
        return false;
    } 
?>

<section class="w-full js-content-sliders-wrapper bg-secondary-color">
    <div class="flex justify-center px-5 py-3">
        <img src="<?php echo get_template_directory_uri() ?>/dist/images/products.png" alt="<?php _e('Products', 'no-silver-bullets'); ?>">
    </div>
    <div class="w-full bg-cover bg-no-repeat bg-center py-12 pb-5 md:pb-12"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/silver-bg.jpg')"
    >
        <div class="container relative">
            <div class="swiper js-content-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $slide) :
                        $esc_title = esc_html($slide['title']);
                        $esc_summary = apply_filters('the_content', $slide['summary']);
                        $link = $slide['link'];
                        $image = $slide['image'];
                    ?>
                        <div class="swiper-slide flex flex-col flex-grow !h-auto pb-10 px-[30px]">
                            <div class="flex flex-col flex-grow relative h-full">
                                <div class="flex flex-col flex-grow items-center justify-center h-full mb-[30px]">
                                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                                </div>
                                <h3 class=" flex-gro text-secondary-color uppercase text-center md:text-left text-34 md:text-45 font-bur text-drop mb-[30px]"><?php echo $esc_title; ?></h3>
                                <div class="flex flex-col relative rounded-lg bg-primary-color text-royal-blue px-10 pt-7 pb-[90px] md:pt-20 md:pb-[140px] box-shade-hard text-16 md:text-20">
                                    <?php echo $esc_summary; ?>
                                    <?php if ($link) :
                                    $esc_link_title = esc_html($link['title']);
                                    $esc_url = esc_url($link['url']);
                                    $esc_target = empty($link['target']) ? '_self' : esc_attr($link['target']);
                                ?>
                                    <a
                                        href="<?php echo $esc_url; ?>" 
                                        class="flex flex-col flex-grow cursor-pointer-blue absolute bottom-5 right-5"
                                        target="<?php echo $esc_target; ?>"
                                        aria-label="<?php echo $esc_link_title; ?>"
                                    >
                                        <div class="group cursor-red">
                                            <svg class="size-[52px] md:size-[92px] transform scale-100 transition-transform ease-in-out duration-150 group-hover:scale-125">
                                                <use xlink:href="#sprite-arrow-45-blue"></use>
                                            </svg>
                                        </div>
                                    </a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="absolute w-full md:w-auto z-10 md:relative flex md:hidden justify-center top-1/2 left-0 md:top-[unset] md:left-[unset] transform -translate-y-1/2 md:translate-y-0 md:mt-[30px]">
                <div class="w-full flex md:space-x-5 justify-between md:justify-center">
                    <button class="js-slider-prev cursor-red text-royal-blue hover:text-secondary-color cursor-pointer-blue outline-none">
                        <?php get_template_part('partials/arrow-prev', null, ['color' => 'secondary-color']); ?>
                        <span class="sr-only"><?php _e('Previous slide', 'no-silver-bullets'); ?></span>
                    </button>
                    <button class="js-slider-next cursor-red text-royal-blue hover:text-secondary-color cursor-pointer-blue outline-none">
                        <?php get_template_part('partials/arrow-next', null, ['color' => 'secondary-color']); ?>
                        <span class="sr-only"><?php _e('Next slide', 'no-silver-bullets'); ?></span>
                    </button>
                </div>
            </div>
            <div class="js-slider-pagination md:hidden text-secondary-color flex justify-center mt-2.5"></div>
        </div>
    </div>
   
</section>