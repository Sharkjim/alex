<div class="item2"><div class="vertical-menu">
    <a href="index.php" class="active">Αρχική</a>
    
    <div class="dropdown">
      <button class="dropbtn">Βιογραφία</button>
      <div class="dropdown-content">
        <a href="essd.php">Από την ΕΣΣΔ στην Ελλάδα</a>
        <a href="dmk.php">Δικτατορία Μεταξά, Κατοχή και πολιτικές διώξεις</a>
        <a href="dsg.php">Διαφυγή στη Γαλλία</a>
        
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Φωτογραφίες</button>
      <div class="dropdown-content">
        <a href="photos.php">Λογοτέχνης</a>
        <a href="photos1.php">Έργα</a>
        
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Συγγραφικό έργο</button>
      <div class="dropdown-content">
        <a href="som1.php">1 </a>
        <a href="som2.php">2</a>
        
      </div>
    </div>
      <button class="dropbtn"><a href="som1.php">Σύνδεσμοι </a></button>
      <div class="dropdown">
      <button class="dropbtn">Διαχείριση</button>
      <div class="dropdown-content">
      <?php
               if(isset($_SESSION["useruid"])){
                echo "<a href='profile.php'> Profile page </a>";
                echo "<a href='includes/logout.inc.php'> Log out </a>";

               }
               else{
                echo "<a href='signup.php'> Sign up </a>";
                echo "<a href='login.php'> Log in </a>";
               }
             ?>
        
      </div>
    </div>
    
    
    
  </div></div>
  