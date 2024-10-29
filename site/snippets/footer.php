<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  </main>

  <footer class="footer">
    <a class="logo" href="<?= $site->url() ?>">
      <?= $site->title()->esc() ?>
    </a>
    <p>©2024 All rights reserved</p>
    <ul>
 
        <li>
          <a href="Home">Home |</a>
          <a href="About">About |</a>
          <a href="Donations">Donations |</a>
          <a href="Contact">Contact |</a>
          <a href="Projects">Projects |</a>
          <a href="Articles">Articles</a>
        </li>

    </ul>
  </footer>

  <?= js([
    'assets/js/prism.js',
    'assets/js/lightbox.js',
    'assets/js/index.js',
    '@auto'
  ]) ?>

</body>
</html>
