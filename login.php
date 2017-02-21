<!DOCTYPE html>
<?php 
	include "config.php";

session_start();
       
       if (isset($_POST['submit']) ){
           $email = $_POST['email'];
           $password = $_POST['password'];
		
			
			$query = mysql_query ("SELECT * from admin where email = '".$email."' and password='".$password."' " );
			if($rows=mysql_fetch_array($query)){
            $_SESSION['email'] = $email ;
			echo '<script type="text/javascript">window.location.href="dashboard.php"</script>';
            
        }else{
            echo '<script type="text/javascript">alert("Votre email ou mot de passe est incorrecte");</script>';
        }
	
}
?>
<html>


<!-- Mirrored from admindesigns.com/framework/pages_screenlock.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:50:20 GMT -->
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
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">


 
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info " style="margin-top: 14%;" id="login1">
                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">
                            <a href="#" title="Return to Dashboard">
                                <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                            </a>
                        </div>

                        

                    </div>
                    <div class="panel panel-info mv10 heading-border br-n">

                        
                        <!-- end .form-header section -->
                        <form method="post" action="" id="contact">
                            <div class="panel-body bg-light pn">

                                <div class="row table-layout">
                                    <div class="col-xs-3 p20 pv15 va-m br-r bg-light">
                                        <img class="br-a bw4 br-grey img-responsive center-block" src="assets/img/avatar3.png" title="AdminDesigns Logo">
                                    </div>
                                    <div class="col-xs-9 p30 pv15 va-m bg-light">
								
                                        <div class="section row">
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                                    <span><i class="fa fa-facebook"></i>
                                                    </span>Facebook</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                                    <span><i class="fa fa-twitter"></i>
                                                    </span>Twitter</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social googleplus span-left btn-block">
                                                    <span><i class="fa fa-google-plus"></i>
                                                    </span>Google+</a>
                                            </div>
                                        </div>
										
										<div class="section mt25">
                                            <label for="password" class="field prepend-icon">
                                                <input type="text" name="email" id="email" class="gui-input" placeholder="Enter email">
                                                <label for="password" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>

                                        <div class="section mt25">
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
							
							<div class="panel-footer clearfix p10 ph15">
                                <button type="submit" name="submit" class="button btn-primary mr10 pull-right">Se connecter</button>
                                
                            </div>
                            
                        </form>
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

    <!-- Page Plugins -->
    <script type="text/javascript" src="assets/js/pages/login/EasePack.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/rAF.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/TweenLite.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/login.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core      
            Core.init();
            // Init Demo JS
            Demo.init();
            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2.1,
                    y: window.innerHeight / 2.3
                },
            });
        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/framework/pages_screenlock.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:50:20 GMT -->
</html>
