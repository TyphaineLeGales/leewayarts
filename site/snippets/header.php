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

  <?php
  /*
    In the title tag we show the title of our
    site and the title of the current page
  */
  ?>
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

  <?php?>
  <?= css([
    'assets/css/prism.css',
    'assets/css/lightbox.css',
    'assets/css/index.css',
    'assets/css/snippets/nav.css',
    '@auto'
  ]) ?>

  <?= js(['assets/js/header.js'])?>
  

  <?php
  /*
    The `url()` helper is a great way to create reliable
    absolute URLs in Kirby that always start with the
    base URL of your site.
  */
  ?>
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
      <div class="nav-container flex-center">
        <a href="/projects"> Projects </a>
        <a href="/topics"> Topics </a>
        <a href="/about"> About </a>
        <a href="/donation"> Donation</a>
        <a href="/contact"> Contact </a>
        <k-icon type="cancel-small" image="false" :icon="{
    type: 'file',
    back: 'black'
  }">
        <k-icon type="check" image="false"></k-icon>
      </div>
      
    </nav>
  </header>

  <main class="main">