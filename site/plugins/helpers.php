<?php 

function znum($num) {
	if ($num < 10) {
		return '0'.$num;
	} else {
		return $num;
	} 
}

function makeImage($item) {
	if($item->hasImages()) {
	  $image = $item->images()->first();
	} else {
	  $imageData = file_get_contents($item->trackimg());
	  $imageName = $item->title();
	  file_put_contents($item->root() . DS . f::safeName($imageName) . '.jpg', $imageData);
	  $image = new File($item->images(), f::safeName($imageName) . '.jpg');
	}
	return $image;
}

?>