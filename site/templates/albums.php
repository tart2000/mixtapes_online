<?php snippet('header') ?>

<article>
	 <section>
	    <div class="wrap">
			<ul class="flexblock gallery" id="albums">
				<?php foreach ($page->children()->visible()->sortBy('title', 'asc') as $mix) : ?>
					<?php snippet('album-vertical', array('mix'=>$mix, 'site'=>$site)) ?>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?> 
