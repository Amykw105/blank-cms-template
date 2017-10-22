<?php snippet('header') ?>

  <main class="main blog-article" role="main">
    
    <article class="article single wrap">
        <section class="content-section article-section">
            <div class="wrapper">
                <?php if($page->image()): ?>
                    <div class="blog-image" style="background-image:url(<?= $page->image()->url() ?>);"></div>
                <?php endif ?>
                <br/>
                <a class="blog-title" href="<?= $page->url() ?>"><?= $page->title()->html() ?></a>
                <span class="blog-date">Posted <?= $page->date('F jS, Y') ?></span>
                <?= $page->text()->kirbytext() ?>
            </div>
        </section>
    </article>

  </main>

<?php snippet('footer') ?>