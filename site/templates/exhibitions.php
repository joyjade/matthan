<?php snippet('nav');
  $works = $page->children()->listed();
?>

<main>

  <?php foreach($works as $work): ?>
    <div class="row">
      <div class="details">
          <a href="<?= $work->url() ?>">
            <h1><?= $work->title()->html() ?></h1>
          </a>
            <p class="stretch date"><?= $work->date()->toDate('M Y') ?></p>
            <p><?= $work->description()->kirbytext() ?></p>
        </div>
        <?php $cover = $work->cover()->toFile() ? $work->cover()->toFile() : $work->images()->first() ?>
        <a href="<?= $work->url() ?>" class="img">
          <?php snippet('img', ['photo' => $cover]) ?>
        </a>
    </div>
  <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
