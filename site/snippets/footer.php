</main>
  <?= css(['assets/css/snippets/footer.css'])?>
  <footer>
    <div class="footer_item">
       <a class="logo" href="<?= $site->url() ?>">
          <?php if ($logo = $site->logoFooter()->toFile()): ?>  
            <img src="<?= $site->logoFooter()->toFile()->url() ?>" alt="Logo" id="logoFooter">
          <?php endif ?>
        </a>
    </div>
    <div>
      
    </div>
    <ul class="footer_item">
        <li>
          <a href="<?= page('home')->url() ?>">Home</a>  
        </li>
        <li>
          <a href="<?= page('projects')->url() ?>">Projects</a>  
        </li>
        <li>
          <a href="<?= page('topics')->url() ?>">Topics</a>  
        </li>
        <li>
          <a href="<?= page('donation')->url() ?>">Donation</a>  
        </li>
    </ul>
    <ul class="footer_item">
      <li>
        <a href="<?= page('articles')->url() ?>">Articles</a>  
      </li>
      <li>
        <a href="<?= page('about')->url() ?>">About</a>  
      </li>
      <li>
        <a href="<?= page('contact')->url() ?>">Contact</a>  
      </li>
      <li>
        <ul class="footer_language_switch">
          <?php foreach($kirby->languages() as $language): ?>
          <li<?php e($kirby->language() != $language, ' class="non_active"') ?>>
            <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
              <?= html($language->name()) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
      </li>
   
    </ul>

    <ul class="footer_item">
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
    <div class="footer_item footer__wrapper__copyright">
      <p class="footer__copyright">©2024 All rights reserved</p>  
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
