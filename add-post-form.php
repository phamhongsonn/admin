<?php
if (isset($_POST['Pid'])) {
  include 'edit-post-form.php';
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
    if (event.target == document.getElementById('addpost')){
        // alert("xxx");
        addpostz();
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
  
  function addpostz(){
        var Title = document.getElementById("Title").value;
        var Post_Des = document.getElementById("Description").value;
        var Content = document.getElementById("Content").value;
        var input = document.getElementById("Image");
        file = input.files[0];
        if(file !== undefined){
            // formData= new FormData();
            formData= new FormData();
            formData.append("Title",Title);
            formData.append("Post_Des",Post_Des);
            formData.append("Content",Content);
            if(!!file.type.match(/image.*/)){
            formData.append('Image', file); 
            $.ajax({
                url: "add-post-be.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data){
                  location.reload();
                  alert("thêm bài đăng thành công");  
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
      <h2 class="h2 text-center">Add Post</h2>
    <form  method="post" name="regform" onsubmit="return false;" id="regform" enctype="multipart/form-data">
        <div class="form-group row">
              <label for="Title" class="col-sm-4" >Title:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Title" name="Title" 
                    placeholder="Title" maxlength="100" required>
            </div>    
        </div>
        <div class="form-group row">
              <label for="Image" class="col-sm-4" >Post Image:</label>
            <div class="col-sm-8">
                <input type="file" id="Image" name="Image" required>
            </div>    
        </div>
        <div class="form-group row">
               <label for="Content" class="col-sm-4" >Content:</label>
            <div class="col-sm-8">
              <textarea type="description" class="form-control" id="Content" name="Content" 
                placeholder="Content" required></textarea>
            </div>    
        </div>
        <div class="form-group row">
              <label for="Description" class="col-sm-4" >Description:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="Description" name="Description" 
                placeholder="Description" maxlength="100" required>
            </div>    
        </div>
          <input id="addpost" class="btn btn-primary btn-block " type="button"  name="submitadd1" value="Confirm">
          <input id="cancel" class="btn btn-outline-success d-inline btn-block" type="button" value="Cancel" >
            </form>
  </div>
</body>
</html>