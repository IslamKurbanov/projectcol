<!DOCTYPE html>
<html>
<?php
include 'head.php';
?>
<title>International Ala-Too University - IAAU</title>
<body>
<header class="main-header">
      <nav class="main-nav">
            <img data-wow-duration="1s" class="logo main-nav-logo  wow animate__animated animate__fadeInLeftBig" src="img/logo.png" alt="Logo">
            <h1 data-wow-duration="1s" class="main-nav-title wow animate__animated animate__fadeInRightBig">Ala-Too International<br><span>University</span></h1>
      </nav>
</header>
<div class="wrapper">
<div class="container container-sm">
      <div class="login-box">
            <div class="row">
                        <div class="col-md-6 login-left">
                              <h2>Login Here</h2>
                              <form action="validation.php" method="POST">
                                    <div class="form-group">
                                          <label>Username</label>
                                          <input type="text" name="user" class="form-control" required>

                                    </div>
                                    <div class="form-group form-password">
                                          <label>Password</label>
                                          <input type="password" name="password" class="form-control" required>
                                          
                                    </div>
                                    <button type="submit" class="hero-btn red-btn log-btn">Login</button>
                              </form>
                        </div>
                        <div class="col-md-6 login-right">
                              <h2>Register Here</h2>
                              <form action="registration.php" method="POST">
                                    <div class="form-group">
                                          <label>Username</label>
                                          <input type="text" name="user" class="form-control" required>

                                    </div>
                                    <div class="form-group form-password">
                                          <label>Password</label>
                                          <input type="password" name="password" class="form-control" required>
                                          
                                    </div>
                                    <button type="submit" class="hero-btn red-btn reg-btn">Register</button>
                              </form>
                        </div>
            </div>
      </div>
</div>
</div>
</body>
</html>