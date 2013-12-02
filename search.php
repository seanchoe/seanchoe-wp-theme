<?php get_header(); ?>

<div id="content">
	<div id="content_in">
	<div class="search_title">Search Results for "<?php echo get_search_query(); ?>"</div>
	<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="post_wrapper">
					<div class="post_head">
						<h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post_date"><?php the_date(); ?></div>
					</div>
					<div class="post_body"><?php the_content('Read more >'); ?></div>
					<!-- Comment counts -->
					<div class="comments_count"><a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></div>
				</div>
				<?php endwhile; ?>
				<div class="page_navigation">
					<div class="previous"><?php echo previous_posts_link('< Previous'); ?></div>
					<div class="next"><?php echo get_next_posts_link('Next >'); ?></div>
				</div>
	<?php else : ?>
	<div class="empty_text">
	No Results. Please try start again from <a href="/">home</a>.
	</div>
	<?php endif; ?>
	</div><!-- #content_in ends -->
</div><!-- #content ends -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>