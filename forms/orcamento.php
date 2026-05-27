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
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . site_path('/contato/?status=metodo-invalido'));
    exit;
}

if (!empty($_POST['website'] ?? '')) {
    // Honeypot preenchido: provável bot. Redireciona como sucesso para não revelar regra.
    header('Location: ' . site_path('/contato/?status=sucesso'));
    exit;
}

if (!csrf_verify($_POST['csrf_token'] ?? null)) {
    header('Location: ' . site_path('/contato/?status=erro-csrf'));
    exit;
}

function clean_field(string $key, int $limit = 500): string {
    $value = trim((string)($_POST[$key] ?? ''));
    $value = strip_tags($value);
    $value = preg_replace('/[\r\n]+/', "\n", $value);
    return mb_substr($value, 0, $limit, 'UTF-8');
}

$nome = clean_field('nome', 120);
$empresa = clean_field('empresa', 120);
$email = clean_field('email', 160);
$telefone = clean_field('telefone', 80);
$cidade = clean_field('cidade', 120);
$tipo = clean_field('tipo', 80);
$produto = clean_field('produto', 120);
$quantidade = clean_field('quantidade', 80);
$medidas = clean_field('medidas', 300);
$mensagem = clean_field('mensagem', 2000);
$consentimento = isset($_POST['consentimento']);

$errors = [];
if ($nome === '') $errors[] = 'nome';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'email';
if ($telefone === '') $errors[] = 'telefone';
if ($cidade === '') $errors[] = 'cidade';
if ($produto === '') $errors[] = 'produto';
if ($mensagem === '') $errors[] = 'mensagem';
if (!$consentimento) $errors[] = 'consentimento';

if ($errors) {
    header('Location: ' . site_path('/contato/?status=campos-invalidos'));
    exit;
}

$subject = 'Novo orçamento pelo site BIRDSTEEL';
$body = "Novo pedido de orçamento pelo site BIRDSTEEL\n\n"
    . "Nome: {$nome}\n"
    . "Empresa: {$empresa}\n"
    . "E-mail: {$email}\n"
    . "Telefone/WhatsApp: {$telefone}\n"
    . "Cidade/UF: {$cidade}\n"
    . "Tipo: {$tipo}\n"
    . "Produto: {$produto}\n"
    . "Quantidade: {$quantidade}\n"
    . "Medidas: {$medidas}\n\n"
    . "Mensagem:\n{$mensagem}\n\n"
    . "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'não identificado') . "\n"
    . "Data: " . date('d/m/Y H:i:s') . "\n";

$headers = [];
$headers[] = 'From: BIRDSTEEL Site <no-reply@birdsteel.com.br>';
$headers[] = 'Reply-To: ' . $nome . ' <' . $email . '>';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = mail(CONTACT_EMAIL, $subject, $body, implode("\r\n", $headers));

header('Location: ' . site_path('/contato/?status=' . ($sent ? 'sucesso' : 'erro-envio')));
exit;
?>
