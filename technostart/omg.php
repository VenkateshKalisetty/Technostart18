<?php
	include ('header.php');
 include ('dbconfig.php');
 $sql39 = mysqli_num_rows(mysqli_query($con, "SELECT eventname FROM eventdetails WHERE eventname = 'OMGWhattheFUN'"));
 $sqlResult = mysqli_query($con, "SELECT * FROM eventdetails WHERE eventname = 'OMGWhattheFUN' AND level = 2");
?>
    <!-- #Event title -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>OMG! What the F**</h1>
                </div>
                <div class="col-lg-4">
                    <h1 style="font-size:28px;">Registered Teams : <?php echo $sql39; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #Description -->
            <section id="service-text">
                <div class="container">
                    <div class="row text-row">
                        <div class="col-lg-6 col-md-6">
                            <img width="560" height="348" src="assets/images/event/omg.jpg" class="wow slideInLeft wp-post-image" alt="about-banner" />
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>OMG! What the F** Description : </h3>
                            <p>Are you good in making fun??Are you expert in cracking auto puches?? Then come and blast the arena......</p>
                            <p>Most of them will stress free in watching comedy shows. And will apply their experience on their friends in teasing and make them irritate.You, the B.Tech students are awesome in cracking counters, especially <b>Backbenchers</b>, blasts marvellous clicks on factulties. And the whole thing is ,how funny you are?So, will see how many of you follows the newton’s third(3rd) law.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Description -->
        </div>
    </div>
    
    <!-- #Selected List Area -->
	<div class="vc_row wpb_row vc_row-fluid">
		<div class="wpb_column col-md-12">
			<section id="why-choose-us">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h1>Selected List Area</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-6 col-sm-6">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
                      <th>S.No</th>
											<th>Team ID</th>
											<th>Team Lead</th>
											<th>Team Members</th>
											<th>Level</th>
										</tr>
									</thead>
									<tbody>
                   <?php 
                     $i = 0;
                     while($row = mysqli_fetch_array($sqlResult)){
                   ?>
										<tr>
											<td><?php echo ++$i; ?></td>
                      <td><?php echo $row['team_id']; ?></td>
											<td><?php echo $row['team_lead']; ?></td>
											<td><?php echo $row['team_members']; ?></td>
											<td><?php echo $row['level']; ?></td>
						       </tr>
                   <?php } ?>
									</tbody>
      			  </table>
      			</div>
         </div>
                       </div>
                   </div>
                </section>
                
            </div>
        </div>
		<!-- /#Selected List Area -->
    
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #Event Details -->
            <section id="feature-list">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>Event Details</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row tab-row">
                        <div class="col-lg-5 col-md-5">
                            <ul class="tab-title">
                                <li><span data-tab-name="134" class="hvr-bounce-to-right active">Total Rounds in this Event</span></li>
                                <li><span data-tab-name="130" class="hvr-bounce-to-right ">Team Constraints to participate</span></li>
                                <li><span data-tab-name="132" class="hvr-bounce-to-right ">Co-Ordinators</span></li>
                                <li><span data-tab-name="135" class="hvr-bounce-to-right ">Winners List</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 wow bounceInRight">
                            <div class="tab-content-box 134">
                                <h3>Rounds / Levels Description</h3>
                                <ul>
                                    <li>1. <b>Round 1 : </b>This round is based on how funny your answers are? How spontaneous you are?</li>
                                    <li>2. <b>Round 2 : </b>Who is Hyper Adhi or Sudigali Sudheer?</li>
                                </ul>
                            </div>
                            <div class="tab-content-box 130">
                                <h3>Team Constraints to participate</h3>
                                <ul>
                                    <li>1. Lone wolves only can participate</li>
                                </ul>
                            </div>
                            <div class="tab-content-box 132">
                                <h3>Co-Ordinators</h3>
                                <p>1. APPALANAIDU - N110992 - 7013462426</p>
                                <p>2. SANKUNTHALA - N120154</p>
                            </div>
                            
                            <div class="tab-content-box 135">
                                <h3>Winners List</h3>
                                <p>Updated soon................!!!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Event Details -->
        </div>
    </div>
    	
    
    <?php 
    if(!isset($_SESSION['technostart']) && empty($_SESSION['technostart'])){}else{    
    echo'
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column col-md-12">
                <!-- #Registration Area -->
                <section id="why-choose-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center">
                                    <h1>Registration Area</h1>
                                    <p>Choose how many team members to participate in this Event.<br>If there are exams in any rounds, Exam must be written with <b>Team Lead</b> ID number and Password.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-3 col-sm-3 col-md-offset-2">
                                 <form class="form-horizontal" >
                                    <div class="form-group">
                                      <label class="control-label col-sm-5">Choose your Team members :</label>
                                      <div class="col-sm-7">
                                        <select class="form-control" name="options" id="member" onchange="team()">
                                            <option>-Select members-</option>
                                            <option>1</option>
                                        </select>
                                      </div>
                                    </div>
                                     <div id="addmember"></div> 

                            </div>
                        </div>
                    </div>
                </section>
                <!-- /#Registration Area -->
            </div>
        </div>';
    }
