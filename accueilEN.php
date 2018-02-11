<?php /* Template Name: accueilEN  */ ?>

<?php get_header(); ?>
               <nav class="col-xs-12 presentation">
                    <ul>
                        <a href="/lequipe/"><li class="col-md-3">
                            <img src="http://bevoluntary.org/wp-content/uploads/2018/01/team.png" alt="Icone d'une équipe">
                            <h4>Notre équipe</h4>
                            <p>Apprenez-en plus sur l'équipe de BeVoluntary consituée de 5 membres !</p>
                        </li></a>
                        <a href="/galerie/"><li class="col-md-3">
                            <img src="http://bevoluntary.org/wp-content/uploads/2018/01/galerie.png" alt="Icone galerie">
                            <h4>galerie</h4>
                            <p>Découvrez les merveilleux paysages que nous avons pris en photo lors de nos voyages humanitaires !</p>
                        </li></a>
                        <a href="/boutique/"><li class="col-md-3">
                            <img src="http://bevoluntary.org/wp-content/uploads/2018/01/shop.png" alt="Icone boutique">
                            <h4>Boutique</h4>
                            <p>Prochainement disponible ! Restez à l'affût.</p>
                        </li></a>
                        <a href="/participer/"><li class="col-md-3">
                            <img src="http://bevoluntary.org/wp-content/uploads/2018/01/don.png" alt="Icone don">
                            <h4>Faire un don</h4>
                            <p>Souhaitez-vous faire un don à notre association ? Vous abonnez à la newsletter ? C'est par ici !</p>
                        </li></a>
                    </ul>
                </nav>
                
                <section class="col-xs-12 actualites">
                    <h2 class="col-md-6">Actualités</h2>
                    <div class="col-xs-12">
                        <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('showposts=4');
                        ?>
                        
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        
                            <article class="col-xs-12 col-md-4 col-md-offset-1">
                               <div class="border"><?php the_post_thumbnail(); ?></div> 
                                <div class="knowMore">
                                    <p><a href="<?php the_permalink() ?>">En savoir plus</a></p>
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
                    <h2 class="col-md-6">Nos partenaires</h2><div class="col-md-6"></div>
                    <nav class="col-md-12">
                        <?php echo do_shortcode('[sponsors images=yes, description=no ]'); ?>
                    </nav>
                </section>
                <section class="col-xs-12 col-md-6 adresser_nous">
                    <h2 class="col-xs-12">S'adresser à nous</h2>
                    <ul class="col-xs-12" >
                        <li>Notre adresse: 24 rue du Buisson - 45130 Le Bardon</li>
                        <li>Email: </li>                        
                    </ul>
                    <div class="col-xs-12"><a  href="<?php bloginfo('url'); ?>/contact/">Nous contacter</a></div>
                </section>
                <section class="col-xs-12 col-md-6 newsletter">
                    <h2 class="col-xs-12">Newsletter</h2>
                    <div class="col-xs-12">
                        <?php  $form_widget = new \MailPoet\Form\Widget();
                                echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
                        ?>
                    </div>
                </section>
<?php get_footer(); ?>