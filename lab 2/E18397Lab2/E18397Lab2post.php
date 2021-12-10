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
		if (isset($_POST['size'])) {
			$size = $_POST['size'];
		} else {
			$size = "";
		}

		$color = $_POST['color'];

		if (isset($_POST['ex_cap'])) {
			$cap = "* " . $_POST['ex_cap'] . "<br>";
		} else {
			$cap = "";
		}

		if (isset($_POST['ex_band'])) {
			$band = "* " . $_POST['ex_band'] . "<br>";
		} else {
			$band = "";
		}

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$addr1 = $_POST['addr1'];
		$addr2 = $_POST['addr2'];
		$addr3 = $_POST['addr3'];
		$comments = $_POST['comments'];

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