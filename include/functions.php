<?php

function confirm_query ($result_set) {
	if (!$result_set) {
		die("Database query failed.");
	}
}

function makeselectlist($table, $ordercol, $option_name, $db){
	// Perform Query
	$query = "SELECT * ";
	$query.= "FROM {$table} ";
	$query.= "ORDER BY {$ordercol}";
	$result_set = mysqli_query($db, $query);
	confirm_query($result_set);
	while ($table = mysqli_fetch_assoc($result_set)) {
		echo "<option value=\"{$table[$ordercol]}\">{$table[$option_name]}</option>";
	}
	mysqli_free_result($result_set);
}




function maketray ($category, $address, $description){

	echo <<<BUILDTRAY
		<div class="traymale">
			<div class="tray_top">
				<div class="tray_name">
					{$category}
				</div>
			</div>
			<div class="tray_bottom">
				<ul class="carousel">
BUILDTRAY;

	$dir = "images/pugs/";
	$traynum = 1;
	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)) {
	    if ($files = scandir($dir)) {
	    	$counter = 0;
	    		foreach($files as $file) {
		       		if (strlen($file) > 2) {
		       			$address = $dir . $file;
		       			echo <<<LISTITEMS
	       			<li class="tray_item">
						<a href="http://www.reddit.com/r/magicTCG/">
							<div class="trayslot" style="background: url('$address');">&nbsp;</div>
						</a>
						<div class="tray_descrip"><div class="descrip_wrap">&nbsp;</div></div>
					</li>
LISTITEMS;
		 				$counter ++;
							

		 			}
		 		}
		 	}
		 }

<<<BUILDTRAY
				</ul>

			<!-- Tray buttons -->
			<div class="tray_prev">
				<div class="trayleft">&lt;</div>
			</div>
			<div class="tray_next">
				<div class="trayright">&gt;</div>
			</div>
	
BUILDTRAY;
}

 ?>