</div><!-- #main ends -->

<?php wp_footer();?>

<div id="footer">
<?php echo $current_page;?>
© 2012-2013 Sean Choe. All Rights Reserved
</div>

</div><!-- #wrapper ends -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/retina.js"></script>

<!-- start DISQUS -->
<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'seanchoe'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>    
<!-- end DISQUS -->
</body>
</html>