<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="post">
    <h2 class="post-title col-xs-12 col-md-6"><?php the_title(); ?></h2>
    <p class="post-info col-xs-12">
      Posté le <?php the_date(); ?>
    </p>
    <div class="post-content col-xs-12">
      <?php the_content(); ?>
    </div>
   <div class="post-comments col-xs-12">
     <?php comments_template(); ?>
   </div> 
  </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>