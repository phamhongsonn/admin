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
    <div class="container">
    <div class="row">
        <?php
        require('mysqli_connect.php');
        $id = $_GET['id'];
        $query = ("SELECT * FROM posts where PostId=$id");
        $result = $conn->query($query);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $PostId = htmlspecialchars($row['PostId'], ENT_QUOTES);
            $Title = htmlspecialchars($row['Title'], ENT_QUOTES);
            $Content = htmlspecialchars($row['Content'], ENT_QUOTES);
            $Post_Des = htmlspecialchars($row['Content'], ENT_QUOTES);
            $Image = htmlspecialchars($row['Image'], ENT_QUOTES);
            echo '<div class="col-lg-8">
            <h1 class="mt-4">'.$Title.'</h1>
            <img class="img-fluid rounded" src="'.$Image.'" alt="" width="100%">
            <hr>
            <p class="lead">'.$Content.'</p>
           </div>';
        }
        ?>
    <div class="col-md-4">
   <div class="card my-4">
      <h5 class="card-header">Fanpage</h5>
      <div class="card-body">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaubuffetnuong%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="1000" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
   </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>