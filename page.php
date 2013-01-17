<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<div class="post_body page"><?php the_content(); ?></div>
	<?php endwhile; ?>
<?php else : ?>
	<p>No Result</p>
<?php endif; ?>
</div><!-- #content ends -->
<?php get_footer(); ?>
