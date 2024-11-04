<?php snippet('header') ?>
<?= css([
    'assets/css/pagegrid.css',
  ]) ?>
<div class="content">
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
  
    <h2 class="topic__row"> References </h2>
    <ul class="topic__row topic__references">
    <?php foreach($page->references()->toStructure() as $reference): ?>
        <li>
            <p> <?= $reference->date() ?> <span class="topic__reference__title"><?= $reference->title() ?> </span><?= $reference->info() ?><p>
        </li>
    <?php endforeach ?>
    </ul>
    <?php snippet('related') ?>
    <?php snippet('prevnext') ?>
</div>