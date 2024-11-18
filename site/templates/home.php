<?= js(['assets/js/sliderNav.js'])?>
<?php snippet('header') ?>
  <?php snippet('intro') ?>
    <div>
      <div class="row_title">
        <a href="/projects"><h2>Projects </h2></a>
        <?php snippet('sliderbtn') ?>
      </div>
      <div class="project-list-row">
        <?php snippet('projectlist') ?>
      </div>
      <div class="row_title">
        <a href="/topics"><h2>Topics </h2></a>
        <?php snippet('sliderbtn') ?>
      </div>
      <div class="project-list-row">
        <?php snippet('topicslist') ?>
      </div>

    </div>
<?php snippet('footer') ?>
