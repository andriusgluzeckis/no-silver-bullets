<?php
    $icon = get_sub_field('icon');
    $esc_title = apply_filters('the_content', get_sub_field('title'));
    $esc_sub_title = apply_filters('the_content', get_sub_field('sub_title'));
    $esc_summary = apply_filters('the_content', get_sub_field('summary'));
?>

<?php
    // Cloned fields from Field Group - Clone: Colors - Colors separate php tag to easer reuse code
    // primary-color : Turquoise
    // secondary-color : Red
    // tangerine : Tangerine
    // maroon : Maroon
    // royal-blue : Royal Blue
    // yellow : Citrus
    // pink : Pink
    // TODO add to Readme
    $background_color = get_sub_field('background_color');
    $text_color = get_sub_field('text_color');
?>

<section class="w-full text-pr bg-<?php echo $background_color; ?> text-<?php echo $text_color; ?>">
    <div class="max-w-[1640px] px-5 w-full mx-auto">
        <?php if ($icon) : ?>
            <div class="flex justify-center w-full mb-6 md:mb-8 font-geo font-normal">
                <?php echo wp_get_attachment_image($icon, 'full', false, ['class' => 'max-w-[165px] mx-auto w-full h-auto']) ?>
            </div>
        <?php endif; ?>
        <?php if ($esc_sub_title) : ?>
            <span class="block uppercase text-17 md:text-28 text-center mb-7 text-current">
                <?php echo $esc_sub_title; ?>
            </span>
        <?php endif; ?>
        <?php if ($esc_title) : ?>
            <h1 class="uppercase text-34 md:text-68 text-center font-bur leading-[38px] md:leading-[72px] text-current">
                <?php echo $esc_title; ?>
            </h1>
        <?php endif; ?>
        <?php if ($esc_summary) : ?>
            <div class="text-21 md:text-36 font-geo text-current text-center mt-8 md:mt-10">
                <?php echo $esc_summary; ?>
            </div>
        <?php endif; ?>
    </div>
</section>