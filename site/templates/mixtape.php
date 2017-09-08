<?php snippet('header') ?>

<article id="webslides">  <!-- Slideshow -->

  <?php date_default_timezone_set('UTC'); ?>
  <?php setlocale(LC_TIME, "fr_FR", ""); ?>

  <!-- Mixtape cover -->
  <section class="bg-gradient-v">
    <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $page->imgurl() ?>/2600x1600')"></span>
   <!--  <span class="background dark" style="background-image:url('https://source.unsplash.com/nxfuA21kNHY/1440x1440')"></span> -->
    <div class="wrap size-60">
      <p class="text-context">par 
        <?php $author = $page->author() ?>
        <?php if ($site->user($author)->firstName() != '' && $site->user($author)->lastName() != '') : ?>
          <?php echo $site->user($author)->firstName().' '.$site->user($author)->lastName() ?>
        <?php else : ?>
          <?= $author ?>
        <?php endif ?>
      </p>
      
      <h2>
        <?= $page->title() ?> 
      </h2>
      <p class="text-subtitle"><?= $page->baseline() ?></p>
      <p><?= $page->text()->kirbytext() ?></p>
      <!-- <a class="button ghost" href="https://en.wikipedia.org/wiki/Aqaba">Voir &raquo;</a> -->
      <p><?= strftime("%d/%m/%Y", strtotime($page->date('l j F Y'))) ?></p>
    </div>

    <?php if ($page->imgcredit() !='') : ?>
      <div class="credit">
        <svg class="fa-camera">
          <use xlink:href="#fa-camera"></use>
        </svg>
        <?= $page->imgcredit() ?> (Unsplash)
      </div>
    <?php endif ?>
    <!-- .end .wrap -->
  </section>

  <?php $tracks = $page->children()->visible() ?>
  <?php $count = $tracks->count() ?>

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
  
  <?php $count = $tracks->count() ?>  
  <?php foreach ($tracks as $track) : ?>
    <?php if (--$count == 0) : ?><!-- Bonus track slide added right before the last slide -->
      <section class="bg-gradient-r aligncenter">
        <div class="wrap">
          <h1 class="text-landing text-shadow"><strong>Bonus track &#128526</strong></h1>
        </div>
        <!-- .end .wrap -->
      </section>
    <?php endif ?>
    <?php snippet('track', array('track'=>$track, 'count'=>$count)) ?>
  <?php endforeach ?>

  <!-- Page author -->
  <?php if ($site->user($author)->firstName() != '' && $site->user($author)->lastName() != '') : ?>
    <?php $theauthor = $site->user($author) ?>
    <?php snippet('author', array('theauthor'=>$theauthor)) ?>
  <?php endif ?>

  <section class="bg-gradient-v aligncenter">
    <!-- .wrap = container 1200px -->
    <span class="background dark" style="background-image:url('https://source.unsplash.com/RkBTPqPEGDo/')"></span>
     <div class="wrap size-30">
      <form action="/" method="post">
        <fieldset>
          <legend>ENTER YOUR EMAIL TO DOWNLOAD</legend>
          <p><label>Enter your email</label>
            <input type="text" tabindex="1" name="email" placeholder="your@email.com" required>
          </p>
          <p>
            <button type="submit" tabindex="3" title="Login">DOWNLOAD</button>
          </p>
        </fieldset>
      </form>
      <!-- <p class="aligncenter">Don't have an account? <a href="#" title="Register">Sign up!</a></p> -->
    </div>
    <!-- .end .wrap -->
  </section>

</article>

<?php snippet('footer') ?>