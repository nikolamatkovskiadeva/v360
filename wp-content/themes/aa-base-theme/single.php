<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aa-base
 */

get_header();
?>

<main id="main" class="site-main">


	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<section class="page-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="page-single-box page-content-box page-blank-box">
						
							<h1 class="single-title"><?php the_title(); ?></h1>

							<div class="single-content">
								<?php the_content(); ?>
							</div>

						</div>

					</div>
				</div>
			</div>
		</section>
		
	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php

get_footer();