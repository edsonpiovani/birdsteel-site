<?php
$root = __DIR__;
while (!is_file($root . '/includes/config.php') && dirname($root) !== $root) {
    $root = dirname($root);
}
if (!is_file($root . '/includes/config.php')) {
    http_response_code(500);
    exit('Configuração do site não encontrada.');
}
require_once $root . '/includes/config.php';

$title = 'BIRDSTEEL | Soluções metálicas sob medida em Boituva/SP';
$description = 'A BIRDSTEEL fabrica soluções metálicas sob medida para empresas e residências: racks, gabinetes, painéis, caixas, totens, grades, soleiras e camas flutuantes.';
$canonical = 'https://birdsteel.com.br/';
$ogTitle = $title;
$ogDescription = $description;
$ogImage = 'https://birdsteel.com.br/assets/img/institucional/birdsteel-home-og.webp';
$robots = 'index, follow';
$pageClass = 'home-page';
$currentPage = 'home';

include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

  <section class="hero hero-home home-premium-hero" aria-labelledby="home-title">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">Desde 2011 · Boituva/SP</p>
        <h1 id="home-title">Metal sob medida para empresas, casas e projetos especiais</h1>
        <p class="hero-lead">
          Da infraestrutura técnica ao detalhe arquitetônico: racks, gabinetes, painéis, caixas, totens, grades, soleiras e peças personalizadas em aço, inox e alumínio.
        </p>

        <div class="hero-actions" aria-label="Ações principais">
          <a class="btn btn-primary" href="/contato/">Solicitar orçamento</a>
          <a class="btn btn-secondary" href="/projetos/">Ver projetos</a>
        </div>

        <ul class="hero-highlights" aria-label="Diferenciais principais">
          <li>Fabricação sob medida</li>
          <li>Empresarial e residencial</li>
          <li>Aço, inox e alumínio</li>
        </ul>
      </div>

      <div class="hero-showcase" aria-label="Aplicações BIRDSTEEL">
        <figure class="hero-media">
          <img src="/assets/img/institucional/birdsteel-solucoes-metalicas-home.webp" alt="Composição visual conceitual com soluções metálicas empresariais e residenciais da BIRDSTEEL" width="1200" height="900" fetchpriority="high">
        </figure>
        <div class="hero-spec-card hero-spec-card-one">
          <strong>Projetos técnicos</strong>
          <span>racks · gabinetes · painéis · caixas</span>
        </div>
        <div class="hero-spec-card hero-spec-card-two">
          <strong>Produtos residenciais</strong>
          <span>totens · grades · soleiras · acabamentos</span>
        </div>
      </div>
    </div>

    <div class="container hero-proof-strip" aria-label="Resumo da atuação BIRDSTEEL">
      <div>
        <strong>2011</strong>
        <span>início da atuação</span>
      </div>
      <div>
        <strong>2 frentes</strong>
        <span>empresarial e residencial</span>
      </div>
      <div>
        <strong>Sob medida</strong>
        <span>medidas, acabamento e aplicação</span>
      </div>
    </div>
  </section>

  <section class="section section-intro home-intro" aria-labelledby="intro-title">
    <div class="container intro-grid">
      <div>
        <p class="section-kicker">Fabricação metálica sob medida</p>
        <h2 id="intro-title">Produtos técnicos, residenciais e personalizados em metal</h2>
      </div>
      <div>
        <p>
          A BIRDSTEEL atua desde 2011 com soluções metálicas para diferentes necessidades. A empresa atende demandas empresariais, industriais, técnicas e residenciais, avaliando medidas, aplicação, acabamento, material e viabilidade do projeto.
        </p>
        <p>
          O objetivo é desenvolver produtos metálicos adequados ao uso real do cliente, evitando soluções genéricas quando o projeto exige uma peça sob medida.
        </p>
      </div>
    </div>
  </section>

  <section class="section section-lines home-lines" aria-labelledby="linhas-title">
    <div class="container">
      <div class="section-header center-header">
        <p class="section-kicker">Linhas de atuação</p>
        <h2 id="linhas-title">Duas frentes comerciais com a mesma capacidade de fabricação</h2>
        <p>Produtos metálicos para empresas e residências, com desenvolvimento conforme aplicação e necessidade do projeto.</p>
      </div>

      <div class="cards-grid two-columns home-line-grid">
        <article class="card card-feature line-card line-card-business">
          <p class="card-kicker">Linha empresarial</p>
          <h3>Soluções metálicas para empresas</h3>
          <p>
            Racks, gabinetes, painéis, caixas, calhas, luminárias técnicas e estruturas para aplicações empresariais, industriais, telecom, data center, energia e automação.
          </p>
          <a class="text-link" href="/solucoes-empresariais/">Conhecer soluções empresariais</a>
        </article>

        <article class="card card-feature line-card line-card-home">
          <p class="card-kicker">Linha residencial</p>
          <h3>Produtos residenciais em metal</h3>
          <p>
            Totens residenciais, grades de proteção, soleiras em inox, perfis, camas flutuantes e produtos personalizados para fachadas, entradas, proteção e acabamento.
          </p>
          <a class="text-link" href="/produtos-residenciais-em-metal/">Conhecer produtos residenciais</a>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-products home-products" aria-labelledby="produtos-title">
    <div class="container">
      <div class="section-header center-header">
        <p class="section-kicker">Produtos BIRDSTEEL</p>
        <h2 id="produtos-title">Principais soluções metálicas</h2>
        <p>Seleção de produtos estratégicos para empresas, residências e projetos sob medida.</p>
      </div>

      <div class="cards-grid products-grid">
        <article class="card product-card premium-product-card">
          <span class="product-number">01</span>
          <h3>Rack para Data Center</h3>
          <p>Racks metálicos para TI, telecom, servidores e infraestrutura técnica.</p>
          <a href="/rack-para-data-center/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">02</span>
          <h3>Gabinetes Metálicos</h3>
          <p>Gabinetes sob medida para network, telecom, automação e aplicações técnicas.</p>
          <a href="/gabinetes-metalicos-sob-medida/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">03</span>
          <h3>Painéis Elétricos</h3>
          <p>Estruturas metálicas para painéis elétricos empresariais e industriais.</p>
          <a href="/paineis-eletricos/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">04</span>
          <h3>Caixa em Inox</h3>
          <p>Caixas em inox para aplicações técnicas, comerciais e industriais.</p>
          <a href="/caixa-em-inox/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">05</span>
          <h3>Caixa de Comando</h3>
          <p>Caixas metálicas para comando, automação, acionamentos e interfaces técnicas.</p>
          <a href="/caixa-de-comando/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">06</span>
          <h3>Rack para Baterias</h3>
          <p>Estruturas metálicas para bancos de baterias, energia, nobreaks e telecom.</p>
          <a href="/rack-para-baterias/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">07</span>
          <h3>Totem Residencial</h3>
          <p>Totens personalizados com número e nome da rua para fachadas residenciais.</p>
          <a href="/totem-residencial-com-numero/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">08</span>
          <h3>Grades de Proteção</h3>
          <p>Grades metálicas sob medida para janelas, portas, varandas e áreas externas.</p>
          <a href="/grades-de-protecao-sob-medida/">Ver produto</a>
        </article>

        <article class="card product-card premium-product-card">
          <span class="product-number">09</span>
          <h3>Soleira de Porta em Inox</h3>
          <p>Soleiras em inox para portas, passagens e transições de piso.</p>
          <a href="/soleira-de-porta-em-inox/">Ver produto</a>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-custom home-custom" aria-labelledby="sob-medida-title">
    <div class="container split-layout">
      <div>
        <p class="section-kicker">Projetos personalizados</p>
        <h2 id="sob-medida-title">Quando o produto padrão não resolve, entra a fabricação sob medida</h2>
        <p>
          Muitos projetos exigem medidas especiais, recortes, furações, acabamento específico, adaptação ao ambiente ou integração com outros componentes. Nesses casos, a BIRDSTEEL avalia a necessidade para desenvolver uma solução metálica adequada ao uso.
        </p>
        <a class="btn btn-primary" href="/engenharia-sob-medida/">Conhecer engenharia sob medida</a>
      </div>

      <div class="info-panel premium-info-panel">
        <h3>Informações úteis para orçamento</h3>
        <ul class="check-list">
          <li>Produto desejado ou aplicação.</li>
          <li>Medidas aproximadas.</li>
          <li>Quantidade.</li>
          <li>Material ou acabamento desejado.</li>
          <li>Fotos, croquis ou referências.</li>
          <li>Cidade/UF e prazo esperado.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section-capacity home-materials" aria-labelledby="capacidade-title">
    <div class="container">
      <div class="section-header center-header">
        <p class="section-kicker">Materiais e acabamento</p>
        <h2 id="capacidade-title">Soluções em aço, inox e alumínio</h2>
        <p>A escolha do material e do acabamento depende da aplicação, ambiente de uso, estética desejada e viabilidade técnica.</p>
      </div>

      <div class="cards-grid three-columns material-grid">
        <article class="card material-card">
          <h3>Aço</h3>
          <p>Aplicado em estruturas, racks, grades, camas flutuantes, suportes e produtos com necessidade de resistência e pintura.</p>
        </article>
        <article class="card material-card featured-material">
          <h3>Inox</h3>
          <p>Usado em caixas, soleiras, perfis, filetes e acabamentos que exigem visual técnico, limpo e maior resistência à corrosão.</p>
        </article>
        <article class="card material-card">
          <h3>Alumínio</h3>
          <p>Pode ser avaliado em projetos que exigem leveza, acabamento específico ou composição estrutural diferenciada.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-projects home-projects" aria-labelledby="projetos-title">
    <div class="container split-layout reverse">
      <div class="gallery-preview premium-gallery" aria-label="Prévia de projetos BIRDSTEEL">
        <figure>
          <img src="/assets/img/projetos/projetos-birdsteel-preview.webp" alt="Colagem conceitual com soluções empresariais e residenciais da BIRDSTEEL" width="900" height="700" loading="lazy">
        </figure>
      </div>

      <div>
        <p class="section-kicker">Portfólio</p>
        <h2 id="projetos-title">Veja projetos e produtos fabricados pela BIRDSTEEL</h2>
        <p>
          A página de projetos reúne exemplos de produtos empresariais, residenciais e personalizados. Use as imagens como referência para solicitar orçamento de uma solução parecida ou sob medida.
        </p>
        <a class="btn btn-secondary btn-dark-text" href="/projetos/">Ver projetos</a>
      </div>
    </div>
  </section>

  <section class="section section-about home-about" aria-labelledby="sobre-title">
    <div class="container narrow">
      <p class="section-kicker">Sobre a BIRDSTEEL</p>
      <h2 id="sobre-title">Experiência em fabricação metálica desde 2011</h2>
      <p>
        Fundada em fevereiro de 2011, a BIRDSTEEL iniciou sua atuação com produtos metálicos para racks, gabinetes, network e telecomunicações. Com o tempo, ampliou seu atendimento para soluções empresariais, técnicas, industriais e residenciais.
      </p>
      <p>
        Hoje, a empresa trabalha com duas frentes principais: soluções metálicas para empresas e produtos residenciais em metal, mantendo a fabricação sob medida como eixo central da marca.
      </p>
      <a class="text-link" href="/empresa/">Conhecer a empresa</a>
    </div>
  </section>

  <section class="section section-blog home-blog" aria-labelledby="blog-title">
    <div class="container">
      <div class="section-header center-header">
        <p class="section-kicker">Conteúdo técnico</p>
        <h2 id="blog-title">Guias para ajudar na escolha do produto metálico</h2>
      </div>

      <div class="cards-grid three-columns">
        <article class="card article-card">
          <h3>Como escolher rack para data center</h3>
          <p>Critérios para definir medidas, ventilação, cabeamento e acessórios.</p>
          <a href="/blog/como-escolher-rack-para-data-center/">Ler artigo</a>
        </article>
        <article class="card article-card">
          <h3>Diferença entre inox 304, 316 e 316L</h3>
          <p>Entenda como escolher o inox conforme aplicação e ambiente.</p>
          <a href="/blog/diferenca-entre-caixa-inox-304-316-e-316l/">Ler artigo</a>
        </article>
        <article class="card article-card">
          <h3>Pintura epóxi em produtos metálicos</h3>
          <p>Veja cuidados, vantagens e limitações desse acabamento.</p>
          <a href="/blog/pintura-epoxi-em-produtos-metalicos/">Ler artigo</a>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-faq home-faq" aria-labelledby="faq-title">
    <div class="container narrow">
      <p class="section-kicker">Dúvidas frequentes</p>
      <h2 id="faq-title">Perguntas frequentes sobre a BIRDSTEEL</h2>

      <div class="faq-list">
        <details>
          <summary>A BIRDSTEEL fabrica produtos sob medida?</summary>
          <p>Sim. A BIRDSTEEL fabrica produtos metálicos sob medida conforme aplicação, medidas, material, acabamento e viabilidade técnica.</p>
        </details>
        <details>
          <summary>A empresa atende empresas e residências?</summary>
          <p>Sim. A BIRDSTEEL atua com soluções empresariais e produtos residenciais em metal, mantendo as duas frentes com peso comercial.</p>
        </details>
        <details>
          <summary>Quais materiais a BIRDSTEEL trabalha?</summary>
          <p>A empresa pode avaliar projetos em aço, inox e alumínio, conforme aplicação, acabamento desejado e viabilidade técnica.</p>
        </details>
        <details>
          <summary>A BIRDSTEEL atende fora de Boituva?</summary>
          <p>A empresa atende Boituva e região em diferentes demandas. Alguns produtos podem ser negociados para atendimento nacional, conforme tipo de item, quantidade e viabilidade de transporte.</p>
        </details>
        <details>
          <summary>O que devo enviar para solicitar orçamento?</summary>
          <p>Envie produto desejado, aplicação, medidas aproximadas, quantidade, material ou acabamento desejado, cidade/UF, fotos, croquis ou referências visuais.</p>
        </details>
      </div>
    </div>
  </section>

  <?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "A BIRDSTEEL fabrica produtos sob medida?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. A BIRDSTEEL fabrica produtos metálicos sob medida conforme aplicação, medidas, material, acabamento e viabilidade técnica."
      }
    },
    {
      "@type": "Question",
      "name": "A empresa atende empresas e residências?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. A BIRDSTEEL atua com soluções empresariais e produtos residenciais em metal."
      }
    },
    {
      "@type": "Question",
      "name": "Quais materiais a BIRDSTEEL trabalha?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A empresa pode avaliar projetos em aço, inox e alumínio, conforme aplicação, acabamento desejado e viabilidade técnica."
      }
    }
  ]
}
</script>

<?php
include PROJECT_ROOT . '/includes/footer.php';
?>
