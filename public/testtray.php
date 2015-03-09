<!DOCTYPE html>
<head>
	<title>A Stupid Frame I Made</title>
	<link href="stylesheets/teststyle.css" media="all" rel="stylesheet" type="text/css" />
</head>

<html>
<body>

<div class="tray_slot">
	<div id="tray_n" class="traywrapper">
		<div id="tray_n_name" class="tray_name">
			<a>New Arrivals</a>
		</div>
		<div id="carousel_n" class="carousel">
				<?php
					$dir = "images/pugs/";
					$traynum = 1;
					echo "<ul id=\"playlist_{$traynum}\" class=\"tray_playlist\">";
					// Open a known directory, and proceed to read its contents
					if (is_dir($dir)) {
					    if ($files = scandir($dir)) {
					    	$counter = 0;
					    		foreach($files as $file) {
					       		if (strlen($file) > 2) {
					 				$counter ++;
				?>
					<li id=<?php echo "tray_{$traynum}_title_{$counter}" ?> class="tray_title" >
						&nbsp;
						<!-- <img src=<?php echo $dir.$file; ?> alt=<?php echo "pug".$counter; ?> />	 -->		
					</li>
				<?php
					       		}
							}
						}
					}
					echo "</ul>";
				?>
			
		</div>


	</div>
</div>

</body>
</html>