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
      $query = "SELECT userid, last_name, first_name, email,DATE_FORMAT(registration_date, '%M %d, %Y') AS regdate
      FROM users ORDER BY userid ASC";
      $result = $conn->query($query);
      if ($result) {
        echo '<div class="table-responsive">
        <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Date Registered</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        </div>';
        				
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $last_name = htmlspecialchars($row['last_name'], ENT_QUOTES);
          $first_name = htmlspecialchars($row['first_name'], ENT_QUOTES);
          $email = htmlspecialchars($row['email'], ENT_QUOTES);
          $registration_date = htmlspecialchars($row['regdate'], ENT_QUOTES);
          echo '<tr>
          <td>'.$row['userid'].'</td>
          <td>' . $row['last_name'] . '</td>
          <td>' . $row['first_name'] . '</td>
          <td>' . $row['email'] . '</td>
          <td>' . $registration_date . '</td>
          <td style="text-align:center"><a  href="edit-user.php?id=' . $row['userid'] . '"><i class="fas fa-user-edit"></i></a></td>
          <td style="text-align:center">
            <a href="delete.php?id='.$row['userid'].'"onclick="return checkDelete()"><i class="fas fa-trash-alt"></i></a></td>
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