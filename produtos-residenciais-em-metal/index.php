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
$title = 'Produtos Residenciais em Metal | BIRDSTEEL';
$description = 'Produtos residenciais em metal sob medida: totens, grades, soleiras em inox, perfis, camas flutuantes e soluções personalizadas.';
$canonical = site_url('/produtos-residenciais-em-metal/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'residencial';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Linha Residencial</p>
      <h1 id="page-title">Produtos residenciais em metal</h1>
      <p class="lead">Totens residenciais, grades de proteção, soleiras em inox, perfis, camas flutuantes e soluções metálicas sob medida para fachadas, entradas, proteção e acabamento.</p>
      <div class="button-row"><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Produtos personalizados para cada imóvel.</li>
<li>Foco em acabamento, proporção e aplicação.</li>
<li>Atendimento conforme medidas, fotos e viabilidade.</li></ul>
    </aside>
  </div>
</section>
<section class="section section-products"><div class="container"><div class="section-header"><p class="section-kicker">Produtos residenciais</p><h2>Soluções para fachada, proteção e acabamento</h2><p>Peças metálicas personalizadas para melhorar identificação, segurança, acabamento e design do imóvel.</p></div><div class="cards-grid products-grid">
<article class="card product-card"><h3>Totem Residencial com Número</h3><p>Totens personalizados com número e nome da rua para fachadas.</p><a href="/totem-residencial-com-numero/">Ver produto</a></article>
<article class="card product-card"><h3>Grades de Proteção</h3><p>Grades sob medida para janelas, portas, varandas e áreas externas.</p><a href="/grades-de-protecao-sob-medida/">Ver produto</a></article>
<article class="card product-card"><h3>Soleira de Porta em Inox</h3><p>Soleiras em inox para portas, passagens e transições de piso.</p><a href="/soleira-de-porta-em-inox/">Ver produto</a></article>
<article class="card product-card"><h3>Perfil L Inox 304 Escovado</h3><p>Perfis para bordas, cantos, filetes e acabamentos residenciais.</p><a href="/perfil-l-inox-304-escovado/">Ver produto</a></article>
<article class="card product-card"><h3>Cama Flutuante em Aço</h3><p>Estrutura metálica residencial com efeito visual moderno.</p><a href="/cama-flutuante-em-aco/">Ver produto</a></article>
<article class="card product-card"><h3>Sob Medida Residencial</h3><p>Projetos metálicos personalizados para necessidades específicas.</p><a href="/engenharia-sob-medida/">Ver sob medida</a></article>
</div></div></section>
<section class="section section-custom"><div class="container narrow"><p class="section-kicker">Como solicitar</p><h2>Fotos da fachada ou do local ajudam muito no orçamento</h2><p>Para produtos residenciais, envie fotos do local, medidas aproximadas, estilo desejado, cor, acabamento e cidade. Isso permite avaliar proporção e viabilidade antes da fabricação.</p><a class="btn btn-primary" href="/contato/">Solicitar orçamento residencial</a></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
