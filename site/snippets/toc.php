<!-- Table of contents -->
<section class="small-pad"> 
  <div class="wrap size-50">
  <h3><?= l::get('content') ?></h3>
    <div class="toc">
      <ul>
        <?php foreach ($tracks as $track) : ?>
          <li>
            <a href="#slide=<?php echo $track->num()+2 ?>" title="<?= $track->title() ?>">
              <span class="chapter"><?= $track->title() ?></span>
              <span class="toc-page">
                <?php $num = $track->num() ?>
                <?php if (--$count > 0) : ?>
                  <?=  znum($num) ?> <!-- Add zero if <= 9 -->
                <?php else : ?>
                  Bonus track
                <?php endif ?>
              </span>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
    <!-- end .toc -->
  </div>
  <!-- .end .wrap -->
</section>