<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<div class="project-thumbnail-wrapper">
    <img class="project-thumbnail" src="<?= $page->thumbnail()->toFile()->url() ?>"/>
</div>
<div classs="topic__content">
    <?= $page->article()->toBlocks() ?>
</div>
<h2> References </h2>
<ul classs="topic__references">
<?php foreach($page->references()->toStructure() as $reference): ?>
    <li>
        <p> <?= $reference->date() ?><span><?= $reference->title() ?></span><?= $reference->info() ?><p>
    </li>
<?php endforeach ?>
</ul>
<?php snippet('related') ?>
<?php snippet('prevnext') ?>