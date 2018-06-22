<?php snippet('header', array('site'=>$site, 'page'=>$page, 'pages'=>$pages)) ?>

<article>
	<?php $theauthor = $site->user($uid) ?>
	<?php snippet('track-circle', array('theauthor'=>$theauthor)) ?>

	<?php $thepages = page('albums')->children()->visible()->filterBy('author', '*=', $uid) ?>
	<section>
		<div class="wrap">
	      <ul class="flexblock gallery" id="albums">
	        <?php foreach ($thepages as $mix) : ?>
	          <?php snippet('album-vertical', array('mix'=>$mix, 'site'=>$site)) ?>
	        <?php endforeach ?>
	      </ul>
	    </div>
    <!-- .end .wrap -->
  	</section>
</article>

<?php snippet('footer', array('page'=>$page, 'site'=>$site)) ?> 