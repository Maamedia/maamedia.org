<?php
require_once __DIR__ . '/GetTranslations.php';

$lang = $_GET['lang'] ?? 'en';
?>

<!DOCTYPE html>
<html>

<head>
  <title><?php echo( GetTranslation( 'title-maamedia' ) ); ?></title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Maamedia is a free, open source project that makes free tools and wikis. Made in Finland (Mito) and Indonesia (Puma).">
    <link rel="stylesheet" href="https://crm.maamedia.org/drafts/christmas/assets/css/global.css">
<link rel='stylesheet' id='google-font-quicksand-montserrat-poppins-css' href='//fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C500%2C600%2C700%257CPoppins%3A400%2C400i%2C700%2C700i%257CMontserrat%3A400%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;display=swap&#038;ver=5.5' media='all'/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<style>
.left, .right {
  float: left;
  width: 20%; /* The width is 20%, by default */
}
body {
    font-family: 'Quicksand';
}
.main {
  float: left;
  width: 60%; /* The width is 60%, by default */
}

/* Use a media query to add a breakpoint at 800px: */
@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

/* Hide the links inside the navigation menu (except for logo/home) */
.topnav #maamediaLinks {
  display: none;
}

/* Style navigation menu links */
.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

/* Style the hamburger menu */
.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

