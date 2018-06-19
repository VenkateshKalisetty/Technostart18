<?php
    include ('header.php');
    include('dbconfig.php');
    $notice = mysqli_query($con,"SELECT * FROM notifications ORDER BY sno DESC");
?>

    <!-- #Events titles -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 style="font-size:34px;">Notifications about Technostart 2k18 &nbsp;<small style="color:#fff;font-weight:bold;">v5.0</small></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #Notifications -->
            <section id="event-sponsor">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Advanced Tables -->
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Notice Title</th>
                                            <th>Date / Time</th>
                                            <th>About</th>
                                            <th>Views</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Notice Title</th>
                                            <th>Date / Time</th>
                                            <th>About</th>
                                            <th>Views</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=0;
                                            while($row=mysqli_fetch_assoc($notice)){
                                            $new = "";
                                                if($row['date'] == date("Y-m-d")){
                                                    $new = "<img src='assets/images/1.gif' />";
                                                }else{}
                                                echo '<tr>
                                                            <td>'.++$i.'</td>
                                                            <td><a data-toggle="modal" data-target="#noticeModal" style="cursor:pointer;"><span onclick="notice('.$row['sno'].')">'.$row['title'].$new.'</span></td>
                                                            <td>'.$row['date'].'</td>
                                                            <td>'.$row['about'].'</td>
                                                            <td>'.$row['views'].'</td>
                                                      </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Notifications -->
        </div>
    </div>
    <!-- Notice modal-->
    <div id="noticeModal" class="modal fade" role="dialog" data-backdrop="false" style="top:15%;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <p id="description"></p>
                </div>
                <div class="modal-footer">
                     <div style="position: absolute;" id="attachment"></div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Notice modal-->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        function notice(id){
            $.ajax({
                url:"pages/register.php",
                method:"post",
                data:{"noticeid":id},
                dataType:"json",
                success:function(data){
                    $("#title").html(data[0]['title']);
                    $("#description").html(data[0]['description']);
                    if((data[0]['attachment']).length>0){
                        document.getElementById('attachment').innerHTML="<b>Attachment:<b> &nbsp;<span style='color:#2c3e50;' class='label label-danger'><i class='fa fa-download'></i>&nbsp;&nbsp;&nbsp;<a style='text-decoration:none;color:white' href='admintech/uploads/"+data[0]['attachment']+"' target='_blank' download>" +data[0]['attachment']+ "</a>";
                    }else{
                        $("#attachment").html("");
                    }
                }
            });
        }
    </script>
    
    <?php
    include ('footer.php');
?>
