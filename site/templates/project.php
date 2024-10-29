<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<div class="project-thumbnail-wrapper">
     <!--  CARROUSEL -->
    <img class="project-thumbnail" src="<?= $page->thumbnail()->toFile()->url() ?>"/>
</div>
 <!--  DESCRIPTION -->
<p class="project__description"><?= $page->description() ?></p>
<!--  QUOTE -->
<quote class='project__quote'><?= $page->quote() ?></quote/>
<!--  VIDEO -->
<?= video($page->video()) ?>
<!--  PROJECT CREDITS -->
<p class="project__credits">
  <?php $credits = $page->credits()->toStructure(); foreach ($credits as $credit): ?> 
    <span><?= $credit->role() ?></span>  <?=$credit->people()?> |
  <?php endforeach ?>
</p>

<!--  RELATED -->
<h2> Related projects <h2>
<?php
$related = $page->related()->toPages();
if ($related->count() > 0):
?>

<ul class="project__related">
    <?php foreach($related as $article): ?>
        <li>
            <a href="<?= $article->url() ?>">
            <?= $article->title() ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
<?php endif ?>
<?php snippet('prevnext') ?>