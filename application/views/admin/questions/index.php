<div class="container pb-2">
    <div class="row">
        <div class="col-md-4">
            <div class="col-12 bg-grey" style="height: 80vh; margin-top: 10vh; border-radius: 20px; padding: 15px">
                <h3 class="gray-color">index</h3>
                <div class="row">
                    <div class="col-6">
                        <label class="gray-color" style="display: inline-block; padding-left: 5px; padding-bottom: 10px;">Language</label>
                        <select class="form-select border-radius-50" id="languages">
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
                    <?php foreach ($topic->result_array() as $item) : ?>
                        <div class="col-12 topics-list lang_<?= $item['language_id'] ?>" style="border-bottom: 1px solid #eee">
                            <div class="row pt-2 pb-2">
                                <div class="col-2 text-center" style="border-right: 1px solid #eee;">
                                    <?php if ($item['icon']) : ?>
                                        <img src="<?= $item['icon'] ?>" style="width: 18px">
                                    <?php endif; ?>
                                </div>
                                <div class="col-7">
                                    <a href="admin/questions/index/<?= $item['id'] ?>"><?= $item['title'] ?></a>
                                </div>
                                <div class="col-2" style="text-align: right;padding-right: 0;position: relative;">
                                    <a href="admin/ebooks/up/<?= $item['id'] ?>" style="position: absolute; right: 25px; color:#B8B7BE;text-decoration: none;">&uarr;</a>
                                    <a href="admin/ebooks/down/<?= $item['id'] ?>" style="position: absolute; right: 45px; color:#B8B7BE;text-decoration: none;">&darr;</a>
                                    <a href="admin/ebooks/delete/<?= $item['id'] ?>"><img src="assets/img/svg/trash.svg" style="width: 18px"></a>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <input type="hidden" id="topic-id" value="<?= (!empty($topic_id)) ? $topic_id : 0 ?>">
            <input type="hidden" id="question-id" value="<?= (!empty($question)) ? $question->row()->id : 0 ?>">

            <?php if (!empty($topic_id)) : ?>
                <div class="col-12 bg-grey p-4" style="min-height: 80vh; margin-top: 10vh; border-radius: 20px">
                    <!-- questions id section -->
                    <div class="col-12" style="background: #F1F0F5;height: 40px;border-radius: 20px;">
                        <div class="row">
                            <div class="col-1" style="text-align: center; padding-top: 8px">
                                <a href="#" class="question-left-link">
                                    < </a>
                            </div>
                            <div class="col-10 text-center">
                                <a class="question-number-link <?= (empty($question_id)) ? 'question-number-link-selected' : '' ?>" href="admin/questions/index/<?= $topic_id ?>" style="display: inline-block; padding:8px 5px 5px 5px">new</a>
                                <?php foreach ($questions_list->result_array() as $item) : ?>
                                    <a class="question-number-link <?= ($item['id'] == $question_id) ? 'question-number-link-selected' : '' ?>" href="admin/questions/index/<?= $topic_id ?>/<?= $item['id'] ?>" style="display: inline-block; padding:8px 5px 5px 5px"><?= $item['id'] ?></a>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-1" style="text-align: center; padding-top: 8px">
                                <a class="question-right-link">></a>
                            </div>
                        </div>
                    </div>

                    <!-- Categories and Questions type section -->
                    <div class="row mt-3">
                        <?php if (!empty($question) && $question->row()->status == 'inactive') : ?>
                            <div class="alert alert-danger">This question is disable</div>
                        <?php endif ?>
                        <div class="col-12 image-section">
                            <div class="form-group">
                                <div class="">
                                    <?php $categories = ['one', 'two', 'three']; ?>
                                    <label for="image" class="form-label">Categories: </label>
                                    <select class="form-select" id="categories" <?= (!empty($question_id)) ? 'disabled' : '' ?>>
                                        <option value="0">--- Categories ---</option>
                                        <?php for ($i = 0; $i < count($categories); $i++) : ?>
                                            <option <?= (!empty($question) && $question->row()->categories == $categories[$i]) ? 'selected' : '' ?> value="<?= $categories[$i] ?>"><?= ucfirst($categories[$i]) ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 image-section mt-3">
                            <div class="form-group">
                                <div class="">
                                    <label for="image" class="form-label">Question type: </label>
                                    <?php $questions_type = [
                                        ['category_one', 'Three answer', 'three_answer'],
                                        ['category_two', 'ABC', 'abc'],
                                        ['category_two', 'Number', 'number'],
                                        ['category_two', 'Yes - No', 'yes_no'],
                                        ['category_three', 'Drag and Drop', 'drag_and_drop']
                                    ];
                                    ?>
                                    <select class="form-select" id="question_type" <?= (!empty($question_id)) ? 'disabled' : '' ?>>
                                        <option value="0">--- Question type ---</option>
                                        <?php for ($i = 0; $i < count($questions_type); $i++) : ?>
                                            <option <?= (!empty($question) && $question->row()->question_type == $questions_type[$i][2]) ? 'selected' : '' ?> class="question_type_options <?= $questions_type[$i][0] ?>" value="<?= $questions_type[$i][2] ?>"><?= $questions_type[$i][1] ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="questions_box mt-3">
                        <!-- three answer box -->
                        <div class="row" id="three_answer_box">
                            <?php
                            $three_answers = [1 => '', 2 => '', 3 => ''];
                            if (!empty($question)) {
                                if ($question->row()->question_type == 'three_answer') {
                                    if (!empty($question->row()->answer_option)) {
                                        $e = json_decode($question->row()->answer_option);
                                        $three_answers[1] = $e[0];
                                        $three_answers[2] = $e[1];
                                        $three_answers[3] = $e[2];
                                    }
                                }
                            }
                            ?>
                            <div class="col-12 pb-3 mb-1" style="background: #fff">
                                <div class="row">
                                    <div class="mt-1 col-8">
                                        <div class="form-group">
                                            <div class="">
                                                <label for="three_answer_image" class="form-label">Image</label>
                                                <button data-bs-toggle="modal" data-bs-target="#gallery-modal" id="image-three-answer-btn" question_type="three_answer" class="border-radius-50 btn-pink gallery-btn" style="width: 100%; height: 38px">Gallery</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 pt-4 mt-3">
                                        <button onclick="upload_image('three_answer')" id="image-three-answer-btn" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Upload</button>
                                    </div>
                                    <div class="col-12 image-area">
                                        <?php if (!empty($question) && $question->row()->question_type == 'three_answer') : ?>
                                            <div class="col-12 image-div mt-4">
                                                <?php if (!empty($question->row()->image)) : ?>
                                                    <img src="<?= $question->row()->image; ?>" style="width: 500px; z-index: 99">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div>
                                    <label for="three_answer_textarea">Question: </label>
                                    <textarea class="form-control" id="three_answer_textarea" style="height: 100px"><?= (!empty($question)) ? $question->row()->question : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" style="margin-top: 12px;" type="radio" <?= (!empty($question) && $question->row()->answers == '1') ? 'checked' : '' ?> value="1" name="three_answers_radio" role="switch" id="three_answers_radio_one">
                                    <div class="mb-3 row">
                                        <label for="three_answers_text_one" class="col-sm-1 col-form-label text-center">1- </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="<?= $three_answers[1] ?>" name="answer_option[]" id="three_answers_text_one">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" style="margin-top: 12px;" type="radio" <?= (!empty($question) && $question->row()->answers == '2') ? 'checked' : '' ?> value="2" name="three_answers_radio" role="switch" id="three_answers_radio_two">
                                    <div class="mb-3 row">
                                        <label for="three_answers_text_two" class="col-sm-1 col-form-label text-center">2- </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="<?= $three_answers[2] ?>" name="answer_option[]" id="three_answers_text_two">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" style="margin-top: 12px;" type="radio" <?= (!empty($question) && $question->row()->answers == '3') ? 'checked' : '' ?> value="3" name="three_answers_radio" role="switch" id="three_answers_radio_three">
                                    <div class="mb-3 row">
                                        <label for="three_answers_text_three" class="col-sm-1 col-form-label text-center">3- </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="<?= $three_answers[3] ?>" name="answer_option[]" id="three_answers_text_three">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10" style="background: #fff">
                                <div class="form-group">
                                    <label class="mt-2 mb-2" for="three_answer_description">Description: </label>
                                    <textarea id="three_answer_description" style="height: 100px" class="form-control"><?= (!empty($question)) ? $question->row()->description : '' ?></textarea>
                                </div>
                            </div>
                            <?php if (!empty($question)) : ?>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label></label>
                                        <a href="admin/ebooks/highlight_text/<?= $question->row()->topic_id ?>/<?= $question->row()->id ?>" class="book-highlight-btn mt-3">
                                            <img src="assets/img/admin_img/home-2.svg" style="width: 32px; margin-top: 20px">
                                            <br>
                                            <span class="mt-1" style="display: inline-block;">Book Highlight</span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-12 pt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <button onclick="insert('three_answer')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Insert</button>
                                    </div>
                                    <div class="col-3">
                                        <?php if (!empty($question)) : ?>
                                            <a href="admin/questions/change_status/<?= $question->row()->topic_id ?>/<?= $question->row()->id ?>" class="border-radius-50 btn-gray" style="width: 100%; height: 38px; display: inline-block; text-align: center; padding-top: 5px; text-decoration: none;">Disable</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End three answer box -->

                        <!-- ABC box -->
                        <div class="row" id="abc_box">
                            <div class="col-12 pb-3 mb-1" style="background: #fff">
                                <div class="row">
                                    <div class="mt-1 col-8">
                                        <div class="form-group">
                                            <div class="">
                                                <label for="abc-box-image" class="form-label">Image</label>
                                                <button data-bs-toggle="modal" data-bs-target="#gallery-modal" id="image-abc-btn" question_type="three_answer" class="border-radius-50 btn-pink gallery-btn" style="width: 100%; height: 38px">Gallery</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 pt-4 mt-3">
                                        <button onclick="upload_image('abc')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Upload</button>
                                    </div>
                                    <div class="col-12 image-area">
                                        <?php if (!empty($question) && $question->row()->question_type == 'abc') : ?>
                                            <div class="col-12 image-div mt-4">
                                                <?php if (!empty($question->row()->image)) : ?>
                                                    <img src="<?= $question->row()->image; ?>" style="width: 500px; z-index: 99">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div>
                                    <label for="abc_textarea">Question: </label>
                                    <textarea class="form-control" id="abc_textarea" style="height: 100px"><?= (!empty($question)) ?  $question->row()->question : '' ?></textarea>
                                </div>
                            </div>
                            <?php
                            $abc_answer = [1 => '', 2 => '', 3 => ''];
                            if (!empty($question)) {
                                if ($question->row()->question_type == 'abc') {
                                    if (!empty($question->row()->answer_option)) {
                                        $e = json_decode($question->row()->answer_option);
                                        $abc_answer[1] = $e[0];
                                        $abc_answer[2] = $e[1];
                                        $abc_answer[3] = $e[2];
                                    }
                                }
                            }
                            ?>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" <?= (!empty($question) && $question->row()->answers == 'A') ? 'checked' : '' ?> value="A" name="abc_radio" role="switch" id="abc_radio_a">
                                    <div class="mb-3 row">
                                        <label for="abc_radio_a" class="col-sm-1 col-form-label text-center">A- </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="<?= $abc_answer[1] ?>" name="answer_option_abc[]" id="abc_text_three">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" <?= (!empty($question) && $question->row()->answers == 'B') ? 'checked' : '' ?> value="B" name="abc_radio" role="switch" id="abc_radio_b">
                                    <div class="mb-3 row">
                                        <label for="abc_radio_b" class="col-sm-1 col-form-label text-center">B- </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="<?= $abc_answer[2] ?>" name="answer_option_abc[]" id="abc_text_three">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" <?= (!empty($question) && $question->row()->answers == 'C') ? 'checked' : '' ?> value="C" name="abc_radio" role="switch" id="abc_radio_c">
                                    <div class="mb-3 row">
                                        <label for="abc_radio_c" class="col-sm-1 col-form-label text-center">C- </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="<?= $abc_answer[3] ?>" name="answer_option_abc[]" id="abc_text_three">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10" style="background: #fff">
                                <div class="form-group">
                                    <label class="mt-2 mb-2" for="description">Description</label>
                                    <textarea id="abc_description" class="form-control"><?= (!empty($question)) ? $question->row()->description : '' ?></textarea>
                                </div>
                            </div>
                            <?php if (!empty($question)) : ?>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label></label>
                                        <a href="admin/ebooks/highlight_text/<?= $question->row()->topic_id ?>/<?= $question->row()->id ?>" class="book-highlight-btn mt-3">
                                            <img src="assets/img/admin_img/home-2.svg" style="width: 32px; margin-top: 20px">
                                            <br>
                                            <span class="mt-1" style="display: inline-block;">Book Highlight</span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-12 pt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <button onclick="insert('abc')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Insert</button>
                                    </div>
                                    <div class="col-3">
                                        <button onclick="disable('abc')" class="border-radius-50 btn-gray" style="width: 100%; height: 38px">Disable</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End ABC box -->

                        <!-- Number box -->
                        <div class="row" id="number_box">
                            <div class="col-12 pb-3 mb-1" style="background: #fff">
                                <div class="row">
                                    <div class="mt-1 col-8">
                                        <div class="form-group">
                                            <div class="">
                                                <label for="number_image" class="form-label">Image: </label>
                                                <button data-bs-toggle="modal" data-bs-target="#gallery-modal" id="image-number-btn" question_type="three_answer" class="border-radius-50 btn-pink gallery-btn" style="width: 100%; height: 38px">Gallery</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 pt-4 mt-3">
                                        <button onclick="upload_image('number')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Upload</button>
                                    </div>
                                    <div class="col-12 image-area">
                                        <?php if (!empty($question) && $question->row()->question_type == 'number') : ?>
                                            <div class="col-12 image-div mt-4">
                                                <?php if (!empty($question->row()->image)) : ?>
                                                    <img src="<?= $question->row()->image; ?>" style="width: 500px; z-index: 99">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div>
                                    <label for="number-textarea">Question: </label>
                                    <textarea class="form-control" id="number_textarea" style="height: 100px"><?= (!empty($question)) ? $question->row()->question : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-4 p-2 mb-1" style="background: #fff">
                                <select class="form-select" id="number-select">
                                    <option value="0">--- Select a number ---</option>
                                    <?php for ($i = 1; $i < 11; $i++) : ?>
                                        <option <?= (!empty($question) && $question->row()->answers == $i) ? 'selected' : '' ?> value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <div class="col-10" style="background: #fff">
                                <div class="form-group">
                                    <label class="mt-2 mb-2" for="description">Description</label>
                                    <textarea id="number_description" class="form-control"><?= (!empty($question)) ? $question->row()->description : '' ?></textarea>
                                </div>
                            </div>
                            <?php if (!empty($question)) : ?>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label></label>
                                        <a href="admin/ebooks/highlight_text/<?= $question->row()->topic_id ?>/<?= $question->row()->id ?>" class="book-highlight-btn mt-3">
                                            <img src="assets/img/admin_img/home-2.svg" style="width: 32px; margin-top: 20px">
                                            <br>
                                            <span class="mt-1" style="display: inline-block;">Book Highlight</span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-12 pt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <button onclick="insert('number')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Insert</button>
                                    </div>
                                    <div class="col-3">
                                        <button onclick="disable('number')" class="border-radius-50 btn-gray" style="width: 100%; height: 38px">Disable</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Number box -->

                        <!-- Yes and No box -->
                        <div class="row" id="yes_no_box">
                            <div class="col-12 pb-3 mb-1" style="background: #fff">
                                <div class="row">
                                    <div class="mt-1 col-8">
                                        <div class="form-group">
                                            <div class="">
                                                <label for="yes_no_image" class="form-label">Image: </label>
                                                <button data-bs-toggle="modal" data-bs-target="#gallery-modal" id="image-yes-no-btn" question_type="three_answer" class="border-radius-50 btn-pink gallery-btn" style="width: 100%; height: 38px">Gallery</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 pt-4 mt-3">
                                        <button onclick="upload_image('yes_no')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Upload</button>
                                    </div>
                                    <div class="col-12 image-area">
                                        <?php if (!empty($question) && $question->row()->question_type == 'yes_no') : ?>
                                            <div class="col-12 image-div mt-4">
                                                <?php if (!empty($question->row()->image)) : ?>
                                                    <img src="<?= $question->row()->image; ?>" style="width: 500px; z-index: 99">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div>
                                    <label for="yes-no-textarea">Question: </label>
                                    <textarea class="form-control" id="yes_no_textarea" style="height: 100px"><?= (!empty($question)) ? $question->row()->question : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" <?= (!empty($question) && $question->row()->answers == 'no') ? 'checked' : '' ?> value="no" name="yes_no_radio" role="switch" id="yes-no-radio-no">
                                    <label class="form-check-label" for="yes-no-radio-no"> No</label>
                                </div>
                            </div>
                            <div class="col-12 p-2 mb-1" style="background: #fff">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" <?= (!empty($question) && $question->row()->answers == 'yes') ? 'checked' : '' ?> value="yes" name="yes_no_radio" role="switch" id="yes-no-radio-yes">
                                    <label class="form-check-label" for="yes-no-radio-yes"> Yes</label>
                                </div>
                            </div>

                            <div class="col-10" style="background: #fff">
                                <div class="form-group">
                                    <label class="mt-2 mb-2" for="description">Description</label>
                                    <textarea id="yes_no_description" class="form-control"><?= (!empty($question)) ? $question->row()->description : '' ?></textarea>
                                </div>
                            </div>
                            <?php if (!empty($question)) : ?>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label></label>
                                        <a href="admin/ebooks/highlight_text/<?= $question->row()->topic_id ?>/<?= $question->row()->id ?>" class="book-highlight-btn mt-3">
                                            <img src="assets/img/admin_img/home-2.svg" style="width: 32px; margin-top: 20px">
                                            <br>
                                            <span class="mt-1" style="display: inline-block;">Book Highlight</span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-12 pt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <button onclick="insert('yes_no')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Insert</button>
                                    </div>
                                    <div class="col-3">
                                        <button onclick="disable('yes_no')" class="border-radius-50 btn-gray" style="width: 100%; height: 38px">Disable</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Yes and No box -->

                        <!-- Drag and Drop box -->
                        <div class="row mt-3 form-question" id="drag_and_drop_box">

                            <div class="col-12">
                                <div class="row">
                                    <div class="mt-3 col-8 image-section">
                                        <div class="form-group">
                                            <div class="">
                                                <label for="drag_and_drop_image" class="form-label">Image</label>
                                                <button data-bs-toggle="modal" data-bs-target="#gallery-modal" id="image-drag-and-drop-btn" question_type="three_answer" class="border-radius-50 btn-pink gallery-btn" style="width: 100%; height: 38px">Gallery</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 pt-4 mt-3">
                                        <button onclick="upload_image('drag_and_drop')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Upload</button>
                                    </div>
                                    <div class="col-12 image-area">
                                        <?php if (!empty($question) && $question->row()->question_type == 'drag_and_drop') : ?>
                                            <div class="col-12 image-div mt-4">
                                                <div class="chart-div">
                                                    <?php for ($j = 1; $j < 9; $j++) : ?>
                                                        <div>
                                                            <?php for ($i = 1; $i < 15; $i++) : ?>

                                                                <div id="point<?= $j . '_' . $i ?>" class="image-points" row_number="<?= $j ?>" column_number="<?= $i ?>" selected_value="0"></div>
                                                            <?php endfor; ?>
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                                <?php if (!empty($question->row()->image)) : ?>
                                                    <img src="<?= $question->row()->image; ?>" style="width: 700px; height: 400px; z-index: 99">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <div class="form-group">
                                    <label for="question" class="mb-2">Question</label>
                                    <textarea id="drag_and_drop_textarea" style="border-radius: 20px" class="form-control"><?= (!empty($question)) ? $question->row()->question : '' ?></textarea>
                                </div>
                            </div>
                            <?php for ($i = 1; $i < 5; $i++) : ?>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="mt-3 mb-3" for="answer_<?= $i ?>"><input id="answer_<?= $i ?>" type="radio" class="radio-textarea" name="answer_radio" value="<?= $i ?>"> Answer <?= $i ?></label>
                                    </div>
                                </div>
                            <?php endfor; ?>
                            <div class="col-10">
                                <div class="form-group">
                                    <label class="mt-2 mb-2" for="description">Description</label>
                                    <textarea id="drag_and_drop_description" style="border-radius: 20px" class="form-control"><?= (!empty($question)) ? $question->row()->description : '' ?></textarea>
                                </div>
                            </div>
                            <?php if (!empty($question)) : ?>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label></label>
                                        <a href="admin/ebooks/highlight_text/<?= $question->row()->topic_id ?>/<?= $question->row()->id ?>" class="book-highlight-btn mt-3">
                                            <img src="assets/img/svg/book-black.svg" style="width: 32px; margin-top: 20px">
                                            <br>
                                            <span class="mt-1" style="display: inline-block;">Book Highlight</span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-12 pt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <button onclick="insert('drag_and_drop')" class="border-radius-50 btn-pink" style="width: 100%; height: 38px">Insert</button>
                                    </div>
                                    <div class="col-3">
                                        <button onclick="disable('drag_and_drop')" class="border-radius-50 btn-gray" style="width: 100%; height: 38px">Disable</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Drag and Drop box -->
                    </div>

                </div>
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

