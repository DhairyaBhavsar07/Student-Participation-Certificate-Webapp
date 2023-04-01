<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>pending upload page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/navbar.css">
        <link rel="stylesheet" href="styles/all_cards.css">
        <!-- <link rel="stylesheet" href="styles/card.css"> -->
        <style>
            .button{
                background-color: black;
                color: white;
                text-decoration: none;
                border: none;
                border-radius: 20px;
                margin-top: 15px;
                font-weight: 500;
                font-size: 1rem;
                padding: 0.5em 0.7em;
                display: block;
            }
            h6{
                color: rgb(0, 0, 0);
                font-family: 'Inter' ,sans-serif;
                font-weight: 500;
                font-size: 1rem;
                display: block;
                margin-bottom: 10vh;
                margin-left: 90vw;
            }
        </style>
    </head>
    <body>
    <?php
            require 'db_connect.php';
            require 'login.php';
            // require 'image_upload.php';
        ?>
        <nav class="navbar" style="position: fixed;">
            <div class="navbar-container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div> 
                <ul class="menu-items">
                    <li><a href="homepage.php">SP</a></li>
                    <li><a href="tech_view.php" target="_blank">Technical</a></li><!--for student direct to upload section-->
                    <li><a href="nontech_view.php" target="_blank">Non-Technical</a></li><!--onluy one li for upload in header (student)-->
                    <li><a href="course_view.php" target="_blank">Online Course</a></li>
                    <span class="right-section">
                        <!-- <li><a href=#>Contact Us</a></li> -->
                        
                        <!-- <li><a href=# class="login-link">Logout</a></li> -->
                    <?php
                        require 'lgin_data.php';
                    ?>
                    </span>
                </ul>
            </div>
        </nav>
    <div class="backdrop">
            <h1 style="color: black;">Pending certificates</h1>
            <h6>Total: <span id="total"></span></h6>
            <form action="pending.php" method="post">
        <div class="display-certi">
            <?php
                // $q = "SELECT * FROM `data` WHERE `status_1` != 'approved' OR `status_1` != '--' AND `status_2` != 'approved' OR `status_2` != '--' AND `status_3` != 'approved' OR `status_3` != '--'";
                $q = "SELECT * FROM `data` WHERE `status_1` != 'approved' AND `status_1` != '--' OR `status_2` != 'approved' AND `status_2` != '--' OR `status_3` != 'approved' AND `status_3` != '--'";
                $res = mysqli_query($conn,$q);
                if($res)
                {
                    // echo "ok";
                    $n = mysqli_num_rows($res);
                    // echo $n;
                    $c = 0;
                    while($c!=$n)
                    {
                        $obj = mysqli_fetch_assoc($res);
                        ?>
                        <?php
                        if($obj['status_1'] != 'approved' && $obj['status_1'] != '--')
                        {
                            ?>
                            <div class="container">
                        <article class="card shadow curve">
                            <!-- <div> -->
                              <img src="banners/banner_tech.png" alt="image"/>
                            <!-- </div> -->
                            <div>
                              <p><?php echo $obj['user'] . "  " . $obj['name'] . "<br>"?></p>
                              
                            
                            <button class="button" name="<?php echo 't'.$c ?>">View more</button>  
                            </div>
                          </article>
                    </div>
                    <?php
                        }
                    if($obj['status_2'] != 'approved' && $obj['status_2'] != '--')
                    {
                        // $_SESSION['ind_user'] = $obj['user'];
                        ?>
                        <div class="container">
                    <article class="card shadow curve">
                        <!-- <div> -->
                          <img src="banners/banner_nontech.png" alt="image"/>
                        <!-- </div> -->
                        <div>
                          <p><?php echo $obj['user'] . "  " . $obj['name'] . "<br>" ?></p>
                            <button class="button" name="<?php echo 'n'.$c ?>">View more</button>  
                        </div>
                      </article>   
                </div>
                <?php
                    }
                if($obj['status_3'] != 'approved' && $obj['status_3'] != '--')
                {
                    // $_SESSION['ind_user'] = $obj['user'];
                    ?>
                    <div class="container">
                <article class="card shadow curve">
                    <!-- <div> -->
                      <img src="banners/banner_course.png" alt="image"/>
                    <!-- </div> -->
                    <div>
                      <p><?php echo $obj['user'] . "  " . $obj['name'] . "<br>" ?></p>
                            <button class="button" name="<?php echo 'o'.$c ?>">View more</button>  
                    </div>
                  </article>   
            </div>
            <?php
                }
                if(isset($_POST['t'.$c]) || isset($_POST['n'.$c]) || isset($_POST['o'.$c]))
                {
                    $_SESSION['ind_user'] = $obj['user']
                    ?>
                    <script>window.location.href = "solo_view.php"</script>
                    <?php
                }
                        
                        $c++;
                    }
                }
            ?>
                    
        </div>  
        </form>                       
    </div>
    <script>
        document.getElementById('total').innerHTML = "<?php echo $n ?>";
    </script>
    </body>