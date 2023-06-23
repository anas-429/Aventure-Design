<?php
	$page = "Aventure Design - Contact";
	include('includes/header.php');
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		print '<dialog id="formDialog" class="dialog dark-bg-50 position-fixed-left flex flex-center fullwidth fullheight" open>
        <div class="dialog-box w-500 h-500 dark-bg padding fade-scale">
            <h2 class="border-left-light flex flex-between margin-bottom fade-right">Form Complete!</h2>
            <p class="margin-bottom">Thank you for choosing Aventure Design! One of our team members will get back to you as soon as possible!</p>
            <button class="button bold fullwidth exit-modal">Return to Page</button>
        </div>
    	</dialog>';

    }
?>
    <main id="contact">
    
    <form method="post" action="contact.php" class="w-1000 fullwidth margin-center rs-margin-top rs-margin-bottom rs-padding-sideways">

    <article class="margin-bottom fade-in">
        <h1 class="margin-bottom border-left-light">Contact</h1>
        <p>If you want to get in touch with us or book a consultation regarding your next project, please fill out the form below. One of our design specialists will get back to you within 24 hours during the business week.</p>
    </article>

    <div class="form-element margin-bottom fade-in">
        <label for="first-name" class="margin-bottom-light">First Name</label>
        <input type="text" name="first-name" id="first-name" class="fullwidth padding" required>
    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="last-name">Last Name</label>
        <input type="text" name="last-name" id="last-name" class="fullwidth padding" required>
    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="email">E-Mail</label>
        <input type="text" name="email" id="email" class="fullwidth padding" required>
    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="fullwidth padding" required>
    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="organization">Organization</label>
        <input type="text" name="organization" id="organization" class="fullwidth padding" required>
    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" class="fullwidth padding" required>
    </div>

    <div class="form-element margin-bottom fade-in">
        <label for="message">Message</label>
        <textarea name="message" placeholder="Message" id="message" rows="5" cols="80" class="fullwidth padding fade-in">
        </textarea>
    </div>

    <input type="submit" value="Submit"
    class="button w-250 fullwidth padding pointer fade-in">

    </form>

    <div id="location" class="dark-bg">

        <div class="w-1000 fullwidth margin-center rs-padding">
            <div class="double-layout flex-center">
            <div class="wrapper">
                <h2 class="light-underline margin-bottom">Location</h2>
                <p class="margin-bottom"><span class="bold">Phone Number:</span> (403) 224-6191</p>
                <p class="margin-bottom"><span class="bold">E-Mail:</span> aventuredesign@gmail.com</p>
                <p class="margin-bottom"><span class="bold">Hours of Operation:</span> 9-5 PM</p>
                <p><span class="bold">Days Open:</span> Monday to Friday</p>
            </div>
            <div class="wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2506.4591853600696!2d-114.18594878297407!3d51.081532714208244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d51.0815683!2d-114.1859595!5e0!3m2!1sen!2sca!4v1678819203426!5m2!1sen!2sca" style="border:0;"></iframe>
            </div>
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
			<h3 class="light-underline margin-bottom">Contact Info</h3>
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
    <script src="modal.js"></script>
</body>
</html>