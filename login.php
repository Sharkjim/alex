<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="grid-container">
  <div class="item1">Άρης Αλεξάνδρου</div>
  <?php include_once 'menu.php'; ?>
  <div class="item3">
    <form action="includes/login.inc.php" method="post">


<div class="container">
  <label for="uid"><b>Username</b></label>
  <input type="text" placeholder="Enter Username/Email" name="uid" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="pwd" required>

  <button type="submit" name="submit" >Login</button>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
</div>

<div class="container" style="background-color:#f1f1f1">
  
  <span class="psw">Forgot <a href="#">password?</a></span>
</div>

<?php
if(isset($_GET["error"])){
if($_GET["error"]=="emptyinput"){
  echo"<p>Fill in all fields!</p>";

 }
else if($_GET["error"]=="wronglogin"){
  echo"<p>Incorect information , try again!</p>";

}

}
?>

</form></div>  
  <div class="item4"></div>    
  <div class="item5"></div>
</div>

</body>
</html>

