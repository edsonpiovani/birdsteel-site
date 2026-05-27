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
$title = 'Rack para Data Center Sob Medida | BIRDSTEEL';
$description = 'Rack para data center sob medida, com estrutura metálica, acabamento técnico e fabricação conforme necessidade do projeto.';
$canonical = site_url('/rack-para-data-center/');
$currentPage = 'empresarial';
$faqs = [
  ['question'=>'A BIRDSTEEL fabrica rack para data center sob medida?', 'answer'=>'Sim. A BIRDSTEEL pode fabricar racks para data center conforme medidas, aplicação, acabamento e viabilidade técnica.'],
  ['question'=>'O rack pode ter medidas especiais?', 'answer'=>'Sim. Medidas especiais podem ser avaliadas conforme equipamentos, espaço disponível e aplicação.']
];
$schemaExtra = faq_schema($faqs);
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
$breadcrumbs = [['label'=>'Início','url'=>'/'], ['label'=>'Empresarial','url'=>'/solucoes-empresariais/'], ['label'=>'Rack para Data Center','url'=>null]];
include PROJECT_ROOT . '/includes/breadcrumb.php';
?>
<section class="hero"><div class="container hero-grid"><div><span class="eyebrow">Linha Empresarial · Data Center e TI</span><h1>Rack para data center sob medida</h1><p class="lead">A BIRDSTEEL fabrica racks metálicos para data center, servidores, telecom e infraestrutura de TI, com desenvolvimento conforme medidas, aplicação e necessidade do projeto.</p><div class="button-row"><a class="btn btn-primary" href="/contato/">Solicitar orçamento</a><a class="btn btn-outline" href="/solucoes-empresariais/">Ver soluções empresariais</a></div></div><div class="hero-card"><h2>Dados para orçamento</h2><p>Envie medidas, equipamentos, quantidade, ambiente, ventilação e referências.</p></div></div></section>
<section class="section section-light"><div class="container"><div class="section-head"><span class="eyebrow">Aplicações</span><h2>Estrutura metálica para organizar equipamentos técnicos</h2><p>O rack pode ser usado em data centers, salas técnicas, telecom, infraestrutura empresarial e projetos personalizados.</p></div><div class="grid-3"><article class="card"><h3>Data centers</h3><p>Organização de servidores, rede e infraestrutura técnica.</p></article><article class="card"><h3>Telecom e network</h3><p>Aplicações em comunicação, rede e sistemas técnicos.</p></article><article class="card"><h3>Sob medida</h3><p>Medidas, portas, fechamentos, ventilação e acabamento conforme avaliação.</p></article></div></div></section>
<section class="section"><div class="container"><h2>O que enviar para orçamento</h2><ul><li>Medidas desejadas.</li><li>Equipamentos que serão instalados.</li><li>Ambiente de uso.</li><li>Necessidade de ventilação.</li><li>Quantidade.</li><li>Fotos, desenhos ou referências.</li></ul></div></section>
<section class="section section-light"><div class="container"><h2>Perguntas frequentes</h2><?php foreach ($faqs as $faq): ?><article class="card"><h3><?= e($faq['question']) ?></h3><p><?= e($faq['answer']) ?></p></article><?php endforeach; ?></div></section>
<?php $ctaTitle='Precisa de um rack para data center sob medida?'; $ctaPrimary='Solicitar orçamento de rack'; include PROJECT_ROOT . '/includes/cta-orcamento.php'; ?>
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
