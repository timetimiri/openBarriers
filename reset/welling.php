<?php
include_once '../connectToDatabase.php';

$sql = "UPDATE wellingcounter SET Yes=1, Noo=1, Inspectors=0 WHERE id=1";
mysqli_query($conn, $sql);
header("Location: /reset/wwArsenal.php");
?>
