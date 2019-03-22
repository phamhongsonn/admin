<div class="container">
<h2 class="h2 text-center">Sửa tài khoản</h2>
            <br>
<form action="edit-users.php" method="post" name="form1">
            <div> <input type="hidden" name="id"value="<?php echo $_GET['id'];?>"></div>
            <div class="form-group row">
                  <label for="UserName" class="col-sm-2">Tên khách hàng </label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[A-Za-z].{1,}" title="vui lòng nhập đúng định dạng vd : Pham" class="form-control" id="UserName" name="UserName" 
                        placeholder="Tên" maxlength="30" required 
                        value="<?php echo  isset($_POST['UserName'])  ?  $_POST['UserName']  : '' ?>" >
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserPhone" class="col-sm-2">Số điện thoại </label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[0-9].{1,}" title="" class="form-control" id="UserPhone" name="UserPhone" 
                        placeholder="Số điện thoại" maxlength="11" required
                        value="<?php if (isset($_POST['UserPhone'])) echo $_POST['UserPhone']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserEmail" class="col-sm-2">Email </label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control" id="UserEmail" name="UserEmail" 
                        placeholder="Email" maxlength="60" required
                        value="<?php if (isset($_POST['UserEmail'])) echo $_POST['UserEmail']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserPass" class="col-sm-2">Mật khẩu</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" id="UserPass" name="UserPass" 
                        pattern="[A-Za-z0-9].{8,}" title="mật khẩu phải lớn hơn 8 kí tự và không có kí tự đặc biệt"
                        placeholder="Mật khẩu" minlength="8" required
                        value="<?php if (isset($_POST['UserPass'])) echo $_POST['UserPass']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserLevel" class="col-sm-2">Level:</label>
                  <div class="col-sm-10">
                     <input type="number" class="form-control" id="UserLevel" name="UserLevel" 
                        placeholder="UserLevel" min="1" max="2" required
                        value="<?php if (isset($_POST['UserLevel'])) echo $_POST['UserLevel']; ?>">
                  </div>
               </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block" name="edit">Sửa</button>
    </form>
</div>
</div>
<?php
require('mysqli_connect.php');
if(isset($_POST['edit']))
{    
    $id = $_POST['id'];
    $UserName=$_POST['UserName'];
    $UserPhone=$_POST['UserPhone'];
    $UserEmail=$_POST['UserEmail'];
    $UserPass=$_POST['UserPass'];  
    $UserLevel=$_POST['UserLevel'];  
    $hashed_passcode = password_hash($UserPass, PASSWORD_DEFAULT);             
    $query = mysqli_query($conn, "UPDATE users SET UserName='$UserName',UserPhone='$UserPhone',
    UserEmail='$UserEmail', UserPass='$hashed_passcode', UserLevel='$UserLevel' WHERE userid=$id");
    header ("location: userList.php"); 
    exit();
}
?>

<script type="text/javascript">
   var input = document.getElementById('UserName');
   input.oninvalid = function(event) {
    event.target.setCustomValidity('vui lòng nhập đúng định dạng vd : Hùng');
}
var input2 = document.getElementById('UserPhone');
   input2.oninvalid = function(event) {
    event.target.setCustomValidity('vui lòng nhập đúng định dạng vd : 0348915655');
}
var input3 = document.getElementById('UserPass');
   input3.oninvalid = function(event) {
    event.target.setCustomValidity('mật khẩu phải lớn hơn 8 kí tự và không có kí tự đặc biệt');
}
</script>