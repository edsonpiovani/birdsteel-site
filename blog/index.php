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
$title = 'Conteúdo Técnico | BIRDSTEEL';
$description = 'Guias técnicos da BIRDSTEEL para escolha de produtos metálicos empresariais e residenciais.';
$canonical = site_url('/blog/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'blog';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Conteúdo Técnico</p>
      <h1 id="page-title">Guias para escolher produtos metálicos</h1>
      <p class="lead">Artigos técnicos da BIRDSTEEL para ajudar na escolha de racks, caixas em inox, pintura, painéis elétricos, totens residenciais e soluções sob medida.</p>
      <div class="button-row"><a class="btn btn-primary" href="/solucoes-empresariais/">Ver produtos</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Conteúdo educativo com foco comercial.</li>
<li>Links para páginas de produtos.</li>
<li>Orientação sem promessas técnicas indevidas.</li></ul>
    </aside>
  </div>
</section>
<section class="section section-blog"><div class="container"><div class="cards-grid three-columns">
<article class="card article-card"><h3>Como escolher rack para data center</h3><p>Critérios para definir rack para TI, telecom e salas técnicas.</p><a href="/blog/como-escolher-rack-para-data-center/">Ler artigo</a></article>
<article class="card article-card"><h3>Diferença entre inox 304, 316 e 316L</h3><p>Como escolher inox para caixas e aplicações técnicas.</p><a href="/blog/diferenca-entre-caixa-inox-304-316-e-316l/">Ler artigo</a></article>
<article class="card article-card"><h3>Pintura epóxi em produtos metálicos</h3><p>Vantagens, limitações e cuidados de acabamento.</p><a href="/blog/pintura-epoxi-em-produtos-metalicos/">Ler artigo</a></article>
<article class="card article-card"><h3>Como especificar painel elétrico metálico</h3><p>Dados essenciais para orçamento e fabricação.</p><a href="/blog/como-especificar-painel-eletrico-metalico/">Ler artigo</a></article>
<article class="card article-card"><h3>Totem residencial com número e nome da rua</h3><p>Critérios para fachada, leitura, material e acabamento.</p><a href="/blog/totem-residencial-com-numero-e-nome-da-rua/">Ler artigo</a></article>
</div></div></section>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
