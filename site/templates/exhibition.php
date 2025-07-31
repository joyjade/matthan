<?php snippet('nav') ?>

<main>
  <div class="subnav">
    <a href="<?= $page->parent()->url() ?>">back to all exhibitions</a>
  </div>
  
  <div class="heading">
    <div class="row">
      <h1><?= $page->title() ?></h1>
      <p class="date"><?= $page->date()->toDate('M Y') ?></p>
    </div>
    <div class="row">
      <div>
        <?= $page->description()->kirbytext() ?>
      </div>
    </div>
  </div>
  
  
  <section>
    <?php foreach($page->images()->sorted() as $image): ?>
      <div>
        <figure>
          <a href="<?= $image->url() ?>" attr="data-lightbox">
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