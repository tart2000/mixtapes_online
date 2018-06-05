<?php snippet('header') ?>

<article id="webslides" class="vertical">
	<section class="bg-black aligncenter">
  <!-- Overlay/Opacity: [class*="bg-"] > .background.dark or .light -->
    <span class="background" style="background-image:url('<?= $site->url() ?>/assets/images/paint.jpg')"></span>
    <div class="wrap">
      <p class="text-subtitle"></p>
      <h1 class="text-landing text-shadow"><?= $site->title() ?></h1>
      <p class="text-symbols">* * *</p>
      <p class=""><?= $site->baseline() ?></p>

      <?php $random = page('albums')->children()->visible()->shuffle()->first() ?>
      <p class="aligncenter mt">
        <a class="button" href="<?= $random->url() ?>">
          Mixtape au hasard
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
      <img class="alignright size-50" src="<?= $site->url() ?>/assets/images/illustration_V2.png" alt="mixtapes">
      <?= $page->text()->kirbytext() ?>
    </div>
    <!-- .end .wrap -->
  </section>

  <section>
    <div class="wrap">
      <ul class="flexblock gallery">
        <?php foreach (page('albums')->children()->visible()->limit(4) as $mix) : ?>
          <?php snippet('mixtape-vertical', array('mix'=>$mix)) ?>
        <?php endforeach ?>
      </ul>
      <p class="aligncenter mt">
        <a class="button ghost" href="/albums">
          <?= l::get('seeall') ?>
        </a>
      </p>
    </div>
    <!-- .end .wrap -->
  </section>

  <section>
    <!--.wrap = container 1200px with fadein animation -->
    <div class="wrap">
      <h2 class="aligncenter">Contribuer</h2>
      <p class="aligncenter">Mixtapes a besoin de vous pour devenir meilleur.</p>
      <div class="grid">
        <div class="column">
          <?= $page->cont1()->kirbytext() ?>
        </div>
        <!-- end .column -->
        <div class="column">
          <figure><img src="<?= $site->url() ?>/assets/images/team_collaboration.png" alt="WebSlides Files"></figure>
        </div>
        <!-- end .column -->
        <div class="column">
          <?= $page->cont2()->kirbytext() ?>
        </div>
        <!-- end .column -->
      </div>
      <!-- end .grid -->
    </div>
    <!-- end .wrap -->
  </section>
  
</article>

<?php snippet('footer') ?>