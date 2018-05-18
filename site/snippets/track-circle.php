<section><!-- Author page -->
  <div class="wrap size-80">
    <div class="grid sm">
      <div class="column">
        <div class="avatar">
          <?= $theauthor->avatar() ?>
        </div>
      </div>
      <div class="column">
        <p class="text-subtitle">
        Producteur
        </p>
        <h3>
          <?= $theauthor->firstName() ?> <?= $theauthor->lastName() ?>
          <?php if ($theauthor->org() != '') : ?>
            - <?= $theauthor->org() ?>
          <?php endif ?>  
        </h3>
        <p><?= $theauthor->bio() ?></p>
        <p>
          <?php if ($theauthor->twitter() != '') : ?>
            <a href="http://twitter.com/<?= $theauthor->twitter() ?>" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          <?php endif ?>
          <?php if ($theauthor->linkedin() != '') : ?>
            <a href="<?= $theauthor->linkedin() ?>" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
          <?php endif ?>
          <?php if ($theauthor->weblink() != '') : ?>
            <a href="<?= $theauthor->weblink() ?>" target="_blank">
              <?= $theauthor->weblink() ?>
            </a>
          <?php endif ?>
        </p>
      </div>
    </div>
  </div>
</section>