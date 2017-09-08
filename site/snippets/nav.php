<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
  	<?php foreach($pages->visible() as $p): ?>
  		<a href="<?= $p->url() ?>">
        <?= $p->title() ?>
      </a>
      <?php if ($p->hasVisibleChildren()) : ?>
        <?php foreach ($p->children()->visible() as $c) : ?>
          <a href="<?= $c->url() ?>">
            — <?= $c->title() ?>
          </a>
        <?php endforeach ?>
      <?php endif ?>
    <?php endforeach ?>
  </div> <!-- end overlay content -->

</div><!-- end overlay -->


<div class="nav-sq">
  <a onclick="openNav()" type="button">
    <svg class="fa-t-list">
      <use xlink:href="#fa-th-list"></use>
    </svg>
  </a>
</div>
