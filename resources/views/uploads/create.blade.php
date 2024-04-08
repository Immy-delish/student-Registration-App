<!-- create.blade.php -->

<form id="imageUploadForm" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <button type="button" id="uploadButton">Upload Image</button>
</form>
<div id="uploadStatus"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#uploadButton').click(function() {
            var formData = new FormData();
            formData.append('image', $('#image')[0].files[0]);

            $.ajax({
                url: '{{ route("image.upload") }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#uploadStatus').html('Uploading...');
                },
                success: function(response) {
                    $('#uploadStatus').html(response);
                },
                error: function(xhr, status, error) {
                    $('#uploadStatus').html('Upload failed: ' + error);
                }
            });
        });
    });
</script>
