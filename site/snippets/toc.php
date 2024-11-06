<?= css([
    'assets/css/snippets/toc.css',
  ]) ?>
<?php $headlines = $page->article()->toBlocks()->filterBy('type', 'heading')->filterby('level', 'h2'); if ($headlines->count() >= 1): ?>
  <nav class="toc">
    <ol>
      <?php foreach($headlines as $headline): ?>
          <li><a href="<?= $page->url() . '/#' . Str::slug($headline->text()) ?>"><?= $headline->text() ?></a></li>
      <?php endforeach ?>
      <li><a href="<?= $page->url() . '/#references'?>">References</a></li>
    </ol>

  </nav>
<?php endif ?>