<?php
require('mysqli_connect.php');
$id = $_GET['id'];
mysqli_query($conn,"delete from users where userid='$id'");
header('location:userList.php');
?>