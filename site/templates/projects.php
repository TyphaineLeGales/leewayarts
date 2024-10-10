<?= css([
    'assets/css/templates/project.css',
  ]) ?>
<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<div class="projects-container">
    <?php $index = 0; foreach ($pages->find('projects')->children() as $project): $index++;?>
        <li>
            <a href="<?= $project->url() ?>">
                <div class="list-item-image" style="background-image: url('<?=  $project->thumbnail()->toFile()->url() ?>');"></div>
                <?=  $project->title()?>
            </a>
        </li>
    <?php endforeach ?>
</div>