<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
$category = get_the_category(); 
$cat_slug = $category[0]->slug;
?>

<div id="tertiary" class="sidebar-container" role="complementary">
	<div class="sidebar-inner">
		<div id="sidebar_mainmenu">
			<div id="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Sean Choe Logo" /></a>
			</div>
			<div class="nav-menu">
				<ul>
					<li><a href="<?php echo home_url(); ?>"<?php if (is_home()) echo " style='font-weight: bold;'"?>>Comic</a></li>
					<li><a href="<?php echo home_url(); ?>/works">Works</a></li>
					<li><a href="<?php echo home_url(); ?>/about">About</a></li>
				</ul>
			</div>
			<div id="nav_sub_menu">
				<span><a href="<?php echo get_bloginfo('rss2_url'); ?>">RSS</a></span><span class="divider">/</span>
				<span><a href="http://eepurl.com/JTvA5" target="_blank">Email Updates</a></span><span class="divider">/</span>
				<span><a href="http://twitter.com/seanchoe" target="_blank">Twitter</a></span>
			</div>
			<div id="search"><?php get_search_form(); ?></div>
		</div>
<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'main_sidebar' ); ?>
		</div><!-- .widget-area -->
<?php endif; ?>
	</div><!-- .sidebar-inner -->
</div><!-- #tertiary -->
