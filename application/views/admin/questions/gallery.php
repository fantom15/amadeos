<?php if (!empty($images)) : ?>
    <div class="row">
        <?php foreach ($images->result_array() as $image) : ?>
            <div class="col-4 p-3">
                <div class="col-12 p-3" style="border: 1px solid #aaa; cursor: pointer;">
                    <img class="image-gallery" src="<?= base_url() . 'assets/img/images_list/' . $image['image_name'] ?>" style="width: 100%; max-height: 500px;">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function() {
        $('.image-gallery').on('click', function() {
            var src = $(this).prop('src');
            $('.image-div').html(
                '<img src="' + src + '" style="width: 500px; height: 300px; z-index: 99">'
            );
        })
    })
</script>