<?= css([
    'assets/css/listItem.css',
  ]) ?>
<?php $index = 0; foreach ($pages->find('projects')->children() as $project): $index++;?>
    <li>
        <a href="<?= $project->url() ?>">
            <?php 
            $thumbnail = $project->carousel()->toFiles()->first(); 
            ?>
            <div class="list-item-image" style="background-image: url('<?= $thumbnail->url() ?>');"></div>
            <p class="list-item-title"><?= $project->title() ?></p>
        </a>
    </li>
<?php endforeach ?>