<?php
if (isset($_POST['Pid'])) {
  include 'edit-items-form.php';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
    <link rel="shortcut icon" href="Logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <script src="./Javascript/valid.js"></script> -->
  <script>
  window.onclick = function(event) {
    if (event.target == document.getElementById('mdaddpro')|| event.target == document.getElementById('canceladd')) {
      document.getElementById('mdaddpro').style.display = "none";
    }
    if (event.target == document.getElementById('helo')){
        // alert("xxx");
        addz();
    }
    if (event.target == document.getElementById('mdeditpro')|| event.target == document.getElementById('canceledit')) {
      document.getElementById('mdeditpro').style.display = "none";
    }
    if (event.target == document.getElementById('submiteditprod')){
      document.getElementById('mdconfirmedit').style.display = "block";
    }
    
    if (event.target == document.getElementById('cancelconfirmedit')) {
      document.getElementById('mdconfirmedit').style.display = "none";
    }
    
  }
  
  function addz(){
        var ItemName = document.getElementById("ItemName").value;
        var Description = document.getElementById("ItemDescription").value;
        var Price = document.getElementById("Priceproduct").value;
        var input = document.getElementById("Imageitem");
        file = input.files[0];
        if(file !== undefined){
            // formData= new FormData();
            formData= new FormData();
            formData.append("ItemName",ItemName);
            formData.append("Description",Description);
            formData.append("Price",Price);
            if(!!file.type.match(/image.*/)){
            formData.append('Imageitem', file); 
            $.ajax({
                url: "add-items-be.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data){
                  location.reload();
                  alert("thêm combo thành công");  
                }
            });
            }else{
            alert('Not a valid image!');
            }
        }else{
            alert('Input something!');
        }     
  }
  

  </script>
</head>
<body>
  <div class="container" >
      <h2 class="h2 text-center">Add Combo</h2>
    <form  method="post" name="regform" onsubmit="return false;" id="regform" enctype="multipart/form-data">
        <div class="form-group row">
              <label for="ItemName" class="col-sm-4" >Combo Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="ItemName" name="ItemName" 
                    placeholder="Product Name" maxlength="30" required>
            </div>    
        </div>
        <div class="form-group row">
              <label for="Image" class="col-sm-4" >Combo Image:</label>
            <div class="col-sm-8">
                <input type="file" id="Imageitem" name="Image" required>
            </div>    
        </div>
        <div class="form-group row">
               <label for="Description" class="col-sm-4" >Combo Description:</label>
            <div class="col-sm-8">
              <textarea type="description" class="form-control" id="ItemDescription" name="description" 
                placeholder="Product Description" maxlength="60" required></textarea>
            </div>    
        </div>
        <div class="form-group row">
              <label for="Price" class="col-sm-4" >Combo Price:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="Priceproduct" name="Price" 
                placeholder="Product Price" minlength="2" maxlength="10" required>
            </div>    
        </div>
          <input id="helo" class="btn btn-success btn-block " type="button"  name="submitadd1" value="Confirm">
          <input id="cancel" class="btn btn-outline-success d-inline btn-block" type="button" value="Cancel" >
            </form>
  </div>
</body>
</html>