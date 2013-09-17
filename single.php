<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="post_title single"><?php the_title(); ?></h2>
			<?php if (is_new_day()) :?>
				<div class="post_date single"><?php the_date(); ?></div>
			<?php endif; ?>
			<div class="post_body"><?php the_content(); ?></div>
			
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
			
			<!-- Comments start -->
			
			<!-- Disqus -->
			<!--
			<div id="disqus_thread"></div>
			<script type="text/javascript">
	            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	            var disqus_shortname = 'seanchoe'; // required: replace example with your forum shortname
	            var disqus_identifier = 'article-<?php echo the_ID(); ?>-identifier';
	
	            /* * * DON'T EDIT BELOW THIS LINE * * */
	            (function() {
	                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	            })();
	        </script>
	        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	        -->
	
			<!-- Comments end -->
	<?php endwhile; ?>
<?php else : ?>
	<p>No Result</p>
<?php endif; ?>
</div><!-- #content ends -->
<?php get_footer(); ?>
