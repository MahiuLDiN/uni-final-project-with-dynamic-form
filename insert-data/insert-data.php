<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "finalproject";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$con) {
  die("Connection failed: " . $con->connect_error);
} else {
  ?>
  <script>
  alert("New Record Add Now");
  </script>
  <?php
}



if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     
     $sql = "INSERT INTO `contact`(`Name`, `email`, `Subject`, `message`) VALUES ('$name','$email','$subject','$message')";
     if (mysqli_query($con, $sql)) {
      
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
     header("Location: ../index.html");
}
?>