<!DOCTYPE html>
<html>

<head>
  <title>Maamedia</title>
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
  <a href="#home" class="active"><img src="https://commons.maamedia.org/images/1/1a/Maamedia_Logo.png" style="width:50px; height:auto;">Maamedia</a>
  <!-- Navigation links (hidden by default) -->
  <div id="maamediaLinks">
    <a href="/"><span class="fa fa-fw fa-home">Home</a>
    <a href="#ourwork"><span class="fa fa-server"></span>Our work</a>
    <a href="/contact"><span class="fa fa-inbox"></span>Contact</a>
    <a href="/about"><span class="fa fa-info-circle"></span> About us</a>
    <a href="https://meta.maamedia.org/wiki/Special:CreateAccount"><span class="glyphicon glyphicon-user"></span> Create account</a>
    <a href="https://meta.maamedia.org/wiki/Special:UserLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="navMaamedia()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<header class="text-white text-center">
<!--SITENOTICE -->
<!--SITENOTICE END-->

<h1 class="masthead-heading text-uppercase mb-0">
					Welcome
				</h1>
<a href="https://meta.maamedia.org/wiki/Special:CreateAccount"><button class="button ca">Create account</button></a>
<a href="#ourwork"><button class="button work">Our work
				</h1></button></a>

<!--This is text, which appears in head on website.-->
					<div class="col-lg-12 ml-auto">
						<p class="lead">
						    Founded by <a href="https://meta.maamedia.org/wiki/User:Mito">Mito</a> <span style="font-size: 0.95em; color:#555; position: relative;">(from Finland)</span> and <a href="https://meta.maamedia.org/wiki/User:Puma">Puma</a> <span style="font-size: 0.95em; color:#555; position: relative;">(from Indonesia)</span>.
						  </p>
						  
				</div>
				<hr>
<div style="font-size:190%">We are not a company or organization, but we are a community-sponsored and maintained free open source project that manufactures free online tools and owns the guidebook Masymanwiki.</div>
<hr>
<div style="font-size:150%">Our goal is to promote people’s skill and intelligence to learn things correctly, but also to help them with everyday things with our quality tools.</div>
</header>
<section class="page-section ourwork" id="ourwork">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="page-section-heading text-uppercase">Our work</h2></div></div></div>
<div class="col-lg-12 text-center">
<img src="https://commons.maamedia.org/images/b/b0/Masymanwiki_Logo.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Masymanwiki</div><div style="font-size:150%;">Our main project is Masymanwiki. It is free online guide book, with which people can learn to do things. Masymanwiki can be edited by anyone and costs nothing. Masymanwiki is full of quality guides.</div>
<hr>
<img src="https://commons.maamedia.org/images/9/9d/Maamedia_Tools_Logo.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Tools</div><div style="font-size:150%;">In addition to wikis, we also develop free online tools to help people and businesses with everything. Such tools include payroll utilities and family tree building software. You can identify all the tools developed by Maamedia yourself from the following character, which must be found in some part of the tool page: <br><img src="https://commons.maamedia.org/images/4/40/Powered_by_MaamediaTools.png" style="max-width:50%;height:auto;">
</div>
<hr>
<img src="https://commons.maamedia.org/images/b/b2/Maamedia_Community_Services.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Community Services</div><div style="font-size:150%;">We have developed free and secure community services for all people, including non-wiki users. These include Maasome, like Facebook, which has different and good features. We’ve also developed a free Chat service and later there will be a messaging app like WhatsApp online.</div>
<hr>
<img src="https://commons.maamedia.org/images/2/27/Maamedia_ACT-logo.png" style="max-width:100%;height:auto;">
<div style="font-size:250%">Account Creator Team</div><div style="font-size:150%;">The Account Creator Team (ACT) is an online system that allows anyone to request a wiki user through various measures (if the IP address is blocked, etc.) The Account Creator Team consists of a request page as well as a request system that receives all requests. Volunteers can be ACT members, that is, accept or reject account requests from their system.</div>
<hr>
</div>

<center>
<h1>Create free account.</h1><span style="color:white; background-color:red" class="badge badge-danger">Recommended</span>
<h1>Create free Masymanwiki article.</h1>
<h1>Get good feelings and help others.</h1>
<h1>Enjoy.</h1>
<h1>We appreciate you.</h1><span style="color:white; background-color:red" class="badge badge-danger">At all times</span>
</center>
<div class="container">
  <div class="jumbotron">
    <h1>We are Maamedia, a perfect family.</h1>
  </div>
</div>

<!--Footer-->
<footer style="height:auto; color:white; background-color:black">
  <h1 style="color:white; background-color:black; padding:40px; margin:0; text-align:center;">Made with 🤍 Maamedia</h1>
<div style="border-radius: 3px; max-width: 800px; padding: 15px; margin:auto;margin-top: 15px;color: #7b7b7b;" align="center">
    <div style="font-size:140%">Legal Information</div>
         <a href="/privacy-policy">Privacy Policy</a><br>
         <a href="/tos">Terms of Use</a><hr style="margin: 8px;">
    <div style="font-size:140%">Contact to Maamedia</div>
    <i class="fa fa-envelope"></i> <a href="mailto:info@maamedia.org">info@maamedia.org</a><hr style="margin: 8px;">
    <div style="font-size:140%">Help</div>
        <a href="/faq">FAQ</a><br>
        <a href="https://crm.maamedia.org/support">Support</a><hr style="margin: 8px;">
    <div style="font-size:140%">Source code</div>
    <i class="fa fa-github"></i> <a href="https://github.com/maamedia">GitHub</a><br>
        <a href="/coding">Coding in Maamedia</a>
    
        </div>
</footer>
</body>
</html>
