
<script>
window.onclick = function(event) {
    if (event.target == document.getElementById('submiteditpost1')) {
      // alert("123");
      editpostz();
    }
    }
    function editpostz(){
      // alert("xxx");
        var Post_Titleedit = document.getElementById("Post_Titleedit").value;
        var Post_Desedit = document.getElementById("Post_Desedit").value;
        var Post_Contentedit = document.getElementById("Post_Contentedit").value;
        var Pid = document.getElementById("Pid").value;
        var input = document.getElementById("post_imgedit");
        file = input.files[0];
            formData= new FormData();
            formData.append("Post_Titleedit",Post_Titleedit);
            formData.append("Post_Desedit",Post_Desedit);
            formData.append("Post_Contentedit",Post_Contentedit);
            formData.append("Pid",Pid);
        alert(file);
        if(file !== undefined){
            // formData= new FormData();
            if(!!file.type.match(/image.*/)){
            formData.append('post_imgedit', file);
            }else{
            alert('Not a valid image!');
            }
        }
        $.ajax({
                url: "edit-posts.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data){
                  location.reload();
                }
            });
            }
            </script>

          <div class="container">
          <h2 class="h2 text-center">Edit Post</h2>
            <br>
            <form onsubmit="return false;" method="post" name="editpostform" enctype="multipart/form-data">
            <div class="form-group row">
                  <label for="Title" class="col-sm-4">Title: </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="Post_Titleedit" name="Post_Titleedit"
                    placeholder="Title" maxlength="30" required
                    >
                  </div>
               </div>
               <div class="form-group row">
               <label for="Image" class="col-sm-4" >Post Image:</label>
               <div class="col-sm-8">
               <input type="file" id="post_imgedit" name="post_imgedit" > 
                  </div>
               </div>
               <div class="form-group row">
               <label for="Post-Des" class="col-sm-4" >Post Description:</label>
                  <div class="col-sm-8">
                  <textarea type="Post_Des" class="form-control" id="Post_Desedit" name="Post_Desedit"
          placeholder="Post Description" maxlength="60" required ></textarea>
                  </div>
               </div>
               <div class="form-group row">
               <label for="Content" class="col-sm-4" >Content:</label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="Post_Contentedit" name="Post_Contentedit"
          placeholder="Content" maxlength="100" required
          >
               </div>
            <br>
            <input type="hidden" id="Pid" name="Pid" value="<?php echo $_GET['id']; ?>"/>
        <div class="col-sm-8 d-flex justify-content-end mx-auto my-4">
          <input id="submiteditpost1" class="btn btn-primary btn-block" type="button" name="submiteditpost" value="Confirm">
          <input id="canceleditprod" class="btn btn-outline-success d-inline" type="button" value="Cancel" >
        </div>
    </form>
</div>
</div>