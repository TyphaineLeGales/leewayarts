<?php
?>
<?= css([
    'assets/css/snippets/prevNext.css',
  ]) ?>
<nav class="project__prevnext">
    <?php if ($page->hasPrevListed()): ?>
        <div class="subNav">
            <a href="<?= $page->prevListed()->url() ?>" > 
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow-icon-container">
                    <path d="M20 8.79191V11.3329H4.84848L11.7929 18.3207L10 20.1248L0 10.0624L10 0L11.7929 1.80412L4.84848 8.79191H20Z" class="arrow"/>
                </svg>
                Previous 
            </a>
        </div>
    <?php endif ?>
    <?php if ($page->hasNextListed()): ?>
        <div class="subNav">
            <a href="<?= $page->nextListed()->url() ?>"> 
                Next 
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"  class="arrow-icon-container">
                    <path d="M20 8.79191V11.3329H4.84848L11.7929 18.3207L10 20.1248L0 10.0624L10 0L11.7929 1.80412L4.84848 8.79191H20Z" class="arrow left"/>
                </svg>
            </a>
           
        </div>
    <?php endif ?>
</nav>
