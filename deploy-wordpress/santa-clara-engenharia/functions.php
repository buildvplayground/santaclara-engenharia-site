<?php
/**
 * Funcoes do tema Santa Clara Engenharia.
 *
 * @package santa-clara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SANTA_CLARA_VERSION', '1.0.0' );

/**
 * Suporte a recursos do WordPress.
 */
function santa_clara_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array( 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);
	register_nav_menus(
		array(
			'principal' => __( 'Navegacao principal', 'santa-clara' ),
			'rodape'    => __( 'Rodape', 'santa-clara' ),
		)
	);
}
add_action( 'after_setup_theme', 'santa_clara_setup' );

/**
 * Estilos e scripts.
 */
function santa_clara_assets() {
	wp_enqueue_style(
		'santa-clara-fontes',
		'https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'santa-clara',
		get_stylesheet_uri(),
		array( 'santa-clara-fontes' ),
		SANTA_CLARA_VERSION
	);

	wp_enqueue_script(
		'santa-clara-motion',
		get_theme_file_uri( 'js/motion.js' ),
		array(),
		SANTA_CLARA_VERSION,
		true
	);
	wp_enqueue_script(
		'santa-clara-app',
		get_theme_file_uri( 'js/app.js' ),
		array(),
		SANTA_CLARA_VERSION,
		true
	);
	wp_localize_script(
		'santa-clara-app',
		'santaClaraAjax',
		array(
			'nonce' => wp_create_nonce( 'santa_clara_contato' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'santa_clara_assets' );

/**
 * Preconnect das fontes, para nao pagar o handshake duas vezes.
 *
 * @param array  $urls           URLs ja registradas.
 * @param string $relation_type  Tipo de relacao.
 * @return array
 */
function santa_clara_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'santa_clara_resource_hints', 10, 2 );

/**
 * Limpa o <head> de coisas que este site nao usa.
 */
function santa_clara_limpar_head() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'santa_clara_limpar_head' );

/**
 * Descricao e canonical da home a partir do que o cliente cadastrar.
 */
function santa_clara_meta_home() {
	if ( ! is_front_page() ) {
		return;
	}
	$desc = get_bloginfo( 'description' );
	if ( ! $desc ) {
		$desc = 'A Santa Clara / F2L Engenharia executa obras comerciais para redes franqueadas em shoppings, galerias e centros urbanos.';
	}
	printf( '<meta name="description" content="%s">' . "\n", esc_attr( $desc ) );
}
add_action( 'wp_head', 'santa_clara_meta_home', 1 );

/* -------------------------------------------------------------------------
 * Formulario de fornecedores / trabalhe conosco
 * ---------------------------------------------------------------------- */

/**
 * Recebe o cadastro via admin-ajax e envia por e-mail.
 */
function santa_clara_receber_cadastro() {
	$destino = apply_filters( 'santa_clara_email_destino', get_option( 'admin_email' ) );

	// Honeypot.
	if ( ! empty( $_POST['website'] ) ) {
		wp_send_json( array( 'ok' => true ) );
	}

	$campos = array( 'tipo', 'nome', 'email', 'telefone', 'atuacao', 'mensagem' );
	$dados  = array();
	foreach ( $campos as $campo ) {
		$dados[ $campo ] = isset( $_POST[ $campo ] ) ? sanitize_textarea_field( wp_unslash( $_POST[ $campo ] ) ) : '';
	}
	$dados['email'] = sanitize_email( $dados['email'] );

	if ( ! $dados['nome'] || ! is_email( $dados['email'] ) || ! $dados['telefone']
		|| ! $dados['atuacao'] || ! $dados['mensagem'] || empty( $_POST['consent'] ) ) {
		wp_send_json( array( 'ok' => false, 'erro' => 'campos_invalidos' ), 422 );
	}

	$rotulos = array(
		'fornecedor-material' => 'Fornecedor de material',
		'fornecedor-servico'  => 'Empresa de servico',
		'profissional'        => 'Profissional (trabalhe conosco)',
	);
	$rotulo = isset( $rotulos[ $dados['tipo'] ] ) ? $rotulos[ $dados['tipo'] ] : 'Cadastro';

	$corpo = "Novo cadastro pelo site\n\n"
		. "Tipo: {$rotulo}\n"
		. "Nome / razao social: {$dados['nome']}\n"
		. "E-mail: {$dados['email']}\n"
		. "Telefone: {$dados['telefone']}\n"
		. "Area de atuacao: {$dados['atuacao']}\n\n"
		. "Mensagem:\n{$dados['mensagem']}\n\n"
		. "Consentimento LGPD: sim\n"
		. 'Data: ' . current_time( 'd/m/Y H:i' ) . "\n";

	$enviado = wp_mail(
		$destino,
		sprintf( '[Site] %s: %s', $rotulo, $dados['nome'] ),
		$corpo,
		array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $dados['email'] )
	);

	if ( ! $enviado ) {
		wp_send_json( array( 'ok' => false, 'erro' => 'falha_no_envio' ), 500 );
	}
	wp_send_json( array( 'ok' => true ) );
}
add_action( 'wp_ajax_santa_clara_contato', 'santa_clara_receber_cadastro' );
add_action( 'wp_ajax_nopriv_santa_clara_contato', 'santa_clara_receber_cadastro' );

/**
 * Injeta o campo action esperado pelo admin-ajax dentro do formulario.
 */
function santa_clara_campo_action() {
	if ( ! is_page_template( 'page-fornecedores.php' ) ) {
		return;
	}
	?>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		var f = document.querySelector('[data-form]');
		if (!f) return;
		var add = function (nome, valor) {
			var i = document.createElement('input');
			i.type = 'hidden'; i.name = nome; i.value = valor;
			f.appendChild(i);
		};
		add('action', 'santa_clara_contato');
		if (window.santaClaraAjax) add('_wpnonce', window.santaClaraAjax.nonce);
	});
	</script>
	<?php
}
add_action( 'wp_footer', 'santa_clara_campo_action', 20 );
