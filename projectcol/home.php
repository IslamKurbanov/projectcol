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
<title>International Ala-Too University</title>
<body>
	<section class="header">

<nav>
	<a href="home.php"><img data-wow-duration="1s" class="logo  wow animate__animated animate__fadeInLeftBig" src="img/logo.png" alt="Logo"></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="course.php">Course</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact.php">Contact</a></li>
					<p class="username-log"><?php echo $_SESSION['username']; ?></p>
					<a class="logout" href="logout.php">LOGOUT</a>
				</ul>
				
		</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
</nav>


<div class="text-box">
	<h1 id="main-title" class="main-title"></h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, at.</p>
	<a href="about.php" class="hero-btn">Visit Us to Know More</a>
</div>

	</section>

<!---Course--->

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
	
<!---campus--->

<section class="campus">
	
	<h1 data-wow-delay="1.5s" class="wow animate__animated animate__fadeInUp">Our GLobal Campus</h1>
	<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, accusantium!</p>

	<div class="row">
		<div class="campus-col">
			<img src="./img/campus1.jpg" alt="London">
			<div class="layer">
				<h3>C-block</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="./img/campus2.jpg" alt="New-York">
			<div class="layer">
				<h3>A-block</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="./img/campus3.jpg" alt="Washington">
			<div class="layer">
				<h3>D-block</h3>
			</div>
		</div>
	</div>

</section>

<!---Facilities--->

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

<!---testimonials--->

<section class="testimonials">
	
	<h1 data-wow-duration="2s" class="wow animate__animated animate__fadeIn">What Our Student Says</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, minima?</p>

	<div class="row">
		<div class="testimonials-col">
			<img src="img/user1.jpg" alt="user">
			<div>
				<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Quasi, cum.</p>
				<h3>Maksat</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="testimonials-col">
			<img src="img/user2.jpg" alt="user">
			<div>
				<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Quasi, cum.</p>
				<h3>John</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
		</div>
	</div>

</section>

<!---Call To Action--->

<section class="cta">
	<h2 data-wow-delay="1s" class="wow animate__animated animate__fadeIn">Enroll For Our Various Online Courses <br>Anywhere From The World</h2>
	<a href="#" class="hero-btn">CONTACT US</a>
</section>

<!---footer--->

<?php

include 'footer.php';

?>

<script src="typed.js"></script>

<script>

	var typed = new Typed('.main-title', {
		strings: ['Ala-Too International <br> University', 'One of the best in <br> Kyrgyzstan'],
		typeSpeed:50,
		backSpeed:50,
		loop:true
	    });

</script>

</body>
</html>