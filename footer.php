<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
	$(document).ready(function() {
		$('body').css('display', 'none');
		$('body').fadeIn(1000);
		$('.link').click(function() {
			event.preventDefault();
			newLocation = this.href;
		$('body').fadeOut(1000, newpage);
	});
	function newpage() {
		window.location = newLocation;
	}
	});

	$( "#close" ).click(function() {
		console.log("yep")
	  $( "#error" ).fadeOut( "slow", function() {
	    // Animation complete.
	  });
	});

	$( "#submit" ).click(function() {
		console.log("yep")
	  	$('.g-recaptcha').fadeIn(1000);
	  	$('.shorten').fadeIn(1000);
	  	$('.url').fadeOut(1000);
	  	$('#submit').fadeOut(1000);
	});

</script>

</body>
</html>