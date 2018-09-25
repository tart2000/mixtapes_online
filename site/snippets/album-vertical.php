<li class="bg-white album">
  <a href="<?= $mix->url() ?>" target="_blank">
    <figure class="bg-gradient-v">

      <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $mix->imgurl() ?>/2600x1600')" alt=""></span>
      <div class="wrap square text-white text-center">
        <div class="play">
          <img src="<?= $site->url() ?>/assets/images/play.svg"/>
        </div>
      </div>

      <figcaption>
        <p class="sameheight">
          <h2>
          <?= $mix->title() ?>
        </h2>
        <p class="text-subtitle"><?= $mix->baseline() ?></p>
        <?php if ($mix->author() != '') : ?>
          <p class="">par 
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
        <p class="tiny">38 tracks</p>
          
        </p>
      </figcaption>
    </figure>

  </a>
</li>
