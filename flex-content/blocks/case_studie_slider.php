<?php
    $slides = get_sub_field('slides');

    if (empty($slides)) {
        return false;
    }
?>

<section>
    <div class="js-case-studies-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach($slides as $slide) :
                    $esc_sub_title = esc_html($slide['sub_title']);    
                    $esc_title = apply_filters('the_content', $slide['title']);    
                    $esc_summary = apply_filters('the_content', $slide['summary']);    
                    $esc_copy = apply_filters('the_content', $slide['copy']);    
                    $link = $slide['link'];
                        // TODO add hover state field optional image/gif/video
                ?>
                    <div class="swiper-slide">
                        <div class="relative">
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

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>