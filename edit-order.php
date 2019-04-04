<div class="container">
<h2 class="h2 text-center">Sửa tài khoản</h2>
            <br>
<form action="edit-order.php" method="post" name="form1">
            <div><input type="hidden" name="id"value="<?php echo $_GET['id'];?>"></div>
               <div class="form-group row">
                  <label for="OrderAmount" class="col-sm-2">Số Lượng người </label>
                  <div class="col-sm-10">
                     <input type="number" class="form-control" id="OrderAmount" name="OrderAmount" 
                        placeholder="số lượng người" maxlength="60" required
                        value="<?php if (isset($_POST['OrderAmount'])) echo $_POST['OrderAmount']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="OrderTime" class="col-sm-2">Thời gian </label>
                  <div class="col-sm-10">
                     <input type="datetime-local" class="form-control" id="OrderTime" name="OrderTime" 
                        placeholder="số lượng người" maxlength="60" required
                        value="<?php if (isset($_POST['OrderTime'])) echo $_POST['OrderTime']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="OrderPack" class="col-sm-2">Combo</label>
                  <div class="col-sm-10">
                     <input type="number" class="form-control" id="OrderPack" name="OrderPack" 
                        placeholder="Combo" minlength="8" required
                        pattern="[0-9]{1}"
                        value="<?php if (isset($_POST['OrderPack'])) echo $_POST['OrderPack']; ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="orderStatus" class="col-sm-2">Trạng thái</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="orderStatus" name="orderStatus" 
                        placeholder="Trạng thái" required
                        value="<?php if (isset($_POST['orderStatus'])) echo $_POST['orderStatus']; ?>">
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
    $OrderAmount=$_POST['OrderAmount'];
    $OrderPack=$_POST['OrderPack'];  
    $orderStatus=$_POST['orderStatus'];          
    $OrderTime=$_POST['OrderTime'];   
    $query = mysqli_query($conn, "UPDATE orders SET OrderTime='$OrderTime', OrderAmount='$OrderAmount',OrderPack='$OrderPack',
    orderStatus='$orderStatus' WHERE OrderId=$id");
    header ("location: order-manager.php"); 
    exit();
}
?>

</script>