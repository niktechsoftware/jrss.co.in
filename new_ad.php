<?php 
session_start(); 
$test = $_SESSION['username'];
$temp = strlen ( $test );
if($temp != 0)
{

}
else
{
//header("location:login.php");
}
?>
<!DOCTYPE html><head>
		
		<meta name="description" content="cmsmasters responsive html5 website template" />
		
<meta name="keywords" content="html5, css3, template, responsive, adaptive" />
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
		
		table tr td{padding:10px; margin-left:200px;}
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

		
<title>JRSS | NEW ADMITION</title>
	</head>
<body>S
<!-- __________________________________________________ Start Page -->
		<section id="page">

			<a href="#" id="slide_top"></a>
			<div class="container">
<!--
 __________________________________________________ Start Header -->
				<?php include "menu.php" ?>
<!--
 __________________________________________________ Finish Header -->

				
<!--
 __________________________________________________ Start Middle -->
				<section id="middle">
					
<div class="headline">
						<h2>NEW STUDENT ADMITION</h2>
					</div>
					<div class="content_wrap nobg">
<!--
 __________________________________________________ Start Content -->
						<section id=
"middle_content">
<?php 
$i = $_GET['i'];
if($i == 1)
{
	echo "<font color='green'>Added Successful..</font>";
}
if($i == 2)
{
	echo "<font color='red'>Somthing wrong contact administrator..</font>";
}
?>
          <form method="post" action="new_ad_db.php" id="form2" runat="server" enctype="multipart/form-data">
				
				<table width="80%" align="center">
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><input type="text" name="name" size="40" required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="fname" size="40" required />
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">DATE OF BIRTH* (DD/MM/YYYY) :
						</td>
						<td align="left"><input type="text" name="dob" size="12" id="inputField" required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">ADDRESS* :</td>
						<td align="left"><textarea name="add" rows="5" cols="30" required></textarea></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">MOBILE NUMBER* :</td>
						<td align="left"><input type="text" name="mob" size="40" required/></td>
					</tr>
					<tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
						<td align="left">E MAIL ID* :</td>
						<td align="left"><input type="text" name="email" size="40" required/></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">EDUCATIONAL QUALIFICATION:</td>
						<td align="left">
						
							<table>
								<tr>
									<td>Highest Qualification</td>
									<td>&nbsp;&nbsp;</td>
									<td>Board / University</td>
									<td>&nbsp;&nbsp;</td>
									<td>Year</td>
								</tr>
								<tr>
									<td><input type="text" name="highestq" size="20" /></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="university" size="20" /></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="year" size="4" /></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
								<tr>
									<td>Register for</td>
									<td>
										<select name="dept">
											<option value="AIR FORCE">AIR FORCE</option>
											<option value="BANK PO">BANK PO</option>
											<option value="NAVY">NAVY</option>
											<option value="NDA">NDA</option>
											<option value="SSC">SSC</option>
										</select>
									</td>
								</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td>Browse your Image:</td>
						<td><input type="file" class="file_1" name="img" />JPEG, GIF 5MB max per image</td>
					</tr>
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="REGISTER" />	&nbsp;&nbsp;	<input type="reset" value="RESET" />	</td>						
					</tr>
				</table>					
                    </form>
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
				<span>Copyright &copy; 2013 JRSS Coching Institute</span>
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
