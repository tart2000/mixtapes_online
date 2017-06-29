<?php snippet('header') ?>

<article>

	<section>
	    <div class="wrap">
			<?php foreach ($page->children() as $mix) : ?>
				<?php snippet('mixtape', array('mix'=>$mix)) ?>
			<?php endforeach ?>
		</div>
	</section>
	
</article>

<?php snippet('footer') ?>