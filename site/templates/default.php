<?php snippet('header') ?>

<article>
	 <section>
	    <div class="wrap size-80">
			<h1><?php echo $page->title()->html() ?></h1>
			<?= $page->text()->kirbytext() ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?> 