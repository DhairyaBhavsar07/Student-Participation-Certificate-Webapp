<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>home page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="/sgp/styles/hp.css"/>
        <link rel="stylesheet" href="/sgp/styles/navbar.css"/>
        <!-- <link rel="stylesheet" href="styles/popup.css"/> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
        <link rel="stylesheet" href="/sgp/styles/popup.css"/>
    </head>
    <body>
      <?php
          require 'db_connect.php';
          require 'login.php';
      ?>
        <nav class="navbar">
            <div class="navbar-container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div> 
                <ul class="menu-items">
                    <li><a href="homepage.php">SP</a></li>
                    <?php
                    if($_SESSION['who'] === "a")
                    {
                      ?>
                    <li><a href="tech_view.php" target="_blank">Technical</a></li><!--for student direct to upload section-->
                    <li><a href="nontech_view.php" target="_blank">Non-Technical</a></li><!--onluy one li for upload in header (student)-->
                    <li><a href="course_view.php" target="_blank">Online Course</a></li>
                    <li><a href="pending.php" target="_blank">Pending</a></li>
                    <?php
                    }
                    else
                    {
                      if(isset($_SESSION['user']))
                      {
                      ?>
                      <li><a href="upload.php">Upload</a></li>
                      <li><a href="status.php">My Uploads(Status)</a></li>
                    <?php
                      }
                    }
                    ?>
                    <span class="right-section">
                        <li><a href=#contact>Contact Us</a></li>
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
                        
                    </span>
                </ul>
            </div>
        </nav>
        
    
        <div class="info">
            <div class="info-info">
                <p class="info-title">
                    Student Participation
                </p>
                <p class="info-brief">
                    We provide platform for students to be able to showcase their achievements to the faculty members throughout their academic years. 
                    And encourage further participation.  
                </p>
            </div>
            <img src="student.jpg" class="info-img">
        </div>


        <h1>Certificates</h1>
        <div class="certi-section">
          <div class="slides">
              <div class="slide">
                <?php
                if($_SESSION['who']=='s')
                {
                  ?>
                <a href="upload.php" target="_blank"><!-- another webpage for student side option using php-->
                <?php
                }
                else if($_SESSION['who']=='a')
                {
                  ?>
                    <a href="tech_view.php">
                  <?php
                }
                ?>
                  <img src="slides/tech_slide.png" id="slide-img">
                  <div class="slide-title">
                      <h2 class="certi-title">Technical Certificate</h2>
                  </div>
                </a>
              </div>
              <div class="slide">
              <?php
                if($_SESSION['who']=='s')
                {
                  ?>
                <a href="upload.php" target="_blank"><!-- another webpage for student side option using php-->
                <?php
                }
                else if($_SESSION['who']=='a')
                {
                  ?>
                    <a href="nontech_view.php">
                  <?php
                }
                ?>
                  <img src="slides/nontech_slide.png" id="slide-img">
                  <div class="slide-title">
                      <h2 class="certi-title">Non-Technical Certificate</h2>
                  </div>
                </a>
              </div>
              <div class="slide">
                <!-- <a href="upload.php"> -->
                <?php
                if($_SESSION['who']=='s')
                {
                  ?>
                <a href="upload.php" target="_blank"><!-- another webpage for student side option using php-->
                <?php
                }
                else if($_SESSION['who']=='a')
                {
                  ?>
                    <a href="course_view.php">
                  <?php
                }
                ?>
                  <img src="slides/course_slide.png">
                  <div class="slide-title">
                      <h2 class="certi-title">Online Course Certificate</h2>
                  </div>
                </a>
              </div>
          </div>
          <div class="slide-controls">
              <button id="prev-btn">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button id="next-btn">
                <i class="fas fa-chevron-right"></i>
              </button>
          </div>
      </div>
      <script src="main.js"></script> 
      
      <script src="https://kit.fontawesome.com/9bc1b64834.js" crossorigin="anonymous"></script>  
      <div id="contact">
        <h1 style="font-size: 4.8vmax; text-align:center">Contact Us</h1>
        <div class="cont-info">
          <button id="cont">
            <i class="fa-solid fa-phone"></i>
          </button>
          <p> :  +91-xxx-xxx-xxxx</p>
        </div>
        <div class="cont-info">
          <button id="cont">
            <i class="fa-solid fa-envelope"></i>
          </button>
          <p> :  studentparticipation@gmail.com</p>
        </div>
      </div>

      <!-- login popup -->
    <!-- <div class="cover" id="blur"> -->
    
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
              <!-- <a href="#" id="forgot">Forgot Password?</a> -->
              <button onclick="btnhandler()" name="btn" type="submit">Login</button>
              <p><center>Not a member?<a href="#" onclick="signup()"> Signup</a></center></p>
              <br>
          </div>
        </form>
              </div>
<!-- ----------------------------------------- SIGN UP------------------------ -->
              <div class="popup-box" style="backdrop-filter: blur(10px);" id="signupForm">
        <form action="homepage.php" method="post" class="login-form">
          <div class="login-popup">
              <a class="close" href=# onclick="closesignup()">&times;</a>
              <h1>Sign-up</h1>
              <center><p id="no" style="color: red;"></p></center> 
              <hr>
              <label for="username"></label>
              <input type="text" placeholder="Username" name="usr" id="username"><br>
              <label for="pswd"></label>
              <input type="password" placeholder="Password" name="pass" id="pswd"><br>
              <!-- <p>Forgot password?</p> -->
              <!-- <a href="#" id="forgot">Forgot Password?</a> -->
              <button onclick="btnhandler()" name="signbtn" type="submit">signup</button>
              <p><center>Already a member?<a href="#" onclick="openForm()"> Login</a></center></p>
              <!-- <p>login</p> -->
              <br>
          </div>
        </form>
              </div>
    <!-- </div> -->
      <script>
        function signup()
        {
          document.getElementById("signupForm").style.display = "block";

        }
        function closesignup()
        {
          document.getElementById("signupForm").style.display = "none";

        }
        function openForm() 
        {
          document.getElementById("popupForm").style.display = "block";
          document.getElementById("signupForm").style.display = "none";
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
        <?php
                          if($_SESSION['logout']==="yes")
                          {
                            // echo "HAHAHAHAHA";
                            $t = "NO USERS FOUND..!!";
                            ?>
                            <script>
                            document.getElementById("popupForm").style.display = "block";
                            document.getElementById('no').innerHTML = "<?php echo $t ?>";
                            </script>
                            <?php
                          }
                        ?>
    </body>
</html>