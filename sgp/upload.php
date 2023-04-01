<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>upload page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/navbar.css">
        <link rel="stylesheet" href="styles/all_cards.css">
        <link rel="stylesheet" href="styles/popup.css">
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
        <h1 style="color: black;">Upload your certificates here!</h1>
    
            <!-- <div class="display-certi"> -->
                    <div class="container">
                        <article class="card shadow curve">
                            <!-- <div> -->
                              <img src="banners/banner_tech.png" alt="image">
                            <!-- </div> -->
                      
                            <div>
                              <p>Upload your technical certificate here</p>
                              <!-- <form id="tbtn" action="upload.php" method="POST"> -->
                                <a href="#" id="tbtn"  onclick="openForm1()">Upload</a>
                                <!-- <button   name="tbtn" onclick="openForm1()">Upload</button> -->
                                <!-- </form> -->
                            </div>
                          </article>
                          <article class="card shadow curve">
                              <img src="banners/banner_nontech.png" alt="image">
                            <div>
                              <p>Upload your non-technical certificate here</p>
                                <a href="#" name="nbtn" onclick="openForm2()">Upload</a>
                            </div>
                          </article>
                          <article class="card shadow curve">
                              <img src="banners/banner_course.png" alt="image">
                            <div>
                              <p>Upload your online course certificate here</p>
                                <a href="#" name="obtn" onclick="openForm3()">Upload</a>
                            </div>
                          </article>
                        
                    </div>
                   
            <!-- </div>         -->
            
            <!-- for technical -->
            <div class="popup-box" id="popupForm1">
              <form  action="upload.php" method="POST" enctype="multipart/form-data" class="upload-form">
                <div class="upload-popup">
                    <a class="close" href=# onclick="closeForm1()">&times;</a>
                    <h1>Upload details</h1>
                    <hr>
                    <label for="issueBy">Issued by:</label>
                    <input name="issue1" type="text" placeholder="Institute/Organisation"><br>
                    <label for="issuedDate">Certificate issued on:</label>
                    <input name="date1" type="date" placeholder="Issued on"><br>
                    <label  for="issueBy">Event description:</label>
                    <input name="desc1" type="text" placeholder="Description"><br>
                    <label for="certi">Select file to upload:</label>
                    <input name="file1" type="file" placeholder="file" accept=".doc, .docx, .pdf, .png,.jpeg"><br>
                    <button name="btn1" type="submit">Upload</button>
                    <br>
                </div>
              </form>
            </div>

            <!-- for non tech -->
            <div class="popup-box" id="popupForm2">
              <form action="upload.php" method="POST" enctype="multipart/form-data" class="upload-form">
                <div class="upload-popup">
                    <a class="close" href=# onclick="closeForm2()">&times;</a>
                    <h1>Upload details</h1>
                    <hr>
                    <label for="issueBy">Issued by:</label>
                    <input name="issue2" type="text" placeholder="Institute/Organisation"><br>
                    <label for="issuedDate">Certificate issued on:</label>
                    <input name="date2" type="date" placeholder="Issued on"><br>
                    <label for="issueBy">Event description:</label>
                    <input name="desc2" type="text" placeholder="Description"><br>
                    <label for="certi">Select file to upload:</label>
                    <input name="file2" type="file" placeholder="file" accept=".doc, .docx, .pdf, .png,.jpeg"><br>
                    <button name="btn2" type="submit">Upload</button>
                    <br>
                </div>
              </form>
            </div>

            <!-- for online course -->
            <div class="popup-box" id="popupForm3">
              <form action="upload.php" method="POST" enctype="multipart/form-data" class="upload-form">
                <div class="upload-popup">
                    <a class="close" href=# onclick="closeForm3()">&times;</a>
                    <h1>Upload details</h1>
                    <hr>
                    <label for="issueBy">Issued by:</label>
                    <input name="issue3" type="text" placeholder="Institute/Organisation"><br>
                    <label for="issuedDate">Certificate issued on:</label>
                    <input name="date3" type="date" placeholder="Issued on"><br>
                    <label for="issueBy">Event description:</label>
                    <input name="desc3" type="text" placeholder="Description"><br>
                    <label for="certi">Select file to upload:</label>
                    <input name="file3" type="file" placeholder="file" accept=".doc, .docx, .pdf, .png,.jpeg"><br>
                    <button name="btn3" type="submit">Upload</button>
                    <br>
                </div>
              </form>
            </div>
      
      
            <!-- to open popup -->
            <script>
              function openForm1() 
              {
                document.getElementById("popupForm1").style.display = "block"; 
              }
              
              function closeForm1() 
              {
                document.getElementById("popupForm1").style.display = "none";
              }

              function openForm2() 
              {
                document.getElementById("popupForm2").style.display = "block"; 
              }
              
              function closeForm2() 
              {
                document.getElementById("popupForm2").style.display = "none";
              }

              function openForm3() 
              {
                document.getElementById("popupForm3").style.display = "block"; 
              }
              
              function closeForm3() 
              {
                document.getElementById("popupForm3").style.display = "none";
              }
              </script>
              <?php
