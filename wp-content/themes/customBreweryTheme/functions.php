<?php


//SETTING UP BOOTSTRAP FILES
    function addCustomThemeStyles(){
        // Style
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array(), '0.0.1', 'all');

        // Scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
        wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', array(), '0.0.1', true);
    }
    add_action('wp_enqueue_scripts', 'addCustomThemeStyles');


//ADDING CUSTOM MENUS
    function addCustomMenus(){
        add_theme_support('menus');
        register_nav_menu('header_nav', 'This is the navigation which appears at the top of the page');
        register_nav_menu('footer_nav', 'This is the navigation which appears at the bottom of the page');
    }
    add_action('init', 'addCustomMenus');

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


//ADDING A CUSTOM LOGO
    function addCustomLogo(){
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 300,
            'flex-width' => true,
            'flex-height' => true
        ));
    }
    add_action('init', 'addCustomLogo');


//ADDING A CUSTOM HEADER IMAGE
    register_default_headers( array(
        'defaultImage' => array(
            'url'           => get_template_directory_uri() . '/assets/images/default.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/default.jpg',
            'description'   => __( 'defaultImage', 'customBreweryTheme' )
        )
    ) );
    $defaultImage = array(
    	'default-image'          => get_template_directory_uri() . '/assets/images/default.jpg',
    	'width'                  => 1280,
    	'height'                 => 720,
        'header-text'            => false
    );
    add_theme_support( 'custom-header', $defaultImage );


//ADDING WIDGETS
    function wpsites_before_post_widget( $content ) {
    	if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'before-post' ) && is_main_query() ) {
    		dynamic_sidebar('before-post');
    	}
    	return $content;
    }
    add_filter( 'the_content', 'wpsites_before_post_widget' );

    function register_my_sidebars(){
        register_sidebar(array(
            'id' => 'front_page_sidebar',
            'name' => 'Front Page Sidebar',
            'description' => 'The sidebar which appears on the front page',
            'before_widget' => '<div id="%1$s" class="widget customWidget %2$s">',
            "after_widget" => '</div>',
            'before_title' => '<h3 class="widgetTitle">',
            'after_title' => '</h3>'
        ));
    }
    add_action('widgets_init', 'register_my_sidebars');


//ADDING CUSTOMISEABLE TEXT AND COLOURS
    require get_parent_theme_file_path('./addons/custom_customiser.php');


//ADDING POST FORMATS
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video' , 'link') );


//ADDING CUSTOM PRODUCT POST TYPE
     function add_product_post_type(){
        $labels = array(
            'name' => _x('Products', 'post type name', 'customBreweryTheme'),
            'singular_name' => _x('Products', 'post types singluar name', 'customBreweryTheme'),
            'add_new_item' => _x('Add New Product', 'adding new product', 'customBreweryTheme')
        );

        $args = array(
            'labels' => $labels,
            'description' => 'a post type for the products',
            'public' => true,
            'hierarchical' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => false,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-screenoptions',
            'supports' => array(
                'title',
                'thumbnail'
            ),
            'query_var' => true,
            'supports' => array( 'title', 'editor', 'thumbnail')
        );

        register_post_type('product', $args);
        add_theme_support( 'post-thumbnails' );
        // post_type_supports( $allProducts, 'title', 'comments', 'author', 'thumbnail' );
        // post_type_supports( $post_type, $supports );
    }
     add_action('init', 'add_product_post_type');


//GETTING THE EXCERPT
    function new_excerpt_more( $more ) {
    	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('<br>Read More', 'your-text-domain') . '</a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more' );
