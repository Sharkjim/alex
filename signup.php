<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="grid-container">
  <div class="item1">Άρης Αλεξάνδρου</div>
  <?php include_once 'menu.php'; ?>
  <div class="item3">
  <section>

<form action="includes/signup.inc.php" method="post">  
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="text"><b>Full Name</b></label>
    <input type="text" placeholder="Enter full name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="text"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

   <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwdrepeat" required>

    <div class="clearfix">
    <a href="index.php">
     <button type="button" class="cancelbtn">Cancel</button>
     <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
 </div>
</form>
<?php
if(isset($_GET["error"])){
 if($_GET["error"]=="emptyinput"){
   echo"<p>Fill in all fields!</p>";

  }
 else if($_GET["error"]=="invaliduid"){
   echo"<p>Choose a proper username !</p>";

 }
 else if($_GET["error"]=="invalidemail"){
   echo"<p>Choose a proper email !</p>";

 }
 else if($_GET["error"]=="passwordsdontmatch"){
   echo"<p>Passwords doesn't match , try again!</p>";

 }
 else if($_GET["error"]=="stmtfailed"){
   echo"<p>Something went wrong , try agian !</p>";

 }
 else if($_GET["error"]=="usernametaken"){
   echo"<p>Username or Email  already taken!</p>";

 }
 else if($_GET["error"]=="none"){
   echo"<p>You have signed up !</p>";

 }
}
?>
</section>

</div>  
  <div class="item4"></div>    
  <div class="item5"></div>
</div>

</body>
</html>

