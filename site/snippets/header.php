<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
  <?= css([
    'assets/css/prism.css',
    'assets/css/lightbox.css',
    'assets/css/fonts.css',
    'assets/css/index.css',
    'assets/css/snippets/nav.css',
    '@auto'
  ]) ?>

  <?= js(['assets/js/header.js'])?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>
  <header class="header">
    <a class="logo" href="<?= $site->url() ?>">
      <?php if ($logo = $site->logo()->toFile()): ?>  
        <img src="<?= $site->logo()->toFile()->url() ?>" alt="Logo">
      <?php endif ?>
    </a>
  

    <nav class="menu">
      <button id="menuBtn" onclick="menuToggle()">
        <p> menu </p>
      </button>
      <div class="nav_container ">
        <button class="menu_close" onclick="menuToggle()"> Close </button>
        <ul>
          <?php foreach ($site->children()->listed() as $rootPage): ?>
            <li>
              <a href="<?= $rootPage->url() ?>">
                <?= $rootPage->title()->html() ?>
              </a>
            </li>
          <?php endforeach ?>
          </ul>
        <div></div>
      </div>
      
    </nav>
  </header>
  <div id="menu_overlay"></div>
  <main class="main">
