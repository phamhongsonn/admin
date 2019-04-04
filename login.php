<?php
try {
    require('mysqli_connect.php');
    $UserEmail = $_POST['UserEmail'];	
    $UserPass1 = $_POST['UserPass1'];                               
    $query = "SELECT UserEmail, UserPass FROM users WHERE UserEmail = '".$UserEmail."'";			                
    $result =  $conn->query($query);
    $count = $result->num_rows;
    $row = $result->fetch_array(MYSQLI_NUM);
    $level="SELECT UserLevel FROM users WHERE UserEmail = '".$UserEmail."'";
    $result_level = $conn->query($level);
    if($result_level){
        while ($row_level = $result_level->fetch_array(MYSQLI_ASSOC)) {
        $user_level = htmlspecialchars($row_level['UserLevel'], ENT_QUOTES);
        }
    }
    else { 
        exit();
    }
    $id="SELECT UserId FROM users WHERE UserEmail = '".$UserEmail."'";
    $result_id = $conn->query($id);
    if($result_id){
        while ($row_id = $result_id->fetch_array(MYSQLI_ASSOC)) {
        $user_id = htmlspecialchars($row_id['UserId'], ENT_QUOTES);
        }
    }
    else { 
        exit();
    }
    if ($count == 1) {
        if (password_verify($UserPass1, $row[1])) {  
            session_start();		
            $_SESSION["user"] = $UserEmail;
            if($user_level == 1){
                header ("location: Dashboard.php");
                }
                else{
                    $_SESSION["id"] = $user_id;	
                    header ("location:customer/index.php");
                };
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