<?= css([
    'assets/css/listItem.css',
  ]) ?>
<?php $index = 0; foreach ($pages->find('topics')->children() as $project): $index++;?>
    <li>
        <a href="<?= $project->url() ?>">
            <div class="list-item-image" style="background-image: url('<?=  $project->thumbnail()->toFile()->url() ?>');"></div>
            <p class="list-item-title"><?=  $project->title()?></p>
        </a>
    </li>
<?php endforeach ?>