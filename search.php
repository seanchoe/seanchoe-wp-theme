<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : ?>
			<h2 class="search_result_header">Search Results for "<?php echo get_search_query(); ?>"</h2>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php if (is_new_day()) :?>
				<div class="post_date"><?php the_date(); ?></div>
			<?php endif; ?>
			<div class="search_result_row"><span class="search_result_category"><?php the_category(' '); ?> | </span>&nbsp;&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<?php endwhile; ?>
			<div class="page_navigation">
				<div class="previous"><?php echo previous_posts_link('< Previous'); ?></div>
				<div class="next"><?php echo get_next_posts_link('Next >'); ?></div>
			</div>	
<?php else :
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
	echo "<h3>검색 결과가 없습니다.</h3>";
}
else {
	echo "<h3>No Search Result</h3>";
}

endif; ?>
</div><!-- #content ends -->
<?php get_footer(); ?>
