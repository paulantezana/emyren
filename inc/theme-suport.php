<?php
    // Registe Nav Menu
    register_nav_menus([
        'menu_principal'    => 'Menú Principal',
        'menu_footer'       => 'Menú Inferior'
    ]);
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );

    function widgets_activation(){
        register_sidebar([
            'name'          => __( 'productos', 'emyren' ),
            'id'            => 'product__widget',
            'description'   => __( 'Categorias de los productos', 'emyren' ),
            'before_widget' => '<section id="%1$s" class="sidebar %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="sidebar__title">',
            'after_title'   => '</h2>',
            ]
        );
        register_sidebar( [
            'name'          => __( 'sidebar', 'emyren' ),
            'id'            => 'sidebar__widget',
            'description'   => __( 'Categorias de los productos', 'emyren' ),
            'before_widget' => '<section id="%1$s" class="sidebar %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="sidebar__title">',
            'after_title'   => '</h2>',
        ] );
    }
    add_action('widgets_init','widgets_activation');

    // ============================= Add support Image Svg =============================
    add_filter('upload_mimes', 'my_upload_mimes');
    function my_upload_mimes($mimes = array()) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }



function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{



if ( !is_admin() ) {
    global $id;
    $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
    return count( $comments_by_type['comment'] );
    } else {
    return $count;
}
}