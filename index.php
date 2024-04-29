<?php get_header(); ?>

<?php if (is_404()) : ?>
    <?php get_template_part('404'); ?>
<?php else : ?>
    <main>
        <?php get_template_part('flex-content/blocks'); ?>
    </main>
<?php endif; ?>

<?php get_footer(); ?>