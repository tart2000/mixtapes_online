<?php snippet('header') ?>

<article>
	 <section>
	    <div class="wrap size-80">
			<h1><?php echo $page->title()->html() ?></h1>
			<ul class="flexblock">
				<?php foreach (page('mixtapes')->children()->children()->sortBy('title', 'asc') as $p) : ?>
					<li>
						<a href="<?= $p->trackurl() ?>" target="_blank">
							<?= $p->title() ?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?> 