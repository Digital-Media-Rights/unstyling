<!-- 
colors
	#fafafa		->		offwhite
	e0e0e0		->		lightgrey

 -->

<!DOCTYPE html>
<head>
	<title>A Stupid Frame I Made</title>
	<link href="stylesheets/front_page.css" media="all" rel="stylesheet" type="text/css" />
</head>


<html>
<body>

<div id="container">


<div id="masthead">  
	<img src="images/masthead_image.jpg" />
	<div class="slide_mast_left centeraround"> {</div>
	<div class="slide_mast_right centeraround">}</div>
</div>

<div class="gutter">&nbsp;</div>

<div class="tray_slot">
	<!-- Insert Tray -->
	<div class="tray_name"><span class="position_name">New Arrivals</span></div>
	
		<div class="carousel_wrap">

<?php
	$dir = "images/pugs/";
	$traynum = 1;
	echo "<ul id=\"playlist_{$traynum}\" class=\"panes\">";
	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)) {
	    if ($files = scandir($dir)) {
	    	$counter = 0;
	    		foreach($files as $file) {
	       		if (strlen($file) > 2) {
	 				$counter ++;
?>
			<li id=<?php echo "tray_{$traynum}_title_{$counter}" ?> >
				<img src=<?php echo $dir.$file; ?> alt=<?php echo "pug".$counter; ?> />		
			</li>
<?php
	       		}
			}
		}
	}
	echo "</ul>";
?>
		<div class="slide_mast_left centeraround">{</div>
		<div class="slide_mast_right centeraround">}</div>

		</div> <!-- end carousel_wrap -->

	</div> <!-- end tray_slot -->




<!-- 2-->
<div class="gutter">&nbsp;</div>
<div class="tray_slot">
	<!-- Insert Tray -->
	<div class="tray_name"><span class="position_name">Esoterica</span></div>
	
		<div class="carousel_wrap">

<?php
	$dir = "images/pugs/";
	$traynum = 1;
	echo "<ul id=\"playlist_{$traynum}\" class=\"panes\">";
	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)) {
	    if ($files = scandir($dir, 1)) {
	    	$counter = 0;
	    		foreach($files as $file) {
	       		if (strlen($file) > 2) {
	 				$counter ++;
?>
			<li id=<?php echo "tray_{$traynum}_title_{$counter}" ?> class="tray_title" >
				<img src=<?php echo $dir.$file; ?> alt=<?php echo "pug".$counter; ?> />		
			</li>
<?php
	       		}
			}
		}
	}
	echo "</ul>";
?>
		<div class="slide_mast_left centeraround">{</div>
		<div class="slide_mast_right centeraround">}</div>

		</div> <!-- end carousel_wrap -->
	</div>

	<div id="footer"><div id="footwrap">Footer Stuff Goes Here</div></div>

</div> <!-- end container -->


</body>
</html>