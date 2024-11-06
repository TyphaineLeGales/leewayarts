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
  <?= css(['assets/css/snippets/footer.css'])?>
  <footer>
    <div class="footer__item__copyright">
      <p class="name" href="<?= $site->url() ?>">
        <?= $site->title()->esc() ?>
      </p>
      <p>©2024 All rights reserved</p>
    </div>
    <ul class="footer__page_list">
        <li><a href="Home">Home</a></li>
        <li><a href="Projects">Projects</a></li>
        <li><a href="Projects">Topics</a></li>
        <li><a href="Donations">Donations</a></li>
        <li><a href="Articles">Articles</a></li>
        <li><a href="About">About</a>
        <li><a href="Contact">Contact</a></li>
        </li>
    </ul>
    <div class="footer__contact">
      <a>floor@leewayart.org</a>
      <a>Instagram</a>
      <a>LinkedIn</a>
    </div>
  </footer>

  <?= js([
    'assets/js/prism.js',
    'assets/js/lightbox.js',
    'assets/js/index.js',
    '@auto'
  ]) ?>

</body>
</html>
