<?php
	$page = "Aventure Design - Home";
	include('includes/header.php');
?>
	<?php
    	$query = "SELECT * FROM projects";
	?>
	<main id="home" class="margin-center rs-padding-sideways">
		<div class="double-layout container w-1500 margin-center rs-margin-top rs-margin-bottom">
			<div class="wrapper img-container fade-right">
				<img src="images/doorstep.jpg" alt="doorstep" class="fullwidth">
			</div>
			<div class="wrapper margin-center-vertical fade-in">
				<h2 class="margin-bottom light-underline">Redefine Modernism</h2>
				<button onclick="explorePage(this)" value="services.php" class="button fullwidth">Explore Services</button>
			</div>
		</div>
		<div class="double-layout container w-1500 margin-center rs-margin-bottom">
			<div class="wrapper fade-right">
				<img src="images/office.jpg" alt="architect" class="fullwidth">
			</div>
			<div class="wrapper margin-center-vertical fade-in">
				<h3 class="margin-bottom light-underline">Work with our Architects</h3>
				<button onclick="explorePage(this)" value="contact.php" class="button fullwidth">Contact Us</button>
			</div>
		</div>
		<div class="container w-1500 margin-center rs-margin-bottom">
		<h2 class="margin-bottom">Featured Project</h2>
		<div class="double-layout">
			<div class="wrapper">
				<img src="projects/apartment-complex.jpg" alt="apartment" class="fullwidth">
			</div>
			<div class="wrapper margin-center-vertical">
				<h3 class="light-underline margin-bottom">Apartment Complex</h3>
				<p class="margin-bottom"><span class="bold">Home Type:</span> Dwelling</p>
                <p class="margin-bottom"><span class="bold">Size:</span> 1200 sq ft</p>
				<button onclick="explorePage(this)" value="description.php?id=2" class="button fullwidth">Explore Project</button>
			</div>
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
	<script src="buttons.js"></script>
	<script src="mobilemenu.js"></script>
</body>
</html>