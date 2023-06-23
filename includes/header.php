<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "aventure";

	$connection = mysqli_connect($server, $username, $password, $database);

	if(!$connection) {
		die(mysqli_connect_error());
	}

    if ($_SERVER['HTTP_USER_AGENT']=='Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko') {
        header("Location: notice.php");
        exit();
    } 
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php print $page ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="foundation_icons_general/stylesheets/general_foundicons.css">
	</head>
    <body>
	<header class="dark-blue-bg no-list-style light-underline fullwidth flex flex-between flex-center padding">
        <div class="flex flex-center padding-left fade-in">
            <a class="hamburger pointer">&#9776;</a>
            <h2><a href="index.php" class="header-logo kallisto-bold">Aventure</a></h2>
        </div>
        <nav class="fade-in">
        <ul class="white flex flex-center no-list-style">
            <li class="link"><a href="index.php">Home</a>
            <li class="link"><a href="about.php">About</a>
			<li class="link"><a href="projects.php">Projects</a>
            <li class="link"><a href="process.php">Process</a>
            <li class="link"><a href="services.php">Services</a>
            <li><button onclick="explorePage(this)" value="contact.php" class="button bold w-250 fullwidth padding">Contact</button>
        </ul>
        </nav>
    </header>
    <aside id="mobileMenu" class="position-fixed-left dark-bg w-500 fullheight fullwidth pop-up">
        <div class="wrapper padding">
            <h2 class="mobile-title border-left-light flex flex-between fade-bottom">Menu <span class="exit-mobile pointer">&#10006;</span></h2>
        </div>
        <ul class="no-list-style small fade-right">
            <li class="mobile-link light-overline light-underline padding-light fade-in"><a href="index.php">Home</a>
            <li class="mobile-link light-underline padding-light fade-in"><a href="about.php">About</a>
            <li class="mobile-link light-underline padding-light fade-in"><a href="projects.php">Projects</a>
            <li class="mobile-link light-underline padding-light fade-in"><a href="process.php">Process</a>
            <li class="mobile-link light-underline padding-light fade-in"><a href="services.php">Services</a>
            <li class="mobile-link light-underline padding-light fade-in"><a href="contact.php">Contact</a>
        </ul>
    </aside>
	