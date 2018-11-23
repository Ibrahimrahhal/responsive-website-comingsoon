<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Arabic Coding Tutorials</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/Artboard1.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">



<style>
body{
padding: 80px 10px;

}

.right {

color: #79c79c;
font-family: "Open Sans";
display: block;
margin: 0 auto;
margin-top: 60px;
text-align: center;
}
.wrong {
color: #da1f26;
font-family: "Open Sans";
display: block;
margin: 0 auto;
margin-top: 60px;
text-align: center;
}
@media screen and (min-width:1024px) {
  .logo{
width: 50%;
display: block;
margin: 0 auto;

  }
}
@media screen and (max-width:1023px) and (min-width:750px) {
  .logo{
width: 60%;
display: block;
margin: 0 auto;

  }
  @media screen and (max-width:749px)  {
    .logo{
  width: 83%;
  display: block;
  margin: 0 auto;

    }
}

</style>
  </head>
  <body>
<img src="images/icons/logo.svg" alt="" class="logo" />





<?php
 function ecoright()
{
  $strr="<div class=\"right\">
    <span class=\"fas fa-check-circle\" style=\"color:inherit\"></span>  Your Submission has been Recorded
  </div>";

  return $strr ;
}

function ecowrong()
{
  $strr = "<div class=\"wrong\">
    <span class=\"fas fa-times-circle\" style=\"color:inherit\"></span>  Your Submission hasn't been Recorded
  </div>";
  return $strr ;
}
$servername = "shareddb1e.hosting.stackcp.net";
$username = "Emails-3637a52a";
$password = "Ii0796061133";
$dbname = "Emails-3637a52a";
// Create connection
if (isset($_POST["submit"]) ){

$name = $_POST["name"];
$email =$_POST["email"];
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    echo ecowrong();

    die();
}


$sql = "INSERT INTO Emails(Name, Email)
VALUES ('{$name}', '{$email}')";


if (mysqli_query($conn, $sql)) {

} else {
  echo ecowrong();

  die();

}

mysqli_close($conn);
echo ecoright();

}

else {
  echo ecowrong();



}
?>


</body>
</html>
