<?php
      require'header.php';
      require'login.php';
      require'signup.php';
?>

<?php 

if (isset($logged) && $logged == true) {
  $loggedIn = "<div id='loggedin'><p>Welcome, $user !</p> <a class='nav-link logout-btn btn btn-dark' href='logout.php'>Log Out</a></div>";
  $notLoggedIn = "<li class='nav-item'><button type='button' class='nav-link btn btn-dark slide-toggle' onClick='toggleLogin()' style='display:none;'>Log In</button>";

} else {
  $loggedIn = "<div id='loggedin' style='display:none;'><p>Welcome, $user !</p> <button type='button' class='nav-link btn btn-dark'>Log Out</button></div>";
  $notLoggedIn = "<li class='nav-item'><button type='button' class='nav-link btn btn-dark slide-toggle' onClick='toggleLogin()'>Log In</button>";

}
  ?>

<body>
<!-- NAV -->
<nav class="navbar navbar-expand-md text-white mt-4">
  <a class="navbar-brand text-white ml-3 font-weight-bold" href="main.php">HLY</a>
  <div class="text">
    <ul class="nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="buy.php">Buy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rent.php">Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sell.php">List your property</a>
      </li>
    </ul></div>
    <ul class="nav ml-auto">
    <?php echo $notLoggedIn; ?>
    <?php echo $loggedIn; ?>

    <div id="login">

        <div class="login-container"><div class="exit-btn" onClick="toggleLogin()"><i class="fas fa-times"></i></div>
          <div class="login-title">LOG IN</div>
          <hr>
            <div class="form-group login-form row">
                    <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                    <br>
                    <?php echo $loginError; ?>

                    <small class="text-danger row"><?php echo $nameError; ?></small>
                    <div class="col-xs-4 row">
                        <input type="text" placeholder="Enter Username" name="username" class="input text-muted form-control enter" id="login-username">
                    </div><br>

                    <small class="text-danger row"><?php echo $passwordError; ?></small>
                    <div class="col-xs-4 row">
                        <input type="password" placeholder="Enter Password" name="password" class="input text-muted form-control enter" id="login-password">
                    </div><br>
                    <a href="javascript:window.open('some.html', 'yourWindowName', 'width=200,height=150');" class="forgot-pass">Forgot Password?</a><br>
      
                    <br>
                    <input type="submit" name="login" value="LOG IN" class="btn btn-dark row submit-btn">
                    <br><br><br><br><br><br>

                    <a href="#" class="to-signup">or SIGN UP</a><br>
                    </form>
            </div>
        </div>

        <div class="signup-container"><div class="exit-btn" onClick="toggleLogin()"><i class="fas fa-times"></i></div>
          <div class="login-title">SIGN UP</div>
          <hr class="signup-hr">
            <div class="form-group signup-form row">
                        <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] );?>" method="post">
                        
                      
                        <small class="text-danger ml-2 error-alert"><?php echo $nameError; ?></small>
                        <div class="col-xs-4 row signup-row">
                        <small class="text-danger ml-2 req-field">*</small><input type="text" placeholder="Enter Username" name="post_name" class="enter input form-control">
                        </div>

                        <small class="text-danger ml-2 error-alert"><?php echo $emailError; ?></small>
                        <div class="col-xs-4 row signup-row">
                        <small class="text-danger ml-2 req-field">*</small><input type="email" placeholder="Enter Email" name="post_email" class="enter input form-control">
                        </div>

                        <small class="text-danger ml-2 error-alert"><?php echo $passwordError; ?></small>
                        <div class="col-xs-4 row signup-row">
                        <small class="text-danger ml-2 req-field">*</small><input type="password" placeholder="Enter Password" name="post_pass" class="enter input form-control">
                        </div><br>

                        <p class="text-danger row mb-4 req-reminder">* Required fields</p>

                        <input type="submit" name="post_submit" value="SIGN UP" class="btn btn-dark row submit-btn">
                        <br><br><br><br><br><br>
          
                        <a href="#" class="to-login">or LOG IN</a><br>
                        </form>

                    </div>

      </div>
      
      </li>
    </ul>
</nav>


<!-- LANDING PAGE -->
<section id="landing_page" class="landingpage-container">
<div class="darkoverlay"></div>
    <div class="landing-text text-white text-center">
        <div class="landing-title font-weight-bold">HOMELY</div>
        <div class="landing-subtext">We make <span id="changing">finding</span> a place to call home easy.</div>
        <form action="loggedin.php" class="search-container">
            <input class="landing-search" type="text" placeholder="Enter address, neighborhood, city, or zip code" name="search">
            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
        </form>

        <a href='#newest'><i class="fas fa-angle-down text-white bounce"></i></a>
    </div>
</section>

<!-- CONTENT -->
<section id="content" class="content-container">

     <!-- <div id="search" class="container">
</div> -->

      <div class="section1 container" id="newest">
            <h1>Newest Listings</h1>
            <div class="newest-listings">

            <div class="box1">
                <div class="pic boxpic1"><p class="price">$220,000</p><span class="sale-id">House</span></div>
                <div class="descr">
                      <i class="fas fa-bed"></i> 3 beds &nbsp; <i class="fas fa-bath"></i> 2 baths <span class="sqft" style="float: right;">1,250 sqft</span><br>
                      <p class="addy">3328 Sunnyside Rd,<br>
                      Grand Prairie, TX 75054</p>
              </div>
            </div>

            </div>
          <a href="" class="viewmore">View More ></a>
    </div>

      <div class="section2 container">
            <h1>Apartments</h1>
    </div>

      <div class="section3 container">
            <h1>Affordable Homes</h1>
    </div>

      <div class="section4 container">
            <h1>Luxury Homes</h1>
    </div>

      <div class="section5 container">
            <h1>Pet-Allowed Homes</h1>
      </div>

</section>

<?php require 'footer.php'; ?>
