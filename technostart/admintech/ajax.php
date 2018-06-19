<?php 
	include 'db.php';
	session_start();
	if(isset($_POST['notpaidid'])){
		$id = htmlentities(mysql_real_escape_string($_POST['notpaidid']));
		$ip = $_SERVER['REMOTE_ADDR'];
		$recieved = $_SESSION['technostart'];
		$sql = mysqli_query($connect,"UPDATE users SET payment_status = 1, payment_time = CURTIME(), ip = '$ip' ,payment_recieved = '$recieved' WHERE id='$id'");
		if($sql){
			echo '1';
		}
		else{
			echo '2';
		}
	}
    if(isset($_POST['deleteid'])){
		$id = htmlentities(mysql_real_escape_string($_POST['deleteid']));
		$sql = mysqli_query($connect,"DELETE FROM eventdetails WHERE team_id='$id'");
		if($sql){
			echo $id;
		}
		else{
			echo '2';
		}
	}
	if(isset($_POST['level']) && isset($_POST['id'])){
		$level = htmlentities(mysql_real_escape_string($_POST['level']));
		$id = $_POST['id'];
		$sql = mysqli_query($connect, "UPDATE eventdetails set level = '$level' WHERE team_id = '$id'");
		if($sql){
			echo '1';
		}else{
			echo '2';
		}
	}
?>