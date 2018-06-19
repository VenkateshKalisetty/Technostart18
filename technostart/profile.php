<?php
session_start();
if(isset($_SESSION['technostart']) && !empty($_SESSION['technostart'])){
    include ('header1.php');
    include 'dbconfig.php';
    $id = $_SESSION['technostart'];
    $sql = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
    $sql1 = mysqli_query($con,"SELECT * FROM eventdetails");
?>

    <!-- #Events titles -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 style="font-size:34px;">Profile in Technostart 2k18 &nbsp;<small style="color:#fff;font-weight:bold;">v5.0</small></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #Profile -->
            <section id="event-sponsor">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#registeredEvents" data-toggle="tab"><b>Registered Events</b></a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab"><b>Profile</b></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="registeredEvents"><br>
                                    <h4>Your Registered Events in Technostart-2k18 v5.0</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Team Id</th>
                                                    <th>Team lead</th>
                                                    <th>Team Members</th>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    while($row=mysqli_fetch_assoc($sql1)){
                                                        $team = $row['team_members'];
                                                        $array = explode(',',$team);
                                                        $teammember = "";
                                                        if(in_array($id, $array)){
                                                            echo '<tr>
                                                                    <td>'.$row['team_id'].'</td>
                                                                    <td>'.$row['team_lead'].'</td>';
                                                                    $teammember=$array[0];
                                                                    for($i=1; $i<count($array); $i++){
                                                                            $teammember = $teammember.','.$array[$i];
                                                                    }
                                                                    echo '<td>'.$teammember.'</td>
                                                                    <td>'.$row['eventname'].'</td>
                                                                  </tr>'; 
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile"><br>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="table-responsive">
                                            <table class="table" style="text-align:center;">
                                                <tbody>
                                                    <?php
                                                        while($row=mysqli_fetch_assoc($sql)){
                                                                echo '<tr class="success">
                                                                <td>ID No</td>
                                                                <td>'.$row['id'].'</td>
                                                                </tr>
                                                                <tr class="info">
                                                                    <td>Name</td>
                                                                    <td>'.$row['name'].'</td>

                                                                </tr>
                                                                <tr class="warning">
                                                                    <td>Batch</td>
                                                                    <td>'.$row['batch'].'</td>
                                                                </tr>
                                                                <tr class="danger">
                                                                    <td>Class</td>
                                                                    <td>'.$row['cls'].'</td>
                                                                </tr>';   
                                                        }
                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Profile -->
        </div>
    </div>

<?php
    include ('footer.php');
}else{
    header("Location:index.php");
    }
?>
