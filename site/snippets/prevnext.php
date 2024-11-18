<?php
?>
<?= css([
    'assets/css/snippets/prevNext.css',
  ]) ?>

<?php 
// Get all listed pages
$listedPages = $page->siblings()->listed();

// Find the previous and next pages in a circular loop
$prevPage = $page->hasPrevListed() ? $page->prevListed() : $listedPages->last();
$nextPage = $page->hasNextListed() ? $page->nextListed() : $listedPages->first();
?>
<nav class="project__prevnext">
    <div class="subNav">
        <a href="<?= $prevPage->url() ?>"> 
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow-icon-container">
                <path d="M20 8.79191V11.3329H4.84848L11.7929 18.3207L10 20.1248L0 10.0624L10 0L11.7929 1.80412L4.84848 8.79191H20Z" class="arrow"/>
            </svg>
            <p>Previous</p>
        </a>
    </div>
    <div class="subNav">
        <a href="<?= $nextPage->url() ?>"> 
            <p>Next</p>
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"  class="arrow-icon-container">
                <path d="M20 8.79191V11.3329H4.84848L11.7929 18.3207L10 20.1248L0 10.0624L10 0L11.7929 1.80412L4.84848 8.79191H20Z" class="arrow left"/>
            </svg>
        </a>
    </div>
</nav>
