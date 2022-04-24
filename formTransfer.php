<?php

session_start();
$_SESSION["token"] = bin2hex(random_bytes(32));
print($_SESSION["token"]);

if(!isset($_COOKIE["userID"])){
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
      <!-- Column -->
    </div>
    <div class="col">
    <h2>Transfer Money</h2>
    <form method="post" action="Transfer.php">
  <input type="hidden" name="token" value="<?=$_SESSION["token"]?>"/>
  <input type="text" name="userBank" placeholder="UserID" value=""/>
  <input type="text" style="margin: 15px 0px" name="money" value="" placeholder="Money"/>
  <input type="submit" class="btn btn-primary" value="Bank!"/>
</form>
    </div>
    <div class="col">
      <!-- Column -->
    </div>
  </div>
</div> 
</body>
</html>
 



