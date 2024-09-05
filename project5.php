<?php
session_start();
// Make a database connection
$con = mysqli_connect('localhost', 'root', '', 'flix') or die("Connection failed: " . mysqli_connect_error());
$sql="SELECT SName, Links FROM series";
$res=mysqli_query($con,$sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Movie = isset($_POST['movie']) ? $_POST['movie'] : '';
    while($row=mysqli_fetch_assoc($res)){
        if ($row['SName'] == $Movie) {
            // can use the same session variables to access the values of movie name and its link in any other php files
            $_SESSION['Movie_Name']=$row['MName'];
            $_SESSION['Movie_Link']=$row['Links'];
            echo '<script type="text/javascript">
                    window.onload = function () { 
                        window.location.href = "' . $row['Links'] . '";
                    }
                </script>';

        }
        else{
            continue;
        }

    }
}
else {
    // Handle case where movieButton value is not set or empty
    echo "Series button value not set or empty.";
    }

?>