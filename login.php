<?php

try {
    require('mysqli_connect.php');
    $email = $_POST['email'];	
    $password1 = $_POST['password1'];                                              
    $query = "SELECT email, password FROM users WHERE email = '".$email."'";			                
    $result =  $conn->query($query);
    $count = $result->num_rows;
    $row = $result->fetch_array(MYSQLI_NUM);
    if ($count == 1) {
        if (password_verify($password1, $row[1])) {  
            session_start();							
            $_SESSION["user"] = $email;
            header ("location: Dashboard.php");
        } 
        else {
            $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
            $errorstring .= "Invalid pasword!<br />Re-enter password.</p>"; 
            echo $errorstring;
        }
    } else {
        $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
        $errorstring .= "Invalid account!<br />You could not login.</p>"; 
        echo $errorstring;
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
$stmt->close();
$conn->close();
?>