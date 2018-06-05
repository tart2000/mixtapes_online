<section class="fullscreen"> <!-- Project V3b -->
  <div class="card-50">

    <figure>
      <?php if ($thumb != '') : ?>
        <img src="<?php echo $thumb->url() ?>">
      <?php endif ?>
      <figcaption>
          <svg class="fa-camera">
            <use xlink:href="#fa-camera"></use>
          </svg>
          <?= $track->imgcredit() ?> 
      </figcaption>
      <div class="slide-nav">
        <?= $track->parent()->title() ?>
      </div>
    </figure>

    <!-- end figure-->

    <div class="flex-content">
      <span class="numb">
        <?php if ($count != 0) : ?>   
          <?= $track->num() ?>
        <?php else :?>
          ✌
        <?php endif ?>
      </span>

      <h2 class="aligncenter"><?= $track->title() ?></h2>
      <p class="text-intro aligncenter">
        <svg class="fa-map-pin">
          <use xlink:href="#fa-map-pin"></use>
        </svg>
        <?= $track->location() ?>
      </p>
      <p class="text-subtitle aligncenter">
       "<?= $track->baseline() ?>"
      </p>
      <p><?= $track->text()->kirbytext() ?></p>
      <p class="aligncenter"><a href="<?= $track->trackurl() ?>" target="_blank"><?= $track->trackurl() ?></a></p>
      <?php if ($track->logo() != '') : ?>
        <div class="project-logo" style="background-image:url('<?= $track->logo() ?>')">
          <img class="img-hidden" src="<?= $track->logo() ?>">
        </div>
      <?php endif ?>
    </div>
    <!-- end .flex-content-->
  </div>
  <!-- end .card-50-->

</section> <!-- end project V3b -->