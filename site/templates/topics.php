<?php snippet('header') ?>
<?= css([
    'assets/css/templates/projects.css',
  ]) ?>
<h1><?= $page->title() ?></h1>
<div class="grid">
    <?php $index = 0; foreach ($page->children() as $project): $index++;?>
        <li class="grid__item">
            <a href="<?= $project->url() ?>">
                <div class="grid__item_image" style="background-image: url('<?=  $project->thumbnail()->toFile()->url() ?>');"></div>
                <?=  $project->title()?>
            </a>
        </li>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>
