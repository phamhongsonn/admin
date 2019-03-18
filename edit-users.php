<div class="container">
<form action="edit-users.php" method="post" name="form1">
            <h2 class="h2 text-center">Sửa tài khoản</h2>
            <br>
            <div> <input type="hidden" name="id"value="<?php echo $_GET['id'];?>"></div>
            <div class="form-group row">
                  <label for="first_name" class="col-sm-2">Họ:</label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[A-Za-z].{1,}" title="vui lòng nhập đúng định dạng vd : Pham" class="form-control" id="first_name" name="first_name" 
                        placeholder="Họ" maxlength="30" required 
                        value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
                  </div>
               </div>
               <div class="form-group row">
                  <label for="last_name" class="col-sm-2">Tên:</label>
                  <div class="col-sm-10">
                     <input type="text" pattern="[A-Za-z].{1,}" title="vui lòng nhập đúng định dạng vd : Son" class="form-control" id="last_name" name="last_name" 
                        placeholder="Tên" maxlength="40" required
                        value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="email" class="col-sm-2">E-mail:</label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control" id="email" name="email" 
                        placeholder="E-mail" maxlength="60" required
                        value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                  </div>
               </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block" name="edit">Sửa</button>
        </table>
    </form>
</div>
</div>
<?php
require('mysqli_connect.php');
if(isset($_POST['edit']))
{    
    $id = $_POST['id'];
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];    
    if(empty($firstname) || empty($lastname) || empty($email)) {            
        if(empty($lastname)) {
            echo "<font color='red'>Không được bỏ trống.</font><br/>";
        }
        if(empty($firstname)) {
            echo "<font color='red'>Không được bỏ trống.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Không được bỏ trống.</font><br/>";
        }        
    } else {  
        $query = mysqli_query($conn, "UPDATE users SET first_name='$firstname',last_name='$lastname',email='$email' WHERE userid=$id");
        header ("location: userList.php"); 
        exit();
    }
}
?>