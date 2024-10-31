<div class="project__related middle-layout">

    <h2> Related projects <h2>
    <?php
    $related = $page->related()->toPages();
    if ($related->count() > 0):
    ?>
    
    <ul>
        <?php foreach($related as $article): ?>
            <li>
                <a href="<?= $article->url() ?>">
                <?= $article->title() ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>
</div>