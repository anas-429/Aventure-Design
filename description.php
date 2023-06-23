<?php
	$page = "Aventure Architecture - Projects";
	include('includes/header.php');
?>
<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM projects WHERE id=$id";	
?>
    <main id="description" class="w-2000 margin-center rs-padding-sideways">
    <div class="wrapper rs-margin-top rs-margin-bottom">
    <?php
        $sql = mysqli_query($connection, $query);	
        $row = mysqli_fetch_array($sql);

        print '<div class="flex flex-between margin-bottom fade-right">';
            print '<h1 class="border-left-light">'.$row['name'].'</h1>';
            print '<a href="projects.php"><span class="exit-icon">&#10006;</span></a>';
        print '</div>';

        print '<div id="descriptionGrid">';
        print '<img src="projects/'.$row['image'].'" alt="'.$row['name'].'" class="description-img margin-to-none fade-in">';
        print '<div class="description-title margin-center-vertical fade-right">';
            print '<p class="margin-bottom"><span class="bold">Home Type:</span> '.$row['home_type'].'</p>';
            print '<p class="margin-bottom"><span class="bold">Size:</span> '.$row['size'].' sq ft</p>';
            print '<p class="margin-bottom"><span class="bold">Specifications:</span></p>';
            print '<ul>';
                print $row['specifications'];
            print '</ul>';
        print '</div>';
        print '<div class="description-heading flex flex-center-left fade-right">';
            print '<h2>Description</h2>';
        print '</div>';
        print '<div class="description-paragraph flex flex-center fade-in">';
            print $row['description'];
        print '</div>';
    ?>
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