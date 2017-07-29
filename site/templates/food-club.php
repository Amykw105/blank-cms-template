<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="wrapper">
        <div class="banner-content">

        </div>
      </div>
    </div>
    
    <section class="actions">
      <div class="wrapper">
        <h1 class="page-title">JOIN OUR FOOD CLUB</h1>
        <?= $page->text()->kirbytext() ?>
        <!-- Begin MailChimp Signup Form -->
        <div class="food-club-newsletter">
          <div id="mc_embed_signup_example" class="full-subscribe-form">
          <form action="//dartmouthinn.us9.list-manage.com/subscribe/post?u=ac03d40e02541c477de610eb2&amp;id=08e52fbc4e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">

          <div class="mc-field-group field-group">
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
          </div>
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0a621e2c8aab5be401294e32e_8181d9ee97" tabindex="-1" value=""></div>
          <div class="clear field-group"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </p></div>
          <div class="clearfix"></div>
          <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
          </p></div>
          </form>
          <div class="clearfix"></div>
          </div>
          </div>
        <!--End mc_embed_signup-->
      </div>
    </section>
    <?php snippet('reviews') ?>
  </main>

<?php snippet('footer') ?>