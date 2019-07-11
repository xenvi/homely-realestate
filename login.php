<?php 

$nameError = $passwordError = $loginError = $formUser = '';
$notLoggedIn = $loggedIn = $user = $logged = '';

if ( isset( $_POST['login'] ) ) {

    // build func to validate data
    function validateFormData($formData) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }

 $password = password_hash( $_POST['password'], PASSWORD_DEFAULT );
    
    // if either form entries are blank
    if ( !$_POST['username'] ) {
        $nameError = "Please enter your username <br>";
    } else {
        $formUser = validateFormData( $_POST['username'] );
    }

    if ( !$_POST['password'] ) {
        $passwordError = "Please enter your password <br>";
    } else {
        $formPass = validateFormData( $_POST['password'] );
    }

    // connect to database
    include('connection.php'); 

    // create SQL query for username
    $query = "SELECT username, email, password FROM users WHERE username='$formUser'";

    // store the result
    $result = mysqli_query( $conn, $query );

    // verify if result is returned
    if ( mysqli_num_rows($result) > 0 ) {

        // store basic user data in variables
        while ( $row = mysqli_fetch_assoc($result) ) {
            $user = $row['username'];
            $email = $row['email'];
            $hashedPass = $row['password'];
        }

            if ( password_verify( $formPass, $hashedPass ) ) {

                // correct log in details, start session

                // store data in session variables
                $_SESSION['loggedIn'] = $logged = true;
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $email;


            } else { // hashed pw didn't verify
                // error message
                $loginError = "<div class='alert alert-login alert-danger row'>No such user in database. Please try again. <a class='close close-btn' data-dismiss='alert'>&times;</a></div><br>";
            }
    } else { // if no results
        $loginError = "<div class='alert alert-login alert-danger row'>Wrong username / password combination. Try again.</div><br>";
    }
    
    mysqli_close($conn);

}
?>
