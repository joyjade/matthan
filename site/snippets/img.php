
<figure>
  <img
      loading="lazy"
      alt="<?= $photo->alt() ?>"
      src="<?= $photo->resize(400)->url() ?>"
      srcset="<?= $photo->srcset([400, 600, 900, 1200, 1800]) ?>"
      width="<?= $photo->resize(1800)->width() ?>"
      height="<?= $photo->resize(1800)->height() ?>"
      aria-describedby="materials"
  >
</figure>