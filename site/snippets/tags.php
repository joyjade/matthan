<?php foreach($tags as $tag): ?>
  <li>
    <a 
    <?php e($tag === param('tag'), 'class="active"') ?> 
    href="<?= url($section, ['params' => ['tag' => $tag]]) ?>">
    <?= html($tag) ?>
    </a>
  </li>
<?php endforeach ?>

<li>
  <a 
    <?php e( !param('tag') && !param('year'), 'class="active"') ?> 
    href="<?= url($section) ?>">all</a>
</li>