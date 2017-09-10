<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
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
  <meta name="keywords" content=""/>
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
  
  <?= css('assets/css/styles.css') ?>
  
  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Merriweather|Montserrat' ] }
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
    <div class="home-banner <?= $page->slideshow()->html() ?>"  style="background-image: url(<?= $page->calltoimage()->toFile()->url() ?>);">
      <div class="overlay"></div>
      <div class="clearfix"></div>
      <a href="/" rel="home" class="mobile-logo"><img src="assets/images/white-King-William-IV-Hotel-Pub-Restaurant-Accommodation.png" alt="kjgh"/></a>
      <?php snippet('menu') ?>
      <div class="clearfix"></div>
      <?php if($page->class()->html() == 'homepage'): ?>
      <div class="banner-content">
        <h1 class="intro-large" id="responsive_headline"><?= $page->heading()->html() ?></h1>
        <h2 class="intro-small"><?= $page->intro()->kirbytext() ?></h2>
        <div class="intro-cta"><a href="<?= $page->calltolink()->html() ?>"><?= $page->calltoactionlabel()->html() ?></a></div>
      </div>
      <div class="info-bar"><a href="<?= $page->calltolink()->html() ?>"><?= $page->calltoactionlabel()->html() ?></a></div>
      <?php endif ?>
    </div>
  </header>
