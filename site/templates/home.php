<?php snippet('header') ?>

<article>
	<section class="bg-black aligncenter">
  <!-- Overlay/Opacity: [class*="bg-"] > .background.dark or .light -->
    <span class="background" style="background-image:url('<?= $site->url() ?>/assets/images/paint.jpg')"></span>
    <div class="wrap">
      <p class="text-subtitle"></p>
      <h1 class="text-landing text-shadow"><?= $site->title() ?></h1>
      <p class="text-symbols">* * *</p>
      <p class="">Bite-size inspiration for your next project</p>

      <?php $random = page('mixtapes')->children()->shuffle()->first() ?>
      <p class="aligncenter mt">
        <a class="button" href="<?= $random->url() ?>">
          Random mixtape 
          <svg class="fa-random">
            <use xlink:href="#fa-random"></use>
          </svg>
        </a>
      </p>
    </div>
    <!-- .end .wrap -->
  </section>

  <section>
    <div class="wrap">
      <img class="alignright size-50" src="<?= $site->url() ?>/assets/images/mixtape_illus.png" alt="iPhone">
      <h2>1 thème</h2>
      <h2>x 10 projets </h2>
      <h2>+ 1 bonus track</h2>
      <p>Chaque mixtape explore un thème en émergence en réunissant une sélection de projets innovants.</p>
      <p><strong>Image size recommended</strong>: 800x600px / 600x450px.</p>
    </div>
    <!-- .end .wrap -->
  </section>

  <section class="">
    <div class="wrap">
      <?php foreach (page('mixtapes')->children()->limit(4) as $mix) : ?>
        <?php snippet('mixtape', array('mix'=>$mix)) ?>
      <?php endforeach ?>
      <p class="aligncenter mt">
        <a class="button ghost" href="/mixtapes">
          Voir toutes les mixtapes
        </a>
      </p>
    </div>
    <!-- .end .wrap -->
  </section>

  <section>
    <!--.wrap = container 1200px with fadein animation -->
    <div class="wrap">
      <h2 class="aligncenter">Questions</h2>
      <p class="aligncenter">WebSlides Documentation: <a href="../demos/components.html" title="WebSlides Components">Components</a> &middot; <a href="../demos/classes.html" title="WebSlides Classes">Classes</a>.</p>
      <div class="grid">
        <div class="column">
          <h6>Why WebSlides? Good karma</h6>
          <p>There're excellent presentation tools out there. WebSlides is about telling and sharing stories. Hypertext, clean code, and beauty as narrative elements.</p>
          <h6>Is WebSlides a framework?</h6>
          <p>We're all tired of heavy CSS frameworks. WebSlides is a starting point that provides basic <a href="../demos/components.html" title="WebSlides Components">structural components</a> and a scalable <a href="../demos/classes.html" title="WebSlides Classes">CSS architecture</a>.</p>
        </div>
        <!-- end .column -->
        <div class="column">
          <figure><img src="<?= $site->url() ?>/assets/images/setup.png" alt="WebSlides Files"></figure>
        </div>
        <!-- end .column -->
        <div class="column">
          <h6>What can you do with WebSlides?</h6>
          <p>WebSlides is a cute solution for making HTML presentations, landings, and portfolios. <a href="../demos/components.html#slide=15">Put content wherever you want</a>, add <a href="../demos/components.html#slide=98">background images</a>, <a href="../demos/components.html#slide=101">videos</a>...
          </p>
          <h6>How easy is WebSlides?</h6>
          <p>You can create your own presentation instantly. Just a basic knowledge of HTML and CSS is required. Simply choose a demo and customize it.</p>
        </div>
        <!-- end .column -->
      </div>
      <!-- end .grid -->
    </div>
    <!-- end .wrap -->
  </section>
  
</article>

<?php snippet('footer') ?>