<?php 
//adding css
function load_stylesheets(){
    
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
        
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), false, 'all');
    
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
    
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
     
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array(), false, 'all');

    
}

add_action('wp_enqueue_scripts','load_stylesheets');

//adding javascript
function addjs(){
    
 
    wp_enqueue_script('jquerymm' , get_template_directory_uri() . '/js/jquery.js',  array(), '1.0.0', true);
    
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js',  array(), '1.0.0', true);    

     
}

add_action('wp_enqueue_scripts','addjs');

require get_template_directory() . '/includes/customizer.php';




add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
) );

function wpb_last_menu_class($items) {
    $items[count($items)]->classes[] = 'btn';
    return $items;
}
add_filter('wp_nav_menu_objects', 'wpb_last_menu_class');


function custom_post_types(){
$args = array(
        'labels' => array(
            'name' => 'Facilities',
            'singular_name' => 'Facility'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'menu_position' => 5,
    );

    register_post_type('Facilities',$args);

$args = array(
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'menu_position' => 5,
    );

    register_post_type('Events',$args);

    
    $args = array(
        'labels' => array(
            'name' => 'News',
            'singular_name' => 'News'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields','comments'),
        'menu_position' => 5,

    );

    register_post_type('News',$args);
   
    $args = array(
        'labels' => array(
            'name' => 'Notices',
            'singular_name' => 'Notice'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'menu_position' => 5,

    );

    register_post_type('Notices',$args);

    $args = array(
        'labels' => array(
            'name' => 'photos',
            'singular_name' => 'photo'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'menu_position' => 5,

    );

    register_post_type('photos',$args);

    $args = array(
        'labels' => array(
            'name' => 'videos',
            'singular_name' => 'video'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'menu_position' => 5,

    );

    register_post_type('videos',$args);    
    
}

add_action('init','custom_post_types');



function social_media() {
 
if (is_single()) {
     global $post;
    $permalink = get_permalink($post->ID);
    $title = get_the_title();
?>
    <a class="share-facebook" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>" target="_blank">
        <i class="fab fa-facebook-f mr-2"></i>
    </a>
    <a class="share-twitter" href="http://twitter.com/share?text='<?php $title; ?>'"url='<?php echo $url; ?>'"
             target="_blank"><i class="fab fa-twitter"></i>
        </a>
    
        <?php }
}

function pagination() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link(__('<i class="fas fa-chevron-left"></i>' )) );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link(__( '<i class="fas fa-chevron-right"></i>'  )) );
 
    echo '</ul></div>' . "\n";
 
}






