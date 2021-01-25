<?php
        include_once '../connectToDatabase.php';
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
        <link rel="shortcut icon" type="image/x-icon" href="../images/OpenBarriers.png" />
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>

<!-- Navbar -->

<div class='navbar'>
        <a href='/'>Home</a>
        <a href='../feedback/feedback.php'>Got Feedback?</a>
        <a href='../info/info.php'>Info</a>
</div>

<!-- Logo -->

<?php
        echo '<a href="/"> <p class="lastUpdated"> <img src="../images/newLogo1.png"
        width=750px height=300px align="middle" alt="OpenBarriers Logo"/> </p> </a>';
?>

<span>Help us help you!</span>
<br>

<!-- Post Feedback -->
<form action="addFeedback.php" method="POST">
<textarea class="feedbackBox" type="text" name="feedback" placeholder="Leave some feedback!"></textarea>
<br><br><br>
<button type="submit" name="submit" class="feedbackButton">Submit</button>
</form>

<br><br>
<span>Comments:</span>
<!-- Reading the contents of the database into the table -->
<?PHP
        $sql = "SELECT * FROM feedback;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			echo "<br>";
			echo "<div class='feedbackSection'>";
			echo "<i>Comment by Anonymous:</i><br><br>";
			echo $row['comment'];
			echo "</div>";
                }
        }
?>

<br><br><br>

</body>
</html>
