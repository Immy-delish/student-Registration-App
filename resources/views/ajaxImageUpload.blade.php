<!DOCTYPE html>
<html>
<head>
<title>Image Uploading</title>
<!-- add icon link -->
<link rel="icon" href=
"https://cdn.iconscout.com/icon/premium/png-512-thumb/verified-user-6768727-5568582.png?f=webp&w=256"
          type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
</head>
<body>
<div class="container">
<h1>Image Uploading </h1>
<form action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">
<div class="alert alert-danger print-error-msg" style="display:none">
<ul></ul>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label>Image Name:</label>
<input type="text" name="title" class="form-control" placeholder="File Name">
</div>
<div class="form-group">
<label>Choose Image:</label>
<input type="file" name="image" class="form-control">
</div>
<div class="form-group">
<button class="btn btn-success upload-image" type="submit">Upload Image</button>
</div>
</form>
</div>
<script type="text/javascript">
$("body").on("click",".upload-image",function(e){
$(this).parents("form").ajaxForm(options);
});
var options = {
complete: function(response)
{
if($.isEmptyObject(response.responseJSON.error)){
$("input[name='title']").val('');
alert('Image Upload Successfully.');
}else{
printErrorMsg(response.responseJSON.error);
}
}
};
function printErrorMsg(msg) {
$(".print-error-msg").find("ul").html('');
$(".print-error-msg").css('display','block');
$.each( msg, function( key, value ) {
$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
});
}
</script>
</body>
</html>