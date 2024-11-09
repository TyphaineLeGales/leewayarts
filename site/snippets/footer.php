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
      <?php foreach ($site->children()->listed() as $rootPage): ?>
        <li>
          <a href="<?= $rootPage->url() ?>">
            <?= $rootPage->title()->html() ?>
          </a>
        </li>
      <?php endforeach ?>
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
