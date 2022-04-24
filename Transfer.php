<?php

session_start();

if (!isset($_POST["token"]) || !isset($_SESSION["token"])) {
  exit('<span style="color: red; font-size: 20px; font-weight: 600;">Bank Failed!!!!</span>');
}

if ($_SESSION["token"]==$_POST["token"]) {
    unset($_SESSION["token"]);
    echo '<span style="color: green; font-size: 20px; font-weight: 600;">'."Bank to ==>> ".
    '<span style="color: red; font-size: 20px; font-weight: 600;">'.$_POST["userBank"].'</span>'." Susscessfully!! With money = ".
    '<span style="color: red; font-size: 20px; font-weight: 600;">'.$_POST["money"].'</span>'."đ".'</span>';
  
}
else { exit("INVALID TOKEN"); }

// if(isset($_COOKIE["userID"])){
//   echo '<span style="color: green; font-size: 20px; font-weight: 600;">'."Bank to ==>> ".
//   '<span style="color: red; font-size: 20px; font-weight: 600;">'.$_POST["userBank"].'</span>'." Susscessfully!! With money = ".
//   '<span style="color: red; font-size: 20px; font-weight: 600;">'.$_POST["money"].'</span>'."đ".'</span>';
// }
?>

