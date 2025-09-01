<?= css([
    'assets/css/snippets/languageSwitch.css',
  ]) ?>

<ul class="language_switch">
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
    <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->name()) ?>
    </a>
    </li>
    <?php endforeach ?>
</ul>