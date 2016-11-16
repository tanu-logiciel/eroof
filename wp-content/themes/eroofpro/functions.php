<?php 

/* Enqueue Stylesheets */
function eroof_scripts() {
	wp_enqueue_style('style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('style-fonts', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('style-new', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('style-custom', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'eroof_scripts');

/* Resgister menus */
register_nav_menus( array(
	'primary_menu' => 'Primary Menu',
	'footer_menu' => 'Footer Menu',
) );

/* Passing active class to menus */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/* Register Sidebars */
function eroof_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer1'),
        'id'            => 'footer1',
        'description'   => __( 'Footer column 1', 'textdomain' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer2'),
        'id'            => 'footer2',
        'description'   => __( 'Footer column 2', 'textdomain' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer3'),
        'id'            => 'footer3',
        'description'   => __( 'Footer column 3', 'textdomain' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ) );
}
add_action( 'widgets_init', 'eroof_widgets' );

/* Register custom post types */
function eroof_post_type() {

    register_post_type( 'eroof_faq',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'FAQ' ),
                'singular_name' => __( 'FAQ' )
            ),
            'public' => true,
            'rewrite' => array('slug' => 'faq'),
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'eroof_post_type' );

//Customize the body class 
function heycodetech_customize_body_class( $classes ) {
global $post;
if ($post ) {
     $classes[] = $post->post_type . ' &nbsp;  page-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'heycodetech_customize_body_class' );