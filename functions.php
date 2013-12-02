<?php
add_theme_support( 'post-thumbnails' );

function limit_posts_per_archive_page() {
	if ( is_search() )
		$limit = 20;
	else
		$limit = get_option('posts_per_page');

	set_query_var('posts_per_archive_page', $limit);
}
add_filter('pre_get_posts', 'limit_posts_per_archive_page');

register_sidebar( array(
	'name'          => __( 'Main Sidebar', 'seanchoe' ),
	'id'            => 'main_sidebar',
	'description'   => __( 'Main Sidebar', 'seanchoe' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
) );
?>