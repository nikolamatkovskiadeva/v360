<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package aa-base
 */

get_header();
$s = get_search_query();
?>

<main id="main" class="site-main">

	<?php if ( have_posts() ) : ?>
		<section class="page-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="page-content-box page-blank-box">
							
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'aa-base' ), '<span>' . $s . '</span>' ); ?></h1>
							<div class="search-results">
								<?php
									
									while (have_posts()):
										the_post();
									
										$title = get_the_title();
										$text = wp_trim_words(get_the_content(), 30, '...');
										$keys= explode(" ",$s);
										$title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title);
										$text = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $text);
										?>
										<div class="srch-res-box">
											<div class="srch-res-title">
												<a href="<?= get_permalink(); ?>">
													<?= $title; ?>
												</a>
											</div>
											<div class="srch-res-permalink"><?= get_the_permalink(); ?></div>
											<div class="srch-excerpt">
												<?= $text; ?>
											</div>
										</div>
									<?php
									endwhile;
								else :
									?>
									<h2>YOUR SEARCH YIELDED NO RESULTS</h2>
									<?php
								endif;
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

</main>

<?php
get_footer();
