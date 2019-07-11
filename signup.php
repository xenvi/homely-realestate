<?php 

    $nameError = $emailError = $passwordError = '';
    $name = $email = $password = $conn = '';

    include('connection.php');

        if( isset( $_POST["post_submit"] ) ) {
                function validateFormData($formData) {
                        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
                        return $formData;
            }

            if ( !$_POST["post_name"] ) {
                $nameError = "Please enter your username <br>";
            } else {
                $name = validateFormData( $_POST["post_name"] );
            }

            if ( !$_POST["post_email"] ) {
                $emailError = "Please enter your email <br>";
            } else {
                $email = validateFormData( $_POST["post_email"] );
            }

            if ( !$_POST["post_pass"] ) {
                $passwordError = "Please enter your password <br>";
            } else {
                $password = validateFormData( $_POST["post_pass"] );
                $hashedPass = password_hash($password, PASSWORD_DEFAULT );
            }
        
        if ( $name && $email && $password ) {
            $query = "INSERT INTO users (id, username, password, email, signup_date) VALUES (NULL, '$name', '$hashedPass', '$email', CURRENT_TIMESTAMP)";
            
            if ( mysqli_query( $conn, $query ) ) {
                echo "<div class='alert alert-signup alert-success'>Successfully created account!</div>";
                session_start();

                header( "Refresh:3; url=main.php", true, 303);
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }
    ?>