?>
<?php
	include ('footer.php');
?>
<script>
    function team(){ 
        var members=$("#member").val();
        var  member=parseInt(members);
        if(member==1){
            var a='<div class="form-group">'+
                    '<label class="control-label col-sm-5" for="teamlead">Team Lead ID : </label>'+
                        '<div class="col-sm-7">'+
                            '<input type="text" class="form-control" id="teamlead" placeholder="Enter Team Lead ID" required>'+
                        '</div>'+
                    '</div>';
            a+='<div class="form-group">'+
                '<div class="col-sm-offset-7 col-sm-10">'+
				  '<button type="button" class="btn btn-primary" onclick="add()">Submit</button>'+
                '   </div>'+
                '</div>';
            document.getElementById('addmember').innerHTML=a;
        }
        else if(member>1){
            var i=0;
             var a='<div class="form-group">'+
                    '<label class="control-label col-sm-5" for="teamlead">Team Lead ID : </label>'+
                        '<div class="col-sm-7">'+
                            '<input type="text" class="form-control" id="teamlead" placeholder="Enter Team Lead ID" required>'+
                        '</div>'+
                    '</div>';
            for(i=1;i<member;i++){
                 a+='<div class="form-group">'+
				     '<label class="control-label col-sm-5" for="stu" >Student '+i+' : </label>'+
                            '<div class="col-sm-7">'+
                                '<input type="text" class="form-control" id="stu'+i+'" placeholder="Enter Student ID" required>'+
                            '</div></div>';
            }
            a+='<div class="form-group">'+
                '<div class="col-sm-offset-7 col-sm-10">'+
				  '<button type="button" class="btn btn-primary" onclick="add()">Submit</button>'+
                '   </div>'+
                '</div>';
            $("#addmember").html(a);
        }
        else{
            var a="";
            $("#addmember").html(a);
        }
    }
    function add(){
        var option=$("#member").val();
        var optionnumber=parseInt(option);
        var i;
        var teamMembers = $('#teamlead').val();
        if(!teamMembers) return toastr.error("All Fields are Required", {timeOut: 5000});
        if(teamMembers.length != 7) return toastr.error(teamMembers+" is not a valid ID", {timeOut: 5000});
        for(i = 1; i < optionnumber; i++){
            var id='#stu'+i;
            if(!$(id).val()) return toastr.error("All Fields are Required", {timeOut: 5000});
            if($(id).val().length != 7) return toastr.error($(id).val() + " is not a valid ID", {timeOut: 5000});
            teamMembers += "~" + $(id).val();
        }
        $team=teamMembers;
        $.ajax({
            url:"pages/register.php",
            method:"post",
            data:{"new_team":$team,"event_name":"OMGWhattheFUN"},
            success:function(data){
                var arrayResponse = data.split(" ");
                if(data == "1"){
                    toastr.warning('Registrations Closed', 'Warning', {timeOut: 5000});
                }else if(data == "4"){
                    toastr.success('We will meet at venue.', 'Registration Done', {timeOut: 5000});
                }
                else if(arrayResponse[1] == "2"){
                    toastr.error(arrayResponse[0] + ' Already Registered.', 'Inconceivable!', {timeOut: 5000});
                }else if(data == "5"){
                    toastr.warning('Someone not belongs to Dept of CSE.', 'Warning', {timeOut: 5000});
                }else{
                    toastr.info(arrayResponse[0] + ' Payment not done.', 'Information', {timeOut: 5000});
                }
            }
        }); 
    }
</script>