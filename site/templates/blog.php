<?php snippet('nav') ?>

<div class="subnav">
  <ul class="tags">
    <?php foreach($tags as $tag): ?>
      <li>
        <a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">
          <?= html($tag) ?>
        </a>
      </li>
    <?php endforeach ?>
    <li><a href="<?=url('notes')?>">all</a></li>
  </ul>
</div>
 
<section>
  <?php foreach($entries as $entry): ?>
    <article>
      <a href="<?= $entry->url() ?>">
      <?php if($entry->cover()->isNotEmpty()): ?>
        <figure>
          <img src="<?= $entry->cover()->toFile()->url() ?>" alt="">
        </figure>
      <?php else: ?>
        <figure>
          <img src="<?= $entry->files() ?>" alt="">
        </figure>
      <?php endif ?>
      <h1><?= $entry->title()->html() ?></h1>
      </a>
      <span><?=$entry->date()->toDate(('d M y')) ?></span>
      <ul>
        <?php foreach($entry->tags() as $tag): ?>
          <li>
           <?= $tag ?>
          </li>
        <?php endforeach ?>
      </ul>
    </article>
  <?php endforeach ?>
</section>

<section class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
  <a href="<?= $pagination->nextPageUrl() ?>">next posts</a>
  <?php endif ?>
</section>

<?php snippet('footer') ?>