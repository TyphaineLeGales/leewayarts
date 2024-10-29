<?php
?>
<nav class="project__prevnext">
    <?php if ($page->hasPrevListed()): ?>
        <div class="subNav">
            <a href="<?= $page->prevListed()->url() ?>" > Previous </a>
        </div>
    <?php endif ?>
    <?php if ($page->hasNextListed()): ?>
        <div class="subNav">
         <a href="<?= $page->nextListed()->url() ?>"> Next </a>
        </div>
    <?php endif ?>
</nav>
