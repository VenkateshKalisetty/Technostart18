<?php
	include ('header.php');
 include ('dbconfig.php');
 $sql18 = mysqli_num_rows(mysqli_query($con, "SELECT eventname FROM eventdetails WHERE eventname = 'AutonomousRobotics'"));
?>
    <!-- #Event title -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Agent X (Autonomous Robotics)</h1>
                </div>
                <div class="col-lg-4">
                    <h1 style="font-size:28px;">Registered Teams : <?php echo $sql18; ?></h1>
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
                            <img width="560" height="348" src="assets/images/event/autorobo.jpg" class="wow slideInLeft wp-post-image" alt="about-banner" />
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Agent X Description : </h3>
                            <p>Teams have to build an autonomous robot which can follow a white line and keep track of directions while going through the arena. The bot has to go through the arena from the starting point to the ending point in minimum possible time.</p><br>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Description -->
        </div>
    </div>
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
                                <li><span data-tab-name="133" class="hvr-bounce-to-right active">Rules and Regulations</span></li>
                                <li><span data-tab-name="130" class="hvr-bounce-to-right ">Team Constraints to participate</span></li>
                                <li><span data-tab-name="132" class="hvr-bounce-to-right ">Co-Ordinators</span></li>
                                <li><span data-tab-name="135" class="hvr-bounce-to-right ">Winners List</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 wow bounceInRight">
                            <div class="tab-content-box 133">
                                <h3>Rules and Regulations</h3>
                                <ul>
                                  <li>1. The arena is composed of random paths made up of <b>White lines on Black background</b>.</li>
                                  <li>2. Angles between two adjacent white lines in the path are 90 and 135 degrees.</li>
                                  <li>3. The width of all white lines will be 30mm.</li>
                                  <li>4. A black box is present at the end zone of the arena to indicate the end position.</li>
                                </ul>
                                <ul>
                                  <li><b>Game play : </b>The game play consists of two Rounds.</li>
                                </ul>
                                <ul>
                                    <li><b>First Round : </b></li>
                                    <li>1. In first round the bot must start from the "Start" and go through the arena to reach the "End".</li>
                                    <li>2. No intersections will be there.</li>
                                    <li>3. The bot has to give a signal by glowing a LED as soon as it senses the white box below it at the end.</li>
                                </ul>
                                <ul>
                                    <li><b>Second Round : </b></li>
                                    <li>1. Top 5 teams will be promoted to the second round.</li>
                                    <li>2. This is also as same as First round.</li>
                                    <li>3. Intersections will be there. (i.e. 'T' and 'Y' junction</li>
                                    <li>4. The bot has to give a signal by glowing a LED as soon as it senses the white box below it at the end.</li>
                                </ul>
                                <p><b>Note: If the bot takes more than 2 minutes, then that team will be disqualified.</b></p>
                                <p><b>Checkpoints : </b><br>1. There will be 3 checkpoints in between the path. (will be told at the spot)<br>2. The participants are allowed to take a maximum of 3 restarts in the entire match.<br>3. If the bot takes a restart, it has to start from the recent crossed checkpoint.<br>4. The timer will not be set back to zero and will not be paused in any case.<br>5. During a restart, a contestant must not feed information about the arena to the bot.<br>6. Contestants are allowed to adjust sensors (gain, position etc.) and make hardware changes.</p>
                                <p><b>Bot Specifications : </b><br>
1. The autonomous bot must fit into the box of dimension 160mm x 160mm x 160mm (lxbxh).<br>
2. Bot must be started individually by only one switch.<br>
3. Bot must have a red LED which will glow once it reaches the end zone of the arena.<br>
4. During the run, the bot must not damage the arena in any way.<br>
5. Bot must have on board power supply.<br>
6. Voltage must not exceed 24 V at any point of time during the game.<br>
7. Bot can't be constructed using readymade 'Lego kits'. But they can make use of readymade gear assembles</p>
                                <p><b>Game Rules :</b><br>
1. The teams will have to submit their bot before the start of the competition. Only those which submit their bots will be allowed to participate. The bot will be handed back to the team during the time of their run. The will be given 1 minute for calibration. If any team is found to alter its code after depositing its bots, then it will be immediately disqualified from the competition. They are however allowed to make any other hardware changes.<br>
2. Only one autonomous bot per team is allowed.<br>
3. When the autonomous bot starts, no team member is allowed to touch the bot or enter the arena.<br>
4. At the start of the task, the bot will be placed at the starting point. Only 1 team member is allowed to be near the game field while starting the bot.<br>
5. Run will start only when organizers give the signal.<br>
6. The starting procedure of the bot should be simple and should not involve giving bot any manual force or impulse in any direction</p>
                              <p><b>General Rules : </b><br>
1. Only 1 member of the team is allowed to handle the bot.<br>
2. Participants are not allowed to keep anything inside the arena other than the bot.<br>
3. The time measured by the organizers will be final and will be used for scoring the teams.<br>
4. Time measured by any contestant by any other means is not acceptable for scoring.<br>
5. The bot has to give a signal by glowing a LED as soon as it senses the black box below it at the end.<br>
6. In case of any disputes/discrepancies, the organizers decision will be final and binding.<br>
7. The organizers reserve the rights to change any or all of the above rules as they deem fit.
</p>
<p><b>Judging and Scoring : </b></br>
1. 30 points will be provided if the bot successfully completes the Run.</br>
2. 10 points will be awarded if the bot glows the LED.</br>
3. 5 points will be deducted if the bot takes the RESTART.
</p>
<p><b>Scoring : </b><br>
1. A = 30 points if the bot successfully completes the run.<br>
2. B = 10 points if the LED glows<br>
3. C = 120- Total time taken in seconds in completing Run.<br>
4. R = 5 points * (Number of restarts taken during the run)<br>
5. Total = A + B + C - R
</p>
<p><b>Certificate distribution :</b><br>The top three teams will be rewarded with Certificate of merit. And The participation certificate will be awarded to teams completing First round</p>
                            </div>
                            <div class="tab-content-box 130">
                                <h3>Team Constraints to participate</h3>
                                <ul>
                                    <li>1. Every team must contain at most 3 members.</li>
                                </ul>
                            </div>
                            <div class="tab-content-box 132">
                                <h3>Co-Ordinators</h3>
                                <p>1. S.Rajesh Kumar - N120173 - 9110768769</p>
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
    	<!-- #Selected List Area -->
	<!--div class="vc_row wpb_row vc_row-fluid">
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
											<th>Team ID</th>
											<th>Team Lead</th>
											<th>Team Members</th>
											<th>Level</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>N120034</td>
											<td>N120034,N120034</td>
											<td>2</td>
									     </tr>
									</tbody>
                    			</table>
                			</div>
                           </div>
                       </div>
                   </div>
                </section>
                
            </div>
        </div-->
		<!-- /#Selected List Area -->
    
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
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
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
        var team1 = teamMembers;
        var team2 = team1.split("~");
        for(i = 0; i < team2.length; i++){
            if(team2[i] == team2[i+1]){
                return toastr.error("Id's are same you are entered", {timeOut: 5000});
            }else{
                $team = teamMembers;
            }
        }
        $.ajax({
            url:"pages/register.php",
            method:"post",
            data:{"new_team":$team,"event_name":"AutonomousRobotics"},
            success:function(data){
                var arrayResponse = data.split(" ");
                if(data == "1"){
                    toastr.warning('This Event Doesn\'t belongs to Technostart-2k18.', 'Warning', {timeOut: 5000});
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
