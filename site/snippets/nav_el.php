<li>
  <ul>
    &lpar; &nbsp;
    <?php foreach ($items as $item): ?>
      <li>
        <a <?php e($item->isActive(), 'class="active"') ?> href="<?= $item->url() ?>">
          <?= $item->title()->html()->lower() ?><?php e(!$item->isLast(($items)), ',') ?>
        </a>
        
    </li>
    <?php endforeach ?>
  </ul>
</li>