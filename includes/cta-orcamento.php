<?php
$ctaTitle = $ctaTitle ?? 'Precisa de uma solução metálica sob medida?';
$ctaText = $ctaText ?? 'Envie sua necessidade para a BIRDSTEEL. Avaliamos aplicação, medidas, acabamento, quantidade e viabilidade técnica para preparar uma proposta adequada.';
$ctaPrimary = $ctaPrimary ?? 'Solicitar orçamento';
$ctaLink = $ctaLink ?? site_path('/contato/');
$ctaWhats = $ctaWhats ?? 'Chamar no WhatsApp';
?>
<section class="section cta-section">
  <div class="container cta-box">
    <div>
      <span class="eyebrow">Orçamento BIRDSTEEL</span>
      <h2><?= e($ctaTitle) ?></h2>
      <p><?= e($ctaText) ?></p>
    </div>
    <div class="button-row">
      <a class="btn btn-primary" href="<?= e($ctaLink) ?>"><?= e($ctaPrimary) ?></a>
      <a class="btn btn-outline" href="<?= e(whatsapp_link('Olá, tenho interesse em uma solução metálica sob medida da BIRDSTEEL.')) ?>" target="_blank" rel="noopener"><?= e($ctaWhats) ?></a>
    </div>
  </div>
</section>
