<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<div class="grid">
    <?php $index = 0; foreach ($page->children() as $project): $index++;?>
        <li class="grid__item">
            <a href="<?= $project->url() ?>">
                <?php 
                    $thumbnail = $project->carousel()->toFiles()->first(); 
                ?>
                <div class="grid__item_image" style="background-image: url('<?=  $thumbnail->url() ?>');"></div>
                <p class="list__title"><?=  $project->title()?></p>
            </a>
        </li>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>