<?php get_header(); ?>

<main id="main" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		
		$tmp_parts = [];
		
		foreach($tmp_parts as $part){
			include get_template_directory() . '/template-parts/'. $part .'.php';
		}

	endwhile; // End of the loop.
	?>
</main>

<?php get_footer();