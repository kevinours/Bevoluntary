<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <section class="col-xs-12">
		<h2 class="pagetitle col-xs-12 col-md-6">Résultats de la recherche pour : "<?php echo $s ?>"</h2>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post col-xs-12" id="post-<?php the_ID(); ?>">
				<p class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien vers<?php the_title(); ?>"><?php the_title(); ?></a></p>
				<?php
				// Support for "Search Excerpt" plugin
				// http://fucoder.com/code/search-excerpt/
				if ( function_exists('the_excerpt') && is_search() ) {
					the_excerpt();
				} ?>
				<p class="small">
					<?php the_time('j F Y') ?>
				</p>
			</div>
			<hr>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>
    </section>
<?php else : ?>
    <section class="col-xs-12">
	    <h2 class="col-xs-12 col-md-6">Aucun résultat pour la recherche : "<?php echo $s ?>".</h2>
	    <p class="col-xs-12">Effectuer une autre recherche ?</p>
	    <div class="col-xs-12 col-md-12"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>