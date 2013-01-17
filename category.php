<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php if (is_new_day()) :?>
				<div class="post_date"><?php the_date(); ?></div>
			<?php endif; ?>
			<h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="post_body"><?php the_content('Read more >'); ?></div>
			<!-- Comment counts -->
			<?php if (!is_category("comic") && !is_category("comic-kr")) :?>
			<div class="comments_count"><a href="<?php the_permalink(); ?>#disqus_thread" data-disqus-identifier="article-<?php echo the_ID();?>-identifier">Loading comment count...</a></div>
			<?php
			endif;
			endwhile; ?>
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
	include('http://seanchoe.com/wordpress/wp-content/themes/seanchoe/empty_kr.php');
}
else {
	include('http://seanchoe.com/wordpress/wp-content/themes/seanchoe/empty_en.php');
}

endif; ?>
</div><!-- #content ends -->
<?php get_footer(); ?>
