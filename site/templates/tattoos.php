<?php snippet('nav') ?>
<main>
  
  <section>
    <figure class="cover">
      <img src="<?=$page->cover()->toFile()->url()?>" alt="">
    </figure>
    <h1><?=$page->name() ?></h1>
    <p>
      <?=$page->description()?>
    </p>
    <button>
      <a href="<?=$page->booking()->url()?>">Book Now</a>  
    </button>
  </section>
  <section class="tattoos">
    <?php foreach($page->files()->filterBy('template','tattoo-image') as $tattoo): ?>
      <figure>
        <img src="<?=$tattoo->url()?>" alt="">
      </figure>
    <?php endforeach ?>
  </section>
  
</main>
<?php snippet('footer') ?>