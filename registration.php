<!doctype html>

<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from koel.webcloudltd.com/Agency/about.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 26 Apr 2015 18:36:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>[Gene]rative algorithms</title>
    <meta name="description" content=" Workshop Generative algorithms">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Generative algorithms, Generative lab, PARAMETRIC DESIGN WORKSHOP, PARAMETRIC, DESIGN, WORKSHOP, digital design, Rhinoceros & Grasshopper, Rhinoceros, Grasshopper, Ragheed, al tahhan, ragheed al tahhan"/> <!-- Aussi pour les moteurs de recherche, ce sont des mot cléf -->
	<meta name="Robots" content="index, follow"/> <!-- Aussi pour moteurs de recherche, intéragie avec les bots des moteurs de recherche -->
	<meta name="author" content="Ragheed al tahhan , Nouhaila Benabdelkader"> <!-- Permet de rechercher la page dans certains moteurs de recherche en se basant sur les noms de
	auteurs indiqués --> 
	
  
    <!-- Styles -->
	<link rel="shortcut icon" href="images/g308.ico" />
    <!-- Styles -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/hover.min.css">
    <link rel="stylesheet" href="styles/animate.min.css">
    <link rel="stylesheet" href="styles/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
    <link rel="stylesheet" href="styles/et-line.css">
    <link rel="stylesheet" href="styles/koel.css">
    <link rel="stylesheet" href="themes/koel-agency.css">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
				

	<link type="text/css" rel="stylesheet" href="styles/modules/materialadmin/css/theme-default/materialadminb0e2.css?1422823243" />

	<link type="text/css" rel="stylesheet" href="styles/modules/materialadmin/css/theme-default/font-awesome.min753e.css?1422823239" />

	<link type="text/css" rel="stylesheet" href="styles/modules/materialadmin/css/theme-default/material-design-iconic-font.mine7ea.css?1422823240" />

	
	
    <!-- End Styles -->
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
    <!-- End Google Fonts -->
    <!-- Scripts -->
    <script src="scripts/modernizr.js"></script>
    <!-- End Scripts -->
</head>

<body>
    <!-- Header -->
    <section id="header" class="header header-inner">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed">
            <!-- Navigation Container -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img alt="Brand" src="images/logo/g3080.png" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="index.php" >Home </a></li>
					  <li><a href="about.php">About</a></li>
					  <li><a href="gallery.php">Our work</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Latest Works <span class="fa fa-angle-down"></span></a>
						<ul class="dropdown-menu" role="menu">
						  <li><a href="work2014.php">Workshop 2014</a></li>
						</ul>
					  </li>
					  <li class="dropdown active"><a href="registration.php">Registration</a></li>
					  
					  <li><a href="contactus.php">Contact Us</a></li>
					  <li class="search">
						<input type="text" placeholder="What are you looking for?" />
						<div class="icon" onclick="$('.search').toggleClass('active');">
						  <i class="fa fa-search"></i>
						</div>
					  </li>
					</ul>
				</div>
            </div>
            <!-- End Navigation Container -->
        </nav>
        <!-- End Navigation -->
        
    </section>
    <!-- End Header -->


    <!-- Main -->
    <main role="main">


        <!-- Breadrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Registration</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Page Heading -->
        <div class="page-heading">
            <div class="container">
                <header>
                    <h1>Registration</h1>
                </header>
            </div>
        </div>
        <!-- End Page Heading -->

         <!-- Contacts -->
        <section id="" class=" section-light text-center ">

            <!-- Contacts Container -->
            <div class="container">

                <!-- Contacts Header -->
                <div class="row">
                    <div class="col-xs-12">
                        <header>
                            <h2>REGISTRATION</h2>
                            <h3>If you are interested in working with us and you want to
                                <br>observe the creativity in action - <b><i>Let's talk!</i></b>
                            </h3>
                            <hr />
                        </header>
                    </div>
                </div>
                <!-- Contacts Header -->
				<?php 
session_start();

include "config.php";

