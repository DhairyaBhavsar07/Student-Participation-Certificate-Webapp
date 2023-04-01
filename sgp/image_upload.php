<?php
session_start();
require 'db_connect.php';
// echo "Welcome " . $_SESSION['user'] . " to our website..!!";
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
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
      // $file_error = $file['error'];
      // $file_size = $file['size'];
    //   echo $file_name;

      $f_name = explode('.',$file_name);
    //   echo end($f_name);
      $f_check = strtolower(end($f_name));
    //   echo $f_check;

      $a = array('jpg','jpeg','png','pdf');
      if(in_array($f_check,$a))
      {
      $dest = '/Applications/XAMPP/htdocs/sgp/final/' . $file_name;
      // var_dump($dest);
      // $_SESSION['img'] = $dest;
    //  var_dump(move_uploaded_file($file_tmp,$dest));
    //  $status = "--";
    //  var_dump(copy($file_tmp,$dest));
    $ins_1 = $_POST['issue1'];
    $date_1 = $_POST['date1'];
    $desc_1 = $_POST['desc1'];
    
    //   $sql = "INSERT INTO `data`(`ins_1`,`image_1`,`d_1`,'desc_1') VALUES ('$ins_1','$file_name','$date_1','$desc_1') WHERE `user` = '$name'";
      $sql = "UPDATE `data` SET `name`='$ins_1' WHERE `user` = '$name'";
      $res = mysqli_query($conn,$sql);
      if(!$res)
      {
        echo "image uploading failed..!! Please Try Again..!!<br><br><br>";
      }
    }

    }
 }
?>
