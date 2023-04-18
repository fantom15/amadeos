<div class="form-group">
    <label>Image</label>
    <input type="file" id="image-input">
    <button class="btn btn-primary mt-2" id="image-input-btn">Upload</button>
</div>
<hr>
<div class="row">
    <?php foreach ($image_list->result_array() as $img) : ?>
        <?php $array = explode('.', $img['image_name']); ?>
        <?php if (in_array(end($array), ['png', 'jpeg', 'jpg'])) : ?>
            <div class="col-md-6" style="border-bottom: 1px solid #333; padding: 15px">
                <img src="<?= 'assets/img/images_list/' . $img['image_name'] ?>" style="width: 100%">
                <br>
                <p class="mt-3" style="font-size: 12px">
                    <?= base_url() . 'assets/img/images_list/' . $img['image_name']; ?>
                </p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<script>
    $(document).ready(function() {
        $('#image-input-btn').on('click', function() {
            var form = new FormData();
            form.append("image", $("#image-input")[0].files[0]);

            $.ajax({
                url: 'admin/ebooks/upload_image',
                type: "post",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function(result) {
                    var json = $.parseJSON(result);
                    alert(json.message);
                    if (json.success) {
                        img_list();
                    }
                }
            });
        })
    })
</script>