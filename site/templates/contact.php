<?php snippet('header') ?>
<div class="grid">
    <h1 class="grid_row"><?= $page->title() ?></h1>
        <?php foreach ($page->description()->toBlocks() as $block): ?>
            <div class="grid_row block block-type-<?= $block->type() ?>">
                <?= $block ?>
            </div>
        <?php endforeach ?>

</div>
