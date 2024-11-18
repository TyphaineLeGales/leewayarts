<?= css([
    'assets/css/pagegrid.css',
    ]) ?>
<?= js([
    'assets/js/progressBar.js',
    ]) ?>
<?php snippet('header') ?>
<div class="top">
    <div id="progressContainer">
        <div class="whiteBg"></div>
        <div class="progress"></div>
    </div>
</div>
<div class="content">
    <?php snippet('toc') ?>
    <div class="topic__row">
    <h1 ><?= $page->title() ?></h1>
    <p >Written by <?= $page->author() ?> </p>
    </div>

   
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
            <?= $reference->date() ?> <span class="topic__reference__title"><?= $reference->title() ?></span>
            <?php if ($reference->info()): ?>
            <?= $reference->info() ?>
            <?php endif; ?>
            <?php if ($reference->link()): ?>
                <span>
                    <a href="<?= $reference->link() ?>" target="_blank"><?= $reference->link() ?></a>
                </span>
            <?php endif; ?>
        </li>
    <?php endforeach ?>
    </ul>
    <?php snippet('related') ?>
    <?php snippet('prevnext') ?>
</div>
<?php snippet('footer') ?>