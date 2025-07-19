<?php snippet('nav') ?>

<h1><?= $page->title()->html() ?></h1>
<?= $page->text()->kirbytext() ?>

<ul class="tags">
  <?php foreach($tags as $tag): ?>
  <li>
    <a href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>">
      <?= html($tag) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php foreach($entries as $entry): ?>
<article>
  <h1><a href="<?= $entry->url() ?>"><?= $entry->title()->html() ?></a></h1>
  <p><?= $entry->text()->excerpt(300) ?></p>
</article>
<?php endforeach ?>

<section class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
  <a href="<?= $pagination->nextPageUrl() ?>">next posts</a>
  <?php endif ?>
</section>

<?php snippet('footer') ?>