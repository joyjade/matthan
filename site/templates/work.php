<?php snippet('nav') ?>

<section class="main">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= $page->parent()->url() ?>">Back…</a>
    <ul>
    <?php foreach($page->images() as $image): ?>
      <figure>
        <a href="<?= $image->url() ?>">
          <img src="<?= $image->url() ?>" alt="">
        </a>
      </figure>
    <?php endforeach ?>
    </ul>

</section>

<?php snippet('footer') ?>