
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
      $query = "SELECT Postid, Title, Post_Des, Content,Image
      FROM posts ORDER BY PostId ASC";
      $result = $conn->query($query);
      if ($result) {
        echo '<div class="table-responsive">
        <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
        <th>Post Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Post Description</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        </div>';
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $Image = htmlspecialchars($row['Image'], ENT_QUOTES);
          $Title = htmlspecialchars($row['Title'], ENT_QUOTES);
          $Content = htmlspecialchars($row['Content'], ENT_QUOTES);
          $Post_Des = htmlspecialchars($row['Post_Des'], ENT_QUOTES);
          echo '<tr>
          <td> <img src="'.$Image.'" height=70px width=100px/> </td>
          <td>' . $row['Title'] . '</td>
          <td>' . $row['Post_Des'] . '</td>
          <td>' . $row['Content'] . '</td>
          <td style="text-align:center"><a  href="edit-post.php?id=' . $row['Postid'] . '"><i class="fas fa-user-edit"></i></a></td>
          <td style="text-align:center">
            <a href="deletepost.php?id='.$row['Postid'].'"onclick="return checkDelete()"><i class="fas fa-trash-alt"></i></a></td>
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
