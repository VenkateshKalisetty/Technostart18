<?php
session_start();
if(isset($_SESSION['technostart']) && !empty($_SESSION['technostart'])){
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'a'){

include 'header.php';
?>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h2 class="text-center" style="margin-top:-15px;"><br>POST NOTIFICATION</h2><br>
                            <form action="editor1.php" method="post" enctype='multipart/form-data'>
                                <div class="input-group" style="margin-left:40px;">
                                    <span class="input-group-addon">Title</span>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Eg:Title of notice">
                                </div><br/><br><br>
                                <div class="box-body pad" style="margin-left: 30px;">
                                    <textarea id="myTextarea" name="message">Notice here</textarea>
                                </div><br>
                                <div class="input-group" style="margin-left:40px;">
                                    <span class="input-group-addon">About</span>
                                    <input type="text" class="form-control" id="about" name="about" placeholder="Ex:Event">
                                </div>
                                <br/><br><br>
                                <p class="file">
                                    <input type="file" name="myfile" id="file" />
                                    <label for="file">Attachment</label>
                                </p>
                                <br><br>
                                <p class="file1" style="margin-top:-8.5%;">
                                    <input type="submit" onClick="return validate()" />
                                    <label for="submit" style="text-align: center;">Submit</label>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        function validate() {
            var title = document.getElementById('title').value;
            var message = document.getElementById('myTextarea').value;
            var about = document.getElementById('about').value;
            if (title.length > 0 && message.length > 0 && about.length > 0) {
                return true;
            } else {
                alert("Fill the complete details");
                return false;
            }
        }

    </script>
    <?php
    include 'footer.php';
        }else{
            header('Location:../index.php');
        }
    }
?>
