<?php
$currentPage = $currentPage ?? '';
?>
<header class="site-header" data-site-header>
  <div class="container header-inner">
    <a class="brand" href="<?= e(site_path('/')) ?>" aria-label="BIRDSTEEL - início">
      <img class="brand-logo" src="<?= e(site_path('/assets/img/logo/birdsteel-logo-branco.png')) ?>" alt="BIRDSTEEL" width="180" height="78">
    </a>

    <button class="nav-toggle" type="button" aria-label="Abrir menu" aria-expanded="false" data-nav-toggle>
      <span></span><span></span><span></span>
    </button>

    <nav class="main-nav" aria-label="Menu principal" data-main-nav>
      <a class="nav-link<?= active_class($currentPage, 'home') ?>" href="<?= e(site_path('/')) ?>">Início</a>
      <a class="nav-link<?= active_class($currentPage, 'empresarial') ?>" href="<?= e(site_path('/solucoes-empresariais/')) ?>">Empresarial</a>
      <a class="nav-link<?= active_class($currentPage, 'residencial') ?>" href="<?= e(site_path('/produtos-residenciais-em-metal/')) ?>">Residencial</a>
      <a class="nav-link<?= active_class($currentPage, 'sob-medida') ?>" href="<?= e(site_path('/engenharia-sob-medida/')) ?>">Sob Medida</a>
      <a class="nav-link<?= active_class($currentPage, 'projetos') ?>" href="<?= e(site_path('/projetos/')) ?>">Projetos</a>
      <a class="nav-link<?= active_class($currentPage, 'blog') ?>" href="<?= e(site_path('/blog/')) ?>">Blog</a>
      <a class="nav-link<?= active_class($currentPage, 'empresa') ?>" href="<?= e(site_path('/empresa/')) ?>">Empresa</a>
      <a class="nav-link<?= active_class($currentPage, 'contato') ?>" href="<?= e(site_path('/contato/')) ?>">Contato</a>
      <a class="btn btn-small btn-primary" href="<?= e(site_path('/contato/')) ?>">Solicitar orçamento</a>
    </nav>
  </div>
</header>
<main id="conteudo">
