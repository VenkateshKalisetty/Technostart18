<?php
	include ('header.php');
    
?>
    <!-- #Event title -->
    <section id="page-title" class="gradient-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Cricket League</h1>
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
                            <img width="560" height="348" src="assets/images/event/cricket.jpg" class="wow slideInLeft wp-post-image" alt="about-banner" />
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Cricket Details : </h3>
                            <p>1. Those who are interested to play cricket (E1-E4)  can register in technostart site.<br>
2. Mention your role in the registration form  as Batsman,Bowler,All rounder and Wicket keeper.<br>
3. Give your rating for batting and bowling skills. It must be genuine rating. Rate yourself out of 10. Even if you give false rating, overall screening will be done by the students of E4 cse.<br>
4. You should upload your recent photograph. (Face should be clear.)<br>
5. Each team will be given 800cs (Computer Science Currency) (Virtual Money). Minimum squad is 15 members for each team. Based on that money give your base price. It’s better to keep your base price as low to be selected in the team.<br>
6. Minimum base price starts from 5cs rupees.<br>
7. During auction, Franchise will buy you with an increment of +2CS upto 20, +3CS from 20 to 35 and +5CS upto whatever will be the bidding.
</p><br>
                            <p><b>Donot keep your base price as high (ex:70 or 100cs rupees).</b></p>
                            <p style="font-size:22px;"><b><a href="http://10.11.4.99/technostart/players.php">List of Player Registered</a></b></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Description -->
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #Registration Area -->
            <section id="why-choose-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>Registration Area</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-3 col-md-offset-2">
                            <form class="form-horizontal" method='post' action='cricket_register.php' enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">ID :</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text" name="id" id="id" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Name :</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text" name="name" id="name" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Batch :</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text" name="batch" id="batch" placeholder="2012" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Player Category :</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="category" id="category" required>
                                            <option>-Select Type-</option>
                                            <option>Bowler</option>
                                            <option>Batsmen</option>
                                            <option>Wicket Keeper</option>
                                            <option>All Rounder</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Bowling Rate :</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="bowlrate" id="bowlrate" required>
                                            <option>-Select-</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Bating Rate :</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="batrate" id="batrate" required>
                                            <option>-Select-</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Base Price :</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="number" min="1" max="800" name="baseprice" id="baseprice" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Description :</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="3" name="playdescription" id="playdescription" required></textarea>
                                    </div>
                                </div>
                                <!--div class="form-group">
                                    <label class="control-label col-sm-5">Your Photo :</label>
                                    <div class="col-sm-7">
                                        <input type="file" name="myfile" required />
                                    </div>
                                </div-->
                                <div class="form-group">
                                    <div class="col-sm-offset-7 col-sm-10">
                                        <button type="submit" class="btn btn-primary" onClick="return add()">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /#Registration Area -->
        </div>
    </div>
    <?php
	include ('footer.php');
?>
        <script>
            function add() {
                var id = document.getElementById('id').value;
                var name = document.getElementById('name').value;
                var batch = document.getElementById('batch').value;
                
                var category = document.getElementById('category').value;
                var bowlrate = document.getElementById('bowlrate').value;
                var batrate = document.getElementById('batrate').value;
                var baseprice = document.getElementById('baseprice').value;
                var description = document.getElementById('playdescription').value;
                if (id.length > 0 && name.length > 0 && batch.length > 0 && category.length > 0 && baseprice.length > 0 && description.length > 0) {
                    if (baseprice <= 800) {
                        return true;
                    } else {
                        return toastr.error("Base Price is less than 800", {
                            timeOut: 5000
                        });
                    }
                } else {
                    return toastr.error("Fill all details", {
                        timeOut: 5000
                    });
                }

            }

        </script>
