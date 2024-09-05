<?php
session_start(); // Start the session

$con = mysqli_connect('localhost', 'root', '', 'flix') or die("Connection failed: " . mysqli_connect_error());

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['first_name'])) {
        $email = $_POST['email'];
        // Store the email in a session variable
        $_SESSION['email'] = $email;
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $firstName = $_POST['first_name'];

        // Check if email already exists in database
        $trigger_sql =  "CREATE TRIGGER afterr_update_user_detail\n"

        ."AFTER UPDATE ON USER_DETAILS\n"
    
        . "FOR EACH ROW\n"
    
        . "BEGIN\n"
    
        . "    IF OLD.Email <> NEW.Email THEN\n"
    
        . "        UPDATE LOGIN SET User_ID = NEW.Email WHERE User_ID = OLD.Email;UPDATE subscriptions SET email = NEW.Email WHERE email = OLD.Email;END IF;END;";
    $result_trigger = mysqli_multi_query($con, $trigger_sql);

            if ($result_trigger) {
                echo  '<script type="text/javascript">
                window.onload = function () { 
                alert("email already exists !!User details updated!!"); 
                window.location.href = "i4.php";
                }
                </script>';
            } else {
                echo "Error updating user details: " . mysqli_error($con);
            }
        } else {
            // If email doesn't exist, proceed with registration
            if ($password === $confirmPassword) {
                // Insert user details into LOGIN table
                $sql_login = "INSERT INTO LOGIN (User_ID, Password) VALUES ('$email', '$password')";
                $result_login = mysqli_query($con, $sql_login);

                // Insert user details into USER_DETAILS table
                $sql_user_details = "INSERT INTO USER_DETAILS (User_Name, Email) VALUES ('$firstName', '$email')";
                $result_user_details = mysqli_query($con, $sql_user_details);

                // Insert user ID into subscription table
                $sql_subscription = "INSERT INTO subscriptions (email) VALUES ('$email')";
                $result_subscription = mysqli_query($con, $sql_subscription);

                if ($result_login && $result_user_details && $result_subscription) {
                    // Redirect to subscription page
                    header("Location: i4.php");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            } else {
                echo "Password and confirm password do not match";
            }
        }
    } else {
        echo "Email, password, first name, and confirm password cannot be empty";
    }


mysqli_close($con);
?>