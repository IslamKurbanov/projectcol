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
<title>Blog</title>
<body>
	<section class="sub-header">
      
<?php

include 'header.php';

?>		

<h1 class="title_about">OUR CERTIFICATE & ONLINE PROGRAMS FOR 2021</h1>

	</section>


<!-- blog content-->

<div class="blog-content">
      <div class="row">
            <div class="block-left">
                  <img data-wow-duration="2s" class="wow animate_animated animate__fadeInLeftBig" src="img/MBA0706.jpg" alt="certificates">
                  <h2>Our Certificate</h2>
                  <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus molestias provident eos incidunt distinctio accusantium commodi minus delectus nulla nobis modi vitae in aliquam deserunt doloribus neque, illum ipsam mollitia.
                  </p>
                  <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatibus quia, quos illum veritatis a. Iusto tempore reprehenderit inventore cumque fuga minima eum voluptatibus quae, voluptas quisquam ex mollitia voluptatem architecto officiis aut aliquam explicabo sint illum! Qui, vero nobis!<br>
                  </p>
                  <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis consectetur commodi sint aliquam facere voluptatem, omnis accusamus debitis doloribus vero ullam vel tenetur illo numquam totam nisi cum minima. Possimus, vero. Quaerat quod ullam expedita natus? Autem inventore saepe placeat animi! Maxime, eos doloribus illum ipsa deserunt fuga quos praesentium.<br>
                     
                  </p>
                  <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat, quaerat omnis perferendis aliquid corporis asperiores saepe! Dicta officiis enim nisi saepe fugiat consequatur quod temporibus, sint id mollitia. Et nisi veritatis sunt tempore, in nesciunt ad iste iusto exercitationem.<br>
                  </p>




<div class="comment-box">
      <h3>Leave a commtent</h3>
      <form class="comment-form" action=""></form>
      <input class="input" type="text" placeholder="Enter Name">
      <input class="input" type="email" placeholder="Enter Email">
      <textarea class="textarea" rows="5" placeholder="Your Comment"></textarea>
      <button type="submit" class="hero-btn red-btn">
            POST COMMENT
      </button>
</div>
            </div>



            <div data-wow-duration="0.5s" class="block-right wow animate_animated animate__fadeInRightBig">
                  <h3>Post Categories</h3>
                  <div>
                        <span>Business Analytics</span>
                        <span>21</span>
                  </div>
                  <div>
                        <span>Data Science</span>
                        <span>28</span>
                  </div>
                  <div>
                        <span>Machine Learning</span>
                        <span>15</span>
                  </div>
                  <div>
                        <span>Computer Science</span>
                        <span>34</span>
                  </div>
                  <div>
                        <span>AutoCAD</span>
                        <span>42</span>
                  </div>
                  <div>
                        <span>Journalism</span>
                        <span>22</span>
                  </div>
                  <div>
                        <span>Commerce</span>
                        <span>30</span>
                  </div>
            </div>
      </div>
</div>

<!---footer--->

<?php

include 'footer.php';

?>

</body>
</html>	
