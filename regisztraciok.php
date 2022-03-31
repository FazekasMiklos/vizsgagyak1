<?php
require 'db.inc.php';
if (isset($_POST['kuldes'])){
   $nev = $_POST["nev"];
   $email = $_POST["email"];
   $datum = $_POST["datum"];
   $nem = $_POST["nem"];
   if($datum <= 2008-01-01){
   $query = "INSERT INTO jelentkezes (nev,email,datum,nem) VALUES ('$nev','$email','$datum','$nem')";
   $result = mysqli_query($conn,$query);
   header('Location: valasz.php');
   }

}
include 'jelentkezesilap.php';
?>