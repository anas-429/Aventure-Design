<?php
	$page = "Aventure Design - Projects";
	include('includes/header.php');
?>
<?php
    $query = "SELECT * FROM projects";
?>
    <main id="projects" class="w-1500 margin-center rs-padding-sideways">

        <h2 class="border-left-light rs-margin-top margin-bottom fade-in">Projects</h2>

        <div class="double-layout rs-margin-bottom fade-right">
            <img src="projects/wooden-cottage.jpg" alt="Wooden Cottage">
            <div class="container-body margin-center-vertical">
                <h2 class="light-underline margin-bottom">Wooden Cottage</h2>
                <p class="margin-bottom"><span class="bold">Home Type:</span> Estate</p>
                <p class="margin-bottom"><span class="bold">Size:</span> 1800 sq ft</p>
                <button id="1" onclick="explorePage(this)" value="description.php?id=1" class="button fullwidth">Explore Project</button>
            </div>
        </div>

        <div class="double-layout rs-margin-bottom fade-right">
            <img src="projects/apartment-complex.jpg" alt="Apartment Flat">
            <div class="container-body margin-center-vertical">
                <h2 class="light-underline margin-bottom">Attached Flat</h2>
                <p class="margin-bottom"><span class="bold">Home Type:</span> Apartment</p>
                <p class="margin-bottom"><span class="bold">Size:</span> 1200 sq ft</p>
                <button id="2" onclick="explorePage(this)" value="description.php?id=2" class="button fullwidth">Explore Project</button>
            </div>
        </div>

        <div class="double-layout rs-margin-bottom fade-right">
            <img src="projects/luxury-villa.jpg" alt="Luxury Villa">
            <div class="container-body margin-center-vertical">
                <h2 class="light-underline margin-bottom">Luxury Villa</h2>
                <p class="margin-bottom"><span class="bold">Home Type:</span> Estate</p>
                <p class="margin-bottom"><span class="bold">Size:</span> 2400 sq ft</p>
                <button id="3" onclick="explorePage(this)" value="description.php?id=3" class="button fullwidth">Explore Project</button>
            </div>
        </div>

        <div class="double-layout rs-margin-bottom fade-right">
            <img src="projects/slant-home.jpg" alt="Slant Home">
            <div class="container-body margin-center-vertical">
                <h2 class="light-underline margin-bottom">Slant Home</h2>
                <p class="margin-bottom"><span class="bold">Home Type:</span> Estate</p>
                <p class="margin-bottom"><span class="bold">Size:</span> 2000 sq ft</p>
                <button id="4" onclick="explorePage(this)" value="description.php?id=4" class="button fullwidth">Explore Project</button>
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