<style>
    .input-number-question {
        border-radius: 20px;
    }

    .button-number {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        font-size: 13px;
        border: 1px solid #ced4da;
    }

    .profile-content-parent {
        padding: 5px;
        background: #6371F1;
        width: 250px;
        height: 70px;
        margin: auto;
    }

    #profile-content {
        background: #6371F1;
        border: 0;
        box-sizing: border-box;
        box-shadow: inset 0 0 0 2px #6371F1;
        color: #f45e61;
        font-size: inherit;
        font-weight: 700;
        position: relative;
        vertical-align: middle;
        width: auto;
        height: 60px;
    }

    #profile-content::before,
    #profile-content::after {
        box-sizing: inherit;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
    }

    #profile-content {
        -webkit-transition: color 0.25s;
        transition: color 0.25s;
    }

    #profile-content::before,
    #profile-content::after {
        border: 4px solid transparent;
        width: 0;
        height: 0;
    }

    #profile-content::before {
        top: 0;
        left: 0;
    }

    #profile-content::after {
        bottom: 0;
        right: 0;
    }

    .profile-content {
        color: Teal !important;
    }

    .profile-content::before,
    .profile-content::after {
        width: 100% !important;
        height: 100% !important;
    }

    .profile-content::before {
        border-top-color: white !important;
        border-right-color: white !important;
        -webkit-transition: width 25s ease-out, height 5s ease-out 25s;
        transition: width 25s ease-out, height 5s ease-out 25s;
    }

    .profile-content::after {
        border-bottom-color: white !important;
        border-left-color: white !important;
        -webkit-transition: border-color 0s ease-out 30s, width 25s ease-out 30s, height 5s ease-out 55s;
        transition: border-color 0s ease-out 30s, width 25s ease-out 30s, height 5s ease-out 55s;
    }
</style>


<?php
$answer_property = ['border' => '', 'description_text' => '', 'description_css' => '', 'answer' => ''];
if ($user_answer) {
    $answer_property['answer'] = $user_answer->answer;
    if ($user_answer->status == 'true') {
        $answer_property['border'] = 'answer-success';
        $answer_property['description_text'] = $this->lang->line('perfect') . '!';
        $answer_property['description_css'] = 'color: #5BBEB7';
    } elseif ($user_answer->status == 'false') {
        $answer_property['border'] = 'answer-faile';
        $answer_property['description_text'] = $this->lang->line('remember') . '!';
        $answer_property['description_css'] = 'color: #EC645E';
    }
}

