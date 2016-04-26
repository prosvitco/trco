<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


//Clean up the_excerpt()
function excerpt_more() {
  return '';
}
add_filter('excerpt_more', __NAMESPACE__ . '\excerpt_more');

function new_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');



if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );         // name, width, height, crop 
  add_image_size( 'one-thumb', 430, 370, true ); // 1x1
  add_image_size( 'two-thumb', 430, 800, true ); // 1x2
  add_image_size( 'three-thumb', 920, 370, true ); // 2x1
  add_image_size( 'four-thumb', 740, 740, true ); // 2x2


    add_filter('image_size_names_choose', 'my_image_sizes');
}


function my_image_sizes($sizes) {
    $addsizes = array(
        "one-thumb" => __( "Square image"),
        "two-thumb" => __( "Vertical image"),
        "three-thumb" => __( "Horizontal image"),
        "four-thumb" => __( "Square image"),
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}


if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
    
}


// Register Custom Post Type
function asbestos_exposure_portfolios_post_type() {

  $labels = array(
    'name'                  => 'Portfolios',
    'singular_name'         => 'Portfolio',
    'menu_name'             => 'Portfolios',
    'name_admin_bar'        => 'Portfolio',
    'archives'              => 'Item Archives',
    'parent_item_colon'     => 'Parent Item:',
    'all_items'             => 'All Items',
    'add_new_item'          => 'Add New Item',
    'add_new'               => 'Add New',
    'new_item'              => 'New Item',
    'edit_item'             => 'Edit Item',
    'update_item'           => 'Update Item',
    'view_item'             => 'View Item',
    'search_items'          => 'Search Item',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into item',
    'uploaded_to_this_item' => 'Uploaded to this item',
    'items_list'            => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list'     => 'Filter items list',
  );
  $args = array(
    'label'                 => 'Portfolio',
    'description'           => 'Post Type Description',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'taxonomies'            => array( 'asbestos_locations' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
  );
  register_post_type( 'asbestos_post_type', $args );

}
add_action( 'init', 'asbestos_exposure_portfolios_post_type', 0 );

// Register Custom Taxonomy
function asbestos_exposure_portfolios_location_taxonomy() {

  $labels = array(
    'name'                       => 'Categories',
    'singular_name'              => 'Category',
    'menu_name'                  => 'Categories',
    'all_items'                  => 'All Items',
    'parent_item'                => 'Parent Item',
    'parent_item_colon'          => 'Parent Item:',
    'new_item_name'              => 'New Category',
    'add_new_item'               => 'Add New Item',
    'edit_item'                  => 'Edit Item',
    'update_item'                => 'Update Item',
    'view_item'                  => 'View Item',
    'separate_items_with_commas' => 'Separate items with commas',
    'add_or_remove_items'        => 'Add or remove items',
    'choose_from_most_used'      => 'Choose from the most used',
    'popular_items'              => 'Popular Items',
    'search_items'               => 'Search Items',
    'not_found'                  => 'Not Found',
    'no_terms'                   => 'No items',
    'items_list'                 => 'Items list',
    'items_list_navigation'      => 'Items list navigation',
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'asbestos_locations', array( 'asbestos_post_type' ), $args );

}
add_action( 'init', 'asbestos_exposure_portfolios_location_taxonomy', 0 );


if ( ! function_exists('reviews_post_type') ) {
// Register Custom Post Type
function reviews_post_type() {

  $labels = array(
    'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Testimonials', 'text_domain' ),
    'name_admin_bar'        => __( 'Testimonial Post Type', 'text_domain' ),
    'archives'              => __( 'Testimonial Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
    'all_items'             => __( 'All Testimonials', 'text_domain' ),
    'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Testimonial', 'text_domain' ),
    'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
    'update_item'           => __( 'Update Testimonial', 'text_domain' ),
    'view_item'             => __( 'View Testimonial', 'text_domain' ),
    'search_items'          => __( 'Search Testimonial', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $rewrite = array(
    'slug'                  => 'reviews',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Testimonial', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'taxonomies'            => array( 'testimonials_category', 'testimonials_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
    'menu_position'         => 7,
    'menu_icon'             => 'dashicons-format-status',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'page',
  );
  register_post_type( 'post_type_review', $args );

}
add_action( 'init', 'reviews_post_type', 0 );
}


/********************* breadcrumbs *********************/
/* from http://papermashup.com/how-to-display-breadcrumbs-on-your-site-using-php/ */

function breadcrumbs($separator = ' ', $home = 'Home') {

    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base_url = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = array("<li><a href=\"$base_url\">$home</a></li>");

    $last = end(array_keys($path));

    foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_'), Array('', ' '), $crumb));
        if ($x != $last){
            $breadcrumbs[] = '<li><a href="'.$base_url.$crumb.'">'.$title.'</a></li>';
        }else{
            $breadcrumbs[] = '<li>'.$title.'</li>';
        }
    }

    return implode( $separator, $breadcrumbs );
}

/********************* / breadcrumbs *********************/


//Number of views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4)
{  
  $showitems = ($range * 2) + 1;  
  global $paged;
  if(empty($paged)) $paged = 1;
    if($pages == '')
    {
      global $wp_query; 
      $pages = $wp_query->max_num_pages;
      if(!$pages)
      {
        $pages = 1;
      }
    }   
  if(1 != $pages)
    {
     echo '<div class="text-center">'; 
     echo '<nav><ul class="pagination">';

     if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

     if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";

     for ($i=1; $i <= $pages; $i++)
     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
      {
        echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>
      </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
    }
  }

  if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";  

  if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

  echo "</ul></nav>";
  echo "</div>";
  }
}

/*
include_once( ABSPATH . 'wp-admin/includes/image.php' );
function regenerate_all_attachment_sizes() {
    $args = array( 'post_type' => 'attachment', 'numberposts' => 100, 'post_status' => null, 'post_parent' => null, 'post_mime_type' => 'image' ); 
    $attachments = get_posts( $args );
    if ($attachments) {
        foreach ( $attachments as $post ) {
            $file = get_attached_file( $post->ID );
            wp_update_attachment_metadata( $post->ID, wp_generate_attachment_metadata( $post->ID, $file ) );
        }
    }       
}
regenerate_all_attachment_sizes();
*/