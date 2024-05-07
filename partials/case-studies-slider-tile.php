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