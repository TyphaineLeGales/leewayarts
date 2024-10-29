<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<div class="project-thumbnail-wrapper">
     <!--  CARROUSEL -->
    <img class="project__thumbnail" src="<?= $page->thumbnail()->toFile()->url() ?>"/>
</div>
 <!--  DESCRIPTION -->
<p class="project__description"><?= $page->description()->toBlocks() ?></p>
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
<?php snippet('related') ?>
<?php snippet('prevnext') ?>