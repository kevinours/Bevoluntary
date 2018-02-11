<?php get_header(); ?>
                <nav class="col-xs-12 presentation">
                    <ul>
                        <?php  
                        $currentlang = pll_current_language();
                        $currentlang2 = get_bloginfo('language');
                       
                        $custom_query = new WP_Query(array('post_type' => 'index_icone-type',
                                                                     'posts_per_page' => -1)); 
                        
                    while($custom_query->have_posts()) : $custom_query->the_post(); 
                            $info=get_post_meta($post->ID, false);
                            foreach($info as $key=>$val)
                            {
                                if($key=='langue'){
                                    $langue = $val[0];
                                }
                                if($key=='Id_link'){
                                    $id=$val[0];
                                }
                            }
                                
                                if($currentlang2==$langue){
                                    ?>
                                    <a href="<?php echo get_page_link($id); ?>">
                                        <li class="col-md-3">
                                            <?php
                                                the_post_thumbnail('thumbnail', array('class' => 'zoom_cadre'));
                                                ?><h4><?php the_title();?> </h4> <?php
                                                the_content();
                                            ?>
                                        </li>
                                    </a>
                                    
                                   <?php 
                                }
                                

                 endwhile; ?>
                <?php wp_reset_postdata(); // reset the query ?>
                    </ul>
                </nav>
                <section class="col-xs-12 actualites">
                    <?php
                            $recentPosts = new WP_Query(array ('post_type' => 'post','lang' => $currentlang));
                            $recentPosts->query('showposts=4');
                    
                         if($currentlang=='fr' && $recentPosts->have_posts()){ echo '<h2 class="col-md-6">Actualités</h2>'; }
                         if($currentlang=='en' && $recentPosts->have_posts()) { echo '<h2 class="col-md-6">News</h2>';}?>
                    
                    <div class="col-xs-12">
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        
                            <article class="col-xs-12 col-md-4 col-md-offset-1">
                               <div class="border"><?php the_post_thumbnail(); ?></div> 
                                <div class="knowMore">
                                    <p class="zoom_cadre"><a href="<?php the_permalink() ?>">En savoir plus</a></p>
                                </div>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </section>
                
                <section class="slider">
                    <?php echo do_shortcode('[metaslider id="142"]'); ?>
                </section>
                
                <section class="col-xs-12 partenaires">
                    <?php
                        if($currentlang=='fr'){ echo '<h2 class="col-md-6">Nos partenaires</h2><div class="col-md-6"></div>'; }
                         if($currentlang=='en') { echo '<h2 class="col-md-6">Our partners</h2><div class="col-md-6"></div>';}?>
                    <nav class="col-md-12">
                        <?php echo do_shortcode('[sponsors images=yes, description=no ]'); ?>
                    </nav>
                </section>
                <section class="col-xs-12 col-md-6 adresser_nous">
                    <h2 class="col-xs-12">S'adresser à nous</h2>
                    <ul class="col-xs-12" >
                        <li>Notre adresse: </br>
                        <?php if( get_theme_mod( 'rue' )!=='' ): ?>
                            <?php echo  get_theme_mod( 'rue' ) ?>
                        <?php endif; ?>
                        </br>
                        <?php if( get_theme_mod( 'CP' )!=='' ): ?>
                            <?php echo  get_theme_mod( 'CP' ) ?>
                        <?php endif; ?> <?php if( get_theme_mod( 'ville' )!=='' ): ?>
                            <?php echo  get_theme_mod( 'ville' ) ?>
                        <?php endif; ?>
                        </br>
                        <?php if( get_theme_mod( 'pays' )!=='' ): ?>
                            <?php echo  get_theme_mod( 'pays' ) ?>
                        <?php endif; ?></li>
                    </ul>
                    
                    

                    
                    
                    <div class="col-xs-12"><a  href="<?php bloginfo('url'); ?>/contact/">Nous contacter</a></div>
                </section>
                <section class="col-xs-12 col-md-6 newsletter">
                    <h2 class="col-xs-12">Newsletter</h2>
                    <div class="col-xs-12">
                        <?php
                             if($currentlang=='fr'){
                                $form_widget = new \MailPoet\Form\Widget();
                               echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
                             } 
                             if($currentlang=='en'){
                                $form_widget = new \MailPoet\Form\Widget();
                               echo $form_widget->widget(array('form' => 4, 'form_type' => 'php'));
                             } 
                         ?>
                    </div>
                </section>
<?php get_footer(); ?>