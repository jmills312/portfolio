<?php include 'doc_head.html' ?>

<body data-spy="scroll" data-target="navbar">
<!-- nav -->
<?php include 'nav.php' ?>


	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1> Hello, I’m Jared Mills a UI/UX guy based in Chicago</h1>
					<p>I employ iterative <span class="bold-inline">design thinking</span>, and a passion for creating <span class="bold-inline">elegant interfaces</span> to evoke <span class="bold-inline">positive emotions</span>. </p>
					<div class="arrow bounce">
					<a href="#two"><img src="assets/img/downArrow.svg"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-offset-2">
				<img class="me" src="assets/img/me.svg">
			</div>
		</div><!--/container-->
	</section>

<!-- process -->
<?php include 'process.php' ?>
<!-- portfolio -->
<?php include 'portfolio.php' ?>
<!-- custom js -->
<?php include 'custom.js' ?>

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
      var target = $(this.hash)
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']').offset().top -120
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


</body>
</html>
