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
$title = 'Projetos BIRDSTEEL | Soluções Metálicas Sob Medida';
$description = 'Conheça projetos e produtos metálicos fabricados pela BIRDSTEEL para empresas e residências.';
$canonical = site_url('/projetos/');
$currentPage = 'projetos';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
$breadcrumbs = [['label'=>'Início','url'=>'/'], ['label'=>'Projetos','url'=>null]];
include PROJECT_ROOT . '/includes/breadcrumb.php';
?>
<section class="hero"><div class="container"><span class="eyebrow">Portfólio</span><h1>Projetos BIRDSTEEL</h1><p class="lead">Produtos metálicos fabricados sob medida para empresas, indústrias, residências e aplicações técnicas.</p></div></section>
<section class="section section-light">
  <div class="container">
    <div class="filter-row" aria-label="Filtros de projetos">
      <button class="filter-btn is-active" data-filter="todos">Todos</button>
      <button class="filter-btn" data-filter="empresarial">Empresarial</button>
      <button class="filter-btn" data-filter="residencial">Residencial</button>
      <button class="filter-btn" data-filter="inox">Inox</button>
      <button class="filter-btn" data-filter="baterias">Baterias</button>
    </div>
    <div class="grid-3">
      <article class="card" data-category="empresarial racks"><h3>Rack para Data Center</h3><p>Estrutura metálica para infraestrutura de TI.</p><a class="card-link" href="/rack-para-data-center/">Ver solução</a></article>
      <article class="card" data-category="empresarial inox"><h3>Caixa em Inox</h3><p>Caixa técnica em inox sob medida.</p><a class="card-link" href="/caixa-em-inox/">Ver solução</a></article>
      <article class="card" data-category="residencial"><h3>Totem Residencial</h3><p>Identificação de fachada com número e nome da rua.</p><a class="card-link" href="/totem-residencial-com-numero/">Ver solução</a></article>
      <article class="card" data-category="residencial"><h3>Grades de Proteção</h3><p>Grades metálicas sob medida para residências.</p><a class="card-link" href="/grades-de-protecao-sob-medida/">Ver solução</a></article>
      <article class="card" data-category="empresarial baterias"><h3>Rack para Baterias</h3><p>Estrutura metálica para sistemas de energia e backup.</p><a class="card-link" href="/rack-para-baterias/">Ver solução</a></article>
      <article class="card" data-category="residencial inox"><h3>Soleira em Inox</h3><p>Acabamento em inox para portas e transições.</p><a class="card-link" href="/soleira-de-porta-em-inox/">Ver solução</a></article>
    </div>
  </div>
</section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
