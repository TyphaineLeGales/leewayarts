<?php snippet('header') ?>
<?= css([
    'assets/css/templates/projects.css',
    'assets/css/templates/articles.css'
  ]) ?>
<h1><?= $page->title() ?></h1>
<div class="grid">
    <?php $index = 0; foreach ($page->articles()->toStructure() as $article): $index++;?>
        <li class="grid__item">
            <a href="<?= $article->url() ?>" target='_blank'>
                <div class="grid__item_image" style="background-image: url('<?=  $article->image()->toFile()->url() ?>');"></div>
            </a>
            <p><?=  $article->legend()?></p>
        </li>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>