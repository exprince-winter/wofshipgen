<?php
function shipmake() {
	$total = 349;
	$ran1 = rand(1, $total);
	include('inc/array.php');
	echo $array[$ran1];
}

if (!isset($_GET['times'])) {
	$times = "1";
} else {
	$times = $_GET['times'];
}
$jank = $times - 1;
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>wof ship gen</title>
	</head>
	<body>
		<center>
			<p>Your random ship<?php if($times > "1") {
				echo 's are';
			} else {
				echo ' is';
			}?>...</p>
			<h1><?php 
			for($i = 1; $i <= $jank; $i++) {
				shipmake(); 
				echo ' x ';
				shipmake();
				
				echo '<br>';
				}
				
			for($i = 1; $i <= $times - $jank; $i++) {
				shipmake(); 
				echo ' x ';
				shipmake();
				}
				?>!</h1>
				
				<div>
				<form>
        <input name="times" type="number" placeholder="1">
        <button type="submit">
		ship count
		</button>
		</form>
				</div>
				<br>
			<small>wsg v1.0 | inspired by perchance's <a href="https://perchance.org/wings-of-fire-ship-generator">wof ship generator</a> | <a href="https://prince-winter.neocities.org">made by prince_winter</a></small>
			
		</center>
	</body>
</html>