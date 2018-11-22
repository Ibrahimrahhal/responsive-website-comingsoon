<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Arabic Coding Tutorials</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/Artboard1.png"/>

  </head>
  <body>




<?php
$servername = "shareddb1e.hosting.stackcp.net";
$username = "Emails-3637a52a";
$password = "8rif9z69oa";

// Create connection
if (isset(POST["name"]) && isset(POST["email"]) ){

$name = POST["name"];
$email =POST["email"];
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO Emails (Name, Email)
VALUES ({$Name}, {$email})";

if (mysqli_query($conn, $sql)) {

} else {

}

mysqli_close($conn);


}

else {



}
?>


</body>
</html>
