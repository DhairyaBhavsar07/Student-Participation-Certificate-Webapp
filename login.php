<link rel="stylesheet" href="/sgp/styles/popup.css"/>
<?php

unset($_SESSION['logout']);
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
              // if(isset($_POST['btn']))
              // {
                  $user = $_POST['username'];
                  $pass = $_POST['pswd'];
                  $sql = "SELECT * FROM `data` WHERE `user` = '$user' AND `pass` = '$pass'";
                  $res = mysqli_query($conn,$sql);
                  $result = mysqli_num_rows($res);
                  if($result!=0)
                  {
        if(isset($_POST['btn']))
        {
            $_SESSION['user'] = $user;
            $_SESSION['who'] = "s";
            echo header("location:homepage.php");
            exit;
        }
    }
    else if($result==0)
    {
        $sql = "SELECT * FROM `admin_data` WHERE `user` = '$user' AND `pass` = '$pass'";
        $res = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($res);
        if($result!=0)
        {
            if(isset($_POST['btn']))
            {
            $_SESSION['user'] = $user;
            $_SESSION['who'] = "a";
            echo header("location:homepage.php");
            exit;
        }
    }
    else
    {
        $_SESSION['logout'] = "yes";
    }
    }
    
              // }
            }
        ?>
