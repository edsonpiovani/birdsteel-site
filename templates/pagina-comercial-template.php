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
require_once PROJECT_ROOT . '/includes/schema-faq.php';
$title = 'Título SEO da Página | BIRDSTEEL';
$description = 'Meta description única da página comercial.';
$canonical = site_url('/url-da-pagina/');
$currentPage = 'empresarial';
$faqs = [];
$schemaExtra = faq_schema($faqs);
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
$breadcrumbs = [['label'=>'Início','url'=>'/'], ['label'=>'Página atual','url'=>null]];
include PROJECT_ROOT . '/includes/breadcrumb.php';
?>
<section class="hero"><div class="container"><span class="eyebrow">Categoria</span><h1>H1 da página comercial</h1><p class="lead">Subtítulo da página.</p></div></section>
<section class="section section-light"><div class="container"><h2>Seção principal</h2><p>Conteúdo da página.</p></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
