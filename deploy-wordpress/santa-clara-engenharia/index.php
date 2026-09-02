<?php
/**
 * Template padrao de pagina e fallback do tema.
 *
 * @package santa-clara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="conteudo">
	<section class="page-head dark">
		<div class="container">
			<span class="eyebrow">Santa Clara <span class="sl">/</span> Engenharia</span>
			<h1><?php echo esc_html( wp_get_document_title() ? get_the_title() : get_bloginfo( 'name' ) ); ?></h1>
		</div>
	</section>

	<section class="sec">
		<div class="container">
			<div class="prose">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						the_content();
					}
				} else {
					echo '<p>' . esc_html__( 'Conteudo nao encontrado.', 'santa-clara' ) . '</p>';
				}
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
