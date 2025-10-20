<?php snippet('nav') ?>
<main>
  
  <section>
    <div class="sticky">
      <h1><?=$page->name() ?></h1>
      
      <?=$page->description()->kirbytext()?>
      <!-- <figure class="cover">
        <img src="<?=$page->cover()->toFile()->url()?>" alt="">
      </figure> -->
      <a class="color-link" href="<?=$page->instagram()->url()?>">@goatheadstudio</a>
      </br>
      </br>
      <button>
        <a href="<?=$page->booking()->url()?>">Book Now</a>  
      </button>
    </div>
  </section>
  <section class="tattoos">
    <?php $i = 0; ?>
    <?php foreach($page->files()->sortBy('modified')->filterBy('template','tattoo-image') as $tattoo): ?>
      <?php
        snippet('lightbox-img', ['photo' => $tattoo, 'index' => $i,  'cutoff' => 12]) ?>
      <?php $i++; ?>
    <?php endforeach ?>
  </section>
  
</main>

<?php snippet ('lightbox') ?>
<?php snippet('footer') ?>