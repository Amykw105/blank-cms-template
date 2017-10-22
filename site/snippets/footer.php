<footer class="site-footer">
<div class="wrapper">
  <div class="footer-menu">
  <nav class="footer-navigation" role="navigation">
    <ul class="menu">
      <?php $items = $pages->visible(); ?>
      <?php foreach($items as $item): ?>
        <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>
  </div>
  <div class="small-text">
    <p><?= $site->copyright()->html() ?> &copy; 2017</p>
  </div>
</div>
</footer>
  <script type="text/javascript" src="assets/js/libs.min.js"></script>
  <script type="text/javascript" src="assets/js/scripts.min.js"></script>
  <script type="text/javascript" src="/assets/plugins/facebookfeed/js/facebookfeed.js"></script>
  <script type="text/javascript" src="/assets/plugins/instagram/js/instagram.js"></script>
  <script type="text/javascript" src="/assets/plugins/etsy/js/etsy.js"></script>
  <script>
  if (document.documentElement.clientWidth < 700) {
	  window.fitText( document.getElementById("responsive_headline"), 1.2 );
  }
  </script>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
    ga('create', '', 'auto');
    ga('send', 'pageview');
  
  </script>
  <!-- End Google Analytics -->
</body>
</html>