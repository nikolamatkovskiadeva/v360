<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<div class="row">
					<div class="col">

						<div class="page-content-box">
							<h1 class="page-title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>

					</div>
				</div>
			</div>
		</section>
		
	<?php
	endwhile; // End of the loop.
	?>

</main>

<?php
get_footer();
