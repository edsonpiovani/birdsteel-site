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
$title = 'Engenharia Sob Medida em Metal | BIRDSTEEL';
$description = 'Fabricação metálica sob medida para empresas e residências, com avaliação de medidas, aplicação, acabamento e viabilidade técnica.';
$canonical = site_url('/engenharia-sob-medida/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'sob-medida';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Engenharia Sob Medida</p>
      <h1 id="page-title">Fabricação metálica quando o padrão não resolve</h1>
      <p class="lead">A BIRDSTEEL avalia projetos metálicos personalizados para empresas e residências, considerando medidas, aplicação, materiais, acabamento e viabilidade técnica.</p>
      <div class="button-row"><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Ideal para medidas especiais.</li>
<li>Recortes, furações e acabamentos personalizados.</li>
<li>Avaliação conforme escopo e viabilidade.</li></ul>
    </aside>
  </div>
</section>
<section class="section section-light"><div class="container"><div class="section-header"><p class="section-kicker">Processo</p><h2>Como funciona o desenvolvimento sob medida</h2></div><div class="cards-grid three-columns"><article class="card"><h3>1. Entendimento</h3><p>Recebemos a necessidade, fotos, medidas, referências e aplicação do produto.</p></article><article class="card"><h3>2. Avaliação técnica</h3><p>Analisamos material, acabamento, fabricação, transporte e viabilidade.</p></article><article class="card"><h3>3. Proposta</h3><p>Preparamos uma proposta conforme escopo validado, quantidade e prazo.</p></article></div></div></section>
<section class="section dark-band"><div class="container split-layout"><div><p class="section-kicker">Aplicações</p><h2>Projetos especiais para diferentes necessidades</h2><p>O sob medida pode atender racks, gabinetes, caixas, suportes, estruturas, totens, grades, móveis metálicos e soluções não padronizadas.</p></div><div class="card"><h3>Envie para análise</h3><ul class="icon-list"><li>Medidas e fotos do local.</li><li>Produto desejado ou problema a resolver.</li><li>Material e acabamento desejado.</li><li>Quantidade e prazo esperado.</li></ul></div></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