if ( isset($_POST['submit']) ) {
	$full_name=$_POST['full_name'];
	$date_birth=$_POST['date_birth'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$profession=$_POST['profession'];
	$nationality=$_POST['nationality'];
	$country=$_POST['country'];
	$level=$_POST['level'];
	//$knowledge=$_POST['knowledge'];
	$explication=addslashes($_POST['explication']);
	
	$myvalue = $_POST['knowledge'];
					foreach ($myvalue as $avalue)
						{
						$include[] = $avalue;
						}
					$p = implode(", ", $include);   
					$data['knowledge'] = $p;

	$sql = "INSERT INTO members(full_name,date_birth,email,phone,profession,nationality,country,level,knowledge,explication) VALUES('$full_name','$date_birth','$email','$phone','$profession','$nationality','$country','$level','$p','$explication')";
	$requete = mysql_query($sql) or die( mysql_error() ) ;
 
  if($requete)
  {
    
	echo '<script type="text/javascript">alert("You have register");</script>';
				
  }
  else
  {
    echo '<script type="text/javascript">alert("there is a problem with your registration");</script>';
  }
}  
  else {}
  

?>
		
					<div class="card">
						<div class="card-body">
							<form class="form-horizontal" role="form" action="" method="post">
								<div class="form-group">
									<label for="regular13" class="col-sm-2 control-label">Full name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="regular13" name="full_name">
									</div>
								</div>
								<div class="form-group">
									<label for="password13" class="col-sm-2 control-label">Date of Birth</label>
									<div class="col-sm-10">
										<input type="date"  class="form-control" id="date" name="date_birth">
									</div>
								</div>
								<div class="form-group">
									<label for="placeholder13" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="placeholder13" name="email">
									</div>
								</div>
								
								<div class="form-group">
									<label for="help13" class="col-sm-2 control-label">Phone Number</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="help13" name="phone">
									</div>
								</div>
								<div class="form-group">
									<label for="select13" class="col-sm-2 control-label">Profession</label>
									<div class="col-sm-10">
										<select id="select13" name="profession" class="form-control">
												<option value="">-- select one --</option>
												<option>Architect</option>
												<option>Designer</option>
												<option>Student</option>
												<option>Other</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="select13" class="col-sm-2 control-label">Nationality</label>
									<div class="col-sm-10">
										<select id="select13" name="nationality" class="form-control">
											 <option value="">-- select one --</option>
											  <option value="afghan">Afghan</option>
											  <option value="albanian">Albanian</option>
											  <option value="algerian">Algerian</option>
											  <option value="american">American</option>
											  <option value="andorran">Andorran</option>
											  <option value="angolan">Angolan</option>
											  <option value="antiguans">Antiguans</option>
											  <option value="argentinean">Argentinean</option>
											  <option value="armenian">Armenian</option>
											  <option value="australian">Australian</option>
											  <option value="austrian">Austrian</option>
											  <option value="azerbaijani">Azerbaijani</option>
											  <option value="bahamian">Bahamian</option>
											  <option value="bahraini">Bahraini</option>
											  <option value="bangladeshi">Bangladeshi</option>
											  <option value="barbadian">Barbadian</option>
											  <option value="barbudans">Barbudans</option>
											  <option value="batswana">Batswana</option>
											  <option value="belarusian">Belarusian</option>
											  <option value="belgian">Belgian</option>
											  <option value="belizean">Belizean</option>
											  <option value="beninese">Beninese</option>
											  <option value="bhutanese">Bhutanese</option>
											  <option value="bolivian">Bolivian</option>
											  <option value="bosnian">Bosnian</option>
											  <option value="brazilian">Brazilian</option>
											  <option value="british">British</option>
											  <option value="bruneian">Bruneian</option>
											  <option value="bulgarian">Bulgarian</option>
											  <option value="burkinabe">Burkinabe</option>
											  <option value="burmese">Burmese</option>
											  <option value="burundian">Burundian</option>
											  <option value="cambodian">Cambodian</option>
											  <option value="cameroonian">Cameroonian</option>
											  <option value="canadian">Canadian</option>
											  <option value="cape verdean">Cape Verdean</option>
											  <option value="central african">Central African</option>
											  <option value="chadian">Chadian</option>
											  <option value="chilean">Chilean</option>
											  <option value="chinese">Chinese</option>
											  <option value="colombian">Colombian</option>
											  <option value="comoran">Comoran</option>
											  <option value="congolese">Congolese</option>
											  <option value="costa rican">Costa Rican</option>
											  <option value="croatian">Croatian</option>
											  <option value="cuban">Cuban</option>
											  <option value="cypriot">Cypriot</option>
											  <option value="czech">Czech</option>
											  <option value="danish">Danish</option>
											  <option value="djibouti">Djibouti</option>
											  <option value="dominican">Dominican</option>
											  <option value="dutch">Dutch</option>
											  <option value="east timorese">East Timorese</option>
											  <option value="ecuadorean">Ecuadorean</option>
											  <option value="egyptian">Egyptian</option>
											  <option value="emirian">Emirian</option>
											  <option value="equatorial guinean">Equatorial Guinean</option>
											  <option value="eritrean">Eritrean</option>
											  <option value="estonian">Estonian</option>
											  <option value="ethiopian">Ethiopian</option>
											  <option value="fijian">Fijian</option>
											  <option value="filipino">Filipino</option>
											  <option value="finnish">Finnish</option>
											  <option value="french">French</option>
											  <option value="gabonese">Gabonese</option>
											  <option value="gambian">Gambian</option>
											  <option value="georgian">Georgian</option>
											  <option value="german">German</option>
											  <option value="ghanaian">Ghanaian</option>
											  <option value="greek">Greek</option>
											  <option value="grenadian">Grenadian</option>
											  <option value="guatemalan">Guatemalan</option>
											  <option value="guinea-bissauan">Guinea-Bissauan</option>
											  <option value="guinean">Guinean</option>
											  <option value="guyanese">Guyanese</option>
											  <option value="haitian">Haitian</option>
											  <option value="herzegovinian">Herzegovinian</option>
											  <option value="honduran">Honduran</option>
											  <option value="hungarian">Hungarian</option>
											  <option value="icelander">Icelander</option>
											  <option value="indian">Indian</option>
											  <option value="indonesian">Indonesian</option>
											  <option value="iranian">Iranian</option>
											  <option value="iraqi">Iraqi</option>
											  <option value="irish">Irish</option>
											  <option value="israeli">Israeli</option>
											  <option value="italian">Italian</option>
											  <option value="ivorian">Ivorian</option>
											  <option value="jamaican">Jamaican</option>
											  <option value="japanese">Japanese</option>
											  <option value="jordanian">Jordanian</option>
											  <option value="kazakhstani">Kazakhstani</option>
											  <option value="kenyan">Kenyan</option>
											  <option value="kittian and nevisian">Kittian and Nevisian</option>
											  <option value="kuwaiti">Kuwaiti</option>
											  <option value="kyrgyz">Kyrgyz</option>
											  <option value="laotian">Laotian</option>
											  <option value="latvian">Latvian</option>
											  <option value="lebanese">Lebanese</option>
											  <option value="liberian">Liberian</option>
											  <option value="libyan">Libyan</option>
											  <option value="liechtensteiner">Liechtensteiner</option>
											  <option value="lithuanian">Lithuanian</option>
											  <option value="luxembourger">Luxembourger</option>
											  <option value="macedonian">Macedonian</option>
											  <option value="malagasy">Malagasy</option>
											  <option value="malawian">Malawian</option>
											  <option value="malaysian">Malaysian</option>
											  <option value="maldivan">Maldivan</option>
											  <option value="malian">Malian</option>
											  <option value="maltese">Maltese</option>
											  <option value="marshallese">Marshallese</option>
											  <option value="mauritanian">Mauritanian</option>
											  <option value="mauritian">Mauritian</option>
											  <option value="mexican">Mexican</option>
											  <option value="micronesian">Micronesian</option>
											  <option value="moldovan">Moldovan</option>
											  <option value="monacan">Monacan</option>
											  <option value="mongolian">Mongolian</option>
											  <option value="moroccan">Moroccan</option>
											  <option value="mosotho">Mosotho</option>
											  <option value="motswana">Motswana</option>
											  <option value="mozambican">Mozambican</option>
											  <option value="namibian">Namibian</option>
											  <option value="nauruan">Nauruan</option>
											  <option value="nepalese">Nepalese</option>
											  <option value="new zealander">New Zealander</option>
											  <option value="ni-vanuatu">Ni-Vanuatu</option>
											  <option value="nicaraguan">Nicaraguan</option>
											  <option value="nigerien">Nigerien</option>
											  <option value="north korean">North Korean</option>
											  <option value="northern irish">Northern Irish</option>
											  <option value="norwegian">Norwegian</option>
											  <option value="omani">Omani</option>
											  <option value="pakistani">Pakistani</option>
											  <option value="palauan">Palauan</option>
											  <option value="panamanian">Panamanian</option>
											  <option value="papua new guinean">Papua New Guinean</option>
											  <option value="paraguayan">Paraguayan</option>
											  <option value="peruvian">Peruvian</option>
											  <option value="polish">Polish</option>
											  <option value="portuguese">Portuguese</option>
											  <option value="qatari">Qatari</option>
											  <option value="romanian">Romanian</option>
											  <option value="russian">Russian</option>
											  <option value="rwandan">Rwandan</option>
											  <option value="saint lucian">Saint Lucian</option>
											  <option value="salvadoran">Salvadoran</option>
											  <option value="samoan">Samoan</option>
											  <option value="san marinese">San Marinese</option>
											  <option value="sao tomean">Sao Tomean</option>
											  <option value="saudi">Saudi</option>
											  <option value="scottish">Scottish</option>
											  <option value="senegalese">Senegalese</option>
											  <option value="serbian">Serbian</option>
											  <option value="seychellois">Seychellois</option>
											  <option value="sierra leonean">Sierra Leonean</option>
											  <option value="singaporean">Singaporean</option>
											  <option value="slovakian">Slovakian</option>
											  <option value="slovenian">Slovenian</option>
											  <option value="solomon islander">Solomon Islander</option>
											  <option value="somali">Somali</option>
											  <option value="south african">South African</option>
											  <option value="south korean">South Korean</option>
											  <option value="spanish">Spanish</option>
											  <option value="sri lankan">Sri Lankan</option>
											  <option value="sudanese">Sudanese</option>
											  <option value="surinamer">Surinamer</option>
											  <option value="swazi">Swazi</option>
											  <option value="swedish">Swedish</option>
											  <option value="swiss">Swiss</option>
											  <option value="syrian">Syrian</option>
											  <option value="taiwanese">Taiwanese</option>
											  <option value="tajik">Tajik</option>
											  <option value="tanzanian">Tanzanian</option>
											  <option value="thai">Thai</option>
											  <option value="togolese">Togolese</option>
											  <option value="tongan">Tongan</option>
											  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
											  <option value="tunisian">Tunisian</option>
											  <option value="turkish">Turkish</option>
											  <option value="tuvaluan">Tuvaluan</option>
											  <option value="ugandan">Ugandan</option>
											  <option value="ukrainian">Ukrainian</option>
											  <option value="uruguayan">Uruguayan</option>
											  <option value="uzbekistani">Uzbekistani</option>
											  <option value="venezuelan">Venezuelan</option>
											  <option value="vietnamese">Vietnamese</option>
											  <option value="welsh">Welsh</option>
											  <option value="yemenite">Yemenite</option>
											  <option value="zambian">Zambian</option>
											  <option value="zimbabwean">Zimbabwean</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="help13" class="col-sm-2 control-label">Current country - city</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="help13" name="country">
									</div>
								</div>
								<div class="form-group">
									<label for="select13" class="col-sm-2 control-label">English language level</label>
									<div class="col-sm-10">
										<select id="select13" name="level" class="form-control">
											<option value="">-- select one --</option>
											<option>Good understanding</option>
											<option>Very well</option>
											<option>Excellent</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="groupcheckbox17" class="col-sm-2 control-label">Digital tools you are using or have knowledge in</label>
									<div class="col-sm-9">
										<div class="input-group">
											<label class="checkbox-inline checkbox-styled">
												<input type="checkbox" value="AutoCAD" name="knowledge[]"><span>AutoCAD</span>
											</label>
											<label class="checkbox-inline checkbox-styled">
												<input type="checkbox" value="3dsMax" name="knowledge[]"><span>3dsMax</span>
											</label>
											<label class="checkbox-inline checkbox-styled">
												<input type="checkbox" value="ArchiCAD" name="knowledge[]"><span>ArchiCAD</span>
											</label>
										</div>
										<div class="input-group">
											<label class="checkbox-inline checkbox-styled">
												<input type="checkbox" value="Maya" name="knowledge[]"><span>Maya &nbsp; &nbsp; &nbsp; &nbsp;</span>
											</label>
											<label class="checkbox-inline checkbox-styled">
												<input type="checkbox" value="Rhino" name="knowledge[]"><span>Rhino &nbsp; &nbsp;</span>
											</label>
											<label class="checkbox-inline checkbox-styled">
												<input type="checkbox" value="Other" name="knowledge[]"><span>Other</span>
											</label>
										</div>
									</div><!--end .col -->
								</div>
								<div class="form-group">
									<label for="textarea13" class="col-sm-2 control-label">Please explain on the lines below the reason and purpose of participating in this workshop</label>
									<div class="col-sm-10">
										<textarea name="explication" id="textarea13" class="form-control" rows="3" placeholder=""></textarea>
									</div>
								</div>
								<div class="card-actionbar">
								<div class="card-actionbar-row">
									<button type="submit" name="submit" class="btn btn-flat btn-primary ink-reaction">Validate</button>
								</div>
							</div>
					</form>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
			
            <!-- End Contacts Container -->

        </section>



    </main>
    <!-- End Main -->


    <!-- Footer -->
   <?php require "footer.php"; ?>
    <!-- End Footer -->


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '../../www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-56719616-2');
    ga('send', 'pageview');
    </script>
    <!-- Scripts -->
    <script src="scripts/retina.min.js"></script>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/owl.carousel.min.js"></script>
    
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.nicescroll.min.js"></script>
    <script src="scripts/koel.js"></script>
	
<script src="js/modules/materialadmin/libs/spin.js/spin.min.js"></script>
<script src="js/modules/materialadmin/libs/autosize/jquery.autosize.min.js"></script>
<script src="js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js"></script>
<script src="js/modules/materialadmin/core/demo/Demo.js"></script>
    <!-- End Scripts -->
</body>


<!-- Mirrored from koel.webcloudltd.com/Agency/about.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 26 Apr 2015 18:37:42 GMT -->
</html>
