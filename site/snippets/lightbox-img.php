<figure class="thumbnail">
  <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
  <?php if($image->caption()->isNotEmpty()) : ?>
    <figcaption>
      <?=$image->caption()?>
    </figcaption>
  <?php endif ?>
</figure>