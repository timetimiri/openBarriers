<?php
	include_once '../../connectToDatabase.php';
	sleep(1);
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
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>

<!-- Navbar -->

<div class='navbar'>
	<a href='../../'>Home</a>
	<a href='../../feedback/feedback.php'>Got Feedback?</a>
	<a href='../../info/info.php'>Info</a>
</div>

<!-- Logo-->

<?php
	echo '<a href="/"> <p class="lastUpdated"> <img src="/images/newLogo1.png"
		width=750px height=300px align="middle" alt="OpenBarriers Logo"/> </p> </a>';
?>

<!-- Station Status -->

<span>
<?php
	$dbCounterName = "dartfordcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;
		}
	}

	if ($percentage > 50)
	{
		echo "<span class='stationTitleOpen'>DARTFORD</span>
				<button class='stationTitleButtonOpen'>Open</button>";
	}
	else
	{
		echo "<span class='stationTitleClosed'>DARTFORD</span>
				<button class='stationTitleButtonClosed'>Closed</button>";
	}
?>
</span>

<!-- Valid as of *time* -->

<span class='time'>As of
<script>
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes();
document.write(time);
</script>
</span>

<!-- User Reported Barrier Status -->
<br>
<div class='section'>
<br>
<span>ARE THE BARRIERS OPEN?</span>
<div class="votingButtons">
	<button onclick='addYes()' class='voteOpen'>YES</button>
	<button onclick='addNo()' class='voteClosed'>NO</button>
</div>

<!-- Yes/No Counter (ADD AJAX FUNXTIONALITY TO THE POLL) -->

<br>
<?php
	$dbCounterName = "dartfordcounter";
	$sql = "SELECT * FROM $dbCounterName";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$sum = $row['Yes'] + $row['Noo'];
			$percentage = ($row['Yes'] / $sum) * 100;

			echo "<div class='progressbar'>";
			echo "<div style='width:" . $percentage . "%'></div>";
			echo "</div>";
		}
	}
?>
<br><br>
</div>

<!-- User Reported Inspector Status -->

<br>
<div class='section'>
<br>
<span class="inspectorTitle">TAP TO ALERT IF INSPECTORS ARE PRESENT</span>
<div class="inspectorButton">
	<button onclick='changeColor()' class='whiteInspector'>🕵🏻</button>
</div>
<br>
</div>
<!-- Google Map Location of Station (ADD CUSTOM MAP MARKERS DEPENDING ON THE STATUS OF THE STATION) -->

<br>
<div class='section'>
<br>
<span>GOOGLE MAPS LOCATION:</span>

<iframe width='700px' height='560px' id='mapcanvas' src='https://maps.google.com/maps?q=da1%201bp&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'><div class="zxos8_gm"><a rel="nofollow"  href="">https://www.embedgooglemap.co.uk/galaxy-a70-deals.html</a></div><div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:100%;'></div></div><div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div></iframe>
<br>
</div>