// session_start();
// require 'db_connect.php';
// echo "Welcome " . $_SESSION['user'] . " to our website..!!";
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
  $q = "SELECT * FROM `data` WHERE 1";
    $res = mysqli_query($conn,$q);
    $obj = mysqli_fetch_assoc($res);

    if(isset($_POST['btn1']))
    {
    //   echo "<br>";
      $file = $_FILES['file1'];//dont use post for any file operation we should use $_FILES
      // echo "Uploded";
    //   echo "<br>";
    //   print_r($file);//will print all required fields stored in the form of array (from the file we have uploaded)
      $name = $_SESSION['user'];
      //creating all required fields for image upload(generated from print_r)
      $file_name = $file['name'];
      // $file_path = $file['full_path'];
      $file_type = $file['type'];
      $file_tmp = $file['tmp_name'];
      $file_error = $file['error'];
      $file_size = $file['size'];
    //   echo $file_name;

      $f_name = explode('.',$file_name);
    //   echo end($f_name);
      $f_check = strtolower(end($f_name));
    //   echo $f_check;

      $a = array('jpg','jpeg','png','pdf');
      if(in_array($f_check,$a))
      {
      $dest = '/Applications/XAMPP/xamppfiles/htdocs/sgp/final/' . $file_name;
      // var_dump($dest);
      // $_SESSION['img'] = $dest;
     var_dump(move_uploaded_file($file_tmp,$dest));
    //  $status = "--";
    //  var_dump(copy($file_tmp,$dest));
    

    $ins_1 = $_POST['issue1'];
    // $date_1 = $_POST['date1'];
    // $part = explode('/',$_POST['date1']);
    $date_1 = date('Y-m-d',strtotime($_POST['date1']));
    $desc_1 = $_POST['desc1'];
    $user = $_SESSION['user'];
    if(isset($_SESSION['user']))
    echo $desc_1;
    
    if($obj['up']<3)
    $up = $obj['up'] + 1;
    //   $sql = "INSERT INTO `data`(`ins_1`,`image_1`,`d_1`,'desc_1') VALUES ('$ins_1','$file_name','$date_1','$desc_1') WHERE `user` = '$name'";
    // echo "hello before";
      $sql = "UPDATE `data` SET `up`='$up',`image_1`='$file_name',`ins_1`='$ins_1',`d_1`='$date_1',`desc_1`='$desc_1',`status_1`='--' WHERE `user` = '$user'";
      $res = mysqli_query($conn,$sql);
      // echo "hello after";
      if($res)
      {
        echo "uploaded<br><br><br>";
      }
      else
      {
        echo "Error";
      }
    }
    }


