<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aa-base
 */


?>

	</div><!-- #content -->
	
    <?php include(get_template_directory() . '/template-parts/general/footer.php'); ?>
	
</div>


<?php wp_footer(); ?>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Source+Sans+Pro:300,400,600,700' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})(); </script>

<script src="<?= get_template_directory_uri() . '/build/js/app.min.js?ver=' . filemtime(get_template_directory() . '/build/js/app.min.js'); ?>"></script>
</body>
</html>
