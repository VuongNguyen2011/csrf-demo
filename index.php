<?php
session_start();

  if ((isset($_GET["userID"])=="user1" && ($_GET["pass"])=="123" )) {
    setcookie('userID', 'Nguyen Dep Trai', time() + 6000);
  }else{
    if(!isset($_COOKIE["userID"]))
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container">
  <div class="row">
    <div class="col">
      <!-- Column -->
    </div>
    <div class="col">
    <h3>Transfer Money</h3>
    <a href="formTransfer.php" class="btn btn-primary">Let's Go</a>

    </div>
    <div class="col">
      <!-- Column -->
    </div>
  </div>
</div>  
</body>
</html>