// -----------------------------------------------------------------------
// -----------------------------------------------------------------------
// -----------------------------------------------------------------------


    else if(isset($_POST['btn2']))
    {
    //   echo "<br>";
      $file = $_FILES['file2'];//dont use post for any file operation we should use $_FILES
      // echo "Uploded";
    //   echo "<br>";
    //   print_r($file);//will print all required fields stored in the form of array (from the file we have uploaded)
      $name = $_SESSION['user'];
      //creating all required fields for image upload(generated from print_r)
      $file_name = $file['name'];
      // $file_path = $file['full_path'];
      $file_type = $file['type'];
      $file_tmp = $file['tmp_name'];
      $file_error = $file['error'];
      $file_size = $file['size'];
    //   echo $file_name;

      $f_name = explode('.',$file_name);
    //   echo end($f_name);
      $f_check = strtolower(end($f_name));
    //   echo $f_check;

      $a = array('jpg','jpeg','png','pdf');
      if(in_array($f_check,$a))
      {
      $dest = '/Applications/XAMPP/xamppfiles/htdocs/sgp/final/' . $file_name;
      // var_dump($dest);
      // $_SESSION['img'] = $dest;
    //  var_dump(move_uploaded_file($file_tmp,$dest));
    //  $status = "--";
    //  var_dump(copy($file_tmp,$dest));
    

    $ins_1 = $_POST['issue2'];
    // $date_1 = $_POST['date1'];
    // $part = explode('/',$_POST['date1']);
    $date_1 = date('Y-m-d',strtotime($_POST['date2']));
    $desc_1 = $_POST['desc2'];
    $user = $_SESSION['user'];
    // if(isset($_SESSION['user']))
    // echo $desc_1;
    //   $sql = "INSERT INTO `data`(`ins_1`,`image_1`,`d_1`,'desc_1') VALUES ('$ins_1','$file_name','$date_1','$desc_1') WHERE `user` = '$name'";
    // echo "hello before";
    if($obj['up']<3)
    $up = $obj['up'] + 1;

      $sql = "UPDATE `data` SET `up`='$up',`image_2`='$file_name',`ins_2`='$ins_1',`d_2`='$date_1',`desc_2`='$desc_1',`status_2`='--' WHERE `user` = '$user'";
      $res = mysqli_query($conn,$sql);
      // echo "hello after";
      if($res)
      {
        echo "uploaded<br><br><br>";
      }
      else
      {
        echo "Error";
      }
    }

    }


// -----------------------------------------------------------------------
// -----------------------------------------------------------------------
// -----------------------------------------------------------------------


else if(isset($_POST['btn3']))
{
//   echo "<br>";
  $file = $_FILES['file3'];//dont use post for any file operation we should use $_FILES
  // echo "Uploded";
//   echo "<br>";
//   print_r($file);//will print all required fields stored in the form of array (from the file we have uploaded)
  $name = $_SESSION['user'];
  //creating all required fields for image upload(generated from print_r)
  $file_name = $file['name'];
  // $file_path = $file['full_path'];
  $file_type = $file['type'];
  $file_tmp = $file['tmp_name'];
  $file_error = $file['error'];
  $file_size = $file['size'];
//   echo $file_name;

  $f_name = explode('.',$file_name);
//   echo end($f_name);
  $f_check = strtolower(end($f_name));
//   echo $f_check;

  $a = array('jpg','jpeg','png','pdf');
  if(in_array($f_check,$a))
  {
  $dest = '/Applications/XAMPP/xamppfiles/htdocs/sgp/final/' . $file_name;
  // var_dump($dest);
  // $_SESSION['img'] = $dest;
//  var_dump(move_uploaded_file($file_tmp,$dest));
//  $status = "--";
//  var_dump(copy($file_tmp,$dest));


$ins_1 = $_POST['issue3'];
// $date_1 = $_POST['date1'];
// $part = explode('/',$_POST['date1']);
$date_1 = date('Y-m-d',strtotime($_POST['date3']));
$desc_1 = $_POST['desc3'];
$user = $_SESSION['user'];
// if(isset($_SESSION['user']))
// echo $desc_1;
//   $sql = "INSERT INTO `data`(`ins_1`,`image_1`,`d_1`,'desc_1') VALUES ('$ins_1','$file_name','$date_1','$desc_1') WHERE `user` = '$name'";
// echo "hello before";
if($obj['up']<3)
$up = $obj['up'] + 1;

  $sql = "UPDATE `data` SET `up`='$up',`image_3`='$file_name',`ins_3`='$ins_1',`d_3`='$date_1',`desc_3`='$desc_1',`status_3`='--' WHERE `user` = '$user'";
  $res = mysqli_query($conn,$sql);
  // echo "hello after";
  if(!$res)
  {
    echo "Image Uploading Failed..!! Please Try Again..!!<br><br><br>";
  }
}

}


 }
?>

        </div>
    </body>