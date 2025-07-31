<?php snippet('nav') ?>

<main>
  <div class="subnav">
    <a href="<?= $page->parent()->url() ?>">back to all works</a>
  </div>
  
  <div class="heading">
    <div class="row">
      <h1><?= $page->title()->html() ?></h1>
      <p><?= $page->year() ?></p>
    </div>
    <div class="row">
      <p><?= $page->materials() ?></p>
      <p><?= $page->dimensions() ?></p>
    </div>
  </div>
  
  
  <section>
    <?php foreach($page->images()->sorted() as $image): ?>
      <div>
        <figure>
          <a href="<?= $image->url() ?>">
            <img src="<?= $image->url() ?>" alt="">
          </a>
          <?php if($image->caption()->isNotEmpty()) : ?>
          <figcaption>
            <?=$image->caption()?>
          </figcaption>
        <?php endif ?>
        </figure>
      </div>
    <?php endforeach ?>
  </section>

  </main>

<?php snippet('footer') ?>