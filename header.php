
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title><?php if( is_404() ) {
    echo 'Page non trouvée ';
} else {
    wp_title( '|', true, 'right' );
} ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); ?>
    </head>
    <body id="body-position" <?php body_class(); ?>>
        <?php $currentlang = pll_current_language();?>
        <div class="container-fluid">
            <header class="row">
                <?php if (is_home()) : ?>
                        <style>
                            header #banniere
                            {
                                background: url("<?php if( get_theme_mod( 'banniere' )!=='' ): ?>
                                            <?php echo esc_url( get_theme_mod( 'banniere' )) ?>
                                                    <?php endif; ?>") ;
                                background-repeat: no-repeat;
                                background-position: center;
                                background-attachment: fixed;
                                background-size: auto  ;
                                padding: 0;
                            }
                        </style>    


                     <div id="banniere" class="col-xs-12" >        
                        <nav class="topnav" id="myTopnav">
                            <?php if( get_theme_mod( 'header_logo' )!=='' ): ?>
                                <div class="col-xs-10 col-md-2 logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                       <img src="<?php echo esc_url( get_theme_mod( 'header_logo' )) ?>" alt="logo">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <ul class="col-xs-2">
                                <li class="icon"><a  href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
                            </ul>
                            <div class="col-xs-12 col-md-10">
                                <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
                            </div>
                        </nav>
                        
                        <h1 id="titre-site" class="aidons"><?php 
                            if($currentlang=='fr')
                                bloginfo('description'); 
                            if($currentlang=='en'){
                                echo 'We help others together';
                            }
                        ?></h1>
                    </div>
                <?php else : ?>
                <div class="col-xs-12" style="padding:0">
                  <nav class="topnav black" id="myTopnav"> 
                        <?php if( get_theme_mod( 'header_logo' )!=='' ): ?>
                            <div class="col-xs-10 col-md-2 logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                       <img src="<?php echo esc_url( get_theme_mod( 'header_logo' )) ?>" alt="logo">
                                    </a>
                                </div>
                        <?php endif; ?>
                        <ul>
                            <li class="icon col-xs-2"><a  href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
                        </ul>
                        <div class="col-xs-12 col-md-10">
                            <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
                        </div>
                    </nav>
                </div>
                <?php endif; ?> 
            </header>            
            <main class="row" id="blocPrincipal">