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

global $post;
$categories = get_the_category($post->ID);
$category_name = $categories[0]->slug;

$link_add;
if ($seanchoe_language == "kr") {
	$link_add = "-kr";
}
else {
	$link_add = "";
}

?>
<div id="sidebar_wrapper">
	<div id="sidebar">
		<a href="/"><img id="logo" src="<?php bloginfo( 'template_url' ); ?>/images/sidebar_logo.png" alt="Sean Choe"/></a>
		<div id="navigation">
			<ul id="navigation">
				<li<?php if (!is_front_page() && (is_category("comic".$link_add) || in_category("comic".$link_add))) echo " class='selected'";?>><a href="/comic<?php echo $link_add; ?>">Comic</a></li>
				<?php if ($seanchoe_language == kr) :?>
				<li<?php if (!is_front_page() && (is_category("blog".$link_add) || in_category("blog".$link_add))) echo " class='selected'";?>><a href="/blog<?php echo $link_add; ?>">Blog</a></li>
				<?php endif; ?>
				<li<?php
				$about_page_number;
				if ($seanchoe_language == "kr") {
					$about_page_number = 20;
				}
				else {
					$about_page_number = 8;
				}
				if (is_page($about_page_number) === TRUE) echo " class='selected'";?>><a href="/about<?php echo $link_add; ?>">About</a></li>
			</ul>
		</div>
		<div id="social_buttons">
			<ul>
				<?php
				$rss_link;
				if ($seanchoe_language == "kr") {
					$rss_link = "http://feeds.feedburner.com/seanchoe-kr";
				}
				else {
					$rss_link = "http://feeds.feedburner.com/seanchoe";
				}
				?>
				<li><a href="<?php echo $rss_link; ?>" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/social_button_rss.png" alt="Subscribe Sean Choe"/></a></li>
				<?php
				$twitter_id;
				if ($seanchoe_language == "kr") {
					$twitter_id = "seanchoe_kr";
				}
				else {
					$twitter_id = "seanchoe";
				}
				?>
				<li><a href="http://twitter.com/<?php echo $twitter_id; ?>" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/social_button_twitter.png" alt="Sean Choe on Twitter"/></a></li>
				<li><a href="http://linkedin.com/in/seanchoe" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/social_button_linkedin.png" alt="Sean Choe on LinkedIn"/></a></li>
				<li><a href="http://alpha.app.net/seanchoe" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/social_button_appdotnet.png" alt="Sean Choe on App.net"/></a></li>
			</ul>
		</div>
		<div id="language">
			<p>
			<?php if ($seanchoe_language === "en") :?>
			<a href="/?ln=kr">이 사이트를 한글로 보기</a>
			<?php else : ?>
			<a href="/?ln=en">See this website in English</a>
			<?php endif; ?>
			</p>
		</div>
		<div id="search">
			<div id="search_float"><?php get_search_form(); ?></div>
		</div>
	</div><!-- #sidebar ends -->
</div><!-- #sidebar_wrapper ends -->