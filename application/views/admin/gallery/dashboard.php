<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-12 bg-grey mt-5 px-4 py-5" style="min-height: 50vh; border-radius: 20px">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h3 style="font-weight: bolder;">Dashboard Gallery</h3>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-4">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" id="image-input">
                        <button class="btn btn-primary mt-2" id="image-input-btn">Upload</button>
                    </div>
                </div>
                <hr>
                <div class="col-12 mt-4">
                    <div class="row">
                        <?php foreach ($images->result_array() as $image) : ?>
                            <div class="col-md-4 p-2" style="border: 1px solid #eee; text-align: center;">
                                <img src="assets/img/questions/<?= $image['image_name'] ?>" style="max-width: 100%; max-height: 300px;">
                                <br>
                                <p class="mt-2" style="font-size: 12px"><?= base_url().'assets/img/questions/'.$image['image_name'] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#image-input-btn').on('click', function() {
            var form = new FormData();
            form.append("image", $("#image-input")[0].files[0]);
            form.append("folder", 'dashboard');

            $.ajax({
                url: 'admin/gallery/upload_image',
                type: "post",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function(result) {
                    var json = $.parseJSON(result);
                    alert(json.message);
                    if (json.success) {
                        window.location.reload();
                    }
                }
            });
        })
    })
</script>