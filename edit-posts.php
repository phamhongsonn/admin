<?php
    require('mysqli_connect.php');
    try {
            if (isset($_FILES['post_imgedit'])) {
                $image = $_FILES['post_imgedit']['name'];
            $target = "image/".basename($image);
            move_uploaded_file($_FILES['post_imgedit']['tmp_name'], $target);
            $Title = $_POST['Post_Titleedit'];
            $Pos_Des = $_POST['Post_Desedit'];
            $Content = $_POST['Post_Contentedit'];
            $id = $_POST['Pid'];              
            $query = "UPDATE posts SET Title = ?, Post_Des = ?, Content = ?, Image = ? WHERE Postid = '".$id."' ;";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssss",$Title,$Post_Des,$Content,$target);
            }
            else {
                $Title = $_POST['Post_Titleedit'];
                $Post_Des = $_POST['Post_Desedit'];
                $Content =$_POST['Post_Contentedit'];
                $id = $_POST['Pid'];              
                $query = "UPDATE posts SET Title = ?, Post_Des = ?, Content = ? WHERE Postid = '".$id."' ;";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sss",$Title,$Post_Des,$Content);
            }
            if ($stmt->execute()) {
                header("Location: PostList.php");
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