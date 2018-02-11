<?php get_header(); ?>

<?php if ( is_category() ) : ?>
    <section class="col-xs-12">
        <h2 class="col-xs-12 col-md-6">Catégorie : <?php single_cat_title(); ?></h2>
    </section
<?php endif; ?>
<?php get_template_part('loop'); ?>

<?php get_footer(); ?>