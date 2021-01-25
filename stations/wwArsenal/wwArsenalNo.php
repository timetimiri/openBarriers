<?php
    include_once '../../connectToDatabase.php';
    $sql = 'UPDATE wwarsenalcounter SET Noo = Noo + 1 WHERE id = 1';
    mysqli_query($conn, $sql);
?>
