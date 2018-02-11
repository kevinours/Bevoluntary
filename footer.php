            </main>
       
            <footer id="footerFixe" class="row">
                <section class="col-xs-12 col-md-8">
                    <ul>
                        <li class="col-md-4 col-md-offset-2">Réalisation: IUT d'Oléans</li>
                        <li class="col-md-4">Association: Be Voluntary</li>
                    </ul>
                    <?php wp_nav_menu( 
                        array( 
                            'theme_location' => 'Footer',
                            'menu_class' => 'menu_footer col-md-12'
                        ) ); ?>
                </section>
                <section class="col-xs-12 col-md-4">
                    <h3>Nous suivre sur les réseaux sociaux</h3>
                    <nav >
                        <ul>                            
                            <?php if( get_theme_mod( 'facebook_link' )!=='' ): ?><li><a target = "_blank" href="
            <?php echo esc_url( get_theme_mod( 'facebook_link' )) ?>
"><img src="http://bevoluntary.org/wp-content/uploads/2018/01/fb.png" alt="Chaine YouTube de l'association beVoluntary"></a></li><?php endif; ?>

                           <?php if( get_theme_mod( 'youtube_link' )!=='' ): ?> <li><a href="
            <?php echo esc_url( get_theme_mod( 'youtube_link' )) ?> "><img src="http://bevoluntary.org/wp-content/uploads/2018/01/youtube.png" alt="Facebook de l'association beVoluntary"></a></li><?php endif; ?>
                        </ul>
                    </nav>
                </section>
            </footer>
          
        </div>

           	<?php wp_footer(); ?>
    </body>
</html> 