<?php
include('header.php');
?>
            <div class="login-content">
                <div class="login-logo">
                    <!-- <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a> -->
                </div>
                <div class="login-form" style="margin-top:25%;" >
                    <form method="POST" id="loginform">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                   
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Sign in</button>
                        <div class="error" style="color:red;">

                         <?php 
                           if (isset($_POST['submit'])) {
                         login(); 
                           }
                         ?>
                         </div>
                        
                    </form>
                    
                </div>
            </div>
      
<?php
include('footer.php');
?>