<?php get_header(); ?>
    <section class="col-xs-12">
        <h2 class="col-xs-12 col-md-6"><?php single_cat_title(); ?></h2>
        <?php get_template_part('loop'); ?>
    </section>
<?php get_footer(); ?>