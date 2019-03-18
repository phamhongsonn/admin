<div class="container">

      <h2 class="h2 text-center">Thêm người dùng</h2>
      <br>
      <form action="register.php" method="post" name="regform" id="regform">
         <div class="form-group row">
            <label for="first_name" class="col-sm-4">Họ:</label>
            <div class="col-sm-8">
               <input type="text" pattern="[A-Za-z].{1,}" title="vui lòng nhập đúng định dạng vd : Pham" class="form-control" id="first_name" name="first_name" 
                  placeholder="Họ" maxlength="30" required 
                  value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
            </div>
         </div>
         <div class="form-group row">
            <label for="last_name" class="col-sm-4">Tên:</label>
            <div class="col-sm-8">
               <input type="text" pattern="[A-Za-z].{1,}" title="vui lòng nhập đúng định dạng vd : Son" class="form-control" id="last_name" name="last_name" 
                  placeholder="Tên" maxlength="40" required
                  value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="email" class="col-sm-4">E-mail:</label>
            <div class="col-sm-8">
               <input type="email" class="form-control" id="email" name="email" 
                  placeholder="E-mail" maxlength="60" required
                  value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="password1" class="col-sm-4">Mật khẩu:</label>
            <div class="col-sm-8">
               <input type="password" pattern="[A-Za-z0-9].{1,}" title="vui lòng không nhập kí tự !" class="form-control" id="password1" name="password1" 
                  placeholder="Mật khẩu" minlength="8" maxlength="12" required
                  value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
            </div>
         </div>
         <input id="submit" class="btn btn-primary btn-block" type="submit" name="submit" value="Thêm">
      </form>

</div>