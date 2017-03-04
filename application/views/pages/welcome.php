<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php if (@$user_profile or $this->session->userdata('user_name')!= NULL):
if (@$user_profile):$user=$user_profile['name'];else:$user=$this->session->userdata('user_name');endif;?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Way Of life</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/animate.min.css"); ?>" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/paper-dashboard.css"); ?>" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/demo.css"); ?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url("application/views/assets/user/assets/css/themify-icons.css"); ?>" rel="stylesheet" />

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Way of life
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="ti-panel"></i>
                            <p>Úvodná stránka</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-user"></i>
                            <p>Profil užívateľa</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-view-list-alt"></i>
                            <p>Tabuľky hodnôt</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-text"></i>
                            <p>Poznámky</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="#">
                            <i class="ti-export"></i>
                            <p>Chcem viac</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <div class="navbar-brand"><?php echo $user; ?></div>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Štatistiky</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Nastavenia</p>
                                </a>
                            </li>
                            <li><?php echo anchor('home/logout', '<i class="ti-power-off"></i> <p>Odhlásiť</p>'); ?></li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-server"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Pokles váhy</p>
                                                -45 kg
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i>Za posledný týždeň
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-success text-center">
                                                <i class="ti-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Spálených kalórií</p>
                                                5,805
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i>Za posledný týždeň
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-pulse"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Vynechané cvičenia</p>
                                                10
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i>Za posledný týždeň
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                                <i class="ti-twitter-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Zostáva dní</p>
                                                39
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i>Za posledný týždeň
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>, made with
                        <i class="fa fa-heart heart"></i>by
                        <a href="#">Trpaslici</a>
                    </div>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/jquery-1.10.2.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("application/views/assets/user/assets/js/bootstrap.min.js"); ?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/bootstrap-checkbox-radio.js"); ?>"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/chartist.min.js"); ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/bootstrap-notify.js"); ?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/paper-dashboard.js"); ?>"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/demo.js"); ?>"></script>

<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Vitaj <?php echo $user; ?>!"

            },{
                type: 'success',
                timer: 4000
            });

    	});
</script>

</html>
<?php
else:

    redirect('');

endif;
?>