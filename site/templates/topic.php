<?= css([
    'assets/css/pagegrid.css',
    ]) ?>
<?= js([
    'assets/js/progressBar.js',
    ]) ?>
<?php snippet('header') ?>
<div class="top">
    <div id="progressContainer">
        <div></div>
    </div>
</div>
<div class="content">
    <?php snippet('toc') ?>
    <h1 class="topic__row"><?= $page->title() ?></h1>
    <p class="topic__row">Written by <?= $page->author() ?> </p>
    <div class="topic__row">
        <img class="project-thumbnail" src="<?= $page->thumbnail()->toFile()->url() ?>"/>
    </div>
   
    <?php foreach ($page->article()->toBlocks() as $block): ?>
    <div class="block block-type-<?= $block->type() ?>">
        <?= $block ?>
    </div>
    <?php endforeach ?>
  
    <h2 id="references" class="topic__row"> References </h2>
    <ul class="topic__row topic__references">
    <?php foreach($page->references()->toStructure() as $reference): ?>
        <li>
            <?= $reference->date() ?> <span class="topic__reference__title"><?= $reference->title() ?> </span><?= $reference->info() ?>
        </li>
    <?php endforeach ?>
    </ul>
    <?php snippet('related') ?>
    <?php snippet('prevnext') ?>
</div>