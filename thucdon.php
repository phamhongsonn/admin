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
<?php include 'header.php' ?>
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
    <?php include 'footer.php' ?>
</body>

</html>