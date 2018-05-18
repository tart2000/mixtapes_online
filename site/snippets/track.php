<?php $image = makeImage($track) ?>
  <?php $thumb = $image->thumb([
    'width'   => 900, 
    'height'  => 900, 
    'quality' => 100
  ]) ?>

<?php 
  if ($track->style() == 'full') {
    snippet('track-full', array('track'=>$track,'thumb'=>$thumb, 'count'=>$count));
  } elseif ($track->style() == 'round') {
    snippet('track-round', array('track'=>$track,'thumb'=>$thumb, 'count'=>$count));
  } else {
    snippet('track-left', array('track'=>$track,'thumb'=>$thumb, 'count'=>$count));
  }; 
?>

