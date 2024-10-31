<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This intro snippet is reused in multiple templates.
  While it does not contain much code, it helps to keep your
  code DRY and thus facilitate maintenance when you have
  to make changes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  <?= css([
    'assets/css/snippets/intro.css',

  ]) ?>
<div class="intro">
  <h3><?= $page->headline()->or($page->title())->esc() ?></h3>
  <?php if ($page->subheadline()->isNotEmpty()): ?>
  <p class="color-grey"><?= $page->subheadline()->esc() ?></p>
  <?php endif ?>
  </div>
