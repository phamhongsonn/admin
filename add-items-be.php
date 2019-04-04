<?php
    class Product{
        var $ItemName;
        var $Image;
        var $Description;
        var $Price;
        function __construct($_ItemName,$_Image,$_Description,$_Price)
        {
            $this->ItemName = $_ItemName;
            $this->Image = $_Image;
            $this->Description = $_Description;
            $this->Price = $_Price;
        }
    }
    require('mysqli_connect.php');
    
    try {
        
            $image = $_FILES['Imageitem']['name'];
            $target = "image/".basename($image);
            move_uploaded_file($_FILES['Imageitem']['tmp_name'], $target);
        $query = "INSERT INTO items (ItemName, Item_Image, Price, Item_Description) ";
        $query .= " VALUE (?,?,?,?);";
        echo $query;
        if($stmt = $conn->prepare($query)){
            $stmt->bind_param("ssds",strval($_POST['ItemName']),strval('./'.$target),floatval($_POST['Price']),strval($_POST['Description']));
            if ($stmt->execute()) 
            {
                exit();
            } 
            else {
                $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
                $errorstring .="System Error<br>You could not be registered due to a system error.<br>We apologize for any inconvenience.</p>";
                echo '<script>
                document.getElementById("mailexist").style.visibility=visible;
                </script>';
                exit();
            }
            
        }
        else {
            die("Errormessage: ". $conn->error);
        }
        
    } catch (Exception $e) {
        echo 'caught exception: ' . $e->getMessage(). "\n";
    }
?>