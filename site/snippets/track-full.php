<section class="bg-white aligncenter track-full">
  <?php if ($thumb != '') : ?>
    <span class="background light" style="background-image:url('<?php echo $thumb->url() ?>')"></span>
  <?php endif ?>

  <div class="wrap size-80">
  	<h2 class="text-data"><?= $track->title() ?></h2>
    <p class="text-intro aligncenter">
      <?php if ($track->location() != '') : ?>
        <svg class="fa-map-pin">
          <use xlink:href="#fa-map-pin"></use>
        </svg>
        <?= $track->location() ?>
      <?php endif ?>
      <?php if ($track->baseline() != '') : ?>
       "<?= $track->baseline() ?>"
      <?php endif ?>
      </p>
    <h4><?= $track->text()->kirbytext() ?></h4>
  </div>
  <!-- .end .wrap -->
  

  <figcaption>
    <?php if ($track->imgcredit() != '') : ?>
      <svg class="fa-camera">
        <use xlink:href="#fa-camera"></use>
      </svg>
      <?= $track->imgcredit() ?> 
    <?php endif ?>
    <?php if ($track->sourcetitle() != '') : ?>
      Source : <a href="<?= $track->sourcelink() ?>"><?= $track->sourcetitle() ?></a>
    <?php endif ?>
  </figcaption>

</section>