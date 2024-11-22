<?php snippet('header') ?>
<?= css([
    'assets/css/templates/projects.css',
    'assets/css/templates/articles.css'
  ]) ?>
<h1><?= $page->title() ?></h1>
<div class="grid">
    <?php $index = 0; foreach ($page->articles()->toStructure() as $article): $index++; ?>
        <li class="grid__item">
            <?php
            $file = $article->pdf()->toFile();
            $url = $file 
                ? $file->url() // Use the file's URL if it exists
                : ($article->url()->isNotEmpty() ? $article->url() : '#'); // Otherwise, use the external URL, or fallback to '#'
            $isPdf = $file ? $file->extension() === 'pdf' : false;
            ?>
            <a href="<?= $url ?>" target='_blank'>
                <div class="grid__item_image" style="background-image: url('<?= $article->image()->toFile()->url() ?>');"></div>
            </a>
            <p><?= $article->legend() ?></p>
        </li>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>