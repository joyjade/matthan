<?php snippet('nav');?>

<main>
<section class="<?= $page->format()?>">
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
      <?php $tags = $page->tags()->split(); 
        foreach($tags as $tag): ?>
        <li><a href="<?=url('notes', ['params' => ['tag' => $tag]])?>"><?= $tag ?></a></li>
      <?php endforeach ?>
    </ul>


  </article>
</section>
        </main>
<?php snippet('footer') ?>