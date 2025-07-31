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
      <?php $cover = $work->cover()->toFile() ? $work->cover()->toFile() : $work->images()->first() ?>

      <div class="item">
        <a href="<?= $work->url() ?>">
          
          <figure>
            <img src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>">
          </figure>

        </a>
      </div>
    <?php endforeach ?>
  </section>

  <section class="pagination">
    <?php if($pagination->hasPrevPage()): ?>
    <a href="<?= $pagination->prevPageUrl() ?>">
      <span class="nav left">
        <?= asset('assets/icons/arrow-lines.svg')->read()?>
      </span>
    </a>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
    <a href="<?= $pagination->nextPageUrl() ?>">
      <span class="nav right">
        <?= asset('assets/icons/arrow-lines.svg')->read()?>
      </span>
    </a>
    <?php endif ?>
  </section>
</main>
<?php snippet('footer') ?>