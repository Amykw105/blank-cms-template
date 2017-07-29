<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrapper">
      <center>
        <h1><?= $page->title()->html() ?></h1>
      </center>
    </div>
      
    <div class="text wrapper">
      <center>
        <?= $page->text()->kirbytext() ?>
      </center>
    </div>
    
    <section class="actions">
      <div class="wrapper">
        <div class="swipeboxs">
        <?php foreach($page->gallery()->yaml() as $image): ?>   
          <?php if($image = $page->image($image)): ?>
            <a rel="gallery-1" class="chocolat-image" href="<?= $image->url(); ?>" title="The best pub in Totnes">
            	<img src="<?= $image->crop(200,200)->url(); ?>" alt="The best place to eat in Totnes"/>  
            </a>
            		    
          <?php endif ?>
        <?php endforeach; ?>
        <div class="clearfix"></div>
        </div>
      </div>
    </section>
    

    
    <?php snippet('reviews') ?>

  </main>

<?php snippet('footer') ?>