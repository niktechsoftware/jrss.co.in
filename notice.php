<?php 
session_start(); 
$test = $_SESSION['username'];
$temp = strlen($test);

?>
<!DOCTYPE html><head>
		
		<meta name="description" content="JRSS is the best coching center in ghazipur." />		
		<meta name="keywords" content="NAVY , AIRFORCE, SSC, BANK, POLICE, RAILWAY" />
		<meta name=
"viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel=
"shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href=
"css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href=
"css/styles/fonts.css" type="text/css" media="screen" />
		<link href=
'http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,400italic' rel='stylesheet' type=
'text/css'>
		<link rel="stylesheet" href="css/styles/jquery.prettyPhoto.css" type="text/css" media=
"screen" />
		<link rel="stylesheet" type="text/css" href="styleChanger/changer.css" />
		<link rel=
"stylesheet" type="text/css" href="styleChanger/colorpicker/colorpicker.css" />
		<style id=
"cFontStyleWColor1" type="text/css">
			a, .color_3,.post footer .published,.post .entry-title a
:hover,.post.format-link .entry-title a,.cmsmsLike:hover span,.portfolio_inner .entry-title a:hover 
{color:#ff9108;}
		</style>
		<style id="cFontStyleWColor2" type="text/css">
			.cmsmsLike:hover, 
.resp_navigation.active,.widget_custom_popular_portfolio_entries .cmsms_content_slider_parent ul
.cmsms_slides_nav li.active a, .widget_custom_popular_portfolio_entries .cmsms_content_slider_parent
 ul.cmsms_slides_nav li:hover a,.widget_custom_testimonials_entries .cmsms_content_slider_parent ul
.cmsms_slides_nav li.active a, .widget_custom_testimonials_entries .cmsms_content_slider_parent ul
.cmsms_slides_nav li:hover a, .tp-bullets.simplebullets .bullet:hover, .tp-bullets.simplebullets 
.bullet.selected, #slide_top, ul.cmsms_slides_nav li.active a, ul.cmsms_slides_nav li:hover a, span
.dropcap2, .tog:hover .cmsms_plus, .tog.current .cmsms_plus, .tour li.current .cmsms_plus, .tour li 
a:hover .cmsms_plus, .cmsms_comments, .wp-pagenavi > span.current, .wp-pagenavi a:hover, 
.portfolio_inner .hover_effect, a.cmsms_close_video:hover {background-color:#ff9108;}
		</style>
		
<style id="cFontStyleWColor3" type="text/css">
			input[type="text"]:focus, textarea:focus, select
:focus, #bottom input:focus, #bottom textarea:focus, #bottom select:focus,.tabs > li a.current, 
.wp-pagenavi > span.current,.wp-pagenavi a:hover, .responsibe_block_inner {border-color:#ff9108;}
table tr td{padding:5px; }
		
</style>
		<style id="cFontStyleWColor4" type="text/css">
			body {background-color:#ffffff;}
		
</style>
		<!--
[if lt IE 9]>
			<link rel="stylesheet" href="css/styles/ie.css" type="text/css" />
			<link rel="st
ylesheet" href="css/styles/ieCss3.css" type="text/css" media="screen" />
		<![endif]-->
		

<script src="js/modernizr.custom.all.js" type="text/javascript"></script>

<script src="js/respond.js" type="text/javascript"></script>

<script src="js/jquery.min.js" type="text/javascript"></script>

<script src="js/jquery.easing.js" type="text/javascript"></script>

		
<title>JRSS | Student Login</title>
	</head>
<body>
<!-- __________________________________________________ Start Page -->
		<section id="page">

			<a href="#" id="slide_top"></a>
			<div class="container">
<!--
 __________________________________________________ Start Header -->
				<?php 
					
				if($temp > 1)
					{
					include "menu1.php";					
					}
					else
					{
					include "menu.php";
					}	
				 ?>
<!--
 __________________________________________________ Finish Header -->

				
<!--
 __________________________________________________ Start Middle -->
				<section id="middle">
					
<div class="headline">
						<h2>Employment News</h2>
					</div>
					<div class="content_wrap nobg">
<!--
 __________________________________________________ Start Content -->
						<section id="middle_content">
<?php
				include_once "db.php";
				$notice = "select * from news";
				$result = mysql_query($notice);
				while($row = mysql_fetch_array($result))
				{
?>
					<h3><?php echo $row['title']; ?></h3>
					<p><?php echo $row['detail']; ?></p>
					<?php if(strlen($row['image']) > 0){ ?> <p> <img src='./news_image/<?php echo $row['image']; ?>' /></p> <?php } ?>
					<a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a>
					<br />
					<hr />
					<br />
<?php
				}
?>
						</section>
<!--
 __________________________________________________ Finish Content -->
					</div>
				</section>

<!-- __________________________________________________ Finish Middle -->

<!--
 __________________________________________________ Start Bottom -->
				<?php include "bottom.php" ?>
<!--
 __________________________________________________ Finish Bottom -->
			</div>
		</section>
<!--
 __________________________________________________ Finish Page -->

<!--
 __________________________________________________ Start Footer -->
		<footer id="footer">
			<div 
class="footer_inner">
				<span>JRSS Coching Classes &copy; 2013</span>
				<div class="fr">
					
<div class="footer_html">
						<a href="#"><img style="float:left;margin:3px 8px 0 0;" src=
"images/img/icon_docs.png" alt="" />online docs</a>
					</div>
				</div>
			</div>
		</footer>

<!-- __________________________________________________ Finish Footer -->

		

<script src="js/jquery.script.js" type="text/javascript"></script>

<script src="js/jquery.validationEngine-lang.js" type="text/javascript"></script>

<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script src="js/jquery.jtweetsanywhere.js" type="text/javascript"></script>

<script src="js/jquery.flickrfeed.min.js" type="text/javascript"></script>

<script type="text/javascript" src="styleChanger/colorpicker/colorpicker.js"></script>

<script type="text/javascript" src="styleChanger/changer.js"></script>

		
	</body>
</html>