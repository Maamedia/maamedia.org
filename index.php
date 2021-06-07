<!DOCTYPE html>
<html>
<head>
  <title>Maamedia</title>
  <html prefix="og: https://maamedia.org/#">
  <html lang="en">
  <meta charset="utf-8">
  <meta property="og:url" content="https://maamedia.org" />
  <meta name="DC.element" content="Value" />
  <meta name="DCTERMS.element" content="Value" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Maamedia is a free, open source project that makes free tools and wikis. Made in Finland (Mito) and Indonesia (Puma).">
  <meta name="keywords" content="Maamedia, Masymanwiki, Maamedia Tools, toolskit, free guides, guidebook, free guidebook, free online tools, free online social network, how to">

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
  <a href="#home" class="active"><img src="https://commons.maamedia.org/images/1/1a/Maamedia_Logo.png" alt="Maamedia official logo" style="width:50px; height:auto;">Maamedia</a>
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
<img src="https://commons.maamedia.org/images/b/b0/Masymanwiki_Logo.png" alt="Guidebook Masymanwiki's official logo." style="max-width:100%;height:auto;">
<div style="font-size:250%">Masymanwiki</div><div style="font-size:150%;">Our main project is Masymanwiki. It is free online guide book, with which people can learn to do things. Masymanwiki can be edited by anyone and costs nothing. Masymanwiki is full of quality guides.</div>
<hr>
<img src="https://commons.maamedia.org/images/9/9d/Maamedia_Tools_Logo.png" alt="Maamedia Tools open source project logo." style="max-width:100%;height:auto;">
<div style="font-size:250%">Tools</div><div style="font-size:150%;">In addition to wikis, we also develop free online tools to help people and businesses with everything. Such tools include payroll utilities and family tree building software. You can identify all the tools developed by Maamedia yourself from the following character, which must be found in some part of the tool page: <br><img src="https://commons.maamedia.org/images/4/40/Powered_by_MaamediaTools.png" style="max-width:50%;height:auto;">
</div>
<hr>
<img src="https://commons.maamedia.org/images/b/b2/Maamedia_Community_Services.png" alt="Maamedia's community services" style="max-width:100%;height:auto;">
<div style="font-size:250%">Community Services</div><div style="font-size:150%;">We have developed free and secure community services for all people, including non-wiki users. These include Maasome, like Facebook, which has different and good features. We’ve also developed a free Chat service and later there will be a messaging app like WhatsApp online.</div>
<hr>
<img src="https://commons.maamedia.org/images/2/27/Maamedia_ACT-logo.png" alt="Account Creator Team (ACT)" style="max-width:100%;height:auto;">
<div style="font-size:250%">Account Creator Team</div><div style="font-size:150%;">The Account Creator Team (ACT) is an online system that allows anyone to request a wiki user through various measures (if the IP address is blocked, etc.) The Account Creator Team consists of a request page as well as a request system that receives all requests. Volunteers can be ACT members, that is, accept or reject account requests from their system.</div>
</div>

<!--News Area-->
<style>
.article {
  box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.12);
  overflow: hidden;
  border-radius: 0.5rem;
}

.article_title {
  margin: 0;
}

.article_excerpt {
  transition: height 0.5s, opacity 0.5s;
}

.article_excerpt:not(.visible) {
  height: 0;
  opacity: 0;
}

.article_excerpt, .article_meta {
  transform-origin: bottom;
}

.article_meta {
  padding: 10px 1.25rem 1.25rem;
  color: var(--text);
  position: relative;
  z-index: 2;
  transition: margin-top 0.5s;
  background: var(--bg);
}

.article_meta.center_y {
  transform-origin: center;
  transition: transform 0.5s;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

@media screen and (min-width: 42rem) {
  .article_meta.center_y {
    left: -2rem;
  }
}

    .article_thumb {
  display: grid;
  position: relative;
  z-index: 0;
  overflow: hidden;
  height: 15rem;
  background-size: cover;
  background-position: 50% 50%;
}

@media screen and (min-width: 35rem) {
  .article_thumb {
    height: 22.5rem;
  }
}

.article_thumb img {
  transition: transform 0.5s, opacity 0.5s;
}

.article_thumb::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  bottom: 0;
  z-index: 1;
  background: var(--bg);
  opacity: 0;
  transition: opacity 0.1s ease-out;
}

