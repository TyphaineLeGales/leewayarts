<?php snippet('header') ?>
<?= css([
    'assets/css/pagegrid.css',
    'assets/css/templates/project.css',
  ]) ?>
<?= js(['assets/js/carousel.js'])?>
<div class="content">
  <h1 class="project__title"><?= $page->title() ?></h1>
  <!--  CARROUSEL -->
    <?php $count=$page->carousel()->toFiles()->count(); ?>
  <div class="project__images_container" onclick="onCarouselClick(<?= $count ?>)">
    <?php $images = $page->carousel()->toFiles(); $index=0; foreach ($images as $image): ?> 
      <div class="project__image <?= $index === 0 ? 'project__image_show' : '' ?>" style="background-image: url(<?= $image->url() ?>)"></div>
    <?php $index++; endforeach ?>
    <div class="project__carousel_nav">
      <?php  $index = 0; for ($i = 1; $i <= $count; $i++):  ?>
        <div class="project__carousel_nav_btn <?=$i === 1 ? 'btn_active': '' ?>"></div>
      <?php endfor ?>  
    </div>
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
      <span class="project__credit"><?= $credit->role() ?>  <span class="project__credits__people"><?=$credit->people()?></span></span>
    <?php endforeach ?>
  </p>
  
  <!--  RELATED -->
  <?php snippet('related') ?>
  <?php snippet('prevnext') ?>
</div>
<?php snippet('footer') ?>