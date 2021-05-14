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
<title>Course</title>
<body>
	<section class="sub-header">
<?php

include 'header.php';

?>
<h1 class="title_about">OUR COURSE</h1>

	</section>


<!-- course-->

<section class="course">
	<h1 data-wow-delay="1s" class="wow animate__animated animate__fadeInDown">Courses We Offer</h1>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, repellat.</p>

	<div class="row">
		<div data-wow-duration="2s" class="wow animate__animated animate__fadeInLeft course-col">
			<h3>Intermediate</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Numquam, reprehenderit.</p>
		</div>
		<div data-wow-delay="1s" class="wow animate__animated animate__fadeIn course-col">
			<h3>Degree</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Numquam, reprehenderit.</p>
		</div>
		<div data-wow-duration="2s" class="wow animate__animated animate__fadeInRight course-col">
			<h3>Post Graduation</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Numquam, reprehenderit.</p>
		</div>
	</div>
</section>	

<!----Facilities---->

<section class="facilities">
	
	<h1 data-wow-duration="1s" data-wow-delay="1s" class="wow animate__animated animate__fadeIn">Our Facilities</h1>
	<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum voluptatibus nisi distinctio, voluptatem a dicta tempore dolore maxime ducimus id voluptates nihil deleniti nostrum ex velit minima dolor architecto.</p>

	<div class="row">
		<div class="facilities-col">
			<img data-wow-duration="1s" class="wow animate__animated animate__fadeInLeft" src="img/library.png" alt="lib">
			<h3>World Class Library</h3>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Amet, ad!</p>
		</div>
		<div class="facilities-col">
			<img data-wow-delay="1s" class="wow animate__animated animate__fadeIn" src="img/basketball.png" alt="bas">
			<h3>Largest Play Grpund</h3>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Amet, ad!</p>
		</div>
		<div class="facilities-col">
			<img data-wow-duration="2s" class="wow animate__animated animate__fadeInRight" src="img/cafeteria.png" alt="caf">
			<h3>Tasty and Healthy Food</h3>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Amet, ad!</p>
		</div>
	</div>

</section>

<!---footer--->

<?php

include 'footer.php';

?>
	
</body>
</html>	
