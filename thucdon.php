
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
                <form class="form-inline">
                    <a href="#" style="color:#f1022a;font-weight: bold">Đăng nhập</a>
                </form>
            </nav>
        </div>
    </header>
    <section class="slider">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="http://gogi.ggg.com.vn/wp-content/uploads/sites/2/2019/01/dke-1.jpg"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://gogi.ggg.com.vn/wp-content/uploads/sites/2/2019/01/dleo-1.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://gogi.ggg.com.vn/wp-content/uploads/sites/2/2019/01/ko-1.jpg"
                        alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://gogi.ggg.com.vn/wp-content/uploads/sites/2/2019/01/keo-1.jpg"
                        alt="four slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="container text-center">
            <p class="title">Thực đơn làu buffet</p>
        </div>
    <section style="background: rgb(240, 240, 240);">
    <?php
    try {
    require('mysqli_connect.php');
    $query = "SELECT * FROM items";
    $result = $conn->query($query);
    if ($result) {          
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $ItemName = htmlspecialchars($row['ItemName'], ENT_QUOTES);
        $Item_Description = htmlspecialchars($row['Item_Description'], ENT_QUOTES);
        $Price = htmlspecialchars($row['Price'], ENT_QUOTES);
        $Item_Image = htmlspecialchars($row['Item_Image'], ENT_QUOTES);
        echo '<div class="menuItem container">
        <div class="row">
            <div class="col-md-4"style="padding:0">
                <img src="'.$Item_Image.'" alt="" width="100%">
            </div>
            <div class="col-md-8"style="background:white;">
                <div class="menuContent">
                    <div class="menuTitle"style="padding-top: 30px;
                    font-size: 30px;text-transform: uppercase;">'.$ItemName.': <span style="color:red">'.$Price.'k</span></div>
                    <div class="color"></div>
                    <div class="menuDes" style="font-size: 18px;
                    margin: 50px 0;
                    text-transform: uppercase;
                    font-weight:bold;
                    color: #939598;">'.$Item_Description.'</div>
                </div>
            </div>
        </div>
        </div>';
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
    </section>
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