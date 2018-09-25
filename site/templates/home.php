<?php snippet('header') ?>

<article id="webslides" class="vertical">
	<section class="bg-black aligncenter">
  <!-- Overlay/Opacity: [class*="bg-"] > .background.dark or .light -->
    <span class="background dark" style="background-image:url('<?= $page->images()->first()->url()?>')"></span>
    <div class="wrap">
      <p class="text-subtitle"></p>
      <h1 class="text-landing text-shadow"><?= $page->baseline() ?></h1>
      <p class="text-symbols">\ (•◡•) /</p>
      <p class=""><?= $site->baseline()->kirbytext() ?></p>

      <?php $random = page('albums')->children()->visible()->shuffle()->first() ?>
      <p class="aligncenter mt">
        <a class="button" href="<?= $random->url() ?>">
          Album au hasard 
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
      <div class="mt">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    <!-- .end .wrap -->
  </section>

  <section>
    <div class="wrap">
      <ul class="flexblock gallery" id="albums">
        <?php foreach (page('albums')->children()->visible() as $mix) : ?>
          <?php snippet('album-vertical', array('mix'=>$mix)) ?>
        <?php endforeach ?>
      </ul>
    </div>
    <!-- .end .wrap -->
  </section>
  
  <section>
    <!--.wrap = container 1200px with fadein animation -->
    <div class="wrap">
      <h2 class="aligncenter">Contribuer</h2>
      <p class="aligncenter">Pour faire votre propre album, remplissez ce <a href="https://docs.google.com/spreadsheets/d/1qoPNh_mkCbr15v8t3ys3I5LPGRrY9NVflVCE9ZYQmQU/edit?usp=sharing" target="_blank">template Google Doc</a><br>et envoyez le à arthur[]thecamp.fr</p>
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