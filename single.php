<?php get_header(); ?>

<div class="content">
	<div class="content_in">
	<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="post_wrapper">
					<div class="post_head">
						<h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post_date"><?php the_date(); ?></div>
					</div>
					<div class="post_body"><?php the_content('Read more >'); ?></div>
					<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'seanchoe'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
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