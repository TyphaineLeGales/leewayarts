<?php /** @var \Kirby\Cms\Block $block */ ?>
<<?= $level = $block->level()->or('h2') ?> id="<?= Str::slug($block->text()) ?>"><?= $block->text() ?></<?= $level ?>>