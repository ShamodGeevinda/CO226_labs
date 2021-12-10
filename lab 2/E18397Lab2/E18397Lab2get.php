<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Details </title>

	<style>
		#border {
			border-style: solid;
			padding-left: 10px;
			width: 500px;

		}
	</style>

</head>

<body>

	<div id=border>
		<h1>Your Information System</h1>
		<?php
		// getting inputs from the HTML file
		if (isset($_GET['size'])) {
			$size = $_GET['size'];
		} else {
			$size = "";
		}

		$color = $_GET['color'];

		if (isset($_GET['ex_cap'])) {
			$cap = "* " . $_GET['ex_cap'] . "<br>";
		} else {
			$cap = "";
		}

		if (isset($_GET['ex_band'])) {
			$band = "* " . $_GET['ex_band'] . "<br>";
		} else {
			$band = "";
		}

		$fname = $_GET['fname'];
		$lname = $_GET['lname'];
		$addr1 = $_GET['addr1'];
		$addr2 = $_GET['addr2'];
		$addr3 = $_GET['addr3'];
		$comments = $_GET['comments'];

		echo "<p>Thank you, $fname for your purches from our web site</p>";
		echo "<p>your item colour is : $color & T-Shirt size : $size</p>";
		echo "<p>Selected items/item are :</p>";
		echo "$cap";
		echo "$band";
		echo "<p>Your items will be sent to :</p>";
		echo "<p><i>$fname $lname,<br>$addr1,<br>$addr2,<br>$addr3</i></p>";
		echo "<p>Thank you for submitting your comments. We appreciate it. You said:</p>";
		echo "<p><i>$comments</i></p>";
		?>

	</div>
</body>

</html>