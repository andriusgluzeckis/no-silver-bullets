<?php
    $esc_email = get_field('email', 'option');
    $esc_linkedIn = esc_url(get_field('linkedin', 'option'));
    $esc_discord = esc_url(get_field('discord', 'option'));
    $esc_sub_title = esc_html(get_field('sub_title', 'option'));
    $esc_email_title = esc_html(get_field('email_title', 'option'));
    $esc_title = apply_filters('the_content', get_field('title', 'option'));
    
    $esc_subscribe_title = apply_filters('the_content', get_field('subscribe_title', 'option'));
    $esc_subscribe_summary = apply_filters('the_content', get_field('subscribe_summary', 'option'));

    $fomt_title_image = get_field('image_title', 'option');
    $fomt_short_code = get_field('form_short_code', 'option');
    $quotes = get_field('quotes', 'option');

?>
<section class="bg-red-blue js-contact-form">
    <div class="container px-0 md:px-5 flex flex-col md:flex-row items-center md:py-12">

        <div class="bg-secondary-color text-primary-color w-full md:w-1/2 md:pr-[7%] px-14 md:px-0 py-12 md:py-0">
            <?php if ($quotes) : ?>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($quotes as $quote) :
                            $esc_quote = apply_filters('the_content', $quote['quote']);    
                            $esc_author = esc_html($quote['author']);    
                        ?>
                            <div class="swiper-slide">
                                <div class="flex flex-col">
                                    <div class="text-26 md:text-48 uppercase mb-12 font-black">
                                        <?php echo $esc_quote; ?>
                                    </div>
                                    <span class="text-14 md:text-18 font-semibold uppercase">
                                        <?php echo $esc_author; ?>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="w-full md:w-1/2 bg-primary-color md:pl-[7%]">
            <h2 class="flex justify-center mb-6 px-3 md:px-0">
                <?php echo wp_get_attachment_image($fomt_title_image, 'full'); ?>
            </h2>
            <div class="form-contact-us">
                <?php echo do_shortcode($fomt_short_code); ?>
            </div>
        </div>

    </div>
</section>
<section class="w-full bg-primary-color text-secondary-color pb-[90px] pt-[72px] md:py-32">
    <div class="max-w-[1590px] w-full px-5 mx-auto flex flex-col md:flex-row md:items-center md:justify-between ">
        <div class="md:max-w-[790px] w-full">
            <h2 class="font-bur text-34 md:text-68 mb-[35px] ">
                <?php echo $esc_subscribe_title; ?>
            </h2>
            <div class="text-16 md:text-20 md:max-w-[90%]">
                <?php echo $esc_subscribe_summary; ?>
            </div>
        </div>
        <div class="flex flex-grow md:max-w-[550px] mt-[50px] md:mt-0">
            <form class="w-full justify-between flex items-center" action="">
                <input class="bg-primary-color w-full text-22 placeholder:text-secondary-color placeholder:text-22 py-3 pl-4 md:py-[34px] md:pl-10 border-2 border-secondary-color rounded-full outline-none focus:outline-none"
                    type="email" id="email" name="subscribe-email" placeholder="<?php _e('YOUR E-MAIL', 'no-silver-bullets'); ?>"
                >
                <button class="cursor-pointer-blue ml-5" type="submit">
                    <svg class="w-[54px] md:w-[97px] h-[54px] md:h-[97px] text-current pointer-events-none">
                        <use xlink:href="#sprite-button"></use>
                    </svg>  
                </button>
            </form>
        </div>
    </div>
