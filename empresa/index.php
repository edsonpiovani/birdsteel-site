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
$title = 'Empresa | BIRDSTEEL';
$description = 'Conheça a BIRDSTEEL, fabricante de soluções metálicas sob medida para empresas e residências desde 2011.';
$canonical = site_url('/empresa/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'empresa';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Empresa</p>
      <h1 id="page-title">BIRDSTEEL: fabricação metálica desde 2011</h1>
      <p class="lead">A BIRDSTEEL desenvolve soluções metálicas sob medida para empresas e residências, combinando experiência em racks, gabinetes, network, telecom e produtos personalizados.</p>
      <div class="button-row"><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Fundada em fevereiro de 2011.</li>
<li>Atuação em Boituva/SP e região.</li>
<li>Projetos empresariais e residenciais.</li></ul>
    </aside>
  </div>
</section>
<section class="section section-light"><div class="container narrow"><p class="section-kicker">Nossa atuação</p><h2>Da infraestrutura técnica ao produto residencial</h2><p>A BIRDSTEEL iniciou sua trajetória com produtos metálicos ligados a racks, gabinetes, network e telecomunicações. Com o tempo, ampliou sua atuação para soluções empresariais, técnicas, industriais e residenciais.</p><p>Hoje, a empresa trabalha com duas frentes comerciais estratégicas: soluções metálicas para empresas e produtos residenciais em metal, sempre avaliando aplicação, medidas, material, acabamento e viabilidade técnica.</p></div></section>
<section class="section section-products"><div class="container"><div class="mini-kpi-grid"><div class="mini-kpi"><strong>2011</strong><span>Início da trajetória</span></div><div class="mini-kpi"><strong>2</strong><span>Frentes comerciais</span></div><div class="mini-kpi"><strong>Sob medida</strong><span>Base da fabricação</span></div></div></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
