<!DOCTYPE html>
<?php
session_start();
include "config.php";

if (!isset($_SESSION['email'])) {
        echo '<script type="text/javascript">window.location.href="index.php";</script>';
    }

$re = $_SESSION['email'];

$req = mysql_query ("select * from admin where email='".$re."' ");
$res = mysql_fetch_array($req);


									$req = "select * from members";
									$res = mysql_query($req);
									$num = 1;
									while($enreg=mysql_fetch_array($res))
									{ 
									$enr['id'][$num] = $enreg['id'];
									$enr['date_ajout'][$num] = strstr($enreg['date_ajout'], " ",true);
									$enr['full_name'][$num] = $enreg['full_name'];
									$num++;
								}
?>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>[Gene]rative algorithms</title>
   <meta name="description" content=" Workshop Generative algorithms">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Generative algorithms, Generative lab, PARAMETRIC DESIGN WORKSHOP, PARAMETRIC, DESIGN, WORKSHOP, digital design, Rhinoceros & Grasshopper, Rhinoceros, Grasshopper, Ragheed, al tahhan, ragheed al tahhan"/> <!-- Aussi pour les moteurs de recherche, ce sont des mot cléf -->
	<meta name="Robots" content="index, follow"/> <!-- Aussi pour moteurs de recherche, intéragie avec les bots des moteurs de recherche -->
	<meta name="author" content="Ragheed al tahhan , Nouhaila Benabdelkader"> <!-- Permet de rechercher la page dans certains moteurs de recherche en se basant sur les noms de
	auteurs indiqués --> 
	
  
    <!-- Styles -->
	<link rel="shortcut icon" href="images/g308.ico" />

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">


</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Theme Preview Pane -->
    <div id="skin-toolbox">
        
            
    </div>
    <!-- End: Theme Preview Pane -->

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
		
			<header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding">
                <a class="navbar-brand" href="dashboard.php"> <b>[Gene]rative </b> algorithms
                </a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-left">
               
               
                <li>
                    <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                </li>
                <li class="dropdown hidden">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicons glyphicons-settings fs14"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                        </li>
                        <li class="divider mv5"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="octicon octicon-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                
                
                <li class="ph10 pv20"> <i class="fa fa-circle text-tp fs8"></i>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatar3.png" alt="avatar" class="mw30 br64 mr15">
                        <span><?php echo $res['name'] ; ?></span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        
                        <li class="br-t of-h">
                            <a href="logout.php" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Se déconnecter </a>
                        </li>
                    </ul>
                </li>
            </ul>
		 </header>
		
        <!-- End: Header -->

        <!-- Start: Sidebar -->
			<aside id="sidebar_left" class="sidebar-light nano nano-primary">
            <div class="nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">
                    
                </header>
                <!-- End: Sidebar Header -->

                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li class="active">
                        <a href="dashboard.php">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="details_members.php">
                            <span class="glyphicons glyphicons-user"></span>
                            <span class="sidebar-title">Members</span>
                        </a>
                    </li>
					
					
                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>
		<!-- End: Sidebar -->
		 
        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="dashboard.php"><b> [Gene]rative </b> algorithms</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">Dashboard</li>
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">
				
					
                <!-- Dashboard Tiles -->
                <div class="row mb10">
                    <div class="col-md-12">
                        <div class="panel bg-alert light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-user"></i> </div>
                                <h2 class="mt15 lh15"> <b><?php echo count($enr['id']); ?> </b> </h2>
                                <h3 class="text-muted"><a style="color:white" href="syntheses_cli.php" > Member informations</a></h3>
                            </div>
                        </div>
                    </div>
					
				
                
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->


    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();

            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the 
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to 
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/framework/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:44:31 GMT -->
</html>
