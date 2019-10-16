<?php
include_once 'conn.php';



 $sql = "DELETE FROM $TableName";



mysqli_query($conn, $sql) or die();

header("Location: ../index.php?signup=Deleted!");


?>