<?php snippet('nav') ?>
  <main>
    <div class="profile">
      <?php if ($profile = $page->profile()->toFile()) :?>
        <img src="<?= $profile->url() ?>" alt="<?=$profile->alt()?>">
      <?php endif ?>
    </div>
    <div class="content">
      <p>
        <p><?= $page->tel() ?></p>
        <p><a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a></p>
        <p>instagram: <a href="<?= $page->social() ?>">@matthancowart</a></p>
      </p>

    </div>
    <div>

    </div>
  </main>
<?php snippet('footer') ?>