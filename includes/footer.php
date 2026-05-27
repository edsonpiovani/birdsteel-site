</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <a class="brand footer-brand" href="<?= e(site_path('/')) ?>" aria-label="BIRDSTEEL - início">
        <img class="brand-logo footer-logo" src="<?= e(site_path('/assets/img/logo/birdsteel-logo-branco.png')) ?>" alt="BIRDSTEEL" width="190" height="83">
      </a>
      <p>A BIRDSTEEL fabrica soluções metálicas sob medida para empresas e residências, com atuação em Boituva/SP e atendimento conforme viabilidade do projeto.</p>
    </div>
    <div>
      <h2>Empresa</h2>
      <a href="<?= e(site_path('/empresa/')) ?>">Sobre</a>
      <a href="<?= e(site_path('/engenharia-sob-medida/')) ?>">Sob medida</a>
      <a href="<?= e(site_path('/projetos/')) ?>">Projetos</a>
      <a href="<?= e(site_path('/blog/')) ?>">Blog</a>
      <a href="<?= e(site_path('/contato/')) ?>">Contato</a>
    </div>
    <div>
      <h2>Empresarial</h2>
      <a href="<?= e(site_path('/rack-para-data-center/')) ?>">Rack para Data Center</a>
      <a href="<?= e(site_path('/gabinetes-metalicos-sob-medida/')) ?>">Gabinetes Metálicos</a>
      <a href="<?= e(site_path('/paineis-eletricos/')) ?>">Painéis Elétricos</a>
      <a href="<?= e(site_path('/caixa-em-inox/')) ?>">Caixa em Inox</a>
      <a href="<?= e(site_path('/caixa-de-comando/')) ?>">Caixa de Comando</a>
    </div>
    <div>
      <h2>Residencial</h2>
      <a href="<?= e(site_path('/totem-residencial-com-numero/')) ?>">Totem Residencial</a>
      <a href="<?= e(site_path('/grades-de-protecao-sob-medida/')) ?>">Grades de Proteção</a>
      <a href="<?= e(site_path('/soleira-de-porta-em-inox/')) ?>">Soleira em Inox</a>
      <a href="<?= e(site_path('/perfil-l-inox-304-escovado/')) ?>">Perfil L Inox</a>
      <a href="<?= e(site_path('/cama-flutuante-em-aco/')) ?>">Cama Flutuante</a>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>© <?= date('Y') ?> BIRDSTEEL. Todos os direitos reservados.</span>
    <a href="<?= e(WHATSAPP_URL) ?>" target="_blank" rel="noopener">WhatsApp: +55 15 99753-0187</a>
  </div>
</footer>
<?php include __DIR__ . '/whatsapp.php'; ?>
</body>
</html>
