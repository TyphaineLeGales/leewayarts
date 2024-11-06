<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
  <?= css([
    'assets/css/prism.css',
    'assets/css/lightbox.css',
    'assets/css/index.css',
    'assets/css/snippets/nav.css',
    '@auto'
  ]) ?>

  <?= js(['assets/js/header.js'])?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>

  <header class="header">
    <?php
    /*
      We use `$site->url()` to create a link back to the homepage
      for the logo and `$site->title()` as a temporary logo. You
      probably want to replace this with an SVG.
    */
    ?>
    <a class="logo" href="<?= $site->url() ?>">
      <?= $site->title()->esc() ?>
    </a>

    <nav class="menu">
      <button id="menuBtn" onclick="menuToggle()">
        <p> Menu </p>
      </button>
      <div class="nav_container ">
        <button class="menu_close" onclick="menuToggle()"> Close </button>
        <div class="flex-center">
        <?php foreach ($site->children()->listed() as $rootPage): ?>
          <li>
            <a href="<?= $rootPage->url() ?>">
              <?= $rootPage->title()->html() ?>
            </a>
          </li>
        <?php endforeach ?>
        </div>
        <div></div>
      </div>
      
    </nav>
  </header>
  <div id="menu_overlay"></div>

  <main class="main">
