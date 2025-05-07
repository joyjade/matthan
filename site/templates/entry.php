<?php snippet('nav') ?>

<section class="article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('blog') ?>">Back…</a>

  </article>
</section>

<?php snippet('footer') ?>