<?php
	date_default_timezone_set('Europe/Amsterdam');
	$t = date("H:i");
	$night = "<h1>Goede nacht!</h1>"."<body style='background: url(backgrounds/night.png)'>";
	$morning = "<h1>Goede morgen!</h1>"."<body style='background: url(backgrounds/morning.png)'>";
	$afternoon = "<h1>Goede middag!</h1>"."<body style='background: url(backgrounds/afternoon.png)'>";
	$evening = "<h1>Goede avond!</h1>"."<body style='background: url(backgrounds/evening.png)'>";

	if($t < "06:00") {
		$currentDay = ("Goede nacht");
		echo $night;
	}
	elseif($t < "12:00") {
		$currentDay = ("Goede morgen");
		echo $morning;
	}
	elseif($t < "18:00") {
		$currentDay = ("Goede middag");
		echo $afternoon; 
	}
	elseif($t < "24:00") {
		$currentDay = ("Goede avond");
		echo $evening;
	}
	echo '<br><span class="time">Het is nu '.$t.'</span>';
	$output = '<html><title>%TITLE%</title><body>';
    $output = str_replace('%TITLE%', $currentDay, $output);
    echo $output;
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	</head>
	<body>
	</body>
</html>