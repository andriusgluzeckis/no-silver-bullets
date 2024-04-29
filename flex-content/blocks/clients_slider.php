<?php
	$slides = get_sub_field('slides')
?>
<div class="flex justify-center items-center clients-wrapper py-[33px] md:py-[66px]">
  <div class="flex items-center w-full relative overflow-hidden">
	<?php foreach($slides as $slide) : ?>
		<div class="box relative flex flex-shrink-0 items-center justify-center m-0 p-0 w-1/2 sm:w-1/3 md:w-1/5">
			<div class="flex w-full h-full flex-grow items-center justify-center">
				<img class="w-[150px]" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
			</div>
		</div>
	<?php endforeach; ?>
	<?php foreach($slides as $slide) : ?>
		<div class="box relative flex flex-shrink-0 items-center justify-center m-0 p-0 w-1/2 sm:w-1/3 md:w-1/5">
			<div class="flex w-full h-full flex-grow items-center justify-center">
				<img class="w-[150px]" src="<?php echo wp_get_attachment_image_url($slide['image'], 'full'); ?>" alt="<?php _e('Client', 'no-silver-bullets'); ?>" />
			</div>
		</div>
	<?php endforeach; ?>
  </div>
  
</div>