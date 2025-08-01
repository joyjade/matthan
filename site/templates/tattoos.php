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
    <?php foreach($page->files()->sorted()->filterBy('template','tattoo-image') as $tattoo): ?>
      <figure>
        <img src="<?=$tattoo->url()?>" alt="">
      </figure>
    <?php endforeach ?>
  </section>
  
</main>
<?php snippet('footer') ?>