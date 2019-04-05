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
    <?php include ('header.php')?>
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
    <section style="background-color:#eff4f7">
        <div class="container text-center">
            <p class="title">tin tức</p>
        </div>
        <div class="container text-center"style="padding-top:20px;">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                    <?php
                    try {
                    require('mysqli_connect.php');
                    $query = "SELECT * FROM posts";
                    $result = $conn->query($query);
                    if ($result) {          
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        $PostId = htmlspecialchars($row['PostId'], ENT_QUOTES);
                        $Title = htmlspecialchars($row['Title'], ENT_QUOTES);
                        $Content = htmlspecialchars($row['Content'], ENT_QUOTES);
                        $Post_Des = htmlspecialchars($row['Content'], ENT_QUOTES);
                        $Image = htmlspecialchars($row['Image'], ENT_QUOTES);
                        echo '<div class="col-md-6">
                        <div class="news-blog">
                            <div class="news-image">
                                <img src="'.$Image.'" alt="" width="100%"height="200px">
                            </div>
                            <div class="container news-content text-left">
                                <div class="news-title"><a href="single.php?id='.$row['PostId'].'">'.$Title.'</a></div>
                                <div class="news-time">
                                    <i class="far fa-calendar-alt"></i> 15/3/2019&emsp;<i class="fas fa-clock"></i>
                                    8h:30
                                </div>
                                <div class="news-des"> '.$Post_Des.'
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

                </div>
                <div class="col-md-4 text-center">
                    <div class="fanpage">fanpage</div>
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaubuffetnuong%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="1000" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
</body>

</html>