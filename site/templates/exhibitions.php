<?php snippet('nav');
  $works = $page->children()->listed()->flip();
?>

<main>

  <?php foreach($works as $work): ?>
    <div class="row">
      <div class="details">
          <a href="<?= $work->url() ?>">
            <h1><?= $work->title()->html() ?></h1>
          </a>
            <p class="stretch"><?= $work->date()->toDate('M Y') ?></p>
            <p><?= $work->description()->kirbytext() ?></p>
        </div>
        <figure>
          <a href="<?= $work->url() ?>">
            <img src="<?= $work->image()->url() ?>" alt="">
          </a>
        </figure>
    </div>
  <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
