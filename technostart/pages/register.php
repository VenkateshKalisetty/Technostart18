<?php
include '../dbconfig.php';
session_start();
    if(isset($_POST['studentid']) && isset($_POST['studentpasswd'])){
        $id = htmlentities(mysql_real_escape_string($_POST['studentid']));
        $passwd = htmlentities(mysql_real_escape_string(md5($_POST['studentpasswd'])));
        $sql = mysqli_query($con,"SELECT role FROM users WHERE id='$id' AND passwd='$passwd' AND payment_status=1 ");
        $role = mysqli_fetch_array($sql);
        if(mysqli_num_rows($sql)==1){
            $_SESSION['technostart']=$id;
            $_SESSION['role'] = $role[0];
            echo '1';
        }
        else{
            echo '2';
        }
    }

    if(isset($_POST['new_team']) && isset($_POST['event_name'])){
        $eventsArray = ['Hackathon','CodeMarathon','TechnicalQuiz','TemplateDesign','AutonomousRobotics','ArtMela','2048','Dubsmash','MannualRobotics','DirectaSpoof','Photography','MadAds','StandupComedy'];
        
        $TEAM = htmlentities(mysql_real_escape_string($_POST['new_team'])); //Todo IMP check for mysql injection
        $EVENT_NAME = htmlentities(mysql_real_escape_string($_POST['event_name']));  //TOdo IMP check for mysql injection
        $TEAM_ARRAY = explode('~',$TEAM);
        if(in_array($EVENT_NAME,$eventsArray)){   
        }else{
            die("1");
            //die("This Event not belongs to Technostart 2k18");
        }
       //Todo Write or die() function for every sqli query for better debugging
       //get all ready registered ids
       $alreadyRegIds = mysqli_query($con,"SELECT team_members FROM eventdetails WHERE eventname='$EVENT_NAME'");
        $alreadyRegIds_array=Array();
        $team="";
        $j=0;
        while($row=mysqli_fetch_array($alreadyRegIds)){
            //$alreadyRegIds_array[]=$row['team_members'];
            $alreadyRegIds_array = array_merge($alreadyRegIds_array,explode(',',$row['team_members']));
        }
       //$alreadyRegIds_str = $alreadyRegIds['team_members']; //will be used later 
       //$alreadyRegIds_array = explode('~',str_replace(',','~',$alreadyRegIds_str)); //replacing , with ~ and converting the resulting string into array
        foreach($TEAM_ARRAY as $ID){
          //duplicates checking
          if(in_array($ID,$alreadyRegIds_array)){
             //die here no need to go further
              die($ID." 2");
              //die($ID." Already Registered.");
          }
          //payment status checking 
           $check_count=mysqli_fetch_array(mysqli_query($con,"SELECT count(id) FROM users WHERE id='$ID'"));
           if($check_count[0] == 0){
               die("5");
           }else{
                $check = mysqli_num_rows(mysqli_query($con,"SELECT id FROM users WHERE id='$ID'  AND payment_status=0"));//Todo: write or die fucntion here
               if($check>0){
                 //die here no need to go further
                  die($ID." 3");
                  //die($ID." Not yet completed the payment.");
              }   
           }
       }

       //if no problem occuers with ids of the current team
       //$updatedTeamList = $alreadyRegIds_str.','.$TEAM;
        $ip = $_SERVER['REMOTE_ADDR'];
        $regBy = $_SESSION['technostart'];
        $teamMembers = $TEAM_ARRAY[0];
        $i=0;
        for($i = 1; $i < count($TEAM_ARRAY); $i++){
            $teamMembers =$teamMembers.",".$TEAM_ARRAY[$i];
        }
       //$update = mysqli_query($con,"UPDATE eventdetails set team_members where eventname='$EVENT_NAME'"); //Todo:write or die here
        $insert=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,registerby,ip) VALUES ('$TEAM_ARRAY[0]', '$teamMembers', '$EVENT_NAME', '$regBy', '$ip')");
       if($insert){
          echo "4";
       }
    } 
    if(isset($_POST['noticeid'])){
        $id=htmlentities(mysql_real_escape_string($_POST['noticeid']));
        $data=Array();
        $sql=mysqli_query($con,"SELECT * FROM notifications WHERE sno='$id'");
        while($row=mysqli_fetch_assoc($sql)){
            $view=$row['views'];
            $data[]=$row;
        }
        $views=$view+1;
        mysqli_query($con,"UPDATE notifications set views='$views' WHERE sno='$id'");
        echo json_encode($data);
    }
    
    if(isset($_POST['sid']) && isset($_POST['qctf']) && isset($_POST['flag'])){
		$sid = htmlentities(mysql_real_escape_string($_POST['sid']));
		$qctf = htmlentities(mysql_real_escape_string($_POST['qctf']));
		$flag = htmlentities(mysql_real_escape_string($_POST['flag']));
		echo $sid.$qctf.$flag;
		
		//$sql2 = mysqli_query($con, "UPDATE ctf SET ".$qctf." = '$flag' WHERE id = '$sid'") or die(mysqli_error($con));
		/*if($sql2){
			echo '1';
		}else{
			echo '2';
		}*/
	}
?>
