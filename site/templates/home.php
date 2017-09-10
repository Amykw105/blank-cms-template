<?php snippet('header') ?>

  <main class="main" role="main">
    <?php snippet('reviews') ?>
    
    <section class="shop">
      <div id="shop" class="shop-wrapper">
          <!-- Shop will appear here -->
          <div class="clearfix"></div>
      </div>
    </section>
    
    <section class="actions">
      <?php facebookfeed() ?>
    </section>
    
    <section class="instagram">
      <ul></ul>
      <!-- Instagram feed appears here -->
    </section>
    
    
    
    


    <section class="actions">
        <div class="swipeboxs">
        <?php foreach($page->gallery()->yaml() as $image): ?>   
          <?php if($image = $page->image($image)): ?>
          
            	<img src="<?= $image->crop(200,200)->url(); ?>" alt="The best place to eat in Totnes"/>  
          
            		    
          <?php endif ?>
        <?php endforeach; ?>
        <div class="clearfix"></div>
      </div>
    </section>
  
  </main>

<?php snippet('footer') ?>