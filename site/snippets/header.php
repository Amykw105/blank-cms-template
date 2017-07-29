<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <!-- This site was built by A Web Strategy - https://a-web-strategy.co.uk - Web Development and Social Media Management for small businesses -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="cleartype" content="on" />
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="author" content="AW" />
  <meta name="distribution" content="GLOBAL" />
  <meta name="revisit-after" content="1 day" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="language" content="en-GB" />
  <meta name="rating" content="General" />
  <meta name="copyright" content="2017" />
  <meta name="classification" content="Restaurant" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta name="keywords" content="restaurant, pub and grub, pub and kitchen, pub, restaurant, bar, burgers, pub grub, steaks, grills, homemade, pies, pubs in totnes, best pubs in totnes, pubs in totnes, dog friendly pubs in totnes, cocktail bars in totnes, cocktails, gin, gastro pub, gastro pubs in totnes, pubs in totnes devon, pubs near totnes devon, pubs and restaurants in totnes, pubs around totnes, pubs with accommodation, newton abbot, tripadvisor, tripadvisor king william, places to eat in totnes, inn, totnes inns, king bill iv, totnes, devon, pub, bar, family-run, local, The King William IV, Hotels in Totnes, places to stay in Totnes"/>
  <title><?= $page->SEOtitle()->html() ?></title>
  <?php if($page->SEOdescription()->isNotEmpty()): ?>
    <meta name="description" content="<?= $page->SEOdescription()->html() ?>">
  <?php else : ?>    
    <meta name="description" content="<?= $site->SEOdescription()->html() ?>">
  <?php endif ?>
  <link rel="canonical" href="<?= $page->url() ?>">

   <!--Verifications -->
  <meta name="google-site-verification" content="<?= $site->googleValidate()->html() ?>" />
  <meta name="msvalidate.01" content="<?= $site->bingValidate()->html() ?>" />
  <meta name="p:domain_verify" content="2cb4535555a74c5bb09bfa2d9fe7ab06"/>
  <link rel="shortcut icon" href="/favicon.ico">

   <!--Mobile icons -->
  <meta name="apple-mobile-web-app-title" content="<?= $site->title()->html() ?>">

   <!--Google -->
  <meta itemprop="name" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta itemprop="description" content="<?= $page->SEOdescription()->html() ?>">
  <?php if($page->googleImage()->isNotEmpty()): ?>
  <meta name="image" content="<?= $page->googleImage()->toFile()->url() ?>">
  <?php else : ?>    
  <meta name="image" content="<?= $site->googleImage()->toFile()->url() ?>">
  <?php endif ?>

   <!--Facebook -->
  <meta property="og:description" content="<?= $page->SEOdescription()->html() ?>">
  <?php if($page->facebookImage()->isNotEmpty()): ?>
  <meta name="og:image" content="<?= $page->facebookImage()->toFile()->url() ?>">
  <?php else : ?>    
  <meta name="og:image" content="<?= $site->facebookImage()->toFile()->url() ?>">
  <?php endif ?>
  <meta property="og:title" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:locale" content="en_GB" />
  <meta property="og:site_name" content="King William IV, Totnes" />

   <!--Twitter -->
  <meta name="twitter:description" content="<?= $page->SEOdescription()->html() ?>">
  <?php if($page->twitterImage()->isNotEmpty()): ?>
  <meta name="twitter:image:src" content="<?= $page->twitterImage()->toFile()->url() ?>">
  <?php else : ?>    
  <meta name="twitter:image:src" content="<?= $site->twitterImage()->toFile()->url() ?>">
  <?php endif ?>
  <meta name="twitter:title" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta name="twitter:card" content="summary_large_image">

  
  <?= css('assets/css/styles.css') ?>
  
  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Cardo|Pathway+Gothic+One' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  
  
  <script type="application/ld+json">
 {
   "@context": "http://schema.org/",
   "@type": "Restaurant",
   "name": "The King William IV",
   "acceptsReservations": "Yes",
   "menu": "http://king-williampub.com/menu",
   "servesCuisine": "British",
   "priceRange": "$$",
   "address": {
     "@type": "PostalAddress",
     "streetAddress": "45 Fore Street",
     "addressLocality": "Totnes",
     "addressRegion": "Devon",
     "postalCode": "TQ9 5HN"
   },
   "telephone": "01803 866689",
   "geo": {"@type": "GeoCoordinates", "latitude": "50.431384", "longitude": "-3.685453" },
   "openingHours": [
     "Mon-Su 10:00-23:00"
     ]
 }
 </script>
</head>
<body class="<?= $page->class() ?>">

  <header class="main-header">
    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
    
      <div class="overlay"></div>
    <div class="wrapper">
      <div class="clearfix"></div>
      <a class="contact-number" href="tel:01803866689">01803 866689</a>
      <a href="/" rel="home" class="mobile-logo"><img src="assets/images/white-King-William-IV-Hotel-Pub-Restaurant-Accommodation.png" alt="The King William IV - The best place to stay in Totnes"/></a>
      <?php snippet('menu') ?>
      <div class="clearfix"></div>
      </div>
      <?php if($page->class()->html() == 'homepage'): ?>
      <div class="banner-content">
        <h1 class="intro-large"><?= $page->heading()->html() ?></h1>
        <h2 class="intro-small"><?= $page->intro()->kirbytext() ?></h2>
      </div>
      <div class="book-now-bar"><a href="<?= $page->calltolink()->html() ?>"><?= $page->calltoactionlabel()->html() ?></a></div>
      <?php endif ?>
    </div>
  </header>
