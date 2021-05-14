<footer class="footer">
	<h4 data-wow-delay="1s" class="wow animate__animated animate__fadeIn">About us</h4>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptate.</p>
	<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-instagram"></i>
	</div>
	<p>Made with <i class="fa fa-heart-o"> by IK</i></p>
</footer>	

</section>

<!---JavaScript--->

<script src="./wow.min.js"></script>

<script>
	new WOW().init();
</script>

<script>
	
	var navLinks = document.getElementById("navLinks");

	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}

</script>