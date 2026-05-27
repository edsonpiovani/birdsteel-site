<?php
$root = __DIR__;
while (!is_file($root . '/includes/config.php') && dirname($root) !== $root) {
    $root = dirname($root);
}
require_once $root . '/includes/config.php';
header('Content-Type: text/plain; charset=utf-8');
echo "BIRDSTEEL OK
";
echo "PROJECT_ROOT=" . PROJECT_ROOT . "
";
echo "SITE_BASE_PATH=" . SITE_BASE_PATH . "
";
echo "DOCUMENT_ROOT=" . ($_SERVER['DOCUMENT_ROOT'] ?? '') . "
";
echo "SCRIPT_NAME=" . ($_SERVER['SCRIPT_NAME'] ?? '') . "
";
