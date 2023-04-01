<!-- <link rel="stylesheet" href="/styles/popup.css"/> -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com"/> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet"/> -->
        <link rel="stylesheet" href="/sgp/styles/hp.css"/>
        <!-- <link rel="stylesheet" href="/sgp/styles/navbar.css"/> -->
        <!-- <link rel="stylesheet" href="styles/popup.css"/> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
        <div class="popup-box" style="backdrop-filter: blur(10px);" id="popupForm">
        <form action="homepage.php" method="post" class="login-form">
          <div class="login-popup">
              <a class="close" href=# onclick="closeForm()">&times;</a>
              <h1>Login</h1>
              <center><p id="no" style="color: red;"></p></center> 
              <hr>
              <label for="username"></label>
              <input type="text" placeholder="Username" name="username" id="username"><br>
              <label for="pswd"></label>
              <input type="password" placeholder="Password" name="pswd" id="pswd"><br>
              <!-- <p>Forgot password?</p> -->
              <a href="#" id="forgot">Forgot Password?</a>
              <button onclick="btnhandler()" name="btn" type="submit">Login</button>
              <p><center>Not a member?<a href="#"> Signup</a></center></p>
              <br>
          </div>
        </form>
              </div>
<?php
                        if(!isset($_SESSION['user']))
                        {
                        ?>
                        <li><a href=# target="_self" class="login-link" onclick="openForm()" id="openbtn">Login</a></li>
                        <?php
                        }
                        else
                        {
                          ?>
                    <li><a href="logout.php" class="login-link">Logout</a></li><!-- make changes with php for logout-->
                        <?php
                        }
                        ?>
<script>
        function openForm() 
        {
          document.getElementById("popupForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("popupForm").style.display = "none";
        }
</script>
        <?php
        if(!isset($_SESSION['user']))
        {
          ?>
        <script src="no_user.js"></script>
        <?php
        }
        ?>
