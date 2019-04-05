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
    <script src="./jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'header.php'?>
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
<?php include 'footer.php'?>
</body>
</html>