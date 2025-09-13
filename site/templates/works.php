<?php snippet('nav');?>
<main>


  <div class="subnav">
    <div class="filter-container">
      <div class="select">
        year <span class="arrow"> > </span>
        <?= param('year') ?>
      </div>
      <ul class="filter">
          <?php foreach($years as $year): ?>
            <li>
              <a 
                <?php e($year->toString() === param('year'), 'class="active"') ?> 
                href="<?= url('works', ['params' => ['year' => $year]]) ?>">
                <?= $year ?>    
              </a>
            </li>
          <?php endforeach ?>
        </ul>
    </div>
    <ul class="tags">
      <?php snippet('tags', ['tags' => $tags, 'section' => 'works']) ?>
    </ul>
  </div>

  

  <section class="works">
    <?php foreach($entries as $work): ?>
      <?php $cover = $work->cover()->toFile() ? $work->cover()->toFile() : $work->images()->first() ?>

      <div class="item">
        <a href="<?= $work->url() ?>">
          <?php snippet('img', ['photo' => $cover]) ?>
        </a>
      </div>
    <?php endforeach ?>
  </section>
  
  <section class="navigation">
    <div>
      <?php if($pagination->hasPrevPage()): ?>
      <a href="<?= $pagination->prevPageUrl() ?>">
        <span class="nav left">
          <?= asset('assets/icons/arrow-lines.svg')->read()?>
        </span>
      </a>
      <?php endif ?>
    </div>
    <div>
      <?php if($pagination->hasNextPage()): ?>
      <a href="<?= $pagination->nextPageUrl() ?>">
        <span class="nav right">
          <?= asset('assets/icons/arrow-lines.svg')->read()?>
        </span>
      </a>
      <?php endif ?>
    </div>
  </section>
</main>
<?php snippet('footer') ?>