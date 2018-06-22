  
</main>
<!-- end main -->

<!-- Required -->
<?= js('assets/js/webslides.js') ?>

<?php if ($page->template() == 'album') : ?>
	<script type="text/javascript">
	 	window.ws = new WebSlides({
	 		loop: false
	 	}); 
	 </script>
<?php endif ?>

 <script type="text/javascript">

  	/* Open when someone clicks on the span element */
	function openNav() {
	    document.getElementById("myNav").style.width = "250px";
	}

	/* Close when someone clicks on the "x" symbol inside the overlay */
	function closeNav() {
	    document.getElementById("myNav").style.width = "0%";
	}

</script>

<?php if ($page->template() == 'home' || $page->template() == 'albums' || $page->template() == 'user') : ?>

	<!-- Jquery -->
	<?= js('assets/js/jquery-3.2.1.min.js') ?>

	<?= js('assets/js/jquery.matchHeight.js') ?>

	<script type="text/javascript">

		function sameWidth() {
			var wid = $(".album").first().width();
			$(".album").css({'width':wid+'px'});
		};
		$( document ).ready(function() {
			sameWidth(); 
		});
		$( window ).resize(function() {
			sameWidth();
		});

		$(function() {
			$('.sameheight').matchHeight();
		});

	</script>

<?php endif ?>

<!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
<?php echo js('assets/js/svg-icons.js') ?>

</body>
</html>