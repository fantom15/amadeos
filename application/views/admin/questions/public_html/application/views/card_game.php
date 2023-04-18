<style>
    label {
        background-color: #fff;
    }

    input[type="radio"] {
        opacity: 0;
    }

    .questions-sentence {
        display: none;
        font-size: 14px;
    }

    .form-check-label {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 5px;
        margin-top: 10px;
        font-size: 14px;
    }

    .card-game-image:hover {
        transform: scale(1.1);
    }

    .input-color {
        background-color: #31bd7e;
        color: #fff;
    }

    .unclickable {
        pointer-events: none;
    }
</style>
<div style="padding: 15px;">
    <div class="container" style="background: #fff; border-radius: 5px;">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1" style="text-align: center; margin-top: 20px;">
                <h3 style="text-align: center;">SURVEY INSTRUCTIONS</h3>
                <p id="modal-btn" style="text-align: left;">
                    In this section, you’ll see some pictures with statements concealed within card frames.
                    Attempt to give an answer to each of the statements on a scale of Strongly Disagree to Strongly
                    Agree by clicking on each picture to reveal the concealed statement. It takes
                    approximately 5mins to complete. When completed, click on continue button to proceed.
                </p>
            </div>
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 my-2">
                <div class="row">
                    <?php $images = [
                        'card-1.jpeg', 'card-2.jpeg', 'card-3.png', 'card-4.png',
                        'card-5.jpeg', 'card-6.png', 'card-7.webp', 'card-8.webp',
                        'card-9.png'
                    ]; ?>
                    <?php for ($i = 1; $i < 10; $i++) : ?>
                        <div class="col-md-4 col-lg-4 mb-3">
                            <img class="card-game-image" id="image-<?= $i ?>" question_id="<?= $i ?>" src="assets/img/<?= $images[$i - 1] ?>" style="width: 100%;background: #fff; border: 1px solid #ccc; padding: 5px">
                        </div>
                    <?php endfor; ?>

                    <div class="col-12 py-3" style="text-align: center;">
                        <a class="btn main-btn" href="video">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-lg" id="questions-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <input type="hidden" id="question-id">
                <div class="col-10 offset-1">
                    <img id="modal-img" src="assets/img/bg.jpeg" style="width: 100%;">
                </div>
                <div class="col-10 offset-1 p-2 mt-3" style="border: 1px solid #ddd; border-radius: 5px">
                    <p class="questions-sentence mb-0" id="question-1">
                        1- I find participating in the Global Goals Jam helpful in raisıng awareness of the Sustainable Development Goals and helping to build a sense of commitment to social responsibility:
                    </p>
                    <p class="questions-sentence mb-0" id="question-2">
                        2- I think that the Global Goals Jam fosters collaboration and engagement across different sectors, disciplines, and backgrounds:
                    </p>
                    <p class="questions-sentence mb-0" id="question-3">
                        3- The Global Goals Jam has over the years had a positive impact on local communities and helped to address complex challenges at the local levels:
                    </p>
                    <p class="questions-sentence mb-0" id="question-4">
                        4- I feel that the Global Goals Jam encourages and supports the development of innovative and creative solutions for the SDG’s at the local level which can translate to addressing global challenges:
                    </p>
                    <p class="questions-sentence mb-0" id="question-5">
                        5- Peer-peer review and feedback process can be can be leveraged upon as a helpful tool to promote collaboration amongst participants in the Global Goals Jam community:
                    </p>
                    <p class="questions-sentence mb-0" id="question-6">
                        6- Peer-peer review and feedback process is very essential for the Global Goals Jam community members to help in learning, refining and improving of project ideas and concepts: </p>
                    <p class="questions-sentence mb-0" id="question-7">
                        7- I feel comfortable giving and receiving peer feedback:
                    </p>
                    <p class="questions-sentence mb-0" id="question-8">
                        8- I feel that peer-peer review and feedback should be adopted as part of the Global Goals Jam members growth and development process:
                    </p>
                    <p class="questions-sentence mb-0" id="question-9">
                        9- Peer-peer review and feedback process during and after the Global Goals Jam events can help to gain better understanding of the perspectives of others in a project thus improving the quality of the final projects:
                    </p>
                </div>
                <div class="col-10 offset-1" style="text-align: center;">
                    <label class="form-check-label" for="first-radio">
                        <input class="form-check-input" value="Strongly disagree" type="radio" name="question_options" id="first-radio">
                        Strongly Disagree
                    </label>
                    <label class="form-check-label" for="second-radio">
                        <input class="form-check-input" value="Disagree" type="radio" name="question_options" id="second-radio">
                        Disagree
                    </label>
                    <label class="form-check-label" for="third-radio">
                        <input class="form-check-input" value="Natural" type="radio" name="question_options" id="third-radio">
                        Neutral
                    </label>
                    <label class="form-check-label" for="forth-radio">
                        <input class="form-check-input" value="Agree" type="radio" name="question_options" id="forth-radio">
                        Agree
                    </label>
                    <label class="form-check-label" for="fifth-radio">
                        <input class="form-check-input" value="Strongly agree" type="radio" name="question_options" id="fifth-radio">
                        Strongly Agree
                    </label>

                    <div class="clearfix"></div>
                    <div class="mt-4" style="text-align: center;">
                        <button class="btn main-btn" id="submit-btn">Submit</button>
                        <br>
                        <p class="error-msg" style="color: #f00; display: none;"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.card-game-image').on('click', function() {
            var src = $(this).attr('src');
            var question_id = $(this).attr('question_id');
            $('#question-id').val(question_id);
            $('#question-' + question_id).show().siblings().hide();
            $('#modal-img').attr('src', src);
            $('.error-msg').text('').hide();
            $('input[name="question_options"]').prop('checked', false);
            $('.form-check-label').removeClass('input-color');
            $('#questions-modal').modal('show');
        })

        $('.form-check-input').on('click', function() {
            $(this).parent().addClass('input-color').siblings().removeClass('input-color');
            var t = $('input[name="question_options"]:checked').val();
        })

        $('#submit-btn').on('click', function() {
            var question_id = $('#question-id').val();
            $.post('card_game/insert', {
                    'question_id': question_id,
                    'answer': $('input[name="question_options"]:checked').val()
                },
                function(result) {
                    var json = $.parseJSON(result);
                    if (json.success) {
                        $('#image-' + question_id).addClass('unclickable');
                        $('#questions-modal').modal('hide');
                    } else {
                        $('.error-msg').text(json.message).show();
                    }
                }
            )
        })
    })
</script>