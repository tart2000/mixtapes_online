<?php snippet('header') ?>

<article>

	<section>
	    <div class="wrap">
			<?php foreach ($page->children()->visible() as $mix) : ?>
				<?php snippet('mixtape-vertical', array('mix'=>$mix)) ?>
			<?php endforeach ?>
		</div>
	</section>
	
</article>

<?php snippet('footer') ?>