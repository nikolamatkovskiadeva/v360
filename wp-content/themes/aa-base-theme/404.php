<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aa-base
 */

get_header();
?>

<main id="main" class="site-main">
	<section class="page-404">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-6">
					<div class="number-404">404</div>
					<h3 class="section-subtitle">Vous allez être redirigé à la page d’accueil</h3>
				</div>
			</div>
		</div>
	</section>
	<script>
		setTimeout(function(){
			window.location.href = '<?= get_site_url(); ?>';
		}, 5000);
	</script>
</main>

<?php
get_footer();
