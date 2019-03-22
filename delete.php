<?php
require('mysqli_connect.php');
$id = $_GET['id'];
mysqli_query($conn,"delete from users where UserId=$id");
header('location:userList.php');
?>