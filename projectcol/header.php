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
				</ul>
				<p class="username-log"><?php echo $_SESSION['username']; ?></p>
				<a class="logout" href="logout.php">LOGOUT</a>
		</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
