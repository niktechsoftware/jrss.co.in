<section id="bottom">
					
<div class="bottom_inner">
						<div class="one_fourth">
							<aside class=
"widget widget_custom_popular_portfolio_entries">
								

<script type="text/javascript">jQuery(document).ready(function (){
  jQuery('.widget_custom_popular_portfolio_entries_slides').cmsmsResponsiveContentSlider({
    sliderWidth : '100%', sliderHeight : 'auto', animationSpeed : 500, animationEffect : 
    'slide', animationEasing : 'easeInOutExpo', pauseTime : 5000, activeSlide : 1, 
    touchControls : true, pauseOnHover : false, arrowNavigation : true, slidesNavigation : 
    true  }
  );
}
);
</script>

				<div class="widget_custom_popular_portfolio_entries_container">
					<h4 class="widgettitle"><a href="select_navy.php">Our Selected Students</a></h4>
					<ul class="widget_custom_popular_portfolio_entries_slides responsiveContentSlider">
<?php 
include_once "db.php";
	
	$i = 1;	
	$query = "select * from student ORDER BY RAND()LIMIT 4";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		
?>   
						<li>										
							<figure><img class="fullwidth" src="stu_image/<?php echo $row['image']; ?>" alt="" /></figure>
							<a href="#"><?php echo $row['name']; ?></a>
						</li>
<?php 
		
		
} ?>
						
					</ul>
				</div>
							</aside>
						</div>

						<div class="one_fourth" style="width:400px;">
						<h3 class="widgettitle">Touch By Facebook</h3>
							<aside class="widget widget_custom_comments_entries">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/JRSS-Coching-Institute/546814248738030?skip_nax_wizard=true" data-width="380" data-height="250" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-border-color="grey" data-header="true"></div>

							</aside>
						</div>
						
						<div class="one_fourth">
							<aside class=
"widget widget_custom_contact_form_entries">
								<h3 class="widgettitle">Quick Form</h3>

								<div class="cmsms-form-builder">
									<div class="widgetinfo">Thank you! <br />
Your message has been sent successfully.</div>


									<form method="post" action="mail1.php" >
										<div class=
"form_info cmsms_input">
											<label for="field_003">Your email</label>
											<input 
type="text" name="email" id="field_003" size="22" tabindex="12" class=
"validate[required,custom[email]]" />
										</div>
										<div class=
"form_info cmsms_textarea">
											<label for="field_004">Your message</label>
											
<textarea name="msg" id="field_004" cols="28" rows="6" tabindex="13" class=
"validate[required,minSize[3]]"></textarea>
										
										 <?php $i = $_GET['i'];
                            if($i == 1)
                            {
                            echo "<font color='green'>Your message have been sent....</font>"; 
                            } ?>
                            
                            </div>
										<div class="loading"></div>

										<div><input type="hidden" name="contact_form_widget_001_wurl" id=
"contact_form_widget_001_wurl" value="#" />
</div><!-- Here you need to set the path to the sendmail file -->
										<div><input type="submit" value="Send Message" class="button" /></div>
</form>
									
								</div>
							</aside>
						</div>
					</div>
				</section>