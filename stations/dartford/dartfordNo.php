<?php
    include_once '../../connectToDatabase.php';
    $sql = 'UPDATE dartfordcounter SET Noo = Noo + 1 WHERE id = 1';
    mysqli_query($conn, $sql);
?>
