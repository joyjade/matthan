<?php snippet('nav');
$works = $page->children()->listed()->flip();?>
<main>
  <div class="subnav">
    <ul class="tags">
      <?php foreach($tags as $tag): ?>
      <li>
        <a href="<?= url('works', ['params' => ['tag' => $tag]]) ?>">
          <?= html($tag) ?>
        </a>
      </li>
      <?php endforeach ?>
      <li>
        <a href="<?= url('works') ?>">all</a>
      </li>
    </ul>
  </div>

  <section class="works">
    <?php foreach($entries as $work): ?>
      <div class="item">
        <a href="<?= $work->url() ?>">
          
          <figure>
            <img src="<?= $work->image()->url() ?>" alt="">
          </figure>
          <!-- <h1><?= $work->title()->html() ?></h1> -->
        </a>
      </div>
    <?php endforeach ?>
  </section>

  <section class="pagination">
    <?php if($pagination->hasPrevPage()): ?>
    <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
    <a href="<?= $pagination->nextPageUrl() ?>">see more</a>
    <?php endif ?>
  </section>
</main>
<?php snippet('footer') ?>