<?= js(['assets/js/sliderNav.js'])?>
<?php snippet('header') ?>
  <?php snippet('intro') ?>
    <div>
      <div class="row_title">
        <a href="/projects"><h1>Projects </h1></a>
        <?php snippet('sliderBtn') ?>
      </div>
      <div class="project-list-row">
        <?php snippet('projectlist') ?>
      </div>
      <div class="row_title">
        <a href="/topics"><h1>Topics </h1></a>
        <?php snippet('sliderBtn') ?>
      </div>
      <div class="project-list-row">
        <?php snippet('topicslist') ?>
      </div>

    </div>
<?php snippet('footer') ?>
