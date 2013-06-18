<?php
add_theme_support( 'post-thumbnails' );

function isMobile() {
	if(
		(strstr($_SERVER['HTTP_USER_AGENT'],'Android') && strstr($_SERVER['HTTP_USER_AGENT'],'Mobile')) ||
		strstr($_SERVER['HTTP_USER_AGENT'],'webOS') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'BlackBerry') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'Windows Phone')
	) {
		return TRUE;
	}
	else {
		return FALSE;
	}
}

function limit_posts_per_archive_page() {
	if ( is_search() )
		$limit = 20;
	else
		$limit = get_option('posts_per_page');

	set_query_var('posts_per_archive_page', $limit);
}
add_filter('pre_get_posts', 'limit_posts_per_archive_page');
?>