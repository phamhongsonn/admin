<?php
    class Product{
        var $Title;
        var $Image;
        var $Post_Des;
        var $Content;
        function __construct($_Tiltle,$_Image,$_Post_Des,$_Content)
        {
            $this->Title = $_Title;
            $this->Image = $_Image;
            $this->Post_Des = $_Post_Des;
            $this->Content = $_Content;
        }
    }
    require('mysqli_connect.php');
    
    try {
        
            $image = $_FILES['Image']['name'];
            $target = "image/".basename($image);
            move_uploaded_file($_FILES['Image']['tmp_name'], $target);
        $query = "INSERT INTO posts (Title,Image, Content, Post_Des) ";
        $query .= " VALUE (?,?,?,?);";
        echo $query;
        if($stmt = $conn->prepare($query)){
            $stmt->bind_param("ssss",strval($_POST['Title']),strval('./'.$target),floatval($_POST['Content']),strval($_POST['Post_Des']));
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