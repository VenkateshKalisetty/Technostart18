<?php
include '../dbconfig.php';
session_start();
    if(isset($_POST['studentid']) && isset($_POST['studentpasswd'])){
        $id=$_POST['studentid'];
        $passwd=md5($_POST['studentpasswd']);
        $sql=mysqli_query($con,"SELECT * FROM users WHERE id='$id' AND passwd='$passwd' AND payment_status=1 ");
        if(mysqli_num_rows($sql)==1){
            $_SESSION['idnumber']=$id;
            echo '1';
        }
        else{
            echo '2';
        }
    }
    if(isset($_GET['teamlead']) && isset($_GET['studentno1']) && isset($_GET['studentno2']) && isset($_GET['studentno3']) &&  isset($_GET['memberoption'])){
        $teamlead=$_GET['teamlead'];
        $student1=$_GET['studentno1'];
        $student2=$_GET['studentno2'];
        $student3=$_GET['studentno3'];
        $option=$_GET['memberoption'];
        if($option==1){
                $sql1=mysqli_query($con,"SELECT id FROM users WHERE id='$teamlead'  AND payment_status=1"); 
                if(mysqli_num_rows($sql1)>0){
                       $sql5=mysqli_query($con,"SELECT team_members FROM eventdetails WHERE eventname='Hackthon'");
                        $data=Array();
                        while($row=mysqli_fetch_assoc($sql5)){
                            array_push($data,$row['team_members']);
                        }
                        if(count($data)>0){
                            for($i=0;$i<count($data);$i++){
                                   $array=explode(" ",$data[$i]);
                                        if(in_array($teamlead,$array)){
                                            echo "you are registered already";   
                                        }else{
                                            $ip=$_SERVER['REMOTE_ADDR'];
                                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead','Hackthon','$ip')");
                                             if($sql6){
                                                 echo '1';
                                             }
                                        }
                                }        
                         }
                         else{
                             $ip=$_SERVER['REMOTE_ADDR'];
                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead','Hackthon','$ip')");
                             if($sql6){
                                 echo '1';
                             }
                         }
                }else{
                    echo "Please pay amount";
                }
        }
        if($option==2){
            $teamlead1=$teamlead.' '.$student1;
             $sql1=mysqli_query($con,"SELECT id FROM users WHERE id='$teamlead'  AND payment_status=1");
            $sql2=mysqli_query($con,"SELECT id FROM users WHERE id='$student1'  AND payment_status=1");   
            if(mysqli_num_rows($sql1)>0 && mysqli_num_rows($sql2)>0){
                 $sql5=mysqli_query($con,"SELECT team_members FROM eventdetails WHERE eventname='Hackthon'");
                        $data=Array();
                        while($row=mysqli_fetch_assoc($sql5)){
                            array_push($data,$row['team_members']);
                        }
                        if(count($data)>0){
                            for($i=0;$i<count($data);$i++){
                                   $array=explode(" ",$data[$i]);
                                        if(in_array($teamlead,$array)){
                                            echo "one of you registered already";   
                                        }else{
                                            $ip=$_SERVER['REMOTE_ADDR'];
                                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead1','Hackthon','$ip')");
                                             if($sql6){
                                                 echo '1';
                                             }
                                        }
                                }        
                         }
                         else{
                             $ip=$_SERVER['REMOTE_ADDR'];
                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead1','Hackthon','$ip')");
                             if($sql6){
                                 echo '1';
                             }
                         }   
            }else{
                echo "Please pay amount";
            }
        }
        if($option==3){
            $teamlead1=$teamlead.' '.$student1.' '.$student2;
            $sql1=mysqli_query($con,"SELECT id FROM users WHERE id='$teamlead'  AND payment_status=1");
            $sql2=mysqli_query($con,"SELECT id FROM users WHERE id='$student1'  AND payment_status=1");
            $sql3=mysqli_query($con,"SELECT id FROM users WHERE id='$student2'  AND payment_status=1");
            if(mysqli_num_rows($sql1)>0 && mysqli_num_rows($sql2)>0 && mysqli_num_rows($sql3)>0){
                     $sql5=mysqli_query($con,"SELECT team_members FROM eventdetails WHERE eventname='Hackthon'");
                        $data=Array();
                        while($row=mysqli_fetch_assoc($sql5)){
                            array_push($data,$row['team_members']);
                        }
                        if(count($data)>0){
                            for($i=0;$i<count($data);$i++){
                                   $array=explode(" ",$data[$i]);
                                        if(in_array($teamlead,$array)){
                                            echo "one of you registered already";   
                                        }else{
                                            $ip=$_SERVER['REMOTE_ADDR'];
                                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead1','Hackthon','$ip')");
                                             if($sql6){
                                                 echo '1';
                                             }
                                        }
                                }        
                         }
                         else{
                             $ip=$_SERVER['REMOTE_ADDR'];
                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead1','Hackthon','$ip')");
                             if($sql6){
                                 echo '1';
                             }
                         }   
            }else{
                echo "Please pay amount";
            }
        }
        if($option==4){
            $teamlead1=$teamlead.' '.$student1.' '.$student2.' '.$student3;
            $sql1=mysqli_query($con,"SELECT id FROM users WHERE id='$teamlead'  AND payment_status=1");
            $sql2=mysqli_query($con,"SELECT id FROM users WHERE id='$student1'  AND payment_status=1");
            $sql3=mysqli_query($con,"SELECT id FROM users WHERE id='$student2'  AND payment_status=1");
            $sql4=mysqli_query($con,"SELECT id FROM users WHERE id='$student3'  AND payment_status=1");
            if(mysqli_num_rows($sql1)>0 && mysqli_num_rows($sql2)>0 && mysqli_num_rows($sql3)>0 && mysqli_num_rows($sql4)>0){
                     $sql5=mysqli_query($con,"SELECT team_members FROM eventdetails WHERE eventname='Hackthon'");
                        $data=Array();
                        while($row=mysqli_fetch_assoc($sql5)){
                            array_push($data,$row['team_members']);
                        }
                        if(count($data)>0){
                            for($i=0;$i<count($data);$i++){
                                   $array=explode(" ",$data[$i]);
                                        if(in_array($teamlead,$array)){
                                            echo "one of you registered already";   
                                        }else{
                                            $ip=$_SERVER['REMOTE_ADDR'];
                                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead1','Hackthon','$ip')");
                                             if($sql6){
                                                 echo '1';
                                             }
                                        }
                                }        
                         }
                         else{
                             $ip=$_SERVER['REMOTE_ADDR'];
                             $sql6=mysqli_query($con,"INSERT INTO eventdetails(team_lead,team_members,eventname,ip) VALUES ('$teamlead','$teamlead1','Hackthon','$ip')");
                             if($sql6){
                                 echo '1';
                             }
                         }   
            }else{
                echo "Please pay amount";
            }
        }
    }
?>