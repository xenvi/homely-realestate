<?php
      require'header.php';
      require'login.php';
      require'signup.php';
?>

<nav class="navbar navbar-expand-md text-dark sidepage-nav">
  <a class="navbar-brand text-dark ml-3 font-weight-bold" href="main.php">HLY</a>
  <div class="text">
    <ul class="nav mr-auto">
    <li class="nav-item">
        <a class="nav-link text-dark" href="main.php">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-dark" href="buy.php">Buy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="rent.php">Rent</a>
      </li>
    </ul></div>
    <ul class="nav ml-auto">
    <?php echo $notLoggedIn; ?>
    <?php echo $loggedIn; ?>

    <div id="login">

        <div class="login-container"><div class="exit-btn" onClick="toggleLogin()"><i class="fas fa-times"></i></div>
          <div class="login-title text-dark">LOG IN</div>
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

<body id="listing-body"><br>

<div class="listing-container">
<h2 class="listing-title">List your property today, find business <span style="color:dodgerblue">efficiently</span> and <span style="color:dodgerblue">easily</span>.</h2><br><br>

    <div class="form-container">
    <form class="listing-form" method="post">
    <h3 id="titleLabel">DESCRIPTION OF PROPERTY</h3><br>

    <div class="form-group inputWithIcon">
      <input type="text" class="form-control inputText" id="inputAddress" placeholder="Address of listing">
      <i class="fas fa-map-marker-alt listing-icon"></i>
    </div><br>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control inputText" id="inputCity" placeholder="City">
                <i class="fas fa-city listing-icon"></i>
            </div>
            <div class="form-group col-md-4">
                <select id="inputState" class="form-control select">
                    <option value="" selected>Select State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <input type="text" class="form-control number inputText" id="inputZip" placeholder="Zip code" maxlength="5" min="0">
            </div>
        </div><br>

        <div class="form-group check-listing"> 
        <label class="typeoflist">TYPE OF LISTING</label><br>
        <small class="selectone-notice text-muted">select one</small>
        <br><br>
        
            <div class="form-row d-flex flex-list">
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">Apartment
                    <input type="checkbox" name="check" onclick="onlyOne(this)">
                    <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">House
                    <input type="checkbox" name="check" onclick="onlyOne(this)">
                    <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">Condo
                    <input type="checkbox" name="check" onclick="onlyOne(this)">
                    <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">Townhouse
                    <input type="checkbox" name="check" onclick="onlyOne(this)">
                    <span class="checkmark"></span>
                </label>
                </div>
        </div><br>

  <div class="form-row">
  <div class="form-group col-md-4">
  <label class="typeoflist">BEDS</label>
                <select id="beds" class="form-control select">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
            <div class="form-group col-md-4 ">
            <label class="typeoflist">BATHS</label>
                <select id="baths" class="form-control select">
                    <option>0.5</option>
                    <option selected>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                    <option>3.5</option>
                    <option>4</option>
                    <option>4.5</option>
                    <option>5</option>
                    <option>5.5</option>
                    <option>6</option>
                    <option>6.5</option>
                </select>
            </div>
            <div class="form-group col-md-4">
            <label class="typeoflist">SQUARE FEET</label>
                <input type="text" class="form-control number right-number inputText" placeholder="#" min="0" data-type="number" id="sf">
                <span class="sf">SF</span>
            </div>
  </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label class="typeoflist">RENT</label>
      <input type="text" class="form-control number rent-number inputText" id="inputRent" placeholder="#" min="0" data-type="number">
      <span class="sf">$ / MO</span>
    </div>

    <div class="form-group col-md-6">
    <label class="typeoflist">AVAILABLE</label>
      <input type="date" id="available" name="available"
       value="YYYY-MM-DD"
       min="input" class="form-control">
       <i class="fas fa-calendar-alt listing-icon"></i>

    </div>
    </div><br>

    <hr class="form-hr"><br>

    <h3 id="titleLabel">PHOTOS</h3>
    <small class="photos-small text-muted">photos must be png, gif, or jpg/jpeg format</small><br>

    <label for="file-upload" class="custom-file-upload">
    <i class="fas fa-chevron-up upload-icon"></i>&nbsp; UPLOAD
    </label>
    <input type="file" name="__files[]" multiple="true" accept=".png, .jpg, .jpeg, .gif, image/*" id="file-upload"><br>

    <div class="upload-preview-container">
    <div class="upload-preview">
            <div class="image-preview">
                <img id="image" />
            </div>
            <span id="file-selected"></span>
        </div>


    </div>



<br><br>

    <div id="other-info">

    <h3 id="titleLabel">YOUR CONTACT</h3><br>
<div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control inputText" id="firstName" placeholder="First Name">
                <i class="fas fa-user listing-icon"></i>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control inputText" id="lastName" placeholder="Last Name">
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 inputWithIcon">
                <input type="email" class="form-control" id="email" placeholder="Email">
                <i class="fas fa-envelope listing-icon"></i>
            </div>
            <div class="form-group col-md-6 inputWithIcon">
                <input type="text" class="form-control inputText" id="phoneNumber" placeholder="Phone Number">
                <i class="fas fa-phone listing-icon"></i>
            </div>
         <!--   <div class="form-group col-md-4">
                <select id="baths" class="form-control select">
                    <option selected>Preferred Contact</option>
                    <option>Email only</option>
                    <option>Phone only</option>
                    <option>Email or Phone</option>
                </select>
            </div> -->
        </div><br><br>

        <hr class="innerform-hr"><br>

<h3 id="titleLabel">AMENITIES</h3>
<small class="optional text-muted">optional</small><br>

    <div class="form-row">
                <div class="form-group col-md-12">
                <textarea class="form-control rounded-0" id="desc" rows="10" placeholder="Type your description of the property here..."></textarea>
                <i class="fas fa-edit listing-icon"></i>
    </div></div><br>
    <small class="selectall-notice text-muted">select all that apply</small>
                <div class="form-row d-flex flex-list">
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">Pets Allowed
                    <input type="checkbox">
                    <span class="checkmark inner-checkmark"></span>
                </label>
                </div>
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">No Smoking
                    <input type="checkbox">
                    <span class="checkmark inner-checkmark"></span>
                </label>
                </div>
                <div class="form-check ml-5 mr-5">
                    <label class="customcheck">Wheelchair Access
                    <input type="checkbox">
                    <span class="checkmark inner-checkmark"></span>
                </label>
                </div>
        </div><br>

    <div class="form-row">
            <div class="form-group col-md-6">
                <select id="gated" class="form-control select">
                    <option selected>Gated Entry</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <select id="laundry" class="form-control select">
                    <option selected>Laundry available</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
        </div><br>
</div><br><br>

        <input type="submit" name="listing-submit" value="SUBMIT LISTING" class="btn btn-primary row listing-submit-btn btn-lg">
</form>
</div>

</div></div></div><br><br>

<?php include('footer.php')?>
