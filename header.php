<?php
// Cookie
if (isset($_GET["ln"])) {
	if ($_GET["ln"] != $_COOKIE["language"]) {
		setcookie("language", $_GET["ln"], time() + (20 * 365 * 24 * 60 * 60));
	}
}

// Language
$seanchoe_language;
if (isset($_GET["ln"])) {
	$seanchoe_language = $_GET["ln"];
}
else {
	if (isset($_COOKIE["language"])) {
		$seanchoe_language = $_COOKIE["language"];
	}
	else {
		$seanchoe_language = "en";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<meta name="description" content="See Sean Choe's comic, blog and works">

<script type="text/javascript">
	var ua = navigator.userAgent;
	
	//For iPhone, change meta
	if (ua.match(/iPhone/i) !== null) {
		document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />');
	}		
</script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
<link rel="icon" type="image/png" href="/images/favicon.png" />
<link rel="icon" type="image/gif" href="/images/favicon.gif" />

<!-- JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<?php if ($seanchoe_language == "kr") : ?>
<link rel="alternate" type="application/rss+xml" title="Sean's Visual Journal" href="http://seanchoe.com/?feed=rss2&cat=6,8" />
<?php else : ?>
<link rel="alternate" type="application/rss+xml" title="Sean's Visual Journal" href="http://seanchoe.com/?feed=rss2&cat=5,7" />
<?php endif; ?>

<script type="text/javascript">
	$(document).ready(function() {
		var ua = navigator.userAgent;
	
		// iPhone image size
		if (ua.match(/iPhone/i) !== null) {
			$(document).find('img').each(function() {
				//$(this).hide();
				//var currentWidth = $(this).width();
				if ($(this).width() > 300) {
					$(this).css({
						'max-width': 300,
						'max-height': $(this).height() * (300 / $(this).width())
					});
				}
				//$(this).maxHeight($(this).height * ($(this).width() / currentWidth));
			});
		}
		
		fitSidebarHeight();
	});
	
	$(window).load(function() {
		fitSidebarHeight();
	});
	
	// iPad sidebar height
	function fitSidebarHeight() {
		var ua = navigator.userAgent;
	
		if (ua.match(/iPad/i) !== null) {
			$('#sidebar_wrapper').css({
				'min-height': $('#main').height() + 40
			});
		}
	}
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
<!-- Facebook SDK Starts -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=267982233303113";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook SDK Ends -->
<?php get_sidebar(); ?>
<div id="wrapper">
	<div id="main">