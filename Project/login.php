<?php

include_once 'header.php';

?>


<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
          <form action="login.inc.php" method="POST">
               <div class="signup-form">
                
              <div class="mb-3">
               <label >Email</label>
              <input class="form-control" type="text" name="name" placeholder="Username/email" id="email">
                  </div>
                    
                   <div class="mb-3">
              <label >password</label>
                <input class="form-control" type="password" name="pwd" id="pwd"> 
              </div>
              <button type="button" name="submit" class="btn btn-dark">Log In</button> 
           </form>
        </div>
    </div>
</div>





<?php  
include_once 'footer.php';
?>
