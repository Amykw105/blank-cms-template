<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="blog-section content-section">
      <div class="wrapper blog-flex-wrapper">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>
          <div class="blog-posts">
            <?php if($article->image()): ?>
            <div class="blog-image" style="background-image:url(<?= $article->image()->url() ?>);"></div>
            <?php endif ?>
              <a class="blog-title" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              <span class="blog-date">Posted <?= $article->date('F jS, Y') ?></span>
              <span class="blog-excerpt"><?= $article->text()->kirbytext()->excerpt(50, 'words') ?> <a class="blog-link" href="<?= $article->url() ?>">Read article</a></span>
              <hr class="blog-divider"/>
          </div>
        <?php endforeach ?>
        <div class="clearfix"></div>
      <?php else: ?>
        <p><center>This blog does not contain any articles yet.</center></p>
      <?php endif ?>
      <br/>
      <?php snippet('pagination') ?>

    </div>
    </section>

  </main>

<?php snippet('footer') ?>