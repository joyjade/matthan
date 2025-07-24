<?php snippet('nav') ?>

<main>
  <a href="<?= $page->parent()->url() ?>">back to all works</a>
  
  <h1><?= $page->title()->html() ?></h1>
  <p><?= $page->materials() ?></p>
  <p><?= $page->dimensions() ?></p>
  <p><?= $page->year() ?></p>
  
  
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