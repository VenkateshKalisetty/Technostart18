<?php 
session_start(); 
include 'dbconfig.php';
$sql = mysqli_num_rows(mysqli_query($con,"SELECT * FROM notifications WHERE date=CURDATE()"));
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favcon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/overlay-bg.png">
    <title>Technostart-2k18</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!--link rel='stylesheet' href='assets/css/dashicons.mind47a.css?ver=4.4.14' type='text/css' media='all' />
		<link rel='stylesheet' href='assets/css/jquery-ui-dialog.mind47a.css?ver=4.4.14' type='text/css' media='all' />
		<link rel='stylesheet' href='assets/css/stylesa94e.css?ver=4.4.1' type='text/css' media='all' />
		<link rel='stylesheet' href='assets/css/settingsc6ac.css?ver=5.1.5' type='text/css' media='all' /-->
    <style type='text/css'>
        #rs-demo-id {}

    </style>
    <link rel='stylesheet' href='assets/css/bootstrap.mind47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/dataTables.bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/font-awesome.mind47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/animated47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/hoverd47a.css?ver=4.4.14' type='text/css' media='all' />
    <!--link rel='stylesheet' href='assets/css/jquery.fancyboxd47a.css?ver=4.4.14' type='text/css' media='all' /-->
    <!--link rel='stylesheet' href='assets/css/jquery.bxsliderd47a.css?ver=4.4.14' type='text/css' media='all' /-->
    <link rel='stylesheet' href='assets/css/owl.carouseld47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/owl.theme.default.mind47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/settingsd47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/styled47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/responsived47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/customd47a.css?ver=4.4.14' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/fonts.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/js_composer.minc422.css?ver=4.11.1' type='text/css' media='all' />
    <script type='text/javascript' src="assets/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css">

    <script type='text/javascript' src='assets/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
    <script type='text/javascript' src='assets/js/jquery.themepunch.tools.minc6ac.js?ver=5.1.5'></script>
    <script type='text/javascript' src='assets/js/jquery.themepunch.revolution.minc6ac.js?ver=5.1.5'></script>
    <!--script type='text/javascript' src='assets/js/html5shivd47a.js?ver=4.4.14'></script-->
    <script type='text/javascript' src='assets/js/respond.mind47a.js?ver=4.4.14'></script>
    <script type="text/javascript" src="assets/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.navigation.min.js"></script>
    <!--link rel="stylesheet" src="assets/css/bootstrap-theme.min.css"-->
    <noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>

</head>

<body class="home page page-id-10 page-template page-template-tpl-visual_composer page-template-tpl-visual_composer-php wpb-js-composer js-comp-ver-4.11.1 vc_responsive">
    <div class="page-wraper">

        <!-- .preloader -->
        <!--div class="preloader"></div-->
        <!-- /.preloader -->
        <!-- #header -->
        <header id="header">
            <div class="container">
                <div class="row">
                    <!-- .logo -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 logo">
                        <a href="index.php"><img class="img-responsive" src="assets/images/logo.png" alt="Technostart-2k18"></a>
                    </div>
                    <!-- /.logo -->
                    <!-- .mainmenu-container -->
                    <nav class="col-lg-9 col-md-9 col-sm-6 col-xs-6 mainmenu-container">
                        <button class="nav-toggler">Navigation <i class="fa fa-bars"></i></button>
                        <ul class="mainmenu clearfix">
                            <li id="menu-item-248" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-248 active"><a title="HOME" href="index.php" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">HOME</a></li>                            
                            <li id="menu-item-250" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-250 active"><a title="EVENTS" href="events.php" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">EVENTS</a></li>
                            <li id="menu-item-251" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-251 active"><a title="NOTIFICATIONS" href="notifications.php" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">NOTIFICATIONS&nbsp;
                            <?php 
                                if($sql != 0){
                                    echo '<span class="badge" style="background:red">'.$sql.'</span></a></li>';
                                }
                            ?>
                            </a></li>
                            <!--li id="menu-item-252" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-252 active"><a title="Pricing" href="#" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">TECH TALKS</a>
                                <ul role="menu" class="submenu">
                                    <li id="menu-item-260" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-258"><a title="SPEAKERS" href="speakers.php">SPEAKERS</a></li>
                                </ul>
                            </li-->
                            <li id="menu-item-255" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-255 active"><a title="REGISTERED TEAMS" href="registeredteams.php" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">REGISTERED TEAMS</a></li>
                            <?php 
                            if(isset($_SESSION['technostart'])){
                                 echo '<li id="menu-item-254" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-254 dropdown active"><a title="DASHBOARD" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll data-options="easing: easeOutQuart">DASHBOARD</a>
							             <ul role="menu" class="submenu">
								            <li id="menu-item-258" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-258"><a title="PROFILE" href="profile.php">YOUR PROFILE</a></li>
								            <li id="menu-item-259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-259"><a title="LOGOUT HERE" href="logout.php">LOGOUT</a></li>
							             </ul>
						              </li>';
                            }
                        else{
                            echo '<li><button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button></li>';
                        }?>
                        </ul>
                    </nav>
                    <!-- /.mainmenu-container -->
                </div>
            </div>
        </header>
        <!-- Modal -->
