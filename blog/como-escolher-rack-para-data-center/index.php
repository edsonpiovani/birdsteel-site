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
$title = 'Como Escolher Rack para Data Center | Guia Técnico BIRDSTEEL';
$description = 'Veja como escolher rack para data center considerando medidas, equipamentos, ventilação, cabeamento, acesso, acabamento e fabricação sob medida.';
$canonical = site_url('/blog/como-escolher-rack-para-data-center/');
$currentPage = 'blog';
$faqs = [
  ['question'=>'Como escolher o tamanho de um rack para data center?', 'answer'=>'O tamanho deve considerar equipamentos, profundidade, cabos, ventilação, manutenção e possibilidade de expansão.'],
  ['question'=>'Quando vale a pena usar rack sob medida?', 'answer'=>'Quando o espaço é limitado, os equipamentos têm medidas específicas ou o projeto precisa de furações, passagens e acessórios personalizados.']
];
$schemaExtra = faq_schema($faqs);
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
$breadcrumbs = [['label'=>'Início','url'=>'/'], ['label'=>'Blog','url'=>'/blog/'], ['label'=>'Como escolher rack para data center','url'=>null]];
include PROJECT_ROOT . '/includes/breadcrumb.php';
?>
<section class="hero"><div class="container"><span class="eyebrow">Guia técnico</span><h1>Como escolher rack para data center</h1><p class="lead">Critérios práticos para avaliar medidas, equipamentos, ventilação, cabeamento, acesso e fabricação sob medida.</p></div></section>
<section class="section article"><div class="container article-layout"><article class="article-content"><h2>O que é um rack para data center?</h2><p>O rack para data center é uma estrutura usada para acomodar, organizar e proteger equipamentos de TI, servidores, switches, roteadores, nobreaks e componentes de telecomunicações.</p><h2>1. Avalie os equipamentos</h2><p>Liste servidores, switches, patch panels, nobreaks, bandejas, organizadores, calhas e espaços de reserva.</p><h2>2. Defina medidas com base no uso real</h2><p>Altura, largura e profundidade devem considerar equipamentos, cabos, ventilação e acesso.</p><h2>Checklist para orçamento</h2><ul><li>Medidas desejadas.</li><li>Lista de equipamentos.</li><li>Ambiente de instalação.</li><li>Ventilação e passagem de cabos.</li><li>Fotos, croquis ou referências.</li></ul><h2>Perguntas frequentes</h2><?php foreach ($faqs as $faq): ?><h3><?= e($faq['question']) ?></h3><p><?= e($faq['answer']) ?></p><?php endforeach; ?></article><aside class="sidebar card"><h2>Precisa de um rack?</h2><p>Solicite avaliação para fabricação sob medida.</p><a class="btn btn-primary" href="/rack-para-data-center/">Ver solução</a></aside></div></section>
<?php include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
