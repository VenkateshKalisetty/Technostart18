<?php
session_start();
if(isset($_SESSION['technostart']) && !empty($_SESSION['technostart'])){
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'a'|| $_SESSION['role'] == 'p' || $_SESSION['role'] == 'o'){

include 'db.php';
include 'header.php';

$sql1 = mysqli_query($connect, "SELECT count(id) FROM users WHERE batch = 2013 AND payment_status = 1 ");
$sql2 = mysqli_query($connect, "SELECT count(id) FROM users WHERE batch = 2014 AND payment_status = 1 ");
$sql3 = mysqli_query($connect, "SELECT count(id) FROM users WHERE batch = 2015 AND payment_status = 1 ");
$sql4 = mysqli_query($connect, "SELECT count(id) FROM users WHERE batch = 2013 AND payment_status = 0 ");
$sql5 = mysqli_query($connect, "SELECT count(id) FROM users WHERE batch = 2014 AND payment_status = 0 ");
$sql6 = mysqli_query($connect, "SELECT count(id) FROM users WHERE batch = 2015 AND payment_status = 0 ");
$sql7 = mysqli_query($connect, "SELECT count(*) FROM eventdetails");
$sql8 = mysqli_fetch_array(mysqli_query($connect, "SELECT SUM(count) FROM visitors"));
        
$sql9 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'IconofCSE'"));
$sql10 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Hackathon'"));
$sql11 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'CodeMarathon'"));
$sql12 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'BlindCoding'"));
$sql13 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'TemplateDesign'"));
$sql14 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'TechnicalQuiz'"));
$sql15 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'TheThreeMusketeers'"));
$sql16 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'MotoGP'"));
$sql17 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'SelfieHunt'"));
$sql18 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'AutonomousRobotics'"));
$sql19 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'TreasureHunt'"));
$sql20 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'ArtMela'"));
$sql21 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'ReviewaGadget'"));
$sql22 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Quiz'"));
$sql23 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'OratorofCSE'"));
$sql24 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Dubsmash'"));
$sql25 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Cricket'"));
$sql26 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Topcoder'"));
$sql27 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'DevelopersDate'"));
$sql28 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'ReverseEngineering'"));
$sql29 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'AlgoLogics'"));
$sql30 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'CapturetheFlag'"));
$sql31 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Crawler'"));
$sql32 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'MannualRobotics'"));
$sql33 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'DirectaSpoof'"));
$sql34 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'SenateofCSE'"));
$sql35 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'CounterStrike'"));
$sql36 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Photography'"));
$sql37 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'MadAds'"));
$sql38 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'StandupComedy'"));
$sql39 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'OMGWhattheFUN'"));
$sql40 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'MusicMasti'"));
$sql41 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Blur'"));
$sql42 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = '2048'"));
$sql43 = mysqli_num_rows(mysqli_query($connect, "SELECT eventname FROM eventdetails WHERE eventname = 'Batminton'"));


$e3RegDone = mysqli_fetch_array($sql1);
$e2RegDone = mysqli_fetch_array($sql2);
$e1RegDone = mysqli_fetch_array($sql3);
$e3RegNotDone = mysqli_fetch_array($sql4);
$e2RegNotDone = mysqli_fetch_array($sql5);
$e1RegNotDone = mysqli_fetch_array($sql6);
$totalRegTeams = mysqli_fetch_array($sql7);
$totalRegDone = $e3RegDone[0] + $e2RegDone[0] + $e1RegDone[0];
$totalRegNotDone = $e3RegNotDone[0] + $e2RegNotDone[0] + $e1RegNotDone[0];

?>

    <head>
        <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    </head>
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div id="page-wrapper">
                    <div class="graphs">
                        <div class="col_3">
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-th-large" style="color:#8BC34A"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">35</h5>
                                        <div class="grow" style="height:30px;width:130px;margin-left:-13%;padding-top:6px;background-color:#8BC34A;">
                                            <p style="font-size:15px;font-weight:bold;">Total Events</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-users" style="color: #00BCD4;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $totalRegDone; ?>
                                        </h5>
                                        <div class="grow grow3" style="margin-left:-15%;width:140px;height:42px;background-color:#00BCD4 ;">
                                            <p style="font-size:15px;font-weight: bold;margin-top:-4%;">Registered Students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget">
                                <div class="r3_counter_box" style="height:170%;width:90%;">
                                    <i class="fa fa-users" style="color:#d9534f;;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $totalRegNotDone; ?>
                                        </h5>
                                        <div class="grow grow2" style="margin-left:-15%;background:#d9534f;width:150px;height:42px;">
                                            <p style="font-weight: bold;font-size:15px;margin-top:-4%;">Not Regestered Students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-users" style="color:#00BCD4;font-size:70px;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $totalRegTeams[0]; ?>
                                        </h5>
                                        <div class="grow grow3" style="margin-left:-12%;width:140px;height:50px;background-color: #00BCD4;">
                                            <p style="font-size:15px;font-weight: bold;">Total Teams Registered</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <br/><br/>
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-thumbs-up" style="color:#00BCD4"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $e1RegDone[0]; ?>
                                        </h5>
                                        <div class="grow grow1" style="background-color:#00BCD4;margin-left:-25%;width:180px;height:42px;">
                                            <p style="font-size:15px;font-weight: bold;">E1 Registerations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-thumbs-up" style="color: #808000;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $e2RegDone[0]; ?>
                                        </h5>
                                        <div class="grow grow3" style="margin-left:-25%;width:180px;height:42px;background-color: #808000;">
                                            <p style="font-size:15px;font-weight: bold;">E2 Registerations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget">
                                <div class="r3_counter_box" style="height:170%;width:90%;">
                                    <i class="fa fa-thumbs-up" style="color:#F44336;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $e3RegDone[0]; ?>
                                        </h5>
                                        <div class="grow grow2" style="margin-left:-25%;background:#F44336;width:180px;height:42px;">
                                            <p style="font-weight: bold;font-size:15px;">E3 Registerations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-rupee" style="color:#00BCD4;font-size:70px;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $totalRegDone * 20; ?>
                                        </h5>
                                        <div class="grow grow3" style="margin-left:-25%;width:200px;height:42px;background-color: #00BCD4;">
                                            <p style="font-size:15px;font-weight: bold;">Payment Amount</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <br/><br/>
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-thumbs-down" style="color:#00BCD4"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $e1RegNotDone[0]; ?>
                                        </h5>
                                        <div class="grow grow1" style="background-color:#00BCD4;margin-left:-25%;width:180px;height:42px;">
                                            <p style="font-size:15px;font-weight: bold;">E1 Registerations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-thumbs-down" style="color: #808000;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $e2RegNotDone[0]; ?>
                                        </h5>
                                        <div class="grow grow3" style="margin-left:-25%;width:180px;height:42px;background-color: #808000;">
                                            <p style="font-size:15px;font-weight: bold;">E2 Registerations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 widget">
                                <div class="r3_counter_box" style="height:170%;width:90%;">
                                    <i class="fa fa-thumbs-down" style="color:#F44336;"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $e3RegNotDone[0]; ?>
                                        </h5>
                                        <div class="grow grow2" style="margin-left:-25%;background:#F44336;width:180px;height:42px;">
                                            <p style="font-weight: bold;font-size:15px;">E3 Registerations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box" style="height:170%;">
                                    <i class="fa fa-eye" style="color:#CD8500"></i>
                                    <div class="total-donation-stats">
                                        <h5 class="count">
                                            <?php echo $sql8[0];?>
                                        </h5>
                                        <div class="grow grow1" style="background-color:#CD8500;margin-left:-18%;width:140px;">
                                            <p style="font-size:15px;font-weight: bold;"><span style="color:white;font-size:15px;font-weight: bold;"> Vistors</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <br/><br/>
                            <div class="container">
                                <div class="wpb_column col-md-10">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="font-size:20px;">
                                            <thead>
                                                <tr>
                                                    <th>Event Name</th>
                                                    <th>Registered Teams</th>
                                                    <th>Event Name</th>
                                                    <th>Registered Teams</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Icon of CSE</td>
                                                    <td><?php echo $sql9; ?></td>
                                                    <td>Topcoder</td>
                                                    <td><?php echo $sql26; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Hackathon</td>
                                                    <td><?php echo $sql10; ?></td>
                                                    <td>Developers Date</td>
                                                    <td><?php echo $sql27; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Code Marathon</td>
                                                    <td><?php echo $sql11; ?></td>
                                                    <td>Reverse Engineering</td>
                                                    <td><?php echo $sql28; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Blind Coding</td>
                                                    <td><?php echo $sql12; ?></td>
                                                    <td>Algo Logics</td>
                                                    <td><?php echo $sql29; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Template Design</td>
                                                    <td><?php echo $sql13; ?></td>
                                                    <td>Capture the Flag</td>
                                                    <td><?php echo $sql30; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Technical Quiz</td>
                                                    <td><?php echo $sql14; ?></td>
                                                    <td>Crawler</td>
                                                    <td><?php echo $sql31; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>The Three Musketeers</td>
                                                    <td><?php echo $sql15; ?></td>
                                                    <td>Mannual Robotics</td>
                                                    <td><?php echo $sql32; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>MotoGP</td>
                                                    <td><?php echo $sql16; ?></td>
                                                    <td>Direct a Spoof</td>
                                                    <td><?php echo $sql33; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Selfie Hunt</td>
                                                    <td><?php echo $sql17; ?></td>
                                                    <td>Senate of CSE</td>
                                                    <td><?php echo $sql34; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Autonomous Robotics</td>
                                                    <td><?php echo $sql18; ?></td>
                                                    <td>Counter Strike</td>
                                                    <td><?php echo $sql35; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Treasure Hunt</td>
                                                    <td><?php echo $sql19; ?></td>
                                                    <td>Photography</td>
                                                    <td><?php echo $sql36; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>ArtMela</td>
                                                    <td><?php echo $sql20; ?></td>
                                                    <td>Mad Ads</td>
                                                    <td><?php echo $sql37; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Review a Gadget</td>
                                                    <td><?php echo $sql21; ?></td>
                                                    <td>Standup Comedy</td>
                                                    <td><?php echo $sql38; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Quiz</td>
                                                    <td><?php echo $sql22; ?></td>
                                                    <td>OMG! What the F**</td>
                                                    <td><?php echo $sql39; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Orator of CSE</td>
                                                    <td><?php echo $sql23; ?></td>
                                                    <td>Music Masti</td>
                                                    <td><?php echo $sql40; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dubsmash</td>
                                                    <td><?php echo $sql24; ?></td>
                                                    <td>Blur</td>
                                                    <td><?php echo $sql41; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Cricket</td>
                                                    <td><?php echo $sql25; ?></td>
                                                    <td>2048</td>
                                                    <td><?php echo $sql42; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Batminton</td>
                                                    <td><?php echo $sql43; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- #Table end -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <?php
 	include 'footer.php';
            }else{
                header('Location:../index.php');
        }
    }
 ?>
