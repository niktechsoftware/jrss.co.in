<?php 
session_start(); 
$test = $_SESSION['username'];
$temp = strlen($test);
?>
<!DOCTYPE html>
<head>
		
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

		<title>JRSS | Contact Us</title>
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

				<div class="cont_nav"><a 
href="index.html">Home</a>&nbsp;/&nbsp;<span>Contacts</span></div>
<!--
 __________________________________________________ Start Middle -->
				<section id="middle">
					
<div class="headline">
						<h2>Contacts</h2>
					</div>
					<div class="content_wrap">
<!--
 __________________________________________________ Start Content -->
						<section id="content">

							<div class="entry">
								<h3>Visit us</h3>
								<br />
								<iframe src="https://www.google.com/maps/embed?pb=!1m5!3m3!1m2!1s0x3991ffa7bf400c65%3A0xda51dcaa37470799!2sjrss+ghazipur+up!5e0!3m2!1sen!2sin!4v1385700308165" width="600" height="450" frameborder="0" style="border:0"></iframe>

								<br /><br />
								<h3>Send us a message</h3>
								<div class="cmsms-form-builder">

									<div class="box success_box" style="display:none;">
										<table>
											<tr>

												<td>&nbsp;</td>
												<td>Thank You!<br>Your message has been sent successfully.
</td>
											</tr>
										</table>
									</div>
									

<script type="text/javascript">jQuery(document).ready(function (){
  jQuery('#contactform').validationEngine('init');
  jQuery('#contactform a#contact_form_formsend').click(function (){
    var form_builder_url = jQuery('#contact_form_url').val();
    jQuery('#contactform .loading').animate({
      opacity : 1
    }
    , 250);
    if (jQuery('#contactform').validationEngine('validate')){
      jQuery.post(form_builder_url, {
        contact_name : jQuery('#contact_name').val(), contact_email : jQuery(
        '#contact_email').val(), contact_subject : jQuery('#contact_subject').val(), 
        contact_message : jQuery('#contact_message').val(), formname : 'contact_form', 
        formtype : 'contactf'
      }
      , function (){
        jQuery('#contactform .loading').animate({
          opacity : 0
        }
        , 250);
        document.getElementById('contactform').reset();
        jQuery('#contactform').parent().find('.box').hide();
        jQuery('#contactform').parent().find('.success_box').fadeIn('fast');
        jQuery('html, body').animate({
          scrollTop : jQuery('#contactform').offset().top - 100
        }
        , 'slow');
        jQuery('#contactform').parent().find('.success_box').delay(5000).fadeOut(1000);
      }
      );
      return false;
    }
    else {
      jQuery('#contactform .loading').animate({
        opacity : 0
      }
      , 250);
      return false;
    }
  }
  );
}
);
</script>

									<form action="mail.php" method="post" >
										<div class=
"form_info cmsms_input">
											<label for="contact_name">Name<span> *</span></label>

											<input type="text" name="name" id="contact_name" value="" size="22" tabindex="3"
 class="validate[required,minSize[3],maxSize[100],custom[onlyLetterSp]]"/>
										</div>

										<div class="cl"></div>
										<div class="form_info cmsms_input">
											<label 
for="contact_email">Email<span> *</span></label>
											<input type="text" name="email" 
id="contact_email" value="" size="22" tabindex="4" class="validate[required,custom[email]]" />

										</div>
										<div class="cl"></div>
										<div class="form_info cmsms_input">

											<label for="contact_subject">Subject<span> *</span></label>
											<input type="text" name="sub" id="contact_subject" value="" size="22" tabindex="6" class=
"validate[required,minSize[3],maxSize[100]]" />
										</div>
										<div class="cl"></div>

										<div class="form_info cmsms_textarea">
											<label for="contact_message">Message
<span> *</span></label>
											<textarea name="msg" id="contact_message" cols="28" 
rows="6" tabindex="7" class="validate[required,minSize[3]]" ></textarea>
										</div>
										
<div><input type="hidden" name="contact_form_url" id="contact_form_url" value=
"http://willbridge-html.cmsmasters.net/php/sendmail.php" /></div><!--
 Here you need to set the path to the sendmail file -->
 <?php $i = $_GET['i'];
                            if($i == 1)
                            {
                            echo "<font color='green'>Your message have been sent....</font>"; 
                            } ?>
										<div>
											<input type="submit" value="sent mail" />											
<div class="loading"></form></div>
										</div>
									
								</div>
								<div class="cl"
></div>
							</div>
						</section>
<!--
 __________________________________________________ Finish Content -->

<!--
 __________________________________________________ Start Sidebar -->
						<section id="sidebar">

							<div class="one_first">
								
								<div class="one_first">
								<h1>JRSS ADDRESS</h1>
								<strong>Address :</strong> peer nagar,,<br> near BSNL Ofice ,<br>
									 Ghazipur, 233001,<br>
                                <strong>Mobile : </strong>9453183731, 7376638525,<br>
                                <b>E-Mail Address : </b>jprai.jrss@gmail.com
							</div>
							</div>			
							
							
						</section>
<!--
 __________________________________________________ Finish Sidebar -->
					</div>
				</section>

<!-- __________________________________________________ Finish Middle -->

<!--
 __________________________________________________ Start Bottom -->
				<?php include"bottom.php"; ?>
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

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

<script src="http://maps.gstatic.com/intl/en_us/mapfiles/api-3/9/14/main.js" type="text/javascript">
</script>

<script src="js/jquery.gMap.js" type="text/javascript"></script>

<script type="text/javascript" src="styleChanger/colorpicker/colorpicker.js"></script>

<script type="text/javascript" src="styleChanger/changer.js"></script>

		
	</body>
</html>