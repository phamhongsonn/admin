<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>
     Login
  </title>
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
      <link rel="stylesheet" href="./css/login.css">
</head>

<body>
<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    require('login.php');
    }
   ?>
  <div class="materialContainer">

   <div class="box">
   <img src="./image/tmp_gcs_full_5bf8bbee76ec57660765f7b7-2018-11-24-024815.png" alt=""width="50%">
      <div class="title">Đăng Nhập</div>
      <form action="login.php" method="post" onsubmit="return checked();" name="regform" id="regform">
      <div class="input">
         <input type="text" name="email" id="name"placeholder="Tên đăng nhập" require>
         <span class="spin"></span>
      </div>
      <div class="input">
         <input type="password" name="password1" id="pass"placeholder="Mật khẩu" require>
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button type="submit"><span>Đăng Nhập</span> <i class="fa fa-check"></i></button>
      </div>
   </form>
      <a href="home.php" class="pass-forgot">Quay lại</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>
      <div class="title">Đăng Kí</div>
      <div class="input">
         <input type="text" name="regname" id="regname"placeholder="Tên đăng nhập" require>
         <span class="spin"></span>
      </div>

      <div class="input">
         <input type="password" name="regpass" id="regpass"placeholder="Nhập mật khẩu" require>
         <span class="spin"></span>
      </div>

      <div class="input">
         <input type="password" name="reregpass" id="reregpass"placeholder="Nhập mật khẩu" require>
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>Tiếp Tục</span></button>
      </div>
   </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="./js/index.js"></script>
</body>

</html>