<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrapper">
      
      <div class="text">
        <center>
          <h1><?= $page->title()->html() ?></h1>
        <?= $page->intro()->kirbytext() ?>
        <?= $page->text()->kirbytext() ?>
        </center>
        </div>
    </div>
    
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
    
    <?php snippet('reviews') ?>

  </main>

<?php snippet('footer') ?>