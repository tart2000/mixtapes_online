<?php snippet('header') ?>

<article>

	<section>
	    <div class="wrap">
	    	<ul class="flexblock gallery">
				<?php foreach ($page->children()->visible() as $mix) : ?>
					<?php snippet('mixtape-vertical', array('mix'=>$mix)) ?>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
	
</article>

<?php snippet('footer') ?>