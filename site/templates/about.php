<?php snippet('header') ?>

<?= css([
    'assets/css/pagegrid.css',
  ]) ?>
<div class="content">
  <h1 class="middle-layout"><?= $page->title() ?></h1>
  <?php foreach ($page->article()->toBlocks() as $block): ?>
    <div class="middle-layout block block-type-<?= $block->type() ?>">
        <?= $block ?>
    </div>
  <?php endforeach ?>
  <h2 class="middle-layout">Leeway Team</h2>
  <div  class="middle-layout about__team">
    <?php $team = $page->team()->toStructure(); foreach ($team as $member): ?> 
      <div class="about__team_member">
        <img class="about__team_member_picture" src="<?= $member->picture()->toFile()->url()?>"/>
        <p class="about__team_member_name"><?= $member->name()?></p>
        <p class="about__team_member_role"><?= $member->role()?></p>
        <p class="about__team_member_description"><?= $member->description()?></p>
      </div>
    <?php endforeach ?>
  </div>
  <h2 class="middle-layout">Partners</h2>
  <div class="middle-layout about__partners">
    <?php $partners = $page->partners()->toFiles(); foreach ($partners as $partner): ?> 
        <div class="about__partner">
          <img class="about__partner__logo" src="<?= $partner->url()?>"/>
        </div>
    <?php endforeach ?>
  </div>   
  <h2 class="middle-layout">Reports</h2>
  <?php $reports = $page->reports()->toStructure(); foreach ($reports as $report): ?> 
    <a class="middle-layout" target="_blank" href="<?= $report->url()?>"><?= $report->name() ?></a>
  <?php endforeach ?>
  <h2 class="middle-layout">Low Emissions </h2>
  <p class="middle-layout">
  A major factors in the process of this website was the importance to  create a sustainable, low carbon and optimised website for Leeway. We have implemented this value throughout the development of  this project. The internet is a power hungry medium: it consumes  416.2TWh per year (by comparison, that’s more than UK's entire yearly  carbon footprint) and thus we thought it crucial to create a website  with a minimal carbon footprint.
  </p>
  <h2 class="middle-layout">Credits</h2>
  <div class="middle-layout">
    <p >Graphic and web design by Nadine Rotem-Stibbe</p>
    <p>Back/front web development Typhaine Le Galès</p>
  </div>
  
</div>

<?php snippet('footer') ?>
