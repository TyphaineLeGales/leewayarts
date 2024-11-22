<?php snippet('header') ?>
<div class="grid" id="donation">
  <h1 class="grid_row"><?= $page->title() ?></h1>
  <h4 class="grid_row"> Support our mission to dance by donating monthly or just once. All of your contributions go towards  sustaining our operations, and we are very grateful for the support! </h4>
  <div class="grid_row btn_container">
    <a href="https://www.paypal.com/donate/?hosted_button_id=DAAVE6NTQLJCA" target="_blank">
      Donate via Paypal 
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow-icon-container">
        <path d="M20 8.79191V11.3329H4.84848L11.7929 18.3207L10 20.1248L0 10.0624L10 0L11.7929 1.80412L4.84848 8.79191H20Z" class="arrow left"/>
      </svg>
    </a>
    <a href="https://tikkie.me/pay/Stichti2884/tLqoAiTnsuAm95MmNc9T8F" target="_blank">
      Donate with Ideal
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow-icon-container">
        <path d="M20 8.79191V11.3329H4.84848L11.7929 18.3207L10 20.1248L0 10.0624L10 0L11.7929 1.80412L4.84848 8.79191H20Z" class="arrow left"/>
      </svg>
    </a>
  </div>
  <?php snippet('bankdetails') ?>
  <div class="grid_row">
    <?php foreach ($page->description()->toBlocks() as $block): ?>
        <div class="block block-type-<?= $block->type() ?>">
            <?= $block ?>
        </div>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>