<?php
    include "dbconfig.php";
    $todayVisitors = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(count) FROM visitors"));
?>
<div class="vc_row wpb_row vc_row-fluid" style="background:#F6F9F9;">
    <div class="wpb_column col-md-12">
        <!-- event-sponsor -->
        <section id="event-sponsor">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h1>ALL EVENTS ORGANIZED BY</h1>
                            <p>We the <b>batch of 2k12</b> are feeling very delightful to organize the great <b>TECHNOSTART - 2k18 v5.0</b> event under the guidelines of our faculty..! It gives us immense pleasure to explore your excellence by innovative events. Excepting your gracious and enthusiastic participation to continue the legacy of our CSE family...!!!</p>
                            <p style="text-align:center;font-weight:bold;font-size:18px;">- With lots of well wishes from team Technostart 2k18 v5.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /#event-sponsor -->
    </div>
</div>
<!--div class="vc_row wpb_row vc_row-fluid" style="background:#F6F9F9;">
    <div class="wpb_column col-md-12">
        <!-- #subscribe-newsletter 
        <section id="subscribe-newsletter">
            <div class="container">
                <div class="gradient-overlay">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                            <div class="text-box col-lg-6 col-md-6 col-sm-6">
                                <span>Subcribe  </span>Our News
                            </div>
                            <div class="input-box col-lg-6 col-md-6 col-sm-6">
                                
                                    <input type="text"  id="newsletter_input2" placeholder="Enter Email">
                                    <button id="submit2"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div-->
<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div id="template_path_abous_us-2" class="col-lg-6 col-md-6 col-sm-6 footer-widget widget_template_path_abous_us">
                <!-- .footer-widget -->
                <div class="about-widget">
                    <img src="assets/images/logo.png" alt="Footer Logo">
                    <p>Technostart v5.0 is a forte to change your million dollar dreams <br>into reality with the motive of encouraging the innovative Technocrat's of CSE.</p>
                    <div class="social-icons">
                        <a title="Face Book" href="http://www.facebook.com/Technostart-2K18-143848059761043"><span class="fa fa-facebook"></span></a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
            <div id="text-2" class="col-lg-3 col-md-3 col-sm-6 footer-widget widget_text">
                <h3>QUICK LINKS</h3>
                <div class="textwidget">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-right"></i> EVENTS</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> NOTIFICATIONS</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> TECH TALKS</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> REGISTERED TEAMS</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contactusModal"><i class="fa fa-angle-right"></i> CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div id="text-2" class="col-lg-3 col-md-3 col-sm-6 footer-widget widget_text">
                <h3>Visitors</h3>
                <h1 style="color:#FFFFFF;font-weight:bold;"><?php echo $todayVisitors[0];?></h1>
                <h5 style="color:#ADD8E6;">Till now...!</h5>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->
<!-- #bottom-bar -->
<section id="bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-left">
                <p style="text-transform:none;">© 2018&nbsp;&nbsp;&nbsp;<a href="http://10.11.4.99/cse" target="_blank">Dept of Computer Science and Engineering</a></p>
            </div>
            <div class="col-lg-6 text-right">
                <p style="text-transform:none;color:#FFFFFF;">Designed and Developed by Batch 2012 @ CSE</p>
            </div>
        </div>
    </div>
</section>
<!-- /#bottom-bar -->
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src="assets/js/jquery.dataTables.min.js"></script>
<script type='text/javascript' src="assets/js/dataTables.bootstrap.min.js"></script>
<!--script type='text/javascript' src='assets/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/resizable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/draggable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/button.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/jquery/ui/dialog.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/js/wpdialog.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/countdown.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.easing.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.fancybox.packd47a.js?ver=4.4.14'></script-->
<script type='text/javascript' src='assets/js/jquery.mixitup.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.bxslider.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/owl.carousel.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.appeard47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.countTod47a.js?ver=4.4.14'></script>
<!--script type='text/javascript' src='assets/js/circle-progressd47a.js?ver=4.4.14'></script-->
<script type='text/javascript' src='assets/js/wowd47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.navd47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/jquery.scrollTod47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/customd47a.js?ver=4.4.14'></script>
<!--script type='text/javascript' src='assets/js/comment-reply.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/wp-embed.mind47a.js?ver=4.4.14'></script>
<script type='text/javascript' src='assets/js/js_composer_front.minc422.js?ver=4.11.1'></script-->
<!-- Login modal-->

<div id="loginModal" class="modal fade" role="dialog" data-backdrop="false" style="top:20%;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login to Register Events : </h4>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="stuid" class="control-label">ID number :</label>
                        <input type="text" class="form-control" id="stuid" placeholder="Enter your ID number" maxlength="7" required>
                    </div>
                    <div class="form-group">
                        <label for="passwd" class="control-label">CSE Password :</label>
                        <input type="password" class="form-control" id="passwd" placeholder="Enter your CSE site password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="login">Submit</button>
                </div>
        </div>
    </div>
</div>
<!-- //Login modal-->
<!-- Contactus modal-->
<div id="contactusModal" class="modal fade" role="dialog" data-backdrop="false" style="top:15%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">CONTACT US </h4>
            </div>
            <div class="modal-body">
                <p>For any technical releated problems like Login issues, Event Registration, etc..., <br><b>Contact Details :-</b><br>Venkatesh Kalisetty (N120034),<br>E4CSE01 @ ST06 || SF09,<br>Email : venky12034@gmail.com,<br>Contact : +91-8500125473</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="cricket1" class="modal fade" role="dialog" data-backdrop="false" style="top:15%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">About Cse Premier league.</h4>
            </div>
            <div class="modal-body">
                <p>This is to inform that Cricket page has been updated. Please fill your details and make sure that you follow all rules.<br>No false registrations will be entertained. Be genuine and make this event a grand success.<br><b>Hurry UP. Link will be online upto 12:30 only.</b><br><a href="http://10.11.4.99/technostart/cricket.php">Register Here</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $("#login").click(function(){
            $id=$("#stuid").val();
            $password=$("#passwd").val();
            $.ajax({
               url:"pages/register.php",
               type:"POST",
                data:{"studentid":$id,"studentpasswd":$password},
                success:function(data){
                    if(data==1){
                        window.location.href = 'index.php';   
                    }
                    else{
                        toastr.error('Credentials incorrect or<br>Maybe Payment not done.', 'Inconceivable!', {timeOut: 5000});
                    }
                }
            });
        });
    });
    $(window).load(function(){        
       $('#cricket').modal('show');
    }); 
</script>
<!-- //Contactus modal-->

</body>

</html>
