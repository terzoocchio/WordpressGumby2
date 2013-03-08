<?php


// Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'gumbypress2', TEMPLATEPATH . '/languages' );
 
    $locale = get_locale();
    $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');	
	
// Add Menu Support and create 2 Menus
add_theme_support('menus');
register_nav_menus(array(
	'primary_navigation' => __('Primary Navigation'),
	'utility_navigation' => __('Utility Navigation')
));	

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="sidebar-section twelve columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="four columns widget %2$s"><div class="footer-section">',
		'after_widget' => '</div></article>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}

// turns captions into HTML5 validated figure/figcaption structure
add_filter('img_caption_shortcode', 'orangegnome_img_caption_shortcode_filter',10,3);
function orangegnome_img_caption_shortcode_filter($val, $attr, $content = null) {
  extract(shortcode_atts(array(
  	'id'	=> '',
  	'align'	=> '',
  	'width'	=> '',
  	'caption' => ''
  ), $attr));

  if ( 1 > (int) $width || empty($caption) )
  	return $val;

  return '<figure id="' . $id . '" class="wp-caption ' . esc_attr($align) . '" style="width: ' . $width . 'px;">'
  . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}

?>