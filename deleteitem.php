<?php
require('mysqli_connect.php');
$id = $_GET['id'];
mysqli_query($conn,"delete from items where ItemId=$id");
header('location:ItemsList.php');
?>