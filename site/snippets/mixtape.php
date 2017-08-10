<div class="card-50 bg-white">
  <figure class="bg-gradient-v">
    <a href="<?= $mix->url() ?>">
      <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $mix->imgurl() ?>/2600x1600')" alt=""></span>
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
        <?= $mix->imgcredit() ?> (Unsplash)
      </figcaption>
    <?php endif ?>
  </figure>
  <!-- end figure-->
  <div class="flex-content">
    <p class="text-context">par 
        <?php $author = $mix->author() ?>
        <?php if ($site->user($author)->firstName() != '' && $site->user($author)->lastName() != '') : ?>
          <?php echo $site->user($author)->firstName().' '.$site->user($author)->lastName() ?>
        <?php else : ?>
          <?= $author ?>
        <?php endif ?>
      </p>
    <p>
      <?php $tracks = $mix->children()->count() ?>
      <?php foreach ($mix->children() as $track) : ?>
        <?= $track->title() ?> 
        <?php if ($track->num() < $tracks) : ?>
         /
       <?php endif ?>
      <?php endforeach ?>
    </p>
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