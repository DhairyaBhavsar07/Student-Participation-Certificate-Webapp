<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <title>Course view</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/card.css">
    <style>
    *,
    *::after,
    *::before {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
    body{
        background-color: black;
    }
    .backdrop{
        background-color: #aa609f;
        border-radius: 20px 20px 0px 0px;
        display: block;
        position: absolute;
        top:0;
        bottom: 0; 
        left: 0;
        right: 0;
        /* height: 400vh; */
        margin-top: 100px;
        padding-top: 25px; /* if face trouble with responsive css for cards check this */
        padding-left: 1vw;
        padding-right: 3vw;
        /* z-index: -1; */
    }
    h1{
        color: white;
        font-family: 'Inter' ,sans-serif;
        font-weight: 500;
        display: block;
        margin-bottom: 20px;
        margin-left: 3vw;
    }
    .btn{
        background-color: #ba3aa7;
    }
    </style>
</head>
<body>
<?php
        require 'db_connect.php';
        require 'login.php';
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
                <li><a href="tech_view.php" target="_blank">Technical</a></li>
                <li><a href="nontech_view.php" target="_blank">Non-Technical</a></li>
                <li><a href="pending.php" target="_blank">Pending</a></li>
                <!-- <li><a href="course_view.html">Online Course</a></li> -->
                <span class="right-section">
                    <!-- <li><a href=#>Contact Us</a></li> -->
                    <!-- <li><a href=# class="login-link">Logout</a></li>make changes with php for logout -->
                    <?php
                        require 'lgin_data.php';
                    ?>
                </span>
            </ul>
        </div>
    </nav>
    <div class="backdrop">
        <h1>Online Course Certificates</h1>
        <form action="course_view.php" method="POST">
        <div class="display-certi">
        <?php
            $q = "SELECT * FROM `data` WHERE `status_3` != 'no'";
            $res = mysqli_query($conn,$q);
            $n = mysqli_num_rows($res);
            // echo $n;
            // $obj = mysqli_fetch_assoc($res); 
            $count = 0;
            while($count!=$n)
            {
            $obj = mysqli_fetch_assoc($res); 
            ?> 
                <div class="container">
                    <!-- <div class='banner-img'></div> -->
                    <a href="<?php echo "final/".$obj['image_3'] ?>" target="_blank"><img src="<?php echo "final/".$obj['image_3'] ?>" alt='certi image' class="profile-img"></a>
                    <h2 class="id-no"><?php echo $obj['user'] ?></h1>
                    <div class="description">  
                        <ul>
                            <li>Issued by: <?php echo $obj['ins_3'] ?></li> <!-- answers will be taken brom input and displayed through php-->
                            <li>Date of event: <?php echo $obj['d_3'] ?></li>
                            <li>Details about event: <?php echo $obj['desc_3'] ?></li>
                            <li>Status: <?php echo $obj['status_3'] ?></li>
                        </ul>
                    </div>
                    <div class="status">
                        <button name="<?php echo 'dbtn'.$count ?>" class="no">Deny</button>
                        <button name="<?php echo 'abtn'.$count ?>" class="yes">Approve</button>
                    </div>
                    <button name="<?php echo 'vbtn'.$count ?>" class='btn'>View more</button>
                </div>
                <?php
// unset($_POST['abtn'.$count]);
                // if(isset($_SESSION['click']))
                // {
                if(isset($_POST['vbtn'.$count]))
                {
                    // echo "hello world";
                    $_SESSION['ind_user'] = $obj['user'];
                    ?>
                    <script>window.location.href = "solo_view.php"</script>
                    <?php
                    // header("location:solo_view.php");
                }
                if(isset($_POST['abtn'.$count]))
                {
                    $u = $obj['user'];
                    $sql = "UPDATE `data` SET `status_3`='approved' WHERE `user`='$u'";
                    $res = mysqli_query($conn,$sql);
                    ?>
                    <script>window.location.href = "course_view.php"</script>
<?php
                    // if($res)
                    // {
                        //     echo "Approved..!!";
                        // }
                        // $_SESSION['click'] = "yes";
                    }
                    if(isset($_POST['dbtn'.$count]))
                    {
                        $u = $obj['user'];
                    $sql = "UPDATE `data` SET `status_3`='denied' WHERE `user`='$u'";
                    $res = mysqli_query($conn,$sql);
                    ?>
                    <script>window.location.href = "course_view.php"</script>
<?php
                    }
                    $count = $count + 1;

                // }  
            }    
                ?>
        </div>
        
    </form>
    </div>
  
</body>