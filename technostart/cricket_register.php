<?php 
    include 'dbconfig.php';
    //session_start();
    //$id = $_SESSION['technostart'];
    //$filename = $_FILES['myfile']['name'];
    //$filetype = $_FILES['myfile']['type'];
    //$filesize = $_FILES['myfile']['size'];
    //$filetemp = $_FILES['myfile']['tmp_name'];
    //$fileerror = $_FILES['myfile']['error'];
    $ip=$_SERVER['REMOTE_ADDR'];
    //$details = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
    //$row = mysqli_fetch_array($details);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $baseprice = $_POST['baseprice'];
    $playdescription = $_POST['playdescription'];
    $category = $_POST['category'];
    $bowlrate = $_POST['bowlrate'];
    $batrate = $_POST['batrate'];

    //echo $name.'_'.$batch.'_'.$baseprice.'_'.$playdescription.'_'.$category.'_'.$bowlrate.'_'.$batrate;

    //if($fileerror==0){
        //move_uploaded_file($filetemp,"cricketpics/".$id.'@'.$filename);  
    //}
    
    //$profile = $id.'_'.$filename;

    $sql = "INSERT INTO players (id,name,batch,baseprice,playdescription,category,bowlrate,batrate,ip)values('$id','$name','$batch','$baseprice','$playdescription','$category','$bowlrate','$batrate','$ip')";
    $query = mysqli_query($con, $sql)or die(mysqli_error($con));
    if($query){
    echo "<script>";
		echo "alert('Submitted Successfully')";
		echo "</script>";
     echo "<script>window.location='index.php';</script>";
    }else{
		echo "<script>";
		echo "alert('Sorry try again')";
		echo "</script>";
	}
?>
