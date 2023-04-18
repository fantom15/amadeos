<style>
    .draggable {
        position: absolute;
        width: 50px;
        height: 50px;
        border: 2px solid #bbb;
        z-index: 100;
        margin: auto;
        color: #bbb;
    }

    #draggable-1 {
        left: 20%;
    }

    #draggable-2 {
        left: 40%;
    }

    #draggable-3 {
        left: 60%;
    }

    #draggable-4 {
        left: 80%;
    }

    .draggable span {
        margin-top: 13px;
        display: inline-block;
    }

    @media (max-width: 991px) {
        .draggable {
            width: calc(100%/14);
            height: 25px;
        }

        .draggable span {
            margin-top: 0;
            display: inline-block;
        }
    }

    .draggable-border-success {
        border-color: green !important;
        color: green !important;
    }

    .draggable-border-faile {
        border-color: red !important;
        color: red !important;
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
<script src="assets/js/jquery.draggableTouch.js"></script>

<?php
$answers = json_decode($question->answers, true);
$row_cloumn = [];
foreach ($answers as $key => $value) {
    $row_cloumn[] = $value[0] . '-' . $value[1];
}

$questions_count = $this->session->userdata('questions_count');
$next = array_search($question->id, $questions_count) + 1;
$lang = $this->session->userdata('site_lang');
?>
<div class="col-md-12 question-image">
    <div class="chart-div">
        <?php for ($j = 1; $j < 9; $j++) : ?>
            <div>
                <?php for ($i = 1; $i < 15; $i++) : ?>
                    <?php $goal = array_search($j . '-' . $i, $row_cloumn) + 1 ?>
                    <div id="point<?= $j . '_' . $i ?>" class="image-points <?= (in_array($j . '-' . $i, $row_cloumn)) ? 'image-points-border goal-' . $goal : '' ?>" row_number="<?= $j ?>" column_number="<?= $i ?>" selected_value="0"></div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
    <img src="assets/img/questions/<?= $question->image ?>">
</div>
<div class="col-md-12 pt-3 pb-3">
    <div class="row">
        <div class="col-1 text-center"><strong style="font-size: 20px"><?= $next ?>.</strong></div>
        <div class="col-11 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
            <p style="font-size: 1rem"><?= $question->question ?></p>
        </div>
    </div>
</div>

<div class="col-md-8 offset-md-2 pb-5 position-relative">
    <div class="row">
        <div class="draggable-section position-relative">
            <div class="draggable text-center" goal_id="1" id="draggable-1"><span>1</span></div>
        </div>
        <div class="draggable-section position-relative">
            <div class="draggable text-center" goal_id="2" id="draggable-2"><span>2</span></div>
        </div>
        <div class="draggable-section position-relative">
            <div class="draggable text-center" goal_id="3" id="draggable-3"><span>3</span></div>
        </div>
        <div class="draggable-section position-relative">
            <div class="draggable text-center" goal_id="4" id="draggable-4"><span>4</span></div>
        </div>
    </div>
</div>


<div class="col-md-12 pt-3 px-3" style="display: <?= ($user_answer) ? 'block' : 'none' ?>; text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
    <p style="font-size: 0.8rem">
        <span style="color: #f00; font-size: 18px"><?= $this->lang->line('description') ?></span> <?= $question->description ?>
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

<script>
    $(document).ready(function() {

        <?php $json_answer = json_decode($user_answer->answer, true); ?>
        <?php for ($i = 1; $i < 5; $i++) : ?>
            <?php if (isset($json_answer['goal_' . $i])) : ?>
                <?php if ($json_answer['goal_' . $i] == $i) : ?>
                    $('.goal-' + <?= $i ?>).addClass('draggable-border-success');
                <?php else : ?>
                    $('.goal-' + <?= $i ?>).addClass('draggable-border-faile');
                <?php endif; ?>
            <?php endif; ?>
        <?php endfor; ?>

        $('.draggable').draggableTouch();

        var goalPositions = new Map();
        for ($i = 1; $i < 5; $i++) {
            if ($(".goal-" + $i).length > 0) {
                var goalLeft = $(".goal-" + $i).offset().left;
                var goalTop = $(".goal-" + $i).offset().top;
                goalLeft = parseInt(goalLeft);
                goalTop = parseInt(goalTop);
                var left = [goalLeft - 5, goalLeft - 4, goalLeft - 3, goalLeft - 2, goalLeft - 1, goalLeft, goalLeft + 1, goalLeft + 2, goalLeft + 3, goalLeft + 4, goalLeft + 5];
                var top = [goalTop - 5, goalTop - 4, goalTop - 3, goalTop - 2, goalTop - 1, goalTop, goalTop + 1, goalTop + 2, goalTop + 3, goalTop + 4, goalTop + 5];

                goalPositions.set("goal_" + $i, [left, top]);
            }
        }

        console.log(goalPositions);


        $(".draggable").bind("dragend", function(e) {

            var id = $(this).attr('goal_id')
            var dragLeft = $(this).offset().left;
            var dragTop = $(this).offset().top;

            dragLeft = parseInt(dragLeft);
            dragTop = parseInt(dragTop);
            console.log(dragLeft + '-' + dragTop);
            _checkPosition(id, dragLeft, dragTop);
        });

        var answers = new Map();

        function _checkPosition(draggable = null, left = 0, top = 0) {
            for ($i = 1; $i < 5; $i++) {
                if (goalPositions.has("goal_" + $i)) {
                    var positions = goalPositions.get("goal_" + $i);
                    if (positions[0].includes(left)) {
                        if (positions[1].includes(top)) {
                            if (draggable == $i) {
                                console.log('equal');
                                $('#draggable-' + draggable).addClass('draggable-border-success');
                                answers.set("goal_" + $i, draggable);
                                insert_answer($i, 'correct');
                            } else {
                                console.log('not equal');
                                $('#draggable-' + draggable).addClass('draggable-border-faile');
                                answers.set("goal_" + $i, draggable);
                                insert_answer($i, 'incorrect');
                            }
                            $('#draggable-' + draggable).draggableTouch("disable");
                        }
                    } else {
                        console.log($i + ' false');
                    }
                }
            }


        }

        insert_answer = function(i, result) {
            $.post('user/questions/drag_and_drop_answer', {
                    'question_id': <?= $question->id ?>,
                    'option_id': i,
                    'result': result
                },
                function(result) {
                    var json = $.parseJSON(result);
                    console.log(json.message);
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

    });
</script>