<div class="modal fade modal-xl" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title gray-color" id="exampleModalLabel">
                    Gallery
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Select Gallery: </label>
                    <select class="form-select border-radius-50" id="gallery">
                        <option value="">...</option>
                        <option value="3d">3d</option>
                        <option value="dashboard">dashboard</option>
                        <option value="sign">sign</option>
                        <option value="situation">situation</option>
                    </select>
                    <input type="hidden" id="gallery-question-type">
                </div>
                <hr>
                <div class="col-12" id="gallery-list">
                    <?php if (!empty($images)) : ?>
                        <div class="row">
                            <?php foreach ($images->result_array() as $image) : ?>
                                <div class="col-4 p-3 image-gallery-div image-<?= $image['folder'] ?>">
                                    <div class="col-12 p-3" style="border: 1px solid #aaa; cursor: pointer;">
                                        <img class="image-gallery" src="<?= base_url() . 'assets/img/images_list/' . $image['image_name'] ?>" style="width: 100%; max-height: 500px;">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#languages').on('change', function() {
            var opt = $(this).val();
            console.log(opt);
            if (opt == 'new') {
                $('#language-modal').modal("show");
                $("#languages").val('Dutch').change();
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
                        window.location.reload();
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

        var first_language = $("#languages").val();
        show_topic_by_language(first_language);

        upload_image = function(question_type = null) {
            if (question_type == null) {
                alert('Please select a type of questions');
            }

            var form = new FormData();
            form.append("topic_id", $('#topic-id').val());
            form.append("language_id", $('#languages').val());
            form.append("question_id", $('#question-id').val());
            form.append("categories", $('#categories').val());
            form.append("question_type", $('#question_type').val());
            form.append("image", $("#question-image").val());

            $.ajax({
                url: 'admin/questions/upload_image',
                type: "post",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function(result) {
                    var json = $.parseJSON(result);

                    if (json.success) {
                        window.location.href = json.message;
                    } else {
                        alert(json.message);
                    }
                }
            });
        }

        const image_points = new Map();
        $('.image-points').on('click', function() {
            var id = $("input[name='answer_radio']:checked").val();
            var selected_value = $(this).attr('selected_value');
            var row = $(this).attr('row_number');
            var column = $(this).attr('column_number');
            if (selected_value == 0) {
                $(this).addClass('image-points-selected');
                image_points.set("answer_" + id, [row, column]);
                $(this).attr('selected_value', 1)
            } else {
                $(this).removeClass('image-points-selected');
                image_points.delete("answer_" + id);
                $(this).attr('selected_value', 0)
            }

            console.log(image_points);
        })

        $('.radio-textarea').on('click', function() {
            $('.chart-div').show();
            var id = $(this).val();
            $('#answer_' + id).attr('disabled', false);
            $('.image-points').removeClass('image-points-selected');
            if (image_points.has("answer_" + id)) {
                var positions = image_points.get("answer_" + id);
                $('#point' + positions[0] + '_' + positions[1]).addClass('image-points-selected');
            } else {
                <?php if (!empty($question)) : ?>

                    <?php
                    $json_answers = '';
                    $image_points = [];
                    ?>
                    <?php
                    if (!empty($question->row()->answers) && $question->row()->question_type == 'drag_and_drop') : ?>

                        <?php $json_answers = json_decode($question->row()->answers, true); ?>

                        <?php foreach ($json_answers as $key => $value) : ?>
                            image_points.set("<?= $key ?>", [<?= $value[0] ?>, <?= $value[1] ?>]);
                        <?php endforeach; ?>
                        console.log(image_points);
                        if (image_points.has("answer_" + id)) {
                            var positions = image_points.get("answer_" + id);
                            $('#point' + positions[0] + '_' + positions[1]).addClass('image-points-selected');
                            $('#point' + positions[0] + '_' + positions[1]).attr('selected_value', 1)
                        }

                    <?php endif; ?>
                <?php endif; ?>
            }

        })

        <?php if (!empty($question)) : ?>
            $('#<?= $question->row()->question_type ?>_box').show().css({
                "display": "flex"
            }).siblings().hide();
        <?php endif; ?>

        $('#question_type .question_type_options').hide();
        $('#categories').on('change', function() {
            var category = $(this).val();
            $('#question_type .question_type_options').hide();
            $('#question_type').val('0').change();
            $('.questions_box > div').hide();
            if (category != 0) {
                $('#question_type .question_type_options').hide();
                $('#question_type .category_' + category).show();
            }

        })

        $('#question_type').on('change', function() {
            var question_type = $(this).val();
            $('#' + question_type + '_box').show().css({
                "display": "flex"
            }).siblings().hide();

        })

        insert = function(question_type = null) {
            if (question_type == null) {
                alert('Please select a type of questions');
            }

            var form = new FormData();
            form.append("topic_id", $('#topic-id').val());
            form.append("language_id", $('#languages').val());
            form.append("id", $('#question-id').val());
            form.append("categories", $('#categories').val());
            form.append("question_type", $('#question_type').val());
            form.append("question", $('#' + question_type + '_textarea').val());
            form.append("description", $('#' + question_type + '_description').val());

            if (question_type == 'three_answer') {
                form.append("answers", $("input[name='three_answers_radio']:checked").val());
                form.append("answer_option", $("input[name='answer_option[]']").map(function() {
                    return $(this).val();
                }).get());
            }

            if (question_type == 'abc') {
                form.append("answers", $("input[name='abc_radio']:checked").val());
                form.append("answer_option", $("input[name='answer_option_abc[]']").map(function() {
                    return $(this).val();
                }).get());
            }

            if (question_type == 'number') {
                form.append("answers", $("#number-select").val());
            }

            if (question_type == 'yes_no') {
                form.append("answers", $("input[name='yes_no_radio']:checked").val());
            }

            var image_points_objects = {}
            if (question_type == 'drag_and_drop') {
                image_points.forEach(function(value, key) {
                    image_points_objects[key] = value
                })
                form.append("answers", JSON.stringify(image_points_objects));
            }

            $.ajax({
                url: 'admin/questions/insert',
                type: "post",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function(result) {
                    var json = $.parseJSON(result);

                    if (json.success) {
                        window.location.href = json.message;
                    } else {
                        alert(json.message);
                    }
                }
            });
        }

        $('#gallery').on('change', function() {
            var folder = $(this).val()
            $('.image-gallery-div').hide()
            $('.image-' + folder).show();
        })

        $('.gallery-btn').on('click', function() {
            var type = $(this).attr('question_type');
            $('#gallery-question-type').val(type);
        })

        $('.image-gallery').on('click', function() {
            var src = $(this).attr('src');
            var question_type = $('#question_type').val();

            $('.image-area').html(
                '<div class="col-12 image-div mt-4">' +
                '<input type="hidden" id="question-image" value="' + src + '">' +
                '<img src="' + src + '" style="width: 500px; z-index: 99">' +
                '</div>'
            );

            $('#gallery-modal').modal('hide');
        })

    })
</script>