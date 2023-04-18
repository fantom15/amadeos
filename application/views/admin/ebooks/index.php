<script src="assets/ckeditor/ckeditor.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="col-12 bg-grey" style="height: 80vh; margin-top: 10vh; border-radius: 20px; padding: 15px">
                <h3 class="gray-color">index</h3>
                <div class="row">
                    <div class="col-6">
                        <label class="gray-color" style="display: inline-block; padding-left: 5px; padding-bottom: 10px;">Language</label>
                        <select class="form-select border-radius-50" id="new-language">
                            <?php foreach ($languages->result_array() as $lang) : ?>
                                <?php if (!empty($topic_language)) : ?>
                                    <option <?php echo ($lang['language_name'] == $topic_language->row()->language_name) ? 'selected' : '' ?> value="<?= $lang['id'] ?>"><?= $lang['language_name'] ?></option>
                                <?php else : ?>
                                    <option <?php echo ($lang['language_name'] == 'Dutch') ? 'selected' : '' ?> value="<?= $lang['id'] ?>"><?= $lang['language_name'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <option value="new">
                                <a>+ new language</a>
                            </option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="gray-color" style="color: #fff; display: inline-block; padding-bottom: 10px;">new topic</label>
                        <button data-bs-toggle="modal" data-bs-target="#topic-modal" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">add new topic <span>+</span></button>
                    </div>
                </div>
                <div class="col-12 mt-4" style="height: 50vh; border-top: 1px solid #eee; overflow-y: scroll; overflow-x: hidden;">
                    <?php $i = 0; ?>
                    <?php foreach ($ebooks->result_array() as $ebook) : ?>
                        <div class="col-12 topics-list lang_<?= $ebook['language_id'] ?>" style="border-bottom: 1px solid #eee">
                            <div class="row pt-2 pb-2">
                                <div class="col-2 text-center" style="border-right: 1px solid #eee;">
                                    <?php if ($ebook['icon']) : ?>
                                        <img src="<?= $ebook['icon'] ?>" style="width: 18px">
                                    <?php endif; ?>
                                </div>
                                <div class="col-7">
                                    <a href="admin/ebooks/index/<?= $ebook['id'] ?>"><?= $ebook['title'] ?></a>
                                </div>
                                <div class="col-2" style="text-align: right;padding-right: 0;position: relative;">
                                    <a href="admin/ebooks/up/<?= $ebook['id'] ?>" style="position: absolute; right: 25px; color:#B8B7BE;text-decoration: none;">&uarr;</a>
                                    <a href="admin/ebooks/down/<?= $ebook['id'] ?>" style="position: absolute; right: 45px; color:#B8B7BE;text-decoration: none;">&darr;</a>
                                    <a href="admin/ebooks/delete/<?= $ebook['id'] ?>"><img src="assets/img/svg/trash.svg" style="width: 18px"></a>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php if (!empty($topic)) : ?>
                <?php if (!empty($topic->row()->id)) : ?>
                    <div class="col-12 bg-grey p-4" style="margin-top: 10vh; border-radius: 20px">
                        <div>
                            <input type="hidden" id="topic-id" value="<?= (!empty($topic)) ? $topic->row()->id : ''  ?>">
                            <div class="form-group">
                                <label>Title: </label>
                                <input class="form-control" type="text" id="topic-title" value="<?= (!empty($topic)) ? $topic->row()->title : ''  ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="icon" value="<?= (!empty($topic)) ? $topic->row()->icon : ''  ?>">
                                <button type="button" class="btn btn-warning mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#icon-modal" id="icon-btn">Icon list</button>
                                <div id="icon-show">
                                    <?php if (!empty($topic)) : ?>
                                        <?php if (!empty($topic->row()->icon)) : ?>
                                            <img src="<?= $topic->row()->icon ?>" style="width: 50px">
                                        <?php endif ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label>Content: </label>
                                <textarea class="form-control" id="content" style="width: 100%; height: 40vh;"><?= (!empty($topic)) ? $topic->row()->content : ''  ?></textarea>
                            </div>
                            <div class="form-group">
                                <button id="add-content" class="btn-pink mt-3" style="width: 100px; height: 30px; text-align: center;">Add</button>
                                <button style="border-radius:50px;width:100px;height:30px" onclick="img_list()" type="button" class="btn btn-warning p-0" data-bs-toggle="modal" data-bs-target="#image-modal">Images</button>
                            </div>
                            <div class="form-group pt-3">
                                <span class="content-alert" style="color: #f00"></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="modal fade" id="language-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title gray-color" id="exampleModalLabel">
                    <img src="assets/img/admin_img/home-2.svg" style="width: 18px">
                    New Language
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Language name: </label>
                    <input class="form-control" id="language_name" type="text" name="language_name" required>
                </div>
                <div class="form-group">
                    <button id="add-lang" class="btn-pink mt-3" style="width: 100px; height: 30px; text-align: center;" type="submit">Add</button>
                </div>
                <div class="form-group pt-3">
                    <span class="lang-alert" style="color: #f00"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="topic-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title gray-color" id="exampleModalLabel">
                    <img src="assets/img/admin_img/home-2.svg" style="width: 18px">
                    New Topic
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Topic name: </label>
                    <input class="form-control border-radius-50" id="title" type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label>Select Language: </label>
                    <select class="form-select border-radius-50" id="topic-language">
                        <?php foreach ($languages->result_array() as $lang) : ?>
                            <option <?php echo ($lang['language_name'] == 'Dutch') ? 'selected' : '' ?> value="<?= $lang['id'] ?>"><?= $lang['language_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button id="add-topic" class="btn-pink mt-3" style="width: 100px; height: 30px; text-align: center;" type="submit">Add</button>
                </div>
                <div class="form-group pt-3">
                    <span class="topic-alert" style="color: #f00"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-lg" id="image-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title gray-color" id="exampleModalLabel">
                    <img src="assets/img/admin_img/home-2.svg" style="width: 18px">
                    Image list
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="img-list">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-lg" id="icon-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title gray-color" id="exampleModalLabel">
                    Icon list
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="icon-list">
                    <div class="row">
                        <?php for ($i = 1; $i < 51; $i++) : ?>
                            <div class="icon-div col-2 p-2 text-center" style="border: 1px solid #eee; cursor: pointer;">
                                <img style="width: 30px; " src="assets/img/svg/svg/<?= $i . '.svg' ?>">
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('content');

    $(function() {
        CKEDITOR.config.extraPlugins = 'justify';
    });

    $(document).ready(function() {
        $('#new-language').on('change', function() {
            var opt = $(this).val();
            console.log(opt);
            if (opt == 'new') {
                $('#language-modal').modal("show");
                $("#new-language").val('Dutch').change();
            } else {
                show_topic_by_language(opt);
            }
        })

        $('#add-lang').on('click', function() {
            $.post('admin/ebooks/insert_language', {
                    'name': $('#language_name').val()
                },
                function(result) {
                    var json = $.parseJSON(result);
                    if (json.success) {
                        window.location.reload();
                    } else {
                        $('.lang-alert').text(json.message)
                    }

                }
            )
        })

        $('#add-topic').on('click', function() {
            var form = new FormData();
            form.append("title", $('#title').val());
            form.append("language", $('#topic-language').val());

            $.ajax({
                url: 'admin/ebooks/insert_topic',
                type: "post",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function(result) {
                    var json = $.parseJSON(result);
                    if (json.success) {
                        var url = '<?= base_url() . 'admin/ebooks/index/' ?>' + json.insert_id;
                        window.location.replace(url);
                    } else {
                        $('.topic-alert').text(json.message)
                    }
                }
            });
        })

        function show_topic_by_language(id) {
            $('.topics-list').hide();
            $('.lang_' + id).show();
        }

        var first_language = $("#new-language").val();
        show_topic_by_language(first_language);

        $('#add-content').on('click', function() {
            var form = new FormData();
            form.append("id", $('#topic-id').val());
            form.append("title", $('#topic-title').val());
            form.append("icon", $('#icon').val());
            form.append("content", CKEDITOR.instances['content'].getData());

            $.ajax({
                url: 'admin/ebooks/insert_content',
                type: "post",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function(result) {
                    var json = $.parseJSON(result);
                    if (json.success) {
                        alert(json.message);
                        window.location.reload();
                    } else {
                        $('.content-alert').text(json.message)
                    }
                }
            });
        })

        img_list = function() {
            $.post('admin/ebooks/img_list', {
                    'img': ''
                },
                function(result) {
                    $('#img-list').html(result);
                }
            )
        }

        $('.icon-div').on('click', function() {
            var src = $(this).find('img').attr('src');
            $('#icon').val(src);
            $('#icon-show').empty().append("<img style='width: 50px' src='" + src + "' >");
            $('#icon-modal').modal('hide');
            console.log(src)
        })
    })
</script>