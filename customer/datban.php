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
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="./jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="menu container">
            <nav class="navbar navbar-light navbar-expand-md">
                <a class="navbar-brand" href="#" style="color:#f1022a">
                    <img src="./image/tmp_gcs_full_5bf8bbee76ec57660765f7b7-2018-11-24-024815.png" alt="" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <a class="nav-link" href="#">Giới thiệu</a>
                    <a class="nav-link" href="#">Thực đơn</a>
                    <a class="nav-link" href="#">Tin tức</a>
                    <a class="nav-link" href="#">Đặt bàn</a>
                    <a class="nav-link" href="#">Khuyến mại</a>
                </div>
                
            </nav>
        </div>
    </header>
    <div class="container" style="background:url(https://kfcvietnam.com.vn/templates/images/thong-tin-dat-tiec-bg-vn.png)no-repeat;
    background-size:cover;background-position: center">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <form  action="datban-confirm.php" style="padding:700px 0 700px 0" method="post"> 
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                </div>
                                <input type="number" class="form-control" name="OrderAmount" id="OrderAmount"
                                placeholder="Số lượng người" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                                <input type="datetime-local" class="form-control"
                                name="OrderTime" id="OrderTime"
                                
                                placeholder="Ngày tổ chức"required>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-utensils"></i></div>
                                    </div>
                                    <input type="text" class="form-control"
                                    name="OrderPack" id="OrderPack" 
                                    placeholder="Chọn Combo"required>
                                </div>
                        </div>
                        <input type="hidden" id="Pid" name="Pid" value="<?php echo ($_SESSION['id']) ?>"/>
                        <div class="text-center">
                            <button class="btn btn-danger btn-block" type="submit">Đặt tiệc</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>
    </section>
</div>
    <footer style="margin:0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 address">
                    <h6> Restaurant manage </h6>
                    <div class="color">
                    </div>
                    <p><i class="fas fa-map-marked-alt"></i>&emsp;Km 17, QL 21, xã Đạo Đức, huyện Vị Giang, tỉnh Hà
                        Giang </p>
                    <p>&nbsp;<i class="fas fa-mobile-alt"></i>&emsp;0984 337 025 </p>
                    <p><i class="fas fa-envelope"></i>&emsp;tuanvn3c@gmail.com </p>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 company-info">
                    <h6> THÔNG TIN WEBSITE </h6>
                    <div class="color">
                    </div>
                    <p><i class="fas fa-circle"></i><a href="#"> Trang chủ </a></p>
                    <p><i class="fas fa-circle"></i> <a href="#">Giới thiệu </a></p>
                    <p><i class="fas fa-circle"></i> <a href="#">Thực đơn </a></p>
                    <p><i class="fas fa-circle"></i> <a href="#">Khuyến mại </a></p>
                    <p><i class="fas fa-circle"></i> <a href="#">Tin tức </a></p>
                </div>
                <div class="col-md-4 fanpage">
                    <br>
                    <h6> FANPAGE </h6>
                    <div class="color"></div>
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaubuffetnuong%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
try {
    require('mysqli_connect.php');
    $id = $_POST['Pid'];
    $OrderAmount=$_POST['OrderAmount'];
    $OrderTime=$_POST['OrderTime'];  
    $OrderPack=$_POST['OrderPack'];                                      
    $query = "INSERT INTO orders (UserId, OrderTime, OrderAmount, OrderPack) ";
    $query .= "VALUES(?, ?, ?, ?)";			                
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isid", $id, $OrderTime, $OrderAmount , $OrderPack);
    if ($stmt->execute()) {		
        header ("location: datban.php"); 
        exit();
    } else {
        $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
        $errorstring .= "System Error<br />You could not be registered due ";
        $errorstring .= "to a system error. We apologize for any inconvenience.</p>"; 
        exit();
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
$stmt->close();
$conn->close();
?>