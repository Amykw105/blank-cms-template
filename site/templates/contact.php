<?php snippet('header') ?>

  <main class="main" role="main">
  
    
    <section class="page">
    
    
      <div class="wrapper">
        <center>
          <h1><?= $page->intro()->html() ?></h1>
          <?= $page->text()->html() ?>
        </center>
        <br/><br/>
        <div class="contact-info">
            <form method="post" class="contact-form">

     <?php if($alert): ?>
     <div class="<?php echo $class ?>">
       <ul>
         <?php foreach($alert as $message): ?>
         <li><?php echo html($message) ?></li>
         <?php endforeach ?>
       </ul>
     </div>
     <?php endif ?>

     <div class="field">
       <label for="name">Name <abbr title="required">*</abbr></label>
       <input type="text" id="name" name="name" placeholder="Your name">
     </div>

     <div class="field">
       <label for="email">Email <abbr title="required">*</abbr></label>
       <input type="email" id="email" name="email" required placeholder="Your email">
     </div>

     <div class="field">
       <label for="text">Text <abbr title="required">*</abbr></label>
       <textarea id="text" name="text" required placeholder="Tell me about your business"></textarea>
     </div>

     <input type="submit" name="submit" value="Submit" class="submit-button">

   </form>
   <div class="clearfix"></div>
        <?php snippet('socials') ?>
            <div class="clearfix"></div>
        </div>
        </div>
        <style>.embed-container { position: relative; padding-bottom: 300px; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2541.516451304509!2d-3.6846824!3d50.4314803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaad0485d93135daf!2sKing+William+IV!5e0!3m2!1sen!2suk!4v1500808665140' width='600' height='450' frameborder='0' style='border:0'></iframe></div>
    </section>
    
  </main>
  
<?php snippet('footer') ?>
