<?= css([
    'assets/css/snippets/related.css',
  ]) ?>

<?php
$related = $page->related()->toPages();
if ($related->count() > 0):
?>
    <div class="related middle-layout">
        <h3> Related pages </h3>
        <ul class="related__link">
            <?php foreach($related as $article): ?>
                <li>
                    <a href="<?= $article->url() ?>">
                    <?= $article->title() ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>