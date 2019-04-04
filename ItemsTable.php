
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script laguage ="Javascript" type="text/javascript">
  function checkDelete(){
    return confirm('Bạn có chắc chắn muốn xóa ?');
  }
  </script>
</head>
<body>
  <div class="container">
    <?php 
    try {
      require('mysqli_connect.php');
      $query = "SELECT ItemId, ItemName, Item_Description, Price,Item_Image
      FROM items ORDER BY ItemId ASC";
      $result = $conn->query($query);
      if ($result) {
        echo '<div class="table-responsive">
        <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
        <th>Ảnh Combo</th>
        <th>Tên Combo</th>
        <th>Mô tả</th>
        <th>Giá</th>
        <th>Sửa</th>
        <th>Xóa</th>
        </tr>
        </thead>
        </div>';
        				
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            
          $Item_Image = htmlspecialchars($row['Item_Image'], ENT_QUOTES);
          $ItemName = htmlspecialchars($row['ItemName'], ENT_QUOTES);
          $Item_Description = htmlspecialchars($row['Item_Description'], ENT_QUOTES);
          $Price = htmlspecialchars($row['Price'], ENT_QUOTES);
          echo '<tr>
          <td> <img src="'.$Item_Image.'" height=70px width=100px/> </td>
          <td>' . $row['ItemName'] . '</td>
          <td>' . $row['Item_Description'] . '</td>
          <td>' . $row['Price'] . '</td>
          <td style="text-align:center"><a  href="edit-items.php?id=' . $row['ItemId'] . '"><i class="fas fa-user-edit"></i></a></td>
          <td style="text-align:center">
            <a href="deleteitem.php?id='.$row['ItemId'].'"onclick="return checkDelete()"><i class="fas fa-trash-alt"></i></a></td>
          </tr>';
        } 
        echo '</table>';                                                                                                                                                                    
        echo'</div>';
      }
      else { 
        echo '<p class="error">The current users could not be retrieved</p>';
        exit();
      }
      $conn->close();
    }
    catch(Exception $e)               
    {
      print "An Exception occurred. Message: " . $e->getMessage();
    }
    ?>
  </div>
</body>
</html>
