<div class="card-50 bg-white">
  <figure class="bg-gradient-v">
    <a href="<?= $mix->url() ?>">
      <span class="background dark" style="background-image:url('<?= $mix->imgurl() ?>')" alt=""></span>
    </a>
    <div class="wrap mt">
    <h2>
      <?= $mix->title() ?>
    </h2>
    <p class="text-subtitle"><?= $mix->baseline() ?></p>
  </div>
    <?php if ($mix->imgcredit() !='') : ?>
      <figcaption>
        <svg class="fa-camera">
          <use xlink:href="#fa-camera"></use>
        </svg>
        <?= $mix->imgcredit() ?>
      </figcaption>
    <?php endif ?>
  </figure>
  <!-- end figure-->
  <div class="flex-content">
    <p class="text-context">par Arthur Schmitt</p>
    <p><?= $mix->text()->excerpt(120) ?></p>
    <p class="aligncenter">
      <a class="button ghost" href="<?= $mix->url() ?>">
        Play 
        <svg class="fa-play">
          <use xlink:href="#fa-play"></use>
        </svg>
      </a>
    </p>
  </div>
  <!-- end .flex-content-->
</div>
<!-- .end .card50 -->