<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<?php wp_head(); ?>

<?php
if (isMobile()) {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />';
}
?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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

<script type="text/javascript">
<?php
if (isMobile()) {
	echo "var isMobile = true;";
}
else {
	echo "var isMobile = false;";
}
?>	
</script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
<link rel="icon" type="image/png" href="/images/favicon.png" />
<link rel="icon" type="image/gif" href="/images/favicon.gif" />
<link rel="alternate" type="application/rss+xml" title="Sean's Visual Journal" href="http://seanchoe.com/?feed=rss2" />

<script type="text/javascript">
	$(document).ready(function() {
		var ua = navigator.userAgent;
	
		// iPhone image size
		if (ua.match(/iPhone/i) !== null) {
			$(document).find('img').each(function() {
				if ($(this).width() > 300) {
					$(this).css({
						'max-width': 300,
						'max-height': $(this).height() * (300 / $(this).width())
					});
				}
			});
			
			$(document).find('.wp-caption').each(function() {
				if ($(this).width() > 300) {
					$(this).css({
						'max-width': 300
					});
				}
			});
		}
	});
</script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
	$(document).ready(function() {
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

<div id="wrapper">

	<div id="topbar">
		<div id="topbar_in">
			<div id="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Sean Choe Logo" /></a>
			</div>
			<div class="nav-menu">
				<ul>
					<li><a href="<?php echo home_url(); ?>">Comic</a></li>
					<li><a href="<?php echo home_url(); ?>/works">Works</a></li>
					<li><a href="<?php echo home_url(); ?>/about">About</a></li>
				</ul>
			</div>
			<div id="nav_sub_menu">
				<span><a href="<?php echo get_bloginfo('atom_url'); ?>">RSS</a></span>/
				<span><a href="">Email</a></span>/
				<span><a href="http://twitter.com/seanchoe" target="_blank">Twitter</a></span>
			</div>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
	</div>
					
	<div id="main">