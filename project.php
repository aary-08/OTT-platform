<?php
$con = mysqli_connect('localhost', 'root', '', 'flix') or die("Connection failed: " . mysqli_connect_error());
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare SQL statement to retrieve user details
    $sql = "SELECT User_ID, Password FROM LOGIN WHERE User_ID = '$email'";

    // Execute the query
    $result = mysqli_query($con, $sql);

    // Check if a row was returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the result
        $row = mysqli_fetch_assoc($result);
        
        // Verify password
        if ($row["Password"] === $password) {
            // Successful login
            header("Location: http://localhost/practice%20js/i3.php");
        exit();
        } else {
            
            echo '<script>alert("Wrong credentials");</script>';
            echo '<script>window.location.href = "i1.php";</script>';
            exit();
        }
    } else {
        // User not found, display error message
        echo "User not found";
    }

    // Free result set
    mysqli_free_result($result);
}
// Close connection
mysqli_close($con);
?>