<section><!-- Author page -->

  <a href="javascript:void(0)" class="close-sq" onclick="closeTab()">×</a>

  <div class="wrap size-80">
    <div class="grid sm">
      <div class="column">
        <img class="avatar" src="<?= $theauthor->avatar()->crop(300,300)->url() ?>">
          

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
        <?php if ($contributors != '') : ?>
          <?php $contributors = $contributors->toStructure() ?>
          <?php $count = $contributors->count() ?>
          <p>
            Avec l'aide de 
            <?php foreach ($contributors as $con) : ?>
              <?php $user = $site->users()->find($con) ?>
              <a href="<?= $site->url().'/users/'.$con ?>"><?= $user->firstName() ?> <?= $user->lastName() ?></a>
              <?php $count-- ?>
              <?php if ($count > 1) : ?>
                <?php echo ', ' ?> 
              <?php endif ?>
              <?php if ($count == 1) : ?> 
                <?php echo ' et '?>
              <?php endif ?>
            <?php endforeach ?>
          </p>
        <?php endif ?>
      </div> <!-- end column -->
    </div>
  </div>
</section>