<script>
clientLocation = 0;
atLocation = 0;

	//Client long/lat
	if ('geolocation' in navigator)
	{
		navigator.geolocation.getCurrentPosition(function(position)
		{
			window.clientX = position.coords.latitude;
			window.clientY = position.coords.longitude;
		});

		console.log('Geolocation is available.');

		//Client allowed location
		clientLocation = 1;
	}
	else
	{
		console.log('Geolocation is not available.');

		//Client did not allow location
		clientLocation = 0;
	}

	//Station long/lat
	stationX =  51.4471578;
	stationY =  0.2190307;

	//Difference calculator
	if ((Math.abs(((Math.abs(stationX) + Math.abs(stationY)) - (Math.abs(window.clientX) + Math.abs(window.clientY)))) <= 0.0005) && (clientLocation == 1))
	{
		atLocation = 1;
	}
	else
	{
		atLocation = 0;
	}

	//Script to change the color of inspector button and number of inspectors present
	//GIVE COOKIE TO REJECT DOUBLE VOTING AND SET AN ALERT
	var inspectorColor = 1;

	function changeColor()
	{
		if (inspectorColor == 1 && (atLocation == 1))
		{
			req = new XMLHttpRequest();
			req.open("GET", "abbeyWoodAddInspectors.php", true);
			req.send();
			document.getElementsByTagName("button")[3].setAttribute("class","redInspector");
			inspectorColor = 2;
			//Give cookie to reject and alert double voting within a time period
		}
		else if (inspectorColor == 2 && (atLocation == 1))
		{
			req = new XMLHttpRequest();
			req.open("GET", "abbeyWoodDeleteInspectors.php", true);
			req.send();
			document.getElementsByTagName("button")[3].setAttribute("class","whiteInspector");
			inspectorColor = 1;
		}
		else if (atLocation == 0)
		{
			alert("We don't think you are near the station. Get closer, refresh and press 'Allow' when we ask to 'Know Your Location.'");
		}
	}

	//Functions that increment/decrement the counter based on Yes/No votes
	function addYes()
	{
		if (document.cookie.indexOf('yesCookie') != -1)
		{
			//Alert if cookie is already in play
			alert("You have already said yes. Why don't you eat a pancake and wait a while?")
		}
		else if ((document.cookie.indexOf('yesCookie') == -1) && (document.cookie.indexOf('noCookie') != -1) && (atLocation == 1))
		{
			//Delete noCookie
			document.cookie = "name=noCookie; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/stations/dartford";

			//Create yesCookie that expires in an hour
			var date1 = new Date();
			var expiryHour = date1.getHours() + 1
			var expiryMonth = date1.toLocaleString('default', {month: 'short'})
			var cookieTime = date1.getDate() + ' ' + expiryMonth + ' ' + date1.getFullYear() + ' ' + expiryHour + ":" + date1.getMinutes() + ":00 UTC";
			yesCookie = document.cookie = "name=yesCookie; expires=" + cookieTime + "; path=/stations/dartford";

			//Vote yes to the DB
			req = new XMLHttpRequest();
			req.open("GET", "dartfordYes.php", true);
			req.send();
			location.reload();
		}
		else if ((document.cookie.indexOf('yesCookie') == -1) && (document.cookie.indexOf('noCookie') == -1) && (atLocation == 1))
		{
                        //Create yesCookie that expires in an hour
                        var date1 = new Date();
                        var expiryHour = date1.getHours() + 1
                        var expiryMonth = date1.toLocaleString('default', {month: 'short'})
                        var cookieTime = date1.getDate() + ' ' + expiryMonth + ' ' + date1.getFullYear() + ' ' + expiryHour + ":" + date1.getMinutes() + ":00 UTC";
                        yesCookie = document.cookie = "name=yesCookie; expires=" + cookieTime + "; path=/stations/dartford";

                        //Vote yes to the DB
                        req = new XMLHttpRequest();
                        req.open("GET", "dartfordYes.php", true);
                        req.send();
                        location.reload();
		}
		else if (atLocation == 0)
		{
			alert("We don't think you are near the station. Get closer, refresh and press 'Allow' when we ask to 'Know Your Location.'")
		}
	}

	function addNo()
	{
		if (document.cookie.indexOf('noCookie') != -1)
                {
                        //Alert if cookie is already in play
			alert("You have already said no. Why don't you eat a pancake and wait a while?")
                }
                else if ((document.cookie.indexOf('noCookie') == -1) && (document.cookie.indexOf('yesCookie') != -1) && (atLocation == 1))
                {
                        //Delete yesCookie
                        document.cookie = "name=yesCookie; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/stations/dartford";

                        //Create noCookie that expires in an hour
                        var date1 = new Date();
                        var expiryHour = date1.getHours() + 1
                        var expiryMonth = date1.toLocaleString('default', {month: 'short'})
                        var cookieTime = date1.getDate() + ' ' + expiryMonth + ' ' + date1.getFullYear() + ' ' + expiryHour + ":" + date1.getMinutes() + ":00 UTC";
                        noCookie = document.cookie = "name=noCookie; expires=" + cookieTime + "; path=/stations/dartford";

                        //Vote yes to the DB
                        req = new XMLHttpRequest();
                        req.open("GET", "dartfordNo.php", true);
                        req.send();
                        location.reload();
		}
		else if ((document.cookie.indexOf('noCookie') == -1) && (document.cookie.indexOf('yesCookie') == -1) && (atLocation == 1))
                {
                        //Create noCookie that expires in an hour
                        var date1 = new Date();
                        var expiryHour = date1.getHours() + 1
                        var expiryMonth = date1.toLocaleString('default', {month: 'short'})
                        var cookieTime = date1.getDate() + ' ' + expiryMonth + ' ' + date1.getFullYear() + ' ' + expiryHour + ":" + date1.getMinutes() + ":00 UTC";
                        noCookie = document.cookie = "name=noCookie; expires=" + cookieTime + "; path=/stations/dartford";

                        //Vote yes to the DB
                        req = new XMLHttpRequest();
                        req.open("GET", "dartfordNo.php", true);
                        req.send();
                        location.reload();
                }
		else if (atLocation == 0)
		{
			alert("We don't think you are near the station. Get closer, refresh and press 'Allow' when we ask to 'Know Your Location.'")
		}
	}
</script>

<br><br><br>

</body>

</html>
