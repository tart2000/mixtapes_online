  
</main>
<!-- end main -->

<!-- Required -->
<?php echo js('assets/js/webslides.js') ?>

<script>
 	window.ws = new WebSlides(); 

  	/* Open when someone clicks on the span element */
	function openNav() {
	    document.getElementById("myNav").style.width = "250px";
	}

	/* Close when someone clicks on the "x" symbol inside the overlay */
	function closeNav() {
	    document.getElementById("myNav").style.width = "0%";
	}

</script>

<!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
<?php echo js('assets/js/svg-icons.js') ?>

</body>
</html>