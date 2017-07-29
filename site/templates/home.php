<?php snippet('header') ?>

  <main class="main" role="main">
    <?php snippet('reviews') ?>

    
    <section class="actions">
      <div class="wrapper">
      <a href="/menu" class="third" style="background-image:url('http://king-williampub.com/assets/images/other/king-william-food.png');">
        <div class="link">Our menu</div>
      </a>
      <a href="/drinks" class="third" style="background-image:url('http://king-williampub.com/assets/images/other/king-william-drinks.png');">
        <div class="link">Drinks</div>
      </a>
      <a href="/accommodation" class="third" style="background-image:url('http://king-williampub.com/assets/images/other/king-william-accommodation.png');">
        <div class="link">Accommodation</div>
      </a>
      <div class="clearfix"></div>
    </div>
    </section>
    


<section class="socials">
  <div class="wrapper background-wrapper">
    <div class="facebookfeed">
      <p class="facebook-title">News Feed</p>
              <div class="feed-here">
    
              <p>Loading news...</p>
              
            </div>
              <div class="clearfix"></div>
          </div>
          <div class="images-here"></div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
  </div>
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