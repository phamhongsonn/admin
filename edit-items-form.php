
<script>
window.onclick = function(event) {
   
    if (event.target == document.getElementById('submiteditprodz')) {
      editz();
    }
    }
    function editz(){
        var ItemName = document.getElementById("product_nameedit").value;
        var Item_Description = document.getElementById("product_descedit").value;
        var Price = document.getElementById("product_priceedit").value;
        var Pid = document.getElementById("Pid").value;
        var input = document.getElementById("product_imgedit");
        file = input.files[0];
            formData= new FormData();
            formData.append("product_nameedit",ItemName);
            formData.append("product_descedit",Item_Description);
            formData.append("product_priceedit",Price);
            formData.append("Pid",Pid);
        // alert(file);
        if(file !== undefined){
            // formData= new FormData();
            if(!!file.type.match(/image.*/)){
            formData.append('product_imgedit', file); 
            }else{
            alert('Not a valid image!');
            }
        }
        $.ajax({
                url: "edit-item.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data){
                  location.reload();
                }
            });}</script>

<div class="container">
<h2 class="h2 text-center">Edit Item</h2>
            <br>
<form onsubmit="return false;" method="post" name="editform" enctype="multipart/form-data">
            <div class="form-group row">
                  <label for="ItemName" class="col-sm-4">Combo Name: </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="product_nameedit" name="product_nameedit" 
          placeholder="Product Name" maxlength="30"  
          >
                  </div>
               </div>
               <div class="form-group row">
               <label for="Image" class="col-sm-4" >Combo Image:</label>
               <div class="col-sm-8">
               <input type="file" id="product_imgedit" name="product_imgedit" >
                  </div>
               </div>
               <div class="form-group row">
               <label for="Description" class="col-sm-4" >Combo Description:</label>
                  <div class="col-sm-8">
                  <textarea type="product_desc" class="form-control" id="product_descedit" name="product_descedit" 
          placeholder="Product Description" maxlength="60" ></textarea>
                  </div>
               </div>
               <div class="form-group row">
               <label for="Price" class="col-sm-4" >Combo Price:</label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="product_priceedit" name="product_priceedit" 
          placeholder="Product Price" minlength="2" maxlength="10" 
          >
               </div>
            <br>
            <input type="hidden" id="Pid" name="Pid" value="<?php echo $_GET['id'];?>"/>
        <div class="col-sm-8 d-flex justify-content-end mx-auto my-4">
          <input id="submiteditprodz" class="btn btn-success d-inline mr-2" type="button" name="submitedit" value="Confirm">
          <input id="canceleditprod" class="btn btn-outline-success d-inline" type="button" value="Cancel" >
        </div>
    </form>
</div>
</div>