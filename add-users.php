<div class="container">
      <h2 class="h2 text-center">Thêm người dùng</h2>
      <br>
      <form action="register.php" method="post" name="form1">
      <div class="form-group row">
                  <label for="UserName" class="col-sm-2">Tên khách hàng </label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[A-Za-z].{1,}" class="form-control" id="UserName" name="UserName" 
                        placeholder="Tên" maxlength="30" required 
                        value="<?php echo  isset($_POST['UserName'])  ?  $_POST['UserName']  : '' ?>" >
                  </div>
               </div>
               <div class="form-group row">
                  <label for="UserPhone" class="col-sm-2">Số điện thoại </label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[0-9].{1,}" class="form-control" id="UserPhone" name="UserPhone" 
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
                        pattern="[a-z0-9].{8,}"
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
            <button type="submit" class="btn btn-primary btn-block">Thêm</button>
    </form>
</div>
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