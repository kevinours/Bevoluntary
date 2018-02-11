<?php get_header();?>

  <section class="post col-md-12">
    <h2 class="post-title col-xs-12 col-md-6">Page inconnue</h2>
    <div class="post-content col-xs-12">
        <div id="timer" class="display"></div>
        <script src=""></script>
    </div>
</section>
<?php 
    wp_enqueue_script( 'timer' );
    get_footer(); 
?>