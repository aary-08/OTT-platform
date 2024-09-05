<?php
session_start(); // Start the session

// Establish database connection
$con = mysqli_connect('localhost', 'root', '', 'flix') or die("Connection failed: " . mysqli_connect_error());

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['plan'])) {
    // Retrieve the selected plan
    $plan = $_POST['plan'];

    // Check if the user's email is set in the session
    if (isset($_SESSION['email'])) {
        // Retrieve the user's email from the session
        $email = $_SESSION['email'];

        // Update the subscription plan in the database based on the selected plan
        $update_subscription_sql = "UPDATE subscriptions SET plan = '$plan' WHERE email = '$email'";
        $result_subscription = mysqli_query($con, $update_subscription_sql);

        // Check if the update was successful
        if ($result_subscription) {
            // Redirect the user to the homepage
            header("Location: i1.php");
            exit();
        } else {
            // Handle the case when the update fails
            echo "Failed to update subscription. Please try again.";
        }
    } else {
        // Redirect the user to the login page or handle the case when the user is not logged in
        header("Location: i1.php");
        exit();
    }
}

// Close the database connection
mysqli_close($con);
?>
