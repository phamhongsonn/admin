<?php
    require('mysqli_connect.php');
    try {
            if (isset($_FILES['product_imgedit'])) {
                $image = $_FILES['product_imgedit']['name'];
            $target = "image/".basename($image);
            move_uploaded_file($_FILES['product_imgedit']['tmp_name'], $target);
            $ItemName = $_POST['product_nameedit'];
            $Item_Description = $_POST['product_descedit'];
            $Price = floatval($_POST['product_priceedit']);
            $id = $_POST['Pid'];              
            $query = "UPDATE items SET ItemName = ?, Item_Image = ?, Item_Description = ?, Price = ? WHERE ItemId = '".$id."' ;";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssd",$ItemName,$target,$Item_Description,$Price);
            }
            else {
                $ItemName = $_POST['product_nameedit'];
                $Item_Description = $_POST['product_descedit'];
                $Price = floatval($_POST['product_priceedit']);
                $id = $_POST['Pid'];              
                $query = "UPDATE items SET ItemName = ?, Item_Description = ?, Price = ? WHERE ItemId = '".$id."' ;";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssd",$ItemName,$Item_Description,$Price);
            }
            if ($stmt->execute()) {
                header("Location: ItemsList.php");
                exit();
            } 
            else {
                $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
                $errorstring .="System Error<br>You could not be registered due ";
                $errorstring .="to a system error. We apologize for any inconvenience.</p>";
                exit();
            }
    } catch (Exception $e) {
        echo 'caught exception: ' .$e->getMessage(). "\n";
    }
?>