<?php
include 'db.php';
if(isset($_POST['title']) && isset($_POST['message']) && isset($_POST['about'])){
    $title = htmlentities(mysql_real_escape_string($_POST['title']));
    $message = $_POST['message'];
    $about = htmlentities(mysql_real_escape_string($_POST['about']));
    $filename = $_FILES['myfile']['name'];
    $filetype = $_FILES['myfile']['type'];
    $filesize = $_FILES['myfile']['size'];
    $filetemp = $_FILES['myfile']['tmp_name'];
    $fileerror = $_FILES['myfile']['error'];
    $ip=$_SERVER['REMOTE_ADDR'];
    if($fileerror==0){
        move_uploaded_file($filetemp,"uploads/".$filename);  
    }
    $query1=mysqli_query($connect,"INSERT INTO notifications (title,description,date,about,ip,attachment,views) VALUES ('$title','$message',CURDATE(),'$about','$ip','$filename',0)");
        if($query1){
        echo "<script>";
        echo "alert('Successfully posted')";
        echo "</script>";
          header("location:postnotifications.php");
        }else{
          //echo '<script>alert("Something went wrong");</script>';
          echo "<script>";
        echo "alert('Something went wrong');";
        echo "</script>";
        }
}

?>
