<?php
/**
 * Template Name: Fornecedores e Trabalhe Conosco
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
    <span class="eyebrow">Cadastro <span class="sl">/</span> Parcerias</span>
    <h1>Fornecedores e Trabalhe Conosco</h1>
    <p class="lede">Trabalhamos com equipes fixas e uma rede de fornecedores que entende o ritmo
      de obra em shopping. Se a sua empresa atende esse perfil, ou se você quer fazer parte da
      equipe técnica, deixe o cadastro aqui.</p>
  </div>
</section>

<section class="sec">
  <div class="container">
    <div class="prose">
      <h2>O que procuramos</h2>
      <ul>
        <li><strong>Fornecedores de material</strong> com entrega programada e nota fiscal em dia,
          principalmente em revestimento, marcenaria, esquadria, forro, iluminação e inox.</li>
        <li><strong>Empresas de serviço</strong> em elétrica, hidráulica, climatização, gás,
          combate a incêndio, vidraçaria e pintura, com equipe registrada e documentação
          regular para acesso a shopping.</li>
        <li><strong>Profissionais</strong> de engenharia civil, arquitetura e técnicos de
          edificações com experiência em varejo e obras de curta duração.</li>
      </ul>

      <h2>Como funciona</h2>
      <p>Recebemos o cadastro, conferimos a documentação e chamamos quando houver frente de
        serviço compatível. Guardamos as informações por até 24 meses, conforme a
        <a href="<?php echo esc_url( home_url( '/privacidade/' ) ); ?>">Política de Privacidade</a>.</p>
    </div>

    <form class="form" data-form action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post" novalidate>
      <div class="field">
        <label for="tipo">Tipo de cadastro</label>
        <select id="tipo" name="tipo" required>
          <option value="fornecedor-material">Fornecedor de material</option>
          <option value="fornecedor-servico">Empresa de serviço</option>
          <option value="profissional">Profissional (trabalhe conosco)</option>
        </select>
      </div>

      <div class="field">
        <label for="nome">Nome ou razão social</label>
        <input id="nome" name="nome" type="text" required autocomplete="organization">
      </div>

      <div class="field">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" required autocomplete="email">
      </div>

      <div class="field">
        <label for="telefone">Telefone ou WhatsApp</label>
        <input id="telefone" name="telefone" type="tel" required autocomplete="tel"
               inputmode="tel" placeholder="(11) 90000-0000">
      </div>

      <div class="field">
        <label for="atuacao">Área de atuação</label>
        <input id="atuacao" name="atuacao" type="text" required
               placeholder="Ex.: instalações elétricas, marcenaria, engenharia civil">
      </div>

      <div class="field">
        <label for="mensagem">Conte um pouco sobre a experiência</label>
        <textarea id="mensagem" name="mensagem" required
                  placeholder="Obras já atendidas, região de atuação e link do portfólio ou currículo."></textarea>
      </div>

      <div class="field field-check">
        <input id="consent" name="consent" type="checkbox" required>
        <label for="consent" style="text-transform:none;letter-spacing:0;font-weight:400;font-size:.88rem;color:var(--muted)">
          Autorizo a Santa Clara Engenharia a guardar estes dados para avaliação do cadastro,
          conforme a <a href="<?php echo esc_url( home_url( '/privacidade/' ) ); ?>">Política de Privacidade</a>.
        </label>
      </div>

      <button class="btn btn-solid" type="submit">
        Enviar cadastro <span class="arw" aria-hidden="true">&rsaquo;</span>
      </button>

      <p class="form-msg" data-form-msg role="status" aria-live="polite"></p>
      <p class="form-note">Prefere falar direto? Escreva para
        <a href="mailto:engsantaclara@gmail.com">engsantaclara@gmail.com</a> ou chame no
        <a data-wa-link href="#">WhatsApp</a>.</p>
    </form>
  </div>
</section>

</main>
<?php
get_footer();
