<?php snippet('nav');?>

<section>
  <div class="subnav">
    <a href="<?= $page->parent()->url() ?>">back to all notes</a>
  </div>
  <article>
    <div class="heading">
      <h1><?= $page->title()->html() ?></h1>
      <span><?=$page->date()->toDate(('d M y')) ?></span>    
    </div>
    
    <?= $page->article()->toBlocks() ?>

    <ul class="tags">
      <?php foreach($page->tags() as $tag): ?>
        <li><a href="<?=url('notes', ['params' => ['tag' => $tag]])?>"><?= $tag ?></a></li>
        <?php endforeach ?>
    </ul>


  </article>
</section>

<?php snippet('footer') ?>