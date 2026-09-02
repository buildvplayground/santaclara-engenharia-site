<?php
/**
 * Rodape, lightbox e banner de cookies.
 *
 * @package santa-clara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>


<!-- ====================================================== RODAPE -->
<footer class="foot dark">
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/logos/logo-santaclara-branco.png' ) ); ?>" width="676" height="292"
             alt="Santa Clara / F2L Engenharia">
        <p>Obras comerciais para redes franqueadas em shoppings, galerias e centros urbanos.
           Excelência técnica, agilidade e conformidade.</p>
      </div>

      <div>
        <h4>Navegação</h4>
        <ul>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#diferenciais">Diferenciais</a></li>
          <li><a href="#processo">Processo</a></li>
          <li><a href="#obras">Obras</a></li>
          <li><a href="#depoimentos">Depoimentos</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </div>

      <div>
        <h4>Contato</h4>
        <ul>
          <li><a href="tel:+5511947340026">(11) 94734-0026 &middot; Luiz Fernando</a></li>
          <li><a href="tel:+5511984151528">(11) 98415-1528 &middot; Luciana</a></li>
          <li><a href="mailto:engsantaclara@gmail.com">engsantaclara@gmail.com</a></li>
          <li><a data-wa-link href="#contato">WhatsApp</a></li>
        </ul>
      </div>
    </div>

    <div class="foot-bot">
      <p>&copy; <span data-year>2026</span> Santa Clara Engenharia. Todos os direitos reservados.</p>
      <nav aria-label="Links legais">
        <a href="<?php echo esc_url( home_url( '/privacidade/' ) ); ?>">Política de Privacidade</a>
        <a href="<?php echo esc_url( home_url( '/fornecedores/' ) ); ?>">Fornecedores e Trabalhe Conosco</a>
      </nav>
    </div>
  </div>
</footer>

<!-- ====================================================== LIGHTBOX -->
<div class="lb" data-lb data-open="false" role="dialog" aria-modal="true" aria-label="Galeria da obra">
  <div class="lb-bar">
    <span class="lb-ttl" data-lb-ttl>Obra</span>
    <span class="lb-count" data-lb-count>1 / 1</span>
  </div>
  <button class="lb-btn lb-close" type="button" data-lb-close aria-label="Fechar galeria">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg>
  </button>
  <figure class="lb-fig">
    <img data-lb-img src="" alt="">
  </figure>
  <button class="lb-btn lb-nav lb-prev" type="button" data-lb-prev aria-label="Foto anterior">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 5l-7 7 7 7"/></svg>
  </button>
  <button class="lb-btn lb-nav lb-next" type="button" data-lb-next aria-label="Próxima foto">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 5l7 7-7 7"/></svg>
  </button>
</div>

<!-- ====================================================== COOKIES (LGPD) -->
<aside class="ck" data-cookie data-open="false" role="region" aria-label="Aviso de cookies">
  <p>Usamos cookies para entender como o site é usado e melhorar a navegação. Você decide.
     Detalhes na <a href="<?php echo esc_url( home_url( '/privacidade/' ) ); ?>">Política de Privacidade</a>.</p>
  <div class="ck-acts">
    <button class="btn btn-solid" type="button" data-consent="all">Aceitar</button>
    <button class="btn btn-line" type="button" data-consent="essential">Só essenciais</button>
  </div>
</aside>
<?php wp_footer(); ?>
</body>
</html>
