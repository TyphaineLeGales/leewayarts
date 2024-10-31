<?php snippet('header') ?>
<?= css([
    'assets/css/pagegrid.css',
  ]) ?>
<div class="content">
  <h1 class="project__title"><?= $page->title() ?></h1>
  <div class="project__images">
       <!--  CARROUSEL -->
      <img class="project__thumbnail" src="<?= $page->thumbnail()->toFile()->url() ?>"/>
  </div>
   <!--  DESCRIPTION -->
  <div class="project__text middle-layout"><?= $page->description()->toBlocks() ?></div>
  <!--  QUOTE -->
  <quote class='project__quote'><?= $page->quote() ?></quote/>
  <!--  VIDEO -->
  <div class="project__video middle-layout">
    <?= video($page->video()) ?>
  </div>
  <!--  PROJECT CREDITS -->
  <p class="project__credits middle-layout">
    <?php $credits = $page->credits()->toStructure(); foreach ($credits as $credit): ?> 
      <span><?= $credit->role() ?></span>  <?=$credit->people()?> |
    <?php endforeach ?>
  </p>
  
  <!--  RELATED -->
  <?php snippet('related') ?>
  <?php snippet('prevnext') ?>
</div>