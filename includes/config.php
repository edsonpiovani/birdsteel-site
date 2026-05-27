<?php
// BIRDSTEEL — configuração global
// Compatível com instalação na raiz do domínio ou em subpasta, como /sitenovo/.

// Ajustar antes da publicação final.
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Caminho físico da raiz do projeto. Este arquivo fica em /includes/config.php.
define('PROJECT_ROOT', dirname(__DIR__));

// Detecta automaticamente a subpasta pública do projeto.
// Exemplo: se o projeto estiver em /public_html/sitenovo, SITE_BASE_PATH será /sitenovo.
$documentRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath((string) $_SERVER['DOCUMENT_ROOT']) : false;
$projectRoot = realpath(PROJECT_ROOT);
$basePath = '';

if ($documentRoot !== false && $projectRoot !== false) {
    $documentRoot = rtrim(str_replace('\\', '/', $documentRoot), '/');
    $projectRoot = rtrim(str_replace('\\', '/', $projectRoot), '/');

    if (strpos($projectRoot, $documentRoot) === 0) {
        $basePath = substr($projectRoot, strlen($documentRoot));
    }
}

$basePath = '/' . trim((string) $basePath, '/');
if ($basePath === '/') {
    $basePath = '';
}

// Fallback: se a detecção por caminho físico falhar, usa SCRIPT_NAME.
if ($basePath === '' && !empty($_SERVER['SCRIPT_NAME'])) {
    $scriptName = str_replace('\\', '/', (string) $_SERVER['SCRIPT_NAME']);
    $parts = explode('/', trim($scriptName, '/'));
    if (!empty($parts) && $parts[0] !== 'index.php') {
        // Para instalação em /sitenovo/, o primeiro segmento público é a base.
        $basePath = '/' . $parts[0];
    }
}

define('SITE_BASE_PATH', $basePath);

define('SITE_NAME', 'BIRDSTEEL');
define('SITE_URL', 'https://birdsteel.com.br');
define('WHATSAPP_NUMBER', '5515997530187');
define('WHATSAPP_URL', 'https://wa.me/' . WHATSAPP_NUMBER);

// Validar e-mail comercial real antes de publicar.
define('CONTACT_EMAIL', 'comercial@birdsteel.com.br');

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function site_path(string $path = ''): string {
    if ($path === '') {
        return SITE_BASE_PATH !== '' ? SITE_BASE_PATH . '/' : '/';
    }

    // URLs absolutas externas não devem receber prefixo.
    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }

    $cleanPath = '/' . ltrim($path, '/');
    return (SITE_BASE_PATH !== '' ? SITE_BASE_PATH : '') . $cleanPath;
}

function site_url(string $path = ''): string {
    return rtrim(SITE_URL, '/') . site_path($path);
}

define('DEFAULT_OG_IMAGE', site_url('/assets/img/institucional/birdsteel-og-image.webp'));

function current_url(string $path = ''): string {
    return site_url($path);
}

function whatsapp_link(string $message = ''): string {
    $url = WHATSAPP_URL;
    if ($message !== '') {
        $url .= '?text=' . rawurlencode($message);
    }
    return $url;
}

function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_verify(?string $token): bool {
    return is_string($token) && isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function active_class(string $current, string $item): string {
    return $current === $item ? ' is-active' : '';
}

// Reescreve automaticamente links absolutos internos quando o site roda em subpasta.
// Exemplo: href="/contato/" vira href="/sitenovo/contato/".
if (SITE_BASE_PATH !== '' && !defined('BIRDSTEEL_OUTPUT_REWRITE')) {
    define('BIRDSTEEL_OUTPUT_REWRITE', true);
    ob_start(function (string $html): string {
        $prefix = SITE_BASE_PATH;
        $baseNoSlash = ltrim(SITE_BASE_PATH, '/');
        $pattern = "/\\b(href|src|action)=([\"'])\\/(?!\\/|" . preg_quote($baseNoSlash, '/') . "\\/|#)([^\"']*)\\2/i";

        return (string) preg_replace_callback($pattern, function (array $matches) use ($prefix): string {
            return $matches[1] . '=' . $matches[2] . $prefix . '/' . $matches[3] . $matches[2];
        }, $html);
    });
}
?>
