<?php
	include_once 'connectToDatabase.php';
?>

<!DOCTYPE html>
<html>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160052856-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-160052856-1');
  </script>
	<title>OpenBarriers</title>
	<link rel="shortcut icon" type="image/x-icon" href="/images/OpenBarriers.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>

<!-- Navbar -->

<div class='navbar'>
	<a href='/'>Home</a>
	<a href='/feedback/feedback.php'>Got Feedback?</a>
	<a href='/info/info.php'>Info</a>
</div>

<!-- Logo -->

<?php
	echo '<a href="/"> <p class="lastUpdated"> <img src="/images/newLogo1.png"
	width=750px height=300px align="middle" alt="OpenBarriers Logo"/> </p> </a>';
?>

<!-- Message To The User -->

<span class='status'>👆🏾 Tap on a station to let us know if we have Open Barriers!</span>

<!-- Station Status -->

<div class='indexSection' onclick="window.location='/stations/abbeyWood/abbeyWood.php'">
<p>
<?php
	$dbCounterName = "abbeywoodcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStationBexleyheath' href='/stations/abbeyWood/abbeyWood.php'>ABBEY WOOD</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStationBexleyheath' href='/stations/abbeyWood/abbeyWood.php'>ABBEY WOOD</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/barnehurst/barnehurst.php'">
<p>
<?php
	$dbCounterName = "barnehurstcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStationBexleyheath' href='/stations/barnehurst/barnehurst.php'>BARENHURST</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStationBexleyheath' href='/stations/barnehurst/barnehurst.php'>BARNEHURST</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/bexley/bexley.php'">
<p>
<?php
	$dbCounterName = "bexleycounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/bexley/bexley.php'>BEXLEY</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/bexley/bexley.php'>BEXLEY</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/bexleyheath/bexleyheath.php'">
<p>
<?php
	$dbCounterName = "bexleyheathcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStationBexleyheath' href='/stations/bexleyheath/bexleyheath.php'>BEXLEYHEATH</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStationBexleyheath' href='/stations/bexleyheath/bexleyheath.php'>BEXLEYHEATH</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/charlton/charlton.php'">
<p>
<?php
	$dbCounterName = "charltoncounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/charlton/charlton.php'>CHARLTON</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/charlton/charlton.php'>CHARLTON</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/dartford/dartford.php'">
<p>
<?php
	$dbCounterName = "dartfordcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/dartford/dartford.php'>DARTFORD</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/dartford/dartford.php'>DARTFORD</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/eltham/eltham.php'">
<p>
<?php
	$dbCounterName = "elthamcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/eltham/eltham.php'>ELTHAM</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/eltham/eltham.php'>ELTHAM</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/lewisham/lewisham.php'">
<p>
<?php
	$dbCounterName = "lewishamcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/lewisham/lewisham.php'>LEWISHAM</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/lewisham/lewisham.php'>LEWISHAM</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/plumstead/plumstead.php'">
<p>
<?php
	$dbCounterName = "plumsteadcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/plumstead/plumstead.php'>PLUMSTEAD</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/plumstead/plumstead.php'>PLUMSTEAD</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/sidcup/sidcup.php'">
<p>
<?php
	$dbCounterName = "sidcupcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/sidcup/sidcup.php'>SIDCUP</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/sidcup/sidcup.php'>SIDCUP</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/welling/welling.php'">
<p>
<?php
	$dbCounterName = "wellingcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStation' href='/stations/welling/welling.php'>WELLING</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStation' href='/stations/welling/welling.php'>WELLING</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>

<br><br>
<div class='indexSection' onclick="window.location='/stations/wwArsenal/wwArsenal.php'">
<p>
<?php
	$dbCounterName = "wwarsenalcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$inspectors = $row['Inspectors'];
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<a class='openStationBexleyheath' href='/stations/wwArsenal/wwArsenal.php'>W.W ARSENAL</a>
			<button class='open'>Open</button>";

		if ($inspectors > 0) {
                        echo "🕵🏻";
                }
	}
	else
	{
		echo "<a class='closedStationBexleyheath' href='/stations/wwArsenal/wwArsenal.php'>W.W ARSENAL</a>
			<button class='closed'>Closed</button>";

		if ($inspectors > 0) {
			echo "🕵🏻";
		}
	}
?>
</p>
</div>
<br><br>
<script>
	if ('geolocation' in navigator)
	{
		console.log('Geolocation is available.')
	}
	else
	{
		console.log('Geolocation is not available.')
	}
</script>
<br><br><br>

</body>

</html>
