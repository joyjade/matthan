<?php snippet('nav') ?>

<main>
  <div class="subnav">
    <a href="<?= $page->parent()->url() ?>">back to all exhibitions</a>
  </div>
  
  <h1><?= $page->title() ?></h1>
  <p class="date"><?= $page->date()->toDate('M Y') ?></p>
  <p><?= $page->description()->kirbytext() ?></p>
  
  
  <section>
    <?php foreach($page->images()->sorted() as $image): ?>
      <div>
        <figure>
          <a href="<?= $image->url() ?>">
            <img src="<?= $image->url() ?>" alt="">
          </a>
        </figure>
        <figcaption>
          <?=$image->caption()?>
        </figcaption>
      </div>
    <?php endforeach ?>
  </section>

  </main>

<?php snippet('footer') ?>