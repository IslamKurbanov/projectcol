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
<title>Contact</title>
<body>
	<section class="sub-header">
<?php

include 'header.php';

?>
<h1 class="title_about">CONTACT US</h1>

	</section>


<!--  us content-->

<div class="location">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.8044060478014!2d74.67895221577903!3d42.8558630116379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb6c95311ea6b%3A0x7023946675e4c5a9!2z0JzQtdC20LTRg9C90LDRgNC-0LTQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDQkNC70LAt0KLQvtC-!5e0!3m2!1sru!2sca!4v1620617390298!5m2!1sru!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="contact-us">
      <div class="row">
            <div class="contact-col">
                  <div data-wow-duration="1s" class="wow animate__animated animate__fadeInTopLeft">
                      <i class="fa fa-home"></i>
                      <span>
                            <h5>
                               Bishkek st.Ankara 1/8  
                            </h5>
                      </span>  
                  </div>

                  <div data-wow-delay="1.5s" class="wow animate__animated animate__fadeInLeft"> 
                        <i class="fa fa-phone"></i>
                        <span>
                              <h5>
                                    +996 (312) 631425
                              </h5>
                              <h6>Monday to saturday 08:30 - 18:00</h6>
                        </span>  
                    </div>
                    <div data-wow-duration="1s" class="wow animate__animated animate__fadeInBottomLeft">
                        <i class="fa fa-envelope-o"></i>
                        <span>
                              <h5>
                                   info@iaau.edu.kg
                              </h5>
                              <h6>Write message</h6>
                        </span>  
                    </div>
              </div>
            </div>
            <div class="contact-col">
                  <form action="form-handler.php" method="POST">
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                        <input type="text" name="subject" placeholder="Enter Your Subject" required>
                        <textarea rows="8" name="message" placeholder="Message" required></textarea>
                        <button type="submit" class="hero-btn red-btn">Send Message</button>
                  </form>
            </div>
      </div>
</div>

<!---footer--->

<?php

include 'footer.php';

?>
	
</body>
</html>	
