<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>RoadSeva</title>
	<link rel="stylesheet" type="text/css" href="section.css">
	<link rel="icon" href="RS.gif" type="image/gif" sizes="25x25">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

	 <meta name="viewport" content="width=device-width,initial-scale=1.0">

	 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	 	 <style>@import url('https://fonts.googleapis.com/css?family=Livvic:400,700&display=swap');</style>

	 <script type="text/javascript">
	 	$(window).on('scroll', function(){
	 		if($(window).scrollTop()){
	 			$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
	 	})
	 </script>
</head>
<body>		
	<nav>
			 
		<div class="logo">
				<a href="sectionpage.php"><img src="newLogo.jpg"  alt="RoadSeva" class="logo">
		</div>
		<ul class="main-nav animated slideInDown">
					<li><a href="#" class="active">HOME</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="brands.php">BRANDS WE SERVE</a></li>
					<li><a href="newlginfrm.php">LOGIN</a></li>
					<li><a href="abt_us.php">ABOUT US</a></li>
		</ul>	
		<?php
if (!isset($_SESSION['username'])) {
echo'<form action="newlginfrm.php"><button type="submit">LOGIN</button></form>';
}
else {
echo "<p style='color:#ffffff'>".$_SESSION['username']."</p>";
echo"<br><p style='color:#ffffff'>you are logged in !</p>";
echo '<br><form action="includes/logout.inc.php" method="POST"><button type="submit" name="logout">Logout</button></form>';
}
?>
	</nav>


	<div class="main-content-header">
			<h1>Welcome to <span class="colorchange">RoadSeva</span>. <br>
			One Stop Solution to all automobile problems.<h1><br>
			<h2> Emergency Contact No:<a href="tel:+919876543210">+919876543210</a> </h2>
			<h2>Toll Free No:<a href ="tel:18004502">18004520</a> </h2><br>
		<a href="form2.php" class="btn btn-full">Roadside assistance</a>
		<a href="contact.xml" class="btn btn-nav">Contact us</a>
		</div>
	   <div id="slider">

	   </div>
	

	<section class="sec1"></section>
	<section class="content">
		<footer>
            <div class="flex">
                <small>Copyright &copy; 2019 All rights reserved </small>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="subs.html">View Subscription Plans</a>
                    </li>

                    <li>
                        <a href="testimo.html">Testimonials</a>
                    </li>
                </ul>
            </div>
        </footer>

        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
</body>
</html>