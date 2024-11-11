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

    <ul class="footer__contact">
      <li>
        <a href="mailto:<?= site()->email()?>" target="_blank" rel="noopener noreferrer">
          <?= site()->email() ?>
        </a>
      </li>
      <?php if ($socialLinks = site()->socialLinks()->toStructure()): ?>
        <?php foreach ($socialLinks as $link): ?>
          <li>
            <a href="<?= $link->url() ?>" target="_blank" rel="noopener noreferrer">
              <?= html($link->platform()) ?>
            </a>
          </li>
        <?php endforeach ?>
        <?php endif ?>
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
