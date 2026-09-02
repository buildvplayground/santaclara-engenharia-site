<?php
/**
 * Pagina inicial.
 *
 * @package santa-clara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="conteudo">

<!-- ====================================================== HERO -->
<section class="hero" id="topo" data-hero>
  <div data-hero-sticky>
    <div class="hero-stage">
      <div class="hero-media" data-hero-media>
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hero.webp' ) ); ?>" width="1170" height="775" fetchpriority="high"
             alt="Instalação de luminárias lineares no forro de uma obra comercial executada pela Santa Clara Engenharia">
      </div>
      <div class="hero-veil" aria-hidden="true"></div>
      <div class="hero-fx" data-hero-fx aria-hidden="true"></div>

      <div class="hero-in" data-hero-in>
        <div class="container">
          <div class="hero-grid">
            <div>
              <span class="eyebrow" data-reveal="soft">Obras comerciais para franquias</span>
              <h1 data-split>Sua loja pronta no padrão da rede e no prazo que o shopping cobra.</h1>
              <p class="hero-lede" data-reveal="soft">
                A Santa Clara Engenharia executa obras comerciais para redes franqueadas em
                shoppings, galerias e centros urbanos. Da liberação da área até a loja pronta
                para inaugurar, com cronograma, medição e documentação em dia.
              </p>
              <div class="hero-actions" data-reveal="soft">
                <a class="btn btn-solid" data-wa-btn="obra comercial">
                  Solicitar orçamento <span class="arw" aria-hidden="true">&rsaquo;</span>
                </a>
                <a class="btn btn-line" href="#obras">
                  Ver obras entregues <span class="arw" aria-hidden="true">&rsaquo;</span>
                </a>
              </div>
            </div>

            <dl class="hero-meta" data-reveal="soft">
              <div><dt>Especialidade</dt><dd><span class="sl">/</span> Obras para franquias</dd></div>
              <div><dt>Ambiente</dt><dd><span class="sl">/</span> Shopping, galeria e centro urbano</dd></div>
              <div><dt>Base</dt><dd><span class="sl">/</span> São Paulo, obras em 5 estados</dd></div>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================== MARCAS -->
<section class="brands dark" aria-label="Marcas atendidas">
  <div class="container">
    <p class="brands-lbl">Marcas que já abriram loja com a gente</p>
  </div>
  <div class="mq-wrap">
    <div class="mq" aria-hidden="true">
      <span>Bom Beef</span><span>Fichips</span><span>Splash</span><span>Spoleto</span><span>Davvero Gelateria</span><span>DryWash</span><span>Kopenhagen</span><span>Montana Grill</span><span>Vivenda do Camarão</span><span>Patroni Pizzas</span><span>Steak Factory</span><span>Cia do Churrasco</span><span>Frutaria São Paulo</span><span>Makis Place</span><span>Óticas Morrison</span><span>Chat Noir</span><span>Academia da Face</span><span>Vino</span><span>Costume</span><span>Agita Sorvetes</span><span>Parmalat</span><span>Bom Grillê</span><span>Wraps</span><span>Tenerife</span><span>Varanda Gourmet</span><span>Na Brasa</span><span>Restaurante da Roça</span><span>Estética Beauty</span><span>Lucélia Castro</span>
      <span>Bom Beef</span><span>Fichips</span><span>Splash</span><span>Spoleto</span><span>Davvero Gelateria</span><span>DryWash</span><span>Kopenhagen</span><span>Montana Grill</span><span>Vivenda do Camarão</span><span>Patroni Pizzas</span><span>Steak Factory</span><span>Cia do Churrasco</span><span>Frutaria São Paulo</span><span>Makis Place</span><span>Óticas Morrison</span><span>Chat Noir</span><span>Academia da Face</span><span>Vino</span><span>Costume</span><span>Agita Sorvetes</span><span>Parmalat</span><span>Bom Grillê</span><span>Wraps</span><span>Tenerife</span><span>Varanda Gourmet</span><span>Na Brasa</span><span>Restaurante da Roça</span><span>Estética Beauty</span><span>Lucélia Castro</span>
    </div>
  </div>
</section>

<!-- ====================================================== SOBRE (split) -->
<section class="sec" id="sobre">
  <div class="container">
    <div class="split">
      <figure class="split-media" data-reveal="fig" style="margin:0">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sobre.webp' ) ); ?>" width="1170" height="876" loading="lazy"
             alt="Equipe da Santa Clara Engenharia executando estrutura e instalações em loja de shopping">
        <figcaption class="split-tag">Obra em execução, unidade Bom Beef Burguers</figcaption>
      </figure>

      <div class="split-body">
        <span class="eyebrow" data-reveal="soft">01 <span class="sl">/</span> Quem executa</span>
        <h2 data-split>Quem abre loja em rede não precisa de uma construtora qualquer.</h2>
        <p class="lede" data-reveal>
          Precisa de quem já conhece o manual da franqueadora e o regulamento de obra do
          shopping antes de pisar no canteiro.
        </p>
        <p data-reveal>
          A Santa Clara Engenharia nasceu para oferecer soluções estruturadas e confiáveis na
          construção civil e se especializou em obras comerciais para franquias. A experiência
          veio de projetos de expansão de redes franqueadas, onde cada unidade repete um padrão
          e cada dia parado custa faturamento.
        </p>
        <p data-reveal>
          Esse conhecimento cobre as duas pontas do problema: as exigências da franqueadora e as
          particularidades de obra dentro de shopping center, com horário de silêncio, acesso
          restrito, taxa de administração e vistoria de entrega.
        </p>

        <ul class="creds" data-reveal>
          <li><b>01</b><span>Engenheiros civis, arquitetos e técnicos com experiência em varejo</span></li>
          <li><b>02</b><span>Cronograma, medição e relatório de progresso por unidade</span></li>
          <li><b>03</b><span>Documentação técnica e legal completa na entrega</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================== FAIXA 1 -->
<section class="band" aria-label="Obra em andamento">
  <div class="band-media" data-parallax="0.10">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/faixa-obra.webp' ) ); ?>" width="1170" height="795" loading="lazy"
         alt="Área de loja recebida em obra bruta dentro de um shopping, antes do início dos serviços">
  </div>
  <div class="band-scrim" aria-hidden="true"></div>
  <div class="band-in">
    <div class="container">
      <p data-reveal>Obra em shopping tem janela curta. O planejamento é o que cabe nela.</p>
    </div>
  </div>
</section>

<!-- ====================================================== DIFERENCIAIS -->
<section class="sec alt" id="diferenciais">
  <div class="container">
    <div class="sec-head">
      <span class="eyebrow" data-reveal="soft">02 <span class="sl">/</span> Diferenciais técnicos</span>
      <h2 data-split>Seis coisas que mudam o resultado antes de a primeira parede subir.</h2>
    </div>

    <div class="diffs">
      <article class="diff" data-reveal>
        <b>01</b>
        <h3>Especialização em obras para franquias</h3>
        <p>Domínio das exigências padronizadas pelas grandes redes, do layout aprovado ao
           acabamento que a marca especifica. A obra sai igual ao manual, não parecida com ele.</p>
      </article>
      <article class="diff" data-reveal>
        <b>02</b>
        <h3>Ambientes de alta complexidade</h3>
        <p>Shoppings, galerias e centros urbanos, com as regras de acesso, horário e convivência
           que cada administração impõe.</p>
      </article>
      <article class="diff" data-reveal>
        <b>03</b>
        <h3>Planejamento técnico e financeiro</h3>
        <p>Orçamento aberto e cronograma físico financeiro, para previsibilidade e controle de
           custos do início ao repasse.</p>
      </article>
      <article class="diff" data-reveal>
        <b>04</b>
        <h3>Equipe multidisciplinar</h3>
        <p>Engenheiros civis, arquitetos e técnicos experientes no varejo, na mesma obra e sob a
           mesma coordenação.</p>
      </article>
      <article class="diff" data-reveal>
        <b>05</b>
        <h3>Acompanhamento personalizado</h3>
        <p>Cronograma, relatórios de progresso e um responsável técnico acessível durante toda a
           obra, não só na assinatura.</p>
      </article>
      <article class="diff" data-reveal>
        <b>06</b>
        <h3>Conformidade técnica e legal</h3>
        <p>Documentação rigorosa e entregas seguras, com a obra apta a passar na vistoria da
           administração e da franqueadora.</p>
      </article>

      <div class="diff diff-note" data-reveal>
        <p>Cada um desses seis pontos vira item de contrato e linha de cronograma, não promessa
           de reunião.</p>
        <a class="btn btn-line" data-wa-btn="obra comercial para franquia">
          Solicitar orçamento <span class="arw" aria-hidden="true">&rsaquo;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================== NUMEROS -->
<section class="sec dark" aria-label="Números da operação">
  <div class="container">
    <span class="eyebrow" data-reveal="soft">Números da operação</span>
    <div class="stats">
      <div class="stat" data-reveal>
        <b><span data-count="27">27</span></b>
        <span>unidades de franquia entregues e listadas nominalmente</span>
      </div>
      <div class="stat" data-reveal>
        <b><span data-count="29">29</span></b>
        <span>marcas atendidas ao longo da trajetória</span>
      </div>
      <div class="stat" data-reveal>
        <b><span data-count="5">5</span></b>
        <span>estados com obra executada: SP, RJ, GO, MG e PR</span>
      </div>
      <div class="stat" data-reveal>
        <b><span data-count="3">3</span><i>meses</i></b>
        <span>para entregar 300 m&sup2; no Shopping Plaza Sul</span>
      </div>
    </div>
    <p class="stats-note" data-reveal="soft">
      Números conferidos na apresentação institucional da empresa, unidade a unidade.
    </p>
  </div>
</section>

<!-- ====================================================== METODO (split invertido) -->
<section class="sec">
  <div class="container">
    <div class="split rev">
      <figure class="split-media" data-reveal="fig" style="margin:0">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodo.webp' ) ); ?>" width="1170" height="1196" loading="lazy"
             alt="Cozinha industrial concluída com revestimento cerâmico, bancadas em inox e prumada de gás sinalizada">
        <figcaption class="split-tag">Instalações concluídas e sinalizadas, pronta para vistoria</figcaption>
      </figure>

      <div class="split-body">
        <span class="eyebrow" data-reveal="soft">03 <span class="sl">/</span> Como a obra roda</span>
        <h2 data-split>A obra padronizada não é a obra repetida. É a obra que não surpreende.</h2>
        <p class="lede" data-reveal>
          Cada unidade tem laje, prumada, ponto de gás e exigência de administração diferentes.
          O que se repete é o método.
        </p>
        <p data-reveal>
          Levantamento antes do orçamento. Orçamento aberto antes do contrato. Cronograma
          amarrado ao calendário do shopping. E medição que acompanha o que foi de fato
          executado, não o que estava previsto.
        </p>
        <p data-reveal>
          <strong>É isso que permite prometer data de inauguração sem chutar</strong> e sustentar
          a promessa quando a obra encontra o imprevisto que toda obra encontra.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================== PROCESSO -->
<section class="sec alt" id="processo">
  <div class="container">
    <div class="sec-head">
      <span class="eyebrow" data-reveal="soft">04 <span class="sl">/</span> Do contato à inauguração</span>
      <h2 data-split>Cinco etapas entre a chave da área e a loja funcionando.</h2>
    </div>

    <div class="tl" data-seq>
      <div class="tl-line" aria-hidden="true"><i></i></div>

      <article class="tl-item" data-seq-item>
        <b>01</b>
        <h3>Visita técnica e levantamento</h3>
        <p>Medição da área recebida, checagem da infraestrutura existente e leitura do manual da
           franqueadora.</p>
      </article>
      <article class="tl-item" data-seq-item>
        <b>02</b>
        <h3>Orçamento aberto e cronograma</h3>
        <p>Escopo item a item, prazo por frente de serviço e o calendário compatível com as regras
           do shopping.</p>
      </article>
      <article class="tl-item" data-seq-item>
        <b>03</b>
        <h3>Mobilização e documentação</h3>
        <p>ART, apólice, cadastro de equipe e aprovação do projeto junto à administração, antes de
           a obra começar.</p>
      </article>
      <article class="tl-item" data-seq-item>
        <b>04</b>
        <h3>Execução com medição</h3>
        <p>Frentes de civil, elétrica, hidráulica, climatização e acabamento, com relatório de
           progresso e medição do que foi executado.</p>
      </article>
      <article class="tl-item" data-seq-item>
        <b>05</b>
        <h3>Entrega e vistoria</h3>
        <p>Testes, limpeza fina, as built e acompanhamento da vistoria da administração e da
           franqueadora até a liberação.</p>
      </article>
    </div>
  </div>
</section>

<!-- ====================================================== FAIXA 2 -->
<section class="band" aria-label="Loja entregue">
  <div class="band-media" data-parallax="0.09">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/faixa-entrega.webp' ) ); ?>" width="1170" height="775" loading="lazy"
         alt="Loja de estética automotiva concluída, com piso epóxi polido e luminárias instaladas">
  </div>
  <div class="band-scrim" aria-hidden="true"></div>
  <div class="band-in">
    <div class="container">
      <p data-reveal>Loja entregue é loja que passa na vistoria no primeiro dia.</p>
    </div>
  </div>
</section>

<!-- ====================================================== OBRAS -->
<section class="sec" id="obras">
  <div class="container">
    <div class="sec-head">
      <span class="eyebrow" data-reveal="soft">05 <span class="sl">/</span> Obras entregues</span>
      <h2 data-split>Obras executadas para redes que abriram unidade com a Santa Clara.</h2>
    </div>

    <div class="grid-obras">

      <button class="obra" type="button" data-reveal="fig"
        data-title="Bom Beef Burguers"
        data-gallery="assets/img/portfolio/bom-beef/01.webp|assets/img/portfolio/bom-beef/02.webp|assets/img/portfolio/bom-beef/03.webp|assets/img/portfolio/bom-beef/04.webp|assets/img/portfolio/bom-beef/05.webp|assets/img/portfolio/bom-beef/06.webp|assets/img/portfolio/bom-beef/07.webp|assets/img/portfolio/bom-beef/08.webp|assets/img/portfolio/bom-beef/09.webp|assets/img/portfolio/bom-beef/10.webp"
        aria-label="Abrir galeria da obra Bom Beef Burguers, 10 fotos">
        <span class="obra-fig">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/portfolio/bom-beef/capa.webp' ) ); ?>" width="1000" height="750" loading="lazy"
               alt="Salão da hamburgueria Bom Beef em funcionamento após a entrega da obra">
          <span class="obra-zoom" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M16 16l5 5M11 8v6M8 11h6"/></svg>
          </span>
        </span>
        <span class="obra-body">
          <span class="obra-over">São Paulo e Goiânia</span>
          <h3>Bom Beef Burguers</h3>
          <p class="obra-desc">Cinco unidades de hamburgueria, da cozinha industrial ao salão.</p>
          <span class="obra-meta">
            <span class="small">Hamburgueria</span>
            <span class="small">10 fotos</span>
          </span>
        </span>
      </button>

      <button class="obra" type="button" data-reveal="fig"
        data-title="DryWash"
        data-gallery="assets/img/portfolio/drywash/01.webp|assets/img/portfolio/drywash/02.webp|assets/img/portfolio/drywash/03.webp|assets/img/portfolio/drywash/04.webp|assets/img/portfolio/drywash/05.webp|assets/img/portfolio/drywash/06.webp|assets/img/portfolio/drywash/07.webp|assets/img/portfolio/drywash/08.webp"
        aria-label="Abrir galeria da obra DryWash, 8 fotos">
        <span class="obra-fig">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/portfolio/drywash/capa.webp' ) ); ?>" width="1000" height="750" loading="lazy"
               alt="Unidade DryWash concluída com forro técnico e luminárias lineares">
          <span class="obra-zoom" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M16 16l5 5M11 8v6M8 11h6"/></svg>
          </span>
        </span>
        <span class="obra-body">
          <span class="obra-over">São Paulo</span>
          <h3>DryWash</h3>
          <p class="obra-desc">Unidades de estética automotiva em estacionamento de shopping.</p>
          <span class="obra-meta">
            <span class="small">Estética automotiva</span>
            <span class="small">8 fotos</span>
          </span>
        </span>
      </button>

      <button class="obra" type="button" data-reveal="fig"
        data-title="Davvero Gelateria"
        data-gallery="assets/img/portfolio/davvero/01.webp|assets/img/portfolio/davvero/02.webp|assets/img/portfolio/davvero/03.webp|assets/img/portfolio/davvero/04.webp"
        aria-label="Abrir galeria da obra Davvero Gelateria, 4 fotos">
        <span class="obra-fig">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/portfolio/davvero/capa.webp' ) ); ?>" width="1000" height="750" loading="lazy"
               alt="Loja Davvero Gelateria entregue, com arcos, marcenaria e balcão refrigerado">
          <span class="obra-zoom" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M16 16l5 5M11 8v6M8 11h6"/></svg>
          </span>
        </span>
        <span class="obra-body">
          <span class="obra-over">Shoppings de São Paulo</span>
          <h3>Davvero Gelateria</h3>
          <p class="obra-desc">Três unidades da rede, com acabamento e marcenaria de padrão.</p>
          <span class="obra-meta">
            <span class="small">Gelateria</span>
            <span class="small">4 fotos</span>
          </span>
        </span>
      </button>

      <button class="obra" type="button" data-reveal="fig"
        data-title="Fichips"
        data-gallery="assets/img/portfolio/fichips/01.webp|assets/img/portfolio/fichips/02.webp|assets/img/portfolio/fichips/03.webp|assets/img/portfolio/fichips/04.webp"
        aria-label="Abrir galeria da obra Fichips, 4 fotos">
        <span class="obra-fig">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/portfolio/fichips/capa.webp' ) ); ?>" width="1000" height="750" loading="lazy"
               alt="Fachada da loja Fichips entregue, com fachada em ACM e vitrine">
          <span class="obra-zoom" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M16 16l5 5M11 8v6M8 11h6"/></svg>
          </span>
        </span>
        <span class="obra-body">
          <span class="obra-over">São Paulo e Rio de Janeiro</span>
          <h3>Fichips</h3>
          <p class="obra-desc">Onze unidades da rede, a maior expansão acompanhada pela empresa.</p>
          <span class="obra-meta">
            <span class="small">Fast food</span>
            <span class="small">4 fotos</span>
          </span>
        </span>
      </button>

      <button class="obra" type="button" data-reveal="fig"
        data-title="Vino"
        data-gallery="assets/img/portfolio/vino/01.webp|assets/img/portfolio/vino/02.webp|assets/img/portfolio/vino/03.webp|assets/img/portfolio/vino/04.webp|assets/img/portfolio/vino/05.webp"
        aria-label="Abrir galeria da obra Vino, 5 fotos">
        <span class="obra-fig">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/portfolio/vino/capa.webp' ) ); ?>" width="1000" height="750" loading="lazy"
               alt="Fachada da adega e restaurante Vino após a entrega da obra">
          <span class="obra-zoom" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M16 16l5 5M11 8v6M8 11h6"/></svg>
          </span>
        </span>
        <span class="obra-body">
          <span class="obra-over">São Paulo</span>
          <h3>Vino</h3>
          <p class="obra-desc">Adega e salão, com mármore, escada iluminada e área climatizada.</p>
          <span class="obra-meta">
            <span class="small">Adega e restaurante</span>
            <span class="small">5 fotos</span>
          </span>
        </span>
      </button>

      <button class="obra" type="button" data-reveal="fig"
        data-title="Varejo e bem-estar"
        data-gallery="assets/img/portfolio/varejo/01.webp|assets/img/portfolio/varejo/02.webp|assets/img/portfolio/varejo/03.webp|assets/img/portfolio/varejo/04.webp|assets/img/portfolio/varejo/05.webp"
        aria-label="Abrir galeria das obras de varejo e bem-estar, 5 fotos">
        <span class="obra-fig">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/portfolio/varejo/capa.webp' ) ); ?>" width="1000" height="750" loading="lazy"
               alt="Fachada do centro estético Chat Noir entregue em shopping">
          <span class="obra-zoom" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M16 16l5 5M11 8v6M8 11h6"/></svg>
          </span>
        </span>
        <span class="obra-body">
          <span class="obra-over">São Paulo</span>
          <h3>Varejo e bem-estar</h3>
          <p class="obra-desc">Chat Noir, Academia da Face e Costume, entre lojas e salão de eventos.</p>
          <span class="obra-meta">
            <span class="small">Varejo e serviços</span>
            <span class="small">5 fotos</span>
          </span>
        </span>
      </button>

    </div>
  </div>
</section>

<!-- ====================================================== DEPOIMENTOS -->
<section class="sec quotes dark" id="depoimentos">
  <div class="quotes-bg" data-parallax="0.07">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/acabamento.webp' ) ); ?>" width="1170" height="1148" loading="lazy" alt="">
  </div>
  <div class="quotes-scrim" aria-hidden="true"></div>

  <div class="container">
    <span class="eyebrow" data-reveal="soft">06 <span class="sl">/</span> Quem já contratou</span>

    <div class="q-lead-wrap">
      <blockquote class="q-lead" data-reveal="soft">
        Profissionalismo, atenção aos detalhes e
        <span class="hl">entrega dentro do prazo</span>. Empresa de confiança,
        recomendo de olhos fechados.
      </blockquote>
      <p class="q-by" data-reveal="soft">
        Cliente com duas obras executadas, Shopping Internacional de Guarulhos e São Bernardo
      </p>
    </div>

    <ul class="q-list">
      <li data-reveal>
        <span class="q-mark" aria-hidden="true">&ldquo;</span>
        <p>Obra da nossa loja no Shopping Passeio das Águas, em Goiânia, executada em tempo
           recorde pela Engenharia Santa Clara. Tudo correu super bem, com ótimo acompanhamento
           e atenção do Engenheiro Luiz.</p>
        <p class="q-by">Franqueado, Shopping Passeio das Águas, Goiânia</p>
      </li>
      <li data-reveal>
        <span class="q-mark" aria-hidden="true">&ldquo;</span>
        <p>A obra da nossa loja no Partage Shopping, em Betim, ficou linda. O resultado superou
           as expectativas, e toda a equipe gostou bastante. Trabalho excelente do Engenheiro
           Luiz e sua equipe.</p>
        <p class="q-by">Franqueado, Partage Shopping, Betim</p>
      </li>
      <li data-reveal>
        <span class="q-mark" aria-hidden="true">&ldquo;</span>
        <p>Já realizei três obras com a Engenharia Santa Clara, unidades da Davvero nos shoppings
           Plaza Sul, Eldorado e Morumbi. Sempre com ótimo atendimento, qualidade e cumprimento
           de prazos.</p>
        <p class="q-by">Franqueado Davvero, Plaza Sul, Eldorado e Morumbi</p>
      </li>
    </ul>
  </div>
</section>

<!-- ====================================================== CTA FINAL -->
<section class="sec alt" id="contato">
  <div class="container">
    <div class="cta-grid">
      <div>
        <span class="eyebrow" data-reveal="soft">07 <span class="sl">/</span> Solicitar orçamento</span>
        <h2 data-split>Manda a área e o manual da rede. A gente devolve prazo e orçamento.</h2>
        <p class="lede" data-reveal style="margin-top:1.5rem">
          Sem formulário longo e sem intermediário. A conversa começa direto no WhatsApp com
          quem responde tecnicamente pela obra.
        </p>

        <div class="cta-actions" data-reveal>
          <a class="btn btn-solid" data-wa-btn="obra comercial para franquia">
            Solicitar orçamento no WhatsApp <span class="arw" aria-hidden="true">&rsaquo;</span>
          </a>
        </div>

        <ul class="cta-contacts" data-reveal>
          <li>
            <a href="tel:+5511947340026">Luiz Fernando Ferrari</a>
            <span>(11) 94734-0026</span>
          </li>
          <li>
            <a href="tel:+5511984151528">Luciana Souza Teixeira</a>
            <span>(11) 98415-1528</span>
          </li>
          <li>
            <a href="mailto:engsantaclara@gmail.com">engsantaclara@gmail.com</a>
            <span>E-mail comercial</span>
          </li>
        </ul>
      </div>

      <div class="steps" data-seq>
        <div class="steps-line" aria-hidden="true"><i></i></div>

        <article class="step">
          <b>1</b>
          <h3>Fale com o engenheiro responsável</h3>
          <p>A conversa começa direto com quem vai tocar a obra, não com um atendimento
             intermediário.</p>
        </article>
        <article class="step">
          <b>2</b>
          <h3>Envie a área e o padrão da marca</h3>
          <p>Planta, memorial da franqueadora e a data que o shopping estipulou para a
             inauguração.</p>
        </article>
        <article class="step">
          <b>3</b>
          <h3>Receba orçamento aberto e cronograma</h3>
          <p>Escopo item a item e o prazo por frente de serviço, para você decidir com número na
             mão.</p>
        </article>
      </div>
    </div>
  </div>
</section>

</main>
<?php
get_footer();
