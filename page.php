<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="post col-xs-12">
    <h2 class="post-title col-xs-12 col-md-6"><?php the_title(); ?></h2>
    <div class="post-content col-xs-12">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>