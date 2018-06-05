<?php snippet('header') ?>

<article id="webslides">  <!-- Slideshow -->

  <?= snippet('mixtape-cover', array('page' => $page)) ?>

  <section>
    <div class="wrap size-60">
      <?= $page->fulltext()->kirbytext() ?>
    </div>
  </section>

  <!-- Page author -->
  <?php $author = $page->author() ?>
  <?php if ($site->user($author)->firstName() != '' && $site->user($author)->lastName() != '') : ?>
    <?php $theauthor = $site->user($author) ?>
    <?php snippet('track-circle', array('theauthor'=>$theauthor)) ?>
  <?php endif ?>

  <!-- snippet 'download' -->
  
</article>

<?php snippet('footer') ?>