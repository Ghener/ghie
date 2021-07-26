<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM students WHERE ID=:id';
$sqlstatement = $connection->prepare($sql);
if ($sqlstatement->execute([':id'=>$id])) {
    header("Location: /application");
}