<?php
    $esc_email = esc_url(get_field('email', 'option'));
    $esc_linkedIn = esc_url(get_field('linkedin', 'option'));
    $esc_discord = esc_url(get_field('discord', 'option'));
    $esc_sub_title = esc_html(get_field('sub_title', 'option'));
    $esc_email_title = esc_html(get_field('email_title', 'option'));
    $esc_title = apply_filters('the_content', get_field('title', 'option'));
?>
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