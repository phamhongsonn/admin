<?php
try {
    require('mysqli_connect.php');
    $id = $_POST['Pid'];
    $OrderAmount=$_POST['OrderAmount'];
    $OrderTime=$_POST['OrderTime'];  
    $OrderPack=$_POST['OrderPack'];                        
    $query = "INSERT INTO orders (UserId, OrderAmount, OrderTime, OrderPack) ";
    $query .= "VALUES(?, ?, ?, ?)";			                
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $id, $OrderAmount, $OrderTime, $OrderPack);
    if ($stmt->execute()) {		
        header ("location: datban.php"); 
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
