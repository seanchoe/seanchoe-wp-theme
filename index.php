<?php get_header();
	
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

$link_add;
if ($seanchoe_language == "kr") {
	$link_add = "-kr";
}
else {
	$link_add = "";
}

?>
<div id="content" class="front">
<h2>Sean's Visual Journal</h2>
<p id="brief_profile">
<?php 
$category_id;
if ($seanchoe_language == "kr") :
$category_id = 6;
?>
제 이름은 Sean Choe, 한국 이름은 최우형 입니다. UX/그래픽 디자이너이자 프론트앤드/웹 개발자 입니다. 테크놀로지와 음악, 영화 및 예술에 관심이 많습니다. 현재 미국 Bay Area에 거주 중입니다.<br/>
저에 대해서는 <a href="/about-kr">여기</a>에서 더 자세히 알 수 있습니다.</p>
<?php else :
$category_id = 5;
?>
My name is Sean Choe. I'm a UX/graphic designer and iOS/web developer. I love technology, music, movies and arts. Currently staying in Bay Area.<br/>
Learn more about me <a href="/about">here</a>.</p>
<?php endif; ?>

<div class="social_buttons">
	<div class="social_button_each">
		<div class="fb-like" data-href="http://seanchoe.com" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
	</div>
	<div class="social_button_each">
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://seanchoe.com" data-via="seanchoe" data-related="seanchoe">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div>

<div id="index_title"><h3>Recent Comics</h3><p><a href="/comic<?php echo $link_add; ?>">More ></a></p></div>
<div id="index_comics">
<?php
global $post;
$args = array( 'numberposts' => 3, 'category' => $category_id );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);

?>
	<div class="each_comic"><a href="<?php the_permalink(); ?>">
	<?php echo the_post_thumbnail('thumbnail'); ?><br/>
	<?php the_title(); ?></a></div>
<?php endforeach; ?>
</div>
<?php if ($seanchoe_language == "kr") :?>
<div id="index_title"><h3>Recent Blog Posts</h3><p><a href="/blog<?php echo $link_add; ?>">More ></a></p></div>
<div id="index_blogs">
<ul>
<?php
global $post;
$args = array( 'numberposts' => 5, 'category' => 8 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);

?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

</div><!-- #content ends -->
<?php get_footer(); ?>
