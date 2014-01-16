<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js", array(), "2.0.3", false);
  wp_enqueue_script('jquery');
}
register_nav_menus( array(
	'primary' => 'Primary Navigation',
	'footer' => 'Footer Navigation'
));
add_action( 'init', 'create_promo_tiles' );
function create_promo_tiles() {
	register_post_type( 'promo_tiles',
		array(
			'labels' => array(
				'name' => __( 'Promo Tiles' ),
				'singular_name' => __( 'Promo Tile' )
			),
		'public' => false,
		'has_archive' => false,
		'show_ui' => true
		)
	);
}
add_action( 'init', 'create_job_listings' );
function create_job_listings() {
	register_post_type( 'job_listings',
		array(
			'labels' => array(
				'name' => __( 'Job Listings' ),
				'singular_name' => __( 'Job Listing' )
			),
		'public' => true,
		'has_archive' => true,
		'show_ui' => true
		)
	);
}
function cta_func( $atts, $content = null) {
	extract( shortcode_atts( array(
		'label' => 'Learn More',
		'href' => '#',
		'pageid' => '-1'
	), $atts ) );
	$retstring = '<a href="';
	if($pageid == -1)
	{
		$retstring .= $href;
	} else {
		if($pg = get_page_uri($pageid)) {
			$retstring .= '/'.$pg;
		} else {
			return "CTA has invalid page ID.";
		}
	}
	$retstring .= '"><span class="light-grey-button">'.$label.'</span></a>';
	return $retstring;
}
add_shortcode( 'cta', 'cta_func' );
?>