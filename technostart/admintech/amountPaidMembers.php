<?php
session_start();
if(isset($_SESSION['technostart']) && !empty($_SESSION['technostart'])){
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'a' || $_SESSION['role'] == 'p'){
    
include 'header.php';
include "db.php";
$sql = mysqli_query($connect, "SELECT * FROM users WHERE batch = 2013 OR batch = 2014 OR batch = 2015 ORDER BY payment_status ");
?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.bootstrap.min.css">

    <div class="content-wrapper" style="padding-left:1%;padding-right:1%;">
        <section class="content-header">
            <h1>
                <center>PAYMENT DETAILS</center>
            </h1>

        </section>
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Batch</th>
                    <th>Class</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Batch</th>
                    <th>Class</th>
                    <th>Payment</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $i=0;
                $button='<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-thumbs-down"></i>&nbsp;&nbsp;Not Paid</button>';
                while($row=mysqli_fetch_assoc($sql)){
                        echo '<tr>
                                <td>'.++$i.'</td>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['gender'].'</td>
                                <td>'.$row['batch'].'</td>
                                <td>'.$row['cls'].'</td>
                                <td>';
                                if($row['payment_status']==0){?>
                    <span onclick="notpaidpayment('<?php echo $row['id']; ?>')"><?php echo $button.'</span></td>
                    </tr>'; } else{ echo '<span><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;Amount Paid</span></td>
                    </tr>'; } } ?>
            </tbody>
        </table>

    </div>

    <?php include "footer.php";?>

    <script type="text/javascript" src="css/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="css/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="css/jszip.min.js"></script>
    <script type="text/javascript" src="css/pdfmake.min.js"></script>
    <script type="text/javascript" src="css/vfs_fonts.js"></script>
    <script type="text/javascript" src="css/buttons.html5.min.js"></script>
    <script type="text/javascript" src="css/buttons.print.min.js"></script>
    <script type="text/javascript" src="css/buttons.colVis.min.js"></script>

    <script>
        function notpaidpayment(id) {
            $.ajax({
                url : "ajax.php",
                method : "post",
                data : {"notpaidid" : id},
                success: function(data) {
                    if (data == 1) {
                        alert("Payment Successfully Done.")
                        window.location.reload();
                        //window.location.reload();
                    } else {
                        alert("Something wrong.");
                    }
                }
            });
        }

    </script>
<?php 
    }else{
            header('Location:../index.php');
        }
    }
?>