$questions_count = $this->session->userdata('questions_count');
$next = array_search($question->id, $questions_count) + 1;
$lang = $this->session->userdata('site_lang');
?>
<div class="col-12">
    <div class="col-md-12 question-image">
        <img src="assets/img/questions/question-test.png">
    </div>
    <div class="col-md-12 p-3">
        <div class="row">
            <div class="col-1 text-center"><strong style="font-size: 20px"><?= $next ?>.</strong></div>
            <div class="col-11 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
                <p style="font-size: 1rem"><?= $question->question ?> </p>
            </div>
        </div>
    </div>
    <div class="col-md-12 px-3">
        <?php if ($question->question_type == 'three_answer') : ?>
            <?php
            $answers = null;
            if (!empty($question->answer_option)) {
                $answers = json_decode($question->answer_option);
            }
            ?>

            <?php if (!empty($answers)) : ?>
                <div class="row">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <?php
                        $border = null;
                        if ($question->answers == $answer_property['answer']) {
                            if ($answer_property['answer'] == $i + 1) {
                                $border = 'answer-success';
                            }
                        } else {
                            if ($answer_property['answer'] == $i + 1) {
                                $border = 'answer-faile';
                            }
                        }
                        ?>
                        <div class="col-md-6">
                            <div onclick="_checkAnswer(this, '<?= $i + 1 ?>')" class="answers <?= $border ?> col-12 pt-3 pb-3 text-center">
                                <label for="three_answer_<?= $i ?>" style="font-size: 0.8rem; margin: 5px 0"><?= $answers[$i] ?> </label>
                                <input class="form-control" type="radio" id="three_answer_<?= $i ?>" name="three_answer" value="<?= $answers[$i] ?>" style="display: none;">
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        <?php elseif ($question->question_type == 'abc') : ?>
            <?php
            $answers = null;
            $options = ['A', 'B', 'C'];
            if (!empty($question->answer_option)) {
                $answers = json_decode($question->answer_option);
            }
            ?>
            <?php if (!empty($answers)) : ?>
                <div class="row">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <?php
                        $border = null;
                        if ($question->answers == $answer_property['answer']) {
                            if ($answer_property['answer'] == $options[$i]) {
                                $border = 'answer-success';
                            }
                        } else {
                            if ($answer_property['answer'] == $options[$i]) {
                                $border = 'answer-faile';
                            }
                        }
                        ?>
                        <div class="col-4">
                            <div onclick="_checkAnswer(this, '<?= $options[$i] ?>')" class="answers <?= $border ?> col-6 offset-3 px-3 text-center">
                                <label for="abc_<?= $i ?>" style="font-size: 0.8rem; margin: 5px 0"><?= $answers[$i] ?> </label>
                                <input class="form-control" type="radio" id="abc_<?= $i ?>" name="abc" value="<?= $answers[$i] ?>" style="display: none;">
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>

        <?php elseif ($question->question_type == 'yes_no') : ?>
            <?php $answers = ['yes', 'no']; ?>
            <div class="row">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <?php
                    $border = null;
                    if ($question->answers == $answer_property['answer']) {
                        if ($answer_property['answer'] == $answers[$i]) {
                            $border = 'answer-success';
                        }
                    } else {
                        if ($answer_property['answer'] == $answers[$i]) {
                            $border = 'answer-faile';
                        }
                    }
                    ?>
                    <div class="col-6">
                        <div onclick="_checkAnswer(this, '<?= $answers[$i] ?>')" class="answers <?= $border ?> col-4 offset-4 px-3 text-center">
                            <label for="yes_no_<?= $i ?>" style="font-size: 0.8rem; margin: 5px 0"><?= strtoupper($answers[$i]) ?> </label>
                            <input class="form-control" type="radio" id="yes_no_<?= $i ?>" name="yes_no" value="<?= $answers[$i] ?>" style="display: none;">
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

        <?php elseif ($question->question_type == 'number') : ?>
            <div class="row">
                <div class="col-6 px-3">
                    <div class="input-group">
                        <input type="text" class="form-control input-number-question" value="<?= $answer_property['answer'] ?>" placeholder="Answer" aria-label="Answer" aria-describedby="button-number">
                        <?php if (empty($answer_property['answer'])) : ?>
                            <button onclick="_checkAnswer(this, 'number_type')" class="btn btn-light button-number" type="button" id="button-number">Check Answer</button>
                        <?php endif; ?>
                    </div>
                    <p id="number-answer" style="display: <?= ($answer_property['answer']) ? 'block' : 'none' ?>; margin-left: 15px;">
                        <?= $this->lang->line('correct_answer'); ?>: <?= $question->answers ?>
                    </p>
                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="col-md-12 pt-3 px-3" id="description" style="display: block; text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
        <p style="font-size: 0.8rem">
            <span id="status-description" style="font-size: 18px; <?= $answer_property['description_css'] ?>"><?= $answer_property['description_text'] ?></span> The green symbol indicates a low beam. The blue symbol stands for the main beam. The yellow symbol indicates the rear fog light and the two green arrows indicate the direction indicator.
        </p>
    </div>
    <div class="col-md-12 pb-4">
        <div class="profile-content-parent">
            <div id="profile-content">
                <?php if (isset($questions_count[$next])) : ?>
                    <div class="col-md-12 text-center">
                        <a onclick="next_question(<?= $question->topic_id ?>, <?= $question->id ?>, <?= $questions_count[$next] ?>)" id="next-btn" class="btn-pink" style="padding: 15px 80px; border-radius: 0; position: relative; cursor: pointer; display: inline-block; margin-top: 3px; z-index: 100000">
                            <?= $this->lang->line('next'); ?> <img src="assets/img/arrow-right.png" style="width: 16px; position: absolute; right: 15px; top: 20px">
                        </a>
                    </div>
                <?php else : ?>
                    <div class="col-md-12 text-center">
                        <a href="user/questions/finish_exam/<?= $question->topic_id ?>" id="next-btn" class="btn-pink" style="padding: 13px 80px; border-radius: 0; position: relative; cursor: pointer; display: inline-block; margin-top: 4px; z-index: 100000">
                            <?= $this->lang->line('finish'); ?> <img src="assets/img/arrow-right.png" style="width: 16px; position: absolute; right: 15px; top: 20px">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        _checkAnswer = function(e, answer = null) {
            if (answer == 'number_type') {
                answer = $('.input-number-question').val();
            }

            $.post('user/questions/answer', {
                    'id': <?= $question->id ?>,
                    'answer': answer
                },
                function(result) {
                    var json = $.parseJSON(result);

                    if (json.success) {
                        if (!json.answered) {
                            if (json.message) {
                                $(e).addClass('answer-success');
                                $('#status-description').text('<?= $this->lang->line('perfect') ?>!').css({
                                    "color": "#5BBEB7"
                                });
                            } else {
                                $(e).addClass('answer-faile');
                                $('#status-description').text('<?= $this->lang->line('remember') ?>!').css({
                                    "color": "#EC645E"
                                });
                            }

                            $('#description').show();
                        }

                    } else {
                        alert(json.message);
                    }
                }
            )
        }


        next_question = function(topic_id, question_id, next_question) {
            $.post('user/questions/next_question', {
                    'topic_id': topic_id,
                    'question_id': question_id,
                    'next_question': next_question
                },
                function(result) {
                    var json = $.parseJSON(result);
                    if (json.success) {
                        var url = '<?= base_url() ?>' + 'user/questions/' + topic_id + '/' + next_question;
                        window.location.href = url;
                    } else {
                        alert(json.message);
                    }
                }
            )
        }

        <?php if (isset($questions_count[$next])) : ?>
            setTimeout(function() {
                next_question(<?= $question->topic_id ?>, <?= $question->id ?>, <?= $questions_count[$next] ?>)
            }, 60000);
        <?php else : ?>
            setTimeout(function() {
                window.location.replace('user/questions/finish_exam/<?= $question->topic_id ?>')
            }, 60000);
        <?php endif; ?>

        $('#profile-content').addClass('profile-content');
    })
</script>