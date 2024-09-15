<?php 
    
    include "header.php";

?>
<style>

    form{
      position: relative;
      right: 3%;
    }

</style>

 <div class="form_container">
 
        <form action="" method="post">
         <div class="container_group">
           <center>
              <h1>Sign In</h1>
          </center>
          <div class="form_signin">
            <div class="form_group">
              <label for="email">Email</label><br>
              <input type="email" name="email" id="email" required>
            </div>
            <div class="form_group">
              <label for="password">Password</label><br>
              <input type="password" name="password" id="password" required>
            </div>
            </div>
            <div class="forgot_link">
            <a href="index.php?kyle=forgotPassword">Forgot Password?</a>
            
              <button type="submit">Sign In</button></div>

              <div class="links">
              <div class="link">
              <pre>Didn't had an account? <a href="index.php?kyle=signup">Sign Up</a></pre>
            </div>
</div>
          
        </form>
</div>  
        <?php 
    
    include "footer.php";

?>
