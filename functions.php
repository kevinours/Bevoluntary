<?php
    add_theme_support( 'post-thumbnails' );
    
   add_action('init', 'add_menu');

    function add_menu(){
        register_nav_menu('Top', 'Menu principal');
    }
    
    add_action('init', 'add_footer');

    function add_footer(){
        register_nav_menu('Footer', 'Menu dans le footer');
    }
    
    
    add_filter( 'wp_nav_menu_items','add_search_box', 10, 4 );
    function add_search_box( $items, $args ) {
	// S'il s'agit du menu principal, j'ajoute mon bouton devant
	    if ( 'Top' == $args->theme_location ) {
	    	$items .= '<li id="#searchform">' . get_search_form( false ) . '</li>';
    	}
	return $items;
}


    
    add_theme_support('html5', array('search-form'));
    


    
    function my_assets() {
        $js_directory = get_template_directory_uri() . '/assets/js/';
        
        wp_register_script( 'bootstrap.min', $js_directory . 'bootstrap.min.js', 'jquery', '1.0', true );
        wp_enqueue_script( 'bootstrap.min' );
        
        wp_register_script( 'jquery.min', $js_directory . 'jquery.min.js', 'jquery', '1.0', true );
        wp_enqueue_script( 'jquery.min' );
        
        wp_register_script( 'banniere', $js_directory . 'banniere.js', 'jquery', '1.0', true );
        wp_enqueue_script( 'banniere' );
        
        wp_register_script( 'timer', $js_directory . 'timer.js', 'jquery', '1.0');
        
        wp_register_script( 'menu', $js_directory . 'menu.js', 'jquery', '1.0', true );
        wp_enqueue_script( 'menu' );
        
        wp_register_script( 'footer', $js_directory . 'footer.js', 'jquery', '1.0', true );
        wp_enqueue_script( 'footer' );
        
        $css_directory = get_template_directory_uri() . '/assets/css/';
        
        wp_enqueue_style( 'main', $css_directory . 'main.css' );
        wp_enqueue_style( 'bootstrap.min', $css_directory . 'bootstrap.min.css' );
        wp_enqueue_style( 'BeVolStyle', $css_directory . 'BeVolStyle.css' );
    }
    
    add_action( 'wp_enqueue_scripts', 'my_assets' );





// création du customizer maison
function exemple_customizer($wp_customize) {

    // Ajout d'une section pour le Header
    $wp_customize->add_section(
        'header_section',
            array(
            'title' => 'Logo',
            'description' => 'Personnalisez ici le Header de votre site',
            'priority' => 15,
            )
    );
    // ajout d'un réglage pour le logo
    $wp_customize->add_setting('header_logo');
    
    // ajout d'un contrôle d'upload de Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'header_logo',
            array(
            'label' => 'Upload de logo',
            'section' => 'header_section',
            'settings' => 'header_logo'
            )
        )
    );
}

// accrochage de la fonction de customisation
add_action( 'customize_register', 'exemple_customizer' );

// -------------------------------------------------------------------------------------------


// création du customizer maison
function social_network($wp_customize) {
    

    

    $wp_customize->add_section(
        'footer',
            array(
            'title' => 'Réseaux sociaux',
            'description' => 'Gérer vos réseaux sociaux',
            'priority' => 20,
            )
    );
    
    $wp_customize->add_setting('facebook_link');
    

    $wp_customize->add_control(
        new WP_Customize_Control(
            
        $wp_customize,
        'facebook_link',
            array(
            'label' => 'Facebook',
            'section' => 'footer',
            'settings' => 'facebook_link'
            )
        )
    );
    
    $wp_customize->add_setting('youtube_link');
    

    $wp_customize->add_control(
        new WP_Customize_Control(
            
        $wp_customize,
        'youtube_link',
            array(
            'label' => 'Youtube',
            'section' => 'footer',
            'settings' => 'youtube_link'
            )
        )
    );
    }
// accrochage de la fonction de customisation
add_action( 'customize_register', 'social_network' );

// -------------------------------------------------------------------------------------------


// création du customizer maison
function banniere($wp_customize) {
    

    

    $wp_customize->add_section(
        'banniere',
            array(
            'title' => 'Bannière',
            'description' => 'Changer la Bannière',
            'priority' => 27,
            )
    );
    
    $wp_customize->add_setting('banniere');
    

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'banniere',
            array(
            'label' => 'Upload de la banière du site',
            'section' => 'banniere',
            'settings' => 'banniere'
            )
        )
    );
    

    }
// accrochage de la fonction de customisation
add_action( 'customize_register', 'banniere' );


// -------------------------------------------------------------------------------------------


// création du customizer maison
function adresse($wp_customize) {
    

    

    $wp_customize->add_section(
        'adresse',
            array(
            'title' => 'adresse',
            'description' => 'Changer l\'adresse',
            'priority' => 17,
            )
    );
    
$wp_customize->add_setting('rue');
    

    $wp_customize->add_control(
        new WP_Customize_Control(
            
        $wp_customize,
        'rue',
            array(
            'label' => 'Rue :',
            'section' => 'adresse',
            'settings' => 'rue'
            )
        )
    );
    
$wp_customize->add_setting('CP');
    

    $wp_customize->add_control(
        new WP_Customize_Control(
            
        $wp_customize,
        'CP',
            array(
            'label' => 'Code postal :',
            'section' => 'adresse',
            'settings' => 'CP'
            )
        )
    );

$wp_customize->add_setting('ville');
    $wp_customize->add_control(
        new WP_Customize_Control(
            
        $wp_customize,
        'ville',
            array(
            'label' => 'Ville :',
            'section' => 'adresse',
            'settings' => 'ville'
            )
        )
    );
    
    $wp_customize->add_setting('pays');
    $wp_customize->add_control(
        new WP_Customize_Control(
            
        $wp_customize,
        'pays',
            array(
            'label' => 'Pays :',
            'section' => 'adresse',
            'settings' => 'pays'
            )
        )
    );
    
    }
// accrochage de la fonction de customisation
add_action( 'customize_register', 'adresse' );

// -------------------------------------------------------------------------------------------


//Enregistrement custom type texte icone
// Register Custom Post Type
function index_icones_post_type() {

	$labels = array(
		'name'                  => _x( 'Index icones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Index icone', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Textes sous icones', 'text_domain' ),
		'name_admin_bar'        => __( 'Textes sous icones', 'text_domain' ),
		'archives'              => __( 'Textes sous icones Archives', 'text_domain' ),
		'attributes'            => __( 'Textes sous icones Attributs', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les textes sous icones', 'text_domain' ),
		'add_new_item'          => __( 'Ajout d\'un texte sous une icone', 'text_domain' ),
		'add_new'               => __( 'Ajouter un nouveau', 'text_domain' ),
		'new_item'              => __( 'Nouveau texte sous icones', 'text_domain' ),
		'edit_item'             => __( 'Modifier ce texte', 'text_domain' ),
		'update_item'           => __( 'Mettre à jour ce texte', 'text_domain' ),
		'view_item'             => __( 'Voir le texte', 'text_domain' ),
		'view_items'            => __( 'Voir texte', 'text_domain' ),
		'search_items'          => __( 'Recherche un texte', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Icone utilisée', 'text_domain' ),
		'set_featured_image'    => __( 'Ajouter à ce texte', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Index icone', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'index_icone-type', $args );

}
add_action( 'init', 'index_icones_post_type', 0 );