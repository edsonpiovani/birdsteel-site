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
$title = 'Como especificar painel elétrico metálico | BIRDSTEEL';
$description = 'Veja como especificar painel elétrico metálico considerando dimensões, componentes, portas, furações e acabamento.';
$canonical = site_url('/blog/como-especificar-painel-eletrico-metalico/');
$ogTitle = $title;
$ogDescription = $description;
$currentPage = 'blog';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
?>

<section class="page-hero" aria-labelledby="page-title">
  <div class="container page-hero-grid">
    <div>
      <p class="eyebrow">Artigo BIRDSTEEL</p>
      <h1 id="page-title">Como especificar painel elétrico metálico</h1>
      <p class="lead">Veja como especificar painel elétrico metálico considerando dimensões, componentes, portas, furações e acabamento.</p>
      <div class="button-row"><a class="btn btn-primary" href="/paineis-eletricos/">Ver solução relacionada</a><a class="btn btn-secondary" href="/projetos/">Ver projetos</a></div>
    </div>
    <aside class="page-hero-panel">
      <h2>Informações importantes</h2>
      <ul class="icon-list"><li>Conteúdo educativo.</li>
<li>Critérios práticos para orçamento.</li>
<li>Direcionamento para solução BIRDSTEEL.</li></ul>
    </aside>
  </div>
</section>
<section class="section article"><div class="container article-layout"><article class="article-content"><p class="section-kicker">Resumo técnico</p><h2>Como especificar painel elétrico metálico</h2><p>Veja como especificar painel elétrico metálico considerando dimensões, componentes, portas, furações e acabamento.</p><p>Este conteúdo orienta a escolha do produto metálico considerando aplicação, ambiente, material, acabamento e viabilidade técnica. Para uma proposta precisa, envie medidas, fotos, desenhos ou referências.</p><h2>Checklist rápido</h2><ul><li>Aplicação desejada.</li><li>Medidas aproximadas.</li><li>Quantidade.</li><li>Ambiente interno ou externo.</li><li>Material ou acabamento esperado.</li><li>Fotos ou referências.</li></ul><p><a class="btn btn-primary" href="/paineis-eletricos/">Ver solução relacionada</a></p></article><aside class="sidebar"><div class="card"><h3>Solicite orçamento</h3><p>Envie sua necessidade para avaliação da BIRDSTEEL.</p><a class="text-link" href="/contato/">Entrar em contato</a></div></aside></div></section>

<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
