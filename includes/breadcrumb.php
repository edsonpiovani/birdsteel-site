<?php
// Uso:
// $breadcrumbs = [['label' => 'Início', 'url' => '/'], ['label' => 'Página atual', 'url' => null]];
$breadcrumbs = $breadcrumbs ?? [];
if (!empty($breadcrumbs)):
?>
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <?php foreach ($breadcrumbs as $index => $crumb): ?>
        <li>
          <?php if (!empty($crumb['url']) && $index < count($breadcrumbs) - 1): ?>
            <a href="<?= e($crumb['url']) ?>"><?= e($crumb['label']) ?></a>
          <?php else: ?>
            <span><?= e($crumb['label']) ?></span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</nav>
<?php endif; ?>
