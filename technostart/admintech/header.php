<?php 
    if(isset($_SESSION['technostart']) && !empty($_SESSION['technostart'])){
        if(isset($_SESSION['role']) && $_SESSION['role'] == 'a' || $_SESSION['role'] == 'p' || $_SESSION['role'] == 'o'){

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Technostart-2k18 v5.0</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="css/overlay-bg.png" />
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel='stylesheet' href="assets/css/bootstrap.min.css" type='text/css' />
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/icon-font.min.css" type='text/css' />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">

    <script src='assets/tinymce/tinymce.min.js'></script>

    <script type="text/javascript">
        tinymce.init({
            selector: '#myTextarea',
            theme: 'modern',
            height: '200px',
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor', 'spellchecker', 'image code'
            ],
            content_css: 'css/content.css',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | image | print preview media fullpage | forecolor backcolor emoticons | spellchecker',
            spellchecker_callback: function(method, text, success, failure) {
                var words = text.match(this.getWordCharPattern());
                if (method == "spellcheck") {
                    var suggestions = {};
                    for (var i = 0; i < words.length; i++) {
                        suggestions[words[i]] = ["First", "Second"];
                    }
                    success(suggestions);
                }
            }

        });

    </script>
    <style type="text/css">
        .file {
            position: relative;
            margin-left: 4%;
        }
        
        .file label {
            background: #0986A3;
            padding: 5px 20px;
            color: #fff;
            font-weight: bold;
            font-size: .9em;
            transition: all .4s;
            width: 100px;
            height: 30px;
        }
        
        .file input {
            position: absolute;
            display: inline-block;
            left: 0;
            top: 0;
            opacity: 0.01;
            cursor: pointer;
        }
        
        .file input:hover+label,
        .file input:focus+label {
            background: #e35a44;
            color: #fff;
        }
        
        .file1 {
            position: relative;
            margin-left: 45%;
            margin-top: -4.5%;
        }
        
        .file1 label {
            background: #e35a44;
            padding: 5px 20px;
            color: #fff;
            font-weight: bold;
            font-size: .9em;
            transition: all .4s;
            width: 100px;
            height: 30px;
        }
        
        .file1 input {
            position: absolute;
            display: inline-block;
            left: 0;
            top: 0;
            opacity: 0.01;
            cursor: pointer;
        }
        
        .file1 input:hover+label,
        .file1 input:focus+label {
            background: #e35a44;
            ;
            color: #fff;
        }

    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a class="logo">
                <span class="logo-mini"><b>v5.0</b></span>
                <span class="logo-lg" style="margin-left:0%;position: absolute;font-size:15px;"><b>TECHNOSTART-2k18 v5.0</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu" style="margin-left:-2%;">
                            <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" style="margin-left:-30%;">
                                <span class="hidden-xs">Log out</span>
                            </a>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="css/overlay-bg.png" class="img-circle" alt="Logo" style="width:200%;" id="mainimage">
                    </div>
                    <div class="pull-left info">
                        <p style="font-size:15px"><br>TECHNOSTART </p>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            <span style="white-space: pre"> DASHBOARD</span>
                        </a>
                    </li>
                    <?php 
                        if($_SESSION['role'] == 'a'){
                            echo '<li>
                        <a href="postnotifications.php">
                            <i class="fa fa-bell"></i>
                            <span style="white-space: pre"> Post Notification</span>
                        </a>
                    </li>';
                        }
                        
                        if($_SESSION['role'] == 'a' || $_SESSION['role'] == 'o'){
                            echo '<li>
                        <a href="registeredteams.php">
                            <i class="fa fa-users"></i>
                            <span style="white-space: pre"> Registered Teams</span>
                        </a>
                    </li>';
                        }        
            
                        if($_SESSION['role'] == 'a' || $_SESSION['role'] == 'p'){
                            echo '<li>
                        <a href="amountPaidMembers.php">
                            <i class="fa fa-rupee"></i>
                            <span style="white-space: pre"> Payment details</span>
                        </a>
                    </li>';
                        }
                    ?>
                    
                </ul>
            </section>
        </aside>
<?php
                
        }else{
            header('Location:../index.php');
        }
    }
?>