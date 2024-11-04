<?= css([
    'assets/css/snippets/related.css',
  ]) ?>

<div class="related middle-layout">
    <h3> Related projects <h3>
    <ul class="related__link">
        <?php
        $related = $page->related()->toPages();
        if ($related->count() > 0):
        ?>
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