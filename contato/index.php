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
$title = 'Solicite um Orçamento | BIRDSTEEL Boituva/SP';
$description = 'Solicite orçamento para racks, gabinetes, painéis, caixas, grades, totens, soleiras, camas flutuantes e soluções metálicas sob medida.';
$canonical = site_url('/contato/');
$currentPage = 'contato';
include PROJECT_ROOT . '/includes/head.php';
include PROJECT_ROOT . '/includes/header.php';
$breadcrumbs = [['label'=>'Início','url'=>'/'], ['label'=>'Contato','url'=>null]];
include PROJECT_ROOT . '/includes/breadcrumb.php';
$status = $_GET['status'] ?? '';
?>
<section class="hero">
  <div class="container">
    <span class="eyebrow">Fale com a BIRDSTEEL</span>
    <h1>Solicite seu orçamento</h1>
    <p class="lead">Envie sua necessidade para avaliação. Quanto mais informações você enviar, melhor será a análise inicial.</p>
  </div>
</section>
<section class="section section-light">
  <div class="container grid-2">
    <div>
      <h2>Formulário de orçamento</h2>
      <?php if ($status === 'sucesso'): ?><div class="alert alert-success">Mensagem enviada com sucesso. A equipe retornará pelo contato informado.</div><?php endif; ?>
      <?php if (in_array($status, ['campos-invalidos','erro-envio','erro-csrf','metodo-invalido'], true)): ?><div class="alert alert-error">Não foi possível enviar. Revise os campos ou chame pelo WhatsApp.</div><?php endif; ?>
      <form action="/forms/orcamento.php" method="post" class="contact-form" novalidate>
        <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
        <div class="form-grid">
          <div class="form-field"><label for="nome">Nome completo*</label><input id="nome" name="nome" required></div>
          <div class="form-field"><label for="empresa">Empresa</label><input id="empresa" name="empresa"></div>
          <div class="form-field"><label for="email">E-mail*</label><input id="email" name="email" type="email" required></div>
          <div class="form-field"><label for="telefone">WhatsApp/telefone*</label><input id="telefone" name="telefone" required></div>
          <div class="form-field"><label for="cidade">Cidade/UF*</label><input id="cidade" name="cidade" required></div>
          <div class="form-field"><label for="tipo">Tipo de solicitação</label><select id="tipo" name="tipo"><option>Empresarial / Técnica</option><option>Residencial</option><option>Projeto sob medida</option><option>Não sei ainda</option></select></div>
          <div class="form-field"><label for="produto">Produto de interesse*</label><input id="produto" name="produto" required placeholder="Ex: rack, caixa inox, totem, grade..."></div>
          <div class="form-field"><label for="quantidade">Quantidade aproximada</label><input id="quantidade" name="quantidade"></div>
          <div class="form-field full"><label for="medidas">Medidas aproximadas</label><input id="medidas" name="medidas" placeholder="Altura, largura, profundidade ou espaço disponível"></div>
          <div class="form-field full"><label for="mensagem">Mensagem*</label><textarea id="mensagem" name="mensagem" required></textarea></div>
          <div class="form-field full"><label><input type="checkbox" name="consentimento" required> Autorizo o contato da BIRDSTEEL para responder minha solicitação.</label></div>
          <div class="form-field full"><button class="btn btn-primary" type="submit">Enviar solicitação</button></div>
        </div>
      </form>
    </div>
    <aside class="card">
      <h2>WhatsApp comercial</h2>
      <p>Para agilizar, envie fotos, medidas e referências do produto desejado.</p>
      <a class="btn btn-primary" href="<?= e(whatsapp_link('Olá, gostaria de solicitar um orçamento da BIRDSTEEL.')) ?>" target="_blank" rel="noopener">Chamar no WhatsApp</a>
    </aside>
  </div>
</section>
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>
