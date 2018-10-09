<?php include 'doc_head.html' ?>

<body>
<!-- nav -->
<?php include 'nav.php' ?>





<section id="top">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1> Hello, I’m Jared Mills, an experience designer in Chicago</h1>
				<p>I employ iterative <span class="bold-inline">design thinking</span>, and a passion for creating <span class="bold-inline">elegant interfaces</span> to evoke <span class="bold-inline">positive emotions</span></p>
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
<!-- Brands -->
<?php include 'brands.php' ?>
<!-- footer -->
<?php include 'footer.php' ?>


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
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
    // Only prevent default if animation is actually gonna happen
    event.preventDefault();
    $('html, body').animate({
    scrollTop: target.offset().top -45,
    }, 1400, function() {

      });
    }
  }
});


</script>


</body>
</html>
