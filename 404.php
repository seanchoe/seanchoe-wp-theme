<?php get_header(); ?>
<div id="content">

<?php
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

if ($seanchoe_language == "kr") {
	include('http://seanchoe.com/wordpress/wp-content/themes/seanchoe/empty_kr.php');
}
else {
	include('http://seanchoe.com/wordpress/wp-content/themes/seanchoe/empty_en.php');
}
?>
</div><!-- #content ends -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
