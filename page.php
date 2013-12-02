<?php get_header(); ?>

<div id="content">
	<div id="content_in">
	<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="post_wrapper">
					<div class="post_head">
						<h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post_date"><?php the_date(); ?></div>
					</div>
					<div class="post_body"><?php the_content('Read more >'); ?></div>
				</div><!-- .post_wrapper ends -->
				
				<div class="page_navigation single">
					<div class="previous">
						<?php $next_post = get_next_post(true);
						if (!empty( $next_post )): ?>
						  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo "< ".$next_post->post_title; ?></a>
						<?php endif; ?>
					</div>
					<div class="next">
						<?php $previous_post = get_previous_post(true);
						if (!empty( $previous_post )): ?>
						  <a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo $previous_post->post_title." >"; ?></a>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
	<?php else :
	include('http://seanchoe.com/wordpress/wp-content/themes/seanchoe/empty.php');
	endif; ?>
	</div><!-- #content_in ends -->
</div><!-- #content ends -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>