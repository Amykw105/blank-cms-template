<nav class="site-navigation" role="navigation">
  <ul class="menu">
    <?php $items = $pages->visible(); ?>
    <?php foreach($items as $item): ?>
      <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
