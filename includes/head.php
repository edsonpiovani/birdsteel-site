<?php
require_once __DIR__ . '/config.php';

$title = $title ?? SITE_NAME;
$description = $description ?? 'A BIRDSTEEL fabrica soluções metálicas sob medida para empresas e residências em Boituva/SP.';
$canonical = $canonical ?? SITE_URL . '/';
$ogTitle = $ogTitle ?? $title;
$ogDescription = $ogDescription ?? $description;
$ogImage = $ogImage ?? DEFAULT_OG_IMAGE;
$robots = $robots ?? 'index,follow';
$schemaExtra = $schemaExtra ?? '';
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title) ?></title>
  <meta name="description" content="<?= e($description) ?>">
  <meta name="robots" content="<?= e($robots) ?>">
  <link rel="canonical" href="<?= e($canonical) ?>">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
  <meta property="og:title" content="<?= e($ogTitle) ?>">
  <meta property="og:description" content="<?= e($ogDescription) ?>">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:image" content="<?= e($ogImage) ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($ogTitle) ?>">
  <meta name="twitter:description" content="<?= e($ogDescription) ?>">
  <meta name="twitter:image" content="<?= e($ogImage) ?>">

  <link rel="preload" href="/assets/css/style.css" as="style">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/main.js" defer></script>

  <?php include __DIR__ . '/schema-organization.php'; ?>
  <?php include __DIR__ . '/schema-localbusiness.php'; ?>
  <?= $schemaExtra ?>
</head>
<body<?= !empty($pageClass) ? ' class="' . e($pageClass) . '"' : '' ?>>
