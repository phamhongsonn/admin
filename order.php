<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <?php 
    try {
      require('mysqli_connect.php');
      $query = "select UserName, UserPhone, OrderId, OrderTime, OrderAmount, OrderPack, (OrderAmount*OrderPack)AS Price,OrderStatus from Users inner join orders on users.UserId = Orders.UserId";
      $result = $conn->query($query);
      if ($result) {
        echo '<div class="table-responsive">
        <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
        <th>Khách hàng</th>
        <th>Số điện thoại</th>
        <th>Thời gian</th>
        <th>Số lượng</th>
        <th>Combo</th>
        <th>Giá</th>
        <th>Trạng thái</th>
        <th>Sửa</th>
        </tr>
        </thead>
        </div>';
        				
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $UserName = htmlspecialchars($row['UserName'], ENT_QUOTES);
          $UserPhone = htmlspecialchars($row['UserPhone'], ENT_QUOTES);
          $OrderTime = htmlspecialchars($row['OrderTime'], ENT_QUOTES);
          $OrderAmount = htmlspecialchars($row['OrderAmount'], ENT_QUOTES);
          $OrderId = htmlspecialchars($row['OrderId'], ENT_QUOTES);
          $OrderPack = htmlspecialchars($row['OrderPack'], ENT_QUOTES);
          $Price = htmlspecialchars($row['Price'], ENT_QUOTES);
          $OrderStatus = htmlspecialchars($row['OrderStatus'], ENT_QUOTES);
          echo '<tr>
          <td>' . $row['UserName'] . '</td>
          <td>' . $row['UserPhone'] . '</td>
          <td>' . $row['OrderTime'] . '</td>
          <td>' . $row['OrderAmount'] . '</td>
          <td>' . $row['OrderPack'] . '</td>
          <td>' . $row['Price'] . '</td>
          <td>' . $row['OrderStatus'] . '</td>
          <td style="text-align:center"><a  href="edits-order.php?id=' . $row['OrderId'] . '"><i class="fas fa-user-edit"></i></a></td>
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