<?php
try {
    require('mysqli_connect.php');
    $first_name = $_POST['first_name'];	
    $last_name = $_POST['last_name'];	
    $email = $_POST['email'];	
    $password = $_POST['password'];
    $hashed_passcode = password_hash($password, PASSWORD_DEFAULT);                                        
    $query = "INSERT INTO users (first_name, last_name, email, password, registration_date) ";
    $query .= "VALUES(?, ?, ?, ?, NOW())";			                
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_passcode);
    if ($stmt->execute()) {		
        header ("location: userList.php"); 
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
