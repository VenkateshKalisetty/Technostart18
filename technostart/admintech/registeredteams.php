<?php
session_start();
if(isset($_SESSION['technostart']) && !empty($_SESSION['technostart'])){
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'a' || $_SESSION['role'] == 'o'){

  include 'header.php';
  include 'db.php';
  //$sql = mysqli_query($connect,"SELECT * FROM eventdetails WHERE eventname = 'IconofCSE' AND level=3");
  $sql = mysqli_query($connect,"SELECT * FROM eventdetails WHERE level != '1'");

?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    </head>
    <div class="content-wrapper" style="padding-left:1%;padding-right:1%;">
        <section class="content-header">
            <h1><center>REGISTERED TEAMS</center></h1><br>
            <p style="color:red;font-size:18px;"><b>Note :</b> Please be carefull when you are updating <b>Level</b> whether it is correct <b>Event</b> or not and When deleting team also.</p>
        </section>
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Team ID</th>
                    <th>Team Lead</th>
                    <th>Team Members</th>
                    <th>Event</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Team ID</th>
                    <th>Team Members</th>
                    <th>Event</th>
                    <th>Team Lead</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
               $delete = '<button type="button" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#deleteUserModal"><i class="fa fa-trash-o"></i></button>';
               $level = '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-arrow-right"></i></button>';
               $add = '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-correcr"></i></button>';
               $cancel = '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-cancel"></i></button>';
               while($row = mysqli_fetch_assoc($sql)){
                    echo '<tr id='.$row['team_id'].'>
                                
                                <td>'.$row['team_id'].'</td>
                                <td>'.$row['team_lead'].'</td>
                                <td>'.$row['team_members'].'</td>
                                <td>'.$row['eventname'].'</td>
                                <td id="addLevel">'.$row['level'].'<span onClick="addLevelFunction('.$row['team_id'].')" style="float:right;">'.$level.'</span></td>
                                <td><span style="float:right;" onclick="deleteTeam('.$row['team_id'].')">'.$delete.'</span></td>
                          </tr>';
                }
            ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php";?>
    <script>
        function deleteTeam(id) {
            var value = confirm("Are you sure to delete");
            if (value == true) {
                deleteTeamMembers(id);
            }
        }

        function deleteTeamMembers(id) {
            $.ajax({
                url: "ajax.php",
                method: "post",
                data: {
                    "deleteid": id
                },
                success: function(data) {
                    if (data == 2) {
                        alert("Something went wrong");
                    } else {
                        var id = "#" + data;
                        $(id).fadeOut();
                    }
                }
            });
        }

        function addLevelFunction(teamid) {
            var addLevelValue = prompt("Enter a Level");
            if (addLevelValue != null) {
                var pattern = /^[1-6]{1}/;
                if (pattern.test(addLevelValue)) {
                    addNextLevel(addLevelValue, teamid)
                } else {
                    alert("Enter level between 1 - 6");
                }
            }
        }

        function addNextLevel(addLevel, teamid) {
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: {
                    "level": addLevel,
                    "id": teamid
                },
                success: function(data) {
                    if (data == 1) {
                        window.location.reload();
                    } else {
                        alert("something went wrong");
                    }
                }
            });
        }

    </script>
    <script type="text/javascript" src="css/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="css/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="css/jszip.min.js"></script>
    <script type="text/javascript" src="css/pdfmake.min.js"></script>
    <script type="text/javascript" src="css/vfs_fonts.js"></script>
    <script type="text/javascript" src="css/buttons.html5.min.js"></script>
    <script type="text/javascript" src="css/buttons.print.min.js"></script>
    <script type="text/javascript" src="css/buttons.colVis.min.js"></script>

    <?php
    }else{
        header('Location:../index.php');
        }
    }
?>
