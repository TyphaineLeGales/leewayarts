<?php snippet('header') ?>
<div class="grid">
  <h1 class="grid_row"><?= $page->title() ?></h1>
  <p class="grid_row"> Support our mission to dance by donating monthly or just once. All of your contributions go towards  sustaining our operations, and we are very grateful for the support! </p>
  <div class="grid_row btn_container">
    <a href="https://www.paypal.com/donate/?hosted_button_id=DAAVE6NTQLJCA" target="_blank">Donate via Paypal</a>
    <a href="https://tikkie.me/pay/Stichti2884/tLqoAiTnsuAm95MmNc9T8F" target="_blank">Donate with Ideal</a>
  </div>
  <div class="grid_row">
    <?php foreach ($page->description()->toBlocks() as $block): ?>
        <div class="block block-type-<?= $block->type() ?>">
            <?= $block ?>
        </div>
    <?php endforeach ?>
</div>