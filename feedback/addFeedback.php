<?php
	include_once "../connectToDatabase.php";

	$feedback = $_POST['feedback'];
  $feedback = mysqli_real_escape_string($conn, $feedback);
  $sql = "INSERT INTO feedback (comment) VALUES ('$feedback')";
  mysqli_query($conn, $sql);

  header("Location: /feedback/feedback.php");
?>
