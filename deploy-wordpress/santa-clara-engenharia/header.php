<?php
/**
 * Cabecalho do tema.
 *
 * @package santa-clara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#1C1B19">
<meta property="og:type" content="website">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="Santa Clara Engenharia | Obras comerciais para franquias">
<meta property="og:description" content="Sua loja pronta no padrão da rede e no prazo do shopping. Obras comerciais para redes franqueadas em shoppings e centros urbanos.">
<meta property="og:image" content="<?php echo esc_url( get_theme_file_uri( 'assets/img/hero.webp' ) ); ?>">
<meta name="twitter:card" content="summary_large_image">

<link rel="icon" href="<?php echo esc_url( get_theme_file_uri( 'favicon.png' ) ); ?>" sizes="32x32">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_theme_file_uri( 'assets/logos/favicon-180.png' ) ); ?>">
<link rel="preload" as="image" href="<?php echo esc_url( get_theme_file_uri( 'assets/img/hero.webp' ) ); ?>" fetchpriority="high">
<script>document.documentElement.setAttribute('data-motion','on')</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"GeneralContractor",
  "name":"Santa Clara Engenharia",
  "alternateName":"Santa Clara / F2L Engenharia",
  "description":"Obras comerciais para redes franqueadas em shoppings, galerias e centros urbanos.",
  "email":"engsantaclara@gmail.com",
  "telephone":"+55-11-94734-0026",
  "areaServed":["SP","RJ","GO","MG","PR"],
  "address":{"@type":"PostalAddress","addressLocality":"São Paulo","addressRegion":"SP","addressCountry":"BR"},
  "knowsAbout":["Obra de franquia","Obra em shopping center","Reforma de loja","Instalações prediais"]
}
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip" href="#conteudo">Ir para o conteúdo</a>

<!-- ====================================================== HEADER -->
<header class="head" data-head data-solid="false">
  <div class="container head-in">
    <a class="brand" href="#topo" aria-label="Santa Clara Engenharia, ir para o início">
      <img src="<?php echo esc_url( get_theme_file_uri( 'assets/logos/logo-santaclara-branco.png' ) ); ?>" width="676" height="292"
           alt="Santa Clara / F2L Engenharia">
    </a>

    <nav class="nav" data-nav aria-label="Navegação principal">
      <a href="#sobre">Sobre<i></i></a>
      <a href="#diferenciais">Diferenciais<i></i></a>
      <a href="#processo">Processo<i></i></a>
      <a href="#obras">Obras<i></i></a>
      <a href="#contato">Contato<i></i></a>
    </nav>

    <a class="btn btn-line head-cta" data-wa-btn="obra comercial" href="#contato">
      Solicitar orçamento <span class="arw" aria-hidden="true">&rsaquo;</span>
    </a>

    <button class="burger" data-burger type="button" aria-expanded="false"
            aria-controls="menu-mobile" aria-label="Abrir menu">
      <span></span>
    </button>
  </div>
</header>

<div class="scrim" data-scrim aria-hidden="true"></div>
<nav class="drawer" id="menu-mobile" data-drawer data-open="false" aria-label="Navegação mobile">
  <a href="#sobre">Sobre</a>
  <a href="#diferenciais">Diferenciais</a>
  <a href="#processo">Processo</a>
  <a href="#obras">Obras</a>
  <a href="#depoimentos">Depoimentos</a>
  <a href="#contato">Contato</a>
  <a class="btn btn-solid" data-wa-btn="obra comercial" href="#contato">
    Solicitar orçamento <span class="arw" aria-hidden="true">&rsaquo;</span>
  </a>
</nav>

