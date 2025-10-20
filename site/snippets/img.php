
<!-- for works or exhibitions pages where the pages link to another page and not a lightbox image -->

<figure>
  <img
      loading="lazy"
      alt="<?= $photo->alt() ?>"
      src="<?= $photo->url() ?>"
      srcset="<?= $photo->srcset([400, 600]) ?>"
      width="<?= $photo->width() ?>"
      height="<?= $photo->height() ?>"
      aria-describedby="materials"
  >
</figure>