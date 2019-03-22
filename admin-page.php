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
      $query = "SELECT UserId, UserName, UserPhone, UserEmail,UserLevel
      FROM users ORDER BY UserId ASC";
      $result = $conn->query($query);
      if ($result) {
        echo '<div class="table-responsive">
        <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
        <th>UserName</th>
        <th>UserPhone</th>
        <th>UserEmail</th>
        <th>UserLevel</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        </div>';
        				
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $UserName = htmlspecialchars($row['UserName'], ENT_QUOTES);
          $UserPhone = htmlspecialchars($row['UserPhone'], ENT_QUOTES);
          $UserEmail = htmlspecialchars($row['UserEmail'], ENT_QUOTES);
          $UserLevel = htmlspecialchars($row['UserLevel'], ENT_QUOTES);
          echo '<tr>
          <td>' . $row['UserName'] . '</td>
          <td>' . $row['UserPhone'] . '</td>
          <td>' . $row['UserEmail'] . '</td>
          <td>' . $row['UserLevel'] . '</td>
          <td style="text-align:center"><a  href="edit-user.php?id=' . $row['UserId'] . '"><i class="fas fa-user-edit"></i></a></td>
          <td style="text-align:center">
            <a href="delete.php?id='.$row['UserId'].'"onclick="return checkDelete()"><i class="fas fa-trash-alt"></i></a></td>
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