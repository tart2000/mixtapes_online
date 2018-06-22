<li class="bg-white album">
  <a href="<?= $mix->url() ?>" target="_blank">
    <figure class="bg-gradient-v">

      <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $mix->imgurl() ?>/2600x1600')" alt=""></span>
      <div class="wrap bmt text-white text-center">

        <h2>
          <?= $mix->title() ?>
        </h2>
        <p class="text-subtitle"><?= $mix->baseline() ?></p>
        <?php if ($mix->author() != '') : ?>
          <p class="text-white smt">par 
            <?php $author = $mix->author() ?>
            <a href="<?= $site->url().'/users/'.$author ?>">
              <?php if ($site->user($author)->firstName() != '' && $site->user($author)->lastName() != '') : ?>
                <?php echo $site->user($author)->firstName().' '.$site->user($author)->lastName() ?>
              <?php else : ?>
                <?= $author ?>
              <?php endif ?>
            </a>
          </p>
        <?php endif ?>
      </div>

      <figcaption>
        <p class="sameheight">
          <?php $tracks = $mix->children()->count() ?>
          <?php foreach ($mix->children() as $track) : ?>
            <?= $track->title() ?> 
            <?php if ($track->num() < $tracks) : ?>
             /
           <?php endif ?>
          <?php endforeach ?>
        </p>
        <a class="button ghost" href="<?= $mix->url() ?>" target="_blank">
            Play 
            <svg class="fa-play">
              <use xlink:href="#fa-play"></use>
            </svg>
          </a>
      </figcaption>
    </figure>

  </a>
</li>
