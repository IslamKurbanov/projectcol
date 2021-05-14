<!DOCTYPE html>

<html lang="en">

<?php
session_start();
if(!isset($_SESSION['username'])){
      header('location:login.php');
}

?>

<?php
include 'head.php';
?>
<title>About</title>
<body>
	<section class="sub-header">
<?php

include 'header.php';

?>

<h1 class="title_about">ABOUT US</h1>

	</section>


<!-- about us content-->

<div class="about-us">
	<div class="row">
		<div data-wow-delay="1s" class="about-col wow animate__animated animate__fadeIn"><h1>We`re the one of the best Universities in Kyrgyzstan</h1>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, inventore neque ipsam minima assumenda
			dolorem rem ipsum accusamus quo cumque!</p><br>
			<a class="hero-btn red-btn" href="#">EXPLORE NOW</a>
		</div>
	
		<div class="about-col">
			<img src="./img/about.jpg" alt="">
		</div>
	</div>
</div>


<!---footer--->

<?php 

include 'footer.php';

?>
	
</body>
</html>	
