<?php
    $slides = get_sub_field('slides');

    if (empty($slides)) {
        return false;
    }
?>

<section class="w-full py-[33px] md:py-[66px] js-clients-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php foreach($slides as $slide) : ?>
                <div class="swiper-slide !h-auto flex items-center">
                    <div class="flex w-full h-full flex-grow items-center justify-center">
                        <img class="w-[150px]" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($slides as $slide) : ?>
                <div class="swiper-slide !h-auto flex items-center">
                    <div class="flex w-full h-full flex-grow items-center justify-center">
                        <img class="w-[150px]" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="w-full py-[33px] md:py-[66px]">
    <div class="w-full relative h-[200px]">
        <div class="flex flex-row absolute top-0 left-0 overflow-hidden w-fit whitespace-nowrap animate-banner">
            <?php for($index=0; $index < 5; $index++) : ?>
                <?php foreach($slides as $slide) : ?>
                    <div class="flex items-center w-1/6">
                        <div class="flex w-full h-full flex-grow items-center justify-center">
                            <img class="w-[150px] h-full" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>



<?php
	$slides = get_sub_field('slides')
?>
<div class="flex items-center justify-center clients-wrapper">
  <div class="flex items-center w-full relative overflow-hidden">
	<?php foreach($slides as $slide) : ?>
		<div class="box relative flex items-center justify-center w-1/2 sm:w-1/3 md:w-1/5">
			<div class="flex w-full h-full flex-grow items-center justify-center">
				<img class="" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
			</div>
		</div>
	<?php endforeach; ?>
	<?php foreach($slides as $slide) : ?>
		<div class="box relative flex items-center justify-center w-1/2 sm:w-1/3 md:w-1/5">
			<div class="flex w-full h-full flex-grow items-center justify-center">
				<img class="" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
			</div>
		</div>
	<?php endforeach; ?>
  </div>
</div>