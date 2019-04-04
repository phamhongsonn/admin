<?php
require('mysqli_connect.php');
$id = $_GET['id'];
mysqli_query($conn,"delete from post where Postid=$id");
header('location:PostList.php');
?>