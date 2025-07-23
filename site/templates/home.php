<?php snippet('nav') ?>
<main>
  <section>
    <a href="<?=$page->artlink()->toPage()->url()?>">
      <img src="<?= $page->art()->toFile()->url() ?>" alt="">
    </a>
  </section>
  <section>
    <a href="<?=$page->tattoolink()->toPage()->url()?>">
      <img src="<?= $page->tattoo()->toFile()->url() ?>" alt="">
    </a>
  </section>
</main>
<?php snippet('footer') ?>