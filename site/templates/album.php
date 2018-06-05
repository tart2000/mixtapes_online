<?php snippet('header') ?>

<article id="webslides">  <!-- Slideshow -->

  <?= snippet('mixtape-cover', array('page' => $page)) ?>

  <?php $tracks = $page->children()->visible() ?>
  <?php $count = $tracks->count() ?>

  <!-- snippet toc (table of contents) était là -->
  
  <?php $count = $tracks->count() ?>  
  <?php foreach ($tracks as $track) : ?>
    <?php if (--$count == 0) : ?><!-- Bonus track slide added right before the last slide -->
      <?php snippet('bonus-track') ?>
    <?php endif ?>
    <?php snippet('track', array('track'=>$track, 'count'=>$count)) ?>
  <?php endforeach ?>

  <!-- Page author -->
  <?php $author = $page->author() ?>
  <?php $theauthor = $site->user($author) ?>
  <?php if ($theauthor->firstName() != '' && $theauthor->lastName() != '') : ?>
    <?php snippet('track-circle', array('theauthor'=>$theauthor)) ?>
  <?php endif ?>

  <!-- snippet 'download' -->
  
</article>

<?php snippet('footer') ?>