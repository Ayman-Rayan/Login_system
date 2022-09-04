<?php

include_once 'header.php';

?>


<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
          <form action="signup.inc.php" method="POST">
               <div class="signup-form">
                <label >Name</label>
                <input class="form-control" type="text" name="name" placeholder="Full name..." id="name">
               </div>
              <div class="mb-3">
               <label >Email</label>
              <input class="form-control" type="email" name="email" placeholder="test@mail.com" id="email">
                  </div>
                     <div class="mb-3">
                    <label >UserName</label>
                    <input class="form-control" type="text" name="uid" id="uid">
                  </div>
                   <div class="mb-3">
              <label >password</label>
                <input class="form-control" type="password" name="pwd" id="pwd"> 
              </div>
              <div class="mb-3">
              <label >password again</label>
                <input class="form-control" type="password" name="pwdRepeat" id="pwdRepeat"> 
              </div>
              <button type="submit" name="submit" class="btn btn-dark">Sign up</button> 
           </form>
       
           <?php
if (isset($_GET['error'])) {
    if ($_GET['error']=="emptyinput") {
        echo "<p> FILL in all fields!!!</p>";
    }
    else if ($_GET['error']=="invaliduid") {
        echo "<p> chooose a correct username!!!</p>";
    }
    else if ($_GET['error']=="invalidemail") {
        echo "<p> choose a vaalide email!!!</p>";
    }
    else if ($_GET['error']=="passwordsdontmatch") {
        echo "<p> retry entering password!!!</p>";
    }
    else if ($_GET['error']=="stmtfailed") {
        echo "<p> something went wrong try again!!!</p>";
    }
    else if ($_GET['error']=="usernametaken") {
        echo "<p> username already taken!!!</p>";
    }
    else if ($_GET['error']=="none") {
        echo "<p> signed up successfully!!!</p>";
    }

}
?>

        </div>
    </div>
</div>



<?php  
include_once 'footer.php';
?>
