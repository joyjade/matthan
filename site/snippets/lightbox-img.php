<figure class="thumbnail">
  <!-- <img src="<?= $photo->url() ?>" alt="<?= $photo->alt() ?>"> -->
  <img
      loading="lazy"
      alt="<?= $photo->alt() ?>"
      src="<?= $photo->url() ?>"
      srcset="<?= $photo->srcset([400, 900, 1800]) ?>"
      width="<?= $photo->width() ?>"
      height="<?= $photo->height() ?>"
      aria-describedby="materials"
  >
  <?php if($photo->caption()->isNotEmpty()) : ?>
    <figcaption>
      <?=$photo->caption()->kirbytext()?>
    </figcaption>
  <?php endif ?>
</figure>