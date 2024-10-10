<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<div class="project-thumbnail-wrapper">
    <img class="project-thumbnail" src="<?= $page->thumbnail()->toFile()->url() ?>"/>
</div>