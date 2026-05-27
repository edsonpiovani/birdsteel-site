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
$title = 'Perfil L Inox 304 Escovado | BIRDSTEEL';
$description = 'Perfis em inox 304 escovado para bordas, cantos, filetes, revestimentos e acabamentos.';
$canonical = site_url('/perfil-l-inox-304-escovado/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'residencial';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Produto BIRDSTEEL</p>
      <h1 id="page-title">Perfil L Inox 304 Escovado</h1>
      <p class="lead">Perfis em inox 304 escovado para bordas, cantos, filetes, revestimentos e acabamentos.</p>
      <div class="button-row"><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Cortes sob medida.</li>
<li>Aplicação em acabamento residencial.</li>
<li>Medidas e quantidade para orçamento.</li></ul>
    </aside>
  </div>
</section>
<section class="section section-light"><div class="container split-layout"><div><p class="section-kicker">Sob medida</p><h2>Fabricado conforme aplicação e medidas</h2><p>Este produto deve ser especificado conforme uso real, ambiente, dimensões, quantidade, material, acabamento e viabilidade técnica. A BIRDSTEEL avalia cada solicitação antes da proposta.</p><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a></div><div class="info-panel"><h3>Envie para orçamento</h3><ul class="check-list"><li>Medidas aproximadas.</li><li>Quantidade desejada.</li><li>Fotos do local ou referência.</li><li>Material ou acabamento desejado.</li><li>Cidade/UF e prazo esperado.</li></ul></div></div></section>
<section class="section section-products"><div class="container"><div class="section-header"><p class="section-kicker">Projetos</p><h2>Veja também projetos e soluções relacionadas</h2></div><div class="cards-grid three-columns"><article class="card"><h3>Projetos BIRDSTEEL</h3><p>Conheça exemplos de produtos e aplicações fabricadas pela empresa.</p><a class="text-link" href="/projetos/">Ver projetos</a></article><article class="card"><h3>Engenharia sob medida</h3><p>Quando o padrão não resolve, avaliamos uma solução personalizada.</p><a class="text-link" href="/engenharia-sob-medida/">Ver sob medida</a></article><article class="card"><h3>Contato</h3><p>Envie sua necessidade para receber uma avaliação comercial.</p><a class="text-link" href="/contato/">Falar com a BIRDSTEEL</a></article></div></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
