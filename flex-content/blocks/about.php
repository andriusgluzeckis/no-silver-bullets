<?php
    $image_title = get_sub_field('image_title');
    $esc_sub_title = esc_html(get_sub_field('sub_title'));
    $esc_title = apply_filters('the_content', get_sub_field('title'));
    $esc_summary = apply_filters('the_content', get_sub_field('summary'));
?>

<section>
    <h2 class="flex justify-center mb-10 md:mb-[100px]">
        <?php echo wp_get_attachment_image($image_title, 'full', false, ['class' => 'max-w-[200px] md:max-w-none']); ?>
    </h2>
    <div class="container flex flex-col md:flex-row">
        <div>
            <span>
                <?php echo $esc_sub_title; ?>
            </span>
            <h3>
                <?php echo $esc_title; ?>
            </h3>
        </div>
        <div>
            <div >
                <?php echo $esc_summary; ?>
            </div>
        </div>
    </div>
</section>