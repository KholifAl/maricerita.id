<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Drag and Drop File Upload</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="assets/style.css"> -->
</head>
<body>
    
<style>
    .container {
  padding: 50px 200px;
}
.box {
  position: relative;
  background: #ffffff;
  width: 100%;
}
.box-header {
  color: #444;
  display: block;
  padding: 10px;
  position: relative;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 10px;
}
.box-tools {
  position: absolute;
  right: 10px;
  top: 5px;
}
.dropzone-wrapper {
  border: 2px dashed #91b0b3;
  color: #92b0b3;
  position: relative;
  height: 150px;
}
.dropzone-desc {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  text-align: center;
  width: 40%;
  top: 50px;
  font-size: 16px;
}
.dropzone,
.dropzone:focus {
  position: absolute;
  outline: none !important;
  width: 100%;
  height: 150px;
  cursor: pointer;
  opacity: 0;
}
.dropzone-wrapper:hover,
.dropzone-wrapper.dragover {
  background: #ecf0f5;
}
.preview-zone {
  text-align: center;
}
.preview-zone .box {
  box-shadow: none;
  border-radius: 0;
  margin-bottom: 0;
}
</style>

 <section>
  <form action="" method="POST" enctype="multipart/form-data" >
   <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="form-group">
       <label class="control-label">Upload File</label>
       <div class="preview-zone hidden">
        <div class="box box-solid">
         <div class="box-header with-border">
          <div><b>Preview</b></div>
          <div class="box-tools pull-right">
           <button type="button" class="btn btn-danger btn-xs remove-preview">
            <i class="fa fa-times"></i> Reset This Form
           </button>
          </div>
         </div>
         <div class="box-body"></div>
        </div>
       </div>
       <div class="dropzone-wrapper">
        <div class="dropzone-desc">
         <i class="glyphicon glyphicon-download-alt"></i>
         <p>Choose an image file or drag it here.</p>
        </div>
        <input type="file" name="img_logo" class="dropzone">
       </div>
      </div>
     </div>
    </div>
    <div class="row">
     <div class="col-md-12">
      <button type="submit" class="btn btn-primary pull-right">Upload</button>
     </div>
    </div>
   </div>
  </form> 
 </section>
 
 <script src="node_modules/jquery/dist/jquery.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="assets/app.js"></script>
</body>


<script>

function readFile(input) {
 if (input.files && input.files[0]) {
 var reader = new FileReader();
 
 reader.onload = function (e) {
 var htmlPreview = 
 '<img width="200" src="' + e.target.result + '" />'+
 '<p>' + input.files[0].name + '</p>';
 var wrapperZone = $(input).parent();
 var previewZone = $(input).parent().parent().find('.preview-zone');
 var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
 
 wrapperZone.removeClass('dragover');
 previewZone.removeClass('hidden');
 boxZone.empty();
 boxZone.append(htmlPreview);
 };
 
 reader.readAsDataURL(input.files[0]);
 }
}
function reset(e) {
 e.wrap('<form>').closest('form').get(0).reset();
 e.unwrap();
}
$(".dropzone").change(function(){
 readFile(this);
});
$('.dropzone-wrapper').on('dragover', function(e) {
 e.preventDefault();
 e.stopPropagation();
 $(this).addClass('dragover');
});
$('.dropzone-wrapper').on('dragleave', function(e) {
 e.preventDefault();
 e.stopPropagation();
 $(this).removeClass('dragover');
});
$('.remove-preview').on('click', function() {
 var boxZone = $(this).parents('.preview-zone').find('.box-body');
 var previewZone = $(this).parents('.preview-zone');
 var dropzone = $(this).parents('.form-group').find('.dropzone');
 boxZone.empty();
 previewZone.addClass('hidden');
 reset(dropzone);
});
</script>
</html>