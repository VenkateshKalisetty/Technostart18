<?php
	include ('header.php');
 include ('dbconfig.php');
 $sql19 = mysqli_num_rows(mysqli_query($con, "SELECT eventname FROM eventdetails WHERE eventname = 'TreasureHunt'"));
 $sqlResult = mysqli_query($con, "SELECT * FROM eventdetails WHERE eventname = 'TreasureHunt' AND level = 3");
?>
    <!-- #Event title -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Treasure Hunt</h1>
                </div>
                <div class="col-lg-4">
                    <h1 style="font-size:28px;">Registered Teams : <?php echo $sql19; ?></h1>
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
                            <img width="560" height="348" src="assets/images/event/treasurehunt.jpg" class="wow slideInLeft wp-post-image" alt="about-banner" />
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Treasure Hunt Description : </h3>
                            <p>It is an information based puzzle hunt and a fun filled event in which teams use their knowledge to solve clues. Each team is presented with a group of clues, which teams must solve them in order to find the treasure. </p><br>
                            <p style="font-size:22px;color:#000;"><b>Round 1 key : </b><a href="files/TreasurehuntRound1Key.pdf" download>TreasurehuntRound1Key.pdf</a></p>
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
                                    <li>1. <b>Round 1 : </b>The first round will be quiz or test based on number of teams and consists of simple logical questions and questions related to our campus like places, IIITN history, campus in news, designations etc…</li>
                                    <li>2. <b>Round 2 : </b>Here, you will have a fun game. It can be anything.</li>
                                    <li>3. <b>Round 3 : </b>From round 3 onwards each team will be allotted a particular color or symbol all the clues for the team will be represented by that.<br> The clue has to be found in a particular order. The team can’t skip a clue. Skipping a clue leads to disqualification of the team.<br>If you have found other team’s clue by chance never tamper it. Tampering other team’s clue may lead to disqualification.<br>Do not search for clues in off-limit areas.<br>An entire team must stay together. Do not split up to find different clues<br>Trace your team&#39;s color or symbol which will lead you to next clue.<br>All the means used by the teams should be fair, in case of any violation of the rules or any use of unfair means, teams will be disqualified from the contest.<br>All the clues of the teams are different and located at different places but the final destination ie, the treasure is same. The team which finds the treasure first wins.<br><b>NOTE :</b> There will be elimination for round 1&amp;2</li>
                                </ul>
                            </div>
                            <div class="tab-content-box 130">
                                <h3>Team Constraints to participate</h3>
                                <ul>
                                    <li>1. Every team must contain at most 5 members.</li>
                                </ul>
                            </div>
                            <div class="tab-content-box 132">
                                <h3>Co-Ordinators</h3>
                                <p>1. T.Venkatesh - N120425 - 9985233515</p>
                                <p>2. V.Surya Balaji - N120569 - 6300683935</p>
                                <p>3. K.Sreejanya - N120625</p>
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
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
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
            data:{"new_team":$team,"event_name":"TreasureHunt"},
            success:function(data){
                var arrayResponse = data.split(" ");
                if(data == "1"){
                    toastr.warning('Registrations closed.', 'Warning', {timeOut: 5000});
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
