<?php $session_number = 0; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- JQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php wp_head(); ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<link rel="icon" type="image/png" href="/favicon.png" />
<link rel="icon" type="image/gif" href="/favicon.gif" />
<link rel="alternate" type="application/rss+xml" title="Sean's Visual Journal" href="<?php bloginfo('rss2_url'); ?>" />

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.fancybox').fancybox();
	});
</script>

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6592993-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

<div class="wrapper">					
	<div class="main">
	<div class="nav_wrapper">
		<div class="nav_mobile">
			<a href="javascript:void(0)" class="hamburger" id="mobile_menu_button"></a>
			<div class="logo_link_mobile"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Sean Choe Logo" /></a></div>
			<div class="nav_right_shoulder"></div>
		</div>
		<div class="logo desktop">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Sean Choe Logo" /></a>
		</div>
		
		<div class="nav_hide">
			<div class="nav_menu">
				<ul>
					<li><a href="<?php echo home_url(); ?>"<?php if (is_home()) echo " class='active'"?>>Comic</a></li>
					<li><a href="<?php echo home_url(); ?>/works"<?php if (is_page('works')) echo " class='active'"?>>Works</a></li>
					<li><a href="<?php echo home_url(); ?>/about"<?php if (is_page('about')) echo " class='active'"?>>About</a></li>
				</ul>
			</div>
			<div class="nav_sub_menu">
				<span><a href="<?php echo get_bloginfo('rss2_url'); ?>">RSS</a></span><span class="divider">/</span>
				<span><a href="http://eepurl.com/JTvA5">Email Updates</a></span><span class="divider">/</span>
				<span><a href="http://twitter.com/seanchoe">Twitter</a></span>
			</div>
		</div>
	</div>