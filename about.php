<?php
	$page = "Aventure Design - About";
	include('includes/header.php');
?>
	<main id="about" class="w-1500 margin-center rs-padding-sideways">

	<h1 class="border-left-light rs-margin-top margin-bottom">About</h1>

	<div class="double-layout rs-margin-bottom flex-center">
		<div class="wrapper">
			<div class="img-container fade-right">
				<img src="images/architect.jpg" alt="architect">
			</div>
		</div>
		<div class="wrapper margin-center-vertical fade-in">
			<h2 class="light-underline margin-bottom">Mission</h2>
			<p>Our mission is to use our aesthetic approach and design expertise to make cities more vibrant and optimistic.</p>
		</div>
	</div>
	<div class="double-layout rs-margin-bottom flex-center">
		<div class="wrapper fade-right">
			<div class="img-container">
				<img src="images/blueprints.jpg" alt="architect">
			</div>
		</div>
		<div class="wrapper margin-center-vertical fade-in">
			<h2 class="light-underline margin-bottom">Business Model</h2>
			<p>We specialize in residential architecture, mainly in suburban areas. The role we play are the design and planning aspects of it.</p>
		</div>
	</div>
	</main>
	<footer class="light-overline padding">
	<div class="margin-bottom">
		<div class="wrapper margin-bottom">
			<h3 class="light-underline margin-bottom">Menu</h3>
			<nav>
    		<ul class="white no-list-style">
        		<li class="margin-bottom-light"><a href="index.php">Home</a>
        		<li class="margin-bottom-light"><a href="about.php">About</a>
        		<li class="margin-bottom-light"><a href="projects.php">Projects</a>
        		<li class="margin-bottom-light"><a href="services.php">Services</a>
        		<li class="margin-bottom-light"><a href="process.php">Process</a>
        		<li><a href="contact.php">Contact</a>
    		</ul>
			</nav>
		</div>
		<div class="wrapper">
			<h4 class="light-underline margin-bottom">Contact Info</h4>
			<ul class="white no-list-style">
				<li class="margin-bottom-light"><span class="bold">Address:</span> 6939-6915 32 Ave NW</li>
				<li class="margin-bottom-light"><span class="bold">Phone Number:</span> (403) 224-6191</li>
				<li><span class="bold">E-Mail:</span> aventuredesign@gmail.com</li>
			</ul>
		</div>
	</div>
	<p>© Copyright <?php print date('Y'); ?>. All Rights Reserved.</p>
	</footer>
	<script src="mobilemenu.js"></script>
	<script src="buttons.js"></script>
</body>
</html>