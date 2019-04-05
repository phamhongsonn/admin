<?php                                                                                     
   session_start();
   if (!isset($_SESSION['user']))
   { 
     header("location: login-form.php");
     exit();
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="customer/style.css" />
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
         integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <script src="customer/jquery-3.3.1.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <style>
         .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
         background-color: #f1022a;
         }
      </style>
   </head>
   <body>
      <?php
         try {
         require('mysqli_connect.php');
         $id = $_SESSION['id'];
         $query = "SELECT * FROM users WHERE UserId = $id";
         $result = $conn->query($query);
         if ($result) {          
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
             $UserName = htmlspecialchars($row['UserName'], ENT_QUOTES);
             $UserPhone = htmlspecialchars($row['UserPhone'], ENT_QUOTES);
             $UserEmail = htmlspecialchars($row['UserEmail'], ENT_QUOTES);
             $UserPass = htmlspecialchars($row['	UserPass'], ENT_QUOTES);
           } 
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
      <?php include 'header.php'?>
      <section style="background : url(https://www.webtasarimgezegeni.com/wp-content/uploads/2018/08/web-tasarim-nasil-olmalidir.jpg)no-repeat;
      background-size:cover;background-position:center">
         <h1 style="color:white;padding:100px 0 100px 0;text-align:center">Tài khoản</h1>
      </section>
      <div class="container">
         <ul class="nav nav-tabs">
            <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#home">Tài khoản</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#menu2">Xem order</a>
            </li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content">
            <div class="tab-pane container active" id="home">
            <form action="taikhoan.php" method="post" name="form1" style="margin : 0 50px 0 50px;">
               <br>
            <div><input type="hidden" name="id"value="<?php echo $id ?>"></div>
            <div class="form-group row">
                  <label for="UserName" class="col-sm-2">Tên khách hàng </label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[A-Za-z].{1,}" title="vui lòng nhập đúng định dạng vd : Pham" class="form-control" id="UserName" name="UserName" 
                        placeholder="Tên" maxlength="30" required 
                        value="<?php echo $UserName ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserPhone" class="col-sm-2">Số điện thoại </label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[0-9].{1,}" title="" class="form-control" id="UserPhone" name="UserPhone" 
                        placeholder="Số điện thoại" maxlength="11" required
                        value="<?php echo $UserPhone ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserEmail" class="col-sm-2">Email </label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control" id="UserEmail" name="UserEmail" 
                        placeholder="Email" maxlength="60" required
                        value="<?php echo $UserEmail ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserPass" class="col-sm-2">Mật khẩu</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" id="UserPass" name="UserPass" 
                        pattern="[A-Za-z0-9].{8,}" title="mật khẩu phải lớn hơn 8 kí tự và không có kí tự đặc biệt"
                        placeholder="Mật khẩu" minlength="8" required>
                  </div>
               </div>
            <br>
            <button type="submit" class="btn btn-danger btn-block" name="edit">Cập nhật</button>
            <br>
            </form>
            <?php
               require('mysqli_connect.php');
               if(isset($_POST['edit']))
               {    
                  $id = $_POST['id'];
                  $UserName=$_POST['UserName'];
                  $UserPhone=$_POST['UserPhone'];
                  $UserEmail=$_POST['UserEmail'];
                  $UserPass=$_POST['UserPass'];   
                  $hashed_passcode = password_hash($UserPass, PASSWORD_DEFAULT);             
                  $query = mysqli_query($conn, "UPDATE users SET UserName='$UserName',UserPhone='$UserPhone',
                  UserEmail='$UserEmail', UserPass='$hashed_passcode' WHERE userid=$id");
                  header ("location: taikhoan.php"); 
                  exit();
               }
            ?>
            </div>
            <div class="tab-pane container fade" id="menu2">
               <br>
            <?php 
    try {
      require('mysqli_connect.php');
      $query = "select OrderId, OrderTime, OrderAmount, OrderPack, (OrderAmount*OrderPack)AS Price,OrderStatus
      FROM  orders where UserId = $id";
      $result = $conn->query($query);
      if ($result) {
        echo '<div class="table-responsive">
        <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
        <th>Thời gian tổ chức</th>
        <th>Số lượng người</th>
        <th>Combo</th>
        <th>Giá</th>
        <th>Trạng thái</th>
        </tr>
        </thead>
        </div>';
        				
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          $OrderTime = htmlspecialchars($row['OrderTime'], ENT_QUOTES);
          $OrderAmount = htmlspecialchars($row['OrderAmount'], ENT_QUOTES);
          $OrderId = htmlspecialchars($row['OrderId'], ENT_QUOTES);
          $OrderPack = htmlspecialchars($row['OrderPack'], ENT_QUOTES);
          $Price = htmlspecialchars($row['Price'], ENT_QUOTES);
          $OrderStatus = htmlspecialchars($row['OrderStatus'], ENT_QUOTES);
          echo '<tr>
          <td>' . $row['OrderTime'] . '</td>
          <td>' . $row['OrderAmount'] . '</td>
          <td>' . $row['OrderPack'] . 'k</td>
          <td>' . $row['Price'] . '</td>
          <td>' . $row['OrderStatus'] . '</td>
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
         </div>
         <br>
      </div>
      <?php include 'footer.php'?>
   </body>
</html>