</section>
<footer class="w-full bg-secondary-color text-primary-color pt-10 footer:pt-40 pb-6 footer:pb-[75px]">
    <div class="container flex flex-col footer:flex-row w-full footer:justify-between">
        <div class="flex flex-col max-w-[970px]">
            <?php if ($esc_sub_title) : ?>
                <span class="block mb-[26px] font-geo uppercase text-16 md:text-22 text-current"><?php echo $esc_sub_title; ?></span>
            <?php endif; ?>
            <?php if ($esc_title) : ?>
                <div class="uppercase mb-2.5 footer:mb-0 text-current text-24 md:text-68 font-bur"><?php echo $esc_title; ?></div>
            <?php endif; ?>
            <div class="md:mb-20">
                <img src="<?php echo get_template_directory_uri() . '/images/lets-go.png'; ?>" alt="<?php _e('Lets Go', 'no-silver-bullets'); ?>">
            </div>
            <div class="hidden footer:flex uppercase font-geo text-14 md:text-18 footer:space-x-[80px] flex-grow items-end">
                <span><?php echo date('Y'); ?> <span><?php _e('Newyork', 'no-silver-bullets'); ?></span></span>
            
                <a class="uppercase text-current hover:text-yellow" href="/privacy-policy" rel="" aria-label="<?php _e('Privacy Policy', 'no-silver-bullets'); ?>">
                    <?php _e('Privacy Policy', 'no-silver-bullets'); ?>
                </a>
            </div>
        </div>
        <!-- Copy -->
            
        <div class="flex flex-col">
            <div class="flex justify-end footer:justify-start">
                <img class="max-w-[288px] md:max-w-full w-auto h-auto mb-3 footer:mb-0 footer:mt-[-117px]"
                    src="<?php echo get_template_directory_uri() . '/images/unicorn-cat.png'; ?>" alt="<?php _e('Unicorn Cat', 'no-silver-bullets'); ?>"
                />
            </div>
            <div class="flex flex-col-reverse footer:flex-row footer:items-end flex-grow">
                <div class="flex flex-col footer:hidden uppercase font-geo text-14 md:text-18 footer:space-x-[80px]">            
                    <a class="uppercase text-current hover:text-yellow mb-3 footer:mb-0" href="/privacy-policy" rel="" aria-label="<?php _e('Privacy Policy', 'no-silver-bullets'); ?>">
                        <?php _e('Privacy Policy', 'no-silver-bullets'); ?>
                    </a>

                    <span><?php echo date('Y'); ?> <span><?php _e('Newyork', 'no-silver-bullets'); ?></span></span>
                </div>
                <!-- Email -->
                <div class="flex flex-col footer:mr-20">
                    <?php if ($esc_email_title) : ?>
                        <span class="footer:ml-32 block font-geo uppercase text-16 md:text-22 text-current mb-5 footer:mb-[33px] footer:mt-[30px]">
                            <?php echo $esc_email_title; ?>
                        </span>
                    <?php endif; ?>
                    <a class="block uppercase footer:ml-32 text-current font-geo text-14 md:text-18 mb-3 footer:mb-0 hover:text-yellow transition-colors ease-out duration-150" 
                        href="mailto:<?php echo $esc_email; ?>" aria-label="<?php _e('Email', 'no-silver-bullets'); ?>"
                    >
                        <?php echo $esc_email; ?>
                    </a>
                </div>
                <!-- Socials -->
                <div class="flex flex-row space-x-5 mb-5 footer:mb-0">
                    <a href="<?php echo $esc_linkedIn; ?>" target="_blank" rel="noopener noreferrer"
                        class="transition-colors ease-out duration-150 text-current hover:text-yellow"
                        aria-label="<?php _e('LinkedIn', 'no-silver-bullets'); ?>"
                    >
                        <svg class="w-[58px] h-[58px] text-current pointer-events-none">
                            <use xlink:href="#sprite-linkedin"></use>
                        </svg>    
                        <span class="sr-only">
                            <?php _e('LinkedIn', 'no-silver-bullets'); ?>
                        </span>
                    </a>
                    <a href="<?php echo $esc_discord; ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php _e('Discord', 'no-silver-bullets'); ?>"
                        class="transition-colors ease-out duration-150 text-current hover:text-yellow"
                    >
                        <svg class="w-[58px] h-[58px] text-current pointer-events-none">
                            <use xlink:href="#sprite-discord"></use>
                        </svg>    
                        <span class="sr-only">
                            <?php _e('Discord', 'no-silver-bullets'); ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>


   
</footer>

<?php wp_footer(); ?>
<script>
    var xhr = new XMLHttpRequest();
    var url = '<?php echo get_stylesheet_directory_uri() . '/dist/spritemap.svg'; ?>';
    xhr.open('GET', url);
    xhr.onload = function () {
        var div = document.createElement('div');
        div.style.display = 'none';
        div.innerHTML = xhr.responseText;
        document.body.appendChild(div);
    };
    xhr.send();
</script>
</body>
</html>