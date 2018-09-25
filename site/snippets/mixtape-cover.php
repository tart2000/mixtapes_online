<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<!-- Mixtape cover -->
<section class="bg-gradient-v mixtape-cover">
  <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $page->imgurl() ?>/2600x1600')"></span>
 <!--  <span class="background dark" style="background-image:url('https://source.unsplash.com/nxfuA21kNHY/1440x1440')"></span> -->
  <div class="wrap size-60">
    <a href="javascript:void(0)" class="close-sq" onclick="closeTab()">×</a>
    
    <h2>
      <?= $page->title() ?> 
    </h2>
    <p class="text-subtitle"><?= $page->baseline() ?></p>
    <p><?= $page->text()->kirbytext() ?></p>
    <!-- <a class="button ghost" href="https://en.wikipedia.org/wiki/Aqaba">Voir &raquo;</a> -->

    <p class="text-context"><em>par 
      <?php $author = $page->author() ?>
      <?php if ($site->user($author)->firstName() != '' && $site->user($author)->lastName() != '') : ?>
        <?php echo $site->user($author)->firstName().' '.$site->user($author)->lastName() ?>
      <?php else : ?>
        <?= $author ?>
      <?php endif ?> - <?= strftime("%d/%m/%Y", strtotime($page->date('l j F Y'))) ?>
    </em></p>
  </div>

  <?php if ($page->imgcredit() !='') : ?>
    <div class="credit">
      <svg class="fa-camera">
        <use xlink:href="#fa-camera"></use>
      </svg>
      <?= $page->imgcredit() ?> 
      <?php if ($page->imgurl() != '') : ?>
        (Unsplash)
      <?php endif ?>
    </div>
  <?php endif ?>
  <!-- .end .wrap -->
</section>