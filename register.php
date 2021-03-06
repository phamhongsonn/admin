<?php
try {
    require('mysqli_connect.php');
    $UserName = $_POST['UserName'];	
    $UserPhone = $_POST['UserPhone'];	
    $UserEmail = $_POST['UserEmail'];	
    $UserPass = $_POST['UserPass'];
    $hashed_passcode = password_hash($UserPass, PASSWORD_DEFAULT);                                        
    $query = "INSERT INTO users (UserName, UserPhone, UserEmail, UserPass) ";
    $query .= "VALUES(?, ?, ?, ?)";			                
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $UserName, $UserPhone, $UserEmail, $hashed_passcode);
    if ($stmt->execute()) {	
        header ("location: login-form.php"); 
        exit();
    } else {
        $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
        $errorstring .= "System Error<br />You could not be registered due ";
        $errorstring .= "to a system error. We apologize for any inconvenience.</p>"; 
        exit();
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
$stmt->close();
$conn->close();
?>
