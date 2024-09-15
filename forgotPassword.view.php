<?php 
    
    include "header.php";

?>
<style>

    form{
      position: relative;
      right: -3%;
    }

</style>
 <div class="form_container">
 
        <form action="" method="post">
         <div class="container_group">
           <center>
              <h1>Recover Password</h1>
          </center>
            <div class="form_group">
              <label for="email">Email</label><br>
              <input type="email" name="email" id="email" required>
            </div>
            <div class="form_group">
              <label for="password">New Password</label><br>
              <input type="password" name="password" id="password" required>
            </div>
            <div class="form_group">
              <label for="c_password">Confirm Password</label><br>
              <input type="password" name="c_password" id="c_password" required>
            </div>
           
              <button type="submit">Confirm</button>

              <div class="back">
              <a href="index.php?kyle=login"><button type="button">Back</button></a>
              </div>

            
</div>
</div>
          
        </form>
</div>  
        <?php 
    
    include "footer.php";

?>
