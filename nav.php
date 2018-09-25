<nav class="navbar-fixed-top bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-1">
				<a href="index.php"><img src="assets/img/jm-logo.svg" alt="JM logo"></a>
			</div>
			<div class="col-lg-4 col-lg-offset-7 col-md-5 col-md-offset-6 col-sm-7 col-sm-offset-4 col-xs-12">
				<ul>
					<li><a href="#two">process</a></li>
					<li><a href="#portfolio">work</li></a></li>
					<li><a href="">resume</li></a></li>
					<li><a href="">contact</li></a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<script type="text/javascript">
	
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
	
</script>
