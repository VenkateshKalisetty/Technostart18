<?php
	include ('header.php');
 include ('dbconfig.php');
 $sql35 = mysqli_num_rows(mysqli_query($con, "SELECT eventname FROM eventdetails WHERE eventname = 'CounterStrike'"));
?>
    <!-- #Event title -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Counter Strike</h1>
                </div>
                <div class="col-lg-4">
                    <h1 style="font-size:28px;">Registered Teams : <?php echo $sql35; ?></h1>
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
                            <img width="560" height="348" src="assets/images/event/counterstrike.jpg" class="wow slideInLeft wp-post-image" alt="about-banner" />
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Counter Strike Description : </h3>
                            <p>Counter-Strike (CS) is a series of multiplayer first-person shooter video games, in which teams of terrorists battle to perpetrate an act of terror (bombing, hostage-taking) and counter-terrorists try to prevent it (bomb defusal, hostage rescue).</p><br>
                            <h6 style="font-size:20px;font-weight:bold;">Game Version: Counter-Strike 1.6 WarZone</h6>
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
                                <li><span data-tab-name="133" class="hvr-bounce-to-right active">Rules &amp; Regulations</span></li>
                                <li><span data-tab-name="132" class="hvr-bounce-to-right ">Co-Ordinators</span></li>
                                <li><span data-tab-name="135" class="hvr-bounce-to-right ">Winners List</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 wow bounceInRight">
                            <div class="tab-content-box 133">
                                <h3>Rules &amp; Regulations</h3>
                                <p><b>Team size : 5</b></p><br>
                                <p><b>Map Pool : </b><br>1. de_dust2 (Knockouts)<br>2. de_inferno (Knockouts)<br>3. de_nuke (Knockouts)<br>4. de_cbble<br>5. de_train/de_mirage (Teams Choice)<br>All 5 maps for Major matches<br>Majors = Quarter’s + Semi’s + Finals</p>
                                <p><b>Round time : </b>1 Minute 45 Seconds</p>
                                <p><b>Freeze time : </b>5 Seconds (Knockouts, Quarter’s), 10 Seconds (Semi’s, Finals)</p>
                                <p><b>C4 timer : </b>35 Seconds</p>
                                <p><b>Friendly fire : </b>ON</p>
                                <p><b>Starting money : </b>8000 (Knockouts), 800 (Majors)</p>
                                <p><b>No. of Maps : </b>1 (Knockouts), 3 (Majors)</p>
                                <p><b>Map Selection : </b>Ban-Pick</p>
                                <p><b>Team Selection : </b>Coin Toss (Knockouts), Knife Round (Majors)</p>
                                <p><b>Overtime (Tie) : </b>Knockouts: Knife Round (Starting money=800)<br>Majors: Rounds=3, Starting money=10000, Freezetime=10</p>
                                <p><b>Weapon Restrictions : </b>1. Tactical Shields are banned<br>2. Auto-Snipers are banned (Knockouts)</p>
                                <p><b>Tactical pauses : </b>1 Minute, 3 Pauses per team per a Map (Majors)</p>
                                <p><b>Shuffling of players from one year to another year is allowed</b></p><br>
                                <p style="font-size:18px;color:red;">The Rules may be changed depending on no. of teams registered and the time</p>
                            </div>
                            <div class="tab-content-box 132">
                                <h3>Co-Ordinators</h3>
                                <p>1. S.Karthikeya - N120282 - 7396659740</p>
                                <p>2. V.D.S.Prakash - N120515 - 7731851129</p>
                            </div>
                            
                            <div class="tab-content-box 135">
                                <h3>Winners List</h3>
                                <!--div class="row">
                        						<div class="col-lg-12 col-md-6 col-sm-6">
                        							<div class="table-responsive">
                        								<table class="table table-bordered">
                        									<thead>
                        										<tr>
                        											<th>Team ID</th>
                        											<th>Team Lead</th>
                        											<th>Team Members</th>
                        											<th>Status</th>
                        										</tr>
                        									</thead>
                        									<tbody>
                                           <tr>
                        											<td colspan="4" style="text-align:center;"><b>BRO Gamers (Winners)</b></td>
                     									     </tr>
                        										<tr>
                        											<td>4691</td>
                        											<td>N130849</td>
                        											<td>N130849,N130851,N130852,N130801,N140289</td>
                        											<td>Winners</td>
                     									     </tr>
                                           <tr>
                        											<td>2007</td>
                        											<td>N140348</td>
                        											<td>N140348,N140946,N140338,N140339,N140983</td>
                        											<td>Runners</td>
                     									     </tr>
                        									</tbody>
                             			      </table>
                              			 </div>
                                   </div>
                               </div-->
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
            data:{"new_team":$team,"event_name":"CounterStrike"},
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