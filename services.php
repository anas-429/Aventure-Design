<?php
	$page = "Aventure Design - Services";
	include('includes/header.php');
?>

    <div id="content" class="w-1500 margin-center rs-padding-sideways">

    <div id="asideGrid" class="rs-margin-top">
    
        <aside id="aside" class="margin-to-none fade-right">
            <div id="asideFixed">
                <h1 class="border-left-light flex flex-between margin-bottom">Services</h1>
                <ul class="no-list-style margins-light">
                    <li class="margin-bottom"><a href="#overview">Overview</a></li>
                    <li class="margin-bottom"><a href="#listOfServices">List of Services</a></li>
                    <li class="margin-bottom"><a href="#pricing">Pricing</a></li>
                    <li><button onclick="explorePage(this)" value="contact.php" class="button bold fullwidth">Book a Consulation</button></li>
                </ul>
            </div>
        </aside>

        <main id="services">

        <h2 id="overview" class="margin-bottom fade-in">Overview</h2>

        <div class="double-layout flex-center rs-margin-bottom">

        <div class="wrapper fade-right">
            <img src="projects/apartment-complex.jpg" alt="Apartment Complex">
        </div>

        <div class="wrapper fade-in">

            <h3 class="light-underline margin-bottom">Specialty</h3>

            <ul>
                <li>Residential Structures</li>
                <li>No Commercial Projects</li>
            </ul>

        </div>

        </div>

        <div class="double-layout flex-center rs-margin-bottom">

        <div class="wrapper fade-right">
            <img src="projects/slant-home.jpg" alt="Slant Home">
        </div>

        <div class="wrapper fade-in">

            <h3 class="light-underline margin-bottom">What we Design</h3>

            <ul>
                <li>Apartment Complex</li>
                <li>Town Home</li>
                <li>Semi-Detached Homes</li>
                <li>Duplexes</li>
                <li>Villas</li>
            </ul>

        </div>

        </div>

        <h2 id="listOfServices" class="margin-bottom fade-in">List of Services</h2>

        <div class="double-layout flex-center rs-margin-bottom">

        <div class="wrapper fade-right">
            <img src="images/construction-planning.jpg" alt="Construction Manager">
        </div>

        <div class="wrapper fade-in">

            <h3 class="light-underline margin-bottom">1. Planning</h3>

            <ul>
                <li>Site Examination</li>
                <li>Understanding Site Conditions</li>
                <li>Determine Zoning Requirements</li>
            </ul>

        </div>

        </div>

        <div class="double-layout flex-center rs-margin-bottom">

        <div class="wrapper fade-right">
            <img src="images/drafting.jpg" alt="Architectural Drafting">
        </div>

        <div class="wrapper fade-in">

            <h3 class="light-underline margin-bottom">2. Drafting</h3>

            <ul>
                <li>Sketch Ideas</li>
                <li>Gather feedback from the client</li>
                <li>Refining Designs</li>
            </ul>

        </div>

        </div>

        <div class="double-layout flex-center rs-margin-bottom">

        <div class="wrapper fade-right">
            <img src="images/modelling.jpg" alt="Modelling">
        </div>

        <div class="wrapper fade-in">

            <h3 class="light-underline margin-bottom">3. Design</h3>

            <ul>
                <li>3D Modelling of the project exterior.</li>
                <li>2D Modelling of the flooring plan.</li>
                <li>Produce Construction Blueprints.</li>
            </ul>

        </div>

        </div>

        <div class="double-layout flex-center rs-margin-bottom">

        <div class="wrapper fade-right">
            <img src="images/panel-installers.jpg" alt="Panel Installers">
        </div>

        <div class="wrapper fade-in">

            <h3 class="light-underline margin-bottom">4. Contract Bidding</h3>
            
            <ul>
                <li>Structural</li>
                <li>Mechanical</li>
                <li>Electrical</li>
            </ul>

        </div>

        </div>

        <h2 id="pricing" class="margin-bottom">Pricing</h2>

        <div class="double-layout flex-center rs-margin-bottom">
            <img src="images/price-calculation.jpg" alt="Architecture Drafting">
            <div class="container-body">
                <h3 class="light-underline margin-bottom">Price Estimate</h3>
                <p class="bold">$2000-$20000 CAD</p>
            </div>
        </div>

        <h3 class="margin-bottom">Pricing Factors</h3>

        <div id="priceFactorsGrid" class="rs-margin-bottom">
        <div class="card light-outline dark-bg">
        <div class="card-body double-padding">
            <h3 class="card-title margin-bottom">1. Complexity</h3>
            <ol>
                <li>Building Permit Costs
                <li>Size and Design
                <li>Ammenities
            </ol>
        </div>
        </div>

        <div class="card light-outline dark-bg">
        <div class="card-body double-padding">
            <h3 class="card-title margin-bottom">2. Materials</h3>
            <ol>
                <li>Concrete
                <li>Brick
                <li>Wood
            </ol>
        </div>
        </div>

        <div class="card light-outline dark-bg">
        <div class="card-body double-padding">
            <h3 class="card-title margin-bottom">3. Utilities</h3>
            <ol>
                <li>Heat Required
                <li>Electricity Required
                <li>Mechanics Required
            </ol>
        </div>
        </div>

        </div>

        </main>

    </div>

    </div>

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