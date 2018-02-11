<?php if (have_posts()) : ?>
  <!-- Si j'ai des Posts, j'affiche cette partie -->
  <?php while (have_posts()) : the_post(); ?>
    <!-- Pour CHAQUE Post, j'affiche ça -->
    <div class="post col-xs-12">
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-info col-xs-12">
        Posté le <?php echo get_the_date(); ?>.
      </p>
      <div class="post-content col-xs-12">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
    <section class="col-xs-12">
        <p>Aucun résultat pour cette recherche</p>
    </section>
<?php endif; ?>