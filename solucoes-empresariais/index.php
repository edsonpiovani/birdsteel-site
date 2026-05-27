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
$title = 'Soluções Empresariais em Metal | BIRDSTEEL';
$description = 'Soluções metálicas empresariais sob medida: racks, gabinetes, painéis, caixas, calhas, luminárias e estruturas técnicas.';
$canonical = site_url('/solucoes-empresariais/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'empresarial';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Linha Empresarial</p>
      <h1 id="page-title">Soluções metálicas para empresas</h1>
      <p class="lead">Racks, gabinetes, painéis, caixas, estruturas para baterias, calhas, luminárias técnicas e projetos metálicos sob medida para aplicações empresariais, industriais e técnicas.</p>
      <div class="button-row"><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Data center, telecom, energia e automação.</li>
<li>Fabricação conforme aplicação e medidas.</li>
<li>Acabamentos e materiais avaliados por projeto.</li></ul>
    </aside>
  </div>
</section>
<section class="section section-products">
  <div class="container">
    <div class="section-header"><p class="section-kicker">Produtos empresariais</p><h2>Principais soluções para empresas</h2><p>Produtos metálicos para organização, proteção, infraestrutura técnica e aplicações sob medida.</p></div>
    <div class="cards-grid products-grid">
      <article class="card product-card"><h3>Rack para Data Center</h3><p>Estruturas metálicas para TI, telecom, servidores e salas técnicas.</p><a href="/rack-para-data-center/">Ver produto</a></article>
      <article class="card product-card"><h3>Gabinetes Metálicos</h3><p>Gabinetes para network, telecom, automação e aplicações técnicas.</p><a href="/gabinetes-metalicos-sob-medida/">Ver produto</a></article>
      <article class="card product-card"><h3>Painéis Elétricos</h3><p>Estruturas metálicas para painéis elétricos, comando e distribuição.</p><a href="/paineis-eletricos/">Ver produto</a></article>
      <article class="card product-card"><h3>Caixa em Inox</h3><p>Caixas em inox para aplicações técnicas, comerciais e industriais.</p><a href="/caixa-em-inox/">Ver produto</a></article>
      <article class="card product-card"><h3>Caixa de Comando</h3><p>Invólucros metálicos para comandos, acionamentos e automação.</p><a href="/caixa-de-comando/">Ver produto</a></article>
      <article class="card product-card"><h3>Rack e Estante para Baterias</h3><p>Estruturas para bancos de baterias, energia, nobreaks e telecom.</p><a href="/rack-para-baterias/">Ver produto</a></article>
    </div>
  </div>
</section>
<section class="section section-custom"><div class="container split-layout"><div><p class="section-kicker">Sob medida</p><h2>Projetos empresariais exigem clareza técnica</h2><p>Para uma proposta adequada, envie medidas, aplicação, quantidade, ambiente de uso, fotos, desenhos ou referências. A BIRDSTEEL avalia a viabilidade antes de confirmar o escopo.</p><a class="btn btn-primary" href="/contato/">Solicitar orçamento empresarial</a></div><div class="info-panel"><h3>O que informar</h3><ul class="check-list"><li>Produto ou aplicação.</li><li>Medidas e quantidade.</li><li>Material ou acabamento desejado.</li><li>Ambiente interno ou externo.</li><li>Fotos, croquis ou desenhos.</li></ul></div></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
