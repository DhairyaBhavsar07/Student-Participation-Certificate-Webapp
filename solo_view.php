<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <title>individual student view</title>
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
        background-color: #e7e7e7;
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
        background-color: #8d8a8a;
    }
    #certi-img{
        width: 8rem;
        clip-path: circle(60px at center);
        margin-top: 11.5rem;
    }
    #certi-img:hover{
        transform: scale(1.2);
        transition: 0.5s;
    }
    /* .description{
        margin-bottom: 4em;
        font-size: 1rem;
    } */
    .yes{
        background-color: #eaeaea;
    }
    .container:hover{
        transform: scale(1.1);
        transition: 0.5s;
        z-index: 44;
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
                <li><a href="course_view.php" target="_blank">Online Course</a></li>
                <li><a href="pending.php" target="_blank">Pending</a></li>
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
    <!-- <h1>Non-Technical Certificates</h1> -->
    <form action="solo_view.php" method="POST">
            <div class="backdrop">
        <div class="display-certi">
            <?php
            $user = $_SESSION['ind_user'];
                $sql = "SELECT * FROM `data` WHERE `user` = '$user'";
                $res = mysqli_query($conn,$sql);
                $obj = mysqli_fetch_assoc($res);
            ?>
                <div class="container">
                    <div class='banner-img1'></div>
                    <a href="<?php echo "final/".$obj['image_1'] ?>" target="_blank"> <img src="<?php echo "final/".$obj['image_1'] ?>" alt='certi image' class="profile-img" id="certi-img"></a>
                    <!-- to see image click on it : if not possible through php then make it a link to that image or popup-->
                    <h2 class="id-no"><?php echo $obj['user'] ?></h1>
                    <div class="description">  
                        <ul>
                            <h3><?php echo "Technical Certificate" ?></h3>
                            <li>Issued by: <?php echo $obj['ins_1'] ?> </li> <!-- answers will be taken brom input and displayed through php-->
                        <li>Date of event: <?php echo $obj['d_1'] ?></li>
                        <li>Details about event: <?php echo $obj['desc_1'] ?></li>
                        <li>Status: <?php if($obj['status_1']!='no'){echo $obj['status_1'];} else {echo "pending";} ?></li>
                        </ul>
                    </div>
                    <div class="status">
                        <button name="tdbtn" class="no">Deny</button>
                        <button name="tabtn" class="yes">Approve</button>
                    </div>
                    <!-- <button class='btn'>View more</button> -->
                </div>
                <div class="container">
                    <div class='banner-img2'></div>
                    <a href="<?php echo "final/".$obj['image_2'] ?>" target="_blank"><img src="<?php echo "final/".$obj['image_2'] ?>" alt='certi image' class="profile-img" id="certi-img"></a>
                    <h2 class="id-no"><?php echo $obj['user'] ?></h1>
                    <div class="description">  
                        <ul>
                        <h3><?php echo "Non-Technical Certificate" ?></h3>
                            <li>Issued by: <?php echo $obj['ins_2'] ?> </li> <!-- answers will be taken brom input and displayed through php-->
                            <li>Date of event: <?php echo $obj['d_2'] ?></li>
                            <li>Details about event: <?php echo $obj['desc_2'] ?></li>
                        <li>Status: <?php if($obj['status_2']!='no'){echo $obj['status_2'];} else {echo "pending";} ?></li>
                        </ul>
                    </div>
                    <div class="status">
                        <button name="ndbtn" class="no">Deny</button>
                        <button name="nabtn" class="yes">Approve</button>
                    </div>
                    <!-- <button class='btn'>View more</button> -->
                </div>
                <div class="container">
                    <div class='banner-img3'></div>
                    <a href="<?php echo "final/".$obj['image_3'] ?>" target="_blank"><img src="<?php echo "final/".$obj['image_3'] ?>" alt='certi image' class="profile-img" id="certi-img"></a>
                    <h2 class="id-no"><?php echo $obj['user'] ?></h1>
                    <div class="description">  
                        <ul>
                        <h3><?php echo "Online Course Certificate" ?></h3>
                            <li>Issued by: <?php echo $obj['ins_3'] ?> </li> <!-- answers will be taken brom input and displayed through php-->
                        <li>Date of event: <?php echo $obj['d_3'] ?></li>
                        <li>Details about event: <?php echo $obj['desc_3'] ?></li>
                        <li>Status: <?php if($obj['status_3']!='no'){echo $obj['status_3'];} else {echo "pending";} ?></li>

                        </ul>
                    </div>
                    <div class="status">
                        <button name="odbtn" class="no">Deny</button>
                        <button name="oabtn" class="yes">Approve</button>
                    </div>
                    <!-- <button class='btn'>View more</button> -->
                </div>
            </div>        
            
        </div>
    </form>
<?php
    if(isset($_POST['tabtn']))
    {
        $u = $obj['user'];
        $sql = "UPDATE `data` SET `status_1` = 'approved' WHERE `user` = '$u'";
        mysqli_query($conn,$sql);
        ?>
        <script>window.location.href = "solo_view.php"</script>
        <?php
    }
    if(isset($_POST['tdbtn']))
    {
        $u = $obj['user'];
        $sql = "UPDATE `data` SET `status_1` = 'denied' WHERE `user` = '$u'";
        mysqli_query($conn,$sql);
        ?>
        <script>window.location.href = "solo_view.php"</script>
        <?php
    }if(isset($_POST['nabtn']))
    {
        $u = $obj['user'];
        $sql = "UPDATE `data` SET `status_2` = 'approved' WHERE `user` = '$u'";
        mysqli_query($conn,$sql);
        ?>
        <script>window.location.href = "solo_view.php"</script>
        <?php
    }if(isset($_POST['ndbtn']))
    {
        $u = $obj['user'];
        $sql = "UPDATE `data` SET `status_2` = 'denied' WHERE `user` = '$u'";
        mysqli_query($conn,$sql);
        ?>
        <script>window.location.href = "solo_view.php"</script>
        <?php
    }if(isset($_POST['oabtn']))
    {
        $u = $obj['user'];
        $sql = "UPDATE `data` SET `status_3` = 'approved' WHERE `user` = '$u'";
        mysqli_query($conn,$sql);
        ?>
        <script>window.location.href = "solo_view.php"</script>
        <?php
    }if(isset($_POST['odbtn']))
    {
        $u = $obj['user'];
        // $up = $obj['up'] - 1;
        $sql = "UPDATE `data` SET `status_3` = 'denied' WHERE `user` = '$u'";
        mysqli_query($conn,$sql);
        ?>
        <script>window.location.href = "solo_view.php"</script>
        <?php

    }
?>
    
</body>