/* Add a grey background color on mouse-over */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active link (or home/logo) */
.active {
  background-color: #00000;
  color: white;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button.ca {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button.ca:hover {
  background-color: #4CAF50;
  color: white;
}

.button.work {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button.work:hover {
  background-color: #f44336;
  color: white;
}


</style>
<script>
function navMaamedia() {
  var x = document.getElementById("maamediaLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>

<div class="topnav">
  <a href="#home" class="active"><img src="https://commons.maamedia.org/images/1/1a/Maamedia_Logo.png" style="width:50px; height:auto;"><?php echo( GetTranslation( 'text-maamedia' ) ); ?></a>
  <!-- Navigation links (hidden by default) -->
  <div id="maamediaLinks">
    <a href="/"><span class="fa fa-fw fa-home"></span> <?php echo( GetTranslation( 'nav-home' ) ); ?></a>
    <a href="#ourwork"><span class="fa fa-server"></span> <?php echo( GetTranslation( 'nav-ourwork' ) ); ?></a>
    <a href="/contact"><span class="fa fa-inbox"></span> <?php echo( GetTranslation( 'nav-contact' ) ); ?></a>
    <a href="/about"><span class="fa fa-info-circle"></span> <?php echo( GetTranslation( 'nav-about' ) ); ?></a>
    <a href="https://meta.maamedia.org/wiki/Special:CreateAccount"><span class="glyphicon glyphicon-user"></span> <?php echo( GetTranslation( 'create-account' ) ); ?></a>
    <a href="https://meta.maamedia.org/wiki/Special:UserLogin"><span class="glyphicon glyphicon-log-in"></span> <?php echo( GetTranslation( 'nav-login' ) ); ?></a>
	<form method="get">
									<select name="lang" onchange="this.form.submit()">
										<?php

										$i18nDirectory = scandir( 'i18n' );
										foreach ( $i18nDirectory as $i18nFile ) {
											$languageCode = str_replace( '.json', '', $i18nFile );
											if ( $languageCode !== 'qqq' && $languageCode !== '..' && $languageCode !== '.' ) {
												echo( '<option value="' . $languageCode . '"' . ( $lang == $languageCode ? ' selected' : null ) . '>' . LOCALE_GET_DISPLAY_NAME( $languageCode, $languageCode ) . '</option>' );
											}
										}

										?>
									</select>
								</form>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="navMaamedia()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<header class="text-white text-center">
<!--SITENOTICE-->
<div align="center">
 <marquee behavior="alternate" bgcolor="#bb3434" direction="left" height:="" 
 loop="7" scrollamount="1" scrolldelay="2" width="100%">
 <span style="font-size: 20px;color:#FFFFFF">
 Dear visitor! Maamedia wikis have been updated to MediaWiki version 1.36. The update was made on the night of May 7th to May 8th. So mistakes can also be expected for the reader, and not everything may be displayed correctly. Errors are being fixed!!</span></marquee>
</div>

<!--SITENOTICE END-->

<h1 class="masthead-heading text-uppercase mb-0">
					<?php echo( GetTranslation( 'welcome-text' ) ); ?>
				</h1>
<a href="https://meta.maamedia.org/wiki/Special:CreateAccount"><button class="button ca"><?php echo( GetTranslation( 'create-account' ) ); ?></button></a>
<a href="#ourwork"><button class="button work"><?php echo( GetTranslation( 'ourwork-text' ) ); ?>
				</h1></button></a>

<!--This is text, which appears in head on website.-->
					<div class="col-lg-12 ml-auto">
						<p class="lead">
						    <?php echo( GetTranslation( 'founded-by' ) ); ?> <a href="https://meta.maamedia.org/wiki/User:Mito">Mito</a> <span style="font-size: 0.95em; color:#555; position: relative;">(<?php echo( GetTranslation( 'from-finland' ) ); ?>)</span> <?php echo( GetTranslation( 'text-and' ) ); ?> <a href="https://meta.maamedia.org/wiki/User:Puma">Puma</a> <span style="font-size: 0.95em; color:#555; position: relative;">(<?php echo( GetTranslation( 'from-indonesia' ) ); ?>)</span>.
						  </p>
						  
				</div>
				<hr>
<div style="font-size:190%"><?php echo( GetTranslation( 'header-text1' ) ); ?></div>
<hr>
<div style="font-size:150%"><?php echo( GetTranslation( 'header-text2' ) ); ?></div>
</header>
<section class="page-section ourwork" id="ourwork">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="page-section-heading text-uppercase"><?php echo( GetTranslation( 'nav-ourwork' ) ); ?></h2></div></div></div>
<div class="col-lg-12 text-center">
<img src="https://commons.maamedia.org/images/b/b0/Masymanwiki_Logo.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Masymanwiki</div><div style="font-size:150%;"><?php echo( GetTranslation( 'work-masymanwiki' ) ); ?></div>
<hr>
<img src="https://commons.maamedia.org/images/a/af/Maamedia_Meta-Wiki_-_VisualEditor_Welcome.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">VisualEditor</div><div style="font-size:150%;"><?php echo( GetTranslation( 'work-visualeditor' ) ); ?></div>
<hr>
<img src="https://commons.maamedia.org/images/9/9d/Maamedia_Tools_Logo.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Tools</div><div style="font-size:150%;"><?php echo( GetTranslation( 'work-tools' ) ); ?> <br><img src="https://commons.maamedia.org/images/4/40/Powered_by_MaamediaTools.png" style="max-width:50%;height:auto;">
</div>
<hr>
<img src="https://commons.maamedia.org/images/b/b2/Maamedia_Community_Services.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Community Services</div><div style="font-size:150%;"><?php echo( GetTranslation( 'work-community' ) ); ?></div>
<hr>
<img src="https://commons.maamedia.org/images/2/27/Maamedia_ACT-logo.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Account Creator Team</div><div style="font-size:150%;"><?php echo( GetTranslation( 'work-act' ) ); ?></div>
<hr>
<img src="https://commons.maamedia.org/images/4/47/Maamedia_Phabricator-2.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Phabricator</div><div style="font-size:150%;"><?php echo( GetTranslation( 'work-phabricator' ) ); ?></div>
<a href="https://phabricator.maamedia.org"><button class="btn btn-primary"><?php echo( GetTranslation( 'button-phab' ) ); ?></button></a>
<hr>
</div>

<center>
<h1><?php echo( GetTranslation( 'feel-ca' ) ); ?></h1><span style="color:white; background-color:red" class="badge badge-danger"><?php echo( GetTranslation( 'recommended' ) ); ?></span>
<h1><?php echo( GetTranslation( 'feel-create' ) ); ?></h1>
<h1><?php echo( GetTranslation( 'feel-good' ) ); ?></h1>
<h1><?php echo( GetTranslation( 'feel-enjoy' ) ); ?></h1>
<h1><?php echo( GetTranslation( 'feel-appreciate' ) ); ?></h1><span style="color:white; background-color:red" class="badge badge-danger"><?php echo( GetTranslation( 'at-all-times' ) ); ?></span>
</center>
<div class="container">
  <div class="jumbotron">
    <h1><?php echo( GetTranslation( 'we-are-maamedia' ) ); ?></h1>
  </div>
</div>
<!--Footer-->
<footer style="height:auto; color:white; background-color:black">
  <h1 style="color:white; background-color:black; padding:40px; margin:0; text-align:center;"><?php echo( GetTranslation( 'made-with' ) ); ?> 🤍 <?php echo( GetTranslation( 'text-maamedia' ) ); ?></h1>
<div style="border-radius: 3px; max-width: 800px; padding: 15px; margin:auto;margin-top: 15px;color: #7b7b7b;" align="center">
         <i class="fa fa-language"></i> <a href="https://meta.maamedia.org/wiki/Special:Translate?group=Maamedia.org"><?php echo( GetTranslation( 'footer-translate' ) ); ?></a> 
    <div style="font-size:140%"><?php echo( GetTranslation( 'footer-legal' ) ); ?></div>
         <a href="/privacy-policy"><?php echo( GetTranslation( 'footer-pp' ) ); ?></a><br>
         <a href="/tos"><?php echo( GetTranslation( 'footer-tos' ) ); ?></a><hr style="margin: 8px;">
    <div style="font-size:140%"><?php echo( GetTranslation( 'footer-contact' ) ); ?></div>
    <i class="fa fa-envelope"></i> <a href="mailto:info@maamedia.org">info@maamedia.org</a><hr style="margin: 8px;">
    <div style="font-size:140%"><?php echo( GetTranslation( 'footer-help' ) ); ?></div>
        <a href="/faq"><?php echo( GetTranslation( 'footer-faq' ) ); ?></a><br>
        <a href="https://crm.maamedia.org/support"><?php echo( GetTranslation( 'footer-support' ) ); ?></a><hr style="margin: 8px;">
    <div style="font-size:140%"><?php echo( GetTranslation( 'footer-source' ) ); ?></div>
    <i class="fa fa-github"></i> <a href="https://github.com/maamedia"><?php echo( GetTranslation( 'footer-github' ) ); ?></a><br>
        <a href="/coding"><?php echo( GetTranslation( 'footer-code' ) ); ?></a>
    
        </div>
</footer>
</body>
</html>
