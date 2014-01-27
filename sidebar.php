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

<div class="sidebar-container">
	<div class="sidebar-inner">
		<div class="search"><?php get_search_form(); ?></div>
<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'main_sidebar' ); ?>
		</div><!-- .widget-area -->
<?php endif; ?>
	</div><!-- .sidebar-inner -->
</div><!-- #tertiary -->