.article_showcase .article_thumb {
  height: 15rem;
}

.article_showcase .article_meta {
  padding-top: 1.5rem;
}

.article:hover .article_thumb img {
  transform: scale(1.1);
}

.article:hover .article_thumb::after {
  transition: opacity 0.1s ease-out;
  opacity: 0.5;
}

.article:hover .article_excerpt:not(.visible) {
  height: 75px;
  opacity: 1;
}

.article:hover .article_meta:not(.center_y) {
  margin-top: -75px;
}

@media screen and (min-width: 769px) {
  .article:hover .article_meta.center_y {
    transform: translateX(-3rem);
  }
}

.article:hover {
  box-shadow: 0 1.5rem 6rem rgba(0, 0, 0, 0.17);
}

.article:hover a {
  color: initial !important;
}

.article_hidden {
  display: none;
}
.btn-readmore .cta-btn-text{background-position:left;background-repeat:no-repeat;background-size:14px;padding-left:20px}.cta-news .bg-img-container{left:0}.cta-news .bg-img-container:after{position:absolute;content:"";top:0;bottom:0;right:0;left:0;background:rgba(0,0,0,0);transition:.3s all}
.readmore-btn{border:none;background:0 0;border-radius:2px;background:#fde8f0;border:1px solid #fde8f0;color:#d40356;font-weight:700;font-size:15px;height:34px;margin-left:5px}.readmore-btn a{display:block;height:34px}.readmore-btn--desktop a{padding:.4375rem .4rem 0}@media (max-width:768px){.readmore-btn--desktop{display:none}}.readmore-btn--mobile{width:40px;line-height:34px;text-align:center}.readmore-btn--mobile a{padding-top:3px}.readmore-btn--mobile a img{display:inline-block;width:20px;height:20px}@media (min-width:769px){.readmore-btn--mobile{display:none}}.readmore-btn:focus,.readmore-btn:hover{border-color:#d40356;outline:none}.readmore-btn img.secure{height:14px;margin-right:2px;margin-bottom:-1px}.language-dropdown button{border:none;background:0 0;border-radius:2px;color:#3a25ff;background:#eeeaff;border:1px solid #eeeaff;display:flex;justify-content:center;align-items:center;padding:0 .4rem;height:34px;margin-left:5px;font-size:13px;text-transform:uppercase}@media (max-width:768px){.language-dropdown button{padding:0;text-align:center;width:40px}}.language-dropdown button:focus,.language-dropdown button:hover{border-color:#3a25ff;outline:none}.language-dropdown button .language-icon{margin-right:5px}
.cta-btn-text{background-position:left;background-repeat:no-repeat;background-size:14px;padding-left:20px}.cta-news .bg-img-container{left:0}.cta-news .bg-img-container:after{position:absolute;content:"";top:0;bottom:0;right:0;left:0;background:rgba(0,0,0,0);transition:.3s all}.cta-news .darken-img .bg-img-container:after{background:rgba(0,0,0,.25)}
</style>
<div style="text-align:center; padding:80px;">
<h1>News</h1>
<div style="color:green; font-size:180%; font-weight:bold;">What happen on Maamedia?</div>
<br>


<a href="https://maamedia.org/news/we-started-advertising-on-Instagram" class="grid-reverse"><div class="article_thumb" style="background-image:url(https://hbr.org/resources/images/article_assets/2021/02/Feb21_19_1218814245.jpg)"></div><div class="article_meta center_y"><time class="post_date">June 03, 2021</time><h3 class="article_title">We started adverising on Instagram</h3><div class="article_excerpt visible"><p></p><p>On May 29, 2021, Maamedia started advertising on Instagram; see results.</p><p></p></div></div></a>
										<div class="readmore-btn">
							<a href="https://maamedia.org/news/we-started-advertising-on-Instagram">
								Read more							</a>
						</div>


<!--News Area: END-->

</div>
<div style="text-align:center">
<h1>Create free account.</h1><span style="color:white; background-color:red" class="badge badge-danger">Recommended</span>
<h1>Create free Masymanwiki article.</h1>
<h1>Get good feelings and help others.</h1>
<h1>Enjoy.</h1>
<h1>We appreciate you.</h1><span style="color:white; background-color:red" class="badge badge-danger">At all times</span>
</div>
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
