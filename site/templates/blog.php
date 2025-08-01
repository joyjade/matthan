<?php snippet('nav') ?>

<!-- <?php dump(params()) ?>-->

<div class="subnav">
  <ul class="tags">
    <?php snippet('tags', ['tags' => $tags, 'section' => 'notes']) ?>
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
        <div class="blank">

        </div>
      <?php endif ?>
      <h1><?= $entry->title()->html() ?></h1>
      </a>
      <span><?=$entry->date()->toDate(('d M y')) ?></span>
      <ul class="tags">

        <?php $tags = $entry->tags()->split(); 
          foreach($tags as $tag): ?>
            <li><a href="<?=url('notes', ['params' => ['tag' => $tag]])?>"><?= $tag ?></a></li>
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