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
$title = 'Título SEO do Artigo | BIRDSTEEL';
$description = 'Meta description única do artigo.';
$canonical = site_url('/blog/url-do-artigo/');
$currentPage = 'blog';
$faqs = [];
$schemaExtra = faq_schema($faqs);
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
$breadcrumbs = [['label'=>'Início','url'=>'/'], ['label'=>'Blog','url'=>'/blog/'], ['label'=>'Artigo','url'=>null]];
include PROJECT_ROOT . '/includes/breadcrumb.php';
?>
<section class="hero"><div class="container"><span class="eyebrow">Guia técnico</span><h1>H1 do artigo</h1><p class="lead">Introdução curta do artigo.</p></div></section>
<section class="section article"><div class="container article-layout"><article class="article-content"><h2>Primeira seção</h2><p>Conteúdo do artigo.</p></article><aside class="sidebar card"><h2>CTA lateral</h2><p>Chamada para página comercial relacionada.</p></aside></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
