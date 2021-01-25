<?php
    include_once '../../connectToDatabase.php';
    $sql = 'UPDATE charltoncounter SET Yes = Yes + 1 WHERE id = 1';
    mysqli_query($conn, $sql);
?>
