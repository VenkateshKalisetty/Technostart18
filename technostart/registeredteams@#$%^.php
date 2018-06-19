<?php
    include ('header.php');
    include 'dbconfig.php';
    $sql=mysqli_query($con,"SELECT * FROM eventdetails ORDER BY eventname");
    $membercount=mysqli_query($con,"SELECT * FROM eventdetails");  
?>
    <!-- #Events titles -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 style="font-size:32px;">Total Registered Teams in Technostart 2k18 &nbsp;<small style="color:#fff;font-weight:bold;">v5.0</small></h1>
                </div>
                <div class="col-lg-3">
                    <h1 style="font-size:52px;"><i class="fa fa-user-plus"></i>&nbsp;<?php echo mysqli_num_rows($membercount);?></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="vc_row wpb_row vc_row-fluid" style="background:;">
        <div class="wpb_column col-md-12">
            <!-- #event-sponsor -->
            <section id="event-sponsor">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Advanced Tables -->
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Team ID</th>
                                            <th>Team Lead</th>
                                            <th>Team Members</th>
                                            <th>Event Name</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Team ID</th>
                                            <th>Team Lead</th>
                                            <th>Team Members</th>
                                            <th>Event Name</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php
                                            while($row=mysqli_fetch_assoc($sql)){
                                                $teammember="";
                                                echo '<tr>
                                                        <td>'.$row['team_id'].'</td>';
                                                        $array=explode(' ',$row['team_members']);
                                                        for($i=0;$i<count($array);$i++){
                                                            $teammember = $teammember.','.$array[$i];
                                                        }
                                                        echo '<td>'.$row['team_lead'].'</td>
                                                        <td>'.$teammember.'</td>
                                                        <td>'.$row['eventname'].'</td>
                                                      </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <p style="font-size:20px;color:red;"><b>Note :</b> If you want to delete your team or any technical issues <a href="#" data-toggle="modal" data-target="#contactusModal">Click Here</a></p>
                </div>
            </section>
            <!-- /#event-sponsor -->
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
    <?php
    include ('footer.php');
?>
