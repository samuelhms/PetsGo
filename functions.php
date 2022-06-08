<?php
function my_login_logo() { ?>

<style type="text/css">
body.login {
    background:#00CCFF;
}
.navbar-brand.d-block.d-lg-none{ max-width: 20px;}

body.login div#login {}

body.login div#login h1 {}

body.login div#login form#loginform {}

body.login div#login p#nav {}

body.login div#login p#backtoblog {}


#login h1 a,
.login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri();
    ?>/images/pet-shop-logo.png);
    height: 120px;
    width: 320px;
    background-size: 120px 120px;
    background-repeat: no-repeat;
    padding-bottom: 30px;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
#ocultar barra
function OcultarBarra(){
    return false;
}
add_filter('show_admin_bar','OcultarBarra');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	
add_theme_support('custom-logo', array(
       
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true 
    )
);

function pestgo_wp_styles(){
    wp_enqueue_style('style_css',get_stylesheet_uri());
    
    wp_enqueue_style('stylemin_css',get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('browser_js',get_template_directory_uri() . '/assets/js/main.js', array('jquery'),'',true);
    
}
add_action( 'wp_enqueue_scripts', 'pestgo_wp_styles' );
