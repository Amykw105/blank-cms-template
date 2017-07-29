<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="page">
      <div class="wrapper">
      <center><h1><?= $page->intro()->html() ?></h1>
      <?= $page->text()->kirbytext() ?>
      </center>
       
      </div>
      <div class="swipeboxs">
        <?php foreach($page->gallery()->yaml() as $image): ?>   
          <?php if($image = $page->image($image)): ?>
            	<img src="<?= $image->crop(200,200)->url(); ?>" alt="The best place to stay in Totnes"/>  
            		    
          <?php endif ?>
        <?php endforeach; ?>
        <div class="clearfix"></div>
        </div>
    </section>
  </main>

<?php snippet('footer') ?>