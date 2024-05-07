<?php
    $slides = get_sub_field('slides');

    if (empty($slides)) {
        return false;
    }
?>

<section class="pt-7 pb-5 md:pb-[60px] md:pt-6">
    <div class="relative px-5 max-w-[1665px] w-full mx-auto js-case-studies-wrapper">
        <div class="swiper md:pr-5 js-case-studies-slider">
            <div class="swiper-wrapper">
                <?php foreach($slides as $slide) :
                    $esc_sub_title = esc_html($slide['sub_title']);    
                    $esc_title = apply_filters('the_content', $slide['title']);    
                    $esc_summary = apply_filters('the_content', $slide['summary']);    
                    $esc_copy = apply_filters('the_content', $slide['copy']);    
                    $link = $slide['link'];
                        // TODO add hover state field optional image/gif/video
                ?>
                    <div class="swiper-slide flex flex-col pb-5 text-primary-color">
                        <?php if ($link) :
                             $esc_link_title = esc_html($link['title']);
                             $esc_url = esc_url($link['url']);
                             $esc_target = empty($link['target']) ? '_self' : esc_attr($link['target']);
                        ?>
                            <a
                                href="<?php echo $esc_url; ?>" 
                                class="flex flex-col flex-grow cursor-pointer-blue"
                                target="<?php echo $esc_target; ?>"
                                aria-label="<?php echo $esc_link_title; ?>"
                            >
                                <div class="flex flex-col h-full relative bg-secondary-color md:box-shade-hard p-11 md:px-20 md:pt-[100px] md:pb-32 cursor-pointer-blue">
                                    <div class="absolute top-5 right-5 group cursor-red">
                                        <svg class="size-[92px] transform scale-100 transition-transform ease-in-out duration-150 group-hover:scale-125">
                                            <use xlink:href="#sprite-arrow-45"></use>
                                        </svg>
                                    </div>
                                    <?php if ($esc_sub_title) : ?>
                                        <span class="block mb-[15px] md:mb-[32px] text-16 md:text-22 font-semibold uppercase"><?php echo $esc_sub_title; ?></span>
                                    <?php endif; ?>
                                    <?php if ($esc_title) : ?>
                                        <h2 class="mb-[15px] md:mb-[25px] text-24 md:text-45 font-bur uppercase">
                                            <?php echo $esc_title; ?>
                                        </h2>
                                    <?php endif; ?>
                                    <?php if ($esc_summary) : ?>
                                        <div class="text-16 md:text-22 font-semibold mb-3">
                                            <?php echo $esc_summary; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($esc_copy) : ?>
                                        <div class="text-16 md:text-22 font-normal">
                                            <?php echo $esc_copy; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <!-- todo make a partial -->
                        <?php else : ?>
                            <div class="relative bg-secondary-color md:box-shade-hard flex flex-col flex-grow p-11 md:px-20 md:pt-[100px] md:pb-32 cursor-red">
                                <?php if ($link) : ?>
                                    <div class="absolute top right-0"></div>
                                <?php endif; ?>
                                
                                <?php if ($esc_sub_title) : ?>
                                    <span class="block mb-[15px] md:mb-[32px] text-16 md:text-22 font-semibold uppercase"><?php echo $esc_sub_title; ?></span>
                                <?php endif; ?>
                                <?php if ($esc_title) : ?>
                                    <h2 class="mb-[15px] md:mb-[25px] text-24 md:text-45 font-bur uppercase">
                                        <?php echo $esc_title; ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if ($esc_summary) : ?>
                                    <div class="text-16 md:text-22 font-semibold mb-3">
                                        <?php echo $esc_summary; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($esc_copy) : ?>
                                    <div class="text-16 md:text-22 font-normal">
                                        <?php echo $esc_copy; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Arrows -->
        <div class="absolute w-full md:w-auto z-10 md:relative md:flex justify-center top-1/2 left-0 md:top-[unset] md:left-[unset] transform -translate-y-1/2 md:translate-y-0 md:mt-[30px]">
            <div class="w-full flex md:space-x-5 justify-between md:justify-center">
                <button class="js-slider-prev cursor-red text-secondary-color hover:text-primary-color cursor-pointer-blue outline-none">
                    <?php get_template_part('partials/arrow-prev', null, ['color' => 'secondary-color']); ?>
                    <span class="sr-only"><?php _e('Previous slide', 'no-silver-bullets'); ?></span>
                </button>
                <button class="js-slider-next cursor-red text-secondary-color hover:text-primary-color cursor-pointer-blue outline-none">
                    <?php get_template_part('partials/arrow-next', null, ['color' => 'secondary-color']); ?>
                    <span class="sr-only"><?php _e('Next slide', 'no-silver-bullets'); ?></span>
                </button>
            </div>
        </div>

        <div class="js-slider-pagination md:hidden text-secondary-color flex justify-center mt-2.5"></div>

    </div>
</section>