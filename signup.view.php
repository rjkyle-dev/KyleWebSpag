<?php 
    
    include "header.php";

?>
<style>

    form{
      position: relative;
      right: 2.4%;
    }

</style>

 <div class="form_container">
 
        <form action="" method="post">
         <div class="container_group">
           <center>
              <h1>Sign Up</h1>
          </center>
            <div class="form_group">
              <label for="username">Username</label><br>
              <input type="text" name="username" id="username" required>
            </div>
            <div class="form_group">
              <label for="email">Email</label><br>
              <input type="email" name="email" id="email" required>
            </div>
            <div class="form_group">
              <label for="password">Password</label><br>
              <input type="password" name="password" id="password" required>
            </div>
            <div class="form_group">
              <label for="c_password">Confirm Password</label><br>
              <input type="password" name="c_password" id="c_password" required>
            </div>
           
              <button type="submit">Sign Up</button>

              <div class="link">
              <pre>Already has account? <a href="index.php?kyle=login">Sign In</a></pre></div>
</div>
          
        </form>
</div>  
        <?php 
    
    include "footer.php";

?>
