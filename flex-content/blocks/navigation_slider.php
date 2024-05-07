<?php
    $image_title = get_sub_field('image_title');
    $esc_title = apply_filters('the_content', get_sub_field('cover_title'));
    $esc_summary = apply_filters('the_content', get_sub_field('summary'));

    $slides = get_sub_field('slides');
?>

<section class="bg-secondary-color pt-5 pb-[50px]">
    <?php if ($image_title) : ?>
        <div class="container mb-10 md:mb-[14px] flex justify-center">
            <?php echo wp_get_attachment_image($image_title, 'full',); ?>
        </div>
    <?php endif; ?>
    <div class="container flex md:hidden flex-col mb-10">
        <h2 class="text-primary-color text-34 mb-[22px] uppercase font-bur"><?php echo $esc_title; ?></h2>

        <div class="text-white text-17 editorial--how-we-work">
            <?php echo $esc_summary; ?>
        </div>
    </div>

    <div class="container font-geo">
        <div class="flex flex-col-reverse md:flex-row js-work-sliders-wrapper">
            <!-- content -->
            <div class="swiper js-slider-content box-shade-soft w-full md:w-[72%]">
                <div class="swiper-wrapper">
                    <!-- Different type slide like placeholder thjere is no way back to that slide by design -->
                    <div class="swiper-slide hidden md:block">
                        <div class="flex flex-col h-full bg-primary-color text-secondary-color px-4 pt-5 pb-8 md:p-20 md:pr-[9rem] md:pb-[143px]">
                            <h2 class="text-80 font-bur mb-[57px] uppercase"><?php echo $esc_title; ?></h2>

                            <div class="text-34 editorial--how-we-work">
                                <?php echo $esc_summary; ?>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($slides as $slide) :
                        $esc_sub_title = esc_html($slide['sub_title']);
                        $esc_title = esc_html($slide['title']);
                        $esc_category = esc_html($slide['category']);
                        $esc_overview = apply_filters('the_content', $slide['overview']);
                        $esc_benefits = apply_filters('the_content', $slide['benefits']);
                        $esc_where_your_head_is_at = apply_filters('the_content', $slide['where_your_head_is_at']);
                        $immediacy_of_impact = intval($slide['immediacy_of_impact']);
                        $depth_of_strategy = intval($slide['depth_of_strategy']);
                        $business_integration = intval($slide['business_integration']);

                    ?>
                        <div class="swiper-slide">
                            <div class="flex flex-col h-full px-4 pt-5 pb-8 md:p-10 md:pr-[9rem] md:pb-[120px] bg-yellow">
                                <!-- Header -->
                                <div class="flex flex-col mb-[26px] md:mb-[77px]">
                                    <span class="hidden md:block text-34 uppercase md:mb-5 text-secondary-color"><?php echo $esc_sub_title; ?></span>
                                    <h2 class="text-center md:text-left text-32 md:text-68 font-bur text-secondary-color uppercase mb-3 md:mb-4"><?php echo $esc_title; ?></h2>
                                    <div class="flex justify-center md:justify-start">
                                        <h3 class="text-center md:text-left text-24 md:text-45 font-bur bg-secondary-color text-yellow rounded-full py-2 px-10 uppercase"><?php echo $esc_category; ?></h3>
                                    </div>
                                </div>
                                
                                <div class="flex flex-row justify-between flex-wrap">
                                    <div class="flex flex-col w-full md:w-1/2 mb-5 md:mb-0 order-1">
                                        <span class="text-14 md:text-18 font-bold uppercase mb-3 md:mb-8"><?php _e('Overview', 'no-silver-bullets'); ?></span>
                                        <div class="text-16 md:text-20 editorial-default">
                                            <?php echo $esc_overview; ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-full md:w-1/2 md:max-w-[470px] mb-[14px] md:mb-[73px] order-2">
                                        <span class="text-14 md:text-18 font-bold uppercase mb-3 md:mb-8"><?php _e('Benefits', 'no-silver-bullets'); ?></span>
                                        <div class="text-16 md:text-20 editorial-default">
                                            <?php echo $esc_benefits; ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-col md:space-y-8 w-full md:w-1/2 md:max-w-[470px] md:mb-[73px] order-4 md:order-3">
                                        <span class="text-14 md:text-18 font-bold uppercase mb-[14px] md:mb-8"><?php _e('Acceleration levels', 'no-silver-bullets'); ?></span>
                                        <!-- Stats -->
                                        <div class="mb-5 md:mb-0">
                                            <span class="block text-14 md:text-18 uppercase mb-2.5 md:mb-4 font-semibold"><?php _e('Immediacy of impact', 'no-silver-bullets'); ?></span>
                                            <div class="flex space-x-3">
                                                <?php for ($index=0; $index < 5; $index++) : ?>
                                                    <span class="block w-1/5 h-5 rounded-full bg-<?php echo $immediacy_of_impact > $index ? 'secondary-color' : 'primary-color' ?>"></span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div class="mb-5 md:mb-0">
                                            <span class="block text-14 md:text-18 uppercase mb-2.5 md:mb-4 font-semibold"><?php _e('Depth of strategy', 'no-silver-bullets'); ?></span>
                                            <div class="flex space-x-3">
                                                <?php for ($depthIndex=0; $depthIndex < 5; $depthIndex++) : ?>
                                                    <span class="block w-1/5 h-5 rounded-full bg-<?php echo $depth_of_strategy > $depthIndex ? 'secondary-color' : 'primary-color' ?>"></span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div class="mb-5 md:mb-0">
                                            <span class="block text-14 md:text-18 uppercase mb-2.5 md:mb-4 font-semibold"><?php _e('Business integration', 'no-silver-bullets'); ?></span>
                                            <div class="flex space-x-3">
                                                <?php for ($businessIndex=0; $businessIndex < 5; $businessIndex++) : ?>
                                                    <span class="block w-1/5 h-5 rounded-full bg-<?php echo $business_integration > $businessIndex ? 'secondary-color' : 'primary-color' ?>"></span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-full md:w-1/2 md:max-w-[470px] mb-5 md:mb-0 order-3 md:order-4">
                                        <span class="text-14 md:text-18 font-bold uppercase mb-3 md:mb-8"><?php _e('Where your head is at', 'no-silver-bullets'); ?></span>
                                        <div class="text-16 md:text-20 editorial-default">
                                            <?php echo $esc_where_your_head_is_at; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- navigation -->
            <div class="flex md:flex-col space-x-3 md:space-x-0 md:space-y-6 js-slider-navigation w-full md:w-[25%] mb-4 md:mb-0">
                <?php foreach ($slides as $key => $navSlide) :
                    $esc_nav_title = esc_html($navSlide['title']);
                ?>
                    <div class="flex flex-col flex-grow justify-center items-center">
                        <button class="w-full h-full bg-primary-color hover:bg-yellow text-secondary-color box-shade-soft cursor-red pt-8 md:pt-5 pb-3 md:py-0 js-slider-nav-item"
                            data-index="<?php echo $key; ?>"
                        >
                            <div class="flex flex-row justify-center space-x-5 pointer-events-none">
                                <?php for ($heartIndex = 0; $heartIndex < $key + 1; $heartIndex++) : ?>
                                    <div class="max-w-[26px] max-h-[26px] md:max-w-[62px] md:max-h-[51px] w-full h-full">
                                        <?php get_template_part('partials/heart', null); ?>
                                    </div>
                                <?php endfor; ?>
                            </div>

                            <h2 class="md:text-48 uppercase text-current font-black font-geo mt-4 pointer-events-none"><?php echo $esc_nav_title; ?></h2>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>